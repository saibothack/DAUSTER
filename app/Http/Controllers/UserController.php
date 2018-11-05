<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Input;
use App\User;
use App\Role;
use App\KindPersons;
use App\Mail\sendMail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::active()->search($request->get('search'))->paginate(10);
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get()->pluck('name', 'id');
        $kindPersons = KindPersons::active()->pluck('name', 'id');


        return view('users.create', compact('roles', 'kindPersons'));
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
        $request->flashExcept('password');
        $request->flashExcept('password_confirmation');

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

        $data = $request->only('name', 'surnames', 'birthday', 'email', 'phone', 'role', 'kindPerson', 'authorized', 'password');

        User::create($data);

        return redirect()->route('users.index')
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
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get()->pluck('name', 'id');
        $kindPersons = KindPersons::active()->pluck('name', 'id');
        return view('users.edit', compact('user', 'roles', 'kindPersons')); //pass user and roles data to view
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
        $request->flash();
        $request->flashExcept('password');
        $request->flashExcept('password_confirmation');

        $this->validate($request, [
            'kindPerson' => 'required|int',
            'authorized' => 'required|int',
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:255',
        ]);

        $data = $request->only('name', 'surnames', 'birthday', 'email', 'phone', 'kindPerson', 'authorized');

        User::create($data);

        return redirect()->route('users.index')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }

    public function changePassword() {
        return view('users.changePassword');
    }

    public function updatePassword(Request $request, $id)
    {
        /*$this->validate($request, [
            'password'=>'required|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = $request->get('password'));
        $user->save();

        return redirect()->route('users.index')
            ->with('flash_message',
                'Se modifico su contraseña.');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('flash_message',
                'Su registro fue eliminado.');
    }

    public function registerClient()
    {
        $kindPersons = KindPersons::active()->get();
        return view('users.createClient', compact("kindPersons"));
    }

    public function registerClientCreate(Request $request)
    {
        $request->flash();
        $request->flashExcept('password');
        $request->flashExcept('password_confirmation');

        $this->validate($request, [
            'kind_persons_id' => 'required|int',
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:255',
            'password'=>'required|min:6|confirmed',
        ]);

        $data = $request->only('name', 'surnames', 'birthday', 'email', 'phone', 'role', 'kind_persons_id', 'password');
        $data["authorized"] = 1;

        $authUser = User::create($data);

        $authUser->assignRole('Cliente');

        $data = array(
            'view' => 'mail.welcome',
            'mail' => $authUser->email,
            'name' => $authUser->name,
            'subject' => 'Registro de Empresa'
        );

        if($request->only('kindPerson') == 2) {
            $data = array(
                'view' => 'mail.welcome_company',
                'mail' => $authUser->email,
                'name' => $authUser->name,
                'subject' => 'Registro de Empresa'
            );
        }

        Mail::to($data['mail'])->send(new sendMail($data));


        return redirect()->route('login')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }

    public function registerDriver()
    {
        return view('users.createDriver');
    }

    public function registerDriverCreate(Request $request)
    {
        $request->flash();
        $request->flashExcept('password');
        $request->flashExcept('password_confirmation');

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:255',
            'password'=>'required|min:6|confirmed',
        ]);

        $data = $request->only('name', 'surnames', 'birthday', 'email', 'phone', 'password');
        $data["authorized"] = 0;

        User::create($data);

        return redirect()->route('login')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }
}
