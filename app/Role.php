<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Role
 *
 * @property-read \App\User $User
 * @mixin \Eloquent
 */
class Role extends Model
{
    protected $fillable = [
        'Name',
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
