<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        return view('partials.back.equipe.readEquipe', compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::all();
        return view('partials.back.equipe.createEquipe',compact('continents'));
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
            "ville"=>"required|min:2|max:30",
            "pays"=>"required|min:2|max:20",

        ]);

        $equipe = new Equipe();
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->maxPlayer = 9;
        $equipe->continents_id= $request->continents_id;
        $equipe->save();
        return redirect('/dashboard/readEquipes')->with('success','Création réussie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Equipe::find($id);
        $continents = Continent::all();
        return view('partials.back.equipe.editEquipe',compact('edit','continents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            "nom"=>"required|min:2|max:30",
            "ville"=>"required|min:2|max:30",
            "pays"=>"required|min:2|max:20",
        ]);

        $update = Equipe::find($id);
        $update->nom = $request->nom;
        $update->ville = $request->ville;
        $update->pays = $request->pays;
        $update->maxPlayer = 9;
        $update->continents_id= $request->continents_id;
        $update->save();
        return redirect('/dashboard/readEquipes')->with('success', 'Modification réussie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=Equipe::find($id);
        $destroy->delete();
        return redirect()->back()->with('warning', 'Donnée supprimée!');
    }
}
