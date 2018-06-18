<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Equipe
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Categorie[] $Categorie
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $User
 * @mixin \Eloquent
 */
class Equipe extends Model
{
    protected $fillable = [
        'Name', 'managerid'
    ];

    public function User()
    {
        return $this->hasMany('App\User');
    }

    public function Categorie()
    {
        return $this->hasMany('App\Categorie');
    }
}

