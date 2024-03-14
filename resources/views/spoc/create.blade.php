@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="3.3.6/css/bootstrap.min.css">
<!-- <link href="http://meyerweb.com/eric/tools/css/reset/reset.css" rel="stylesheet" />-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
@endpush
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">BC Complaint Form</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('tech.list') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  
<section class="content">
  <div class="container-fluid">   
    <div class="col-md-10">
  <body>
    <form id="regForm" action="{{route('tech.save')}}" method="post" enctype="multipart/form-data">
      @csrf  
      <div class="form-group row">
      <div class="col-4">
        <label for="">KO Code:</label>
        <input type="text" class="form-control" id='ko_code' name="ko_code" placeholder="Enter KO Code">
          <br><br><br><br>
      </div>
      <div class="col-4">
        <div>
          <label for="">FE Name:</label>
          <select class="form-control dropdown-toggle" id="fe_name" name="fe_name">
          <option value="">Select FE Name</option>
          <option value="Ajeet Singh Baghel">Ajeet Singh Baghel</option>
          <option value="Ashish Yadav">Ashish Yadav</option>
          <option value="Avneesh Shukla">Avneesh Shukla</option>
          <option value="Chandan Jena">Chandan Jena</option>
          <option value="Dau Lal">Dau Lal</option>
          <option value="Gaurav Dewangan">Gaurav Dewangan</option>
          <option value="JP Dubey">JP Dubey</option>
          <option value="Kamlakar Singh">Kamlakar Singh</option>
          <option value="Lalit Dhiman">Lalit Dhiman</option>
          <option value="Manendra Mishra">Manendra Mishra</option>
          <option value="Mithlesh Kumar">Mithlesh Kumar</option>
          <option value="Muktesh Kumar">Muktesh Kumar</option>
          <option value="Mohd Zubair">Mohd Zubair</option>
          <option value="Pradeep Kumar">Pradeep Kumar</option>
          <option value="Raghvendra Sharma">Raghvendra Sharma</option>
          <option value="Rakesh Gendre">Rakesh Gendre</option>
          <option value="Raj Kumar">Raj Kumar</option>
          <option value="Ramesh Sahu">Ramesh Sahu</option>
          <option value="Rimjhim">Rimjhim</option>
          <option value="Sanket Amin">Sanket Amin</option>
          <option value="Sarika Bhatia">Sarika Bhatia</option>
          <option value="TBA">TBA</option>
          </select>
          <font style="color:red">{{ $errors->has('fe_name') ?  $errors->first('fe_name') : '' }} </font>
        </div>  
        <div>
          <label for="">BC Name:</label>
          <input type="text" class="form-control" name="bc_name" id="bc_name" placeholder="Enter BC Name">
          <font style="color:red"> {{ $errors->has('bc_name') ?  $errors->first('bc_name') : '' }} </font>
        </div>
        <div>
          <label for="" class="form-label">State:</label>
          <select type="text" class="form-control dropdown-toggle" id="state" name="state" placeholder="Enter State">
          <option value="">Select State</option>
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
        <div>
          <label for="">District:</label>
          <input type="text" class="form-control" name="district" id="district" placeholder="Enter District">
        </div>
      </div>    
      <div class="col-4">
        <label for="">Issues:</label>
        <select class="form-control dropdown-toggle" id="issue" name="issue">
          <option value="">Select</option>
          <option value="Login Issue">Login Issue</option>
          <option value="Software Installation">Software Installation</option>
          <option value="Perry Service">Perry Service</option>
          <option value="Account Opening">Account Opening</option>
          <option value="Transaction Issue">Transaction Issue</option>
          <option value="Pin-Pad Installation">Pin-Pad Installation</option>
          <option value="Passbook Printer">Passbook Printer</option>
          <option value="Unique-id Generation">Unique-id Generation</option>
          <option value="RD and FD Issue">RD and FD Issue</option>
          <option value="Insurance">Insurance</option>
          <option value="Server Issue">Server Issue</option>
        </select>
        <label for="">Bank Name:</label>
        <select class="form-control dropdown-toggle" id="bank_name" name="bank_name">
          <option value="">Select Bank</option>
          <option value="BOB">BOB</option>
          <option value="BC SAKHI">BC SAKHI</option>
          <option value="UCO">UCO </option>
          <option value="PNB">PNB</option>
          <option value="SBI">SBI</option>
          <option value="BUPB">BUPB</option>
          <option value="BGGB">BGGB</option>
        </select>
        <label for="">Phone:</label>
        <input type="text" class="form-control phone" name="phone" id="phone" placeholder="123-456-7890">
      </div>   
      </div>
      <div style="float:right;">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </body>
    </div> 
  </div>
</section>
</div>
@endsection