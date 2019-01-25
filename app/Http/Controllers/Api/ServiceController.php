<?php

namespace App\Http\Controllers\Api;

use App\User;
use Validator;
use App\Charge;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public $successStatus = 200;

    public function Quotation(Request $request) {
        $validator = Validator::make($request->all(), [
            'distance' => 'required|numeric',
            'time' => 'required|numeric',
            'vehicles_id' => 'required|int'
        ]);

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors()
            );
            return response()->json($data, 401);
        }

        $distance = ($request['distance'] / 1000);
        $time = ($request['time']/ 60);

        $calc = $this->calculateCosts($distance, $time, $request["vehicles_id"]);
        return response()->json($calc, $this->successStatus);
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
}
