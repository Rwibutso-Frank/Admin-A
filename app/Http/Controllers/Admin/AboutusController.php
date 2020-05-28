<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Models\About;
class AboutusController extends Controller
{
    public function index(){
        return view('admin.aboutus')->with('aboutus',$aboutus);
        }

        public function createAbout(Request $request){
            $aboutus = new Abouts;
            $aboutus->title = $request->input('title');
            $aboutus->sub_title = $request->input('sub_title');
            $aboutus->desciption = $request->input('description');

            $aboutus->save();
            return redirect('/about-us')->with('status','About us created');
        
        }
}
        