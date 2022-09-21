@extends('layouts.homepage')

@section('content')

<section class="section-sm border-bottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title-bordered mb-5 d-flex align-items-center">
					<h1 class="h4">{{ $alumni->name }}</h1>
					<ul class="list-inline social-icons ml-auto mr-3 d-none d-sm-block">
						<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a>
						</li>
						<li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a>
						</li>
						<li class="list-inline-item"><a href="#"><i class="ti-github"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body bg-gradient-success">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-md-4 mx-4">
                                <img style="height:300px; width:300px" id="profile-image" src="{{ asset('storage/uploads/images/alumnies/' . $alumni->image) }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <h2 class="font-weight-bold">{{ $alumni->name }}</h2>
                                <h4 >Department: {{ $alumni->department->name }}</h4>
                                <h4 >Batch: {{ $alumni->batch }}</h4>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>

    <h2 class="text-center my-3">Personal Information</h2>
    <div class="col-lg-12 grid-margin stretch-card my-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <p class="font-weight-bold mb-5">Name</p>
                        <p class="font-weight-bold mb-5">Date of Birth</p>
                        <p class="font-weight-bold mb-5">Gender</p>
                        <p class="font-weight-bold mb-5">Blood Group</p>
                        <p class="font-weight-bold mb-5">Contact Number</p>
                        <p class="font-weight-bold mb-5">Present Address</p>
                        <p class="font-weight-bold mb-5">Permanent Address</p>
                        <p class="font-weight-bold mb-5">Maritial Status</p>
                        <p class="font-weight-bold mb-5">Email</p>
                    </div>

                    <div class="col-md-5">
                        <p class="text-muted mb-5">{{ $alumni->name }}</p>
                        <p class="text-muted mb-5">{{ $alumni->date_of_birth }}</p>
                        <p class="text-muted mb-5">{{ $alumni->gender }}</p>
                        <p class="text-muted mb-5">{{ $alumni->blood_group }}</p>
                        <p class="text-muted mb-5">{{ $alumni->phone }}</p>
                        <p class="text-muted mb-5">{{ $alumni->present_address }}</p>
                        <p class="text-muted mb-5">{{ $alumni->permanent_address }}</p>
                        <p class="text-muted mb-5">{{ $alumni->maritial_status }}</p>
                        <p class="text-muted mb-5">{{ $alumni->email }}</p>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

    <h2 class="text-center">Educational Information</h2>
    <div class="col-lg-12 grid-margin stretch-card my-3">
        <div class="card">
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-muted mb-5">Department</p>
                        <p class="text-muted mb-5">Student ID</p>
                        <p class="text-muted mb-5">Batch</p>
                        <p class="text-muted mb-5">CGPA</p>
                        <p class="text-muted mb-5">Passing Year</p>
                    </div>

                    <div class="col-md-5">
                        <p class="font-weight-bold text-muted mb-5">{{ $alumni->department->name }}</p>
                        <p class="text-muted mb-5">{{ $alumni->student_id }}</p>
                        <p class="text-muted mb-5">{{ $alumni->batch }}</p>
                        <p class="text-muted mb-5">{{ $alumni->cgpa }}</p>
                        <p class="text-muted mb-5">{{ $alumni->passing_year }}</p>
                    </div>
                </div>
               
            </div>

        </div>
    </div>
    
    <h2 class="text-center">Professional Information</h2>
    <div class="col-lg-12 grid-margin stretch-card my-3">
        <div class="card">
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-3">
                        <p class="font-weight-bold text-muted mb-5">Profession</p>
                        <p class="text-muted mb-5">Field</p>
                        <p class="text-muted mb-5">Organization</p>
                        <p class="text-muted mb-5">Designation</p>
                        <p class="text-muted mb-5">Office Mail</p>
                        <p class="text-muted mb-5">Office Address</p>
                    </div>

                    <div class="col-md-5">
                        <p class="font-weight-bold text-muted mb-5">{{ $alumni->profession }}</p>
                        <p class="text-muted mb-5">{{ $alumni->field }}</p>
                        <p class="text-muted mb-5">{{ $alumni->organization }}</p>
                        <p class="text-muted mb-5">{{ $alumni->designation }}</p>
                        <p class="text-muted mb-5">{{ $alumni->office_email }}</p>
                        <p class="text-muted mb-5">{{ $alumni->office_address }}</p>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

		</div>
	</div>
</section>


@endsection