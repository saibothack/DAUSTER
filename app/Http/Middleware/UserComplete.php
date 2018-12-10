<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Address;
use App\Billing;

class UserComplete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $count_address = Address::where('users_id', $user->id)->count();
        $count_billing = Billing::where('users_id', $user->id)->count();

        if ($count_address == 0) {
            return redirect()->route('address.index')
                ->withErrors(["Por favor complete su registro para poder continuar!"]);
        }

        if ($user->kind_persons_id == 2) {
            if ($count_billing == 0) {
                return redirect()->route('billings.index')
                    ->withErrors(["Por favor complete su registro para poder continuar!"]);
            }
        } 
        

        return $next($request);
    }
}
