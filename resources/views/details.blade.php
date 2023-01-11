@extends('layout')


@section('details')

<div class="container" style="text-align: center">
    <div class="row">
    <div class="mb-5 mt-5 col-12 text-center" >
        <h3>Ad selected</h3>
    </div>
        @foreach ($ads as $a )
          
       
            
                      <div class="container mt-3">
                        <div class="shadow p-4 mb-4 bg-white">
                      
                          <p>{{ $a->title }}</p>
                          <p>description :{{ $a->content }}</p>
                          <p>price: {{ $a->price }} $</p>
                          <p>location: {{ $a->location }}</p>
                          
                          <?php $img = explode(';', $a->file_path1); 
                          if ($img[0] != ''): ?>
                          <img src="pictures/<?=  $img[0] ?>" alt='<?= $a->title ?>'>
                          <?php endif; 
                          ?>
    
                          <?php $img2 = explode(';', $a->file_path2); 
                          if ($img2[0] != ''): ?>
                          <img src="pictures/<?= $img2[0] ?>" alt='<?= $a->title ?>'>
                          <?php endif; 
                          ?>
    
                          <?php $img3 = explode(';', $a->file_path3); 
                          if ($img3[0] != ''): ?>
                          <img src="pictures/<?= $img3[0] ?>" alt='<?= $a->title?>'>
                          <?php endif; 
                          ?>
                          
                          <p>category :{{ $a->category_name }}</p>
                           <p>date of creation:{{ $a->created_at }}</p>
                           <p>update:{{ $a->updated_at }}</p>
                         
    
                           <a class="btn btn-info active" href="{{ route('register') }}">Contact the seller</a>
                        </div>
                        </div>
                        
                        @endforeach      
                      
                    
    
                  
    
                      
                      
                  </div>
              </div>
  @endsection      
    