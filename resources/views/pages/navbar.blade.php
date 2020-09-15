
<nav class="navbar navbar-expand-lg">
        <div class="container"><a href="{{ route('index')}}" class="navbar-brand"><img src="{{asset('assets/img/logo.png')}}" alt="logo" class="d-none d-lg-block"><img src="{{asset('assets/img/logo-small.png')}}" alt="logo" class="d-block d-lg-none"><span class="sr-only">Go to homepage</span></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{ route('category')}}" class="nav-link">Jobs <span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
              <li class="nav-item dropdown"><a id="clientZone" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Client Zone</a>
                <div aria-labelledby="clientZone" class="dropdown-menu">
                  
                  <a href="{{ route('client-dashboard')}}" class="dropdown-item">Dashboard</a>
                  <a href="{{ route('client-applicants')}}.html" class="dropdown-item">Applicants                </a>
                  <a href="{{ route('client-job')}}" class="dropdown-item">Post a new job  </a>
                </div>
              </li>
              <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
                <div aria-labelledby="pages" class="dropdown-menu"><a href="{{ route('details')}}" class="dropdown-item">Home</a><a href="category.html" class="dropdown-item">Job Listing</a><a href="{{ route('details')}}" class="dropdown-item">Job Detail                </a><a href="{{ route('about')}}" class="dropdown-item">About                </a><a href="{{ route('contact')}}" class="dropdown-item">Contact                </a><a href="{{ route('blog')}}" class="dropdown-item">Blog Listing                </a><a href="{{ route('posts')}}" class="dropdown-item">Blog Post                </a><a href="{{ route('packages')}}" class="dropdown-item">Pricing packages    </a><a href="{{ route('testimonials')}}" class="dropdown-item">Testimonials    </a><a href="{{ route('text')}}" class="dropdown-item">Text Page    </a><a href="{{ route('flaq')}}" class="dropdown-item">FAQ</a></div>
              </li>
              <li class="nav-item">   <a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
              <li class="nav-item dropdown"><a href="#loginModal" data-toggle="modal" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0"> <i class="fa fa-sign-in"></i>Login</a></li>
            </ul>
          </div>
        </div>
      </nav>