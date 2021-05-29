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
 * Strings for component 'tool_generator', language 'id', version '3.10'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_noforuminstances'] = 'Kursus yang dipilih tidak berisi contoh modul forum';
$string['error_nopageinstances'] = 'Kursus yang dipilih tidak berisi model modul halaman';
$string['error_nouserspassword'] = 'Anda perlu menyetel $CFG->tool_generator_users_password di config.php untuk membuat rencana pengujian';
$string['testplanexplanation'] = 'Alat ini membuat file rencana pengujian JMeter bersama dengan berkas kredensial pengguna.

Paket pengujian ini dirancang untuk bekerja bersama dengan {$a}, yang mempermudah menjalankan rencana pengujian di lingkungan Moodle tertentu, mengumpulkan informasi tentang proses dan membandingkan hasilnya, jadi Anda perlu mengunduhnya dan menggunakannya test_runner.sh atau ikuti petunjuk pemasangan dan penggunaan.

Anda perlu menyetel kata sandi untuk pengguna kursus di config.php (mis. $CFG->tool_generator_users_password = \'moodle\';). Tidak ada nilai bawaan untuk kata sandi ini untuk mencegah penggunaan alat yang tidak diinginkan. Anda perlu menggunakan opsi perbarui kata sandi jika pengguna kursus Anda memiliki kata sandi lain atau dibuat oleh tool_generator tetapi tanpa menyetel nilai
$CFG->tool_generator_users_password.

Ini adalah bagian dari tool_generator sehingga bekerja dengan baik dengan kursus yang dihasilkan oleh kursus dan generator situs, itu dapat
juga digunakan dengan kursus apa pun yang berisi, setidaknya:

* Pengguna yang cukup terdaftar (tergantung pada ukuran paket pengujian yang Anda pilih) dengan pengaturan ulang kata sandi ke \'moodle\'
* Sebuah model modul halaman
* Sebuah model modul forum dengan setidaknya satu diskusi dan satu balasan

Anda mungkin ingin mempertimbangkan kapasitas peladen Anda saat menjalankan rencana pengujian besar sebagai jumlah untuk memuat yang dihasilkan oleh JMeter
bisa menjadi sangat besar. Periode peningkatan telah disesuaikan dengan jumlah thread (pengguna) untuk mengurangi jenis ini masalah tetapi bebannya masih besar.

** Jangan menjalankan rencana pengujian pada sistem langsung **. Fitur ini hanya membuat berkas untuk mengumpan JMeter sehingga tidak berbahaya sendiri, tetapi Anda harus ** TIDAK PERNAH ** menjalankan rencana pengujian ini di lokasi produksi.';
$string['updateuserspassword'] = 'Perbarui kata sandi pengguna kursus';
$string['updateuserspassword_help'] = 'JMeter perlu log masuk sebagai pengguna kursus, Anda dapat mengatur kata sandi pengguna menggunakan $CFG->tool_generator_users_password di config.php; setelan ini memperbarui sandi pengguna kursus sesuai dengan $CFG->tool_generator_users_password. Ini bisa berguna jika Anda menggunakan kursus yang tidak dibuat oleh tool_generator atau $CFG->tool_generator_users_password tidak disetel saat Anda membuat kursus pengujian.';
