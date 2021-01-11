<?php

namespace App\Observers;

use App\Models\Skhpn;
use App\Models\User;
use App\Notifications\NewSkhpn;

class SkhpnObserver
{
    /**
     * Handle the Skhpn "created" event.
     *
     * @param  \App\Models\Skhpn  $skhpn
     * @return void
     */
    public function created(Skhpn $skhpn)
    {
        //
        $users = User::where('role', 'tu')->get();

        foreach($users as $user){
            $user->notify(new NewSkhpn($skhpn));
        }
    }

    /**
     * Handle the Skhpn "updated" event.
     *
     * @param  \App\Models\Skhpn  $skhpn
     * @return void
     */
    public function updated(Skhpn $skhpn)
    {
        //
    }

    /**
     * Handle the Skhpn "deleted" event.
     *
     * @param  \App\Models\Skhpn  $skhpn
     * @return void
     */
    public function deleted(Skhpn $skhpn)
    {
        //
    }

    /**
     * Handle the Skhpn "restored" event.
     *
     * @param  \App\Models\Skhpn  $skhpn
     * @return void
     */
    public function restored(Skhpn $skhpn)
    {
        //
    }

    /**
     * Handle the Skhpn "force deleted" event.
     *
     * @param  \App\Models\Skhpn  $skhpn
     * @return void
     */
    public function forceDeleted(Skhpn $skhpn)
    {
        //
    }
}