@extends('layout')
        
      @section('admin')
        <main class="container">
            <a href="{{route('crud')}}" class="btn btn-secondary">< Previous page</a>
             <a href="{{route('profile')}}" class="btn btn-dark">Profile</a>
             <a href="/"class="btn btn-warning">Welcome page</a>
            <div class="row">
         
      
      @foreach($user as $test)

            <div class="col-sm-6">
   
           <h2 class="text-center"><em>{{$test->name}}</em></h2>
           
            </div>
       
           <div class="col-sm-6 border">
       
           <p><strong>ID:</strong>{{$test->id}} </p>

           <p><strong>NickName :</strong> {{$test->name}}</p>
       
           <p><strong>NickName :</strong> {{$test->nickname}}</p>
           
           <p><strong>Email :</strong>{{$test->email}} </p>
       
           <p><strong>Password :</strong>{{$test->phone_num}} </p>
       
           <p><strong>Admin Status:</strong>{{$test->admin}} </p>

           <p><strong>Created :</strong>{{$test->created_at}} </p>

           <p><strong>Updated :</strong>{{$test->updated_at}} </p>
       
           <p><a href="{{ route('edit_user',$test->id)}}" class="btn btn-success">Update</a>  <a href="{{ route('delete_user',$test->id)}}" class="btn btn-danger">Delete</a></p>
      @endforeach
       
       </div>
            </div>
       
          </main>
      @endsection