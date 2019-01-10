<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Address;
use Illuminate\Support\Facades\Auth;
use Validator;

class AddressController extends Controller
{
    public $successStatus = 200;

    public function get() {
        $address = Address::where('users_id', '=', Auth::id())->first();
        return response()->json($address, $this-> successStatus);
    }

    public function set(Request $request) {
        $validator = Validator::make($request->all(), [
            'street' => 'required|string',
            'exterior' => 'required|string',
            'cp' => 'required|string',
            'location' => 'required|string',
            'countries_id' => 'required|int',
            'states_id' => 'required|int'
        ]);

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors()
            );

            return response()->json($data, 401);
        }

        $data = $request->all();

        if (Address::where('users_id', '=', Auth::id())->count() == 0) {
            $data['users_id'] = Auth::id();
            Address::create($data);
        } else {
            $address = Address::where('users_id', '=', Auth::id())->first();
            Address::find($address->id)->update($request->all());
        }

        $data = array(
            'success' => true
        );

        return response()->json($data, $this->successStatus);
    }
}
