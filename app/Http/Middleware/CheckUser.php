<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 5/7/2018
 * Time: 12:49 AM
 */

namespace App\Http\Middleware;

use Closure;

class CheckUser
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

        if ($request->session()->get("ospicareEmail") === null){
            return redirect('/login');
        }

        return $next($request);
    }

}