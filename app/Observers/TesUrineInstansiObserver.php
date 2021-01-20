<?php

namespace App\Observers;

use App\Models\Survey;
use App\Models\TesUrineInstansi;
use App\Models\User;
use App\Notifications\NewRehabilitasiInstansi;
use App\Notifications\NewTesUrineInstansi;
use Illuminate\Support\Str;

class TesUrineInstansiObserver
{
    /**
     * Handle the TesUrineInstansi "created" event.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return void
     */
    public function created(TesUrineInstansi $tesUrineInstansi)
    {
        $users = User::where('role', 'tu')->get();

        foreach ($users as $user) {
            $user->notify(new NewTesUrineInstansi($tesUrineInstansi));
        }

        $token = 'BNN-' . Str::random(5);

        $survey = new Survey();
        $survey->token = $token;
        $survey->status = 'available';
        $survey->save();

        session()->flash('token', $token);
    }

    /**
     * Handle the TesUrineInstansi "updated" event.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return void
     */
    public function updated(TesUrineInstansi $tesUrineInstansi)
    {
        //
    }

    /**
     * Handle the TesUrineInstansi "deleted" event.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return void
     */
    public function deleted(TesUrineInstansi $tesUrineInstansi)
    {
        //
    }

    /**
     * Handle the TesUrineInstansi "restored" event.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return void
     */
    public function restored(TesUrineInstansi $tesUrineInstansi)
    {
        //
    }

    /**
     * Handle the TesUrineInstansi "force deleted" event.
     *
     * @param  \App\Models\TesUrineInstansi  $tesUrineInstansi
     * @return void
     */
    public function forceDeleted(TesUrineInstansi $tesUrineInstansi)
    {
        //
    }
}
