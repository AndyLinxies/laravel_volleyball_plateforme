<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index function
    public function index()
    {
        
            $equipes = Equipe::all();
            $joueurs = Joueur::all();
    
        //joueurs sans equipes random
            $noEquipe = $joueurs->where('equipes_id', '==', null);
            if (count($noEquipe) > 4) {
                $noEquipeRandom = $noEquipe->random(4);
            } else {
                $noEquipeRandom = $noEquipe;
            }
    
        // joueurs avec equipes
            $avecEquipe = $joueurs->where('equipes_id', '!=', null);
            if (count($avecEquipe) > 4) {
                $avecEquipeRandom = $avecEquipe->random(4);
            } else {
                $avecEquipeRandom = $avecEquipe;
            }
    
        // equipe europe
            $europeEquipe = $equipes->where('continents_id', '=', 3);
    
        // equipe non europe
            $noEuropeEquipe = $equipes->where('continents_id', '!=', 3);
    
        // joueur femme avec equipe random
            $femme = $joueurs->where('genre', '!=', 'Homme'||'male');
            $joueurFemme = $femme->where('equipes_id', '!=', null); //random 1
    
        // joueur homme avec equipe
            $joueurHomme = $joueurs->where('genre', '=', 'Homme'||'male'); //random 5
            return view('welcome', compact('equipes','joueurs', 'noEquipeRandom', 'avecEquipeRandom', 'europeEquipe', 'noEuropeEquipe', 'joueurFemme', 'joueurHomme'));
        }
    
}
