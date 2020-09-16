@extends('layouts.app')

@section('content')


    <section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                <li class="breadcrumb-item"> <a href="{{ route('blog')}}">Blog</a></li>
                <li aria-current="page" class="breadcrumb-item active">Post title</li>
              </ul>
            </nav>
            <h1 class="heading">{{$post->title}}</h1>
            <p class="author-date-top">By <a href="#">Samuel Munywoki</a> |  January 16, 2020</p>

            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
              <p><img src="{{asset ('assets/img/blog2.jpg')}}" alt="Example blog post alt" class="img-fluid"></p>
              <h2>Header Level 2</h2>
              <ol>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
              </ol>
              <blockquote class="blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
              </blockquote>
              <h3>Header Level 3</h3>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
              <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
              </ul>
              <p><img src="{{asset ('assets/img/blog1.jpg')}}" alt="Example blog post alt" class="img-fluid"></p>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>

            
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div id="blog-post" class="col-lg-8 mx-auto">
            <div id="post-content">
              
              {{$post->body}}
            </div>
            <!-- /#post-content-->
            <div id="comments">
              <h4>2 comments</h4>
              <div class="row comment">
                <div class="col-sm-3 col-md-2 text-center-xs">
                  <p><img src="{{asset ('assets/img/blog-avatar2.jpg')}}" alt="" class="img-fluid rounded-circle"></p>
                </div>
                <div class="col-sm-9 col-md-10">
                  <h5>Julie Alma</h5>
                  <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2011 at 12:00 am</p>
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a></p>
                </div>
              </div>
              <!-- /.comment-->
              <div class="row comment last">
                <div class="col-sm-3 col-md-2 text-center-xs">
                  <p><img src="{{asset ('assets/img/blog-avatar.jpg')}}" alt="" class="img-fluid rounded-circle"></p>
                </div>
                <div class="col-sm-9 col-md-10">
                  <h5>Louise Armero</h5>
                  <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2012 at 12:00 am</p>
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a></p>
                </div>
              </div>
              <!-- /.comment-->
            </div>
            <!-- /#comments-->
            <div id="comment-form">
              <h4>Leave comment</h4>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Name <span class="required">*</span></label>
                      <input id="name" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email <span class="required">*</span></label>
                      <input id="email" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="comment">Comment <span class="required">*</span></label>
                      <textarea id="comment" rows="4" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-outline-white-primary"><i class="fa fa-comment-o"></i> Post comment</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection