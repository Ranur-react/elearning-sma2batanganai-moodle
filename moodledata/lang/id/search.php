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
 * Strings for component 'search', language 'id', version '3.10'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Pencarian lanjutan';
$string['all'] = 'Semua';
$string['allareas'] = 'Semua area';
$string['allcourses'] = 'Semua kursus';
$string['allusers'] = 'Semua pengguna';
$string['author'] = 'Penulis';
$string['authorname'] = 'Nama penulis';
$string['back'] = 'Kembali';
$string['beadmin'] = 'Anda harus menjadi pengguna admin untuk menggunakan halaman ini.';
$string['checkdb'] = 'Periksa basis data';
$string['checkdbadvice'] = 'Periksa basis data untuk masalah apa pun';
$string['checkdir'] = 'Cek dir';
$string['checkdiradvice'] = 'Pastikan direktori data ada dan dapat ditulisi';
$string['commenton'] = 'Komentar aktif';
$string['confirm_delete'] = 'Apakah Anda yakin ingin menghapus indeks untuk {$a}? Sampai area pencarian diindeks, pengguna tidak akan mendapatkan hasil pencarian dari area ini.';
$string['confirm_deleteall'] = 'Anda yakin ingin menghapus semua konten yang diindeks sekarang? Sampai situs diindeks lagi, pengguna tidak akan mendapatkan hasil pencarian.';
$string['confirm_indexall'] = 'Yakin ingin memperbarui konten yang diindeks sekarang? Jika sejumlah besar konten perlu diindeks, ini bisa memakan waktu lama. Untuk peladen langsung, Anda biasanya harus membiarkan pengindeksan ke tugas terjadwal \'Pengindeksan pencarian global\'.';
$string['confirm_reindexall'] = 'Yakin ingin mengindeks ulang semua konten situs sekarang? Jika situs Anda mengandung sejumlah besar konten, ini akan memakan waktu lama, dan pengguna mungkin tidak mendapatkan hasil pencarian lengkap sampai selesai.';
$string['core-courses'] = 'Kursus';
$string['createanindex'] = 'membuat indeks';
$string['createdon'] = 'Dibuat pada';
$string['database'] = 'Basis data';
$string['databasestate'] = 'Status pengindeksan basis data';
$string['datadirectory'] = 'Direktori data';
$string['deleteindex'] = 'Hapus indeks {$a}';
$string['deletionsinindex'] = 'Penghapusan dalam indeks';
$string['docmodifiedon'] = 'Terakhir dimodifikasi pada {$a}';
$string['doctype'] = 'Tipe dokumen';
$string['doctypenotsupported'] = 'Jenis dokumen tertentu belum didukung';
$string['documents'] = 'dokumen';
$string['documentsfor'] = 'Dokumen untuk';
$string['documentsindatabase'] = 'Dokumen dalam basis data';
$string['documentsinindex'] = 'Dokumen dalam indeks';
$string['duration'] = 'Durasi';
$string['emptydatabaseerror'] = 'Tabel database tidak ada, atau tidak berisi catatan indeks.';
$string['enginenotfound'] = 'Mesin {$a} tidak ditemukan.';
$string['enginenotinstalled'] = 'Mesin {$a} tidak tidak terpasang.';
$string['enginenotselected'] = 'Anda belum memilih mesin pencari apa pun.';
$string['engineserverstatus'] = 'Mesin pencari tidak tersedia. Silakan hubungi administrator Anda.';
$string['enteryoursearchquery'] = 'Masukkan kueri pencarian';
$string['error_indexing'] = 'Terjadi kesalahan saat pengindeksan';
$string['errorareanotavailable'] = 'Area pencarian {$a} tidak tersedia.';
$string['errors'] = 'Galat';
$string['everywhere'] = 'Di mana pun Anda dapat mengakses';
$string['filesinindexdirectory'] = 'Berkas dalam direktori indeks';
$string['filterheader'] = 'Filter';
$string['fromtime'] = 'Diubah setelah';
$string['globalsearch'] = 'Pencarian global';
$string['globalsearchdisabled'] = 'Pencarian global tidak diaktifkan.';
$string['gradualreindex'] = 'Pengindeksan bertahap {$a}';
$string['gradualreindex_confirm'] = 'Anda yakin ingin mengindeks ulang {$a}? Ini mungkin memakan waktu, meskipun data yang ada akan tetap tersedia selama indeks ulang.';
$string['gradualreindex_queued'] = 'Proses pengindeksan ulang telah diminta untuk {$a->name} ({$a->count} konteks). Pengindeksan ini akan dilakukan oleh tugas terjadwal "Pengindeksan pencarian global".';
$string['incourse'] = 'dalam kursus {$a}';
$string['index'] = 'Indeks';
$string['indexwhendisabledfullnotice'] = 'Pengindeksan saat ini tidak diizinkan ketika pencarian dinonaktifkan. Untuk mengaktifkan ini, silakan lihat setelan
<a href="{$a->url}">searchindexwhendisabled </a>.';
$string['indexwhendisabledshortnotice'] = 'Pengindeksan tidak tersedia';
$string['invalidindexerror'] = 'Direktori indeks berisi indeks yang tidak valid, atau tidak ada sama sekali.';
$string['ittook'] = 'Dibutuhkan';
$string['matchingfile'] = 'Cocok dengan berkas
<span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Cocok dengan berkas:';
$string['next'] = 'Selanjutnya';
$string['noindexmessage'] = 'Admin: Tampaknya tidak ada indeks pencarian. Silakan';
$string['noresults'] = 'Tidak ada hasil';
$string['normalsearch'] = 'Pencarian normal';
$string['notitle'] = 'Tanpa judul';
$string['openedon'] = 'dibuka pada';
$string['optimize'] = 'Optimalkan';
$string['order'] = 'Urut hasil';
$string['order_location'] = 'Prioritaskan hasil yang terkait dengan {$a}';
$string['order_relevance'] = 'Hasil paling relevan terlebih dahulu';
$string['priority'] = 'Prioritas';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Pengindeksan ulang';
$string['privacy:metadata'] = 'Subsistem pencarian tidak menyimpan data pribadi apa pun.';
$string['progress'] = 'Kemajuan';
$string['queryerror'] = 'Kueri yang Anda berikan tidak dapat diuraikan oleh mesin pencari: {$a}';
$string['queueheading'] = 'Antrian pengindeksan tambahan ({$a} item)';
$string['resultsreturnedfor'] = 'hasil dikembalikan untuk';
$string['runindexer'] = 'Jalankan pengindeks (real)';
$string['runindexertest'] = 'Jalankan tes pengindeks';
$string['schemanotupdated'] = 'Skema pencarian kedaluwarsa.';
$string['schemaversionunknown'] = 'Mesin pencari tidak tahu tentang versi skema saat ini.';
$string['score'] = 'Skor';
$string['search'] = 'Pencarian';
$string['search:message_received'] = 'Pesan - diterima';
$string['search:message_sent'] = 'Pesan - terkirim';
$string['search:mycourse'] = 'Kursus saya';
$string['search:section'] = 'Bagian Kursus';
$string['search:user'] = 'Pengguna';
$string['searcharea'] = 'Area pencarian';
$string['searching'] = 'Pencarian dalam ...';
$string['searchnotpermitted'] = 'Anda tidak diizinkan melakukan pencarian';
$string['searchsetupdescription'] = 'Langkah-langkah berikut membantu Anda mengatur pencarian global Moodle.';
$string['searchwithin'] = 'Cari di dalam';
$string['seconds'] = 'detik';
$string['solutions'] = 'Solusi';
$string['statistics'] = 'Statistik';
$string['step'] = 'Langkah';
$string['thesewordshelpimproverank'] = 'Kata-kata ini membantu meningkatkan peringkat';
$string['thesewordsmustappear'] = 'Kata-kata ini harus muncul';
$string['thesewordsmustnotappear'] = 'Kata-kata ini tidak boleh muncul';
$string['title'] = 'Judul';
$string['tofetchtheseresults'] = 'untuk mengambil hasil ini';
$string['totalsize'] = 'Total ukuran';
$string['totime'] = 'Diubah sebelum';
$string['type'] = 'Tipe';
$string['uncompleteindexingerror'] = 'Pengindeksan tidak berhasil diselesaikan, silakan ulang kembali.';
$string['versiontoolow'] = 'Maaf, pencarian global memerlukan PHP 5.0.0 atau lebih baru';
$string['viewresultincontext'] = 'Lihat hasil ini dalam konteks';
$string['wordsintitle'] = 'Kata dalam judul';
