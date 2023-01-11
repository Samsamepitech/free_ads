
@include('header')


    <div class="container" style="text-align: center">
    <div class="row">
    <div class="mb-5 mt-5 col-12 text-center">
        <h3>Your matching ads</h3>
    </div>
      
                    @if(isset($ads))

                      @foreach($ads as $a)
                      <div class="container mt-3">
                        <div class="shadow p-4 mb-4 bg-white">
                           

                          <p>{{ $a->title }}</p>
                          <p>description :{{ $a->content }}</p>
                          <p>category :{{ $a->category_name }}</p>
                          <p>price: {{ $a->price }} $</p>
                          <p>location: {{ $a->location }}</p>

                          <?php $img = explode(';', $a->file_path1); 
                          if ($img[0] != ''): ?>
                          <img src="pictures/<?php echo $img[0] ; ?>" >
                          <?php endif; 
                          ?>
                          <?php $img2 = explode(';', $a->file_path2); 
                          if ($img2[0] != ''): ?>
                          <img src="pictures/<?php echo $img2[0] ; ?>" >
                          <?php endif; 
                          ?>
                          <?php $img3 = explode(';', $a->file_path3); 
                          if ($img3[0] != ''): ?>
                          <img src="pictures/<?php echo $img3[0] ; ?>" >
                          <?php endif; 
                          ?>
                          
                          <p>posted by :{{$a->nickname}}</p>
                           <p>date of creation:{{ $a->created_at }}</p>
                           <p>update:{{ $a->updated_at }}</p>
                          

                           <a class="btn btn-info active" href='#' >Contact the seller</a>

                        </div>
                        </div>
                        
                
                      
                      @endforeach

                    @else 

                     <div>
                      <h2>no result found</h2>
                     </div>
                      
                    @endif

                      
                      
                  </div>
              </div>
        
