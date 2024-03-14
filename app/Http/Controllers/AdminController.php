<?php

namespace App\Http\Controllers;

use Validator, Redirect,Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Attendance;
use App\Models\TblUnitpl;
use App\Models\TblUser;
use App\Models\TblUnit;
use App\Models\User;
use Attendances;
use TblUnitpls;
use TblUnits;
use TblUsers;
use Users;
use Auth;
use DB;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index() {
        $users = User::get();
        return view('admin.index', compact('users'));
    }

     public function indexAll() {
        $attendances = Attendance::where('dept_id', '=', '1')->orderBy('created_at','DESC')->get();;
        return view('admin.indexCom', compact('attendances'));
    }

    public function create() {
        return view('admin.add');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required',  
        ]);
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'role' => $request->role, 
        ]);
        return redirect('admin')->with('success', 'Password change successfully!');
        //return view ('admin.index')->with(['success' => 'Thank you for Add user.']);
    }

    public function show(User $user, Attendance $attendance, $id) {
        $user  = User::find($id);
        $attendance = Attendance::where('u_id', $user->id)->get();
        return view('admin.view', compact('user', 'attendance'));   
    }

    public function searchGIS (Request $request) {
        $users = DB::table('users');
        if( $request->input('search')) {
             $users = $users->where('name', 'LIKE', "%" . $request->search . "%")
            ->orWhere('dept_id', 'LIKE', "%" . $request->search . "%")
            ->orWhere('mobile', 'LIKE', "%" . $request->search . "%")
            ->orWhere('address', 'LIKE', "%" . $request->search . "%");
        }
        $users = $users->get();
        return view('admin.index', compact('users'));
    }

    public function changePass() {
        //$user  = User::find($id);
        $users = User::first();
        return view('admin.changePassword', compact('users'));
    } 

    public function UpdatePass(Request $request) {
        $data= $request->input();
        $request->validate([
            'password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
       if (Auth::attempt(['email' => auth()->user()->email, 'password' => $data['password']])) {
           User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        }else{
            return Redirect::back()->withErrors(['Alert-', 'Current password is wrong']);
        }
            //dd('Password change successfully.');
            return redirect('admin/list')->with('success', 'Password change successfully!');
    }

    public function edit(User $user, $id) {  
        $user = User::find($id);
        return view('admin.edit', compact('user')); 
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name =  $request->get('name');
        $user->mobile = $request->get('mobile');
        $user->email = $request->get('email');
        $user->save();
        return redirect('admin.index')->with('success', 'Data updated!');
    }

    public function destroy($id) {
        $bcuser = User::find($id);
        $bcuser->delete();
        return redirect('admin.index')->with('success', 'Contact deleted!');
    }
}