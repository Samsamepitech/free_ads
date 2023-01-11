@extends('layout')

<link rel="stylesheet" href="{{ URL::asset('css/ads_create.css') }}">


@section('annonce')


  <link rel="stylesheet" href="{{ asset('css/ads_create.css') }}">

				@if(count($errors) > 0 )
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <ul class="p-0 m-0" style="list-style: none;">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="col-lg">	

		<div class="row-md-6">
			<div class="ads_form">
{{-- image pour champs depot annonce --}}
			</div>
				<h2>Post your ad here!</h2>
	
		</div>
		
		<div class="col-md-7">	
		
			<form method="POST" action='see_ads' enctype="multipart/form-data">
			@csrf

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title"  name="title" placeholder="Title of your ad ..." >
					<h6 class="invalid-feedback"> Please proviide a valid city name </h6>
				</div>

				<div class="form-group">
					<div class="col-auto my-1">
							<label class="mr-sm-2" for="inlineFormCustomSelect" >Select category</label>
							<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name='category_name'>
						       <optgroup label="Home">
                    <option></option>
                    <option>Furniture</option>
                    <option>Home appliance</option>
                    <option>Decoration</option>
                    <option>Garden</option>
                    <option>Tools</option>
                  </optgroup>
                  <optgroup label="Hobbies">
                    <option>Books</option>
                    <option>Music</option>
                    <option>DVD/Games</option>
                    <option>Sport</option>
                    <option>Collections</option>
                  </optgroup>
                  <optgroup label="Fashion">
                    <option>Clothing</option>
                    <option>Shoes</option>
                    <option>Accessoires/Luggage items</option>
                    <option>Watches/Jewellery</option>
                    <option>Luxury brands</option>
                  </optgroup>
                  <optgroup label="Vehicles">
                    <option>Cars</option>
                    <option>Motorbikes</option>
                    <option>Equipement</option>
                    <option>Caravaning</option>
                    <option>Trucks</option>
                  </optgroup>
                  <optgroup label="Services">
                    <option>Family & care service</option>
                    <option>Education & languages</option>
                    <option>Transport</option>
                    <option>Fitness</option>
                    <option>Pets/animals/farming</option>
                  </optgroup>
                </select>
							</select>
					</div>
				</div>

				<div class="form-group">
				  <label for="content">Describe your offer</label><br>
				  <textarea class="form-control" name='content' id="content" cols="30" rows="10"></textarea>
				</div>

				<div class="form-group">
					<label for="location">Location</label>
					<input type="text" class="form-control" id="location"  name="location" placeholder="Name of city ..." >
					<h6 class="invalid-feedback"> Please provide a valid city name </h6>
					
				</div>
				
				<div class="form-group">
					<label for="price">Price</label>
					<input type="float" class="form-control" id="price"  name="price" placeholder="Price your offer..." >
				</div>


				<div class="form-group">
					<label for="picture">Picture</label>
					<input type="file" class="form-control" id="picture"  name="file_path1" placeholder="Drop the picture file here" >
				</div>
				<div class="form-group">
					<label for="picture">Picture</label>
					<input type="file" class="form-control" id="picture"  name="file_path2" placeholder="Drop the picture file here" >
					
				</div>
				<div class="form-group">
					<label for="picture">Picture</label>
					<input type="file" class="form-control" id="picture"  name="file_path3" placeholder="Drop the picture file here" >
					
				</div>

				<div class="form-group">
					<div class="form-check">
					<input class="form-check-input " type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
					<h6 class="invalid-feedback">You must agree before submitting.</h6>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>

			
	</div>		
</div>

@endsection