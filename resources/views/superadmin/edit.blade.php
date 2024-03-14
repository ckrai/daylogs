
@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          <div class="form-group" style="margin-top: 24px;">
              <a href="{{ route('superadmin.list') }}" class="btn btn-success">Back</a>
            </div>

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

           <legend style="color: #38c172; font-weight: bold;">BC Update Form
          <a href="{{ route('superadmin.list') }}" class="btn btn-success"  style="float: right; display: block; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 16px; margin-right: 5px;"> BC LIST</a>
          </legend>

      <form action="{{ route('superadmin.update',$bcuser->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
         <h4>Personal Details:-</h4>
         <div class="form-group row">
          <div class="col-6">
          <label for="">FE Name:</label>
          <select class="form-control dropdown-toggle" id="fe_name" name="fe_name">
          <option value="{{$bcuser->fe_name}}">{{$bcuser->fe_name}}</option>
            <option value="Pankaj Kumar">Pankaj Kumar</option>
            <option value="Mithlesh Kumar">Mithlesh Kumar</option>
            <option value="Muktesh Kumar">Muktesh Kumar</option>
            <option value="Jitendra Gaikwad">Jitendra Gaikwad</option>
            <option value="Lalit Dhiman">Lalit Dhiman</option>
            <option value="Kailash Tagarya">Kailash Tagarya</option>
            <option value="Manendra Mishra">Manendra Mishra</option>
            <option value="Pradeep Kumar">Pradeep Kumar</option>
            <option value="Raghvendra Sharma">Raghvendra Sharma</option>
            <option value="Anil Patel">Anil Patel</option>
            <option value="Rakesh Gendre">Rakesh Gendre</option>
            <option value="Rahis Khan">Rahis Khan</option>
            <option value="Vidya Shankar Mishra">Vidya Shankar Mishra</option>
            <option value="Ashish Narayan Pandey">Ashish Narayan Pandey</option>
            <option value="Surya Prakash">Surya Prakash</option>
            <option value="TBA">TBA</option>
          </select>
          <font style="color:red"> {{ $errors->has('fe_name') ?  $errors->first('fe_name') : '' }} </font>
        </div>
          <div class="col-6">
          <label for="">BC Name:</label>
          <input type="text" class="form-control" name="bc_name" id="bc_name" value="{{$bcuser->bc_name}}">
          <font style="color:red"> {{ $errors->has('bc_name') ?  $errors->first('bc_name') : '' }} </font>
        </div>
        <div class="col-4">
          <label for="">Email:</label>
          <input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="{{$bcuser->email}}">
        </div>
        <div class="col-4">
          <label for="">Phone:</label>
          <input type="text" maxlength="12" class="form-control phone" name="phone" id="phone" value="{{$bcuser->phone}}">
        </div>
        <div class="col-4">
          <label for="">Date of Birth:</label>
          <input type="date" class="form-control" name="dob" id="dob" value="{{$bcuser->dob}}">
        </div>
        <div class="col-4">
          <label for="">Zone:</label>
          <input type="text" class="form-control" name="zone" id="zone" value="{{$bcuser->zone}}">
        </div>
        <div class="col-4">
          <label for="">District:</label>
          <input type="text" class="form-control" name="district" id="district" value="{{$bcuser->district}}">
        </div>
        <div class="col-4">
          <label for="">Sub District:</label>
          <input type="text" class="form-control" name="sub_district" id="sub_district" value="{{$bcuser->sub_district}}">
        </div>
        <div class="col-4">
          <label for="">Region:</label>
          <input type="text" class="form-control" name="region" id="region" value="{{$bcuser->region}}">
        </div>
        <div class="col-4">
          <label for="">Block:</label>
          <input type="text" class="form-control" name="block" id="block" value="{{$bcuser->block}}">
        </div>
        <div class="col-4">
          <label for="">Outlet Location:</label>
          <input type="text" class="form-control" name="outlet_loc" id="outlet_loc" value="{{$bcuser->outlet_loc}}">
        </div>
        <div class="col-6">
          <label for="">Aadhaar No:</label>
          <input type="text" maxlength="14" class="form-control aadhaar" name="aadhaar" value="{{$bcuser->aadhaar}}">
        </div>
        <div class="col-6">
          <label for="">PAN No:</label>
          <input type="text" class="form-control" name="pan" value="{{$bcuser->pan}}">
        </div>
        </div>
         <h4>Full Address:-</h4>
        <div class="form-group row"> 
        <div class="col-md-4">
        <label for="address" class="form-label">Address:</label>
        <input type="text" class="form-control" name="address" id="address" value="{{$bcuser->address}}">
        </div>
        <div class="col-md-4">
          <label for="address2" class="form-label">Address 2:</label>
          <input type="text" class="form-control" name="address2" id="address2" value="{{$bcuser->address2}}">
        </div>
     
        <div class="col-md-4">
          <label for="city" class="form-label">City/Town:</label>
          <input type="text" class="form-control" id="city" name="city" value="{{$bcuser->city}}">
        </div>
        <div class="col-md-4">
          <label for="post_office" class="form-label">Post Office:</label>
          <input type="text" class="form-control" id="post_office" name="post_office" value="{{$bcuser->post_office}}">
        </div>
        <div class="col-md-4">
        <label for="state" class="form-label">State:</label>
        <select type="text" class="form-control dropdown-toggle" id="state" name="state" >
        <option value="{{$bcuser->state}}">{{$bcuser->state}}</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu & Kashmir">Jammu & Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Andaman & Nicobar">Andaman & Nicobar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
        <option value="Daman & Diu">Daman & Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        </select>
          </div>
        <div class="col-md-4">
          <label for="pin_code" class="form-label">Pin Code:</label>
          <input type="text" class="form-control" id="pin_code" name="pin_code" value="{{$bcuser->pin_code}}">
          </div>
        </div>

        <div id="Professional" class="tabcontent">
        <h4>Professional Details:-</h4>
        <div class="form-group row">
        <div class="col-4">
          <label for="">Sol ID:</label>
          <input type="text" class="form-control" name="sol_id" id="sol_id" value="{{$bcuser->sol_id}}">
          </div>
        <div class="col-4">
          <label for="">Cust ID:</label>
          <input type="text" class="form-control" name="cust_id" id="cust_id" value="{{$bcuser->cust_id}}">
        </div>
        <div class="col-4">
          <label for="">IIBF Status:</label>
          <select class="form-control dropdown-toggle" id="iibf_status" name="iibf_status">
        <option value="{{$bcuser->iibf_status}}">{{$bcuser->iibf_status}}</option>
        <option value="Pass">Pass</option>
        <option value="Fail">Fail</option>
        </select>
        </div>
        <div class="col-4">
          <label for="">Certificate Status:</label>
          <select class="form-control dropdown-toggle" id="certi_status" name="certi_status">
        <option value="{{$bcuser->certi_status}}">{{$bcuser->certi_status}}</option>
        <option value="Received">Received</option>
        <option value="Not Received">NOT Received</option>
        </select>
        </div>
        <div class="col-4">
          <label for="">DRA Status:</label>
          <select class="form-control dropdown-toggle" id="dra_status" name="dra_status">
        <option value="{{$bcuser->dra_status}}">{{$bcuser->dra_status}}</option>
        <option value="Pass">Pass</option>
        <option value="Fail">Fail</option>
        </select>
        </div>
        <div class="col-4">
          <label for="">Pax Status:</label>
          <select class="form-control dropdown-toggle" id="pax_status" name="pax_status">
        <option value="{{$bcuser->pax_status}}">{{$bcuser->pax_status}}</option>
        <option value="Received">Received</option>
        <option value="Pending">Pending</option>
        <option value="Exempted">Exempted</option>
        </select>
        </div>
        <div class="col-4">
        <label for="">Job Status:</label>
        <select class="form-control dropdown-toggle" id="job_status" name="job_status">
        <option value="{{$bcuser->job_status}}">{{$bcuser->job_status}}</option>
        <option value="Active">Active</option>
        <option value="In-Active">In-Active</option>
        <option value="Suspanded">Suspanded</option>
        </select>
        </div>
        <div class="col-4">
          <label for="">Police Verification:</label>
          <select class="form-control dropdown-toggle" id="police_verify" name="police_verify">
        <option value="{{$bcuser->police_verify}}">{{$bcuser->police_verify}}</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        </select>
        </div>
        <div class="col-4">
        <label for="">UFS Agreement:</label>
        <input type="text" class="form-control" name="ufs_agreement" id="ufs_agreement" value="{{$bcuser->ufs_agreement}}">
        </div>
        <div class="col-12">
        <label for="">Remark:</label>
        <textarea type="text" rows="2" class="form-control" name="agreement_remark" id="agreement_remark" >{{$bcuser->agreement_remark}}</textarea>
        </div>
        </div>
        </div>
        <div id="Banking" class="tabcontent">
        <h4>Banking Details:-</h4>  
        <div class="form-group row">
        <div class="col-4">
        <label for="">Bank Name:</label>
        <input type="text" class="form-control" name="bank_name" value="{{$bcuser->bank_name}}">
        <font style="color:red"> {{ $errors->has('bank_name') ?  $errors->first('bank_name') : '' }}</font>
        </div>
        <div class="col-4">
        <label for="">KO Code:</label>
        <input type="text" class="form-control" name="ko_code" value="{{$bcuser->ko_code}}">
        <font style="color:red"> {{ $errors->has('ko_code') ?  $errors->first('ko_code') : '' }} </font>
        </div>
        <div class="col-4">
        <label for="">Link Branch Name:</label>
        <input type="integer" class="form-control" name="link_branch" id="link_branch" value="{{$bcuser->link_branch}}">
        </div>
        <div class="col-4">
        <label for="">IFSC Code:</label>
        <input type="text" class="form-control" name="ifsc_code" value="{{$bcuser->ifsc_code}}">
        </div>
        <div class="col-4">
        <label for="">Account No:</label>
        <input type="integer" class="form-control" name="account_no" value="{{$bcuser->account_no}}">
        </div>
        <div class="col-4">
        <label for="">Payment Bank Name:</label>
        <input type="text" class="form-control" name="branch_name" value="{{$bcuser->branch_name}}">
        </div>
        <div class="col-4">
        <label for="">Amount:</label>
        <input type="integer" class="form-control" name="amount" id="amount" value="{{$bcuser->amount}}">
        </div>
        <div class="col-4">
        <label for="">Payment Date:</label>
        <input type="date" class="form-control" name="payment_date" id="payment_date" value="{{$bcuser->payment_date}}"></div>
        <div class="col-4">
        <label for="">Payment Status:</label>
        <select class="form-control dropdown-toggle" id="payment_status" name="payment_status">
        <option value="{{$bcuser->payment_status}}">{{$bcuser->payment_status}}</option>
        <option value="Received">Received</option>
        <option value="Not-Received">Not-Received</option>
        <option value="Exempted">Exempted</option>
        <option value="Migration">Migration</option>
        <option value="Cancelled">Cancelled</option>
        </select>
        </div>
        <div class="col-4">
        <label for="">UTR No:</label>
        <input type="text" class="form-control" name="utr_no" id="utr_no" value="{{$bcuser->utr_no}}">
        </div>
        <div class="col-4">
        <label for="">Activation Approval:</label>
        <select class="form-control dropdown-toggle" id="approval" name="approval">
        <option value="{{$bcuser->approval}}">{{$bcuser->approval}}</option>
        <option value="Approved">Approved</option>
        <option value="Not Approved">Not Approved</option>
        <option value="Pending">Pending</option>
        <option value="Suspend">Suspend</option>
        </select>
        </div>
        <div class="col-4">
        <label for="">Saving Account:</label>
        <input type="integer" class="form-control" name="saving_ac" id="saving_ac" value="{{$bcuser->saving_ac}}">
        </div>
        <div class="col-4">
        <label for="">OD Account:</label>
        <input type="integer" class="form-control" name="od_account" id="od_account" value="{{$bcuser->od_account}}">
        </div>
        <div class="col-4">
        <label for="">Branding Status:</label>
        <select class="form-control dropdown-toggle" id="branding_status" name="branding_status">
        <option value="{{$bcuser->branding_status}}">{{$bcuser->branding_status}}</option>
        <option value="Done">Done</option>
        <option value="Not Done">Not Done</option>
        </select>
        </div>
        <div class="col-4">
        <label for="">Request sent date:</label>
        <input type="date" class="form-control" name="request_sent_date" id="request_sent_date" value="{{$bcuser->request_sent_date}}">
        </div>
        <div class="col-4">
        <label for="">KO creation date:</label>
        <input type="date" class="form-control" name="ko_creation_date" id="ko_creation_date" value="{{$bcuser->ko_creation_date}}">
        </div>
       <!--  <div class="col-4">
        <label for="">Installation Done by:</label>
        <select class="form-control dropdown-toggle" id="installation_done_by" name="installation_done_by">
        <option value="{{$bcuser->installation_done_by}}">{{$bcuser->installation_done_by}}</option>
        <option value="Sandeep">Mr. Sandeep</option>
        <option value="Deepak">Mr. Deepak</option>
        <option value="Vishal">Mr. Vishal</option>
        </select>
        </div> -->
        <div class="col-4">
        <label for="">Installation Date:</label>
        <input type="date" class="form-control" name="installation_date" id="installation_date" value="{{$bcuser->installation_date}}">
        </div>
        <div class="col-4">
        <label for="">Dispatch Date:</label>
        <input type="date" class="form-control" name="dispatch_date" id="dispatch_date" value="{{$bcuser->dispatch_date}}">
        </div>
        <div class="col-4">
            <label for="">Village Code:</label>
            <input type="text" class="form-control" name="village_code" id="village_code" value="{{$bcuser->village_code}}">
            </div>
            <div class="col-4">
            <label for="">Location Type:</label>
            <select class="form-control dropdown-toggle" id="location_type" name="location_type">
            <option value="{{$bcuser->location_type}}">{{$bcuser->location_type}}</option>
            <option value="Rural">Rural</option>
            <option value="Urban">Urban</option>
            <option value="Semi-Urban">Semi-Urban</option>
            </select>
            </div>
            <div class="col-4">
            <label for="">Mandate Type:</label>
            <select class="form-control dropdown-toggle" id="mandate_type" name="mandate_type">
            <option value="{{$bcuser->mandate_type}}">{{$bcuser->mandate_type}}</option>
            <option value="SSA">SSA</option>
            <option value="Non-SSA">Non-SSA</option>
            </select>
            </div>
            <div class="col-4">
            <label for="">Latitude:</label>
            <input type="text" class="form-control" name="latitude" id="latitude" value="{{$bcuser->latitude}}">
            </div>
            <div class="col-4">
            <label for="">Longitude:</label>
            <input type="text" class="form-control" name="longitude" id="longitude" value="{{$bcuser->longitude}}">
            </div>
        </div> 
        </div>

        <div class="form-group" style="margin-top: 24px;">
          <input type="submit" class="btn btn-success" value="Update">
        </div>
      </form>
        </div>
    </div>
</div>

<script type="text/javascript">
  
    var input = document.getElementById('phone');
    document.querySelector('.phone').addEventListener('input', function() { 
    let text=this.value                                                      
    text=text.replace(/\D/g,'')                                             
    if(text.length>3) text=text.replace(/.{3}/,'$&-')                        
    if(text.length>7) text=text.replace(/.{7}/,'$&-')                        
    this.value=text;                                                         
    });
  
</script>
<script type="text/javascript">
      document.querySelector('.aadhaar').addEventListener('input', function() { 
      let text=this.value                                                      
      text=text.replace(/\D/g,'')                                             
      if(text.length>4) text=text.replace(/.{4}/,'$&-')                        
      if(text.length>9) text=text.replace(/.{9}/,'$&-')                        
      this.value=text; 
    });
  </script>
@endsection
 