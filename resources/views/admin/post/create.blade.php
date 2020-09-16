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
                <li aria-current="page" class="breadcrumb-item active">Add a new Blog Post</li>
              </ul>
            </nav>
            <h1 class="heading"> Post Now</h1>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <form id="job-main-form" method="POST" action="{{route('post.store')}}" class="job-add-form" enctype="multipart/form-data">
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
                  <label for="title">Post Title</label>
                  <input id="title" name="title" type="text" class="form-control">
                 
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="image">Post image</label>
                  <input id="image" name="image" type="file" class="form-control">
                 
                </div>
              </div>
              
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="body">Post body</label>
                  <textarea id="wysiwyg-editor" name="body" class="form-control" ></textarea>
                  
                </div>
              </div>
              <br><br>
              
            
              <button type="submit" class="btn btn-outline-white-primary"> <i class="fa fa-magic"></i> Save information</button>

            </form>
          </div>
        </div>
      </div>
    </section>


@endsection