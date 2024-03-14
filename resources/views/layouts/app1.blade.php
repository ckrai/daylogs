<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daylogs | Dashboard</title>
  @if(Auth::user()->role == '6')
    <title>Daylogs | Dashboard</title>
  @endif
  <meta name="csrf-token" content="{{ csrf_token() }}" charset="utf-8">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.1.0/echarts-en.common.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>  
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css') }}">
</head>

<style type="text/css">
  .sidebar-dark-primary {
    background-color: #a35f6c!important;
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/vaa-logo.png')}}" alt="VAA Logo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <ul class="navbar-nav ml-auto">
        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @if(Auth::user()->role == '4')
              <a class="dropdown-item" href="{{ route('ufs.pro') }}">
                  {{ __('Profile') }}
              </a>
              @endif
              @if(Auth::user()->role == '5')
              <a class="dropdown-item" href="{{ route('profileAll') }}">
                  {{ __('Profile') }}
              </a>
              @endif
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
          </div>
        </li>
        @endguest
      </ul>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @if(Auth::user()->role == '1')
    <a href="{{ route ('superadmin.list') }}" class="brand-link">
      <img src="{{ url('dist/img/upicon_logo.png') }}" alt="UPICON Logo" class="brand-image elevation-3" style="opacity: 20.2">
      <span class="brand-text font-weight-light">Daylogs Panel</span>
    </a>
    @endif
    @if(Auth::user()->role == '2')
    <a href="{{ route ('upicon.index') }}" class="brand-link">
      <img src="{{ url('dist/img/upicon_logo.png') }}" alt="UPICON Logo" class="brand-image elevation-3" style="opacity: 20.2">
      <span class="brand-text font-weight-light">Daylogs</span>
    </a>
    @endif
    @if(Auth::user()->role == '3')
    <a href="{{ route ('varion.index') }}" class="brand-link">
      <img src="{{ url('dist/img/upicon_logo.png') }}" alt="VAA Logo" class="brand-image elevation-3" style="opacity: 20.2">
      <span class="brand-text font-weight-light">Daylogs Panel</span>
    </a>
    @endif
    @if(Auth::user()->role == '4')
    <a href="{{ route ('ufs.index') }}" class="brand-link">
      <img src="{{ url('dist/img/upicon_logo.png') }}" alt="UFS Logo" class="brand-image elevation-3" style="opacity: 20.2">
      <span class="brand-text font-weight-light">Daylogs</span>
    </a>
    @endif

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @if(Auth::user()->role == '1' )
            <li class="nav-item menu-open">
              <a href="{{ route ('superadmin.list') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>Import List
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
          @endif

          @if(Auth::user()->role == '2' )
            <li class="nav-item menu-open">
              <a href="{{ route ('upicon.index') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
             <li class="nav-item">
              <a href="{{ route ('upicon.attendance') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Attendance List
                </p>
              </a>
            </li>
             <li class="nav-item">
              <a href="{{ route ('upicon.add') }}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>Add User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>Details
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Department</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Holiday List</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>Department
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
              <!-- <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>XYZ</p>
                  </a>
                </li>
              </ul> -->
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>B List
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bank</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Report</p>
                  </a>
                </li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>Report
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
          @endif

          @if(Auth::user()->role == '3' )
            <li class="nav-item menu-open">
              <a href="{{ route ('varion.index') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>My Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Knowledge Bank</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>B List
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bank  </p>
                  </a>
                </li>
              
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p> List
                </p>
              </a>
            </li> 
           
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>Report
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
          @endif

          @if(Auth::user()->role == '4' )
            <li class="nav-item menu-open">
              <a href="{{ route ('ufs.index') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>My Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Knowledge Bank</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p> List
                </p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p> Status Detail
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Open</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Resolved</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>Report
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
          @endif

          @if(Auth::user()->role == '5' )
            <li class="nav-item menu-open">
              <a href="{{ route ('user.index') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>My Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Knowledge Bank</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>Bank</p>
              </a>
            </li>
          @endif
        </ul>
      </nav>
    </div>
  </aside>

 @yield('content')

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018-2023 <a href="https://upicon.in">UPICON</a>.</strong> All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.2.0 -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
    <script src="{{ asset ('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
     <!-- ChartJS -->
    <script src="{{ asset ('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset ('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset ('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset ('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset ('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset ('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ('dist/js/adminlte.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.css"/>
    <script type="text/javascript">
          $('#call_close').datetimepicker({
     });
    </script>

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

    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- Script -->
    <script type="text/javascript">
        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){

          $( "#ko_code" ).autocomplete({
            source: function( request, response ) {
              // Fetch data
              $.ajax({
                url:"{{route('ufs.index')}}",
                type: 'post',
                dataType: "json",
                data: {
                   _token: CSRF_TOKEN,
                   search: request.term
                },
                success: function( data ) {
                   response( data );
                }
              });
            },
            select: function (event, ui) {
               // Set selection
               $('#ko_code').val(ui.item.label); // display the selected text
               $('#bc_name').val(ui.item.value); // save selected id to input
               $('#fe_name').val(ui.item.value1);
               $('#state').val(ui.item.value2);
               $('#district').val(ui.item.value3);
               $('#phone').val(ui.item.value4);
               $('#bank_name').val(ui.item.value5);
               $('#issue').val(ui.item.value6);
               $('#attend_by').val(ui.item.value7);
               $('#call_status').val(ui.item.value8);
               return false;
            }
          });
        });
    </script>

@yield('eChart')

@yield('script')

    <script type="text/javascript">
      @if(isset(Auth::user()->id))  
      setInterval(isuserActive, 1000);
      function  isuserActive(){
      $.ajax({
      url: "{{url('isuser-active?id='.Auth::user()->id)}}",
      context: document.body
      }).done(function() {
      $( this ).addClass( "done" );
      });
       }
       window.onload = function() {
        sessionStart = Date.now();
        timer = setInterval(function() {
           /* if (Date.now() - sessionStart > 10 * 60 * 1000) {
               if (confirm("Your session is about to timeout. Do you wish to continue?")) {
                     sessionStart = Date.now();
                }
            } else if (Date.now() - sessionStart > 15 * 60 * 1000) {
                clearTimeout(timer);
                alert("Session Timed out!");
                window.location = "http://www.example.com/login";
            }*/
           if (Date.now() - sessionStart > 3 * 60 * 10000) {
                  clearTimeout(timer);
                  alert("Session Timed out!");
                  window.location = "http://www.rozzgaar.in/logout";
          }
        }, 1000);
      };
    </script>
 @endif
</body>
</html>
