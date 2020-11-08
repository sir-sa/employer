@extends('layouts.app')

@section('content')
    <!-- navbar-->
 

    <section class="job-form-section job-form-section--image">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="job-form-box">
              <h2 class="heading">Find a <span class="accent">job</span> you will <span class="accent">love</span>.</h2>
               <p class="heading">We help <span class="accent">job</span> seekers to get <span class="accent">perfect Job</span> easly</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light-gray">
      <div class="container">
        <h3 class="heading">Featured jobs</h3>
        <div class="row featured align-items-stretch">
           
           
          
              @foreach($categories as $category)
                <div class="col-lg-4 mb-5 mb-lg-0">
                  <div class="box-image-text bg-visible full-height">
                    <div class="top"><a href="detail.html">
                        <div class="image"><img src="{{ asset('assets/img/ndete1.jpg')}}" alt="" class="img-fluid"></div>
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
    <section>
      <div class="container">
        <h4 class="heading">Trending this month</h4>
        @foreach($categories as $category)
        <div class="job-listing job-listing--featured ">
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="row">
                <div class="col-2"><img src="{{('asset/img/'.$category->image)}}" alt="LoremIpsum " class="img-fluid"></div>
                <div class="col-10">
                  <h4 class="job__title"><a href="{{route('jobs.show', $category->id)}}">{{$category->name}}</a></h4>
                  <p class="job__company">
                     
                    LoremIpsum
                  </p>
                </div>
              </div>
            </div>
            <div class="col-10 col-md-3 col-lg-2 ml-auto"><i class="fa fa-map-marker job__location"></i>San Francisco</div>
            <div class="col-10 col-md-3 col-lg-3 ml-auto">
              <p>Posted 5 days ago</p>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </section>
    <section class="section testimonails bg-light-gray">
      <div class="container">
        <h2 class="heading">What our customers say</h2>
        <p class="lead text-center">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.  </p>
        <div class="row"> 
          <div class="col-md-12">
            <ul class="owl-carousel testimonials equalize-height">
              <li class="item">
                <div class="testimonial full-height">
                  <div class="text">
                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="{{asset('assets/img/ndete1.jpg')}}">
                      <h5>Karanja Paul</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial full-height">
                  <div class="text">
                    <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="{{asset('assets/img/ndete2.jpg')}}">
                      <h5>Jobuu</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial full-height">
                  <div class="text">
                    <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                    <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="{{asset('assets/img/ndete3.png')}}">
                      <h5>Martin Irungu</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial full-height">
                  <div class="text">
                    <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="{{ asset('assets/img/ndete4.jpg')}}">
                      <h5>Irene Wambui</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial full-height">
                  <div class="text">
                    <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="{{ asset('assets/img/ndete5.jpg')}}">
                      <h5>Chris</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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
            <p><a href="{{ route('home')}}" class="btn btn-outline-light">See our job offers </a></p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading">
              <h4>From our blog</h4>
            </div>
            <p class="text-center text-muted">What's new in the world of human resources? Check out our blog!</p>
          </div>
        </div>
        <div id="blog-homepage" class="row">
          <div class="col-md-6">
            <div class="post">
              <div class="image"><a href="{{ route('posts')}}"><img src="{{ asset('assets/img/ndete5.jpg')}}" alt="" class="img-fluid"></a></div>
              <h4><a href="post.html">Education in the IT</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="{{ route('posts')}}" class="btn btn-outline-white-primary">Continue reading</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="post">
              <div class="image"><a href="{{ route('posts')}}"><img src="{{ asset('assets/img/ndete4.jpg')}}" alt="" class="img-fluid"></a></div>
              <h4><a href="post.html">Best books for personal development</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="{{ route('posts')}}" class="btn btn-outline-white-primary">Continue reading</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
    