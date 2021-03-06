@extends('layouts.app')

@section('content')

<section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Applicants</li>
              </ul>
            </nav>
            <h1 class="heading">Applicants for the <span class="accent">Web designer</span> position</h1>
            <p class="lead text-center">This is the lead paragraph of the article. Pellentesque habitant morbi tristique.</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          @foreach($applications as $application)
          <div class="col-lg-6">
            <div class="box applicant">
              <h4>{{$application->name}} - {{$application->job_title}}</h4>
              <p>
                <a href="/asset/upload/{{$application->file}}" class="btn btn-outline-white-secondary btn-sm"> <i class="fa fa-download"></i>Download CV</a>
                
                
              </p>

              <div class="d-flex justify-content-between">
                <p class="intro">
                  {{$application->email}}<br><br>
                  {{$application->phone}}

                </p>
                
              </div>
            </div>
          </div>
          @endforeach
         
          <div class="col-lg-12">
            <div class="pages">
              <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-4 mb-4">
                <ul class="pagination">
                  <li>{{ $applications->links() }}</li>
                </ul>
              </nav>
            </div>
            <p class="text-small text-muted">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p>
            
          </div>
        </div>
      </div>
    </section>
    <!-- *** CONTACT MODAL ***_________________________________________________________
    -->
    <div id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="Login" class="modal-title">Customer Login</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form action="#" method="post">
              <div class="form-group">
                <input type="text" placeholder="Subject" class="form-control">
              </div>
              <div class="form-group">
                <textarea placeholder="Your message" class="form-control"></textarea>
              </div>
              <p class="text-center">
                <button type="button" class="btn btn-outline-white-primary"><i class="fa fa-envelope"></i> Send</button>
              </p>
            </form>
            <p class="text-center text-muted text-small">Some explanatory text.  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** CONTACT MODAL END ***-->
    
    <!-- *** Cover letter modal ***_________________________________________________________
    -->
    <div id="coverletter-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Han Solo - Demo Cover letter
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </h4>
          </div>
          <div class="modal-body">
            <p>Here could be the applicant's cover letter. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.  </p>
            <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.  </p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.  </p>
          </div>
        </div>
      </div>
    </div>

    @endsection