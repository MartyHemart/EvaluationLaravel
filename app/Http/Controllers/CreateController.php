<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sex;
use App\Film;

class CreateController extends Controller
{
  public function index()
  {
    $films = Film::all();
    return view('create', ['films' => $films]);
  }
}
