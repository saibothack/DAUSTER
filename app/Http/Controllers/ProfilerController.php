<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Profiler;
use App\KindPersons;
use Illuminate\Http\Request;

class ProfilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', '=', Auth::id())->firstOrFail();

        if (Auth::user()->hasRole('Administrador'))
            return view('profilers.profiler');

        if (Auth::user()->hasRole('Cliente')) {
            $kindPersons = KindPersons::active()->pluck('name', 'id');
            return view('profilers.client', compact('kindPersons', 'user'));
        }

        if (Auth::user()->hasRole('Conductor'))
            return view('profilers.driver' );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profiler  $profiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->hasRole('Administrador'))
            $this->setProfiler(Auth::id(), $request);

        if (Auth::user()->hasRole('Cliente'))
            $this->setProfilerClient(Auth::id(), $request);

        if (Auth::user()->hasRole('Conductor'))
            $this->setProfilerDriver(Auth::id(), $request);


        return redirect()->route('profilers.index')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profiler  $profiler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profiler $profiler)
    {
        //
    }

    private function setProfiler($id, $request) {
        $this->validate($request, [
            'role' => 'required|int',
            'kindPerson' => 'required|int',
            'authorized' => 'required|int',
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:255',
            'password'=>'required|min:6|confirmed',
        ]);

        $user = User::where('id', '=', $id)->get();
        $user->fill($request)->save();
    }

    private function setProfilerClient($id, $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'phone' => 'required|string|max:255'
        ]);

        $user = User::findOrFail($id);
        $user->fill($request->only('name', 'surnames', 'birthday', 'email', 'phone'))->save();
    }

    private function setProfilerDriver($request) {
        $this->validate($request, [
            'role' => 'required|int',
            'kindPerson' => 'required|int',
            'authorized' => 'required|int',
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:255',
            'password'=>'required|min:6|confirmed',
        ]);

    }
}
