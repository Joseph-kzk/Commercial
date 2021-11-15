<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndDatesNotificationsSent extends Model
{
    use HasFactory;

    protected $table = "end_dates_notifications_sent";

    protected $fillable = [
        "type",
        "last_item_id",
        "last_item_datedebut",
        "read_at",
    ];

    public function abonement() {
        return $this->belongsTo(abonnements::class,'idabonnement','last_item_id')
            ;
    }

    public function publicite() {
        return $this->belongsTo(abonnements::class,'idpublicite','last_item_id')
           ;
    }

    public function isPublicite() {
        return $this->type == "publicite";
    }

    public function isAbonnement() {
        return $this->type == "abonnement";
    }
}
