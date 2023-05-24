<?php

namespace LaravelBpjsBridging\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Antrean Bpjs
 *
 * @package LaravelBpjsBridging\Facades
 *
 * @method static object referensiPoli()
 * @method static object referensiDokter()
 * @method static object referensiJadwalDokter($poli, $date)
 * @method static object referensiPoliFingerPrint()
 * @method static object referensiPasienFingerPrint($jenisIdentitas, $noidentitas)
 * @method static object updateJadwalDokter(BpjsBridging\Antrean\RequestObject\JadwalDokterRequest $jadwalDokter)
 * @method static object tambahAntrean(BpjsBridging\Antrean\RequestObject\AntreanStructure $antrean)
 * @method static object updateWaktuAntrean($kodebooking, $taskid, Carbon $waktu, $jenisresep = null)
 * @method static object batalAntrean($kodeBooking, $keterangan)
 * @method static object listWaktuTaskId($kodeBooking)
 * @method static object dashboardPerTanggal($tanggal, $waktu)
 * @method static object dashboardPerBulan($tahun, $bulan, $waktu)
 * @method static object antreanPerTanggal(Carbon $tanggal)
 * @method static object antreanPerKodeBooking($kodeBooking)
 * @method static object antreanBelumDilayani()
 * @method static object antreanPerPoliPerDokterPerHariPerJamPraktek($kodePoli, $kodedokter, $hari, $jamPraktek)
 */
final class Antrean extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bpjs-bridging.antrean';
    }
}
