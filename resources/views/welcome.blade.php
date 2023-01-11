
@extends('layout')
  
@section('welcome')


        <div class="container mt-3">
          <div class="shadow p-4 mb-4 bg-white">

        <form method="GET" action="{{ url('find') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="search">

          <div class="input-group">
            
            <label>Choose a category</label>
             
                <select class="form-control" name="category_name" id="category_name"> 
                  
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
                

              
                  
                  <div class="form-inline">
                    <label>Price</label>
                    <input type="number" class="form-control form-inline" name="priceMin" placeholder="Minimum price..." id="priceMin" value="{{ request('priceMin') }}">
                    <input type="number" class="form-control form-inline" name="priceMax" placeholder="Maximum price..." id="priceMax" value="{{ request('priceMax') }}">

                    <label>Location</label>
                     <input type="text" class="form-control form-inline" name="location"
                      placeholder="Location..." value="{{ request('location') }}">
                             
                    
                        
                     <button class="btn btn-info" type="submit" class="form-control">Let's find out matching ads !</button>
                        
                  </div>

        </form>

          </div>
        </div>

 <div class="container" style="text-align: center">
          <div class="row">
          <div class="mb-5 mt-5 col-12 text-center">
              <h3>Our latest ads</h3>
          </div>
          <div class="gallerie">
                          @if(isset($ads))
      
                            @foreach($ads as $a)
                            
                              <div class="shadow p-4 mb-4 bg-white">
                                 
                                <img  src="{{ asset('pictures/' . $a->file_path1) }}" alt="{{ $a->picture1 }}" width="250px" height="160px"> 
                               

                                <p class="card_title">{{ $a->title }}</p>
                                <p>{{ $a->content }}</p>
                                
                                <p>price: {{ $a->price }} $</p>
                                <p>location: {{ $a->location }}</p>

                                <a class="btn btn-info active" href="{{ route('details',$a->id) }}">More details</a>
                                
                                
      
                              </div>
                             
                              
                      
                            
                            @endforeach
             @endif

          </div>
        </div>
        </div>  

@endsection




