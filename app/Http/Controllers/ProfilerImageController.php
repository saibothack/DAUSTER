<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class ProfilerImageController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validaImages($request);
        $file = $request->file('image');

        $destinationPath = '../public/images/';
        $date = date('Y-m-d H:i:s');
        $nameFile = $id . $date . "." . $file->getClientOriginalExtension();
        $nameFile = str_replace(':', '-', $nameFile);
        $nameFile = str_replace(' ', '-', $nameFile);
        $file->move($destinationPath, $nameFile);
        $url = asset('images/'.$nameFile);

        $user = User::findOrFail(Auth::id());
        $data = array('avatar' => $url);
        $user->fill($data)->save();


        return redirect()->route('profilers.index')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }

    public function imageUser(Request $request)
    {
        $this->validaImages($request);

        $id = Auth::id();

        $file = $request->file('image');

        $destinationPath = '../public/images/';
        $date = date('Y-m-d H:i:s');
        $nameFile = $id . $date . "." . $file->getClientOriginalExtension();
        $nameFile = str_replace(':', '-', $nameFile);
        $nameFile = str_replace(' ', '-', $nameFile);
        $file->move($destinationPath, $nameFile);
        $url = asset('images/'.$nameFile);

        $user = User::findOrFail(Auth::id());
        $data = array('img_user' => $url);
        $user->fill($data)->save();


        return redirect()->route('profilers.index')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }

    public function imageVehicle(Request $request)
    {
        $this->validaImages($request);
        $id = Auth::id();
        $file = $request->file('image');

        $destinationPath = '../public/images/';
        $date = date('Y-m-d H:i:s');
        $nameFile = $id . $date . "." . $file->getClientOriginalExtension();
        $nameFile = str_replace(':', '-', $nameFile);
        $nameFile = str_replace(' ', '-', $nameFile);
        $file->move($destinationPath, $nameFile);
        $url = asset('images/'.$nameFile);

        $user = User::findOrFail(Auth::id());
        $data = array('img_vehicle' => $url);
        $user->fill($data)->save();


        return redirect()->route('profilers.index')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }

    public function validaImages($request)
    {
        $this->validate($request, [
                'image'=>'required|mimes:jpeg,png'
            ]
        );
    }
}
