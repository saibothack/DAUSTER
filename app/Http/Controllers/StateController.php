<?php

namespace App\Http\Controllers;

use App\State;
use App\Country;
use Illuminate\Http\Request;

class StateController extends Controller
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
        $states = State::search($request->get('search'))->country($request->get('countries_id'))->paginate(10);
        $contries = Country::all()->pluck('name', 'id');
        $contries[0] = "Selecione";

        return view('states.index', compact('states', 'contries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contries = Country::all()->pluck('name', 'id');
        return view('states.create', compact('contries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validations($request);
        State::create($request->all());

        return redirect()->route('states.index')
            ->with('flash_message',
                'Se registro se dio de alta!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state = State::findOrFail($id);
        $contries = Country::all()->pluck('name', 'id');
        return view('states.edit', compact('state', 'contries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validations($request);

        State::find($id)->update($request->all());

        return redirect()->route('states.index')
            ->with('flash_message',
                'Se modifico su registro!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::findOrFail($id);
        $state->delete();

        return redirect()->route('states.index')
            ->with('flash_message',
                'Su registro fue eliminado.');
    }

    private function validations(Request $request) {
        $this->validate($request, [
            'countries_id' => 'required|int|min:1',
            'name' => 'required|string|max:255'
        ]);
    }
}
