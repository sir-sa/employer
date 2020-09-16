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
          <div class="col-lg-12 text-right mb-5"><a href="{{ route('jobtypes.create')}}" class="btn btn-outline-white-primary"> <i class="fa fa-plus"></i>Add new Job Type of Job</a></div>
          <div class="col-lg-12">
            <div class="table-responsive">
              <a href="">job types=></a>
              <ul class="table-responsive">
                @if(!empty($jobtypes))
              <table class="table table-striped table-hover table-client-dashboard"> 
                <thead>
                  <tr>
                    <th>Type ID</th>
                    <th>Type name</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @forelse($jobtypes as $type)
                  <tr>
                    <td>{{$type->id}}</td>
                    <th><a href="">{{$type->name}}</a>
                    </th>
                    
                    <td> 
                      @can('manage-user')
                        <form action="{{route('jobtypes.destroy',$type->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                           <button type="submit" class="btn btn-outline-white-secondary"> <i class="fa fa-times-circle-o"></i>Delete</button>
                        </form>
                       @endcan
                     
                  </tr>
                  @empty
                  <li>No Job types</li>
                  @endforelse

                  
                </tbody>
              </table>
              @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection