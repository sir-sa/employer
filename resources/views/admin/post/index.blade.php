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
            <div class="container">
            	<h1 class="heading"> <a href="{{route('post.create')}}">Add New Blog Post</a></h1>
            </div>
            <p class="lead text-center">What's new in the world of human resources? We are bringing you the latest news, tips and tricks for your company or personal development.</p>
          </div>

        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
        	@foreach($posts as $post)
	          <div class="col-md-6">
	            <div class="post">
	              <div class="image"><img src="{{('asset/img/'.$post->image)}}" alt="" class="img-fluid"></div>
	              <h4><a href="{{route('posts')}}">{{$post->title}}</a></h4>
	              <p class="post__intro">{{$post->body}}</p>
	              <p class="read-more"><a href="{{route('post.show',$post->id)}}" class="btn btn-outline-white-primary">Continue reading</a></p>
	            </div>
	          </div>
            @endforeach
          
          
   
        </div>
      </div>
    </section>
@endsection