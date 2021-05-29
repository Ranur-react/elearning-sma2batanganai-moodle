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
 * Strings for component 'enrol_flatfile', language 'id', version '3.10'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Pengkodean berkas';
$string['expiredaction'] = 'Aksi ketika kedaluwarsa pendaftaran';
$string['expiredaction_help'] = 'Pilih tindakan yang akan dilakukan saat pendaftaran pengguna berakhir. Harap dicatat bahwa beberapa data pengguna dan setelan dihapus dari kursus selama pembatalan pendaftaran.';
$string['filelockedmail'] = 'Berkas teks yang Anda gunakan untuk pendaftaran berbasis file ({$a}) tidak dapat dihapus oleh proses cron. Ini biasanya berarti izinnya salah. Harap perbaiki izin agar Moodle dapat menghapus berkas tersebut, jika tidak maka berkas akan diproses berulang kali.';
$string['filelockedmailsubject'] = 'Kesalahan penting: Berkas pendaftaran';
$string['flatfile:manage'] = 'Kelola pendaftaran pengguna secara manual';
$string['flatfile:unenrol'] = 'Keluarkan pengguna dari kursus secara manual';
$string['flatfileenrolments'] = 'Pendaftaran berkas flat (CSV)';
$string['flatfilesync'] = 'Sinkronisasi pendaftaran berkas flat';
$string['location'] = 'Lokasi berkas';
$string['location_desc'] = 'Tentukan lokasi lengkap ke berkas pendaftaran. Berkas secara otomatis dihapus setelah diproses.';
$string['mapping'] = 'Pemetaan peran berkas flat';
$string['messageprovider:flatfile_enrolment'] = 'Pesan pendaftaran berkas flat';
$string['notifyadmin'] = 'Beri tahu administrator';
$string['notifyenrolled'] = 'Beri tahu pengguna terdaftar';
$string['notifyenroller'] = 'Beri tahu pengguna yang bertanggung jawab atas pendaftaran';
$string['pluginname'] = 'Berkas flat (CSV)';
$string['pluginname_desc'] = 'Metode ini akan berulang kali memeriksa dan memproses berkas teks yang diformat khusus di lokasi yang Anda tentukan. Berkas tersebut adalah berkas yang dipisahkan koma yang diasumsikan memiliki empat atau enam bidang per baris: operation, role, user idnumber, course idnumber [, starttime [, endtime]] dimana: * operation - add | del * role - student | teacher | teacheredit * user idnumber - idnumber in the user table NB not id * course idnumber - idnumber in the course table NB not id * starttime - start time (in seconds since epoch) - optional * endtime - end time (in seconds since epoch) - optional It could look something like this: <pre class="informationbox"> add, student, 5, CF101 add, teacher, 6, CF101 add, teacheredit, 7, CF101 del, student, 8, CF101 del, student, 17, CF101 add, student, 21, CF101, 1091115000, 1091215000 </pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Pengaya pendaftaran Berkas Flat (CSV) dapat menyimpan data pribadi yang berkaitan dengan pendaftaran di masa mendatang di tabel enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Tindakan pendaftaran diharapkan pada tanggal tertentu';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'ID kursus yang terkait dengan pendaftaran';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'ID peran yang akan ditetapkan atau dibatalkan';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Waktu pendaftaran berakhir';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Waktu saat pendaftaran diubah';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Waktu saat pendaftaran dimulai';
$string['privacy:metadata:enrol_flatfile:userid'] = 'ID pengguna yang terkait dengan penetapan peran';
