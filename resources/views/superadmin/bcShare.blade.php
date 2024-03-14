@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="3.3.6/css/bootstrap.min.css">
  <!-- <link href="http://meyerweb.com/eric/tools/css/reset/reset.css" rel="stylesheet" />-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
@endpush
@section('content')
<body class="hold-transition sidebar-mini">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Dashboard</h3>
            <!-- <a type="button" class="abc">Break</a> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('superadmin.list') }}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route ('superadmin.list')}}">Back</a></li>
              <!-- <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
  <section class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <div class="row">
          <div class="card col-md-4">
            <div class="card-body">
            <form action="{{ route ('superadmin.importBOB') }}" method="POST" name="importform" enctype="multipart/form-data">
              @csrf
              <input type="file" name="import_bob" class="form-control">
              <br>
              <button class="btn btn-success">Import BOB</button>
            </form>
            </div>
          </div>
          <div class="card col-md-4">
            <div class="card-body">
            <form action="{{ route ('superadmin.importPNB') }}" method="POST" name="importform" enctype="multipart/form-data">
              @csrf
              <input type="file" name="import_pnb" class="form-control">
              <br>
              <button class="btn btn-success">Import PNB</button>
            </form>
            </div>
          </div>
          <div class="card col-md-4">
            <div class="card-body">
            <form action="{{ route ('superadmin.importUCO') }}" method="POST" name="importform" enctype="multipart/form-data">
              @csrf
              <input type="file" name="import_uco" class="form-control">
              <br>
              <button class="btn btn-success">Import UCO</button>
            </form>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="card col-md-4">
            <div class="card-body">
            <form action="{{ route ('superadmin.importBUGB') }}" method="POST" name="importform" enctype="multipart/form-data">
              @csrf
              <input type="file" name="import_bugb" class="form-control">
              <br>
              <button class="btn btn-success">Import BUGB</button>
            </form>
            </div>
          </div>
          <div class="card col-md-4">
            <div class="card-body">
            <form action="{{ route ('superadmin.importSBI') }}" method="POST" name="importform" enctype="multipart/form-data">
              @csrf
              <input type="file" name="import_sbi" class="form-control">
              <br>
              <button class="btn btn-success">Import SBI</button>
            </form>
            </div>
          </div>
          <div class="card col-md-4">
            <div class="card-body">
            <form action="{{ route ('superadmin.importBGGB') }}" method="POST" name="importform" enctype="multipart/form-data">
              @csrf
              <input type="file" name="import_bggb" class="form-control">
              <br>
              <button class="btn btn-success">Import BGGB</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@if(isset($gdgfhfh))
  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endif
</body>
@endsection

@section('script')
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
