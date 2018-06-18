<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Demande
 *
 * @property-read \App\Equipe $Equipe
 * @property-read \App\Statut $Statut
 * @property-read \App\User $User
 * @mixin \Eloquent
 */
class Demande extends Model
{
    protected $fillable = [
        'descriptions', 'urgency', 'closed', 'desireddate', 'status', 'processorid', 'processingdate', 'title'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Equipe()
    {
        return $this->belongsTo('App\Equipe');
    }

    public function Statut()
    {
        return $this->hasOne('App\Statut');
    }
}
