<?php



namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Category;



class AdsController extends Controller
{

    public function index()
    {
        $ads = DB::table('ads')
        ->select('ads.*')
        ->orderBy('ads.updated_at', 'desc')
        ->paginate(6);
         
         return view('welcome', compact('ads'));
        
    }

    public function search(Request $request)
    { 
    
        $search=$request->get('search');
        $ads = DB::table('ads')
        ->join('users','users.id','=', 'ads.user_id')
        ->select('ads.*','users.nickname')
        ->where('title', 'LIKE', "%$search%")
        ->orWhere('content','LIKE', "%$search%")
        ->orWhere('category_name','LIKE', "%$search%")
        ->orderBy('ads.updated_at', 'desc')
        ->get();

       
     
           return view('/search', compact('ads'));
        
    }


   

    
   

    public function find(Request $request)
    {

        
        $category = $request->get('category_name');
        $this->location = $request->get('location');
        //$this->price = ['min' => $request->get('priceMin'), 'max' => $request->get('priceMax')];

        $ads = Ads::where('category_name', 'LIKE', "%$category%")
            ->where(function ($query) {
                if (!empty($this->price['min']) && !empty($this->price['max'])) {
                    $query->whereBetween('price', [$this->price['min'], $this->price['max']]);
                } 
            })
            ->where(function ($query) {
                if (!empty($this->location)) {
                    $query->where('location','LIKE', "%$this->location%");
                } 
            })
            ->latest()->paginate(10);
        
        return view('/find', compact('ads'));
    }


    public function sort()
    {
        $ads = DB::table('ads')
        ->orderBy('price', 'desc')
        ->get();
        return view('ads.sort', compact('ads'));
    }

    public function unsort()
    {
        $ads = DB::table('ads')
        ->orderBy('price', 'asc')
        ->get();
        return view('ads.unsort', compact('ads'));
    }

  
 
   public function details($id)

  {
    $ads = Ads::where('id', '=', $id)->take(1)->get();
    return view('details', compact('ads'));

   
        
  }





    
  

    

}

