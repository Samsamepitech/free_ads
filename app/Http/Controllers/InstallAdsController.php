<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use App\Category;
use Illuminate\adsbase\Eloquent\Model\Pictures;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;




class InstallAdsController extends Controller
{


public function index(){

    $ads = Ads::all(); 
    //$category = Category::all(); 

    return view('/welcome')->with('ads', $ads);

}


   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // afficher le formulaire ads       
        return view('ads_create'); 
    }
    public function storePics(){

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //stock les données
    {
        // Validate the request...
        // store pictures in file upload in public and file_path in DB  
        
        $request->validate([
            'title' => ['required', 'string', 'max:50'],
            //'category_id' => ['required'],
            //'category_name' => ['required'],
            'content' => ['required', 'max:2000'],
            'price' => ['required', 'integer'],
            'location' => ['required', 'max:15'],
            'file_path1' => 'required|image|max:2048'   
        ]);  
          
        $picture1=uniqid() . "." . $request->file_path1->extension();
        $request->file_path1->move(public_path('pictures'), $picture1);
        if(empty('file_path2')){($picture2=$picture1);}else{$picture2 = uniqid() . "." . $request->file_path2->extension(); $request->file_path2->move(public_path('pictures'), $picture2);}
        if(empty('file_path3')){($picture3=$picture1);}else{$picture3 = uniqid() . "." . $request->file_path3->extension(); $request->file_path3->move(public_path('pictures'), $picture3);}

        $ads = Ads::create([
            
            'title' => $request->title,
            'category_id' => $request->category_id,
            //'category_name' => $request->category_name,
            'content' => $request->content,
            'price' => $request->price,
            'location' => $request->location, 
            'file_path1' => $picture1,
            'file_path2' => $picture2,
            'file_path3' => $picture3,
            //'user_id' =>auth()->user()->id,
        ]);
      
      
    $ads = Ads::all();
    return view('/see_ads', compact('ads')); 
    }


    public function crud_ads(Request $request){   

        $ads = DB::table('ads')->select('ads . *')->orderBy('created_at', 'desc')->get();
        
    return view('/see_ads', compact('ads'));
    }


    public function updateAds($id) {
        
        $ads = Ads::where('id', '=', $id)->take(1)->get();

        return view('update', compact('ads'));
    }
    
   

    public function saveChangesAd(Request $request) {

        $ads = Ads::find($request->id);
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'location' => ['required', 'string', 'email', 'max:255'],
            'price'=>['required', 'integer'],
            
        ]);

        $picture1=uniqid() . "." . $request->file_path1->extension();
        $request->file_path1->move(public_path('pictures'), $picture1);
        if(empty('file_path2')){($picture2=$picture1);}else{$picture2 = uniqid() . "." . $request->file_path2->extension(); $request->file_path2->move(public_path('pictures'), $picture2);}
        if(empty('file_path3')){($picture3=$picture1);}else{$picture3 = uniqid() . "." . $request->file_path3->extension(); $request->file_path3->move(public_path('pictures'), $picture3);}

        $ads->title = $request->title;
        $ads->category_name = $request->category_name;
        $ads->content = $request->content;
        $ads->location = $request->location;
        $ads->price = $request->price;
        $ads->file_path1 = $picture1;
        $ads->file_path2 = $picture2;
        $ads->file_path3 = $picture3;

        $ads->save();

        return redirect()->route('update')->with('status', 'Registered data');
    }

 
    public function destroy($id)
    {
        $ads = Ads::find($id);
        $ads->delete();
        if($ads->delete()){
            return redirect()->route('see_ads')->with ('success', 'Ad Deleted !');
        }
        
    }
}

