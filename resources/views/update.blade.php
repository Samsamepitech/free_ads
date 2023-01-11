@extends('layout')


@section('edit_ads')

<link rel="stylesheet" href="{{ URL::asset('css/ads_show.css') }}">


	<div class="alert-success">
			@if(session('status'))
					<h6 class="alert alert-success"> {{ session('status') }}</h6></div>
			@endif

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

  @csrf



<div class="card uper">
      <div class="card-header">
        Modify your ad
      </div>

  <div class="card-body">

        @if (isset($ads))

  @foreach ( $ads as $ad)
    
@csrf 
    <form class="" action='/updatePOST/{{ $ad->id }}' method="POST">

        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                           
               <img src="{{ asset('pictures/'. $ad->file_path1) }}" class="border p-3">
                <span class="sub-img">
                    <img src="{{ asset('pictures/' . $ad->file_path2) }}" class="border p-2">
                </span>
                <span class="sub-img">
                    <img src="{{ asset('pictures/' . $ad->file_path3) }}" class="border p-2">
                </span>
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Title</p>
                            <p><input class="m-0 p-0" name="title" value="{{ $ad->title }}"></p>
                        </div>
                        <div class="col-lg-12">
                           <p> <input class="m-0 p-0 price-pro" name="price" value="{{ $ad->price }}"> € </p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <textarea class="col-md-9 " name="content">{{ $ad->content }} </textarea>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <div class="col-lg-12">
                            <p class="tag-section">Tag : </p>
                           <p> <input class="m-0 p-0 price-pro" name="price" value="#"> </a><a href="">{{ $ad->title }}</p>
                        </div>
                        
                        <div class="col-lg-12 mt-3">
                            <div class="row">

                                <div class="col-lg-6">
                                    <a href="#" class="btn btn-success w-100">Modify</a>
                                </div>   
                                <div class="col-lg-6">
                                    <a href="{{ route('show', $ad->id) }}" class="btn btn-danger w-100">Validate</a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        
         

            </div>
      </form>
      </div>
  </div>
</div>
   

          
    @endforeach
   @endif
@endsection