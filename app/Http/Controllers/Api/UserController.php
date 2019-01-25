<?php

namespace App\Http\Controllers\Api;

use Mail;
use App\User;
use Validator;
use App\Address;
use App\Billing;
use App\Mail\sendMail;
use App\PaymentMethods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public $successStatus = 200;

    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            $user = Auth::user();

            if (!$user->hasRole("Cliente")) {
                $this->Unauthorized();
            }

            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $nextStep = 1;

            if (Address::where('users_id', $user->id)->count() == 0)
                $nextStep = 3;

            if (Billing::where('users_id', $user->id)->count() == 0)
                $nextStep = 4;

            $data = array(
                'success' => true,
                'token' => $success['token'],
                'nextStep' => $nextStep
            );

            return response()->json($data, $this-> successStatus);
        }
        else{

            $this->Unauthorized();
        }
    }

    public function loginDriver(Request $request){
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            $user = Auth::user();
            if (!$user->hasRole("Conductor")) {
                $this->Unauthorized();
            }

            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $nextStep = 1;

            if (Address::where('users_id', $user->id)->count() == 0)
                $nextStep = 3;

            if (Billing::where('users_id', $user->id)->count() == 0)
                $nextStep = 4;

            $data = array(
                'success' => true,
                'token' => $success['token'],
                'nextStep' => $nextStep
            );

            return response()->json($data, $this-> successStatus);
        }
        else{

            $this->Unauthorized();
        }
    }

    public function Unauthorized() {
        $data = array(
            'success' => false,
            'error' => 'Unauthorized',
            'token' => ''
        );

        return response()->json($data, 401);
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kind_persons_id' => 'required|int',
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:255',
            'password'=>'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors(),
                'token' => '',
                'nextStep' => 0
            );

            return response()->json($data, 401);
        }

        $data = $request->only('name', 'surnames', 'birthday', 'email', 'phone', 'kind_persons_id', 'password');
        $data["authorized"] = 1;
        $data["role"] = 2;

        $user = User::create($data);

        $dataPaymetUser = array(
            'name' => 'Efectivo',
            'card' => '',
            'type_cards_id' => '3',
            'users_id' => $user->id,
            'token' => ''
        );

        PaymentMethods::create($dataPaymetUser);

        $data = array(
            'view' => 'mail.welcome',
            'mail' => $user->email,
            'name' => $user->name,
            'subject' => 'Registro de Usuario'
        );

        if($request->only('kindPerson') == 2) {
            $data = array(
                'view' => 'mail.welcome_company',
                'mail' => $user->email,
                'name' => $user->name,
                'subject' => 'Registro de Empresa'
            );
        }

        Mail::to($data['mail'])->send(new sendMail($data));

        $success['token'] =  $user->createToken('MyApp')-> accessToken;

        $data = array(
            'success' => true,
            'token' => $success['token'],
            'nextStep' => 3
        );

        return response()->json($data, $this->successStatus);
    }

    public function registerDriver(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors(),
                'token' => '',
                'nextStep' => 0
            );

            return response()->json($data, 400);
        }

        $data = $request->only('name', 'surnames', 'birthday', 'email', 'phone',
            'password', 'vehicles_id', 'current_work_id', 'data_plan');
        $data["'kind_persons_id'"] = 2;
        $data["authorized"] = 0;
        $data["role"] = 3;

        $user = User::create($data);

        $data = array(
            'view' => 'email.welcome_drive',
            'mail' => $user->email,
            'name' => $user->name,
            'subject' => 'Registro de Usuario'
        );

        Mail::to($data['mail'])->send(new sendMail($data));

        return response()->json(null, 204);
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kind_persons_id' => 'required|int',
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'email' => 'required|email|unique:users,email,'. Auth::id(),
            'phone' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors(),
                'token' => '',
                'nextStep' => 0
            );

            return response()->json($data, 401);
        }

        $data = $request->only('name', 'surnames', 'birthday', 'email', 'phone', 'kind_persons_id');

        User::find(Auth::id())->update($data);

        $data = array(
            'success' => true,
            'error' => ''
        );

        return response()->json($data, $this-> successStatus);
    }

    public function registerAddresses(Request $request) {

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
                'error' => $validator->errors(),
                'token' => '',
                'nextStep' => 0
            );

            return response()->json($data, 401);
        }

        $data = $request->all();
        dd(Auth::id());


        $data['users_id'] = Auth::id();

        dd($data);

        Address::create($data);

        /*$data = array(
            'success' => true,
            'error' => '',
            'nextStep' => $red
        );*/

        return response()->json($data, $this->successStatus);
    }

    public function registerBillings(Request $request) {
        $validator = Validator::make($request->all(), [
            'RFC' => 'required|string|unique:billings,RFC',
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

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors(),
                'nextStep' => 0
            );

            return response()->json($data, 401);
        }

        $data = $request->all();
        $data['users_id'] = Auth::id();

        Billing::create($data);

        $data = array(
            'success' => true,
            'error' => '',
            'nextStep' => 1
        );

        return response()->json($data, $this->successStatus);
    }

    public function getAddress() {
        if (Auth::id() == null) {
            $data = array(
                'success' => false,
                'error' => 'El usuario no esta autenticado'
            );

            return response()->json($data, 401);
        }

        $data = Address::where('users_id', Auth::id());

        return response()->json($data, $this->successStatus);
    }

    public function getBillings() {

    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {

        $user = Auth::user();

        if ($user == null) {
            $data = array(
                'success' => false,
                'error' => 'El usuario no esta autenticado',
            );

            return response()->json($data, 401);
        }


        $user['success'] = true;

        return response()->json($user, $this->successStatus);
    }
}
