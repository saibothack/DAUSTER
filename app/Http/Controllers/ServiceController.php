<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use App\Charge;
use App\Service;
use App\Vehicle;
use App\TypeCard;
use App\PaymentMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'usercomplete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Session::has('service'))
            return redirect('services/create/coordinates')
            ->withErrors('Su sessión expiro por favor intentelo nuevamente.');

        if (Session::get("service.paymentMethod") == "")
            return redirect('services/create/charges')
                ->withErrors('Seleccione un método de pago para poder continuar');

        $customMessages = [
            'required' => 'El campo :attribute es obligatorio.',
            'numeric' => 'El campo :attribute debe de ser un télefono valido.'
        ];

        $this->validate($request, [
            'companyName' => 'required|string',
            'name' => 'required|string',
            'surnames' => 'required|string',
            'phone' => 'required|numeric',
            'packages' => 'required|int',
            'companyNameDelivery' => 'required|string',
            'nameDelivery' => 'required|string',
            'surnamesDelivery' => 'required|string',
            'phoneDelivery' => 'required|numeric',
            'emailDelivery' => 'required|email',
            'arrivalDescriptionDelivery' => 'required|string'
        ], $customMessages);

        dd(Session::get('service'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    /*
     * Inicializa la pantalla con el mapa para seleccionar
     * los puntos para las entregas.
     **/
    public function coordinates() {
        Session::forget("service");
        return view('services.create-coordinates');
    }

    /*
     * Pantalla que realiza el calculo del servicio,
     * asi como la funcionalidad para agregar cargos.
     * */
    public function charges(Request $request, $id) {
        $vehicles = Vehicle::active()->pluck('name', 'id');
        $paymentMethods = PaymentMethods::userId(Auth::id())->get();

        foreach ($paymentMethods as $paymentMethod) {
            $paymentMethod->type_card = TypeCard::find($paymentMethod->type_cards_id);
        }

        $chargeOthers = array();

        $idPaymentMethods = "";

        if (Session::has('service')) {

            $idPaymentMethods = Session::get("service.paymentMethod");
            $idVehicle = Session::get("service.vehicle");
            $distance = Session::get("service.distance");
            $time = Session::get("service.time");

            if (Session::has("service.chargeOthers"))
                $chargeOthers = Session::get("service.chargeOthers");

            if (isset($request['paymentMethodId'])) {
                $idPaymentMethods = $request['paymentMethodId'];
                Session::put("service.paymentMethod", $idPaymentMethods);
            }

            if (isset($request['vehicle'])) {
                if ($idVehicle != intval($request['vehicle'])) {
                    $idVehicle = intval($request['vehicle']);
                    $total = $this->calculateCosts($distance, $time, $idVehicle);

                    foreach ($chargeOthers as $chargeOther) {
                        $total += intval($chargeOther['chargeOthersPrice']);
                    }
                } else {
                    $total = Session::get("service.total");
                }
            } else {
                $total = Session::get("service.total");
            }

            if ((isset($request['chargeOthersName'])) && (isset($request['chargeOthersPrice']))) {
                if (!isset($chargeOthers))
                    $i = 1;
                else
                    $i = (count($chargeOthers) + 1);

                $data = array(
                    'chargeOthersName' => $request['chargeOthersName'],
                    'chargeOthersPrice' => $request['chargeOthersPrice'],
                    'chargeOthersDescription' => $request['chargeOthersDescription']
                );

                $chargeOthers[$i] = $data;
                $total += intval($request['chargeOthersPrice']);
            }

            if (isset($request['idChargeOthers'])) {
                if ($request['idChargeOthers'] != "")
                    if (in_array(intval($request['idChargeOthers']), $chargeOthers)) {
                        $total -= intval($chargeOthers[intval($request['idChargeOthers'])]['chargeOthersPrice']);
                        unset($chargeOthers[intval($request['idChargeOthers'])]);
                    }
            }

            Session::put("service.distance", $distance);
            Session::put("service.time", $time);
            Session::put("service.total", $total);
            Session::put("service.vehicle", $idVehicle);
            Session::put("service.chargeOthers", $chargeOthers);
        } else {

            if (!isset($request['distance']))
                return redirect('services/create/coordinates');


            $idVehicle = 1;
            $distance = ($request['distance'] / 1000);
            $time = ($request['time']/ 60);
            $coordinates = $request['coordinates'];
            $total = $this->calculateCosts($distance, $time, $idVehicle);

            Session::put("service.distance", $distance);
            Session::put("service.time", $time);
            Session::put("service.coordinates", $coordinates);
            Session::put("service.subtotal", $total);
            Session::put("service.total", $total);
            Session::put("service.vehicle", $idVehicle);
            Session::put("service.paymentMethod", $idPaymentMethods);
        }

        return view('services.create-charges', compact('distance', 'time',
            'total', 'vehicles', 'idVehicle', 'chargeOthers', 'paymentMethods', 'idPaymentMethods'));
    }

    /**
     * Formulario para los datos del las entregas
     */
    public function deliveries() {
        if (!Session::has('service'))
            return redirect('services/create/coordinates');

        if (Session::get("service.paymentMethod") == "")
            return redirect('services/create/charges')
                ->withErrors('Seleccione un método de pago para poder continuar');

        $vehicle = Vehicle::findOrFail(Session()->get('service.vehicle', '0'));
        return view('services.create-deliveries', compact('vehicle'));


    }

    public function payments() {}
    public function tracking() {}

    private function calculateCosts($distance, $time, $idVehicle) {

        $costKilometre = Charge::where([
            ["status", 1],
            ["default", 1],
            ["vehicles_id", $idVehicle],
        ])->get()[0]->charge;

        $costTime = Charge::where([
            ["status", 1],
            ["default", 2],
            ["vehicles_id", $idVehicle],
        ])->get()[0]->charge;

        $costOthers = Charge::where([
            ["status", 1],
            ["default", 0],
            ["vehicles_id", $idVehicle],
        ])->get();

        $totalCost = ($distance * $costKilometre);
        $totalCost = $totalCost + ($time * $costTime);

        foreach ($costOthers as $cost) {
            $totalCost = ($totalCost + $cost->charge);
        }

        return $totalCost;
    }
}
