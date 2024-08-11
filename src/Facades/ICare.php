<?php

namespace LaravelBpjsBridging\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Apotek Bpjs
 *
 * @package LaravelBpjsBridging\Facades
 *
 * @method static object validate(bool $pcare, string $noKartu, string $kdDokter = null)
 */
final class ICare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bpjs-bridging.icare';
    }
}
