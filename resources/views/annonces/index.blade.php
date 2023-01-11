
@extends('layouts.app')


@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                @guest
                <h2>You're not connected</h2>
                @else



                
                <div class="panel-heading"><h2>Ads</h2></div>


                <div class="panel-body">

                    <div>
                        <form method="get" action="{{ url('search') }}">
                            <div>
                                <input type="text" class="form-control" name="search"
                                placeholder="Search articles">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default">Ok
                                </button>
                            </div>

                        </form>

                        <a class="navbar-brand"  href="{{ url('sort') }}">Latest ads</a>

                        <a class="navbar-brand"  href="{{ url('unsort') }}">Older ads</a>

                        <a class="navbar-brand"  href="{{ url('minprice') }}">Price -</a>

                        <a class="navbar-brand"  href="{{ url('maxprice') }}">Price +</a>

                        <form method="get" action="{{ url('choose') }}">


                            <select name="categories">
                                <option></option>
                                <option>Home</option>
                                <option>Hobbies</option>
                                <option>Fashion</option>
                                <option>Services</option>
                                <option>Vehicles</option>
                                
                            </select>





                            <button type="submit" class="btn btn-lg">OK
                            </button>

                        </form>
                    </div>
                    

                    @foreach ($ads as $a)
                    <ul>
                       <li><h3>{{$a['title']}}</h3></li>
                       <li><p>{{$a['content']}}</p></li>
                       <div class="img">
                        <li><img src="{{$a['file_path']}}"></li>
                        
                    </div>
                    <li><p class="price">{{$a['price']}} $</p></li>

                    


                    <a href="{{action('CartController@cart', $a['id'])}}" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-comment"></span> Add to cart</a>


                </ul>

               
                

                @endforeach
            </div>
            

            @endguest


                
                
                
            </div>
        </div>
    </div>
</div>
</div>
@endsection