<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Statut
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Demande[] $User
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Statut whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Statut whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Statut whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Statut whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Statut extends Model
{
    protected $fillable = [
        'name',
    ];

    public function Demande()
    {
        return $this->hasMany('App\Demande');
    }
}
