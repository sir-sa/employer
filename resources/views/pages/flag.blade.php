

@extends('layouts.app')

@section('content')
<section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">FAQ</li>
              </ul>
            </nav>
            <h1 class="heading">FAQ</h1>
            <p class="lead text-center">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <p class="lead"><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.
              <div id="accordion" class="mb-5">
                <!-- Card-->
                <div class="card">
                  <div id="headingOne" class="card-header">
                    <h5 class="mb-0">
                      <button data-toggle="collapse" data-target="#faq-1" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link">1. Pellentesque habitant morbi tristique?</button>
                    </h5>
                  </div>
                  <div id="faq-1" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                    <div class="card-body">
                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                      <ul>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                        <li>Aliquam tincidunt mauris eu risus.</li>
                        <li>Vestibulum auctor dapibus neque.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Card                  -->
                <div class="card">
                  <div id="headingTwo" class="card-header">
                    <h5 class="mb-0">
                      <button data-toggle="collapse" data-target="#faq-2" aria-expanded="false" aria-controls="collapseTwo" class="btn btn-link collapsed">2. Anim pariatur cliche reprehenderit?</button>
                    </h5>
                  </div>
                  <div id="faq-2" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
                <!-- Card           -->
                <div class="card">
                  <div id="headingThree" class="card-header">
                    <h5 class="mb-0">
                      <button data-toggle="collapse" data-target="#faq-3" aria-expanded="false" aria-controls="collapseThree" class="btn btn-link collapsed">3. Anim pariatur cliche reprehenderit?</button>
                    </h5>
                  </div>
                  <div id="faq-3" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
                <!-- Card -->
                <div class="card">
                  <div id="headingFour" class="card-header">
                    <h5 class="mb-0">
                      <button data-toggle="collapse" data-target="#faq-4" aria-expanded="false" aria-controls="collapseThree" class="btn btn-link collapsed">4. Why are you more expensive than others?</button>
                    </h5>
                  </div>
                  <div id="faq-4" aria-labelledby="headingFour" data-parent="#accordion" class="collapse">
                    <div class="card-body">
                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                      <ul>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                        <li>Aliquam tincidunt mauris eu risus.</li>
                        <li>Vestibulum auctor dapibus neque.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Card -->
                <div class="card">
                  <div id="headingFive" class="card-header">
                    <h5 class="mb-0">
                      <button data-toggle="collapse" data-target="#faq-5" aria-expanded="false" aria-controls="collapseThree" class="btn btn-link collapsed">5. Another important question</button>
                    </h5>
                  </div>
                  <div id="faq-5" aria-labelledby="headingFive" data-parent="#accordion" class="collapse">
                    <div class="card-body">
                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                      <ul>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                        <li>Aliquam tincidunt mauris eu risus.</li>
                        <li>Vestibulum auctor dapibus neque.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.panel-->
            </p>
            <!-- /.panel-group-->
            <h3 class="mb-4">Some more content</h3>
            <p class="lead"><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
            <div class="tabs">
              <ul id="myTab" role="tablist" class="nav nav-tabs nav-justified">
                <li class="nav-item"><a id="tab5-1-tab" data-toggle="tab" href="#tab5-1" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">First tab</a></li>
                <li class="nav-item"><a id="tab5-2-tab" data-toggle="tab" href="#tab5-2" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Second tab</a></li>
                <li class="nav-item"><a id="tab5-3-tab" data-toggle="tab" href="#tab5-3" role="tab" aria-controls="contact" aria-selected="false" class="nav-link">Third tab</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div id="tab5-1" role="tabpanel" aria-labelledby="tab5-1-tab" class="tab-pane fade show active p-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                  <ul class="mt-4">
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                    <li>Vestibulum auctor dapibus neque.</li>
                  </ul>
                </div>
                <div id="tab5-2" role="tabpanel" aria-labelledby="tab5-2-tab" class="tab-pane fade p-4">This is tab two.</div>
                <div id="tab5-3" role="tabpanel" aria-labelledby="tab5-3-tab" class="tab-pane fade p-4">This is tab three.</div>
              </div>
              <!-- /.tab-content-->
            </div>
            <!-- /.tabs-->
            
            
          </div>
        </div>
      </div>
    </section>


@endsection