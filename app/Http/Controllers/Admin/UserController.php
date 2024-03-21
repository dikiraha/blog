<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Auth;
use DataTables;

class UserController extends Controller
{
    public function list()
    {
        $users = User::orderBy('name', 'ASC')->get();

        return view('admin.pages.user.list', compact('users'));
    }

    public function list_ajax(Request $request)
    {
        $data = User::orderBy('name', 'ASC');

        return DataTables::eloquent($data)->make(true);
    }

    public function create()
    {
        return view('admin.pages.user.create');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.user.list')->with('success', 'Create Successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.pages.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.user.list')->with('success', 'Edit Successfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        if (Auth::user()) {
            $user->delete();
            
            return "Delete Successfully";
        }

        return "Error";
    }
}
