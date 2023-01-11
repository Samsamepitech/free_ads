@extends('layout')

<link rel="stylesheet" href="{{ URL::asset('css/ads_show.css') }}">

@section('show_ads')

<meta name="csrf-token" content="{{ csrf_token() }}">
@csrf

<div class="container">
    <div class="col-lg-8 border p-3 main-section bg-white">
        <div class="row hedding m-0 pl-3 pt-0 pb-3">
            You can validate or update your ad
        </div>
    
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
           {{--  @foreach ($ads as $ad)
<td> <img src="{{ asset('public/pictures/' . $ads->image) }}" /> </td>
@endforeach--}} 

               <img src="{{ URL::asset('/public/pictures/'. $ads->file_path1) }}" class="border p-3">
                <span class="sub-img">
                    
                    <img src="{{ $ads->file_path }}" class="border p-2">
                 
                </span>
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Title</p>
                               <p> {{$ads->title}}</p>
                            <p class="m-0 p-0" name="title" value="{{ $ads->title }}"></p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro" name="price" value="{{ $ads->price }}"> € </p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <section class="col-md-3" name="content">{{ $ads->content }} </section>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <div class="col-lg-12">
                            <p class="tag-section">Tag : </p>
                            <p class="m-0 p-0 price-pro" name="price" value="#"> </a><a href="">{{ $ads->title }}</p>
                        </div>
                        
                        <div class="col-lg-12 mt-3">
                            <div class="row">

                                <div class="col-lg-6">
                                
                                    <a href="{{ route('update'), $ads->id }}" class="btn btn-success w-100">Modify</a>
                                     <a href="{{ route('final_ad'), $ad->id}}" class="btn btn-primary">Validate</a></td>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
@endsection