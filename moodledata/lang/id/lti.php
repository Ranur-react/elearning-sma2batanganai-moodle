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
 * Strings for component 'lti', language 'id', version '3.10'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept_grades_admin_help'] = 'Tentukan apakah penyedia alat dapat menambahkan, memperbarui, membaca, dan menghapus nilai yang terkait dengan model alat ini.

Beberapa penyedia alat mendukung nilai pelaporan kembali ke Moodle berdasarkan tindakan yang diambil di dalam alat tersebut, menciptakan lebih terintegrasi pengalaman.';
$string['accept_grades_help'] = 'Tentukan apakah penyedia alat dapat menambahkan, memperbarui, membaca, dan menghapus nilai yang hanya terkait dengan model alat eksternal ini.

Beberapa penyedia alat mendukung nilai pelaporan kembali ke Moodle berdasarkan tindakan yang diambil dalam alat tersebut, menciptakan pengalaman yang lebih terintegrasi.

Perhatikan bahwa setelan ini dapat diganti dalam konfigurasi alat.';
$string['configpassword'] = 'Kata sandi alat jarak jauh bawaan';
$string['external_tool_type_help'] = '* ** Otomatis, berdasarkan URL alat ** - Konfigurasi alat terbaik dipilih secara otomatis. Jika URL alat tidak dikenali, detail konfigurasi alat mungkin perlu dimasukkan secara manual.
* ** Alat khusus yang telah dikonfigurasikan ** - Konfigurasi alat untuk alat yang ditentukan akan digunakan saat berkomunikasi dengan penyedia alat eksternal. Jika URL alat tampaknya bukan milik penyedia alat, peringatan akan ditampilkan. Tidak selalu perlu memasukkan URL alat.
* ** Konfigurasi khusus ** - Kunci konsumen dan rahasia bersama mungkin perlu dimasukkan secara manual. Kunci konsumen dan rahasia bersama dapat diperoleh dari penyedia alat. Namun, tidak semua alat memerlukan kunci konsumen dan rahasia bersama, dalam hal ini ruas dapat dikosongkan.

### Pengeditan alat yang telah dikonfigurasi sebelumnya

Tiga ikon tersedia setelah menu tarik-turun alat yang telah dikonfigurasi sebelumnya:

* ** Tambahkan ** - Buat konfigurasi alat tingkat kursus. Semua model alat Eksternal dalam kursus ini dapat menggunakan konfigurasi alat.
* ** Edit ** - Pilih alat tingkat kursus dari menu tarik-turun, lalu klik ikon ini. Detail konfigurasi alat dapat diedit.
* ** Hapus ** - Hapus alat tingkat kursus yang dipilih.';
$string['filter_basiclti_configlink'] = 'Konfigurasikan situs pilihan Anda dan kata sandinya';
$string['filter_basiclti_password'] = 'Kata sandi wajib diisi';
$string['fixexistingconf'] = 'Gunakan konfigurasi yang ada untuk model yang salah dikonfigurasi';
$string['fixnewconf'] = 'Tentukan konfigurasi baru untuk model yang salah dikonfigurasi';
$string['lti_launch_error_unsigned_help'] = '<p> Kesalahan ini mungkin karena kunci konsumen dan rahasia bersama untuk penyedia alat tidak ada. </p>
<p> Jika Anda memiliki kunci konsumen dan rahasia bersama, Anda dapat memasukkannya saat model contoh alat eksternal (pastikan opsi lanjutan terlihat). </p>
<p> Atau, Anda dapat <a href="{$a->course_tool_editor} "> membuat konfigurasi penyedia alat tingkat kursus </a>. </p>';
$string['misconfiguredtools'] = 'Terdeteksi model alat yang salah dikonfigurasi';
$string['modulename_help'] = 'Modul aktivitas alat eksternal memungkinkan siswa untuk berinteraksi dengan sumber belajar dan aktivitas di situs web lain. Misalnya, alat eksternal dapat memberikan akses ke jenis aktivitas baru atau materi pembelajaran dari penerbit.

