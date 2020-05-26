<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered()
    {

        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function editUser(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.edit')->with('users',$users);

    }
    public function updateUser(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->name = $request->input('name');
        $users->user_type = $request->input('user_type');
        $users->update();

        return redirect('/user-register')->with('status','Information of  has updated');

    }
    public function deleteUser(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/user-register')->with('status','user has been deleted successful');
    }
}
