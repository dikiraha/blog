<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Portal;
use App\Models\Article;

class BlogController extends Controller
{
    public function home()
  {
    return view('website.blog.home');
  }

  public function profile()
  {
    return view('website.blog.profile');
  }

  public function portal()
  {
    $portals = Portal::select('portals.*', 'users.name as created_name')
                        ->join('users', 'portals.created_by', 'users.id')
                        ->orderBy('created_at', 'DESC')
                        ->get();

    return view('website.blog.portal', compact('portals'));
  }

  public function portal_article_list($uuid)
  {
    $portal = Portal::where('uuid', $uuid)->first();

    $articles = Article::where('portal_id', $portal->id)->orderBy('created_at', 'ASC')->get();

    return view('website.blog.article', compact('portal', 'articles'));
  }
}
