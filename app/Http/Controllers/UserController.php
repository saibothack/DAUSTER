<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Auth;
use Mail;
use Input;
use App\User;
use App\Role;
use App\KindPersons;
use App\Mail\sendMail;
use App\PaymentMethods;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['auth'])->except('registerClient', 'registerClientCreate', 'registerDriver', 'registerDriverCreate'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::all()->pluck('name', 'id');
        $roles[0] = "Seleccione";
        $status = array(
            0 => 'No autorizado',
            1 => 'Autorizado'
        );


        if(($request->get('roles_id') != "") && ($request->get('roles_id') != "0")) {
            $descroles = Role::where('id', '=', $request->get('roles_id'))->first()->name;
            $users = User::active()->search($request->get('search'))->role($descroles)->paginate(10);
        } else {
            $users = User::active()->search($request->get('search'))->paginate(10);
        }

        return view('users.index', compact('users', 'roles', 'status'));
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

        $dataPaymetUser = array(
            'name' => 'Efectivo',
            'card' => '',
            'type_cards_id' => '3',
            'users_id' => $authUser->id,
            'token' => ''
        );

        PaymentMethods::create($dataPaymetUser);

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
        $data_plan = array('Si', 'No');
        $vehicles = Vehicle::all()->pluck('name', 'id');
        $current_work = array('Estudiante', 'Trabajo de medio tiempo', 'Trabajo tiempo completo', 'Sin empleo');

        return view('users.createDriver', compact('vehicles', 'current_work', 'data_plan'));
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
            'vehicles_id'=>'required|int',
            'current_work_id'=>'required|int',
            'data_plan'=>'required|int'
        ]);

        $data = $request->only('name', 'surnames', 'birthday', 'email', 'phone', 'password');
        $data["authorized"] = 0;

        $authUser = User::create($data);
        $authUser->assignRole('Conductor');

        $data = array(
            'view' => 'mail.welcome_drive',
            'mail' => $authUser->email,
            'name' => $authUser->name,
            'subject' => 'Registro de Conductor'
        );

        Mail::to($data['mail'])->send(new sendMail($data));

        return redirect()->route('login')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }
}
