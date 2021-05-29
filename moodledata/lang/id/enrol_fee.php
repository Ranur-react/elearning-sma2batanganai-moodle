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
 * Strings for component 'enrol_fee', language 'id', version '3.10'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Tetapkan peran';
$string['cost'] = 'Biaya pendaftaran';
$string['costerror'] = 'Biaya pendaftaran harus berupa angka.';
$string['currency'] = 'Mata uang';
$string['defaultrole'] = 'Penetapan peran bawaan';
$string['defaultrole_desc'] = 'Pilih peran untuk diberikan kepada pengguna setelah melakukan pembayaran.';
$string['enrolenddate'] = 'Tanggal berakhir';
$string['enrolenddate_help'] = 'Jika diaktifkan, pengguna hanya dapat didaftarkan hingga tanggal ini.';
$string['enrolenddaterror'] = 'Tanggal akhir pendaftaran tidak boleh lebih awal dari tanggal mulai.';
$string['enrolperiod'] = 'Durasi pendaftaran';
$string['enrolperiod_desc'] = 'Durasi bawaan pendaftaran valid. Jika disetel ke nol, durasi pendaftaran tidak akan terbatas secara bawaan.';
$string['enrolperiod_help'] = 'Durasi pendaftaran valid, dimulai dari saat pengguna terdaftar. Jika dinonaktifkan, durasi pendaftaran tidak akan terbatas.';
$string['enrolstartdate'] = 'Tanggal mulai';
$string['enrolstartdate_help'] = 'Jika diaktifkan, pengguna hanya dapat didaftarkan mulai tanggal ini dan seterusnya.';
$string['expiredaction'] = 'Aksi ketika kedaluwarsa pendaftaran';
$string['expiredaction_help'] = 'Pilih aksi yang akan dilakukan ketika pendaftaran pengguna berakhir. Harap dicatat bahwa beberapa data dan setelan pengguna dihapus ketika pengguna dibatalkan pendaftarannya.';
$string['fee:config'] = 'Konfigurasikan pendaftaran pada model pendaftaran pembayaran';
$string['fee:manage'] = 'Kelola pengguna terdaftar';
$string['fee:unenrol'] = 'Keluarkan pengguna dari kursus';
$string['fee:unenrolself'] = 'Keluar mandiri dari kursus';
$string['nocost'] = 'Tidak ada biaya untuk mendaftar di kursus ini!';
$string['paymentaccount'] = 'Akun pembayaran';
$string['paymentaccount_help'] = 'Biaya pendaftaran akan dibayarkan ke akun ini.';
$string['pluginname'] = 'Pendaftaran pembayaran';
$string['pluginname_desc'] = 'Pendaftaran pada metode pendaftaran pembayaran memungkinkan Anda untuk mengatur kursus yang membutuhkan pembayaran. Jika biaya untuk kursus apapun diatur ke nol, maka siswa tidak diminta untuk membayar biaya masuk. Ada biaya seluruh situs yang Anda tetapkan di sini sebagai bawaan sistem untuk seluruh situs dan kemudian pengaturan kursus yang dapat Anda tetapkan untuk setiap kursus satu per satu. Biaya kursus menggantikan biaya situs.';
$string['privacy:metadata'] = 'Pendaftaran pengaya pendaftaran pembayaran tidak menyimpan data pribadi apa pun.';
$string['purchasedescription'] = 'Pendaftaran dalam kursus {$a}';
$string['sendpaymentbutton'] = 'Pilih jenis pembayaran';
$string['status'] = 'Izinkan pendaftaran pada pembayaran pendaftaran';
$string['status_desc'] = 'Izinkan pengguna melakukan pembayaran untuk mendaftar ke kursus secara bawaan sistem.';
