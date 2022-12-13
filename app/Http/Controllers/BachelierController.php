<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bachelier;
class BachelierController extends Controller
{
    //

    public function index()
    {
        //
        $bacheliers = Bachelier::orderBy('created_at', 'desc');
        $bacheliers = $bacheliers->paginate(15);
        return view("bacheliers.index", compact("bacheliers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view("bacheliers.register");
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $bachelier = new Bachelier;
        $bachelier->nom = $request->nom;
        $bachelier->prenom = $request->prenom;
        $bachelier->user_id = auth()->user()->id;
        $bachelier->filiere = $request->filiere;
        $bachelier->dateNaiss = $request->dateNaiss;
        $bachelier->nomRepresentant = $request->nomRepresentant;
        $bachelier->adresse = $request->adresse;
        $bachelier->telephone = $request->telephone;
        $bachelier->save();
        return redirect()->route('bacheliers.index')->with('info', 'Le bachelier a bien été enregistré');

    }



    
}
