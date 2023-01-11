@include('header')
        
<form action="{{route('admin_adduserbutton')}}" method="post">  
    {{ csrf_field() }}
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control"  name="name"  id='name' placeholder="Choose User Name ..." minlength="4" maxlength="30" required>
    @if($errors->has('name')){
      <p>{{ $errors->first('name')}}</p>
    }
    @endif
      </div>
    </div>
  <div class="form-group row">
    <label for="inputNickName" class="col-sm-2 col-form-label">Nick Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="nickname"  id='nickname' placeholder="Choose User Nickname ..." minlength="4" maxlength="30" required>
      @if($errors->has('nickname')){
        <p>{{ $errors->first('nickname')}}</p>
      }
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="Email" name="email" placeholder="Enter User email ..."  maxlength="30" required>
      @if($errors->has('email')){
        <p>{{ $errors->first('email')}}</p>
      }
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputemail" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control"  name="phone_num" placeholder="User Phone number ..." minlength="10" maxlength="20" required>
      @if($errors->has('phone_num')){
        <p>{{ $errors->first('phone_num')}}</p>
      }
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password ..." minlenght="6" maxlength="20"  required>
      @if($errors->has('password')){
        <p>{{ $errors->first('password')}}</p>
      }
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Confirm Password</label>
    <div class="col-sm-10">
      <input type="password_confirmation" class="form-control" name="password_confirmation"  id="password_confirmation" placeholder="confirm password ..."   required>
      @if($errors->has('password_confirmation')){
        <p>{{ $errors->first('password_confirmation')}}</p>
      }
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputadmin" class="col-sm-2 col-form-label"> Admin Status</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="admin"  placeholder="Choose User Status ... User = 0 ; Admin = 1" aria-hidden="true" required>
      @if($errors->has('admin')){
        <p>{{ $errors->first('admin')}}</p>
      }
      @endif
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </body>
</html>
     