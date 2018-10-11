<?php
/**
 * Created by PhpStorm.
 * User: gadarenas
 * Date: 12/09/18
 * Time: 1:45 AM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class ClearanceMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {

        if ($request->is('users'))
        {
            if (!Auth::user()->hasPermissionTo('Usuarios'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

    }
}
