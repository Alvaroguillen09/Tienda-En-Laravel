<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class AdminUserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - User - Online Store";
        $viewData["users"] = User::all();
        return view('admin.users.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        User::validate($request);

        $newUser = new User();
        $newUser->setName($request->input('name'));
        $newUser->setEmail($request->input('email'));
        $newUser->setPassword($request->input('password'));
        $newUser->setBalance($request->input('balance'));
        $newUser->save();

        return back();
    }

    public function delete($id)
    {
        User::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit User - Online Store";
        $viewData["user"] = User::findOrFail($id);
        return view('admin.users.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        User::validate($request);

        $user = User::findOrFail($id);
        $user->setName($request->input('name'));
        $user->setEmail($request->input('email'));
        $user->setPassword($request->input('password'));
        $user->setBalance($request->input('balance'));
        $user->save();
        return redirect()->route('admin.users.index');
    }
}
