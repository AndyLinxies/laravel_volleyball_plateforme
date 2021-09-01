<?php

namespace App\Http\Controllers;

use App\Models\allJoueur;
use App\Models\Joueur;
use Illuminate\Http\Request;

class AllJoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs=Joueur::all();
        return view('partials.front.allJoueurs',compact('joueurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\allJoueur  $allJoueur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=Joueur::find($id);
        return view('partials.front.allJoueursShow',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\allJoueur  $allJoueur
     * @return \Illuminate\Http\Response
     */
    public function edit(allJoueur $allJoueur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\allJoueur  $allJoueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, allJoueur $allJoueur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\allJoueur  $allJoueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(allJoueur $allJoueur)
    {
        //
    }
}
