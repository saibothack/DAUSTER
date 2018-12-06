<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\State;
use App\Country;
use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all()->pluck('name', 'id');
        $countries = Country::all()->pluck('name', 'id');
        $user = User::where('id', '=', Auth::id())->firstOrFail();
        $address = Address::where('users_id', '=', Auth::id())->first();
        return view('addresses.client', compact('address', 'user', 'countries', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        $data = $request->all();
        $data['users_id'] = Auth::id();

        Address::create($data);

        return redirect()->route('address.index')
            ->with('flash_message',
                'Se agrego su dirección!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validation($request);

        Address::find($id)->update($request->all());

        return redirect()->route('address.index')
            ->with('flash_message',
                'Se modifico su dirección!');
    }

    private function validation(Request $request) {
        $this->validate($request, [
            'street' => 'required|string',
            'exterior' => 'required|string',
            'cp' => 'required|string',
            'location' => 'required|string',
            'countries_id' => 'required|int',
            'states_id' => 'required|int',
        ]);
    }
}
