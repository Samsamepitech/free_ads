<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all();
      
        return view('/', compact('categories')); 
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::where('id', '1'); 
        return view('categories', compact('categories'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = new Category();

        $request->validate([
            'category_ref' => ['required', 'integer'],
            'name' => ['required, string', 'unique', 'max:20'],
            'parent_id' => ['required', 'integer', 'unique:column'], 
            'parent_name' => ['required', 'unique', 'string', 'max:20']

        ]);

            $category = Category::create([

            'category_ref' => $request->category_ref,
            'name' => $request->name,
            'parent_id' => $request->parent_id, 
            'parent_name' => $request->parent_name,

            ]);
    
    

        return view('cat_create', compact('categories'));

    }


    public function choose(Request $request){

        $category = $request->get('category_name');
        
        return redirect()->route('categories');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCategories($id)
    {
        // 
        $category = DB::category('name')->get;

        foreach ($category as $categories)
            { $categories =array('category' => 'name');}

        return view('/ads_create', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
            $post = Category::find($id);
            $category = Category::all();
            $select = array();
            foreach ($category as $categories) {
                $select[$categories->id] = $categories->name;
            }
            return redirect('ads.edit')->withPost($post)->withCategories($select);
        }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
