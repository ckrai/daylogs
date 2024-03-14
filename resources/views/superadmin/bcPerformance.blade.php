@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-2"> 
         <a href="{{ route('superadmin.list') }}" class="btn btn-success">Back</a>
      </div>
      <div class="col-md-8"> 
        <div class="card-body" style="text-align: center; display: block;">
          <form style=" display: inline-block; width: 50%;" action="{{ route ('superadmin.import_bcfile') }}" method="POST" name="importform1" enctype="multipart/form-data">
            @csrf
            <input type="file" name="import_bcfile" class="form-control">
            <br>
            <button class="btn btn-success">Import File</button>
            <a class="btn btn-primary" href="{{ route('superadmin.export_bcfile') }}">Export BC User Data</a>
          </form>
        </div>
       <!--  <div class="topnav">
          <a href="{{ route('superadmin.list') }}" class="btn btn-success">Back</a>
          <a class="btn btn-success btn-submit" href="#" style="float:right;"> Refresh</a>
        </div> -->
      </div>
      <div class="col-md-2"> 
        <a class="btn btn-success btn-submit" href="{{route('superadmin.fe_report')}}">FE Performance </a>
        <a class="btn btn-success btn-submit" href="#" style="float:right;">Refresh</a>
      </div>
        <br>
    </div>

    <div class="panel-body">
       <!--  <div class="container col-md-8">
          <form action="#" method="GET">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search by FE, BC Name & KO Code" aria-describedby="basic-addon2" name="search">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">Search</button>
            </div>
            </div>
          </form>
        </div>
 -->
          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

        <div class="col-md-12">
            
          <div class="text-center">
            <div class="row">
              <div class="col-6">
                <legend style="color: green; font-weight: bold; display: flex;">BC Performance Details</legend>
              </div>

              <div class="col-3">
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Month</span>
                  </div>
                  <select class="form-control dropdown-toggle" aria-label="Small" id="p_month" name="p_month"  onchange="window.location = 'http://www.rozzgaar.in/superadmin/bc-performance?p_month='+this.value+'&p_year={{$p_year}}'">
                   @for($i=1;$i<13;$i++)
                      <option @if($i==$p_month) selected @endif value="{{$i}}">{{$i}}</option>
                   @endfor
                  </select>
                </div>
              </div>

              <div class="col-3">
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Year</span>
                  </div>
                  <select class="form-control dropdown-toggle" aria-label="Small" id="p_year" name="p_year"  onchange="window.location= 'http://www.rozzgaar.in/superadmin/bc-performance?p_year='+this.value+'&p_month={{$p_month}}'">
                     @for($i=2010;$i<=date('Y');$i++)
                        <option @if($i==$p_year) selected @endif value="{{$i}}">{{$i}}</option>
                     @endfor
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>

        <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
             <th class="text-center">S.No</th>
             <th class="text-center">FE Name</a></th>
             <th class="text-center">BC Name</a></th>
             <th class="text-center">KO Code</a></th>
             <th class="text-center">Month</a></th>
             <th class="text-center">Year</a></th>
             <!-- <th class="text-center">Score</a></th>
             <th class="text-center">Grade</a></th> -->
             <!-- <th class="text-center">Total Txs</th>
             <th class="text-center">A/C Open (Funded)</th>
             <th class="text-center">A/C Open (Non-Funded)</th>
             <th class="text-center">RuPay-Txs</a></th>
             <th class="text-center">BBPS</th>
             <th class="text-center">RD/FD</th>
             <th class="text-center">PMJJBY</a></th>
             <th class="text-center">PMSBY</th>
             <th class="text-center">APY</th> -->
             <th class="text-center">Input Data</th>
             <th class="text-center">View</th>
            </tr>
            </thead>
           <tbody>
           @forelse ($performances as $p)
            <tr class="text-center">
            <td class="text-center">{{$loop->index + 1}}
            <!-- {{(((isset($_REQUEST['page'])?$_REQUEST['page']:'1')-1)*25)+($loop->index + 1)}} --></td>
            <td class="text-center">{{ $p->fe_name }}</td>
            <td class="text-center">{{ $p->bc_name }}</td>
            <td class="text-center">{{ $p->ko_code }}</td>
            <td class="text-center">{{ $p->p_month }}</td>
            <td class="text-center">{{ $p->p_year }}</td>
           <!--  <td class="text-center">65</td>
            <td class="text-center">A</td> -->
            <!-- <td class="text-center">{{ $p->total_tran }}</td>
            <td class="text-center">{{ $p->ac_funded }}</td>
            <td class="text-center">{{ $p->ac_non_funded }}</td>
            <td class="text-center">{{ $p->rupay_trnx }}</td> 
            <td class="text-center">{{ $p->bbps }}</td>
            <td class="text-center">{{ $p->rd_fd }}</td>
            <td class="text-center">{{ $p->pmjby }}</td> 
            <td class="text-center">{{ $p->pmsby }}</td>
            <td class="text-center">{{ $p->apy }}</td> -->
            <td class="text-center"><a href="{{ url('superadmin/input-data/'.$p->ko_code.'?p_month='.$p->p_month.'&p_year='.$p->p_year) }}" class="btn btn-sm btn-outline-success py-0">Input Data</a></td>
            <td class="text-center"><a href="{{ url('superadmin/view-report/'.$p->ko_code.'?p_month='.$p->p_month.'&p_year='.$p->p_year) }}" class="btn btn-sm btn-outline-success py-0">View Report</a></td>
            </tr>
            @empty
            <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
            @endforelse
            </tbody>
        </table>
        </div>
      
     </div>
</div>

@endsection