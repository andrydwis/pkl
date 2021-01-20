<?php

namespace App\Observers;

use App\Models\Skhpn;
use App\Models\Survey;
use App\Models\User;
use App\Notifications\NewSkhpn;
use Illuminate\Support\Str;

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
        $users = User::whereIn('role', ['tu', 'rehabilitasi'])->get();

        foreach ($users as $user) {
            $user->notify(new NewSkhpn($skhpn));
        }

        $token = 'BNN-' . Str::random(5);

        $survey = new Survey();
        $survey->token = $token;
        $survey->status = 'available';
        $survey->save();

        session()->flash('token', $token);
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
