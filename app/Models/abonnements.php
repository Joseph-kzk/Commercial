<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonnements extends Model
{
    use HasFactory;

    protected $primaryKey = "idabonnement";

    protected $fillable = [
       
        'idabonnement',
        'entreprise',
        'personne',
        'contact',
        'email',
        'nature',
        'etat',
        'montant',
        'statut',
        'observation',
        'datedebut',
        'datefin',
        'created_at',
        'updated_at'
    ];

    protected $table = 'abonnements';
}
