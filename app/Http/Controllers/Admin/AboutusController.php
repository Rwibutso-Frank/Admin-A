<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutusController extends Controller
{
    public function indexAbout(){
        $aboutus = About::all();
        return view('admin.aboutus')->with('aboutus',$aboutus);
        }

    public function storeAbout(Request $request){
            $aboutus = new About;
            $aboutus->title = $request->input('title');
            $aboutus->sub_title = $request->input('sub_title');
            $aboutus->description = $request->input('description');
            $aboutus->save();

            return redirect('/about-us')->with('status','About us created');
        
        }
    public function editAbout($id)
        {
            $edit = About::findOrFail($id);
             return view('admin.about-edit')->with('edit',$edit);

        }
    public function updateAbout(Request $request, $id)
        {
            $edit = About::findOrFail($id);
            $edit->title = $request->input('title');
            $edit->sub_title = $request->input('sub_title');
            $edit->description = $request->input('description');
            $edit->update();

            return redirect('/about-us')->with('status','About Updated');
        }
    public function deleteAbout($id)
    {
        $data = About::findOrFail($id);
        $data->delete();
        return redirect('/about-us')->with('status','About Deleted Successfully');

    }    
}
        