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
            <form id="job-main-form" method="POST" action="{{route('jobtags.store')}}" class="job-add-form">
              {{csrf_field()}}
              
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="name">New Job Job Tag</label>
                  <input id="name" name="name" type="text" class="form-control">

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