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

class SpocController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index() {
        $tblunits = User::where('dept_id', '=', '3')->get();
        return view('spoc.index', compact('tblunits'));
    }

     public function indexAll() {
        $attendance = Attendance::where('dept_id', '=', '3')->get();
        return view('spoc.atten', compact('attendance'));
    }

    public function create() {
        return view('spoc.create');
    }

    public function store(Request $request) {

        $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'dept_id'=>'required',
            'address'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required',
            'designation'=>'required'
        ]);

        $data = User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'dept_id' => $request->dept_id,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'role' => $request->role,
            'designation' => $request->designation
        ]);

        return view ('spoc.create')->with(['success' => 'Thank you for Add user.']);
    }

    public function show(User $user, Attendance $attendance, $id) {
        $user  = User::find($id);
        $attendance = Attendance::where('u_id', $user->id)->get();

        return view('spoc.view', compact('user', 'attendance'));   
    }

    public function reportAtten(User $user, Attendance $attendance){
        //$users  = User::where('dept_id', '=', '3')->get();

        //$attendance = Attendance::where('u_id', $user->id)->get();

         $tblemp = DB::table('users')
        ->join('attendances', 'attendances.u_id', '=', 'users.id')
        ->where('dept_id', '=', '3')
        ->select('users.*', 'users.name', DB::raw("count(attendances.checkin_date) as count"))
        ->groupBy('attendances.dept_id')
        ->orderBy('updated_at','DESC');
        print_r($tblemp);
        die();

        // $e_atten = User::select('id','name')->groupBy('name')->get(); 
        // foreach($e_atten as $t){
        //     $employees= User::where('name', $t->name);
        //     $atten = Attendance::where('dept_id', '=', '3')->whereIntegerInRaw('u_id', $employees->pluck('id')->toArray() );
        //     $t->employees= $employees->get();
        //     $locations_count= $t->employees;
        // }
            // print_r($t->employees);
            // die();

        return view('spoc.report', compact('users'));   
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
        return view('spoc.index', compact('users'));
    }

    public function changePass() {
        //$user  = User::find($id);
        $users = User::first();
        return view('spoc.changePassword', compact('users'));
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
            return redirect('spoc/list')->with('success', 'Password change successfully!');
    }

    public function edit(User $user, $id) {  
        $user = User::find($id);
        return view('spoc.edit', compact('user')); 
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name =  $request->get('name');
        $user->mobile = $request->get('mobile');
        $user->email = $request->get('email');

        $user->save();

        return redirect('spoc.index')->with('success', 'Data updated!');
    }

    public function destroy($id) {
        $bcuser = User::find($id);
        $bcuser->delete();
        return redirect('spoc.index')->with('success', 'Contact deleted!');
    }
}