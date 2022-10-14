<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Akademik{
/**
 * App\Models\Akademik\Jadwal
 *
 * @property int $id
 * @property string $kode
 * @property int $kelas_id
 * @property int $guru_id
 * @property int $mapel_id
 * @property string $jam_mulai
 * @property string $jam_selesai
 * @property string $hari
 * @property string $status
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Kepegawaian\Guru $guru
 * @property-read \App\Models\Akademik\Kelas $kelas
 * @property-read \App\Models\Akademik\Mapel $mapel
 * @method static \Database\Factories\Akademik\JadwalFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereGuruId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereHari($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereJamMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereJamSelesai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereKelasId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereMapelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jadwal whereUpdatedAt($value)
 */
	class Jadwal extends \Eloquent {}
}

namespace App\Models\Akademik{
/**
 * App\Models\Akademik\Kelas
 *
 * @property int $id
 * @property string $kode_kelas
 * @property string $nama_kelas
 * @property int $wali_kelas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Kesiswaan\Santri[] $santri
 * @property-read int|null $santri_count
 * @method static \Database\Factories\Akademik\KelasFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereKodeKelas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereNamaKelas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereWaliKelas($value)
 */
	class Kelas extends \Eloquent {}
}

namespace App\Models\Akademik{
/**
 * App\Models\Akademik\KriteriaKonseling
 *
 * @method static \Illuminate\Database\Eloquent\Builder|KriteriaKonseling newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KriteriaKonseling newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KriteriaKonseling query()
 */
	class KriteriaKonseling extends \Eloquent {}
}

namespace App\Models\Akademik{
/**
 * App\Models\Akademik\Mapel
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property int $dibuat_oleh
 * @property int|null $diubah_oleh
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Commons\User|null $pembuat
 * @method static \Database\Factories\Akademik\MapelFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel whereDibuatOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel whereDiubahOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mapel whereUpdatedAt($value)
 */
	class Mapel extends \Eloquent {}
}

namespace App\Models\Akademik{
/**
 * App\Models\Akademik\Pelanggaran
 *
 * @property int $id
 * @property string $kasus
 * @property int $bobot
 * @property int $dibuat_oleh
 * @property int|null $diedit_oleh
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Kesiswaan\Konseling|null $konseling
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran whereBobot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran whereDibuatOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran whereDieditOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran whereKasus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggaran whereUpdatedAt($value)
 */
	class Pelanggaran extends \Eloquent {}
}

namespace App\Models\Akademik{
/**
 * App\Models\Kesiswaan\Santri
 *
 * @property int $id
 * @property string $nama_lengkap
 * @property string|null $nama_panggilan
 * @property string $nisn
 * @property string|null $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string|null $agama
 * @property string|null $anak_ke
 * @property string|null $jumlah_saudara
 * @property string|null $status_keluarga
 * @property string|null $email
 * @property string|null $no_hp
 * @property string|null $alamat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Kesiswaan\Absensi[] $data_absensi
 * @property-read int|null $data_absensi_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Akademik\Kelas[] $kelas
 * @property-read int|null $kelas_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereAgama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereAnakKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereJumlahSaudara($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereNamaLengkap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereNamaPanggilan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereNisn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereNoHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereStatusKeluarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereTanggalLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereTempatLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kesiswaan\Santri whereUpdatedAt($value)
 */
	class Santri extends \Eloquent {}
}

namespace App\Models\Akademik{
/**
 * App\Models\Akademik\TahunAjaran
 *
 * @property int $id
 * @property string $tahun_awal
 * @property string $tahun_akhir
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Akademik\TahunAjaranFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TahunAjaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TahunAjaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TahunAjaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|TahunAjaran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TahunAjaran whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TahunAjaran whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TahunAjaran whereTahunAkhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TahunAjaran whereTahunAwal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TahunAjaran whereUpdatedAt($value)
 */
	class TahunAjaran extends \Eloquent {}
}

namespace App\Models\Commons{
/**
 * App\Models\Commons\Kabupaten
 *
 * @property int $id
 * @property string $code
 * @property string $province_code
 * @property string $name
 * @property string|null $meta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten whereProvinceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kabupaten whereUpdatedAt($value)
 */
	class Kabupaten extends \Eloquent {}
}

namespace App\Models\Commons{
/**
 * App\Models\Commons\Kecamatan
 *
 * @property int $id
 * @property string $code
 * @property string $city_code
 * @property string $name
 * @property string|null $meta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereCityCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kecamatan whereUpdatedAt($value)
 */
	class Kecamatan extends \Eloquent {}
}

