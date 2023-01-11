
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>My ads</h2></div>

                <div class="panel-body">


                  @foreach ($ads as $a)
                  <ul>
                     <li><h3>{{ $a->title }}</h3></li>
                     <li><p>{{ $a->content }}</p></li>
                     <div class="img">
                        <li><img src="{{ $a->file_path}}"></li>
                        
                    </div>
                    <li><p class="price">{{ $a->price }} $</p></li>
                    <li><td><a href="{{action('AdsController@edit', $a->id)}}" class="btn btn-warning">Edit</a></td></li>
                    <li><form action="{{action('AdsController@destroy', $a->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form></li>

                </ul>

                @endforeach
            </div>
            <div class="panel-body">
                <a href="{{ url('annonce/create') }}" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-pencil"></span> Create</a>

            </div>

            <div class="panel-body">




            </div>
        </div>
    </div>
</div>
</div>
@endsection