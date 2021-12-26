<?php

namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // if multiple role, we will use for loop
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", $role)->first()){
            return $next($request);
        }
        return redirect()->back();
    }
}
