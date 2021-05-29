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
 * Strings for component 'rating', language 'id', version '3.10'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Rata-rata penilaian';
$string['aggregatecount'] = 'Hitungan penilaian';
$string['aggregatemax'] = 'Penilaian maksimum';
$string['aggregatemin'] = 'Penilaian minimum';
$string['aggregatenone'] = 'Tidak ada penilaian';
$string['aggregatesum'] = 'Jumlah seluruh penilaian';
$string['aggregatetype'] = 'Tipe agregat';
$string['aggregatetype_help'] = 'Tipe agregat mendefinisikan bagaimana beberapa penilaian dikombinasikan yang kemudian membentuk nilai akhir pada buku nilai
*Rata-rata penilaian - Menunjukkan rata-rata seluruh penilaian yang ada
*Hitungan penilaian - Jumlah butir yang dinilai menjadi nilai akhir. Perhatikan bahwa jumlah tidak dapat melebihi nilai maksimum untuk aktivitas tersebut
*Penilaian maksimum - Penilaian tertinggi menjadi nilai akhir
*Penilaian Minimum - Penilaian terendah menjadi nilai akhir
*Jumlah seluruh penilaian - Seluruh penilaian disatukan. Perhatikan bahwa jumlah tidak dapat melebihi nilai maksimum untuk aktivitas tersebut.
Apabila "Tidak ada penilaian" dipilih, maka aktivitas tersebut tidak akan muncul pada buku nilai.';
$string['allowratings'] = 'Izinkan butir untuk dinilai?';
$string['allratingsforitem'] = 'Semua penilaian yang telah diberikan';
$string['capabilitychecknotavailable'] = 'Pemeriksaan kemampuan tidak tersedia hingga aktivitas tersimpan';
$string['couldnotdeleteratings'] = 'Maaf, penghapusan gagal karena rating telah diisi';
$string['norate'] = 'Penilaian butir tidak diizinkan!';
$string['noratings'] = 'Tidak ada penilaian yang telah diberikan';
$string['noviewanyrate'] = 'Anda hanya dapat melihat hasil dari butir yang telah anda buat';
$string['noviewrate'] = 'Anda tidak memiliki otoritas untuk melihat penilaian butir';
$string['rate'] = 'Beri penilaian';
$string['ratepermissiondenied'] = 'Anda tidak diizinkan untuk memberi penilaian pada butir ini';
$string['rating'] = 'Penilaian';
$string['ratinginvalid'] = 'Penilaian tidak sah';
$string['ratings'] = 'Penilaian-penilaian';
$string['ratingtime'] = 'Jangan beri penilaian pada butir pada kisaran tanggal berikut:';
$string['rolewarning'] = 'Peranan-peranan yang diizinkan memberi penilaian';
$string['rolewarning_help'] = 'Untuk memberikan penilaian, para pengguna membutuhkan moodle/penilaian: Kemampuan penilaian dan segala kemampuan spesifik modul. Para pengguna yang memiliki peranan berikut seharusnya dapat memberi penilaian. Daftar peranan dapat diubah melalui tautan permintaan izin pada blok administrasi.';
$string['scaleselectionrequired'] = 'Ketika memilih tipe penilaian agregat, anda harus juga memilih untuk menggunakan skala atau menentukan nilai maksimum.';
