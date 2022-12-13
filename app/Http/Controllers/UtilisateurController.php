<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
class UtilisateurController extends Controller
{
    //
    public function index()
    {
        //
        $utilisateurs = Utilisateur::orderBy('created_at', 'desc');
        $utilisateurs = $utilisateurs->paginate(15);
        return view("utilisateurs.index", compact("utilisateurs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view("utilisateurs.inscription");
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
        $utilisateur = new Utilisateur;
        $utilisateur->nom = $request->nom;
        $utilisateur->numeroCarteEtudiant = $request->numeroCarteEtudiant;
        $utilisateur->password = Hash::make($utilisateur['password']);
        $utilisateur->password_confirmation = Hash::make($utilisateur['password_confirmation']);
        $utilisateur->save();
        return redirect()->route('/')->with('info', 'L\'utilisateur a bien été enregistré');

    }


    public function createConnexion()
    {
      
        return view("utilisateurs.connexion");
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeConnexion($numeroCarteEtudiant)
    {
        //
        $selectuser=Utilisateur::select('numeroCarteEtudiant')->where('numeroCarteEtudiant', $numeroCarteEtudiant)->get(); 
        if(!$selectuser){
            return redirect()->route('/')->with('info', 'L\'utilisateur a bien été connecté');
        }
       

    }


    
}
