
@extends('layout')
        
@section('edit_profile')      
           @foreach($users as $user)
<x-auth-validation-errors class="mb-4" :errors="$errors" />      
<form action="{{route('update_profile')}}" method="post">  
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="inputNickName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-5">
        <input type="text" name='name' class="form-control" id="inputEmail3" value= {{$user->name}}>
        @if($errors->has('name')){
          <p>{{ $errors->first('name')}}</p>
        }
        @endif
      </div>
    </div>
  <div class="form-group row">
    <label for="inputNickName" class="col-sm-2 col-form-label">Nick Name</label>
    <div class="col-sm-5">
      <input type="text" name='nickname' class="form-control" id="inputEmail3" value= {{$user->nickname}}>
      @if($errors->has('nickname')){
        <p>{{ $errors->first('nickname')}}</p>
      }
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-5">
      <input type="email" name='email' class="form-control" id="inputEmail3" value= {{$user->email}}>
      @if($errors->has('email')){
        <p>{{ $errors->first('email')}}</p>
      }
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputemail" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-5">
      <input type="text" name='phone_num'class="form-control" id="inputEmail3" value= {{$user->phone_num}}>
      @if($errors->has('phone_num')){
        <p>{{ $errors->first('phone_num')}}</p>
      }
      @endif
    </div>
  </div>
  


  <div class="form-group row">
    <div class="col-sm-5">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endforeach

@endsection

     