<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Bcuser;
use App\Models\Superadmin;
use App\Models\User;
use Bcusers;
use Users;
use Auth;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( Request $request) {
        if (auth()->user()->role == 1) {
            return redirect('superadmin');
        }elseif (auth()->user()->role == 2) {
            return redirect('admin');
        }elseif (auth()->user()->role == 3) {
            return redirect('uspoc');
        }elseif (auth()->user()->role == 4) {
            return redirect('spoc');
        }elseif (auth()->user()->role == 5) {
            return redirect('user');
        }
            return view('home');
    } 

    public function profileUser () {
        $users = User::get();
        //$bcusers = Bcuser::orderBy('created_at','DESC')->get();
        return view('profileAll', compact('users'));
    }    
}
