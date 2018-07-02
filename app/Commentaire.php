<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Commentaire
 *
 * @property int $id
 * @property string $commentaire
 * @property int $user_id
 * @property int $demande_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Demande $Demande
 * @property-read \App\User $User
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Commentaire whereCommentaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Commentaire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Commentaire whereDemandeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Commentaire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Commentaire whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Commentaire whereUserId($value)
 * @mixin \Eloquent
 */
class Commentaire extends Model
{
    protected $fillable = [
        'commentaire', 'demande_id','user_id'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Demande()
    {
        return $this->belongsTo('App\Demande');
    }
}
