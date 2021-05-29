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
 * Strings for component 'enrol_lti', language 'id', version '3.10'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Catatan: Direkomendasikan agar setelan administrasi situs \'Izinkan penyematan bingkai\' diaktifkan, sehingga alat ditampilkan dalam bingkai daripada di jendela baru.';
$string['authltimustbeenabled'] = 'Catatan: Plugin ini membutuhkan pengaya autentikasi LTI untuk diaktifkan juga.';
$string['cartridgeurl'] = 'Katrid URL';
$string['couldnotestablishproxy'] = 'Tidak dapat membuat proksi dengan konsumen.';
$string['enrolenddate'] = 'Tanggal berakhir';
$string['enrolenddate_help'] = 'Jika diaktifkan, pengguna hanya dapat mengakses hingga tanggal ini.';
$string['enrolenddateerror'] = 'Tanggal akhir pendaftaran tidak boleh lebih awal dari tanggal mulai';
$string['enrolisdisabled'] = 'Pengaya \'Publikasikan sebagai alat LTI\' dinonaktifkan.';
$string['enrolmentfinished'] = 'Pendaftaran selesai.';
$string['enrolmentnotstarted'] = 'Pendaftaran belum dimulai.';
$string['enrolperiod'] = 'Durasi pendaftaran';
$string['enrolperiod_help'] = 'Durasi pendaftaran valid, dimulai dari saat pengguna mendaftar sendiri dari sistem jarak jauh. Jika dinonaktifkan, durasi pendaftaran tidak akan terbatas.';
$string['enrolstartdate'] = 'Tanggal mulai';
$string['enrolstartdate_help'] = 'Jika diaktifkan, pengguna hanya dapat mengakses mulai tanggal ini dan seterusnya.';
$string['failedrequest'] = 'Permintaan gagal. Alasan: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Untuk mengakses alat tersebut, silakan ikuti tautan di bawah ini.';
$string['gradesync'] = 'Sinkronisasi nilai';
$string['gradesync_help'] = 'Apakah nilai dari alat dikirim ke sistem jarak jauh (konsumen LTI).';
$string['incorrecttoken'] = 'Token salah. Silakan periksa URL dan coba lagi, atau hubungi administrator alat ini.';
$string['invalidrequest'] = 'Permintaan tidak valid';
$string['invalidtoolconsumer'] = 'Konsumen alat tidak valid.';
$string['launchdetails'] = 'Luncurkan detail';
$string['launchdetails_help'] = 'URL kartrid (juga disebut URL konfigurasi) ditambah rahasia atau URL peluncuran diperlukan untuk mengonfigurasi alat.';
$string['launchurl'] = 'Luncurkan URL';
$string['lti:config'] = 'Konfigurasikan model \'Publikasikan sebagai alat LTI\'';
$string['lti:unenrol'] = 'Keluarkan pengguna dari kursus';
$string['maxenrolled'] = 'Pengguna terdaftar maksimum';
$string['maxenrolled_help'] = 'Jumlah maksimum pengguna jarak jauh yang dapat mengakses alat ini. Jika disetel ke nol, jumlah pengguna terdaftar tidak terbatas.';
$string['maxenrolledreached'] = 'Jumlah maksimum pengguna jarak jauh yang diizinkan untuk mengakses alat telah tercapai.';
$string['membersync'] = 'Sinkronisasi pengguna';
$string['membersync_help'] = 'Apakah tugas terjadwal menyinkronkan pengguna yang terdaftar di sistem jarak jauh dengan pendaftaran dalam kursus ini, membuat akun untuk setiap pengguna jarak jauh seperlunya, dan mendaftarkan atau membatalkan pendaftaran sesuai kebutuhan. Jika disetel ke tidak, pada saat pengguna jarak jauh mengakses alat tersebut, sebuah akun akan dibuat untuk mereka dan mereka akan didaftarkan secara otomatis.';
$string['membersyncmode'] = 'Mode sinkronisasi pengguna';
$string['membersyncmode_help'] = 'Apakah pengguna jarak jauh harus didaftarkan dan / atau dibatalkan pendaftarannya dari kursus ini.';
$string['membersyncmodeenrolandunenrol'] = 'Daftarkan pengguna baru dan batalkan pendaftaran pengguna yang hilang';
$string['membersyncmodeenrolnew'] = 'Daftarkan pengguna baru';
$string['membersyncmodeunenrolmissing'] = 'Batalkan pendaftaran pengguna yang hilang';
$string['notoolsprovided'] = 'Tidak ada alat yang disediakan';
$string['opentool'] = 'Buka alat';
$string['pluginname'] = 'Publikasikan sebagai alat LTI';
$string['pluginname_desc'] = 'Pengaya \'Publikasikan sebagai alat LTI\', bersama dengan pengaya autentikasi LTI, memungkinkan pengguna jarak jauh untuk mengakses kursus dan aktivitas yang dipilih. Dengan kata lain, Moodle berfungsi sebagai penyedia alat LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'Daftar pengguna yang terdaftar melalui penyedia LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Waktu terakhir kali pengguna mengakses kursus';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Nilai terakhir yang tercatat dimiliki pengguna';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Waktu saat pengguna terdaftar';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID pengguna';
$string['registration'] = 'Diterbitkan alat pendaftaran';
$string['registrationurl'] = 'URL Pendaftaran';
$string['registrationurl_help'] = 'Jika URL pendaftaran (juga disebut URL praksi) digunakan, alat tersebut secara otomatis dikonfigurasi.';
$string['remotesystem'] = 'Sistem jarak jauh';
$string['requirecompletion'] = 'Mewajibkan penyelesaian kursus atau aktivitas sebelum sinkronisasi nilai';
$string['returnurlnotset'] = 'URL kembali tidak disetel.';
$string['roleinstructor'] = 'Peran untuk pengajar';
$string['roleinstructor_help'] = 'Peran yang diberikan dalam alat kepada pengajar jarak jauh.';
$string['rolelearner'] = 'Peran siswa';
$string['rolelearner_help'] = 'Peran yang diberikan dalam alat kepada siswa jarak jauh.';
$string['secret'] = 'Rahasia';
$string['secret_help'] = 'Serangkaian karakter yang dibagikan dengan sistem jarak jauh (konsumen LTI) untuk menyediakan akses ke alat.';
$string['sharedexternaltools'] = 'Diterbitkan sebagai alat LTI';
$string['successfulregistration'] = 'Pendaftaran berhasil';
$string['tasksyncgrades'] = 'Publikasikan sebagai sinkronisasi tingkat alat LTI';
$string['tasksyncmembers'] = 'Publikasikan sebagai sinkronisasi pengguna alat LTI';
$string['toolsprovided'] = 'Alat yang diterbitkan';
$string['toolsprovided_help'] = 'Sebuah alat dapat dibagikan dengan situs lain dengan memberikan detail peluncuran atau URL pendaftaran.';
$string['tooltobeprovided'] = 'Alat untuk dipublikasikan';
$string['toolurl'] = 'URL alat';
$string['userdefaultvalues'] = 'Nilai bawaan pengguna';
