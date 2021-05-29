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
 * Strings for component 'enrol_imsenterprise', language 'id', version '3.10'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Setelah Anda menyimpan setelan Anda, Anda mungkin ingin';
$string['allowunenrol'] = 'Izinkan data IMS untuk <strong> membatalkan pendaftaran </strong> siswa/pengajar';
$string['allowunenrol_desc'] = 'Jika diaktifkan, pendaftaran kursus akan dihapus saat ditentukan di data Perusahaan.';
$string['basicsettings'] = 'Pengaturan dasar';
$string['categoryidnumber'] = 'Izinkan nomor ID kategori';
$string['categoryidnumber_desc'] = 'Jika diaktifkan, IMS Enterprise akan membuat kategori dengan nomor ID';
$string['categoryseparator'] = 'Karakter pemisah kategori';
$string['categoryseparator_desc'] = 'Diperlukan saat "Nomor ID kategori" diaktifkan. Karakter untuk memisahkan nama kategori dan nomor id.';
$string['coursesettings'] = 'Opsi data kursus';
$string['createnewcategories'] = 'Buat kategori kursus baru (tersembunyi) jika tidak ditemukan di Moodle';
$string['createnewcategories_desc'] = 'Jika elemen &lt;org&gt;&lt;orgunit&gt; ada di data masuk kursus, isinya akan digunakan untuk menentukan kategori jika kursus akan dibuat dari awal. Pengaya TIDAK akan mengkategorikan ulang kursus yang ada. Jika tidak ada kategori dengan nama yang diinginkan, maka kategori tersembunyi akan dibuat.';
$string['createnewcourses'] = 'Buat kursus baru (tersembunyi) jika tidak ditemukan di Moodle';
$string['createnewcourses_desc'] = 'Jika diaktifkan, pengaya pendaftaran IMS Enterprise dapat membuat kursus baru untuk semua yang ditemukannya di data IMS tetapi tidak di basis data Moodle. Semua kursus yang baru dibuat awalnya disembunyikan.';
$string['createnewusers'] = 'Buat akun pengguna untuk pengguna yang belum terdaftar di Moodle';
$string['createnewusers_desc'] = 'Data pendaftaran IMS Enterprise biasanya mendeskripsikan sekumpulan pengguna. Jika diaktifkan, akun dapat dibuat untuk setiap pengguna yang tidak ditemukan di basis data Moodle. Pengguna ditelusuri pertama kali dengan "nomor id" mereka, dan kedua dengan nama pengguna Moodle mereka. Sandi tidak diimpor oleh pengaya IMS Enterprise. Penggunaan pengaya autentikasi direkomendasikan untuk mengautentikasi pengguna.';
$string['cronfrequency'] = 'Frekuensi pemrosesan';
$string['deleteusers'] = 'Hapus akun pengguna saat ditentukan dalam data IMS';
$string['deleteusers_desc'] = 'Jika diaktifkan, data pendaftaran IMS Enterprise dapat menentukan penghapusan akun pengguna (jika tanda "status ulang" disetel ke 3, yang menunjukkan penghapusan akun). Seperti standar di Moodle, catatan pengguna sebenarnya tidak dihapus dari basis data Moodle, tetapi sebuah bendera disetel untuk menandai akun tersebut sebagai dihapus.';
$string['doitnow'] = 'lakukan impor IMS Enterprise sekarang';
$string['emptyattribute'] = 'Biarkan kosong';
$string['filelockedmail'] = 'Berkas teks yang Anda gunakan untuk pendaftaran berbasis berkas IMS ({$a}) tidak dapat dihapus oleh proses cron. Ini biasanya berarti izinnya salah. Harap perbaiki izin agar Moodle dapat menghapus file tersebut, jika tidak maka file akan diproses berulang kali.';
$string['filelockedmailsubject'] = 'Kesalahan penting: Berkas pendaftaran';
$string['fixcasepersonalnames'] = 'Ubah nama pribadi menjadi Besar kecil di bagian awal';
$string['fixcaseusernames'] = 'Ubah nama pengguna menjadi huruf kecil';
$string['ignore'] = 'Abaikan';
$string['importimsfile'] = 'Impor berkas IMS Enterprise';
$string['imsenterprise:config'] = 'Konfigurasikan model pendaftaran IMS Enterprise';
$string['imsenterprisecrontask'] = 'Pemrosesan berkas pendaftaran';
$string['imsrolesdescription'] = 'Spesifikasi IMS Enterprise mencakup 8 jenis peran yang berbeda. Silakan pilih bagaimana Anda ingin mereka ditugaskan di Moodle, termasuk apakah ada yang harus diabaikan.';
$string['location'] = 'Lokasi berkas';
$string['logtolocation'] = 'Lokasi keluaran berkas log (kosong jika tidak ada log)';
$string['mailadmins'] = 'Beri tahu admin melalui surel';
$string['mailusers'] = 'Beri tahu pengguna melalui surel';
$string['messageprovider:imsenterprise_enrolment'] = 'Pesan pendaftaran IMS Enterprise';
$string['miscsettings'] = 'Serbaneka';
$string['nestedcategories'] = 'Izinkan kategori bertingkat';
$string['nestedcategories_desc'] = 'Jika diaktifkan, IMS Enterprise akan membuat kategori bertingkat';
$string['pluginname'] = 'Berkas IMS Enterprise';
$string['pluginname_desc'] = 'Metode ini akan berulang kali memeriksa dan memproses berkas teks yang diformat khusus di lokasi yang Anda tentukan. Berkas tersebut harus mengikuti spesifikasi IMS Enterprise yang berisi elemen XML orang, grup, dan keanggotaan.';
$string['privacy:metadata'] = 'Pengaya pendaftaran berkas IMS Enterprise tidak menyimpan data pribadi apa pun.';
$string['processphoto'] = 'Tambahkan data foto pengguna ke profil';
$string['processphotowarning'] = 'Peringatan: Pemrosesan gambar kemungkinan akan menambah beban yang signifikan ke peladen. Anda disarankan untuk tidak mengaktifkan opsi ini jika diharapkan sejumlah besar siswa akan diproses.';
$string['restricttarget'] = 'Hanya proses data jika target berikut ditentukan';
$string['restricttarget_desc'] = 'Berkas data IMS Enterprise dapat ditujukan untuk beberapa "target" - LMS yang berbeda, atau sistem yang berbeda di dalam sekolah/universitas. Anda dapat menentukan dalam berkas Enterprise bahwa data tersebut ditujukan untuk satu atau beberapa sistem target bernama, dengan menamainya dalam tag <target> yang terdapat dalam tag <properties>. Secara umum Anda tidak perlu khawatir tentang ini. Biarkan setelan kosong dan Moodle akan selalu memproses berkas data, tidak peduli apakah target ditentukan atau tidak. Jika tidak, isi nama persis yang akan dihasilkan di dalam tag <target>.';
$string['roles'] = 'Peran';
$string['settingfullname'] = 'Tag deskripsi IMS untuk nama lengkap kursus';
$string['settingfullnamedescription'] = 'Nama lengkap adalah bidang kursus wajib sehingga Anda harus menentukan tag deskripsi yang dipilih di berkas IMS Enterprise Anda';
$string['settingshortname'] = 'Tag deskripsi IMS untuk nama pendek kursus';
$string['settingshortnamedescription'] = 'Nama pendek adalah bidang kursus wajib sehingga Anda harus menentukan tag deskripsi yang dipilih di berkas IMS Enterprise Anda';
$string['settingsummary'] = 'Tag deskripsi IMS untuk ringkasan kursus';
$string['settingsummarydescription'] = 'Merupakan bidang opsional, pilih \'Biarkan kosong\' jika Anda tidak ingin menentukan ringkasan kursus';
$string['sourcedidfallback'] = 'Gunakan \'sourcedid\' untuk userid pengguna jika kolom \'userid\' tidak ditemukan';
$string['sourcedidfallback_desc'] = 'Dalam data IMS, bidang <sourcedid> mewakili kode ID yang ada untuk seseorang seperti yang digunakan dalam sistem sumber. Bidang <userid> adalah bidang terpisah yang harus berisi kode ID yang digunakan oleh pengguna saat masuk. Dalam banyak kasus, kedua kode ini mungkin sama - tetapi tidak selalu. Beberapa sistem informasi siswa gagal mengeluarkan field <userid>. Jika demikian, Anda harus mengaktifkan setelan ini ini untuk memungkinkan penggunaan <sourcedid> sebagai ID pengguna Moodle. Jika tidak, biarkan setelan ini dinonaktifkan.';
$string['truncatecoursecodes'] = 'Pangkas kode kursus untuk sepanjang ini';
$string['truncatecoursecodes_desc'] = 'Dalam beberapa situasi Anda mungkin memiliki kode kursus yang ingin Anda potong ke panjang tertentu sebelum diproses. Jika ya, masukkan jumlah karakter di kotak ini. Jika tidak, biarkan kotak kosong dan tidak ada pemotongan yang akan terjadi.';
$string['updatecourses'] = 'Perbarui kursus';
$string['updatecourses_desc'] = 'Jika diaktifkan, pengaya pendaftaran IMS Enterprise dapat memperbarui nama lengkap dan pendek kursus (jika tanda "recstatus" disetel ke 2, yang menunjukkan pembaruan).';
$string['updateusers'] = 'Perbarui akun pengguna ketika ditentukan dalam data IMS';
$string['updateusers_desc'] = 'Jika diaktifkan, data pendaftaran IMS Enterprise dapat menentukan perubahan pada akun pengguna (jika tanda "status ulang" disetel ke 2, yang menunjukkan pembaruan).';
$string['usecapitafix'] = 'Centang kotak ini jika menggunakan Kapita (karena format XML-nya sedikit berbeda)';
$string['usecapitafix_desc'] = 'Centang kotak ini jika menggunakan Kapita (karena format XML-nya sedikit berbeda)';
$string['usersettings'] = 'Opsi data pengguna';
$string['zeroisnotruncation'] = '0 menunjukkan tidak ada pemotongan';
