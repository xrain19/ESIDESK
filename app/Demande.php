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
 * @property int $id
 * @property string $title
 * @property string $descriptions
 * @property int $urgency
 * @property int $closed
 * @property string $desireddate
 * @property string $processingdate
 * @property int $processorid
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereDescriptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereDesireddate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereProcessingdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereProcessorid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereUrgency($value)
 * @property string $desired_date
 * @property string $processing_date
 * @property int $processor_id
 * @property int $user_id
 * @property int $equipe_id
 * @property int $statut_id
 * @property int $categorie_id
 * @property-read \App\Categorie $Categorie
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereCategorieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereDesiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereEquipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereProcessingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereProcessorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereStatutId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Demande whereUserId($value)
 */
class Demande extends Model
{
    protected $fillable = [
        'descriptions', 'urgency', 'closed', 'desired_date', 'status', 'processor_id', 'processing_date', 'title'
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
        return $this->belongsTo('App\Statut');
    }

    public function Categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
}
