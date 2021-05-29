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
 * Strings for component 'antivirus', language 'id', version '3.10'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Pengaya Antivirus yang tersedia';
$string['antiviruscommonsettings'] = 'Setelan umum antivirus';
$string['antiviruses'] = 'Pengaya antivirus';
$string['antivirussettings'] = 'Atur pengaya antivirus';
$string['configantivirusplugins'] = 'Pilih pengaya antivirus yang ingin Anda gunakan dan atur agar dapat diterapkan.';
$string['datainfecteddesc'] = 'Data terinfeksi terdeteksi.';
$string['datainfectedname'] = 'Data terinfeksi';
$string['datastream'] = 'Data';
$string['emailadditionalinfo'] = 'Detail tambahan yang dikembalikan dari mesin virus:';
$string['emailauthor'] = 'Diunggah oleh:';
$string['emailcontenthash'] = 'Hash konten:';
$string['emailcontenttype'] = 'Jenis konten:';
$string['emaildate'] = 'Tanggal unggah:';
$string['emailfilename'] = 'Nama berkas:';
$string['emailfilesize'] = 'Ukuran berkas';
$string['emailgeoinfo'] = 'Geolokasi:';
$string['emailinfectedfiledetected'] = 'Berkas yang terinfeksi terdeteksi';
$string['emailipaddress'] = 'Alamat IP:';
$string['emailreferer'] = 'Perujuk:';
$string['emailreport'] = 'Laporan:';
$string['emailscanner'] = 'Pemindai:';
$string['emailscannererrordetected'] = 'Terjadi kesalahan pemindai';
$string['emailsubject'] = '{$a} :: Notifikasi Antivirus';
$string['enablequarantine'] = 'Aktifkan karantina';
$string['enablequarantine_help'] = 'Jika diaktifkan, berkas apa pun yang terdeteksi sebagai virus akan ditempatkan di folder karantina ([dataroot]/{$a}) untuk pemeriksaan nanti. Pengunggahan ke Moodle akan gagal. Jika Anda memiliki pemindaian virus tingkat sistem berkas, folder karantina harus dikecualikan dari pemeriksaan antivirus untuk menghindari pendeteksian berkas yang dikarantina.';
$string['fileinfecteddesc'] = 'Berkas yang terinfeksi terdeteksi.';
$string['fileinfectedname'] = 'Berkas terinfeksi';
$string['notifyemail'] = 'Surel pemberitahuan peringatan antivirus';
$string['notifyemail_help'] = 'Alamat surel untuk pemberitahuan ketika virus terdeteksi. Jika dibiarkan kosong, maka semua administrator situs akan dikirimi notifikasi.';
$string['privacy:metadata'] = 'Sistem Antivirus tidak menyimpan data pribadi apa pun.';
$string['quarantinedfiles'] = 'Berkas yang dikarantina antivirus';
$string['quarantinedisabled'] = 'Karantina dinonaktifkan. Berkas tidak disimpan.';
$string['quarantinetime'] = 'Waktu karantina maksimum';
$string['quarantinetime_desc'] = 'Berkas yang dikarantina lebih lama dari periode yang ditentukan akan dihapus.';
$string['taskcleanup'] = 'Bersihkan berkas yang dikarantina.';
$string['unknown'] = 'Tidak diketahui';
$string['virusfound'] = '{$a->item} telah dipindai oleh pemeriksa virus dan ternyata terinfeksi!';
