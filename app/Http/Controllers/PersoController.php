<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnage;
use App\Sex;
use App\Film;

class PersoController extends Controller
{
        public function create()  // Pour afficher la page "create"
        {
          return view('/create');
        }

      public function insertOne(Request $request) // Pour inserer les éléments (les personnages)
        {
          $personnage = new Personnage;
          $personnage->nom = $request->nom;
          $personnage->role = $request->role;
          $personnage->age = $request->age;
          $personnage->save();
          $personnage->films()->attach($request->film);
          return redirect('/');
      }
      public function deleteOne(Request $request, $id) // Pour supprimer les élements de la base de données
        {
        $personnage = Personnage::find($id);
        $personnage->delete();
        return redirect('/');
        }

      public function updateOne(Request $request, $id) // Pour récuperer les élements dans les formulaires pour effectuer "updateOneAction"
       {
        $personnage = Personnage::find($id);
        $filmsAll = Film::all();
        $films = [];
        foreach ($filmsAll as $value) {
          $films[$value->id] = $value->film;
       }
        return view('update', ['films' => $films, 'personnage' => $personnage]);
       }

      public function updateOneAction(Request $request) // Pour modifier les élements déjà inscrit dans la base de données
      {
        $personnage = Personnage::find($request->id);
        $personnage->nom = $request->nom;
        $personnage->role = $request->role;
        $personnage->age = $request->age;
        $personnage->save();
        $personnage->films()->detach();
        $personnage->films()->attach($request->film);
        return redirect('/');
      }


}
