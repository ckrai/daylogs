@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">BC Update Form</h3>
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
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-12">
        @if(session()->has('message'))
          <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
        @endif
        <!-- <legend style="color: green; font-weight: bold;">BC Update Form </legend> -->
      <form action="{{ route('admin.update',$bcuser->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group row">
          <div class="col-2">
            <label for="">KO Code:</label>
            <input type="text" class="form-control" id='ko_code' name="ko_code" placeholder="Enter KO Code" value="{{ $bcuser->ko_code }}">
          </div>
          <div class="col-3">
            <label for="">FE Name:</label>
            <select class="form-control dropdown-toggle" id="fe_name" name="fe_name">
            <option value="{{ $bcuser->fe_name }}">{{ $bcuser->fe_name }}</option>
            <option value="Ajeet Singh Baghel">Ajeet Singh Baghel</option>
            <option value="Archana Barnwal">Archana Barnwal</option>
            <option value="Lalit Dhiman">Lalit Dhiman</option>
            <option value="Raghvendra Sharma">Raghvendra Sharma</option>
            <option value="Pradeep Kumar">Pradeep Kumar</option>
            <option value="DauLal">DauLal</option>
            <option value="Ramesh Kumar Sahu">Ramesh Kumar Sahu</option>
            <option value="Akhilesh Dwivedi">Akhilesh Dwivedi</option>
            <option value="Avneesh Shukla">Avneesh Shukla</option>
            <option value="Gaurav Kuamr Pandey">Gaurav Kuamr Pandey</option>
            <option value="Ashok Kumar">Ashok Kumar</option>
            <option value="Abhishek Kumar">Abhishek Kumar</option>
            <option value="Chandan Kumar Jena">Chandan Kumar Jena</option>
            <option value="Sarika Bhatia">Sarika Bhatia</option>
            <option value="Sanket Amin">Sanket Amin</option>
            <option value="Rakesh Gendre">Rakesh Gendre</option>
            <option value="Deepak Kumar">Deepak Kumar</option>
            <option value="Niraj Mishra">Niraj Mishra</option>
            <option value="Kamalakar Singh">Kamalakar Singh</option>
            <option value="Muktesh Kumar Maurya">Muktesh Kumar Maurya</option>
            <option value="Manendra Mishra">Manendra Mishra</option>
            <option value="Manoj Kumar Pandey">Manoj Kumar Pandey</option>
            <option value="Guravaiah Talari">Guravaiah Talari</option>
            <option value="Thalari Ashok Kumar">Thalari Ashok Kumar</option>
            <option value="Rimjhim Bohra">Rimjhim Bohra</option>
            <option value="Ravish Mishra">Ravish Mishra</option>
            <option value="Chandan kumar">Chandan kumar</option>
            <option value="Hira Jangde">Hira Jangde</option>
            <option value="Vijay Kumar">Vijay Kumar</option>
            <option value="Manoj Kumar Sahu">Manoj Kumar Sahu</option>
            <option value="Rohit Singh">Rohit Singh</option>
            <option value="Harshith M">Harshith M</option>
            <option value="Mohsin Khan">Mohsin Khan</option>
            <option value="Rohit Prakash More">Rohit Prakash More</option>
            <option value="Nilesh Ravishankar Mumadwar">Nilesh Ravishankar Mumadwar</option>
            <option value="Prince Thomas Rathinam.J">Prince Thomas Rathinam.J</option>
            <option value="Edem Arun Kumar">Edem Arun Kumar</option>
            <option value="TBA">TBA</option>
            </select>
            <font style="color:red">{{ $errors->has('fe_name') ?  $errors->first('fe_name') : '' }} </font>
          </div>  
          <div class="col-3">
            <label for="">BC Name:</label>
            <input type="text" class="form-control" name="bc_name" id="bc_name" value="{{ $bcuser->bc_name }}">
            <font style="color:red"> {{ $errors->has('bc_name') ?  $errors->first('bc_name') : '' }} </font>
          </div>
          <div class="col-2">
            <label for="" class="form-label">State:</label>
            <select type="text" class="form-control dropdown-toggle" id="state" name="state">
            <option value="{{ $bcuser->state }}">{{ $bcuser->state }}</option>
            <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
            <option value="ANDAMAN & NICOBAR">ANDAMAN & NICOBAR</option>
            <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
            <option value="ASSAM">ASSAM</option>
            <option value="BIHAR">BIHAR</option>
            <option value="CHHATTISGARH">CHHATTISGARH</option>
            <option value="CHANDIGARH">CHANDIGARH</option>
            <option value="DADRA & NAGAR HAVELI">DADRA & NAGAR HAVELI</option>
            <option value="DAMAN & DIU">DAMAN & DIU</option>
            <option value="DELHI">DELHI</option>
            <option value="GOA">GOA</option>
            <option value="GUJARAT">GUJARAT</option>
            <option value="HARYANA">HARYANA</option>
            <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
            <option value="JAMMU & KASHMIR">JAMMU & KASHMIR</option>
            <option value="JHARKHAND">JHARKHAND</option>
            <option value="KARNATAKA">KARNATAKA</option>
            <option value="KERALA">KERALA</option>
            <option value="LAKSHADWEEP">LAKSHADWEEP</option>
            <option value="LADAKH">LADAKH</option>
            <option value="MADHYA PRADESH">MADHYA PRADESH</option>
            <option value="MAHARASHTRA">MAHARASHTRA</option>
            <option value="MANIPUR">MANIPUR</option>
            <option value="MEGHALAYA">MEGHALAYA</option>
            <option value="MIZORAM">MIZORAM</option>
            <option value="NAGALAND">NAGALAND</option>
            <option value="ODISHA">ODISHA</option>
            <option value="PUDUCHERRY">PUDUCHERRY</option>
            <option value="PUNJAB">PUNJAB</option>
            <option value="RAJASTHAN">RAJASTHAN</option>
            <option value="SIKKIM">SIKKIM</option>
            <option value="TAMIL NADU">TAMIL NADU</option>
            <option value="TRIPURA">TRIPURA</option>
            <option value="UTTARAKHAND">UTTARAKHAND</option>
            <option value="UTTAR PRADESH">UTTAR PRADESH</option>
            <option value="WEST BENGAL">WEST BENGAL</option>
            </select>
          </div>
          <div class="col-2">
           <label for="">District:</label>
           <input type="text" class="form-control" name="district" id="district" value="{{ $bcuser->district }}">
          </div>
          <div class="col-2">
           <label for="">Region:</label>
           <input type="text" class="form-control" name="region" id="region" value="{{ $bcuser->region }}">
          </div>
          <div class="col-2">
            <label for="">Bank Name:</label>
            <select class="form-control dropdown-toggle" id="bank_name" name="bank_name">
            <option value="{{ $bcuser->bank_name }}">{{ $bcuser->bank_name }}</option>
            <option value="BOB">BOB</option>
            <option value="BC SAKHI">BC SAKHI</option>
            <option value="UCO">UCO </option>
            <option value="BUPB">BUPB</option>
            <option value="BGGB">BGGB</option>
            <option value="PNB">PNB</option>
            <option value="SBI">SBI</option>
            </select>
          </div>
          <div class="col-2">
            <label for="">Phone:</label>
            <input type="text" class="form-control phone" name="phone" id="phone" value="{{ $bcuser->phone }}">
          </div>
          <div class="col-2">
            <label for="">PAN:</label>
            <input type="text" class="form-control phone" name="pan" id="pan" value="{{ $bcuser->pan }}">
          </div>  
        </div>
        <div>
          <button type="submit" class="btn btn-primary mb-2">Confirm Update</button>
        </div>
      </form>
    </div>
    </div>
</div>
</section>
</div>
@endsection
 