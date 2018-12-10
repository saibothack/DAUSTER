<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Vehicle;
use Illuminate\Http\Request;

class ChargeController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $charges = Charge::active()->parent($request->get('vehicles'))->search($request->get('search'))->paginate(10);

        foreach ($charges as $charge) {
            $vehicles = Vehicle::where("id", $charge->vehicles_id)->get();
            foreach ($vehicles as $vehicle) {
                $charge['vehicle'] = $vehicle->name;
            }
        }

        $vehicles = Vehicle::active()->get();

        return view('charges.index', compact('charges', 'vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = Vehicle::active()->pluck('name', 'id');
        return view('charges.create', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->flash();

        $this->validate($request, [
            'vehicles' => 'required|int|min:1',
            'name' => 'required|string|max:255',
            'charge' => 'required|int|max:255',
        ]);

        $data = array(
            'vehicles_id' => $request['vehicles'],
            'name' => $request['name'],
            'charge' => $request['charge'],
            'status' => 1,
        );

        Charge::create($data);

        return redirect()->route('charges.index')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function show(Charge $charge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicles = Vehicle::active()->pluck('name', 'id');

        $charge=Charge::find($id);
        return view('charges.edit', compact('charge', 'vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'vehicles' => 'required|int|min:1',
            'name' => 'required|string|max:255',
            'charge' => 'required|int|max:255',
        ]);

        $data = array(
            'vehicles_id' => $request['vehicles'],
            'name' => $request['name'],
            'charge' => $request['charge']
        );

        Charge::find($id)->update($data);

        return redirect()->route('charges.index')
            ->with('flash_message',
                'Se modifico su registro!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = array(
            'status' => 0
        );

        Charge::find($id)->update($data);

        return redirect()->route('charges.index')
            ->with('flash_message',
                'Se elimino su registro!');
    }
}
