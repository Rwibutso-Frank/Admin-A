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
            return redirect('/view-category')->with('status','Category created successful');

    	}
        return view('admin.categories.add_category');

    }

    public function viewCategories(){
        $categories = Category::get();
        $categories = json_decode(json_encode($categories));
  
         return view('admin.categories.view_category')->with(compact('categories'));
 
    }

    public function editCategory(Request $request, $id = null){

                echo "test"; die;
             $edit = Category::findOrFail($id);
            return view('admin.categories.edit_category');
            // ->with('edit', $edit);



    }
}