Untuk membuat aktivitas fitur eksternal, diperlukan penyedia fitur yang mendukung LTI (Learning Tools Interoperability). Seorang guru bisa membuat aktivitas alat eksternal atau menggunakan alat yang dikonfigurasi oleh administrator situs.

Aktivitas alat eksternal berbeda dari sumber URL dalam beberapa cara:

* Alat eksternal sadar konteks yaitu mereka memiliki akses ke informasi tentang pengguna yang meluncurkan alat, seperti institusi, kursus dan nama
* Alat eksternal mendukung membaca, memperbarui, dan menghapus nilai yang terkait dengan model aktivitas
* Konfigurasi alat eksternal menciptakan hubungan kepercayaan antara situs Anda dan penyedia alat, memungkinkan komunikasi yang aman di antara mereka';
$string['modulenameplural'] = 'Alat eksternal';
$string['modulenamepluralformatted'] = 'Model LTI';
$string['noattempts'] = 'Tidak ada upaya yang dilakukan pada model alat ini';
$string['noltis'] = 'Tidak ada model alat eksternal';
$string['organizationid_help'] = 'Pengenal unik untuk model Moodle ini. Biasanya, nama DNS organisasi digunakan.

Jika bidang ini dibiarkan kosong, nama host situs Moodle ini akan digunakan sebagai nilai bawaan.';
$string['organizationidguid_help'] = 'Pengenal unik untuk model Moodle ini diteruskan ke alat tersebut sebagai GUID Instance Platform.

Jika bidang ini dibiarkan kosong, nilai bawaan akan digunakan.';
$string['organizationurl_help'] = 'URL dasar dari model Moodle ini.

Jika bidang ini dibiarkan kosong, nilai bawaan akan digunakan berdasarkan konfigurasi situs.';
$string['password_admin_help'] = 'Rahasia bersama dapat dianggap sebagai kata sandi yang digunakan untuk mengotentikasi akses ke alat tersebut. Ini harus disediakan bersama dengan kunci konsumen dari penyedia alat.

Alat yang tidak memerlukan komunikasi aman dari Moodle dan tidak menyediakan layanan tambahan (seperti pelaporan nilai)
mungkin tidak membutuhkan rahasia bersama.';
$string['password_help'] = 'Untuk alat yang telah dikonfigurasi sebelumnya, tidak perlu memasukkan rahasia bersama di sini, karena rahasia bersama akan diberikan sebagai bagian dari proses konfigurasi.

Bidang ini harus dimasukkan jika membuat tautan ke penyedia alat yang belum dikonfigurasi. Jika penyedia alat akan digunakan lebih dari sekali dalam kursus ini, menambahkan konfigurasi alat kursus adalah ide yang bagus.

Rahasia bersama dapat dianggap sebagai kata sandi yang digunakan untuk mengotentikasi akses ke alat tersebut. Ini harus disediakan bersama dengan kunci konsumen dari penyedia alat.

Alat yang tidak memerlukan komunikasi aman dari Moodle dan tidak menyediakan layanan tambahan (seperti pelaporan nilai)
mungkin tidak membutuhkan rahasia bersama.';
$string['pluginname'] = 'Alat eksternal';
$string['resource'] = 'Sumber';
$string['toolurl_help'] = 'URL alat digunakan untuk mencocokkan URL alat dengan konfigurasi alat yang benar. Mengawali URL dengan http adalah opsional.

Selain itu, URL dasar digunakan sebagai URL alat jika URL alat tidak ditentukan dalam model alat eksternal.

Misalnya, URL dasar * tool.com * akan cocok dengan yang berikut:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

URL dasar * www.tool.com / quizzes * akan cocok dengan yang berikut:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

URL dasar * quiz.tool.com * akan cocok dengan yang berikut:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Jika dua konfigurasi alat berbeda untuk domain yang sama, pencocokan paling spesifik akan digunakan.

Anda juga dapat memasukkan URL kartrid jika Anda memilikinya dan detail alat akan terisi secara otomatis.';
