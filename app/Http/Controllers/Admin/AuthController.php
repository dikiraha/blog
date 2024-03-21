<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;


class AuthController extends Controller
{
    public function login()
  {
    if (auth()->user()) {
      return redirect()->route('admin.home');
    }

    return view('admin.auth.login');
  }

  public function authenticate(Request $request)
  {
    $request->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
      $user = Auth::user();

      return redirect()->route('admin.home');
    } else {
      $message = 'Email atau Password salah';
    }

    return redirect()
      ->back()
      ->withErrors(['unauthenticate' => $message]);
  }

  public function logout()
  {
    Auth::logout();

    return redirect()->route('admin.auth.login');
  }
}
