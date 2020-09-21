<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get a Jobs </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 -->
    <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- coded js --> 
     <link href="{{ asset('js/script.js') }}" rel="stylesheet"> 




       <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Google fonts - Roboto for copy, Montserrat for headings-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="{{route('index')}}" class="navbar-brand"><img src="{{asset('assets/img/logo.png')}}" alt="logo" class="d-none d-lg-block"><img src="{{asset('assets/img/logo-small.png')}}" alt="logo" class="d-block d-lg-none"><span class="sr-only">Go to homepage</span></a>

                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active"><a href="{{ route('home')}}" class="nav-link">Jobs <span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a href="{{ route('about')}}" class="nav-link">About Us</a></li>
               @can('manage-user')
              <li class="nav-item dropdown"><a id="clientZone" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Client Zone</a>
                <div aria-labelledby="clientZone" class="dropdown-menu">
                
                  <a href="{{ route('client-applicants')}}" class="dropdown-item">Applicants                </a>
                  <a href="{{ route('jobs.create')}}" class="dropdown-item">Post a new job  </a>
                  <a href="{{ route('categories.index')}}" class="dropdown-item">Jobs Category List </a>
                  <a href="{{ route('jobtypes.index')}}" class="dropdown-item">Job period  </a>
                  <a href="{{ route('jobtags.index')}}" class="dropdown-item">Job skills required  </a>
                </div>
              </li>
               @endcan
              <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
                <div aria-labelledby="pages" class="dropdown-menu">
                  <a href="{{ route('index')}}" class="dropdown-item">Home</a>
                  <a href="{{ route('categories.index')}}" class="dropdown-item">Job Listing</a>
                  
                  <a href="{{ route('about')}}" class="dropdown-item">About                </a>
                  <a href="{{route('contact.index')}}" class="dropdown-item">Contact                </a>
                  <a href="{{ route('blog')}}" class="dropdown-item">Blog Listing                </a>
                  <a href="{{ route('posts')}}" class="dropdown-item">Blog Post                </a>
                  <a href="{{route('testimonials')}}" class="dropdown-item">Testimonials    </a>
                  
                  </div>
              </li>
              <li class="nav-item">   <a href="{{route('contact.index')}}" class="nav-link">Contact</a></li>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="nav-item dropdown dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    @can('manage-user')

                                    <a href="{{route('admin.users.index')}}" class="dropdown-item" >
                                        User Management
                                    </a>
                                    @endcan

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          
          @yield('content')
        </main>
    </div>


     <footer class="footer">
      <div class="footer__block">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 mb-5">
              <h4 class="h5">About Jobs</h4>
              <p>Jobs is a <strong>Bootstrap 4 jobs board theme </strong> developed in the middle of Europe by <a href="http://ondrejsvestka.cz/">Ondrej Svestka</a></p>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
              <h4 class="h5">This Theme</h4>
              <ul class="list-unstyled">
                <li><a href="{{ route('index')}}">Home</a></li>
                <li><a href="{{ route('category')}}">Jobs Listing</a></li>
                <li><a href="">Job detail</a></li>
                <li><a href="{{ route('about')}}">About</a></li>
                <li><a href="{{ route('contact.index')}}">Contact</a></li>
                <li><a href="{{ route('blog')}}">Blog listing</a></li>
                <li><a href="{{ route('posts')}}">Blog Post</a></li>
                <li><a href="{{ route('packages')}}">Pricing packages</a></li>
                <li><a href="{{ route('testimonials')}}">Testimonials</a></li>
                <li><a href="{{ route('text')}}">Text page</a></li>
                <li><a href="{{ route('flaq')}}">FAQ</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6">
              <h4 class="h5">Our offices</h4>
              <h5>London</h5>
              <p> Donec eleifend<br />libero at sagittis<br />mollis + 44 2556 789 8799</p>
              <h5>Paris</h5>
              <p> Donec eleifend<br />libero at sagittis<br />mollis + 41 2556 789 8799</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
              <h4 class="h5">Client zone</h4>
              <ul class="list-unstyled">
                <li><a href="{{ route('client-register')}}">Login or Register</a></li>
                <li><a href="{{ route('client-dashboard')}}">Dashboard</a></li>
                <li><a href="{{ route('client-applicants')}}">Applicants</a></li>
                <li><a href="{{ route('client-job')}}">Post a new job</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
              <h4 class="h5">Let's be Friends</h4>
              <p class="social">
                <a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a>
                <a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
            </div>
            <div class="col-lg-4 col-md-12 mb-5">
              <h4 class="h5">News and Updates</h4>
              <p>Sign up to get weekly portion of fresh jobs and news from us.</p>
              <form class="footer__newsletter">
                <div class="input-group">
                  <input type="text" placeholder="Enter your email address" aria-describedby="emailAddress" class="form-control">
                  <div class="input-group-append">
                    <button id="emailAddress" type="button" class="btn btn-default input-group-text"><i class="fa fa-send"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-left text-center">
              <p>&copy;2020 Best company</p>
            </div>
            <div class="col-md-6 text-md-right text-center">
              <p class="credit">Website by <a href="https://bootstrapious.com/">Sammy</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm hidden-xs hidden-sm"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
      <h4 class="text-uppercase">Select theme colour</h4>
      <form class="mb-3">
        <select name="colour" id="colour" class="form-control">
          <option value="">select colour variant</option>
          <option value="default">red</option>
          <option value="pink">pink</option>
          <option value="green">green</option>
          <option value="violet">violet</option>
          <option value="sea">sea</option>
          <option value="blue">blue</option>
        </select>
      </form>
      <p><img src="{{ asset('assets/img/template-mac.png')}}" alt="" class="img-fluid"></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>

    <!-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
   </script> -->

   <!-- <script type="text/javascript">
    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('post.store')}}",
        filebrowserUploadMethod: 'POST'
    });
   </script> -->
    <!-- JavaScript files-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}">   </script>
    <script src="{{ asset('assets/js/front.js')}}"></script>
</body>
</html>
