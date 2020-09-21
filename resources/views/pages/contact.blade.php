@extends('layouts.app')

@section('content')

    <section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Contact</li>
              </ul>
            </nav>
            <h1 class="heading">Contact</h1>
            <p class="lead text-center">
              Are you curious about something? Do you have some kind of problem with our products? As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am
              he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section>  
      <div id="contact" class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="box-simple">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h3 class="mb-4">Address</h3>
              <p>13/25 New Avenue<br>New Heaven, 45Y 73J<br>England, <strong>Great Britain</strong></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box-simple">
              <div class="icon"><i class="fa fa-phone"></i></div>
              <h3 class="mb-4">Call center</h3>
              <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
              <p><strong>+33 555 444 333</strong></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box-simple">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <h3 class="mb-4">Electronic support</h3>
              <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
              <ul class="list-unstyled">
                <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                <li><strong><a href="#">
                      Ticketio
                       - our ticketing support platform</a></strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light-gray">
      <div class="container">
        <div class="row margin-bottom">
          <div class="col-lg-12 text-center">
            <div class="heading">
              <h2>Contact form</h2>
            </div>
          </div>
          <div class="col-lg-8 mx-auto">
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
            <form class="contact-form" method="POST" action="{{route('contact.store')}}">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input id="firstname" type="text" class="form-control" required >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input id="lastname" type="text" class="form-control" required >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control" required >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input id="subject" type="text" class="form-control" required >
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control" required ></textarea>
                  </div>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-outline-white-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div id="map"></div>

@endsection