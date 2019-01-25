<?php

namespace App\Http\Controllers\Api;

use App\State;
use App\Vehicle;
use App\Country;
use App\KindPersons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogsController extends Controller
{
    public $successStatus = 200;

    public function getAllKindPersons() {
        $kindPersons = KindPersons::active()->get();
        return response()->json($kindPersons, $this->successStatus);
    }

    public function getAllContries() {
        $contries = Country::active()->get();
        return response()->json($contries, $this->successStatus);
    }

    public function getAllStates() {
        $states = State::all();
        return response()->json($states, $this->successStatus);
    }

    public function getAllTypeCards() {
        $typeCard = TypeCard::active(true)->get();
        return response()->json($typeCard, $this->successStatus);
    }

    public function getAllVehicles() {
        $vehicle = Vehicle::active(true)->get();
        return response()->json($vehicle, $this->successStatus);
    }
}
