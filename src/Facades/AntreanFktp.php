<?php

namespace LaravelBpjsBridging\Facades;

use Illuminate\Support\Facades\Facade;
use BpjsBridging\AntreanFktp\RequestObject\BatalRequest;
use BpjsBridging\AntreanFktp\RequestObject\StatusRequest;
use BpjsBridging\AntreanFktp\RequestObject\TambahRequest;

/**
 * Apotek Bpjs
 *
 * @package LaravelBpjsBridging\Facades
 *
 * @method static object poli(Carbon $tangal = null)
 * @method static object dokter(string $kdPoli, Carbon $tangal = null)
 * @method static object tambahAntrean(TambahRequest $request)
 * @method static object updateAntrean(StatusRequest $request)
 * @method static object batalAntrean(BatalRequest $request)
 */
final class AntreanFktp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bpjs-bridging.antrean-fktp';
    }
}
