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
            <h1 class="heading">Applicants List</h1>
            <p class="lead text-center">This is the lead paragraph of the article. Pellentesque habitant morbi tristique.</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
      
            <div class="table-responsive">
              <table class="table table-striped table-hover table-client-dashboard"> 
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Applicant Name</th>
                    <th>Applicant Id </th>
                    <th>Email </th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Job applied</th>
                    <th> Viw CV and download</th>
                    <!-- <th> Download CV</th> -->
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $file)
                  <tr>
                   <td> <span class="">{{$file->id}}</span>
                    </td>
                    <td> <span class="">{{$file->name}}</span>
                    </td>
                    <td> <span class="">{{$file->applicant_id}}</span></td>
                    <td> <span class="">{{$file->email}}</span></td>
                    <td> <span class="">{{$file->phone}}</span></td>
                    <td> <span class="">{{$file->address}}</span></td>
                    <td> <span class="">{{$file->job_title}}</span></td>
                    <td> <span class=""> <a href="{{route('applicants.show',$file->id)}}">view CV and download</a></span></td>
                    <td> <span class=""> 
                      <!-- <a href="{{ asset('cvs/'.$file->file) }}" download="{{ $file->name}}.pdf">Download CV</a></span></td> -->

                    
                    <td> 
                      <form id="delete-form-{{ $file->id }}" method="post" action="{{ route('applicants.destroy',$file->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                  <a href="" onclick="if(confirm('Are you sure, You Want to delete this?'))
                                      {
                                     event.preventDefault();
                                       document.getElementById('delete-form-{{ $file->id }}').submit();
                                         }
                                         else{
                                          event.preventDefault();
                                        }"


                   class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  
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