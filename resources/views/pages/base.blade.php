<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.bootstrapious.com/jobs/2-1-0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 09:17:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get a Jobs - Bootstrap 4 template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
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
     <header class="header">
       

       <!-- <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a href="{{route('index')}}" class="navbar-brand"><img src="{{asset('assets/img/logo.png')}}" alt="logo" class="d-none d-lg-block"><img src="{{asset('assets/img/logo-small.png')}}" alt="logo" class="d-block d-lg-none"><span class="sr-only">Go to homepage</span></a>

                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active"><a href="{{ route('category')}}" class="nav-link">Jobs <span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a href="{{ route('about')}}" class="nav-link">About Us</a></li>
              <li class="nav-item dropdown"><a id="clientZone" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Client Zone</a>
                <div aria-labelledby="clientZone" class="dropdown-menu">
                  <a href="{{ route('client-register')}}" class="dropdown-item">Login or Register</a>
                  <a href="{{ route('client-dashboard')}}" class="dropdown-item">Dashboard</a>
                  <a href="{{ route('client-applicants')}}" class="dropdown-item">Applicants                </a>
                  <a href="{{ route('client-job')}}" class="dropdown-item">Post a new job  </a>
                  <a href="{{ route('categories.index')}}" class="dropdown-item">Jobs Category List </a>
                  <a href="{{ route('jobtypes.index')}}" class="dropdown-item">Job period  </a>
                  <a href="{{ route('jobtags.index')}}" class="dropdown-item">Job skills required  </a>
                </div>
              </li>
              <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
                <div aria-labelledby="pages" class="dropdown-menu">
                  <a href="{{ route('index')}}" class="dropdown-item">Home</a>
                  <a href="{{ route('jobs.index')}}" class="dropdown-item">Job Listing</a>
                  <a href="" class="dropdown-item">Job Detail                </a>
                  <a href="{{ route('about')}}" class="dropdown-item">About                </a>
                  <a href="{{route('contact')}}" class="dropdown-item">Contact                </a>
                  <a href="{{ route('blog')}}" class="dropdown-item">Blog Listing                </a>
                  <a href="{{ route('posts')}}" class="dropdown-item">Blog Post                </a>
                  <a href="{{route('packages')}}" class="dropdown-item">Pricing packages    </a>
                  <a href="{{route('testimonials')}}" class="dropdown-item">Testimonials    </a>
                  <a href="{{route('text')}}" class="dropdown-item">Text Page    </a>
                  <a href="{{route('flaq')}}" class="dropdown-item">FAQ</a></div>
              </li>
              <li class="nav-item">   <a href="{{route('contact')}}" class="nav-link">Contact</a></li>

                    </ul>

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

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
    </header>

        <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
    <div id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Customer Login</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('login') }}" method="post">
              <div class="form-group">
                

                <input id="email_modal" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                
                <input id="password_modal" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <p class="text-center">
                <button type="button" class="btn btn-outline-white-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="{{ route('client-register')}}"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->

    <main class="py-4">
     @yield('content')
     </main>

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
                <li><a href="{{ route('contact')}}">Contact</a></li>
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
              <p class="social"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
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
              <p class="credit">Theme by <a href="https://bootstrapious.com/">Bootstrapious</a></p>
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
    <!-- JavaScript files-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}">   </script>
    <script src="{{ asset('assets/js/front.js')}}"></script>
  </body>

<!-- Mirrored from demo.bootstrapious.com/jobs/2-1-0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 09:17:30 GMT -->
</html>