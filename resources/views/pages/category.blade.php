@extends('layouts.app')

@section('content')


    <section class="job-form-section job-form-section--compressed">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active">obs in Bay Area</li>
          </ul>
        </nav>
        <h4 class="heading">Find a <span class="accent">job </span> you will <span class="accent">love</span></h4>
        <form id="job-main-form" method="get" action="#" class="job-main-form">
          <div class="controls">
            <div class="row align-items-end">
              <div class="col-sm-1 col-lg-2"></div>
              <div class="col-sm-5 col-lg-4 form-group">
                <label for="profession">Profession</label>
                <input type="text" id="profession" name="profession" placeholder="Profession you are looking for" class="form-control">
              </div>
              <div class="col-sm-5 col-lg-4 form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" placeholder="Any particular location?" value="Bay Area" class="form-control">
              </div>
              <div class="col-sm-1 col-lg-2 form-group">
                <button type="submit" name="name" class="btn btn-outline-white-primary job-main-form__button"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <section>
      <div class="container">
        <h3 class="heading">We have found <span class="accent">{{$categories->count()}}</span> jobs</h3>
         <div class="col-lg-12 text-right mb-5"><a href="{{ route('categories.create')}}" class="btn btn-outline-white-primary"> <i class="fa fa-plus"></i>Add new Category</a></div>
         @foreach($categories as $category)
        <div class="job-listing job-listing--featured">
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="row">

  <!-- <div class="col-2"><img src="/storage/asset/img/{{$category->image}}" alt="" class="img-fluid"></div> -->
                   <div class="col-2"><img src="{{('asset/img/'.$category->image)}}" alt="" class="img-fluid"></div>


                <div class="col-10">


                  <h4 class="job__title">
                    <a href="{{route('categories.show', $category->id)}}">

                        {{$category->name}}

                    </a>
                  </h4>
                   <p class="job__company">

                    LoremIpsum
                  </p>
                </div>
              </div>
            </div>
            <div class="col-10 col-md-3 col-lg-2 ml-auto"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-10 col-md-3 col-lg-3 ml-auto">
              <p>Posted 10 days ago</p>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="pages">
          <p class="load-more"><a href="#" class="mb-4 btn btn-outline-white-primary"><i class="fa fa-chevron-down"> </i>Load more</a></p>
          <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-4 mb-4">
            <ul class="pagination">

              {{ $categories->links() }}

            </ul>
          </nav>
        </div>
      </div>
    </section>
    <section class="bg-light-gray">
      <div class="container">
        <h3 class="heading">Featured jobs</h3>
        <div class="row featured align-items-stretch">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top"><a href="{{route('details')}}">
                  <div class="image"><img src="{{ asset('assets/img/featured1.jpg')}}" alt="" class="img-fluid"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="{{ asset('assets/img/company-1.png')}}" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="{{route('details')}}">Software Engineer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="badge featured-badge badge-success">Full Time</span></p>
                <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top"><a href="{{route('details')}}">
                  <div class="image"><img src="{{ asset('assets/img/featured2.jpg')}}" alt="" class="img-fluid"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="{{ asset('assets/img/company-3.png')}}" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="{{route('details')}}">Customer support</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>Palo Alto<span class="badge featured-badge badge-success">Full Time</span></p>
                <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top"><a href="{{route('details')}}">
                  <div class="image"><img src="{{ asset('assets/img/featured3.jpg')}}" alt="" class="img-fluid"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="{{ asset('assets/img/company-2.png')}}" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="{{ route('details')}}">Graphic designer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="badge featured-badge badge-dark">Part Time</span></p>
                <p>Fifth abundantly made Give sixth hath. Cattle creature i be dont them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  @endsection
