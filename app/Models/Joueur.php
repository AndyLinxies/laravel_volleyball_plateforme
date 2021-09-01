<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    public function roles (){
        //belongsTo
        return $this->belongsTo('App\Models\Role','roles_id','id');
    }
    public function photos (){
        //belongsTo
        return $this->belongsTo('App\Models\Photo','photos_id','id');
    }
    public function equipes (){
        //belongsTo
        return $this->belongsTo('App\Models\Equipe','equipes_id','id');
    }
}
