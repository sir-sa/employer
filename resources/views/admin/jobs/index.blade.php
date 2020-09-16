@extends('layouts.app')
@section('content')




    <section class="bg-light-gray">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active">Current page</li>
          </ul>
        </nav>
        <h1 class="heading">Webdesigner<br><small>at <a href="#"> Bootstrapious</a></small></h1>
        <div class="job-detail-description"><i class="fa fa-map-marker job__location"> </i>Palo Alto
          | Posted 10 days ago |<span class="badge featured-badge badge-success">Full Time</span>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          
          <div class="col-lg-8">
           
            
            <h3>{{$job->job_title}}</h3>
           

            
            <p>{{$job->job_description}}</p>
           

            <h4>Here is the location of the company</h4>
            
            <ol>
              <li>{{$job->location}}</li>
             
            </ol>
           
            

            
            <h5>Job Category</h5>
            @foreach($categories as $category)
            <ul>
              <li>{{$category->name}}</li>
              
            </ul>
            @endforeach
            <h4>Required skilles</h4>
            @foreach($tags as $tag)
            <ol>
              <li>{{$tag->name}}</li>
              
            </ol>
            @endforeach
             
            <h5>Header Level 5</h5>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
            <div class="job-detail__apply-bottom"><a href="{{route('applicants.create')}}" class="btn btn-outline-white-primary">Apply for this job</a></div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-3">
            <h4>About Bootstrapious</h4>
            <p class="job-detail__company-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. </p>
            <p class="job-detail__social social social--outline"><a href="#" data-toggle="tooltip" data-placement="top" title="Website" class="link">
                 
                <i class="fa fa-link"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter" class="twitter">
                 
                <i class="fa fa-twitter"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="facebook"><i class="fa fa-facebook"></i> </a></p>
            <div class="job-detail__apply-top"><a href="{{route('applicants.create')}}" class="btn btn-outline-white-primary">Apply for this job</a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light-gray">
      <div class="container">
        <h3 class="heading">You might also like</h3>
        <div class="row featured align-items-stretch">
              @foreach($categories as $category)
                <div class="col-lg-4 mb-5 mb-lg-0">
                  <div class="box-image-text bg-visible full-height">
                    <div class="top"><a href="detail.html">
                        <div class="image"><img src="{{ asset('assets/img/featured1.jpg')}}" alt="" class="img-fluid"></div>
                        <div class="bg"></div>
                        <div class="logo"><img src="{{ asset('assets//img/company-1.png')}}" alt="" style="max-width: 80px;"></div></a></div>
                    <div class="content">
                      <h5><a href="">{{$category->name}}</a></h5>
                      <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="badge featured-badge badge-success">Full Time</span></p>
                      <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
                    </div>
                  </div>
                </div>
              @endforeach
              {{ $categories->links() }}
        </div>
      </div>
    </section>




  @endsection