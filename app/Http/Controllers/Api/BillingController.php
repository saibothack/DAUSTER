<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Billing;
use Illuminate\Support\Facades\Auth;
use Validator;

class BillingController extends Controller
{
    public $successStatus = 200;

    public function get() {
        $billing = Billing::where('users_id', '=', Auth::id())->first();
        return response()->json($billing, $this-> successStatus);
    }

    public function set(Request $request) {
        $idSearch = 0;
        if (Billing::where('users_id', '=', Auth::id())->count() != 0) {
            $idSearch = Billing::where('users_id', '=', Auth::id())->first()->id;
        }

        $validator = Validator::make($request->all(), [
            'RFC' => 'required|string|unique:billings,RFC,'. $idSearch,
            'name' => 'required|string',
            'street' => 'required|string',
            'exterior' => 'required|string',
            'cp' => 'required|string',
            'location' => 'required|string',
            'colony' => 'required|string',
            'city' => 'required|string',
            'countries_id' => 'required|int',
            'states_id' => 'required|int',
        ]);

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors()
            );

            return response()->json($data, 401);
        }

        $data = $request->all();

        if (Billing::where('users_id', '=', Auth::id())->count() == 0) {
            $data['users_id'] = Auth::id();
            Billing::create($data);
        } else {
            $billing = Billing::where('users_id', '=', Auth::id())->first();
            Billing::find($billing->id)->update($request->all());
        }

        $data = array(
            'success' => true
        );

        return response()->json($data, $this->successStatus);
    }
}
