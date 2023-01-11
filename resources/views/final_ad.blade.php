@extends('layout')


<link rel="stylesheet" href="{{ URL::asset('css/final_ad.css') }}">

@section('final_ad')
    @if ($ads->id->count() > 0) 
        @foreach ($ads as $ad)
          
<div class="main">
    <ul class="cards">
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="" alt="laptop category " max-width='250px' max-heidth='300px'/></div>
                <div class="card_content">
                    <h2 class="card_title" name='title'> {{ $ads->title }} <span class="orange" name="price">&#x2022;{{ $ads->price }} €</span></h2>
                    <div class="card_text">
                        <p name="content">
                            {{ $ads->content }}
                        </p>
                        <br>
                        <p name="location"> {{ $ads->location }}</p>

                    </div>

                </div>
            </div>
        </li>
    </ul>
</div>

        @endforeach
    @endif
@endsection



      