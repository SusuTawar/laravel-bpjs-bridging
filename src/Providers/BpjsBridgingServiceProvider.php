<?php

namespace LaravelBpjsBridging\Providers;

use Illuminate\Support\ServiceProvider;
use BpjsBridging\Antrean\Bridging as Antrean;
use BpjsBridging\AntreanFktp\Bridging as AntreanFktp;
use BpjsBridging\Apotek\Bridging as Apotek;
use BpjsBridging\PCare\Bridging as PCare;
use BpjsBridging\ICare\Bridging as Icare;
use BpjsBridging\Config;

final class BpjsBridgingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/bpjs-bridging.php' => config_path('bpjs-bridging.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->bind('bpjs-bridging.antrean', function () {
            $config = new Config(
                config('bpjs-bridging.antrean.url'),
                config('bpjs-bridging.antrean.consumer_id'),
                config('bpjs-bridging.antrean.consumer_secret'),
                config('bpjs-bridging.antrean.user_key')
            );
            return new Antrean($config);
        });

        $this->app->bind('bpjs-bridging.apotek', function () {
            $config = new Config(
                config('bpjs-bridging.apotek.url'),
                config('bpjs-bridging.apotek.consumer_id'),
                config('bpjs-bridging.apotek.consumer_secret'),
                config('bpjs-bridging.apotek.user_key')
            );
            return new Apotek($config);
        });

        $this->app->bind('bpjs-bridging.pcare', function () {
            $config = new Config(
                config('bpjs-bridging.pcare.url'),
                config('bpjs-bridging.pcare.consumer_id'),
                config('bpjs-bridging.pcare.consumer_secret'),
                config('bpjs-bridging.pcare.user_key')
            );
            $config->setPcare(
                config('bpjs-bridging.pcare.username'),
                config('bpjs-bridging.pcare.password'),
                config('bpjs-bridging.pcare.kd_aplikasi'),
            );
            return new PCare($config);
        });

        $this->app->bind('bpjs-bridging.icare', function () {
            $config = new Config(
                config('bpjs-bridging.icare.url'),
                config('bpjs-bridging.icare.consumer_id'),
                config('bpjs-bridging.icare.consumer_secret'),
                config('bpjs-bridging.icare.user_key')
            );
            if (config('bpjs-bridging.icare.pcare')) {
                $config->setPcare(
                    config('bpjs-bridging.icare.username'),
                    config('bpjs-bridging.icare.password'),
                    config('bpjs-bridging.icare.kd_aplikasi'),
                );
            }
            return new Icare($config);
        });

        $this->app->bind('bpjs-bridging.antrean-fktp', function () {
            $config = new Config(
                config('bpjs-bridging.antreanFktp.url'),
                config('bpjs-bridging.antreanFktp.consumer_id'),
                config('bpjs-bridging.antreanFktp.consumer_secret'),
                config('bpjs-bridging.antreanFktp.user_key')
            );
            $config->setPcare(
                config('bpjs-bridging.antreanFktp.username'),
                config('bpjs-bridging.antreanFktp.password'),
                config('bpjs-bridging.antreanFktp.kd_aplikasi'),
            );
            return new AntreanFktp($config);
        });

        $this->mergeConfigFrom(__DIR__.'/../config/bpjs-bridging.php', 'bpjs-bridging');
    }
}
