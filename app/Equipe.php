<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Equipe
 *
 * @property int $id
 * @property string $name
 * @property int|null $manager_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Categorie[] $Categorie
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Demande[] $Demande
 * @property-read \App\User $Manager
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $User
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereManagerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Equipe extends Model
{
    protected $fillable = [
        'name', 'manager_id','actived'
    ];

    public function User()
    {
        return $this->hasMany('App\User');
    }

    public function Categorie()
    {
        return $this->hasMany('App\Categorie');
    }

    public function Demande()
    {
        return $this->hasMany('App\Demande');
    }

    public function Manager()
    {
        return $this->hasOne('App\User');
    }
}

