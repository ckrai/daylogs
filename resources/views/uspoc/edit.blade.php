@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="form-group" style="margin-top: 24px;">
              <a href="{{ route('account.list') }}" class="btn btn-success">Back</a>
              <a href="{{ route('account.list') }}" class="btn btn-success" style="float: right; display: block;"> BC LIST</a>
          </div>
          @if(session()->has('message'))
          <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif
          <legend style="color: green; font-weight: bold;">BC Update Form</legend>
          <form action="{{ route('account.update',$bcuser->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
              <div id="Banking" class="tabcontent">
                <h4>Details:-</h4>  
                <div class="form-group row">
                <div class="col-4">
                  <label for="">Purpose:</label>
                  <input type="integer" class="form-control" name="amount" id="amount" value="{{$bcuser->purpose}}">
                </div>
                <div class="col-4">
                  <label for="">Payment Bank Name:</label>
                  <input type="text" class="form-control" name="branch_name" id="branch_name" value="{{$bcuser->branch_name}}">
                </div>
                <div class="col-4">
                  <label for="">Payment Status:</label>
                  <select class="form-control dropdown-toggle" id="payment_status" name="payment_status" value="{{$bcuser->payment_status}}">
                    <option value="{{$bcuser->payment_status}}">{{$bcuser->payment_status}}</option>
                    <option value="Received">Received</option>
                    <option value="Not-Received">Not-Received</option>
                    <option value="Exempted">Exempted</option>
                    <option value="Migration">Migration</option>
                    <option value="Cancelled">Cancelled</option>
                  </select>
                </div>
                <div class="col-4">
                  <label for="">Payment Date:</label>
                  <input type="date" class="form-control" name="payment_date" id="payment_date" value="{{$bcuser->payment_date}}">
                </div>
                <div class="col-4">
                  <label for="">Branding Status:</label>
                  <select class="form-control dropdown-toggle" id="branding_status" name="branding_status" value="{{$bcuser->branding_status}}">
                    <option value="">Select</option>
                    <option value="Done">Done</option>
                    <option value="Not Done">Not Done</option>
                  </select>
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
@endsection