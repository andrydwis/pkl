<?php

namespace App\Observers;

use App\Models\Sosialisasi;
use App\Models\Survey;
use App\Models\User;
use App\Notifications\NewSosialisasi;
use Illuminate\Support\Str;

class SosialisasiObserver
{
    /**
     * Handle the Sosialisasi "created" event.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return void
     */
    public function created(Sosialisasi $sosialisasi)
    {
        $users = User::where('role', 'tu')->get();

        foreach ($users as $user) {
            $user->notify(new NewSosialisasi($sosialisasi));
        }

        $token = 'BNN/' . Str::random(5);

        $survey = new Survey();
        $survey->token = $token;
        $survey->status = 'available';
        $survey->save();

        session()->flash('token', $token);
    }

    /**
     * Handle the Sosialisasi "updated" event.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return void
     */
    public function updated(Sosialisasi $sosialisasi)
    {
        //
    }

    /**
     * Handle the Sosialisasi "deleted" event.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return void
     */
    public function deleted(Sosialisasi $sosialisasi)
    {
        //
    }

    /**
     * Handle the Sosialisasi "restored" event.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return void
     */
    public function restored(Sosialisasi $sosialisasi)
    {
        //
    }

    /**
     * Handle the Sosialisasi "force deleted" event.
     *
     * @param  \App\Models\Sosialisasi  $sosialisasi
     * @return void
     */
    public function forceDeleted(Sosialisasi $sosialisasi)
    {
        //
    }
}
