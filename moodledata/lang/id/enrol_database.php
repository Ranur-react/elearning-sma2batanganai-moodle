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
 * Strings for component 'enrol_database', language 'id', version '3.10'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Konfigurasikan model pendaftaran basis data';
$string['database:unenrol'] = 'Keluarkan pengguna yang ditangguhkan';
$string['dbencoding'] = 'Pengkodean database';
$string['dbhost'] = 'Hos basis data';
$string['dbhost_desc'] = 'Ketik alamat IP peladen basis data atau nama hos. Gunakan nama DSN sistem jika menggunakan ODBC. Gunakan PDO DSN jika menggunakan PDO.';
$string['dbname'] = 'Nama basis data';
$string['dbname_desc'] = 'Biarkan kosong jika menggunakan nama DSN di hos basis data.';
$string['dbpass'] = 'Kata sandi basis data';
$string['dbsetupsql'] = 'Perintah penyiapan basis data';
$string['dbsetupsql_desc'] = 'Perintah SQL untuk setelan basis data khusus, sering digunakan untuk mengatur pengkodean komunikasi - contoh untuk MySQL dan PostgreSQL: <em> SET NAMES \'utf8\' </em>';
$string['dbsybasequoting'] = 'Gunakan kutipan sybase';
$string['dbsybasequoting_desc'] = 'Sybase style single quote escaping - diperlukan untuk Oracle, MS SQL dan beberapa basis data lainnya. Jangan gunakan untuk MySQL!';
$string['dbtype'] = 'Pengandar basis data';
$string['dbtype_desc'] = 'Nama pengandar basis data ADOdb, jenis mesin basis data eksternal.';
$string['dbuser'] = 'Pengguna basis data';
$string['debugdb'] = 'Awakutu ADOdb';
$string['debugdb_desc'] = 'Awakutu koneksi ADOdb ke basis data eksternal - gunakan saat mendapatkan halaman kosong selama login. Tidak cocok untuk situs produksi!';
$string['defaultcategory'] = 'Kategori kursus baru bawaan';
$string['defaultcategory_desc'] = 'Kategori bawaan untuk kursus yang dibuat secara otomatis. Digunakan ketika tidak ada id kategori baru yang ditentukan atau tidak ditemukan.';
$string['defaultrole'] = 'Peran bawaan';
$string['defaultrole_desc'] = 'Peran yang akan ditetapkan secara bawaan jika tidak ada peran lain yang ditentukan di tabel eksternal.';
$string['ignorehiddencourses'] = 'Abaikan kursus tersembunyi';
$string['ignorehiddencourses_desc'] = 'Jika diaktifkan, pengguna tidak akan terdaftar di kursus yang disetel untuk tidak tersedia bagi siswa.';
$string['localcategoryfield'] = 'Ruas kategori lokal';
$string['localcoursefield'] = 'Ruas kategori lokal';
$string['localrolefield'] = 'Ruas peran lokal';
$string['localuserfield'] = 'Ruas peran lokal';
$string['newcoursecategory'] = 'Ruas kategori kursus baru';
$string['newcoursefullname'] = 'Ruas nama lengkap kursus baru';
$string['newcourseidnumber'] = 'Ruas nomor ID kursus baru';
$string['newcourseshortname'] = 'Ruas nama pendek kursus baru';
$string['newcoursetable'] = 'Tabel kursus baru jarak jauh';
$string['newcoursetable_desc'] = 'Tentukan nama tabel yang berisi daftar kursus yang harus dibuat secara otomatis. Kosong berarti tidak ada kursus yang dibuat.';
$string['pluginname'] = 'Basis data eksternal';
$string['pluginname_desc'] = 'Anda dapat menggunakan basis data eksternal (hampir semua jenis) untuk mengontrol pendaftaran Anda. Diasumsikan basis data eksternal Anda berisi setidaknya satu ruas yang berisi ID kursus, dan ruas yang berisi ID pengguna. Ini dibandingkan dengan ruas yang Anda pilih di kursus lokal dan tabel pengguna.';
$string['privacy:metadata'] = 'Pengaya pendaftaran database eksternal tidak menyimpan data pribadi apa pun.';
$string['remotecoursefield'] = 'Ruas kursus jarak jauh';
$string['remotecoursefield_desc'] = 'Nama ruas di tabel jarak jauh yang kami gunakan untuk mencocokkan entri di tabel kursus.';
$string['remoteenroltable'] = 'Tabel pendaftaran pengguna jarak jauh';
$string['remoteenroltable_desc'] = 'Tentukan nama tabel yang berisi daftar pendaftaran pengguna. Kosong berarti tidak ada sinkronisasi pendaftaran pengguna.';
$string['remoteotheruserfield'] = 'Ruas Pengguna Lain Jarak Jauh';
$string['remoteotheruserfield_desc'] = 'Nama ruas di tabel jarak jauh yang kita gunakan untuk menandai penetapan peran "Pengguna Lain".';
$string['remoterolefield'] = 'Ruas peran jarak jauh';
$string['remoterolefield_desc'] = 'Nama ruas di tabel jarak jauh yang kami gunakan untuk mencocokkan entri di tabel peran.';
$string['remoteuserfield'] = 'Ruas pengguna jarak jauh';
$string['remoteuserfield_desc'] = 'Nama ruas di tabel jarak jauh yang kami gunakan untuk mencocokkan entri di tabel pengguna.';
$string['settingsheaderdb'] = 'Koneksi basis data eksternal';
$string['settingsheaderlocal'] = 'Pemetaan ruas lokal';
$string['settingsheadernewcourses'] = 'Pembuatan kursus baru';
$string['settingsheaderremote'] = 'Sinkronisasi pendaftaran jarak jauh';
$string['syncenrolmentstask'] = 'Sinkronisasi tugas pendaftaran basis data eksternal';
$string['templatecourse'] = 'Templat kursus baru';
$string['templatecourse_desc'] = 'Opsional: kursus yang dibuat secara otomatis dapat menyalin setelannya dari templat kursus. Ketik di sini nama pendek dari templat kursus.';