namespace App\Models\Commons{
/**
 * App\Models\Commons\Kelurahan
 *
 * @property int $id
 * @property string $code
 * @property string $district_code
 * @property string $name
 * @property string|null $meta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereDistrictCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelurahan whereUpdatedAt($value)
 */
	class Kelurahan extends \Eloquent {}
}

namespace App\Models\Commons{
/**
 * App\Models\Commons\Membership
 *
 * @property int $id
 * @property int $team_id
 * @property int $user_id
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership query()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUserId($value)
 */
	class Membership extends \Eloquent {}
}

namespace App\Models\Commons{
/**
 * App\Models\Commons\Provinsi
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $meta
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi whereUpdatedAt($value)
 */
	class Provinsi extends \Eloquent {}
}

namespace App\Models\Commons{
/**
 * App\Models\Commons\Team
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property bool $personal_team
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Commons\TeamFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team wherePersonalTeam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUserId($value)
 */
	class Team extends \Eloquent {}
}

namespace App\Models\Commons{
/**
 * App\Models\Commons\TeamInvitation
 *
 * @property int $id
 * @property int $team_id
 * @property string $email
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereUpdatedAt($value)
 */
	class TeamInvitation extends \Eloquent {}
}

namespace App\Models\Commons{
/**
 * App\Models\Commons\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $profile_photo_url
 * @property-read \App\Models\Kepegawaian\Guru|null $guru
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\Commons\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\Kepegawaian{
/**
 * App\Models\Kepegawaian\Guru
 *
 * @property int $id
 * @property string $nama
 * @property string $nik
 * @property string $agama
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $nama_ibu
 * @property string|null $tempat_tinggal
 * @property string|null $dusun
 * @property string|null $kelurahan
 * @property string|null $kecamatan
 * @property string|null $kabupaten
 * @property string|null $provinsi
 * @property string|null $kode_pos
 * @property string|null $no_hp
 * @property string $email
 * @property string $pendidikan_terakhir
 * @property int|null $unit_sekolah_id
 * @property string $jabatan
 * @property string $status_guru
 * @property string $tanggal_masuk
 * @property string|null $foto
 * @property string $status
 * @property int $dibuat_oleh
 * @property int|null $diedit_oleh
 * @property int $user_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Kepegawaian\RiwayatPendidikan|null $pendidikan
 * @property-read \App\Models\Commons\User $user
 * @method static \Database\Factories\Kepegawaian\GuruFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Guru newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Guru query()
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereAgama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereDibuatOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereDieditOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereDusun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereJabatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereKabupaten($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereKecamatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereKelurahan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereKodePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereNamaIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereNoHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru wherePendidikanTerakhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereProvinsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereStatusGuru($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereTanggalLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereTanggalMasuk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereTempatLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereTempatTinggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereUnitSekolahId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereUserId($value)
 */
	class Guru extends \Eloquent {}
}

namespace App\Models\Kepegawaian{
/**
 * App\Models\Kepegawaian\RiwayatPendidikan
 *
 * @property int $id
 * @property int $guru_id
 * @property string|null $jenjang_pendidikan
 * @property string $nama_sekolah
 * @property string $alamat_sekolah
 * @property string $tahun_masuk
 * @property string $tahun_lulus
 * @property string|null $jurusan
 * @property string $dibuat_oleh
 * @property string|null $diubah_oleh
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Kepegawaian\Guru $guru
 * @method static \Database\Factories\Kepegawaian\RiwayatPendidikanFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan query()
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereAlamatSekolah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereDibuatOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereDiubahOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereGuruId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereJenjangPendidikan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereJurusan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereNamaSekolah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereTahunLulus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereTahunMasuk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiwayatPendidikan whereUpdatedAt($value)
 */
	class RiwayatPendidikan extends \Eloquent {}
}

namespace App\Models\Kesiswaan{
/**
 * App\Models\Kesiswaan\Absensi
 *
 * @property int $id
 * @property int $jadwal_id
 * @property int $santri_id
 * @property string $status
 * @property string|null $keterangan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Akademik\Jadwal $jadwal
 * @property-read \App\Models\Kesiswaan\Santri $santri
 * @method static \Database\Factories\Kesiswaan\AbsensiFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereJadwalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereSantriId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereUpdatedAt($value)
 */
	class Absensi extends \Eloquent {}
}

