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
            <form id="job-main-form" method="POST" action="{{route('categories.store')}}" class="job-add-form" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="name">New Job Category</label>
                  <input id="name" name="name" type="text" class="form-control">

                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                  <label for="image">Logo image</label>
                  <input id="image" name="image" type="file" class="form-control">

                  @error('image')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                  <p class="help-block text-small">Example of job categories include Web design, Network Engineering, Plumbing et cetra. Create a Category that aligns the request made by the client employers.</p>
                </div>
                 
              </div>
              
              <button class="btn btn-secondary" type="submit">save</button>
            </form>
          </div>
        </div>
      </div>
    </section>


@endsection