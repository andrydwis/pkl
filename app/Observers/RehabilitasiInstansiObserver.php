<?php

namespace App\Observers;

use App\Models\RehabilitasiInstansi;
use App\Models\Survey;
use App\Models\User;
use App\Notifications\NewRehabilitasiInstansi;
use Illuminate\Support\Str;

class RehabilitasiInstansiObserver
{
    /**
     * Handle the RehabilitasiInstansi "created" event.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return void
     */
    public function created(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        $users = User::where('role', 'tu')->get();

        foreach ($users as $user) {
            $user->notify(new NewRehabilitasiInstansi($rehabilitasiInstansi));
        }

        $token = 'BNN-' . Str::random(5);

        $survey = new Survey();
        $survey->token = $token;
        $survey->status = 'available';
        $survey->save();

        session()->flash('token', $token);
    }

    /**
     * Handle the RehabilitasiInstansi "updated" event.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return void
     */
    public function updated(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        //
    }

    /**
     * Handle the RehabilitasiInstansi "deleted" event.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return void
     */
    public function deleted(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        //
    }

    /**
     * Handle the RehabilitasiInstansi "restored" event.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return void
     */
    public function restored(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        //
    }

    /**
     * Handle the RehabilitasiInstansi "force deleted" event.
     *
     * @param  \App\Models\RehabilitasiInstansi  $rehabilitasiInstansi
     * @return void
     */
    public function forceDeleted(RehabilitasiInstansi $rehabilitasiInstansi)
    {
        //
    }
}
