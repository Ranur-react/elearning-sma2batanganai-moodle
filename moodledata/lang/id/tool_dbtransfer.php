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
 * Strings for component 'tool_dbtransfer', language 'id', version '3.10'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Pemacu basis data yang tersedia untuk migrasi';
$string['cliheading'] = 'Migrasi basis data - pastikan tidak ada yang mengakses server selama migrasi!
';
$string['climigrationnotice'] = 'Migrasi basis data sedang berlangsung, harap tunggu hingga migrasi selesai dan administrator server memperbarui konfigurasi dan menghapus berkas $CFG->dataroot/climaintenance.html.
';
$string['convertinglogdisplay'] = 'Mengonversi tindakan tampilan log';
$string['dbexport'] = 'Ekspor basis data';
$string['dbtransfer'] = 'Migrasi basis data';
$string['enablemaintenance'] = 'Aktifkan mode pemeliharaan';
$string['enablemaintenance_help'] = 'Opsi ini mengaktifkan mode pemeliharaan selama dan setelah migrasi basis data, ini mencegah akses semua pengguna hingga migrasi selesai. Harap dicatat bahwa administrator harus secara manual menghapus berkas $CFG->dataroot/climaintenance.html setelah memperbarui setelan config.php untuk melanjutkan operasi normal.';
$string['exportdata'] = 'Ekspor data';
$string['notargetconectexception'] = 'Tidak terhubung dengan basis data target, maaf.';
$string['options'] = 'Opsi';
$string['pluginname'] = 'Transfer basis data';
$string['privacy:metadata'] = 'Pengaya transfer basis data tidak menyimpan data pribadi apa pun.';
$string['targetdatabase'] = 'Basis data target';
$string['targetdatabasenotempty'] = 'Database target tidak boleh berisi tabel apa pun dengan prefiks yang diberikan!';
$string['transferdata'] = 'Transfer data';
$string['transferdbintro'] = 'Skrip ini akan mentransfer seluruh konten basis data ini ke server basis data lain. Ini sering digunakan untuk migrasi data ke tipe basis data yang berbeda.';
$string['transferdbtoserver'] = 'Transfer basis data Moodle ini ke server lain';
$string['transferringdbto'] = 'Mentransfer basis data {$a->dbtypefrom}  ke basis data {$a->dbtype} "{$a->dbname}" pada "{$a->dbhost}"';
