@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">BC Assign</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('tech.list') }}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('tech.list') }}">Back</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
            @if(session()->has('message'))
              <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
            @endif
            <!-- <legend style="color: green; font-weight: bold;">Attend by: {{ Auth::user()->name }}</legend> -->
            <div class="col-4">
              <h3 class="card-title" style="text-align: center;"><b>Attend by:</b>{{ Auth::user()->name }}</br></br></h3>
            </div>
            <form action="{{ route('tech.convert_ticket',$bcuser->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('post')
              <div class="form-group row">
                <br><br></h2>
                <div class="col-4">
                  <label for="">Assign to:</label>
                  <select class="form-control dropdown-toggle" id="attend_by" name="attend_by">
                  <option value="{{$bcuser->attend_by}}">{{$bcuser->attend_by}}</option>
                  <option value="Vishal Srivastava">Vishal Srivastava</option>
                  <option value="Babita Mishra">Babita Mishra</option>
                  <option value="Abhishek Kumar">Abhishek Kumar</option>
                  <option value="Arvind Kumar">Arvind Kumar</option>
                  <option value="Digvijay Patil">Digvijay Patil</option>
                  <option value="Anurashi">Anurashi</option>
                  <option value="TBA">TBA</option>
                  </select>
                </div>
                <div class="col-4">
                  <label for="">Call Status:</label>
                  <!-- <input type="text" class="form-control" name="call_status" id="call_status" value="{{$bcuser->call_status}}"> -->
                  <select class="form-control dropdown-toggle" id="call_status" name="call_status">
                  <option value="{{$bcuser->call_status}}">{{$bcuser->call_status}}</option>
                  <option value="Open">Open</option>
                  <option value="Pending at Bank-end">Pending at Bank-end</option>
                  <option value="Pending at BC-end">Pending at BC-end</option>
                  <option value="Pending at Technical team">Pending at Technical team</option>
                  <option value="Resolved">Resolved</option>
                  <option value="Work-in-Progress">Work-in-Progress</option>
                  </select>
                </div>
                <div class="col-4">
                  <label for="">Call Close:</label>
                  <input type="text" class="form-control" name="call_close" id="call_close" value="{{$bcuser->call_close}}">
                </div>
                <div class="col-12">
                  <label for="">Remark:</label>
                  <textarea type="text" rows="3" class="form-control" name="remark" id="remark">{{$bcuser->remark}}</textarea>
                </div>
                </div> 
                <div class="form-group" style="margin-top: 24px;">
                  <input type="submit" class="btn btn-success" value="Update">
                  <a href="{{ route('tech.list') }}" class="btn btn-info btn-sm ml-2">Cancel</a>
                </div>
            </form>
        </div>
      </div>
    </section>
  <script type="text/javascript">
      $('#call_close').datetimepicker({
      // options here
      });
  </script>
</div>
@endsection