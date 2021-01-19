<?php

namespace App\Observers;

use App\Models\Sosialisasi;

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
        //
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
