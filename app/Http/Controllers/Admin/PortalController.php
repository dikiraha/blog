<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Portal;

use Auth;
use DataTables;
use Ramsey\Uuid\Uuid;

class PortalController extends Controller
{
    public function list()
    {
        $portals = Portal::orderBy('title', 'ASC')->get();

        return view('admin.pages.portal.list', compact('portals'));
    }

    public function list_ajax(Request $request)
    {
        $data = Portal::select('portals.*', 'users.name as created_name')
                        ->join('users', 'portals.created_by', 'users.id')
                        ->orderBy('title', 'ASC');

        return DataTables::eloquent($data)->make(true);
    }

    public function create()
    {
        return view('admin.pages.portal.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('blog/photo'), $imageName);
        } else {
            $imageName = null;
        }
        
        $portal = Portal::create([
            'uuid' => Uuid::uuid4()->toString(),
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $imageName,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->route('admin.portal.list')->with('success', 'Create Successfully');
    }

    public function edit($id)
    {
        $portal = Portal::findOrFail($id);

        return view('admin.pages.portal.edit', compact('portal'));
    }

    public function update(Request $request, $id)
    {
        $portal = Portal::findOrFail($id);

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->storeAs('photos', $imageName);
        } else {
            $imageName = $portal->photo;
        }

        $portal->update([
            'uuid' => Uuid::uuid4()->toString(),
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $imageName,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->route('admin.portal.list')->with('success', 'Create Successfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $portal = Portal::find($id);
        if (Auth::user()) {
            $portal->delete();
            
            return "Delete Successfully";
        }

        return "Error";
    }
}
