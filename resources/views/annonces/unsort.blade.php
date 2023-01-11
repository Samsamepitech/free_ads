@extends('layouts.app')

@section('content')





<div class="container" style="text-align: center;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Ads</h3></div>
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

                        <a class="navbar-brand"  href="{{ url('sort') }}">Ltest Ads</a>

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
                </div>
                <div class="panel-body">

                    @if(count($ads) != 0)

                    @foreach($ads as $a)
                    <div>
                       <div>
                          <h2>{{ $a->title }}</h2>
                      </div>
                      
                      <p>content: {{ $a->content }}</p>
                      <h4>{{ $a->price }} $</h4>
                      <img src="{{ $a->file_path }}" style="max-width: 90%;">
                      <p>{{ $a->created_at }}</p>

                      @endforeach

                      @else 

                      <h3>no result found</h3>
                      @endif

                      
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection