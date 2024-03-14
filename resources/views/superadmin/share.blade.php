@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr class="text-center">
                     
                     <th class="text-center">Name</th>
                     <th class="text-center">Name</th>
                     <th class="text-center">Phone</th>
                     <th class="text-center">KO Code</th>
                     <th class="text-center">DOB</th>
                   
                    </tr>
                    </thead>
                <tbody>
                @forelse ($bobs as $b)
                    <tr class="text-center">
                    <td class="text-center">{{$loop->index + 1}}</td>
                    <td class="text-center">{{ $b->bc_org }}</td>
                    <td class="text-center">{{ $b->vle_id }}</td>
                    <td class="text-center">{{ $b->total_payment }}</td>
                    <td class="text-center">{{ $b->tds }}</td> 
                    <td class="text-center">{{ $b->net_payable }}</td> 
                    </tr>
                @empty
                <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
                @endforelse
                </tbody>  
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
