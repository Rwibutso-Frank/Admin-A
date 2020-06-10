<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
    	if($request->isMethod('post')){

    		$data = $request->all();
    		// echo "<pre>";print_r($data); die;
    		$category = new Category;
    		$category->name = $data['category_name'];
    		$category->description = $data['description'];
    		$category->url = $data['url'];
    		$category->save();


    	}
        return view('admin.categories.add_category')->with('status','Category created successf');


	}
	
	public function viewCategories(){
        
        $categories = Category::get();
        $categories = json_decode(json_encode($categories));
         echo "<pre>"; print_r($categories); die;
         return view('admin.categories.view_category')->with(compact('categories'));
    }
}
