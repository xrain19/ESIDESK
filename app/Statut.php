<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Statut
 *
 * @property-read \App\Demande $User
 * @mixin \Eloquent
 */
class Statut extends Model
{
    protected $fillable = [
        'Name',
    ];

    public function User()
    {
        return $this->belongsTo('App\Demande');
    }
}
