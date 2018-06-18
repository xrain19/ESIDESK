<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Categorie
 *
 * @property-read \App\Equipe $Equipe
 * @mixin \Eloquent
 */
class Categorie extends Model
{
    protected $fillable = [
        'descriptions', 'name'
    ];

    public function Equipe()
    {
        return $this->belongsTo('App\Equipe');
    }
}
