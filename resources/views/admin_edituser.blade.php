@include('header')
        @foreach($user as $test)
        <main class="container">
            <div class="row">
     
            <a href="{{route('crud')}}" class="btn btn-secondary">< Previous page</a>
            <a href="{{route('profile')}}" class="btn btn-dark">Profile</a>
            <a href="/"class="btn btn-warning">Welcome</a>
     
         <section class="col-12">
                    
                    
         <h2 class="text-center">Update a user</h2>
     
         <form action="{{route('admin_edit_validate')}}" method="post">
            {{ csrf_field() }}
                
            <div class="form-group">  
                <label for="username">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$test->name}}">
                @if($errors->has('name')){
                    <p>{{ $errors->first('name')}}</p>
                  }
                  @endif
            </div> 
            <div class="form-group">  
                 <label for="username">Nickname</label>
                 <input type="text" name="nickname" id="nickname" class="form-control" value="{{$test->nickname}}">
                 @if($errors->has('nickname')){
                    <p>{{ $errors->first('nickname')}}</p>
                  }
                  @endif
             </div> 
             <div class="form-group">
             
                 <label for="emaii">Email</label>
                 <input type="email" name="email" id="email" class="form-control" value="{{$test->email}}">
                 @if($errors->has('email')){
                    <p>{{ $errors->first('email')}}</p>
                  }
                  @endif
             </div> 
     
             <div class="form-group">
                 <label for="phone_num">Phone Number</label> 
                 <input type="text" name="phone_num" id="phone_num" class="form-control" value="{{$test->phone_num}}" >
                 @if($errors->has('phone_num')){
                    <p>{{ $errors->first('phone_num')}}</p>
                  }
                  @endif
                 </div>
             
             </div>
              <div class="form-group">  
                <label for="username">Admin Status</label>
                <input type="text" name="admin" id="admin" class="form-control" value="{{$test->admin}}">
                @if($errors->has('admin')){
                    <p>{{ $errors->first('admin')}}</p>
                  }
                  @endif
            </div> 
            <div class="form-group">

             
                 <input type="hidden" name="id" value="{{$test->id}}">
                 <button class="btn btn-primary">Save</button>
     
               
             
                
     
         </form>

     </div>
     </section>
     </div>
     </main>  
     @endforeach
     </body>
     </html>