namespace App\Models\Kesiswaan{
/**
 * App\Models\Kesiswaan\Konseling
 *
 * @property int $id
 * @property int $santri_id
 * @property string $tanggal
 * @property int $pelanggaran_id
 * @property string|null $keterangan
 * @property int $dibuat_oleh
 * @property int|null $diubah_oleh
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Akademik\Pelanggaran $pelanggaran
 * @property-read \App\Models\Kesiswaan\Santri $santri
 * @property-read \App\Models\Commons\User|null $user
 * @method static \Database\Factories\Kesiswaan\KonselingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling query()
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling whereDibuatOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling whereDiubahOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling wherePelanggaranId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling whereSantriId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Konseling whereUpdatedAt($value)
 */
	class Konseling extends \Eloquent {}
}

namespace App\Models\Kesiswaan{
/**
 * App\Models\Kesiswaan\Presensi
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Kesiswaan\PresensiFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Presensi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Presensi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Presensi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Presensi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presensi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presensi whereUpdatedAt($value)
 */
	class Presensi extends \Eloquent {}
}

namespace App\Models\Keuangan{
/**
 * App\Models\Keuangan\KategoriTagihan
 *
 * @property int $id
 * @property string $kode
 * @property int $tahun_ajaran_id
 * @property string $nama_kategori
 * @property string $jenis_tagihan
 * @property int $cicilan
 * @property string $status
 * @property string|null $keterangan
 * @property int $dibuat_oleh
 * @property int|null $diubah_oleh
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Akademik\TahunAjaran $tapel
 * @method static \Database\Factories\Keuangan\KategoriTagihanFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan query()
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereCicilan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereDibuatOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereDiubahOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereJenisTagihan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereNamaKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereTahunAjaranId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KategoriTagihan whereUpdatedAt($value)
 */
	class KategoriTagihan extends \Eloquent {}
}

namespace App\Models\Keuangan{
/**
 * App\Models\Keuangan\Pembayaran
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\Keuangan\PembayaranFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereUpdatedAt($value)
 */
	class Pembayaran extends \Eloquent {}
}

namespace App\Models\Keuangan{
/**
 * App\Models\Keuangan\Rekening
 *
 * @property int $id
 * @property int $santri_id
 * @property string $nomor_rekening
 * @property string $jenis_rekening
 * @property string|null $limit_harian
 * @property string $passcode
 * @property string $status
 * @property int $dibuat_oleh
 * @property int|null $diubah_oleh
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Commons\User|null $pembuat
 * @property-read \App\Models\Kesiswaan\Santri $santri
 * @method static \Database\Factories\Keuangan\RekeningFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereDibuatOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereDiubahOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereJenisRekening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereLimitHarian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereNomorRekening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening wherePasscode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereSantriId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rekening whereUpdatedAt($value)
 */
	class Rekening extends \Eloquent {}
}

namespace App\Models\Keuangan{
/**
 * App\Models\Keuangan\Tagihan
 *
 * @property int $id
 * @property int $santri_id
 * @property int $kategori_tagihan_id
 * @property string $kode_tagihan
 * @property string $tgl_dibuat
 * @property string $tgl_jatuh_tempo
 * @property string $total_tagihan
 * @property string $status
 * @property string|null $keterangan
 * @property int $dibuat_oleh
 * @property int|null $diubah_oleh
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Keuangan\KategoriTagihan $kategori
 * @property-read \App\Models\Kesiswaan\Santri $santri
 * @property-read \App\Models\Keuangan\Transaksi|null $transaksi
 * @method static \Database\Factories\Keuangan\TagihanFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereDibuatOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereDiubahOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereKategoriTagihanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereKodeTagihan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereSantriId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereTglDibuat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereTglJatuhTempo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereTotalTagihan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereUpdatedAt($value)
 */
	class Tagihan extends \Eloquent {}
}

namespace App\Models\Keuangan{
/**
 * App\Models\Keuangan\Transaksi
 *
 * @property int $id
 * @property string $waktu_transaksi
 * @property string $status_transaksi
 * @property string $transaksi_id
 * @property string|null $toko
 * @property string $keterangan_status
 * @property string $kode_status
 * @property string $tanda_terima
 * @property string $waktu_penyelesaian
 * @property string $jenis_pembayaran
 * @property string|null $kode_pembayaran
 * @property string $order_id
 * @property string|null $merchant_id
 * @property string $total
 * @property string $mata_uang
 * @property string|null $kode_persetujuan
 * @property string|null $penipuan_status
 * @property string $token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Keuangan\Tagihan|null $tagihan
 * @method static \Database\Factories\Keuangan\TransaksiFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereJenisPembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereKeteranganStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereKodePembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereKodePersetujuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereKodeStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereMataUang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi wherePenipuanStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereStatusTransaksi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereTandaTerima($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereToko($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereTransaksiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereWaktuPenyelesaian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaksi whereWaktuTransaksi($value)
 */
	class Transaksi extends \Eloquent {}
}

