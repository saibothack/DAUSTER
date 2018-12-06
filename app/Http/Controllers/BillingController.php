<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\State;
use App\Billing;
use App\Country;
use Illuminate\Http\Request;

class BillingController extends Controller
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
        $billing = Billing::where('users_id', '=', Auth::id())->first();
        return view('billings.client', compact('billing', 'user', 'countries', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request, 0);
        $data = $request->all();
        $data['users_id'] = Auth::id();

        Billing::create($data);

        return redirect()->route('billings.index')
            ->with('flash_message',
                'Se agregaron sus datos de facturación!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Billing  $billing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validation($request, $id);

        Billing::find($id)->update($request->all());

        return redirect()->route('billings.index')
            ->with('flash_message',
                'Se agregaron sus datos de facturación!');
    }

    private function validation(Request $request, $id) {
        $this->validate($request, [
            'RFC' => 'required|string|unique:billings,RFC,'.$id,
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
    }

}
