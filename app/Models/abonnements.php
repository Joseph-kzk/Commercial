<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class abonnements extends Model
{
    use HasFactory, Notifiable;

    protected $primaryKey = "idabonnement";

    public static function countPDF()
    {
        return abonnements::where('nature','PDF')->count();
    }

    public static function counttabloid()
    {
        return abonnements::where('nature','Tabloïd')->count();
    }

    public static function sendAlertNotification(){
        $notiabonnements = abonnements::select('entreprise','personne','datefin')->where('datefin','=>',date('m-d-Y'))->get();
        if ($notiabonnements){
            Mail::to("ecomatin@yahoo.fr")->send(new abonnementsMail($notiabonnements));
        }
    }

    public static function notifications(){
        return self::query()->select(['entreprise','personne','datefin'])->where('datefin','=>',date('m-d-Y'))->get();
    }

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

    public  function endDatedNotification() {
        return $this->hasMany(EndDatesNotificationsSent::class,'last_item_id','idabonnement')
            ->where('type','abonnement');
    }
}
