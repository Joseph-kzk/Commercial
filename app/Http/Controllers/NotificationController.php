<?php

namespace App\Http\Controllers;
use App\Models\abonnements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function list(){
        $notiabonnements = abonnements::select('personne','entreprise','datefin')->where('datefin','=>',date('m-d-Y'))->get();
 
        if ($notiabonnements){
            Mail::to("ecomatin@yahoo.fr")->send(new abonnementsMail($notiabonnements));
        }
        return view('resources.notification.index',compact('notiabonnements'));
 
     }
}
