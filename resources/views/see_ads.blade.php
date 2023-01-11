@extends('layout')

<link rel="stylesheet" href="{{ URL::asset('css/crud_ads.css') }}">

@section('crud_ads')

        <main class="container-lg">
            <div class="row">
       @csrf
            <a href="/ads_create"class="btn btn-secondary">< Previous page</a> 
            <a href="/welcome" class="btn btn-warning">Welcome Page</a>
           
            </div>
       
            <div class="row">
            
            <div class="container p-3 my-3" >
            <h2 class="text-center" >Ads</h2>
            
            </div>
            
           
          
       
            <section class="col-12">
             
                <div class="alert-success">
                    @if(session('succes'))
                            <h6 class="alert alert-success"> {{ session('succes') }}</h6>
                    @endif
               
                    </div>   
        
                <table class="table" >
                    <thead>
                    <tr> 
                        <th>Id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>location</th>
                        <th>price</th>
                        <th>Created At</th>
                        <th>Updated At</th>                       
                        <th colspan="2">ACTIONS</th>
                    </tr>
         @csrf   
                    </thead>
                       @if(isset($ads) )
        @foreach($ads as $ad)   
        @csrf
                    <tbody>
     
                       <tr>
                     
                           <td>{{$ad->id}}</td>
                           <td>  <img  src="{{ asset('pictures/' . $ad->file_path1) }}" alt="{{ $ad->picture1 }}" width="150px" height="150px"> 
                                <img  src="{{ asset('pictures/' . $ad->file_path2) }}" alt="{{ $ad->picture2 }}" width="100px" height="100px">
                                <img  src="{{ asset('pictures/' . $ad->file_path3) }}" alt="{{ $ad->picture3 }}" width="100px" height="100px"></td> 
                           <td>{{$ad->title}}</td>
                           <td>{{$ad->category_name}}</td>
                           <td>{{$ad->content}}</td>
                           <td>{{$ad->location}}</td>
                           <td>{{$ad->price}}</td>
                           <td>{{$ad->created_at}}</td>      
                           <td>{{$ad->updated_at}}</td>                    
                           <td colspan="2"><a href="{{ route('show', $ad->id) }}" class="btn btn-primary">See</a> 
                                <a href="{{ route('update'), $ad->id }}" class="btn btn-success">Edit</a> 
                                 @method('DELETE')
                  <a href={{ route('delete', $ad->id)}} class="btn btn-danger" type="submit">Delete ad</a>
                               
                           
                       </tr>      
                    </tbody>
                
                </table>
    
            @endforeach 
        @endif
            </section>
            </div>
       
           </main>
       
      @endsection