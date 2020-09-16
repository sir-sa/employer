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
          <div class="col-lg-12 text-right mb-5">
            <a href="{{ route('categories.create')}}" class="btn btn-outline-white-primary"> <i class="fa fa-plus"></i>Add new Job Category</a>
            <a href="{{ route('category')}}" class="btn btn-outline-white-primary"> <i class="fa fa-plus"></i>Go to job lists</a>
          </div>
          <div class="col-lg-12">
            <div class="table-responsive">
              <a href="">Categories=></a>
              <ul class="table-responsive">
                @if(!empty($categories))
              <table class="table table-striped table-hover table-client-dashboard"> 
                <thead>
                  <tr>
                    <th>Category ID</th>
                    <th>Category name</th>
                    <th>Logo Image</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @forelse($categories as $category)
                  <tr>
                    <td>{{$category->id}}</td>
                    <td><a href="">{{$category->name}}</a>
                    </td>
                    <td>
                      <div class="col-2"><img src="{{('asset/img/'.$category->image)}}" alt="" class="img-fluid"></div>
                      <!-- <img src="{{Storage::disk('local')->url('asset/img/'.$category->image)}}" alt="" class="img-fluid"> -->
                    </td>
                    
                    <td> 
                      @can('manage-user')
                        <form action="{{route('categories.destroy',$category->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                           <button type="submit" class="btn btn-outline-white-secondary"> <i class="fa fa-times-circle-o"></i>Delete</button>
                        </form>
                      @endcan
                      
                  </tr>
                  @empty
                  <li>No Category</li>
                  @endforelse

                  
                </tbody>
              </table>
              @endif
              </ul>
            </div>
            <div class="pages">
              <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-4 mb-4">
                <ul class="pagination">
                  
                    
                   {{ $categories->links() }}
                  
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