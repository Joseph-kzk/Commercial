<?php

namespace App\Helpers;

use App\Models\abonnements;
use App\Models\EndDatesNotificationsSent;
use App\Models\publicites;
use App\Notifications\AbonnementHasExpiredNotification;
use App\Notifications\PubliciteHasExpiredNotification;
use Illuminate\Support\Facades\Notification;

class AppHelpers
{

    public static function getPubsEndedAlerts()
    {
        return publicites::query()->whereRaw('datedebut <  now()')
            ->select(['idpublicite', 'datedebut'])->get();
    }

    public static function getSubsEndedAlerts()
    {
        return abonnements::query()->whereRaw('datedebut <  now()')
            ->select(['idabonnement', 'datedebut'])->get();
    }

    public static function hasPubliciteEndedAlerts()
    {
        $pubs = self::getPubsEndedAlerts();
        if ($pubs->count() == 0) {
            return false;
        }
        $n = EndDatesNotificationsSent::query()
            ->where('last_item_id', $pubs->last()->idpublicite)
            ->where('type', 'publicite')
            ->count();
        return $n == 0;
    }

    public static function hasAbonnementEndedAlerts()
    {
        $subs = self::getSubsEndedAlerts();
        if ($subs->count() == 0) {
            return false;
        }
        $n = EndDatesNotificationsSent::query()
            ->where('last_item_id', $subs->last()->idabonnement)
            ->where('type', 'abonnement')
            ->count();
        return $n == 0;
    }

    public static function checkPublicitesNotificationsAndSend()
    {
        $pubs = self::getPubsEndedAlerts();
        if ($pubs->count() > 0) {
            $n = EndDatesNotificationsSent::query()
                ->where('last_item_id', $pubs->last()->idpublicite)
                ->where('type', 'publicite')
                ->count();
            if ($n == 0) {
                Notification::route('mail', 'direction@socitete.com')
                    ->notify(new PubliciteHasExpiredNotification($pubs));
                EndDatesNotificationsSent::query()
                    ->create([
                        'type' => 'publicite',
                        'last_item_id' => $pubs->last()->idpublicite,
                        'last_item_datedebut' => $pubs->last()->datedebut,
                    ]);
            }
        }
    }

    public static function checkAbonementsNotificationsAndSend()
    {
        $subs = self::getSubsEndedAlerts();
        if ($subs->count() > 0) {
            $n = EndDatesNotificationsSent::query()
                ->where('last_item_id', $subs->last()->idabonnement)
                ->where('type', 'abonnement')
                ->count();
            if ($n == 0) {
                Notification::route('mail', 'direction@socitete.com')
                    ->notify(new AbonnementHasExpiredNotification($subs));
                EndDatesNotificationsSent::query()
                    ->create([
                        'type' => 'abonnement',
                        'last_item_id' => $subs->last()->idabonnement,
                        'last_item_datedebut' => $subs->last()->datedebut,
                    ]);
            }
        }
    }

}
