<?php

namespace LaravelBpjsBridging\Providers;

use Illuminate\Support\ServiceProvider;
use BpjsBridging\Antrean\Bridging as Antrean;
use BpjsBridging\Apotek\Bridging as Apotek;
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

        $this->mergeConfigFrom(__DIR__.'/../config/bpjs-bridging.php', 'bpjs-bridging');
    }
}
