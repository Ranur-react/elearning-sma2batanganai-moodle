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
 * Strings for component 'block', language 'id', version '3.10'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'Pindahkan ke dok';
$string['anypagematchingtheabove'] = 'Halaman mana saja yang cocok dengan di atas';
$string['appearsinsubcontexts'] = 'Muncul di subkonteks';
$string['assignrolesinblock'] = 'Terapkan peran pada blok {$a}';
$string['blocksdrawertoggle'] = 'Sembunyikan/tampilkan laci blok';
$string['blocksettings'] = 'Setelan blok';
$string['bracketfirst'] = '{$a} (pertama)';
$string['bracketlast'] = '{$a} (terakhir)';
$string['configureblock'] = 'Atur blok {$a}';
$string['contexts'] = 'Konteks halaman';
$string['contexts_help'] = 'Konteks adalah jenis halaman yang lebih spesifik di mana blok ini dapat ditampilkan dalam lokasi blok asli. Anda akan memiliki berbagai opsi di sini tergantung pada lokasi blok asli dan lokasi Anda saat ini. Misalnya, Anda dapat membatasi blok hanya muncul di halaman forum dalam suatu kursus dengan menambahkan blok ke kursus (membuatnya muncul di semua sub-halaman), kemudian masuk ke forum dan mengedit pengaturn blok lagi untuk membatasi tampilan untuk hanya halaman forum.';
$string['createdat'] = 'Lokasi asli blok';
$string['createdat_help'] = 'Lokasi asli blok adalah tempat dimana pertama kali blok dibuat. Pengaturan blok dapat menyebabkannya muncul di lokasi lain (konteks) dalam lokasi asli. Misalnya, blok yang dibuat pada halaman kursus dapat ditampilkan dalam aktivitas dalam kursus itu. Blok yang dibuat di halaman depan dapat ditampilkan di seluruh situs.';
$string['defaultregion'] = 'Wilayah bawaan';
$string['defaultregion_help'] = 'Tema dapat menetapkan satu atau beberapa wilayah blok bernama di mana blok ditampilkan. Pengaturan ini menentukan dimana  Anda ingin blok ini muncul secara bawaan. Wilayah dapat dikesampingkan pada halaman tertentu jika diperlukan.';
$string['defaultweight'] = 'Bobot bawaan';
$string['defaultweight_help'] = 'Bobot bawaan memungkinkan Anda untuk memilih kira-kira di mana Anda ingin blok muncul di region yang dipilih, baik di bagian atas atau bawah. Lokasi akhir dihitung dari semua blok di region itu (misalnya, hanya satu blok yang benar-benar dapat berada di atas). Nilai ini dapat dikesampingkan pada halaman tertentu jika diperlukan.';
$string['deleteblock'] = 'Hapus blok {$a}';
$string['deleteblockcheck'] = 'Apakah anda yakin untuk menghapus blok {$a}?';
$string['deleteblockwarning'] = '<p> Anda akan menghapus blok yang muncul di tempat lain. </p> <p> Lokasi blok asli: {$a->location} <br /> Tampilkan jenis halaman: {$a->pagetype} </ p> <p> Anda yakin ingin melanjutkan? </p>';
$string['deletecheck'] = 'Hapus blok {$a}?';
$string['dockblock'] = 'Pasang blok {$a}';
$string['hideblock'] = 'Sembunyikan blok {$a}';
$string['hidedockpanel'] = 'Sembunyikan panel dok';
$string['hidepanel'] = 'Sembunyikan panel';
$string['moveblock'] = 'Pindahkan blok {$a}';
$string['moveblockafter'] = 'Pindahkan blok ke lokasi setelah blok {$a}';
$string['moveblockbefore'] = 'Pindahkan blok ke lokasi sebelum blok {$a}';
$string['moveblockinregion'] = 'Pindahkan blok ke wilayah {$a}';
$string['movingthisblockcancel'] = 'Memindahkan blok ini ({$a})';
$string['myblocks'] = 'Blok saya';
$string['onthispage'] = 'Pada laman ini';
$string['pagetypes'] = 'Tipe laman';
$string['pagetypewarning'] = 'Tipe laman yang ditentukan sebelumnya tidak lagi dapat dipilih. Silakan pilih jenis laman yang paling sesuai di bawah ini.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Rekam ketika pengguna memasak blok';
$string['privacy:metadata:userpref:hiddenblock'] = 'Rekam ketika pengguna  menciutkan/menyembunyikan blok';
$string['privacy:request:blockisdocked'] = 'Menunjukkan apakah blok telah dipasang';
$string['privacy:request:blockishidden'] = 'Menunjukkan apakah blok disembunyikan/diciutkan';
$string['region'] = 'Wilayah';
$string['restrictpagetypes'] = 'Tampilkan pada tipe laman';
$string['showblock'] = 'Tampilkan blok {$a}';
$string['showoncontextandsubs'] = 'Tampilkan pada \'{$a}\' dan semua laman di dalamnya';
$string['showoncontextonly'] = 'Tampilkan pada \'{$a}\' saja';
$string['showonentiresite'] = 'Tampilkan pada keseluruhan situs';
$string['showonfrontpageandsubs'] = 'Tampilan di beranda dan laman apa saja yang ditambahkan ke laman beranda';
$string['showonfrontpageonly'] = 'Tampilkan pada beranda saja';
$string['subpages'] = 'Pilih laman';
$string['thisspecificpage'] = 'Laman tertentu';
$string['undockall'] = 'Bongkar semua';
$string['undockblock'] = 'Bongkar blok {$a}';
$string['undockitem'] = 'Bongkar item ini';
$string['visible'] = 'Dapat dilihat';
$string['weight'] = 'Bobot';
$string['wherethisblockappears'] = 'Dimana blok ini akan muncul';
