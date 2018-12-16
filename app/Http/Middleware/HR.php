<?php

namespace App\Http\Middleware;

use Closure;

class HR
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
        $user = $request->user(); 
        if ($user && ($user->role_id == 'manpower' || $user->role_id == 'admin')   ) {
           return $next($request);
        }else if ($user && $user->role_id == 'venue') {
            return redirect('admin/venue');
        }else if ($user && $user->role_id == 'logistic') {
            return redirect('/admin/inventory');
        }else if ($user && $user->role_id == 'reservation') {
            return redirect('/admin/reservation');
        }else if ($user && $user->role_id == 'sales') {
            return redirect('/admin/sales');
        }else if ($user && $user->role_id == 'audit') {
            return redirect('/admin/audit');
        }else if ($user && $user->role_id == 'account') {
            return redirect('/admin/user');
        }
        return redirect('/admin');
     
    }
}
