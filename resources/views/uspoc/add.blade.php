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
            <h4 class="m-0">BC View Form</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('support.list') }}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('support.list') }}">Back</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
      <div class="row justify-content-center">
      <div class="col-md-10">
        <h4 style="color:#3ea1e8;"><b>BC Details:-</b></h4>
        <div class="form-inline">
         <!--  <label class="sr-only col-2" for="">KO Code</label>
          <input type="text" class="form-control" id="ko_code" value="#" readonly>
          <label class="sr-only col-3" for="">BC Name</label>
          <input type="text" class="form-control" id="bc_name" value="#" readonly> -->
        <form action="{{route('support.save')}}" method="post" enctype="multipart/form-data">
          @csrf
          <label class="sr-only col-2" for="">Purpose</label>
            <select class="form-control dropdown-toggle" id="purpose" name="purpose">
                <option value="">Select purpose</option>
                <option value="Target">Target</option>
                <option value="Performance">Performance</option>
                <option value="Account Open">Account Open</option>
                <option value="Transaction">Transaction</option>
                <option value="Inactive BC">Inactive BC</option>
                <option value="Inactive BC Sakhi">Inactive BC Sakhi</option>
                <option value="Campaign APY">Campaign APY</option>
                <option value="Campaign PMSBY & PMJJBY">Campaign PMSBY & PMJJBY</option>
                <option value="Login Day Target APY">Login Day Target APY</option>
                <option value="Login Day Target PMSBY">Login Day Target PMSBY</option>
                <option value="Login Day Target PMJJBY">Login Day Target PMJJBY</option>
                <option value="Inform About IIBF From Apply">Inform About IIBF From Apply</option>
                <option value="Other">Other</option>
            </select>
          <label class="sr-only col-3" for="">Remark</label>
          <input type="text" class="form-control" id="remark_purpose" name="remark_purpose" placeholder="Enter remark">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
        </div>
      </div>
    </section>
</div>
@endsection