<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Equipe
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Categorie[] $Categorie
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $User
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int|null $managerid
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereManagerid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Demande[] $Demande
 * @property int|null $manager_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Equipe whereManagerId($value)
 */
class Equipe extends Model
{
    protected $fillable = [
        'name', 'manager_id'
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
}

