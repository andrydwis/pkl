<?php

namespace App\Providers;

use App\Models\Pengaduan;
use App\Models\RehabilitasiInstansi;
use App\Models\RehabilitasiPribadi;
use App\Models\Skhpn;
use App\Models\Sosialisasi;
use App\Models\TesUrineInstansi;
use App\Observers\PengaduanObserver;
use App\Observers\RehabilitasiInstansiObserver;
use App\Observers\RehabilitasiPribadiObserver;
use App\Observers\SkhpnObserver;
use App\Observers\SosialisasiObserver;
use App\Observers\TesUrineInstansiObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
        Pengaduan::observe(PengaduanObserver::class);
        RehabilitasiInstansi::observe(RehabilitasiInstansiObserver::class);
        RehabilitasiPribadi::observe(RehabilitasiPribadiObserver::class);
        Skhpn::observe(SkhpnObserver::class);
        Sosialisasi::observe(SosialisasiObserver::class);
        TesUrineInstansi::observe(TesUrineInstansiObserver::class);
    }
}
