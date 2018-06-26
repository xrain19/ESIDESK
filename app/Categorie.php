<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Categorie
 *
 * @property int $id
 * @property string $descriptions
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $equipe_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Demande[] $Demande
 * @property-read \App\Equipe $Equipe
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereDescriptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereEquipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Categorie extends Model
{
    protected $fillable = [
        'descriptions', 'name', 'equipe_id'
    ];

    public function Equipe()
    {
        return $this->belongsTo('App\Equipe');
    }

    public function Demande()
    {
        return $this->hasMany('App\Demande');
    }
}
