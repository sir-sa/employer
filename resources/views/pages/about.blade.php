@extends('layouts.app')

@section('content')
    <!-- navbar-->
   
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->

    <section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">About us</li>
              </ul>
            </nav>
            <h1 class="heading">About us</h1>
            <p class="lead text-center">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
            <h2>Header Level 2</h2>
            <ol>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <section style="background-image: url('{{ asset('assets/img/startup.jpg')}}'); " class="section-divider">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Start searching for your new job now! </p>
            <p><a href="{{ route('client-job')}}" class="btn btn-outline-light">See our job offers </a></p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="heading">Our team</h2>
            <p class="lead text-center">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
          </div>
        </div>
        <div class="row team">
          <div class="col-lg-3 col-sm-6">
            <div class="team-member">
              <div class="image"><img src="{{ asset('assets/img/person-1.jpg')}}" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h4"><a href="#">Han Solo</a></h3>
              <p class="role">founder</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
              <div class="text">
                <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            <!-- /.team-member-->
            
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-member">
              <div class="image"><img src="{{ asset('assets/img/person-2.jpg')}}" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h4"><a href="#">Luke Skywalker</a></h3>
              <p class="role">CTO</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
              <div class="text">
                <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            <!-- /.team-member-->
            
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-member">
              <div class="image"><img src="{{ asset('assets/img/person-3.jpg')}}" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h4"><a href="#">Princess Leia</a></h3>
              <p class="role">Team Leader</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
              <div class="text">
                <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            <!-- /.team-member-->
            
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-member">
              <div class="image"><img src="{{ asset('assets/img/person-4.jpg')}}" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h4"><a href="#">Jabba Hut</a></h3>
              <p class="role">Lead developer</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
              <div class="text">
                <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            <!-- /.team-member-->
            
          </div>
        </div>
      </div>
    </section>
    
@endsection