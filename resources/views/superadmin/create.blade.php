
@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="3.3.6/css/bootstrap.min.css">
    <!-- <link href="http://meyerweb.com/eric/tools/css/reset/reset.css" rel="stylesheet" />-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
@endpush
@section('content')
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.topnav a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.topnav a:hover {
  background-color: #000;
}

.topnav a.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .topnav a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>

<div class="container">

    <div class="row justify-content-center">
    <div class="col-md-12">

          <div class="form-group" style="float: right;">
              <a href="{{ route('superadmin.list') }}" class="btn btn-success">Back</a>
          </div>

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

             @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Sorry!</strong> There were more problems with your input field.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ul>
            </div>
            @endif
              
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div> 
            @endif

      <legend style="color: green; font-weight: bold;">BC Form
      </legend>

<style>
* {
  box-sizing: border-box;
}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 50px auto;
  font-family: Raleway;
  padding: 40px;
  width: 100%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #47525d;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 14px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #47525d;
}

/* Make circles that indicate the steps of the form: */
.tablink {

  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33.3%;
  background-color: #47525d; 
  display: inline-block;
  opacity: 0.5;
}

.tablink.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.tablink.finish {
  background-color: ##47525d;
}

.tabcontent {
  color: black;
  display: none;
  /*padding: 100px 20px;*/
  height: 100%;
}
</style>

