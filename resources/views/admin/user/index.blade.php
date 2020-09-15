


@extends('layouts.app')

@section('content')

    <section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">   
           
            <h1 class="heading">Users</h1>
            
             
             <table class="table table-striped table-hover table-client-dashboard"> 
                <thead>
                  <tr>
                    <th> ID</th>
                    <th> Name</th>
                    <th> Email</th>
                    <th> Role</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}</td>
                    
                    <td> 
                      @can('edit-user')
                    	<a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-outline-white-secondary"> <i class="fa fa-edit"></i>Edit</a><br>
                      @endcan

                      @can('delete-user')
      
                    	 <form action="{{route('admin.users.destroy',$user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                         <button type="submit" class="btn btn-outline-white-secondary"> <i class="fa fa-times-circle-o"></i>Delete</button>
                       </form>
                      @endcan
                    	
                    </td>
                  </tr>
                  @endforeach	

                  
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </section>

@endsection