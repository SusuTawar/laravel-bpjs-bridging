<?php

namespace LaravelBpjsBridging\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Apotek Bpjs
 *
 * @package LaravelBpjsBridging\Facades
 *
 * @method static object referensiDPHO()
 * @method static object referensiPoli($kdPoli)
 * @method static object referensiFasilitasKesehatan($jnsFaskes, $namaFaskes)
 * @method static object referensiSettingApotek($kdApotek)
 * @method static object referensiSpesialistik()
 * @method static object referensiObat($kdJnsObat, Carbon $tglResep, $filter)
 * @method static object insertNonRacikan(string $noSJP, string $noResep, string $kdObat, string $nmObat, int $signa1Obat, int $signa2Obat, int $jumlah, int $jho, string $catKhsObat)
 * @method static object insertRacikan(string $noSJP, string $noResep, string $jnsRObat, string $kdObat, string $nmObat, int $signa1Obat, int $signa2Obat, int $permintaan, int $jumlah, int $jho, string $catKhsObat)
 * @method static object hapusPelayananObat(string $noSep, string $noResep, string $kdObat, string $tipeObat)
 * @method static object daftarPelayananObat(string $noSep)
 * @method static object riwayatPelayananObat(Carbon $tglAwal, Carbon $tglAkhir, string $noKartu)
 * @method static object simpanResep(Carbon $tglSjp, string $refAsalSjp, string $poliResep, int $kdJenisObat, string $noResep, string $idUserSjp, Carbon $tglResep, Carbon $tglPelResep, string $kdDokter, bool $iterasi)
 * @method static object hapusResep(string $noSjp, string $refAsalSjp, string $noResep)
 * @method static object daftarResep(string $kodePpk, int $kdJenisObat, string $jenisTgl, Carbon $tglMulai, Carbon $tglAkhir)
 * @method static object sep(string $noSep)
 * @method static object dataKlaim(int $bulan, int $tahun, int $jenisObat, int $status)
 */
final class Apotek extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bpjs-bridging.apotek';
    }
}
