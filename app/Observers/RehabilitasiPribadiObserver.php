<?php

namespace App\Observers;

use App\Models\RehabilitasiPribadi;
use App\Models\Survey;
use App\Models\User;
use App\Notifications\NewRehabilitasiPribadi;
use Illuminate\Support\Str;

class RehabilitasiPribadiObserver
{
    /**
     * Handle the RehabilitasiPribadi "created" event.
     *
     * @param  \App\Models\RehabilitasiPribadi  $rehabilitasiPribadi
     * @return void
     */
    public function created(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
        $users = User::where('role', 'tu')->get();

        foreach ($users as $user) {
            $user->notify(new NewRehabilitasiPribadi($rehabilitasiPribadi));
        }

        $token = 'BNN/' . Str::random(5);

        $survey = new Survey();
        $survey->token = $token;
        $survey->status = 'available';
        $survey->save();

        session()->flash('token', $token);
    }

    /**
     * Handle the RehabilitasiPribadi "updated" event.
     *
     * @param  \App\Models\RehabilitasiPribadi  $rehabilitasiPribadi
     * @return void
     */
    public function updated(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
    }

    /**
     * Handle the RehabilitasiPribadi "deleted" event.
     *
     * @param  \App\Models\RehabilitasiPribadi  $rehabilitasiPribadi
     * @return void
     */
    public function deleted(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
    }

    /**
     * Handle the RehabilitasiPribadi "restored" event.
     *
     * @param  \App\Models\RehabilitasiPribadi  $rehabilitasiPribadi
     * @return void
     */
    public function restored(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
    }

    /**
     * Handle the RehabilitasiPribadi "force deleted" event.
     *
     * @param  \App\Models\RehabilitasiPribadi  $rehabilitasiPribadi
     * @return void
     */
    public function forceDeleted(RehabilitasiPribadi $rehabilitasiPribadi)
    {
        //
    }
}
