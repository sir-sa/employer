@extends('layouts.app')

@section('content')

<section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Client dashboard</li>
              </ul>
            </nav>
            <h1 class="heading">Client dashboard</h1>
            <p class="lead text-center">This is the lead paragraph of the article. Pellentesque habitant morbi tristique.</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-12 text-right mb-5"><a href="" class="btn btn-outline-white-primary"> <i class="fa fa-plus"></i>Add new position</a></div> -->
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-striped table-hover table-client-dashboard"> 
                <thead>
                  <tr>
                    <th>Job title</th>
                    
                    <th>Applicants</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><a href="{{ route('client-job')}}">Webdesigner</a>
                    </th>
                  
                    
                    <td> <a href="{{ route('client-applicants')}}" class="btn btn-success"> <i class="fa fa-users"></i>{{$apply}} <span class="hidden-xs hidden-sm">Applicants</span></a>
                    </td>


                    <td> 
                      <a href="{{ route('client-job')}}" class="btn btn-outline-white-secondary"> <i class="fa fa-edit"></i>Edit</a><br>
                      <a href="#" class="btn btn-outline-white-secondary"> <i class="fa fa-check-circle-o"></i><span class="hidden-xs hidden-sm">Mark as </span>filled</a><br>
                      <a href="#" class="btn btn-outline-white-secondary"> <i class="fa fa-times-circle-o"></i>Delete</a>
                    </td>
                  </tr>


                  
                </tbody>
              </table>
            </div>
            <div class="pages">
              <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-4 mb-4">
                <ul class="pagination">
                  <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                  <li class="page-item active"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">4</a></li>
                  <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                </ul>
              </nav>
            </div>
            <p class="text-small text-muted">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p>
            <p class="text-small text-muted">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p>
          </div>
        </div>
      </div>
    </section>

@endsection