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
            <h3>HTML Ipsum Presents</h3>
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
            <h4>Header Level 4</h4>
            <ol>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>
            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
            </blockquote>
            <h5>Header Level 5</h5>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
            <h4>Header Level 4</h4>
            <ol>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>
            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
            </blockquote>
            <h5>Header Level 5</h5>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
            <div class="job-detail__apply-bottom"><a href="#" class="btn btn-outline-white-primary">Apply for this job</a></div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-3">
            <h4>About Bootstrapious</h4>
            <p class="job-detail__company-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. </p>
            <p class="job-detail__social social social--outline"><a href="#" data-toggle="tooltip" data-placement="top" title="Website" class="link">
                 
                <i class="fa fa-link"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter" class="twitter">
                 
                <i class="fa fa-twitter"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="facebook"><i class="fa fa-facebook"></i> </a></p>
            <div class="job-detail__apply-top"><a href="#" class="btn btn-outline-white-primary">Apply for this job</a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light-gray">
      <div class="container">
        <h3 class="heading">You might also like</h3>
        <div class="row featured align-items-stretch">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="{{asset('assets/img/featured1.jpg')}}" alt="" class="img-fluid"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="{{asset('assets/img/company-1.png')}}" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Software Engineer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="badge featured-badge badge-success">Full Time</span></p>
                <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="{{asset('assets/img/featured2.jpg')}}" alt="" class="img-fluid"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="{{asset('assets/img/company-3.png')}}" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Customer support</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>Palo Alto<span class="badge featured-badge badge-success">Full Time</span></p>
                <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="{{asset('assets/img/featured3.jpg')}}" alt="" class="img-fluid"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="{{asset('assets/img/company-2.png')}}" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Graphic designer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="badge featured-badge badge-dark">Part Time</span></p>
                <p>Fifth abundantly made Give sixth hath. Cattle creature i be dont them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




  @endsection