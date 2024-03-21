<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Portal;
use App\Models\Article;

use Auth;
use DataTables;
use Ramsey\Uuid\Uuid;

class ArticleController extends Controller
{
    public function list_ajax(Request $request, $id)
    {
        $data = Article::select('articles.*', 'users.name as created_name')
                        ->join('users', 'articles.created_by', 'users.id')
                        ->where('portal_id', $id)
                        ->orderBy('title', 'ASC');

        return DataTables::eloquent($data)->make(true);
    }

    public function create($id)
    {
        $portal = Portal::findOrFail($id);

        return view('admin.pages.article.create', compact('portal'));
    }

    public function store(Request $request, $id)
    {
        $article = Article::create([
            'uuid' => Uuid::uuid4()->toString(),
            'portal_id' => $id,
            'title' => $request->title,
            'description' => $request->description,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->route('admin.portal.edit', ['id' => $id])->with('success', 'Create Successfully');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.pages.article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $article->update([
            'uuid' => Uuid::uuid4()->toString(),
            'title' => $request->title,
            'description' => $request->description,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->route('admin.portal.edit', ['id' => $article->portal_id])->with('success', 'Create Successfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $article = Article::find($id);
        if (Auth::user()) {
            $article->delete();
            
            return "Delete Successfully";
        }

        return "Error";
    }
}