<body>
<!-- <button class="tablink" onclick="openPage('Personal', this, 'gray')" id="defaultOpen">Personal</button>
<button class="tablink" onclick="openPage('Professional', this, 'gray')">Professional</button>
<button class="tablink" onclick="openPage('Banking', this, 'gray')">Banking</button> -->
<!-- <button class="tablink" onclick="openPage('Performance', this, 'gray')">Performance</button> -->

   <form id="regForm" action="{{route('tech.save')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- <h3>Detail</h3> -->
          <div class="form-group row">
          <div class="col-4">
          <label for="">FE Name:</label>
          <select class="form-control dropdown-toggle" id="fe_name" name="fe_name">
            <option value="">Select FE Name</option>
            <option value="Pankaj Kumar">Pankaj Kumar</option>
            <option value="Mithlesh Kumar">Mithlesh Kumar</option>
            <option value="Muktesh Kumar">Muktesh Kumar</option>
            <option value="Rakesh Gendre">Rakesh Gendre</option>
            <option value="Lalit Dhiman">Lalit Dhiman</option>
            <option value="Viresh Kumar">Viresh Kumar</option>
            <option value="Manendra Mishra">Manendra Mishra</option>
            <option value="Pradeep Kumar">Pradeep Kumar</option>
            <option value="Raghvendra Sharma">Raghvendra Sharma</option>
            <option value="Vinay Bharti">Vinay Bharti</option>
            <option value="Rakesh Gendre">Rakesh Gendre</option>
            <option value="Pradeep">Pradeep</option>
            <option value="Satymani">Satymani</option>
            <option value="Chirag Jansari">Chirag Jansari</option>
            <option value="Sayak Pramanick">Sayak Pramanick</option>
            <option value="Mahabir Saraf">Mahabir Saraf</option>
            <option value="Manoj Kumar Pandey">Manoj Kumar Pandey</option>
            <option value="Arti Rani">Arti Rani</option>
            <option value="TBA">TBA</option>
          </select>
          <font style="color:red"> {{ $errors->has('fe_name') ?  $errors->first('fe_name') : '' }} </font>
          </div>
          <div class="col-4">
          <label for="">BC Name:</label>
          <input type="text" class="form-control" name="bc_name" id="bc_name" placeholder="Enter BC Name">
          <font style="color:red"> {{ $errors->has('bc_name') ?  $errors->first('bc_name') : '' }} </font>
          </div>
          <div class="col-4">
          <label for="">Phone:</label>
          <input type="text" class="form-control phone" name="phone" id="phone" placeholder="123-456-7890">
          </div>
         
           <div class="col-md-3">
          <label for="state" class="form-label">State:</label>
          <select type="text" class="form-control dropdown-toggle" id="state" name="state" placeholder="Enter State">
          <option value="">Select State</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu & Kashmir">Jammu & Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="West Bengal">West Bengal</option>
          <option value="Andaman & Nicobar">Andaman & Nicobar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
          <option value="Daman & Diu">Daman & Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Puducherry">Puducherry</option>
          </select>
          </div>
           <div class="col-3">
          <label for="">District:</label>
          <input type="text" class="form-control" name="district" id="district" placeholder="Enter District">
          </div>
          <div class="col-3">
          <label for="">Issue:</label>
          <select class="form-control dropdown-toggle" id="job_status" name="job_status">
          <option value="">Select</option>
          <option value="Login">Login</option>
          <option value="Installation">Installation</option>
          <option value="Currupt">Currupt</option>
          <option value="Update">Update</option>
          </select>
          </div>

          <div class="col-3">
          <label for="">Bank Name:</label>
          <select class="form-control dropdown-toggle" id="bank_name" name="bank_name">
          <option value="">Select Bank</option>
          <option value="Bank of Baroda">Bank of Baroda</option>
          <option value="UCO Bank">UCO Bank</option>
          <option value="BUPGB Bank">BUPGB Bank</option>
          <option value="BGGB Bank">BGGB Bank</option>
          <option value="PNB Bank">PNB Bank</option>
          <option value="SBI Bank">SBI Bank</option>
          </select>
          </div>
          <div class="col-4">
          <label for="">KO Code:</label>
          <input type="text" class="form-control" name="ko_code" placeholder="Enter KO Code">
          </div>
          <div class="col-4">
          <label for="">Complaint Date:</label>
          <input type="date" class="form-control" name="ko_creation_date" id="ko_creation_date" placeholder="Enter KO Creation Date">
          </div>
           <div class="col-4">
          <label for="">Status:</label>
          <select class="form-control dropdown-toggle" id="iibf_status" name="iibf_status">
          <option value="">Select</option>
          <option value="Pass">Completed</option>
          <option value="Working-in-Progress">Working-in-Progress</option>
          <option value="None">None</option>
          </select>
          </div>
          </div>
         
          <div style="float:right;">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>


          <!-- <div id="Professional" class="tabcontent">
          <h3 >Professional Detail:</h3>
          <div class="form-group row">
          <div class="col-4">
          <label for="">Email:</label>
          <input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email-id" >
          </div>
          <div class="col-4">
          <label for="">Date of Birth:</label>
          <input type="date" class="form-control" name="dob" id="dob">
          </div>
          <div class="col-4">
          <label for="">Zone:</label>
          <input type="text" class="form-control" name="zone" id="zone" placeholder="Enter Zone">
          </div>
          
          <div class="col-4">
          <label for="">Sub District:</label>
          <input type="text" class="form-control" name="sub_district" id="sub_district" placeholder="Enter Sub District">
          </div>
          <div class="col-4">
          <label for="">Region:</label>
          <input type="text" class="form-control" name="region" id="region" placeholder="Enter Region">
          </div>
          <div class="col-4">
          <label for="">Block:</label>
          <input type="text" class="form-control" name="block" id="block" placeholder="Enter Block">
          </div>
          <div class="col-4">
          <label for="">Outlet Location:</label>
          <input type="text" class="form-control" name="outlet_loc" id="outlet_loc" placeholder="Enter Outlet Location">
          </div>
          <div class="col-6">
          <label for="">Aadhaar No:</label>
          <input type="integer" maxlength="14" pattern="^\d {4}-\d {4}-\d {4} $" class="form-control aadhaar" name="aadhaar" placeholder="Enter Aadhdaar">
          </div>
          <div class="col-6">
          <label for="">PAN No:</label>
          <input type="text" class="form-control" name="pan" placeholder="Enter PAN No">
          </div>
          </div>
          <h4>Full Address</h4>
          <div class="form-group row"> 
          <div class="col-md-4">
          <label for="address" class="form-label">Address:</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="Enter House no">
          </div>
          <div class="col-md-4">
          <label for="address2" class="form-label">Address 2:</label>
          <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment, floor, or landmark">
          </div>
          <div class="col-md-4">
          <label for="city" class="form-label">City/Town:</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
          </div>
          <div class="col-md-4">
          <label for="post_office" class="form-label">Post Office:</label>
          <input type="text" class="form-control" id="post_office" name="post_office" placeholder="Enter Post office.">
          </div>
         
          <div class="col-md-4">
          <label for="pin_code" class="form-label">Pin Code:</label>
          <input type="integer" class="form-control" maxlength="6" id="pin_code" name="pin_code" placeholder="Enter Pincode">
          </div>
          <div class="col-4">
          <label for="">SOL ID:</label>
          <input type="integer" class="form-control" name="sol_id" id="sol_id" placeholder="Enter Sol-id">
          </div>
          <div class="col-4">
          <label for="">Customer ID:</label>
          <input type="text" class="form-control" name="cust_id" id="cust_id" placeholder="Enter Customer-id">
          </div>
         
          <div class="col-4">
          <label for="">Certificate Status:</label>
          <select class="form-control dropdown-toggle" id="certi_status" name="certi_status">
          <option value="">Select</option>
          <option value="Received">Received</option>
          <option value="Not Received">NOT Received</option>
          </select>
          </div>
          <div class="col-4">
          <label for="">DRA Status:</label>
          <select class="form-control dropdown-toggle" id="dra_status" name="dra_status">
          <option value="">Select</option>
          <option value="Pass">Pass</option>
          <option value="Fail">Fail</option>
          <option value="N/A">N/A</option>
          </select>
          </div>
          <div class="col-4">
          <label for="">Police Verification:</label>
          <select class="form-control dropdown-toggle" id="police_verify" name="police_verify">
          <option value="">Select</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
          </select>
          </div>
          <div class="col-4">
          <label for="">UFS Agreement:</label>
          <select class="form-control dropdown-toggle" id="ufs_agreement" name="ufs_agreement">
          <option value="">Select</option>
          <option value="Received">Received</option>
          <option value="Not Received">NOT Received</option>
          </select>
          </div>
          <div class="col-12">
          <label for="">Remark:</label>
          <textarea type="text" rows="2" class="form-control" name="agreement_remark" id="agreement_remark" placeholder="Enter Remark"></textarea>
          </div>
          </div>
         </div>
 -->

         <!--  <div id="Banking" class="tabcontent">
          <h3>Banking:</h3>  
          <div class="form-group row">
          <div class="col-4">
          <label for="">Link Branch Name:</label>
          <input type="integer" class="form-control" name="link_branch" id="link_branch" placeholder="Enter Link Branch">
          </div>
          <div class="col-4">
          <label for="">IFSC Code:</label>
          <input type="text" class="form-control" name="ifsc_code" placeholder="Enter IFSC Code">
          </div>
           <div class="col-4">
          <label for="">Payment Status:</label>
          <select class="form-control dropdown-toggle" id="payment_status" name="payment_status">
          <option value="">Select</option>
          <option value="Received">Received</option> 
          <option value="Not-Received">Not-Received</option>
          <option value="Exempted">Exempted</option>
          <option value="Migration">Migration</option>
          <option value="Cancelled">Cancelled</option>
          </select>
          </div>
          <div class="col-4">
          <label for="">Saving Account:</label>
          <input type="integer" class="form-control" name="saving_ac" id="saving_ac" placeholder="Enter Saving A/c">
          </div>
          <div class="col-4">
          <label for="">Activation Approval:</label>
          <select class="form-control dropdown-toggle" id="approval" name="approval">
          <option value="">Select</option>
          <option value="Approved">Approved</option>
          <option value="Not Approved">Not Approved</option>
          <option value="Pending">Pending</option>
          <option value="Suspend">Suspend</option>
          </select>
          </div>
          <div class="col-4">
          <label for="">OD Account:</label>
          <input type="integer" class="form-control" name="od_account" id="od_account" placeholder="Enter OD Account">
          </div>
          <div class="col-4">
          <label for="">Request Sent Date:</label>
          <input type="date" class="form-control" name="request_sent_date" id="request_sent_date" placeholder="Enter Request Sent Date">
          </div>
          <div class="col-4">
          <label for="">Village Code:</label>
          <input type="text" class="form-control" name="village_code" id="village_code" placeholder="Enter Village Code">
          </div>
          <div class="col-4">
          <label for="">Location Type:</label>
          <select class="form-control dropdown-toggle" id="location_type" name="location_type">
          <option value="">Select</option>
          <option value="Rural">Rural</option>
          <option value="Urban">Urban</option>
          <option value="Semi-Urban">Semi-Urban</option>
          </select>
          </div>
          <div class="col-4">
          <label for="">Mandate Type:</label>
          <select class="form-control dropdown-toggle" id="mandate_type" name="mandate_type">
          <option value="">Select</option>
          <option value="SSA">SSA</option>
          <option value="Non-SSA">Non-SSA</option>
          </select>
          </div>
          <div class="col-4">
          <label for="">Latitude:</label>
          <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Enter Latitude">
          </div>
          <div class="col-4">
          <label for="">Longitude:</label>
          <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Enter Longitude">
          </div>
          </div> 
          </div> -->

         <!--  <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
          </div> -->
      </form>

  <script>

        function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
              tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
          }
          // Get the element with id="defaultOpen" and click on it
          document.getElementById("defaultOpen").click();

      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tabcontent");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tabcontent");
        // Exit the function if any field in the current tab is invalid:
        //if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tabcontent");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("tablink")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }
  </script>

  <script type="text/javascript">
    document.querySelector('.phone').addEventListener('input', function() { 
    let text=this.value                                                      
    text=text.replace(/\D/g,'')                                             
    if(text.length>3) text=text.replace(/.{3}/,'$&-')                        
    if(text.length>7) text=text.replace(/.{7}/,'$&-')                        
    this.value=text;                                                         
    });

      document.querySelector('.aadhaar').addEventListener('input', function() { 
      let text=this.value                                                      
      text=text.replace(/\D/g,'')                                             
      if(text.length>4) text=text.replace(/.{4}/,'$&-')                        
      if(text.length>9) text=text.replace(/.{9}/,'$&-')                        
      this.value=text; 
    });
  </script>
    <script type="text/javascript">
        $(document).ready(function() {
          $(".btn-success").click(function(){ 
              var lsthmtl = $(".clone").html();
              $(".increment").after(lsthmtl);
          });
          $("body").on("click",".btn-danger",function(){ 
              $(this).parents(".hdtuto control-group lst").remove();
          });
        });
    </script>
  
          </body>
        </div>
    </div>
</div>


@endsection
 