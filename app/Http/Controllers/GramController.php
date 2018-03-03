<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GramController extends Controller
{
    public function create() {
      return view('gram.create');
    }
}
