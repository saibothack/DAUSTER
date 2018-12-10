<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Charge;
use App\Service;
use App\Vehicle;
use App\Mail\sendMail;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

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

    }

    public function createStepTwo(Request $request)
    {

    }

    public function createStepThree()
    {
        return view('services.create-step-three');
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
        $chargeOthers = array();

        if (Session::has('service')) {

            $idVehicle = Session::get("service.vehicle");
            $distance = Session::get("service.distance");
            $time = Session::get("service.time");

            if (Session::has("service.chargeOthers"))
                $chargeOthers = Session::get("service.chargeOthers");

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
            Session::put("service.total", $total);
            Session::put("service.vehicle", $idVehicle);
        }

        return view('services.create-charges', compact('distance', 'time',
            'total', 'vehicles', 'idVehicle', 'chargeOthers'));
    }

    /**
     * Formulario para los datos del las entregas
     */
    public function deliveries() {
        if (!Session::has('service'))
            return redirect('services/create/coordinates');

        return view('services.create-deliveries');


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
