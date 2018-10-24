<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use App\Charge;
use App\Service;
use App\Vehicle;
use App\Mail\sendMail;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
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


    public function createStepTwo(Request $request)
    {

        $distance = ($request['distance'] / 1000);
        $time = ($request['time']/ 60);

        $totalCost = $this->calculateCosts($distance, $time, 1);

        $totalCost = number_format($totalCost, 2, '.', ',');
        $totalCostArray = str_split($totalCost);
        $coordinates = $request['coordinates'];

        $vehicles = Vehicle::active()->get();

        $data["distance"] = number_format($distance, 2, '.', '');
        $data["time"] = sprintf('%02d:%02d', (int) $time, fmod($time, 1) * 60);
        $data["totalCost"] = $totalCost;
        $data["totalCostArray"] = $totalCostArray;
        $data["coordinates"] = $coordinates;

        $user = Auth::user();

        return view('services.create-step-two', compact('data', 'vehicles', 'user'));
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
}
