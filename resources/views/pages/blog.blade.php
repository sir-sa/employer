@extends('layouts.app')

@section('content')

    <section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">   
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Blog</li>
              </ul>
            </nav>
            <h1 class="heading">Blog</h1>
            <p class="lead text-center">What's new in the world of human resources? We are bringing you the latest news, tips and tricks for your company or personal development.</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="post">
              <div class="image"><img src="{{ asset('assets/img/blog1.jpg')}}" alt="" class="img-fluid"></div>
              <h4><a href="{{route('posts')}}">Education in the IT</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="{{route('posts')}}" class="btn btn-outline-white-primary">Continue reading</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="post">
              <div class="image"><img src="{{ asset('assets/img/blog2.jpg')}}" alt="" class="img-fluid"></div>
              <h4><a href="{{route('posts')}}">Best books for personal development</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="{{route('posts')}}" class="btn btn-outline-white-primary">Continue reading</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="post">
              <div class="image"><img src="{{ asset('assets/img/blog2.jpg')}}" alt="" class="img-fluid"></div>
              <h4><a href="{{route('posts')}}">Best books for personal development</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="{{route('posts')}}" class="btn btn-outline-white-primary">Continue reading</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="post">
              <div class="image"><img src="{{ asset('assets/img/blog1.jpg')}}" alt="" class="img-fluid"></div>
              <h4><a href="{{route('posts')}}">Education in the IT</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="{{route('posts')}}" class="btn btn-outline-white-primary">Continue reading</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection