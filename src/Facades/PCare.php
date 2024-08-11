<?php

namespace LaravelBpjsBridging\Facades;

use Illuminate\Support\Facades\Facade;
use BpjsBridging\PCare\RequestObject\KegiatanKelompokRequest;
use BpjsBridging\PCare\RequestObject\KunjunganRequest;
use BpjsBridging\PCare\RequestObject\McuRequest;
use BpjsBridging\PCare\RequestObject\ObatRequest;
use BpjsBridging\PCare\RequestObject\PendaftaranRequest;
use BpjsBridging\PCare\RequestObject\TindakanRequest;

/**
 * Apotek Bpjs
 *
 * @package LaravelBpjsBridging\Facades
 *
 * @method static object diagnosa(string $kodeDiagnosa, int $start, int $limit) Get diagnosis data
 * @method static object dokter(string $kodeDokter, int $start, int $limit) Get doctor data
 * @method static object kelompok(string $kodeKelompok, int $start, int $limit) Get group data
 * @method static object kegiatanKelompok(KegiatanKelompokRequest $request) Manage group activities
 * @method static object kegiatanKelompokEdit(string $noKunjungan, KegiatanKelompokRequest $request) Edit group activities
 * @method static object kegiatanKelompokDelete(string $noKunjungan) Delete group activities
 * @method static object kunjungan(string $kodePoli, int $month, int $year) Get visit data
 * @method static object kunjunganAdd(KunjunganRequest $request) Add new visit
 * @method static object kunjunganEdit(string $noKunjungan, KunjunganRequest $request) Edit existing visit
 * @method static object mcu(McuRequest $request) Manage MCU (Medical Check-Up)
 * @method static object mcuEdit(string $noKunjungan, McuRequest $request) Edit MCU data
 * @method static object obat(ObatRequest $request) Manage medication
 * @method static object obatEdit(string $kdObatSk, ObatRequest $request) Edit medication
 * @method static object obatDelete(string $kdObatSk) Delete medication
 * @method static object pendaftaran(PendaftaranRequest $request) Register participants
 * @method static object pendaftaranDelete(string $noKunjungan) Delete registration
 * @method static object peserta(string $nomorKartu) Get participant data
 * @method static object poli() Get clinic data
 * @method static object spesialis() Get specialist data
 * @method static object tindakan(TindakanRequest $request) Manage treatment
 * @method static object tindakanEdit(string $kdTindakan, TindakanRequest $request) Edit treatment
 * @method static object tindakanDelete(string $kdTindakan) Delete treatment
 *
 * @see \BpjsBridging\PCare\Bridging
 */
final class PCare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bpjs-bridging.pcare';
    }
}
