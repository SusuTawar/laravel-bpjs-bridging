<?php

namespace LaravelBpjsBridging\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Apotek Bpjs
 *
 * @package LaravelBpjsBridging\Facades
 *
 * @method static object referensiDPHO() Mengambil daftar obat DPHO yang terdaftar di sistem.
 * @method static object referensiPoli(string $kdPoli) Mengambil daftar obat yang tersedia di poli tertentu.
 * @method static object referensiFasilitasKesehatan(int $jnsFaskes, string $namaFaskes) Pencarian data fasilitas kesehatan.
 * @method static object referensiSettingApotek(string $kdApotek) Pencarian Setting Apotek.
 * @method static object referensiSpesialistik() Pencarian data spesialistik.
 * @method static object referensiObat(string $kdJnsObat, Carbon $tglResep, string $filter) Pencarian obat.
 * @method static object insertNonRacikan(string $noSJP, string $noResep, string $kdObat, string $nmObat, int $signa1Obat, int $signa2Obat, int $jumlah, int $jho, string $catKhsObat) Simpan Obat Non Racikan.
 * @method static object insertRacikan(string $noSJP, string $noResep, string $jnsRObat, string $kdObat, string $nmObat, int $signa1Obat, int $signa2Obat, int $permintaan, int $jumlah, int $jho, string $catKhsObat) Simpan Obat Racikan.
 * @method static object hapusPelayananObat(string $noSep, string $noResep, string $kdObat, string $tipeObat) Hapus Pelayanan Obat.
 * @method static object daftarPelayananObat(string $noSep) Daftar Pelayanan Obat.
 * @method static object riwayatPelayananObat(Carbon $tglAwal, Carbon $tglAkhir, string $noKartu) Riwayat Pelayanan Obat.
 * @method static object simpanResep(Carbon $tglSjp, string $refAsalSjp, string $poliResep, int $kdJenisObat, string $noResep, string $idUserSjp, Carbon $tglResep, Carbon $tglPelResep, string $kdDokter, bool $iterasi) Simpan Resep.
 * @method static object hapusResep(string $noSjp, string $refAsalSjp, string $noResep) Hapus Resep.
 * @method static object daftarResep(string $kodePpk, int $kdJenisObat, string $jenisTgl, Carbon $tglMulai, Carbon $tglAkhir) Daftar Resep.
 * @method static object cariSep(string $noSep) Data No Kunjungan/SEP.
 * @method static object dataKlaim(int $bulan, int $tahun, int $jenisObat, bool $status) Data Klaim.
 *
 * @see \BpjsBridging\Apotek\Bridging
 */
final class Apotek extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bpjs-bridging.apotek';
    }
}
