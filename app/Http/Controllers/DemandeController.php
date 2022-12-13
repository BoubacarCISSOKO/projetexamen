<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Demande;
class DemandeController extends Controller
{
    //
    //

    public function index()
    {
        //
        $demandes = Demande::orderBy('created_at', 'desc');
        $demandes = $demandes->paginate(15);
        return view("demandes.index", compact("demandes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view("demandes.create");
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
        $demande = new Demande;
        $demande->nom = $request->nom;
        $demande->matricule = $request->matricule;
        $demande->user_id = auth()->user()->id;
        $demande->service = $request->service;
        $demande->departement = $request->departement;
        $demande->dateDebut = $request->dateDebut;
        $demande->dateFin = $request->dateFin;
        $demande->save();
        return redirect()->route('demande.index')->with('info', 'Le demande a bien été enregistré');

    }


}
