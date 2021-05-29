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
 * Strings for component 'qtype_numerical', language 'id', version '3.10'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Kosong untuk {no} banyak jawaban';
$string['addmoreunitblanks'] = 'Kosong untuk {no} banyak unit.';
$string['answercolon'] = 'Jawaban:';
$string['answererror'] = 'Error';
$string['answermustbenumberorstar'] = 'Jawaban harus ditulis dengan angka, contohnya -1.234 atau 3e8, atau \'*\'.';
$string['answerno'] = 'Jawaban {$a}';
$string['decimalformat'] = 'desimal';
$string['errornomultiplier'] = 'Anda harus menentukan pengganda untuk unit ini.';
$string['errorrepeatedunit'] = 'Anda tidak diperkenankan memiliki dua unit dengan nama yang sama.';
$string['geometric'] = 'Geometri';
$string['invalidnumber'] = 'Anda harus memasukan angka yang valid.';
$string['invalidnumbernounit'] = 'Anda haru memasukan angka yang valid. Jangan memasukan unit ke dalam responmu';
$string['invalidnumericanswer'] = 'Satu dari jawaban yang baru saja anda masukan bukan angka valid.';
$string['invalidnumerictolerance'] = 'Toleransi yang baru saja anda masukan bukan angka yang valid.';
$string['leftexample'] = 'disebelah kiri, contohnya $1.00 atau £1.00';
$string['manynumerical'] = 'Unit adalah opsional. Jika unit dimasukan, maka itu akan digunakan untuk mengubah respon ke Unit 1 sebelom dinilai.';
$string['multiplier'] = 'Pengganda';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'Tulisan yang TIDAK dapat diubah dari teks Unit No 1';
$string['nonvalidcharactersinnumber'] = 'Karakter TIDAK valid ada di angka';
$string['notenoughanswers'] = 'Setidaknya anda harus memasukan satu jawaban.';
$string['numericalmultiplier'] = 'Pengganda';
$string['numericalmultiplier_help'] = 'Nilai pengganda adalah sebuah faktor dimana respon angka yang benar akan digandakan.

Unit pertama (Unit 1) memiliki pengganda 1 . Maka dari itu, jika respon angka yang benar adalah 5500 dan anda memisalkan W sebagai Unit 1 yang dimmana memiliki 1 sebagai pengganda tetap, maka respon yang benar adalah 5500 W.

Jika ada menambahkan unit kW dengan nilai pengganda (pengali) 0,001 maka ini akan memberikan respon tepat sebesar 5.5kW. Artinya, jawaban 5500W atau 5.5kW akan dianggap benar

Pastikan kesalahan yang diperbolehkan disertakan juga, jadi contoh kesalahan yang diperbolehkan adalah 100W menjadi 0.1kW.';
$string['oneunitshown'] = 'Unit 1 otomatis terpampang disebelah kotak jawaban.';
$string['onlynumerical'] = 'Unit sama sekali tidak digunakan. Hanya angka numeral yang dinilai';
$string['pleaseenterananswer'] = 'Tolong masukan jawaban.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Tolong masukan jawaban anda tanpa menggunakan pemisah angka ribuan ({$a}).';
$string['pluginname'] = 'Numerik';
$string['pluginname_help'] = 'Dari perspektif pelajar, sebuah soal numerik sama seperti soal jawaban singkat. Perbedaannya, jawaban numerial diperbolehkan menggunakan angka toleransi yang tetap. Hal ini berlaku dengan jarak jawaban pasti yang bisa diambil menjadi satu jawaban. Contohnya, Jika jawaban suatu soal adalah 10 dengan angka toleransi sebesar 2, maka jawaban diantara angka 8 sampai 12 akan diterima sebagai jawaban yang benar';
$string['pluginnameadding'] = 'Menambahkan sebuah pertanyaan Numerik';
$string['pluginnameediting'] = 'Mengubah soal numerik';
$string['pluginnamesummary'] = 'Respon diperbolehkan menggunakan angka, mungkin dengan satuan, yang dinilai dengan membandingkan beberapa contoh jawaban, mungkin dengan toleransi';
$string['privacy:metadata'] = 'Plugin Tipe soal numerik tidak akan menyimpan data personal';
$string['selectunit'] = 'Pilih satu unit:';
