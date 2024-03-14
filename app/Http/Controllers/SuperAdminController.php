<?php

namespace App\Http\Controllers;

use Validator, Redirect,Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Attendance;
use App\Models\Holiday;
use App\Models\Activitylog;
use App\Models\Department;
use App\Models\TblUnitpl;
use App\Models\TblUser;
use App\Models\User;
use Attendances;
use Departments;
use Activitylogs;
use Holidays;
use TblUnitpls;
use TblUnits;
use TblUsers;
use Users;
use Auth;
use DB;

class SuperAdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index() {
        $users = User::get();
        return view('superadmin.sadmin', compact('users'));
    }

    public function create() {
        return view('superadmin.create');
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

        return view ('superadmin.create')->with(['success' => 'Thank you for Add user.']);
    }

    // public function validator(array $data) {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'role' => ['required', 'integer', 'max:11'],
    //         'mobile' => ['required', 'string', 'max:11'],
    //         'dept_id' => ['required', 'integer', 'min:8'],
    //         'address' => ['required', 'string'],
    //         'designation' => ['required', 'string', 'max:255']
    //     ]);
    // }

//     public function store(array $data, Request $request) {
//         $data = User::create([
//             'name' => $data['name'],
//             'email' => $data['email'],
//             'password' => Hash::make($data['password']),
//             'role' => $data['role'],
//             'mobile' => $data['mobile'],
//             'dept_id' => $data['dept_id'],
//             'address' => $data['address'],
//             'designation' => $data['designation'],
//         ]);
// return view ('superadmin.create')->with(['success' => 'Thank you for Add user.']);

//     }

    public function show(User $user, $id) {
        $user  = User::find($id);

        //$hp = '0.5';
        // $tblunitpls  = TblUnitpl::where('unit_id', '=', $tblunit->id )
        //             ->Where('unit_hp', '=', $hp)->get();

        //$tblunitplsOne  = TblUnitpl::where('unit_id', '=', $tblunit->id, $tblunit->$hp)->get();
        //$tblunitpl = TblUnitpl::where('unit_id', '=', $tblunit->id)->first();
        //$tblunitpls  = TblUnitpl::where('unit_id', '=', $tblunit->id)->get();
// print_r($tblunitpls);
// die();
        //$tblunit = TblUnit::where('id', '=', $id)->get();
        //$tblunitpls = DB::table('tbl_unitpls')->where('unit_id', '=', $id)->get();
        return view('superadmin.view', compact('user'));   
    }

//     public function showOne(TblUnit $tblunit, TblUnitpl $tblunitpl, $id) {
//         $tblunit  = TblUnit::find($id);

//         $hp = '1.0';
//         $tblunitpls_one  = TblUnitpl::where('unit_id', '=', $tblunit->id, $tblunit->$hp)->get();
//         //$tblunitpl = TblUnitpl::where('unit_id', '=', $tblunit->id)->first();
//         //$tblunitpls  = TblUnitpl::where('unit_id', '=', $tblunit->id)->get();
// // print_r($tblunitpls);
// // die();
//         //$tblunit = TblUnit::where('id', '=', $id)->get();
//         //$tblunitpls = DB::table('tbl_unitpls')->where('unit_id', '=', $id)->get();
//         return view('superadmin.view', compact('tblunit', 'tblunitpls_one'));   
//     }

    public function sortFE() {
        $tblunits = TblUnit::orderBy('unit_name','ASC')->get();
        return view ('superadmin.sadmin', compact('tblunits'));
    }

    public function sortBC() {
        $tblunits = TblUnit::orderBy('owner_name','ASC')->get();
        return view ('superadmin.sadmin', compact('tblunits'));
    }

    public function searchGIS (Request $request) {
        $tblunits = DB::table('tbl_units');
        if( $request->input('search')) {
             $tblunits = $tblunits->where('unit_name', 'LIKE', "%" . $request->search . "%")
            ->orWhere('owner_name', 'LIKE', "%" . $request->search . "%")
            ->orWhere('district', 'LIKE', "%" . $request->search . "%")
            ->orWhere('contact_no', 'LIKE', "%" . $request->search . "%");
        }
        $tblunits = $tblunits->get();
        return view('superadmin.sadmin', compact('tblunits'));
    }

    public function import(Request $request) {
        $request->validate(['import_file' => 'required']);
        Excel::import(new ImportBcusers, request()->file('import_file'));
        //die();
        return back()->with('success', 'Contacts imported successfully.');
    }

    public function export() {
        return Excel::download(new ExportBcusers, 'Mudra.xlsx');
        //return back()->with('success', 'Contacts imported successfully.');
    }

    public function changePass() {
        //$bcuser  = Bcuser::find($id);
        $users = User::first();
        return view('superadmin.changePassword', compact('users'));
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
            return redirect('superadmin/list')->with('success', 'Password change successfully!');
    }

    public function edit(User $user, $id) {  
        $user = User::find($id);
        return view('superadmin.edit', compact('user')); 
    }

    public function update(Request $request, $id) {
        // $request->validate([
        //     'bc_name'=>'required',
        //     'fe_name'=>'required',
        //     'email'=>'required',
        //     'phone' => 'required'
        // ]);
        //$bcuser = Bcuser::whereIn('id', $bcuser->id)->update($request->all())->except(['_token']);
        // $bcuser = Bcuser::find($id)->update($request->all());

        $bcuser = User::find($id);
        $bcuser->bc_name =  $request->get('bc_name');
        $bcuser->fe_name = $request->get('fe_name');
        $bcuser->email = $request->get('email');
       

        $bcuser->save();

        return redirect('/superadmin/list')->with('success', 'Data updated!');
    }

    public function destroy($id) {
        $bcuser = Bcuser::find($id);
        $bcuser->delete();
        return redirect('/superadmin/list')->with('success', 'Contact deleted!');
    }

}

