<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicites extends Model
{
    use HasFactory;

    protected $primaryKey = "idpublicite";
    
    public static function countpub()
    {
        return publicites::all()->count();
    }

    protected $fillable = [
       
        'idpublicite',
        'entreprise',
        'intitule',
        'support',
        'contact',
        'montant',
        'etat',
        'paiement',
        'datedebut',
        'datefin',
        'created_at',
        'updated_at'
    ];

    protected $table = 'publicites';
}
