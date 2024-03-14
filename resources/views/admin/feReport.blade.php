@extends('layouts.app')
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
@section('content')

<style type="text/css">
  .content-wrapper {
    min-height: 1080px!important;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.list') }}">Home</a></li>
              <li class="breadcrumb-item active">Back</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
   
      <div class="container-fluid">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
        @auth
          <!-- <a href="{{ url('/dashboard') }}">Dashboard</a> -->
        @else
          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        @if (Route::has('register'))
          <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
        @endauth
        </div>
        @endif
      <div class="w-4/5 mx-auto my-4 sm:w-1/2">
          <!-- <h2 class="text-2xl semi-bold mb-10 text-center">All Users</h2> -->
        @php $users = DB::table('users')->where('role', '4')->get(); @endphp
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            </tr>
          </thead>
          <tbody>
          @forelse ($users as $user)
          <tr>
            <td >{{ $loop->index + 1 }}</td>
            <td >{{$user->name}}</td>
            <td >{{$user->email}}</td>
            <td >
            @if(Cache::has('user-online' . $user->id))
                <span class="text-green-500" style="color: green; ">Online</span>
            @else
                <span class="text-gray-500" style="color: darkred; ">Offline</span>
            @endif
            </td>
          </tr>
          @empty
          <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
          @endforelse
          </tbody>
        </table>
      </div>
      </div>
      </div><!-- /.container-fluid -->
  </section>

    <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
            <div class="card card-danger">
                <div class="chart-container">
                <div class="chart has-fixed-height">
                  <canvas id="pie_basic" style="width:100%; max-width:100%"></canvas>
                </div>
                </div>
            </div>

            <div class="card card-danger">
                <div class="chart-container">
                <div class="chart has-fixed-height">
                  <canvas id="bar_basic" style="width:100%; max-width:100%"></canvas>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-danger">
                <div class="chart-container">
                <div class="chart has-fixed-height">
                  <canvas id="bank_basic" style="width:100%; max-width:100%"></canvas>
                </div>
                </div>
            </div>
        </div>
        </div>
      </div>
  </section>
    <!-- /.content -->
@section('eChart')
  <script src="{{ asset ('plugins/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset ('plugins/sparklines/sparkline.js') }}"></script>
  <script src="{{ asset ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <script src="{{ asset ('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <script>
      var xValues = ["Resolved", "Open", "Pending at Bank-end", "Pending at Bank-end", "Pending at Bank-end", "Work-in-Progress"];
      var yValues = [{{$resolve_count}}, {{$open_count}}, {{$pending_bankcount}}, {{$pending_bccount}}, {{$pending_techcount}}, {{$work_count}}];
      var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#ekf3b9",
        "#1e7145"
      ];
      new Chart("pie_basic", {
        type: "pie",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          title: {
            display: true,
            text: "All call record status"
          }
        }
      });
  </script> 

  <script>
      var xValues = ["BOB", "UCO", "SBI", "PNB", "BUPB", "BGGB", "BC SAKHI"];
      var yValues = [{{$bob_count}}, {{$uco_count}}, {{$sbi_count}}, {{$pnb_count}}, {{$bupb_count}}, {{$bggb_count}}, {{$sakhi_count}}];
      var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#e6c867",
        "#1e7145",
        "#e83e8c"
      ];
      new Chart("bank_basic", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          title: {
            display: true,
            text: "All Bank Record Count"
          }
        }
      });
  </script> 

  <script>
      var xValues = ["Vishal", "Arvind", "Babita", "Abhishek", "Digvijay", "Anurashi"];
      var yValues = [{{$tech1}}, {{$tech2}}, {{$tech3}}, {{$tech4}}, {{$tech5}}, {{$tech6}}];
      var barColors = [
        "#1e7145",
        "#e8c3b9",
        "#2b5797",
        "#e85459",
        "#5gf544",
        "#e83e8c"
      ];
      new Chart("bar_basic", {
        type: "pie",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          title: {
            display: true,
            text: "Tech support wise record status"
          }
        }
      });
  </script> 
@endsection

@section('script')
  <script>
    $(function () {
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
</div>
@endsection

