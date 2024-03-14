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

class UserController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        //$bcusers = Bcuser::all();
        $bcusers = Bcuser::orderBy('created_at','DESC')->get();
        return view('bcuser.index', compact('bcusers'));
    }

    public function sortFE() {
        $bcusers = Bcuser::orderBy('fe_name','ASC')->get();
        return view ('bcuser.index', compact('bcusers'));
    }

    public function sortBC() {
        $bcusers = Bcuser::orderBy('bc_name','ASC')->get();
        return view ('bcuser.index', compact('bcusers'));
    }

    public function sortFE_tranx (Request $request) {
        $data=$request->input();
        $p_month= isset($data['p_month'])?$data['p_month']:date('m',strtotime('-1 months')) ;
        $p_year= isset($data['p_year'])?$data['p_year']:date('Y',strtotime('-1 years')) ;

        $performance = Performance::where('p_month', $p_month)->where('p_year', $p_year)->orderBy('fe_name','ASC')->get();
        return view('bcuser.bc_trnx', compact('performance','p_month','p_year' ));
        // $performances = Performance::orderBy('fe_name','ASC')->get();
        // return view ('bcuser.bc_trnx', compact('performances'));
    }

    public function sortBC_tranx (Request $request) {
        $data=$request->input();
        $p_month= isset($data['p_month'])?$data['p_month']:date('m',strtotime('-1 months')) ;
        $p_year= isset($data['p_year'])?$data['p_year']:date('Y',strtotime('-1 years')) ;

        $performance = Performance::where('p_month', $p_month)->where('p_year', $p_year)->orderBy('bc_name','ASC')->get();
        return view('bcuser.bc_trnx', compact('performance','p_month','p_year' ));
        // $performance = Performance::orderBy('bc_name','ASC')->get();
        // return view ('bcuser.bc_trnx', compact('performance'));
    }

    public function sortFE_commission (Request $request) {
        $data=$request->input();
        $c_month= isset($data['c_month'])?$data['c_month']:date('m',strtotime('-1 months')) ;
        $c_year= isset($data['c_year'])?$data['c_year']:date('Y',strtotime('-1 years')) ;

        $commissions = Commission::where('c_month', $c_month)->where('c_year', $c_year)->orderBy('fe_name','ASC')->get();
        return view('bcuser.bc_commission', compact('commissions','c_month','c_year' ));
    }

    public function sortBC_commission (Request $request) {
        $data=$request->input();
        $c_month= isset($data['c_month'])?$data['c_month']:date('m',strtotime('-1 months')) ;
        $c_year= isset($data['c_year'])?$data['c_year']:date('Y',strtotime('-1 years')) ;

        $commissions = Commission::where('c_month', $c_month)->where('c_year', $c_year)->orderBy('bc_name','ASC')->get();
        return view('bcuser.bc_commission', compact('commissions','c_month','c_year' ));
    }

    public function show(Bcuser $bcuser, $id) {
        //
        $bcuser = Bcuser::find($id);
        return view('bcuser.view', compact('bcuser'));
    }

    public function edit(Bcuser $bcuser, $id) {
    
        $bcuser = Bcuser::find($id);
        return view('bcuser.edit', compact('bcuser')); 
    }

    public function update(Request $request, $id) {
    
        $request->validate([
            'bc_name'=>'required',
            'fe_name'=>'required',
            'email'=>'required'
        ]);

        //$bcuser = Bcuser::update($request->all());
        $bcuser = Bcuser::find($id);
        $bcuser->bc_name =  $request->get('bc_name');
        $bcuser->fe_name = $request->get('fe_name');
        $bcuser->email = $request->get('email');
        $bcuser->pan = $request->get('pan');
        $bcuser->aadhaar = $request->get('aadhaar');
        $bcuser->dob = $request->get('dob');
        $bcuser->save();

        return redirect('/bcuser')->with('success', 'Contact updated!');
    }

    public function search(Request $request) {
        $bcusers = DB::table('bcusers');
        if( $request->input('search')) {
            $bcusers = $bcusers->where('fe_name', 'LIKE', "%" . $request->search . "%")
            ->orWhere('bc_name', 'LIKE', "%" . $request->search . "%")
            ->orWhere('email', 'LIKE', "%" . $request->search . "%")
            ->orWhere('phone', 'LIKE', "%" . $request->search . "%")
            ->orWhere('ko_code', 'LIKE', "%" . $request->search . "%");
        }
        $bcusers = $bcusers->get();
        return view('bcuser.index', compact('bcusers'));
    }

    public function search_trnx(Request $request, Performance $performance, $id) {
        $data=$request->input();
        $p_month= isset($data['p_month'])?$data['p_month']:date('m',strtotime('-1 months')) ;
        $p_year= isset($data['p_year'])?$data['p_year']:date('Y');
        $bc_trnxs = Performance::where('p_month', $p_month)->where('p_year', $p_year)->where('ko_code',$id)->first();
        if( $request->input('search_trnx')) {
            $bc_trnxs = $bc_trnxs->where('fe_name', 'LIKE', "%" . $request->search_trnx . "%")
            ->orWhere('bc_name', 'LIKE', "%" . $request->search_trnx . "%")
            ->orWhere('ko_code', 'LIKE', "%" . $request->search_trnx . "%");
        }
        $bc_trnxs = $bc_trnxs->get();
        return view('bcuser.bc_trnx', compact('bc_trnxs'));
    }
}
