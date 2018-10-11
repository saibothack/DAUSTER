<?php

namespace App\Http\Controllers;

use App\KindPersons;
use Illuminate\Http\Request;

class KindPersonsController extends Controller
{
    public function __construct() {
    //$this->middleware(['auth', 'isActive']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kindPersons = KindPersons::active()->search($request->get('search'))->paginate(10);
        return view('kind_persons.index', compact('kindPersons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kind_persons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        $data = array(
            'name' => $request['name'],
            'status' => 1,
        );

        KindPersons::create($data);

        return redirect()->route('kind-persons.index')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kindPersons=KindPersons::find($id);
        return  view('kind_persons.show', compact('kindPersons'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kindPersons=KindPersons::find($id);
        return view('kind_persons.edit', compact('kindPersons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        KindPersons::find($id)->update($request->all());

        return redirect()->route('kind-persons.index')
            ->with('flash_message',
                'Se modifico su registro!');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $data = array(
            'status' => 0
        );

        KindPersons::find($id)->update($data);
        
        return redirect()->route('kind-persons.index')
            ->with('flash_message',
                'Se elimino su registro!');
    }
}
