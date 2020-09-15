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

<section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            
            <h1 class="heading">{{$data->name}}</h1>
            <h2 class="heading">{{$data->email}}</h2>
            <h3 class="heading">{{$data->phone}}</h3>
            <h4 class="heading">{{$data->address}}</h4>
            <h2 class="heading">{{$data->job_title}}</h2>
            <p>
              <iframe src="{{url('asset/upload/'.$data->file)}}" style="width: 600px; height: 500px;"></iframe>
            </p>
           
          </div>
        </div>
      </div>
</section>



@endsection