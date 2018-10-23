<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendEmail;

class SocialAuthController extends Controller
{
    // Metodo encargado de la redireccion a Facebook
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that 
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return $this->authAndRedirect($authUser); // Login y redirección
    }
    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {

        $data['view'] = 'mail.welcome';
        $data = ['message' => 'This is a test!'];

        Mail::to('john@example.com')->send(new SendEmail($data));
     
        /*$authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }

        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }

        $authUser = User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'avatar' => $user->avatar,
            'provider' => $provider,
            'provider_id' => $user->id,
            'autorized' => 1,
            'email_confirmation' => 0,
            'status' => 1,
        ]);

        $authUser->assignRole('Cliente');

        return $authUser;*/
    }
    // Login y redirección
    public function authAndRedirect($user)
    {
        return redirect()->to('/services');
    }
}
