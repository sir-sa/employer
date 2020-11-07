@extends('layouts.app')

@section('content')

<section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('client-dashboard')}}">Dashboard</a></li>
                <li aria-current="page" class="breadcrumb-item active">Add a new position</li>
              </ul>
            </nav>
            <h1 class="heading">Apply For The Position Now</h1>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div id="error"></div>
            <form id="job-main-form" method="POST" action="{{route('apply.store')}}" class="job-add-form" enctype="multipart/form-data">
              {{csrf_field()}}

              <div class="row">
                <div class="col-lg-12">
                  <h4>Applicant's profile</h4>
                  <p class="text-muted text-small">    </p>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="name">Applicant Full Name</label>
                  <input id="name" name="name" type="text" class="form-control" >
                  <p class="help-block text-small">Applicant Need to be over the age of  18, Name provided should be the same in your National ID</p>
                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="applicant_id">Applicant id Number</label>
                  <input id="applicant_id" name="applicant_id" type="text" min="6" max="8" class="form-control"  >
                  <p class="help-block text-small">Max of 8 Numbers</p>
                  @error('applicant_id')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="email">Applicant Email Address</label>
                  <input id="email" name="email" type="text" class="form-control" >
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="phone">Applicant Phone Number</label>
                  <input id="phone" name="phone" type="text" class="form-control" >
                  @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="address">Applicant Postal Address</label>
                  <input id="address" name="address" type="text" class="form-control" >
                  @error('address')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-lg-12">
                  <h4>application information</h4>
                  <p class="text-muted text-small">The applicant is called to provide information concerning the area of interest. All fields are fillable     </p>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="job_title">Job Title</label>
                  <input id="job_title" name="job_title" value="" type="text" class="form-control">
                  <p class="help-block text-small">Enter the title from the fields provided</p>
                  @error('job_title')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div>
                <div class="collg-12 form-group">
                  <label for="file">Applicant copy of CV</label>
                  <input id="file" name="file" type="file" class="form-control" >
                  @error('file')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <button type="submit" class="btn btn-outline-white-primary"> <i class="fa fa-magic"></i> Save information</button>

      
              
              
              
            </form>
          </div>
        </div>
      </div>
    </section>


@endsection