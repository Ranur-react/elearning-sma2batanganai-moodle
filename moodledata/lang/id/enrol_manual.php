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
 * Strings for component 'enrol_manual', language 'id', version '3.10'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Lanjutan';
$string['alterstatus'] = 'Ubah status';
$string['altertimeend'] = 'Ubah waktu akhir';
$string['altertimestart'] = 'Ubah waktu mulai';
$string['assignrole'] = 'Tetapkan peran';
$string['assignroles'] = 'Tetapkan peran';
$string['browsecohorts'] = 'Jelajahi kohor';
$string['browseusers'] = 'Jelajahi pengguna';
$string['confirmbulkdeleteenrolment'] = 'Anda yakin ingin menghapus pendaftaran pengguna ini?';
$string['defaultperiod'] = 'Durasi pendaftaran bawaan';
$string['defaultperiod_desc'] = 'Durasi bawaan pendaftaran valid. Jika disetel ke nol, durasi pendaftaran tidak akan terbatas secara bawaan.';
$string['defaultperiod_help'] = 'Durasi bawaan pendaftaran valid, dimulai dari saat pengguna terdaftar. Jika dinonaktifkan, durasi pendaftaran tidak akan terbatas secara bawaan.';
$string['defaultstart'] = 'Pendaftaran bawaan dimulai';
$string['deleteselectedusers'] = 'Hapus pendaftaran pengguna terpilih';
$string['editselectedusers'] = 'Edit pendaftaran pengguna yang dipilih';
$string['enrolledincourserole'] = 'Terdaftar pada "{$a->course}" sebagai "{$a->role}"';
$string['enrolusers'] = 'Daftarkan pengguna';
$string['enroluserscohorts'] = 'Daftarkan pengguna dan kohor yang dipilih';
$string['expiredaction'] = 'Tindakan kedaluwarsa pendaftaran';
$string['expiredaction_help'] = 'Pilih tindakan yang akan dilakukan saat pendaftaran pengguna berakhir. Harap dicatat bahwa beberapa data pengguna dan pengaturan dihapus dari kursus selama pembatalan pendaftaran.';
$string['expirymessageenrolledbody'] = 'Halo {$a->user}, Ini adalah pemberitahuan bahwa pendaftaran Anda dalam kursus \'{$a->course}\' akan berakhir pada {$a->timeend}. Jika Anda membutuhkan bantuan, silakan hubungi {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Pemberitahuan kedaluwarsa pendaftaran';
$string['expirymessageenrollerbody'] = 'Pendaftaran dalam pendaftaran \'{$a->course}\' akan berakhir dalam {$a->threshold} berikutnya untuk pengguna berikut:

{a->users}

Untuk memperpanjang pendaftaran mereka, buka {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Pemberitahuan kedaluwarsa pendaftaran';
$string['manual:config'] = 'Konfigurasikan model pendaftaran manual';
$string['manual:enrol'] = 'Daftarkan pengguna';
$string['manual:manage'] = 'Kelola pendaftaran pengguna';
$string['manual:unenrol'] = 'Keluarkan pengguna dari kursus';
$string['manual:unenrolself'] = 'Keluar mandiri dari kursus';
$string['manualpluginnotinstalled'] = 'Pengaya "Manual" belum terpasang';
$string['messageprovider:expiry_notification'] = 'Pemberitahuan kedaluwarsa pendaftaran manual';
$string['now'] = 'Sekarang';
$string['pluginname'] = 'Pendaftaran manual';
$string['pluginname_desc'] = 'Pengaya pendaftaran manual memungkinkan pengguna untuk didaftarkan secara manual melalui tautan di setelan administrasi kursus, oleh pengguna dengan izin yang sesuai seperti guru. Biasanya pengaya harus diaktifkan, karena pengaya tertentu lainnya, seperti pendaftaran mandiri, memerlukannya.';
$string['privacy:metadata'] = 'Pengaya pendaftaran Manual tidak menyimpan data pribadi apa pun.';
$string['selectcohorts'] = 'Pilih kohor';
$string['selection'] = 'Pilihan';
$string['selectusers'] = 'Pilih pengguna';
$string['sendexpirynotificationstask'] = 'Pendaftaran manual mengirim tugas pemberitahuan kedaluwarsa';
$string['status'] = 'Aktifkan pendaftaran manual';
$string['status_desc'] = 'Izinkan akses kursus dari pengguna yang terdaftar secara internal. Ini harus tetap diaktifkan dalam banyak kasus.';
$string['status_help'] = 'Setelan ini menentukan apakah pengguna dapat didaftarkan secara manual, melalui tautan dalam setelan administrasi kursus, oleh pengguna dengan izin yang sesuai seperti pengajar.';
$string['statusdisabled'] = 'Dinonaktifkan';
$string['statusenabled'] = 'Diaktifkan';
$string['syncenrolmentstask'] = 'Sinkronisasi tugas pendaftaran manual';
$string['unenrol'] = 'Keluarkan pengguna';
$string['unenrolselectedusers'] = 'Batalkan pendaftaran pengguna yang dipilih';
$string['unenrolselfconfirm'] = 'Anda yakin ingin membatalkan pendaftaran dari kursus "{$a}"?';
$string['unenroluser'] = 'Anda yakin ingin membatalkan pendaftaran "{$a->user}" dari kursus "{$a->course}"?';
$string['unenrolusers'] = 'Keluarkan pengguna';
$string['wscannotenrol'] = 'Model pengaya tidak dapat mendaftarkan pengguna secara manual di ID kursus = {$a->courseid}';
$string['wsnoinstance'] = 'Model pengaya pendaftaran manual tidak ada atau dinonaktifkan untuk kursus (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Anda tidak memiliki izin untuk menetapkan peran ini ({$a->roleid}) kepada pengguna ini ({$a->userid}) dalam kursus ini ({$a->courseid}).';
