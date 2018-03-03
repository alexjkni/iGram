<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function destroy() {
    auth()->logout();
    return view('user.logout');
  }

  public function create() {
    return view('user.login');
  }

  public function store() {
    if(auth()->attempt(request(['username', 'password'])) == false) {
      return back()->withErrors([
        'message' => 'The Username or Password is incorrect, please try again!'
      ]);
    }

    return redirect()->to('/');
  }
}
