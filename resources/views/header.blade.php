<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
    <body> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="#">The good seller</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">Home <span class="sr-only">(current)</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
        
             
            
            </ul>
            
          
            <a name="add_ad" id="add_ad" class="btn btn-info" href="ads_create" role="button" aria-hidden="true">+ Post a new ad</a>
         
          

            <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method="GET" >
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" id="search">
              <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        
          </div>
        
        </nav>