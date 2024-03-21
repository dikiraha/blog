<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $total_articles = Article::count();
        $total_users = User::count();

        return view('admin.pages.home', compact('total_articles', 'total_users'));
    }
}
