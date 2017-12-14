<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnage as Personnage;

class BaseController extends Controller
{
      public function index()
      {
        $personnages = Personnage::all();
        return view('accueil', ['personnages' => $personnages]);
      }
}
