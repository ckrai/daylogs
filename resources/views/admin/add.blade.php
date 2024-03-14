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
            <h3 class="m-0">Form</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('upicon.index') }}">Home</a></li>
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
        <form id="regForm" action="{{ route('upicon.save') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <div class="col-3">
              <label for="">Name:</label>
              <input type="text" class="form-control" id='name' name="name" placeholder="Enter name">
              <font style="color:red">{{ $errors->has('name') ?  $errors->first('name') : '' }} </font>
            </div>
            <div class="col-2">
              <label for="">Email:</label>
              <input type="email" class="form-control" id='email' name="email" placeholder="Enter email">
            </div>
            <div class="col-4">
              <label for="">Password:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
              <font style="color:red"> {{ $errors->has('password') ?  $errors->first('password') : '' }} </font>
            </div>
            <div class="col-3">
              <label for="">Mobile:</label>
              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile">
            </div> 
            <div class="col-3">
              <label for="">Address:</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
              <font style="color:red"> {{ $errors->has('address') ?  $errors->first('address') : '' }} </font>
            </div>
            <div class="col-2">
              <label for="">Dept ID:</label>
              <select class="form-control dropdown-toggle" id="dept_id" name="dept_id">
              <option value="">Select here</option>
              <option value="1">UPICON</option>
              <option value="2">VARION</option>
              <option value="3">UFS</option>
              <option value="4">USER</option>
              </select>
            </div> 
            <div class="col-2">
              <label for="">Designation:</label>
              <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter designation">
            </div> 
            <div class="col-2">
              <label for="">Work Station:</label>
              <input type="text" class="form-control" name="work_station" id="work_station" placeholder="Enter work station">
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