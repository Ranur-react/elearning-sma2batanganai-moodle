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
 * Strings for component 'auth_db', language 'id', version '3.10'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbchangepasswordurl_key'] = 'URL penggantian kata sandi';
$string['auth_dbdescription'] = 'Metode ini menggunakan tabel basis data eksternal untuk memeriksa apakah nama pengguna dan kata sandi yang dimasukkan adalah sah. Jika keanggotaan adalah keanggotaan baru, maka informasi dari ruas yang lain juga bisa disalin ke Moodle.';
$string['auth_dbextrafields'] = 'Bidang-bidang ini opsional. Anda dapat memilih untuk mengisi beberapa bidang pengguna Moodle sebelumnya dengan informasi dari <b> bidang basis data eksternal </b> yang Anda tentukan di sini. <p> Jika Anda membiarkannya kosong, maka default akan digunakan. </p> <p> Dalam kedua kasus, pengguna akan dapat mengedit semua bidang ini setelah mereka masuk. </p>';
$string['auth_dbfieldpass'] = 'Nama dari ruas yang berisi kata sandi';
$string['auth_dbfieldpass_key'] = 'Ruas kata sandi';
$string['auth_dbfielduser'] = 'Nama dari field yang berisi nama pengguna';
$string['auth_dbhost'] = 'Komputer yang meng-host server database.';
$string['auth_dbname'] = 'Nama database itu sendiri';
$string['auth_dbpass'] = 'Kata sandi sama dengan nama pengguna di atas';
$string['auth_dbpass_key'] = 'Kata sandi';
$string['auth_dbpasstype'] = '<p> Tentukan format yang digunakan ruas kata sandi. </p> <p> Gunakan \'internal\' jika Anda ingin basis data eksternal untuk mengelola nama pengguna dan alamat surel, tetapi Moodle untuk mengelola kata sandi. Jika Anda menggunakan \'internal\', Anda harus menyediakan ruas alamat surel terisi di basis data eksternal, dan Anda harus mengaktifkan tugas terjadwal \\auth_db\\task\\sync_users. Moodle akan mengirim surel ke pengguna baru dengan kata sandi sementara. </p>';
$string['auth_dbpasstype_key'] = 'Format kata sandi';
$string['auth_dbtable'] = 'Nama dari tabel pada database';
$string['auth_dbtype'] = 'Jenis database (Lihat <a href="../lib/adodb/readme.htm#drivers">Dokumentasi ADOdb</a> untuk penjelasannya)';
$string['auth_dbuser'] = 'Nama pengguna yang mempunyai akses pembacaan ke database';
$string['pluginname'] = 'Gunakan database eksternal';
