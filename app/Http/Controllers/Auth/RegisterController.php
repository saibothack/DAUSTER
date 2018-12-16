<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\User;
use App\Mail\sendMail;
use App\PaymentMethods;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'kindPerson' => 'required|int',
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'birthday' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|tel',
            'password' => 'required|string|min:6|confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create($data->only('kindPerson', 'name', 'surnames', 'birthday', 'email', 'phone', 'password'));
        $data = array();

        $dataPaymetUser = array(
            'name' => 'Efectivo',
            'card' => '',
            'type_cards_id' => '3',
            'users_id' => $user->id,
            'token' => ''
        );

        $paymertUser = PaymentMethods::create($dataPaymetUser);
        dd($paymertUser);

        if($data['kindPerson'] == 1) {
            $data = array(
                'view' => 'mail.welcome',
                'mail' => $user->email,
                'name' => $user->name,
                'url' => $user->name,
                'subject' => 'Registro de usuarios'
            );
        } else if($data['kindPerson'] == 2) {
            $data = array(
                'view' => 'mail.welcome_company',
                'mail' => $user->email,
                'name' => $user->name,
                'url' => $user->name,
                'subject' => 'Registro de Empresa'
            );
        }

        Mail::to($data['mail'])->send(new sendMail($data));
        return $user;
    }
}
