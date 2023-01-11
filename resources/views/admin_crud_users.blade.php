@extends('welcome')

<link rel="stylesheet" href="{{ URL::asset('css/crud_user.css') }}">

@section('crud_user')

        <main class="container-sm">
            <div class="row">
       
            <a href="/profile"class="btn btn-secondary">< Previous page</a> 
            <a href="/" class="btn btn-warning">Welcome Page</a>
            <a href="/admin_adduser" class="btn btn-primary">+ Add new user</a>
            </div>
       
            <div class="row">
            
            <div class="container p-3 my-3" >
            <h2 class="text-center" >Users</h2>
            
            </div>
            
           
          
       
            <section class="col-12">
                <div class="alert-success">
                    @if(session('success'))
                            <h6 class="alert alert-success"> {{ session('success') }}</h6>
                    @endif
                    </div>
                <table class="table" >
                    <thead>
                        
                        <th>Id</th>
                        <th>Name</th>
                        <th>Nick Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Admin Status</th>
                        <th>Created At</th>
                        <th>Updated At</th>                       
                        <th>ACTIONS</th>
       
       
                    </thead>
                    @if(count($users) > 0)
                    @foreach($users as $user)
                    <tbody>
                       
                       <tr>
                           <td>{{$user->id}}</td>
                           <td>{{$user->name}}</td>
                           <td>{{$user->nickname}}</td>
                           <td>{{$user->email}}</td>
                           <td>{{$user->phone_num}}</td>
                           <td>{{$user->admin}}</td>
                           <td>{{$user->created_at}}</td>      
                           <td>{{$user->updated_at}}</td>                    
                           <td><a href="{{ route('check_user',$user->id)}}" class="btn btn-primary">See</a> <a href="{{ route('edit_user',$user->id)}}" class="btn btn-success">Edit</a> <a href="{{ route('delete_user',$user->id)}}" class="btn btn-danger">Delete</a></td>
                           
                       </tr>      
                    </tbody>
                    @endforeach
                    @endif
                </table>
       
               
              
            </section>
            </div>
       
           </main>
       
      @endsection