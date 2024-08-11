<?php

namespace LaravelBpjsBridging\Facades;

use Illuminate\Support\Facades\Facade;
use BpjsBridging\Antrean\RequestObject\AntreanRequest;
use BpjsBridging\Antrean\RequestObject\JadwalDokterRequest;
use BpjsBridging\Bridge;
use Carbon\Carbon;
/**
 * Antrean Bpjs
 *
 * @package LaravelBpjsBridging\Facades
 *
 * @method static object referensiPoli() Melihat referensi poli yang ada pada Aplikasi HFIS
 * @method static object referensiDokter() Melihat referensi dokter yang ada pada Aplikasi HFIS
 * @method static object referensiJadwalDokter(string $poli, string|Carbon $date) Melihat referensi jadwal dokter yang ada pada Aplikasi HFIS
 * @method static object referensiPoliFingerPrint() Melihat referensi poli finger print
 * @method static object referensiPasienFingerPrint(string $jenisIdentitas, string $noidentitas) Melihat referensi pasien finger print
 * @method static object updateJadwalDokter(JadwalDokterRequest $jadwalRequest) Update jadwal dokter yang ada pada Aplikasi HFIS
 * @method static object tambahAntrean(AntreanRequest $antrean) Tambah antrean
 * @method static object tambahAntreanFarmasi(string $kodebooking, int $jenisresep, string $nomorantrean, string $keterangan) Tambah antrean farmasi
 * @method static object updateWaktuAntrean(string $kodebooking, int $taskid, Carbon $waktu, string|null $jenisresep = null) Mengirimkan waktu tunggu/waktu layan
 * @method static object batalAntrean(mixed $kodeBooking, mixed $keterangan) Membatalkan antrean pasien
 * @method static object listWaktuTaskId(mixed $kodeBooking) Melihat waktu task id yang telah dikirim ke BPJS
 * @method static object dashboardPerTanggal(mixed $tanggal, mixed $waktu) Dashboard waktu per tanggal
 * @method static object dashboardPerBulan(string $tahun, string $bulan, string $waktu) Dashboard waktu per bulan
 * @method static object antreanPerTanggal(Carbon $tanggal) Dashboard waktu per tahun
 * @method static object antreanPerKodeBooking(mixed $kodeBooking) Melihat pendaftaran antrean per kode booking
 * @method static object antreanBelumDilayani() Melihat pendaftaran antrean yang belum dilayani
 * @method static object antreanPerPoliPerDokterPerHariPerJamPraktek(string $kodePoli, int $kodedokter, int $hari, mixed $jamPraktek) Melihat pendaftaran antrean belum dilayani per poli per dokter per hari per jam praktek
 *
 * @see \BpjsBridging\Antrean\Bridging
 */
final class Antrean extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bpjs-bridging.antrean';
    }
}
