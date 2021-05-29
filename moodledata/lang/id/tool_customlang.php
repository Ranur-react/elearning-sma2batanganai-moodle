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
 * Strings for component 'tool_customlang', language 'id', version '3.10'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Simpan string pada paket bahasa';
$string['checkout'] = 'Buka paket bahasa untuk disunting';
$string['checkoutdone'] = 'Paket bahasa termuat';
$string['checkoutinprogress'] = 'Memuat paket bahasa';
$string['cliexportfileexists'] = 'Berkas untuk {$a->lang} telah tersedia, lewati. Jika Anda ingin menimpanya tambahkan opsi --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Berkas {$a->filepath} tidak ditemukan untuk bahasa {$a->lang}. Lewati berkas ini.';
$string['cliexportheading'] = 'Mulai mengekspor berkas bahasa.';
$string['cliexportnofilefoundforlang'] = 'Berkas yang diekspor tidak ditemukan. Lewati ekspor untuk bahasa ini.';
$string['cliexportstartexport'] = 'Mengekspor bahasa {$a}';
$string['cliexportzipdone'] = 'Berkas zip dibuat: {$a}';
$string['cliexportzipfail'] = 'Tidak dapat membuat berkas zip {$a}';
$string['clifiles'] = 'Berkas untuk diimpor ke {$a}';
$string['cliimporting'] = 'Impor berkas string (mode {$a})';
$string['climissingfiles'] = 'Berkas valid tidak ada';
$string['climissinglang'] = 'Bahasa tidak ada';
$string['climissingmode'] = 'Tidak ada atau mode invalid (valid adalah semua, baru atau pembaruan)';
$string['climissingsource'] = 'Tidak ada berkas atau folder';
$string['clinolog'] = 'Tidak ada yang diimpor ke {$a}';
$string['confirmcheckin'] = 'Anda akan menyimpan modifikasi pada paket bahasa lokal Anda. Ini akan mengekspor string yang disesuaikan dari penerjemah ke direktori data situs Anda dan situs Anda akan mulai menggunakan string yang dimodifikasi. Tekan \'Lanjutkan\' untuk melanjutkan dengan menyimpan.';
$string['customlang:edit'] = 'Sunting terjemahan lokal';
$string['customlang:export'] = 'Ekspor terjemahan lokal';
$string['customlang:view'] = 'Lihat terjemahan lokal';
$string['export'] = 'Ekspor string ubahan';
$string['exportfilter'] = 'Pilih komponen untuk diekspor';
$string['filter'] = 'Filter string';
$string['filtercomponent'] = 'Tampilkan string komponen berikut';
$string['filtercustomized'] = 'Hanya string ubahan saja';
$string['filtermodified'] = 'Diubah hanya dalam sesi ini';
$string['filteronlyhelps'] = 'Hanya bantuan';
$string['filtershowstrings'] = 'Tampilkan string';
$string['filterstringid'] = 'Pengenal string';
$string['filtersubstring'] = 'Hanya string yang berisi';
$string['headingcomponent'] = 'Komponen';
$string['headinglocal'] = 'Penyesuaian lokal';
$string['headingstandard'] = 'Teks standard';
$string['headingstringid'] = 'String';
$string['import'] = 'Impor string ubahan';
$string['import_all'] = 'Buat atau perbarui semua string dari komponen';
$string['import_mode'] = 'Mode impor';
$string['import_new'] = 'Hanya membuat string tanpa kustomisasi lokal';
$string['import_update'] = 'Hanya pembaruan string dengan dengan kustomisasi lokal';
$string['importfile'] = 'Impor berkas';
$string['langpack'] = 'Komponen bahasa';
$string['markinguptodate'] = 'Tandai kustomisasi sebagai terkini';
$string['markinguptodate_help'] = 'Terjemahan ubahsuaian mungkin menjadi usang jika terjemahan asli atau master dalam bahasa Inggris telah dimodifikasi sejak string diubahsuaikan di situs Anda. Tinjau terjemahan yang disesuaikan. Jika menurut Anda versi terbaru, klik kotak centang. Edit sebaliknya.';
$string['markuptodate'] = 'tandai sebagai terkini';
$string['modifiedno'] = 'Tidak ada string ubahan yang perlu disimpan.';
$string['modifiednum'] = 'Terdapat {$a} string ubahan. Anda ingin menyimpannya pada paket bahasa lokal?';
$string['nolocallang'] = 'Tidak ditemukan string lokal.';
$string['nostringsfound'] = 'String tidak ditemukan, silakan ubah setelah filter';
$string['notice_ignorenew'] = 'Abaikan string {$a->component}/{$a->stringid} karena tidak diubahsuai.';
$string['notice_ignoreupdate'] = 'Abaikan string {$a->component}/{$a->stringid} karena sudah ditentukan.';
$string['notice_inexitentstring'] = 'String {$a->component}/{$a->stringid} tidak ditemukan.';
$string['notice_missingcomponent'] = 'Tidak terdapat komponen {$a->component}.';
$string['notice_success'] = 'String {$a->component}/{$a->stringid} berhasil diperbarui.';
$string['placeholder'] = 'Placeholder';
$string['placeholder_help'] = 'Placeholder adalah pernyataan khusus seperti `{$a}` atau `{$a->something}` di dalam string. Mereka diganti dengan nilai ketika string benar-benar dicetak. Penting untuk menyalinnya persis seperti di string aslinya. Jangan menerjemahkannya atau mengubah orientasi kiri-ke-kanannya.';
$string['placeholderwarning'] = 'string berisi placeholder';
$string['pluginname'] = 'Kustomisasi bahasa';
$string['privacy:metadata'] = 'Pengaya kustomisasi bahasa tidak menyimpan data pribadi.';
$string['savecheckin'] = 'Simpan perubahan pada paket bahasa';
$string['savecontinue'] = 'Terapkan perubahan dan lanjutkan penyuntingan';
