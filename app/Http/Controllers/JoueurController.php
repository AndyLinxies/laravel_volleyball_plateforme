<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::all();
        return view('partials.back.joueur.readJoueur', compact('joueurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $joueurs=Joueur::all();
        $photos=Photo::all();
        $roles=Role::all();
        $equipes=Equipe::all();
        return view('partials.back.joueur.createJoueur',compact('joueurs','roles','equipes','photos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "nom"=>"required|min:2|max:30",
            "prenom"=>"required|min:2|max:30",
            "age"=>"required|",
            "email"=>"required|email",
            "age"=>"required",
            "genre"=>"required",
            "phone"=>"required|numeric",
            "src"=>"required|image",
            "paysOrigine"=>"required|min:2|max:30",

        ]);
        // dd($request->all());
        $store = new Joueur;
        $roles=new Role; 
        $equipes=new Equipe;
        $photos=new Photo;
        //
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->email = $request->email;
        $store->phone = $request->phone;
        //genre
        $store->genre = $request->genre;
        //paysOrigine
        $store->paysOrigine = $request->paysOrigine;
        //Pour la photo
        $request->file('src')->storePublicly('img/', 'public');
        
        //On accede directement a la table photo sans passer par la table Joueur
        $photos->src = $request->file('src')->hashName();
        $photos->save();
        $store->roles_id = $request->roles_id;
        $store->equipes_id = $request->equipes_id;
        $store->photos_id = $photos->id;
        $store->save();
        return redirect('/dashboard/readJoueurs')->with('success', 'Le joueur a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Joueur::find($id);
        $photos=Photo::all();
        $roles=Role::all();
        $equipes=Equipe::all();
        return view('partials.back.joueur.editJoueur',compact('edit','photos','roles','equipes'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            "nom"=>"required|min:2|max:30",
            "prenom"=>"required|min:2|max:30",
            "age"=>"required|numeric",
            "email"=>"required|email",
            "age"=>"required",
            "genre"=>"required",
            "phone"=>"required|numeric",
            "src"=>"required|image",
            "paysOrigine"=>"required|min:2|max:30",

        ]);
        // dd($request->all());
        $update = Joueur::find($id);
        
        $photos=Photo::find($id);
        //
        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->age = $request->age;
        $update->email = $request->email;
        $update->phone = $request->phone;
        //genre
        $update->genre = $request->genre;
        //paysOrigine
        $update->paysOrigine = $request->paysOrigine;
        //Pour la photo
        //supression de l'ancienne photo
        Storage::disk('public')->delete('img/'.$photos->src);
        //AJOUT
        $request->file('src')->storePublicly('img/', 'public');
        
        //On accede directement a la table photo sans passer par la table Joueur
        $photos->src = $request->file('src')->hashName();
        $photos->save();
        $update->roles_id = $request->roles_id;
        $update->equipes_id = $request->equipes_id;
        $update->photos_id = $photos->id;
        $update->save();
        return redirect('/dashboard/readJoueurs')->with('success', 'Le joueur a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy= Joueur::find($id);
        Storage::delete('public/img/'.$destroy->photos->src);
        $destroy->delete();
        Photo::find($id)->delete();
        return redirect()->back()->with('success', 'Le joueur a été supprimé');
    }
}
