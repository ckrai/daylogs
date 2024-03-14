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

      <div class="col-md-12">
        <h4 style="color:#3ea1e8;"><b>BC Details:-</b></h4>

      <div class="row g-3">
        <div class="col-md-2">
          <label for="inputEmail4" class="form-label">KO Code</label>
         <input type="text" class="form-control" id="ko_code" value="{{ $bcuser->ko_code }}" readonly>
        </div>
        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">BC Name</label>
          <input type="text" class="form-control" id="bc_name" value="{{ $bcuser->bc_name }}" readonly>
        </div>
        <div class="col-md-3">
          <label for="inputCity" class="form-label">Phone</label>
          <input type="text" class="form-control" id="phone" value="{{ $bcuser->phone }}" readonly>
        </div>
        <div class="col-md-3">
          <label for="inputCity" class="form-label">District</label>
          <input type="text" class="form-control" id="district" value="{{ $bcuser->district }}" readonly>
        </div>
      </div>

      <form class="row g-3" action="{{route('support.save', $bcuser->id )}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4">
          <label for="purpose" class="form-label">Purpose</label>
          <input type="text" class="form-control" id="bc_id" name="bc_id" value="{{ $bcuser->id }}" hidden>
          <select class="form-control dropdown-toggle" id="purpose" name="purpose">
          <option value="">Select purpose</option>
          <option value="Target">Target</option>
          <option value="Performance">Performance</option>
          <option value="Account Open">Account Open</option>
          <option value="Transaction">Transaction</option>
          <option value="Inactive BC">Inactive BC</option>
          <option value="Inactive BC Sakhi">Inactive BC Sakhi</option>
          <option value="BOB World Activation">BOB World Activation</option>
          <option value="Campaign APY">Campaign APY</option>
          <option value="Campaign PMSBY & PMJJBY">Campaign PMSBY & PMJJBY</option>
          <option value="Login Day Target APY">Login Day Target APY</option>
          <option value="Login Day Target PMSBY">Login Day Target PMSBY</option>
          <option value="Login Day Target PMJJBY">Login Day Target PMJJBY</option>
          <option value="Inform About IIBF From Apply">Inform About IIBF From Apply</option>
          <option value="Other">Other</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="remark_purpose">Remark</label>
            <input type="text" class="form-control" id="remark_purpose" name="remark_purpose" placeholder="Enter remark">
        </div>
        <div class="col-md-1">
          <label for="" class="form-label"></label>
          <button type="submit" class="form-control btn btn-primary">Submit</button>
        </div>
        
      </form>

        <div class="form-group" style="margin-top: 24px;">
          <a href="{{ route('support.list', $bcuser->id) }}" class="btn btn-primary btn-sm ml-2">Edit</a>
          <a href="{{ route('support.list') }}" class="btn btn-outline-danger btn-sm ml-2">Back</a><br/><br/>
        </div>

        <h5 style="color:palevioletred;"><b>BC Case-History:-</b></h5>
        @forelse ($allbcusers as $bcuser)
        <div><strong>S.No: </strong>{{ $loop->index + 1 }}</div>
        <div class="form-group row">
        <div class="col-4"><strong>Purpose: </strong>{{$bcuser->purpose}}</div>
        <div class="col-4"><strong>Created Date: </strong>{{$bcuser->created_at}}</div>
        <div class="col-12"><strong>Remark: </strong>{{$bcuser->remark_purpose}}<br/><br/></div>
        </div>
        @empty
            <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
        @endforelse
      </div>
      </div>
      </div>
    </section>
</div>
@endsection
