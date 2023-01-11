<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>The Good Seller</title>
</head>
    <body> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">The good seller</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>   
            </ul>
            
            <a name="add_ad" id="add_ad" class="btn btn-info" href="ads_create" role="button" aria-hidden="true">+ Post a new ad</a>
            <form  method="POST" class="form-inline my-2 my-lg-0" action="{{url('search')}}" role='search' accept-charset="UTF-8">
              <input class="form-control mr-sm-2" type="text" placeholder="Search..." name="search" value="{{request('search')}}">
              <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        
          
        
        </nav>

        
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                   @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                   @endauth 
                </div>
            @endif

      
        </div>

@yield('welcome')
             
@yield('formulaire')

@yield('show')

@yield('final_ad')
          
@yield('edit_ads')

@yield('profile')

@yield('crud_user')

@yield('crud_ads')

@yield('find')

@yield('annonce')

@yield('edit_profile')

@yield('details')

@yield('dashboard')

@yield('admin')


          
<!-- Footer -->

<!------ Include the above in your HEAD tag ---------->

<div class="footer">
@include('footer')
</div>

    </body>
</html>


    