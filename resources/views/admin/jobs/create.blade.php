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
            <h1 class="heading">Add a new position</h1>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <form id="job-main-form" method="POST"  action="{{route('jobs.store')}}" class="job-add-form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-lg-12">
                  <h4>Job details</h4>
                  <p class="text-muted text-small">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.     </p>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="job_title">Job Title</label>
                  <input id="job_title" name="job_title" type="text" class="form-control">
                  <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="job_description">Job Description</label>
                  <textarea id="job_description" name="job_description" rows="5" class="form-control"></textarea>
                  <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 form-group">
                  <label for="location">Location</label>
                  <input id="location" name="location" type="text" placeholder="e.g. Rio de Janeiro" class="form-control">
                </div>
                <div class="col-lg-6 form-group">
                  <label for="type_id">Type</label>
                  <select id="type_id" name="type_id" placeholder="Choose job type" class="form-control">
                    @foreach($types as $id=>$type)
                    <option value="{{$id}}">{{$type}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="category_id">Category</label>
                  <select id="category_id" name="category_id" placeholder="Choose category" class="form-control select"> 
                    @foreach($categories as $id=>$category)
                    <option value="{{$id}}">{{$category}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="tag_id">Tags</label>
                  <select id="tag_id" name="tag_id" placeholder="Choose tags" class="form-control">
                    @foreach($tags as $id=>$tag)
                    <option value="{{$id}}">{{$tag}}</option>
                    @endforeach
                    
                  </select>
                </div>
              </div>
              
              
                <div class="col-lg-4 form-group">
                  <label for="logo">Logo</label>
                  <input id="logo" name="logo" type="file" class="form-control">
                </div>
                 
              </div>
             
                  
              <button type="submit" class="btn btn-outline-white-primary"> <i class="fa fa-magic"></i> Save and publish</button>
            </form>
          </div>
        </div>
      </div>
    </section>


@endsection