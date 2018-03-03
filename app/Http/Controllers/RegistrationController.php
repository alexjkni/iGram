<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\User;

class RegistrationController extends Controller
{
    public function create() {
      if (auth()->check()) {
        return view('registration.created');
      }
      return view('registration.create');
    }

    public function store() {

      $this->validate(request(), [
        'username' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required|min:6',
        'passwordConfirmation' => 'required|same:password'
      ]);

      $user = User::create(request(['username', 'email', 'password']));

      auth()->login($user);

      return view('registration.created');

    }
}
