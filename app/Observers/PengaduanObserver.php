<?php

namespace App\Observers;

use App\Models\Pengaduan;
use App\Models\Survey;
use App\Models\User;
use App\Notifications\NewPengaduan;
use Illuminate\Support\Str;

class PengaduanObserver
{
    /**
     * Handle the Pengaduan "created" event.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return void
     */
    public function created(Pengaduan $pengaduan)
    {
        //
        $users = User::whereIn('role', ['tu'])->get();

        foreach ($users as $user) {
            $user->notify(new NewPengaduan($pengaduan));
        }

        $token = 'BNN-' . Str::random(5);

        $survey = new Survey();
        $survey->token = $token;
        $survey->status = 'available';
        $survey->save();

        session()->flash('token', $token);
    }

    /**
     * Handle the Pengaduan "updated" event.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return void
     */
    public function updated(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Handle the Pengaduan "deleted" event.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return void
     */
    public function deleted(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Handle the Pengaduan "restored" event.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return void
     */
    public function restored(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Handle the Pengaduan "force deleted" event.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return void
     */
    public function forceDeleted(Pengaduan $pengaduan)
    {
        //
    }
}
