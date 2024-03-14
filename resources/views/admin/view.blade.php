@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
@endpush
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Dashboard</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.list') }}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('admin.list') }}">Back</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
  <section class="content">
      <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          
         <h4><b>Detail:-</b></h4>
          <div class="form-group row">
          <div class="col-4"><strong>FE Name: </strong>{{$bcuser->fe_name}}</div>
          <div class="col-4"><strong>BC Name: </strong>{{ $bcuser->bc_name }}</div>
          <div class="col-4"><strong>Mobile: </strong>{{$bcuser->phone}}</div>
          <div class="col-4"><strong>Date of Birth: </strong>{{$bcuser->dob}}</div>
          <div class="col-4"><strong>Issue: </strong>{{ $bcuser->issue }}</div>
          <div class="col-4"><strong>State: </strong>{{$bcuser->state}}</div>
          <div class="col-4"><strong>District: </strong>{{$bcuser->district}}</div>
          <div class="col-4"><strong>Call Status: </strong>{{ $bcuser->call_status }}</div>
          <div class="col-4"><strong>Remark: </strong>{{$bcuser->remark}}</div>
          <div class="col-4"><strong>Attended By: </strong>{{ $bcuser->attend_by }}</div>
          <div class="col-4"><strong>Bank Name: </strong>{{$bcuser->bank_name}}</div>
          <div class="col-4"><strong>KO Code: </strong>{{ $bcuser->ko_code }}</div>
          </div>
        <br/>
                       
        </div>
    </div>
  </section>
</div>
@endsection
