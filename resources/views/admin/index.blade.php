@extends('layouts.app')
@section('content')
	<div class="page-titles">
		<ol class="breadcrumb">
			<li><h5 class="bc-title">Applicant</h5></li>
			<li class="breadcrumb-item"><a href="{{ route('admin.index') }}">
			<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>Home</a>
			</li>
			<!-- <li class="breadcrumb-item active">
				<a href="javascript:void(0)">Employee</a>
			</li> -->
		</ol>
		<!-- <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a> -->
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
				<div class="card-body p-0">
				  <div class="table-responsive active-projects style-1">
					<div class="tbl-caption">
						<h4 class="heading mb-0">Applicant</h4>
					  <div>
						<a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Applicant</a>
						<!-- <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">  + Invite Employee
						</button> -->
					  </div>
					</div>
					<table id="empoloyees-tblwrapper" class="table">
					<thead>
					<tr>
					<th>ID</th>
					<th>Name</th>
					<!-- <th>Department</th> -->
					<th>Email</th>
					<th>Contact</th>
					<th>Gender</th>
					<th>Location</th>
					<th>Status</th>
					</tr>
					</thead>
					<tbody>
						 @forelse ($users as $bcuser)
						<tr>
							<td><span>{{ $loop->index + 1 }}</span></td>
							<td>
								<!-- <div class="products">
									<img src="images/contacts/pic2.jpg" class="avatar avatar-md" alt=""> -->
								<div>
									<h6>{{ $bcuser->name }}</h6>
										
								</div>	
								<!-- </div> -->
							</td>
							<!-- <td><span>Computer Science</span></td> -->
							<td><span class="text-primary">{{ $bcuser->email }}</span></td>
							<td>
								<span></span>
							</td>
							<td>
								<span>Male</span>
							</td>	
							<td>
								<span></span>
							</td>
							<td>
								<span class="badge badge-success light border-0">Active</span>
							</td>
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
	</div>
@endsection