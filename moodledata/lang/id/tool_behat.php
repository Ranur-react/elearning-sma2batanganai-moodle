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
 * Strings for component 'tool_behat', language 'id', version '3.10'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Alat administrasi ini membantu pengembang dan menguji penulis untuk membuat berkas .feature yang menjelaskan fungsi Moodle dan menjalankannya secara otomatis. Definisi langkah yang tersedia untuk digunakan dalam berkas .feature tercantum di bawah ini.';
$string['allavailablesteps'] = 'Semua definisi langkah yang tersedia';
$string['errorapproot'] = 'CFG->behat_ionic_dirroot tidak mengarah ke pemasangan pengembang aplikasi Moodle yang valid.';
$string['errorbehatcommand'] = 'Kesalahan menjalankan perintah behat CLI. Coba jalankan "{$a} --help" secara manual dari CLI untuk mengetahui lebih lanjut tentang masalah tersebut.';
$string['errorcomposer'] = 'Dependensi komposer tidak diinstal.';
$string['errordataroot'] = '$CFG->behat_dataroot tidak disetel atau tidak valid.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot perlu diatur config.php.';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot nilai harus berbeda dari $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot dan nilai $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'Argumen nilai ruas';
$string['fieldvalueargument_help'] = 'Argumen ini harus dilengkapi dengan nilai ruas. Ada banyak jenis ruas, termasuk yang sederhana seperti kotak centang, pilihan atau area teks, atau yang kompleks seperti pemilih tanggal. Lihat dokumentasi dev <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Ujian penerimaan</a> atau detail nilai ruas yang diharapkan.';
$string['giveninfo'] = 'Diberikan. Proses untuk menyiapkan lingkungan';
$string['infoheading'] = 'Info';
$string['installinfo'] = 'Baca {$a} untuk informasi pemasangan dan pengujian';
$string['newstepsinfo'] = 'Baca {$a} untuk info mengenai cara menambahkan definisi langkah baru';
$string['newtestsinfo'] = 'Baca {$a} untuk info tentang cara menulis pengujian baru';
$string['nostepsdefinitions'] = 'Tidak ada definisi langkah yang cocok dengan filter ini';
$string['pluginname'] = 'Ujian penerimaan';
$string['privacy:metadata'] = 'Pengaya pengujian penerimaan tidak menyimpan data pribadi apa pun.';
$string['stepsdefinitionscomponent'] = 'Area';
$string['stepsdefinitionscontains'] = 'Mengandung';
$string['stepsdefinitionsfilters'] = 'Definisi langkah';
$string['stepsdefinitionstype'] = 'Tipe';
$string['theninfo'] = 'Kemudian. Pemeriksaan untuk memastikan capaian sesuai dengan yang diharapkan';
$string['unknownexceptioninfo'] = 'Ada masalah dengan Selenium atau peladen Anda. Harap pastikan Anda menggunakan Selenium versi terbaru. Galat:';
$string['viewsteps'] = 'Filter';
$string['warndirrootconfigfound'] = 'Berkas konfigurasi ditemukan di {$a}. Berkas ini tidak diperbarui secara otomatis dan mungkin menjadi basi. Kami merekomendasikan untuk menghapus berkas ini.';
$string['wheninfo'] = 'Kapan. Tindakan yang memprovokasi suatu peristiwa';
$string['wrongbehatsetup'] = 'Ada yang salah dengan penyiapan behat sehingga definisi langkah tidak dapat dicantumkan: <b>{$a->errormsg}</b><br/><br/>Silakan cek:<ul> <li>$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot disetel di config.php dengan nilai yang berbeda dari $CFG->dataroot, $CFG->prefix dan $CFG->wwwroot.</li> <li>Anda jalankan "{$a->behatinit}" dari direktori root Moodle Anda.</li> <li>Dependensi dipasang di vendor/ dan {$a->behatcommand} berkas memiliki izin eksekusi.</li></ul>';
