<?php

namespace App\Http\Controllers;
use App\Models\abonnements;
use App\Models\EndDatesNotificationsSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class NotificationController extends Controller
{
    public function list(){
        $notiabonnements = abonnements::select('personne','entreprise','datefin')->where('datefin','=>',date('m-d-Y'))->get();

        if ($notiabonnements){
            Mail::to("ecomatin@yahoo.fr")->send(new abonnementsMail($notiabonnements));
        }
        return view('resources.notification.index',compact('notiabonnements'));

     }

     public function readAbonnement(int $id) {
        EndDatesNotificationsSent::query()->where('id',$id)->update([
            'read_at' => now()
        ]);
         return redirect()->route('abonnements.index');


     }

    public function readPublicite(int $id) {
        EndDatesNotificationsSent::query()->where('id',$id)->update([
            'read_at' => now()
        ]);
        return redirect()->route('publicites.index');

    }
}
