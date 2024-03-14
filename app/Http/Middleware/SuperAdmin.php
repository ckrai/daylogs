<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class SuperAdmin {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        if (!Auth::check()) {
            return redirect()->route('login');
        } if (Auth::user()->role == 1) {
            return redirect()->route('superadmin');
        } if (Auth::user()->role == 2) {
            return redirect()->route('admin.index');
        } if (Auth::user()->role == 3) {
            return redirect()->route('uspoc');
        } if (Auth::user()->role == 4) {
            return redirect()->route('spoc');
        } if (Auth::user()->role == 5) {
            return redirect()->route('user');
        }
        //return $next($request);
        return redirect('home')->with("You don't have valid access.");
    }
}
