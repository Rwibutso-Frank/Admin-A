<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutusController extends Controller
{
    public function index(){
        $aboutus = About::all();
        return view('admin.aboutus')->with('aboutus',$aboutus);
        }

        public function store(Request $request){
            $aboutus = new About;
            $aboutus->title = $request->input('title');
            $aboutus->sub_title = $request->input('sub_title');
            $aboutus->description = $request->input('description');
            $aboutus->save();

            return redirect('/about-us')->with('status','About us created');
        
        }
        public function edit(Request $request, $id)
        {
            $edit = About::findOrFail($id);
            return view('admin.edit-about')->with('edit',$edit);

        }
}
        