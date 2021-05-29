<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'alternative', language 'id', version '3.10'.
 *
 * @package     alternative
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternative'] = 'alternatif';
$string['alternativename'] = 'Nama aktivitas';
$string['alternativeoptions'] = 'Pilihan untuk alternatif ini';
$string['changeallowed'] = 'Perubahan diizinkan';
$string['changeallowed_help'] = 'Jika tidak dicentang, pengguna tidak akan dapat mengubah pilihannya.
Guru, dan semua peran yang memiliki kemampuan `alternatif: pendaftaran paksa`, akan dapat mengubah pilihan siapa pun.';
$string['chooseteammembers'] = 'Pilih anggota tim Anda';
$string['chooseuser'] = 'Pilih pengguna untuk mendaftar';
$string['csv'] = 'Impor CSV';
$string['csv2ndfield'] = 'Bidang ke-2 (tempat) harus berupa angka, dengan 0 = tanpa batas.';
$string['csv_help'] = 'Setiap baris terdiri dari Judul; Tempat; Tanggal; Deskripsi';
$string['csvbadfieldnb'] = 'Jumlah bidang salah: {$a} bukan 4.';
$string['csvunableopen'] = 'Tidak dapat membuka file CSV.';
$string['datecomment'] = 'Tanggal';
$string['datecomment_help'] = 'Bidang ini dapat berisi teks apa pun, tetapi dimaksudkan untuk tanggal atau interval tanggal.';
$string['displaycompact'] = 'Tampilan kompak';
$string['fieldsetcsv'] = 'Opsi impor dari file CSV';
$string['fieldsetmultiple'] = 'Pengaturan untuk beberapa registrasi';
$string['fieldsetteam'] = 'Pengaturan untuk tim';
$string['groupdependent'] = 'Bergantung pada kelompok';
$string['groupdependent_help'] = 'Jika kotak ini dicentang, teks yang ditampilkan ke setiap pengguna akan bergantung pada grupnya.';
$string['individual'] = 'Individu';
$string['instructionsforcereg'] = 'Anda tidak dapat mendaftarkan diri anda sendiri tetapi peran Anda memungkinkan Anda untuk mendaftarkan siswa ke pilihan apa pun.';
$string['instructionsmultiple'] = 'Anda harus memilih antara opsi {$a-> multiplemin} dan {$a-> multiplemax}.';
$string['instructionsmultiplenomax'] = 'Anda harus memilih setidaknya {$a-> multiplemin} opsi.';
$string['instructionsnochange'] = 'Setelah pilihan disimpan, mengubahnya tidak akan diizinkan.';
$string['instructionsteam'] = 'Anda bisa mendaftar sebagai tim. Sebuah tim harus memiliki antara {$a-> teammin} dan {$a-> teammax} anggota.
Saat Anda mendaftarkan anggota lain dari tim Anda, Anda akan menjadi pemimpin tim.';
$string['messageprovider:reminder'] = 'mod / pengingat siswa alternatif';
$string['modulename'] = 'Alternatif';
$string['modulename_help'] = 'Modul alternatif memungkinkan siswa untuk mendaftarkan satu atau beberapa pilihan dalam daftar yang diberikan.';
$string['modulenameplural'] = 'alternatif';
$string['multiple'] = 'Banyak';
$string['multipleenable'] = 'Aktifkan pengaturan ini';
$string['multipleenable_help'] = 'Setiap pengguna harus mendaftarkan beberapa opsi, antara nilai minimum dan maksimum.';
$string['multiplemax'] = 'Registrasi maks pengguna';
$string['multiplemin'] = 'Registrasi minimal pengguna';
$string['noselectedoption'] = 'Anda harus memilih satu opsi';
$string['noselectedusers'] = 'Tidak ada pengguna yang dipilih';
$string['option'] = 'Pilihan';
$string['optionintro'] = 'Deskripsi';
$string['optionname'] = 'Judul';
$string['options'] = 'Pilihan';
$string['places'] = 'Tempat';
$string['placesavail'] = 'Tempat yang tersedia';
$string['pluginadministration'] = 'Administrasi alternatif';
$string['pluginname'] = 'alternatif';
$string['potentialteammembers'] = 'Anggota tim potensial';
$string['private'] = 'Pribadi';
$string['public'] = 'Publik';
$string['publicreg'] = 'Pendaftaran publik';
$string['publicreg_help'] = 'Pendaftaran dapat berupa: <dl>
<dt> publik </dt> <dd> ditampilkan kepada semua orang, </dd>
<dt> publik dalam grup yang sama </dt> <dd> pengguna melihat pendaftaran pengguna yang berbagi setidaknya satu grup </dd>
<dt> pribadi </dt> <dd> hanya ditampilkan untuk power-user (guru, dll). </dd>
</dl>';
$string['register'] = 'Daftar';
$string['registrationforbidden'] = 'Anda tidak dapat mendaftar di sini.';
$string['registrations'] = 'Registrasi';
$string['registrationsaved'] = 'Pilihan pendaftaran anda telah disimpan.';
$string['regteams'] = 'Tim terdaftar';
$string['reminderFull'] = 'Anda harus menentukan pilihan dalam aktivitas "[[AlterName]]"';
$string['reminderFullHtml'] = 'Anda harus membuat pilihan dalam aktivitas “<i> [[AlterName]] </i>”';
$string['reminderSmall'] = 'Anda harus menentukan pilihan dalam aktivitas "[[AlterName]]"';
$string['reminderSubject'] = 'Pengingat: Anda harus memilih di antara opsi-opsi alternatif';
$string['sendReminder'] = 'Kirim Pengingat';
$string['separator'] = 'Pemisah';
$string['students'] = 'Siswa';
$string['synthesis'] = 'Perpaduan';
$string['synthfree'] = 'Gratis';
$string['synthlimitplaces'] = 'Pilihan tempat terbatas (individu)';
$string['synthlimitteamplaces'] = 'Opsi tempat terbatas (tim)';
$string['synthplaces'] = 'Tempat (individu)';
$string['synthpotential'] = 'Calon siswa';
$string['synthregistered'] = 'Siswa yang terdaftar';
$string['synthreserved'] = 'Dipesan (di antara terbatas)';
$string['synthteamplaces'] = 'Tempat (tim)';
$string['synthunlimitplaces'] = 'Opsi tempat tak terbatas (individu)';
$string['synthunlimitteamplaces'] = 'Opsi tempat tidak terbatas (tim)';
$string['synthunregistered'] = 'Siswa tidak terdaftar';
$string['team'] = 'Tim';
$string['teamenable'] = 'Aktifkan pengaturan tim';
$string['teamenable_help'] = 'Tetapkan ukuran tim minimum dan maksimum.';
$string['teamleader'] = 'Pemimpin tim';
$string['teamleadernotamember'] = 'Pemimpin tim tidak boleh menjadi anggota timnya.';
$string['teamplacesavail'] = 'Tempat yang tersedia untuk tim';
$string['teams'] = 'Tim';
$string['unique'] = 'Unik';
$string['unregister'] = 'Batalkan pendaftaran';
$string['unregisterLeader'] = 'Waspadalah: membatalkan pendaftaran seorang pemimpin akan mengakibatkan pembatalan pendaftaran seluruh tim.';
$string['uploadoverwrites'] = 'Hati-hati: mengunggah file baru menghapus semua registrasi dan opsi sebelumnya.';
$string['userinfo'] = 'Telah mendaftar ke {$a} opsi.';
$string['usersnotreg'] = 'Pengguna tidak terdaftar';
$string['usersreg'] = 'Pengguna terdaftar';
$string['viewallregistrations'] = 'Lihat pendaftaran';
$string['viewallusersnotreg'] = 'Lihat pengguna yang tidak terdaftar';
$string['viewallusersreg'] = 'Lihat pengguna terdaftar';
$string['viewsynthesis'] = 'Lihat sintesis';
$string['viewteams'] = 'Lihat tim';
$string['wrongteamsize'] = 'Ukuran tim Anda tidak berada di antara batas yang diizinkan.';
