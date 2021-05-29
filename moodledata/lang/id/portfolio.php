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
 * Strings for component 'portfolio', language 'id', version '3.10'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Selesaikan ekspor aktif';
$string['activeportfolios'] = 'Portofolio yang tersedia';
$string['addalltoportfolio'] = 'Ekspor semua ke portofolio';
$string['addnewportfolio'] = 'Tambahkan portofolio baru';
$string['addtoportfolio'] = 'Ekspor ke portofolio';
$string['alreadyalt'] = 'Sudah mengekspor - klik di sini untuk menyelesaikan transfer ini';
$string['alreadyexporting'] = 'Anda sudah memiliki ekspor portofolio aktif dalam sesi ini. Sebelum melanjutkan, Anda harus menyelesaikan ekspor ini atau membatalkannya. Apakah Anda ingin melanjutkannya? (Tidak akan membatalkannya)';
$string['availableformats'] = 'Format ekspor yang tersedia';
$string['callbackclassinvalid'] = 'Kelas callback yang ditentukan tidak valid atau bukan bagian dari hierarki portfolio_caller';
$string['callercouldnotpackage'] = 'Gagal mengemas data Anda untuk ekspor: kesalahan asli adalah {$a}';
$string['cannotsetvisible'] = 'Tidak dapat menyetel ini menjadi terlihat - pengaya telah sepenuhnya dinonaktifkan karena kesalahan konfigurasi';
$string['commonportfoliosettings'] = 'Setelan portofolio umum';
$string['commonsettingsdesc'] = '<p> Apakah transfer dianggap membutuhkan waktu \'Sedang\' atau \'Tinggi\', akan berubah apakah pengguna dapat menunggu hingga transfer selesai atau tidak. </p> <p> Mengukur hingga \'Sedang \'ambang batas terjadi begitu saja tanpa diminta pengguna, dan transfer\' Sedang \'dan\' Tinggi \'berarti mereka ditawari opsi tetapi diperingatkan bahwa mungkin perlu waktu. </p> <p> Selain itu, beberapa pengaya portofolio mungkin mengabaikan opsi ini sepenuhnya dan memaksa semua transfer untuk diantrekan. </p>';
$string['configexport'] = 'Konfigurasikan data yang diekspor';
$string['configplugin'] = 'Konfigurasikan pengaya portofolio';
$string['configure'] = 'Konfigurasi';
$string['confirmcancel'] = 'Apakah Anda yakin ingin membatalkan ekspor ini?';
$string['confirmexport'] = 'Harap konfirmasi ekspor ini';
$string['confirmsummary'] = 'Ringkasan ekspor';
$string['continuetoportfolio'] = 'Lanjutkan ke portofolio Anda';
$string['deleteportfolio'] = 'Hapus model portofolio';
$string['destination'] = 'Destinasi';
$string['disabled'] = 'Maaf, tetapi ekspor portofolio tidak diaktifkan di situs ini';
$string['disabledinstance'] = 'Dinonaktifkan';
$string['displayarea'] = 'Area ekspor';
$string['displayexpiry'] = 'Waktu kedaluwarsa transfer';
$string['displayinfo'] = 'Info ekspor';
$string['dontwait'] = 'Jangan tunggu';
$string['enabled'] = 'Aktifkan portofolio';
$string['enableddesc'] = 'Jika diaktifkan, pengguna dapat mengekspor konten, seperti kiriman forum dan pengajuan tugas, ke portofolio eksternal atau halaman HTML.';
$string['err_uniquename'] = 'Nama portofolio harus unik (per pengaya)';
$string['exportalreadyfinished'] = 'Ekspor portofolio selesai!';
$string['exportalreadyfinisheddesc'] = 'Ekspor portofolio selesai!';
$string['exportcomplete'] = 'Ekspor portofolio selesai!';
$string['exportedpreviously'] = 'Ekspor sebelumnya';
$string['exportexceptionnoexporter'] = 'portfolio_export_exception dilempar dengan sesi aktif tetapi tidak ada objek eksportir';
$string['exportexpired'] = 'Ekspor portofolio kedaluwarsa';
$string['exportexpireddesc'] = 'Anda mencoba mengulangi ekspor beberapa informasi, atau memulai ekspor kosong. Untuk melakukannya dengan benar, Anda harus kembali ke lokasi semula dan mulai lagi. Ini terkadang terjadi jika Anda menggunakan tombol kembali setelah ekspor selesai, atau dengan memarkahi url yang tidak valid.';
$string['exporting'] = 'Mengekspor ke portofolio';
$string['exportingcontentfrom'] = 'Mengekspor konten dari {$a}';
$string['exportingcontentto'] = 'Mengekspor konten ke {$a}';
$string['exportqueued'] = 'Ekspor portofolio berhasil diantrekan untuk ditransfer';
$string['exportqueuedforced'] = 'Ekspor portofolio telah berhasil diantrekan untuk transfer (sistem jarak jauh telah memberlakukan antrean transfer)';
$string['failedtopackage'] = 'Tidak dapat menemukan file untuk dikemas';
$string['failedtosendpackage'] = 'Gagal mengirim data Anda ke sistem portofolio yang dipilih: kesalahan asli adalah {$a}';
$string['filedenied'] = 'Akses ditolak ke berkas ini';
$string['filenotfound'] = 'Berkas tidak ditemukan';
$string['fileoutputnotsupported'] = 'Keluaran berkas penulisan ulang tidak didukung untuk format ini';
$string['format_document'] = 'Dokumen';
$string['format_file'] = 'Berkas';
$string['format_image'] = 'Gambar';
$string['format_leap2a'] = 'Format portofolio Leap2A';
$string['format_mbkp'] = 'Format cadangan Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Presentasi';
$string['format_richhtml'] = 'HTML dengan lampiran';
$string['format_spreadsheet'] = 'Lembar sebar';
$string['format_text'] = 'Teks biasa';
$string['format_video'] = 'Video';
$string['highdbsizethreshold'] = 'Transfer tinggi dbsize';
$string['highdbsizethresholddesc'] = 'Jumlah record db yang akan dianggap membutuhkan waktu lama untuk ditransfer';
$string['highfilesizethreshold'] = 'Ukuran file transfer tinggi';
$string['highfilesizethresholddesc'] = 'Berkas yang melebihi ambang batas ini akan dianggap membutuhkan waktu lama untuk ditransfer';
$string['insanebody'] = 'Hai! Anda menerima pesan ini sebagai administrator {$a->sitename}. Beberapa model pengaya portofolio telah dinonaktifkan secara otomatis karena kesalahan konfigurasi. Artinya, pengguna saat ini tidak dapat mengekspor konten ke portofolio ini. Daftar model pengaya portofolio yang telah dinonaktifkan adalah: {$a->textlist} Ini harus diperbaiki secepat mungkin, dengan mengunjungi {$a->fixurl}.';
$string['insanebodyhtml'] = '<p> Hai! Anda menerima pesan ini sebagai administrator {$a->sitename}. </p> <p> Beberapa model pengaya portofolio telah dinonaktifkan secara otomatis karena kesalahan konfigurasi. Artinya, pengguna saat ini tidak dapat mengekspor konten ke portofolio ini. </p> <p> Daftar model pengaya portofolio yang telah dinonaktifkan adalah: </p> {$a->htmllist} <p> Ini harus diperbaiki secepat mungkin, dengan mengunjungi <a href="{$a->fixurl} "> halaman konfigurasi portofolio </a> </p>';
$string['insanebodysmall'] = 'Hai! Anda menerima pesan ini sebagai administrator {$a->sitename}. Beberapa model pengaya portofolio telah dinonaktifkan secara otomatis karena kesalahan konfigurasi. Artinya, pengguna saat ini tidak dapat mengekspor konten ke portofolio ini. Ini harus diperbaiki secepat mungkin, dengan mengunjungi {$a->fixurl}.';
$string['insanesubject'] = 'Beberapa model portofolio dinonaktifkan secara otomatis';
$string['instancedeleted'] = 'Portofolio berhasil dihapus';
$string['instanceismisconfigured'] = 'Model portofolio salah konfigurasi, lewati. Kesalahannya adalah: {$a}';
$string['instancenotdelete'] = 'Gagal menghapus portofolio';
$string['instancenotsaved'] = 'Gagal menyimpan portofolio';
$string['instancesaved'] = 'Portofolio berhasil disimpan';
$string['intro'] = 'Konten yang telah Anda buat, seperti pengajuan tugas, kiriman forum, dan entri blog, dapat diekspor ke portofolio atau diunduh. <br> Portofolio apa pun yang tidak ingin Anda gunakan mungkin disembunyikan sehingga tidak terdaftar sebagai opsi untuk mengekspor konten.';
$string['invalidaddformat'] = 'Tambahkan format yang tidak valid diteruskan ke
 portfolio_add_button. ({$a}) Harus salah satu dari
PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'Tidak dapat menemukan properti ({$a}) dari portfolio_button';
$string['invalidconfigproperty'] = 'Tidak dapat menemukan properti konfigurasi ({$a->property} dari {$a->class})';
$string['invalidexportproperty'] = 'Tidak dapat menemukan properti konfigurasi ekspor ({$a->property} dari {$a->class})';
$string['invalidfileareaargs'] = 'Argumen area berkas tidak valid yang diteruskan ke set_file_and_format_data - harus berisi contextid, component, filearea dan itemid';
$string['invalidformat'] = 'Ada yang mengekspor format yang tidak valid, {$a}';
$string['invalidinstance'] = 'Tidak dapat menemukan model portofolio itu';
$string['invalidpreparepackagefile'] = 'Panggilan tidak valid ke prepared_package_file - baik tunggal maupun multifiles harus disetel';
$string['invalidproperty'] = 'Tidak dapat menemukan properti ({$a->property} dari {$a->class})';
$string['invalidsha1file'] = 'Panggilan tidak valid ke get_sha1_file - baik tunggal maupun multifiles harus disetel';
$string['invalidtempid'] = 'ID ekspor tidak valid. Mungkin sudah kedaluwarsa';
$string['invaliduserproperty'] = 'Tidak dapat menemukan properti konfigurasi pengguna ({$a->property} dari {$a->class})';
$string['leap2a_emptyselection'] = 'Nilai yang dibutuhkan tidak dipilih';
$string['leap2a_entryalreadyexists'] = 'Anda mencoba menambahkan entri Leap2A dengan id ({$a}) yang sudah ada di umpan ini';
$string['leap2a_feedtitle'] = 'Ekspor Leap2A dari Moodle untuk {$a}';
$string['leap2a_filecontent'] = 'Mencoba menyetel konten entri Leap2A ke berkas, daripada menggunakan subkelas berkas';
$string['leap2a_invalidentryfield'] = 'Anda mencoba menyetel ruas entri yang tidak ada ({$a}) atau Anda tidak dapat menyetel secara langsung';
$string['leap2a_invalidentryid'] = 'Anda mencoba mengakses entri dengan id yang tidak ada ({$a})';
$string['leap2a_missingfield'] = 'Ruas entri Leap2A yang diperlukan {$a} tidak ada';
$string['leap2a_nonexistantlink'] = 'Entri Leap2A ({$a->from}) mencoba menautkan ke entri yang tidak ada ({$a->to}) dengan rel {$a->rel}';
$string['leap2a_overwritingselection'] = 'Menimpa tipe asli entri ({$a}) ke pilihan di make_selection';
$string['leap2a_selflink'] = 'Entri Leap2A ({$a->id}) mencoba menautkan sendiri dengan rel {$a->rel}';
$string['logs'] = 'Log transfer';
$string['logsummary'] = 'Transfer sukses sebelumnya';
$string['manageportfolios'] = 'Kelola portofolio';
$string['manageyourportfolios'] = 'Kelola portofolio Anda';
$string['mimecheckfail'] = 'Pengaya portofolio {$a->plugin} tidak mendukung mimetype tersebut {$a->mimetype}';
$string['missingcallbackarg'] = 'Argumen callback tidak ada {$a->arg} untuk kelas {$a->class}';
$string['moderatedbsizethreshold'] = 'Ukuran transfer sedang';
$string['moderatedbsizethresholddesc'] = 'Jumlah data db yang akan dianggap memerlukan waktu transfer cukup lama';
$string['moderatefilesizethreshold'] = 'Ukuran berkas transfer sedang';
$string['moderatefilesizethresholddesc'] = 'Berkas yang melebihi ambang batas ini akan dianggap membutuhkan waktu transfer yang cukup lama';
$string['multipleinstancesdisallowed'] = 'Mencoba membuat pengaya lain dari pengaya yang tidak mengizinkan beberapa model ({$a})';
$string['mustsetcallbackoptions'] = 'Anda harus menyetel opsi callback baik dalam konstruktor portfolio_add_button atau menggunakan metode set_callback_options';
$string['noavailableplugins'] = 'Maaf, tidak ada portofolio yang tersedia untuk Anda ekspor';
$string['nocallbackclass'] = 'Tidak dapat menemukan kelas callback untuk digunakan ({$a})';
$string['nocallbackcomponent'] = 'Tidak dapat menemukan komponen yang ditentukan {$a}.';
$string['nocallbackfile'] = 'Sesuatu dalam modul yang Anda coba ekspor rusak - tidak dapat menemukan berkas portofolio yang diperlukan';
$string['noclassbeforeformats'] = 'Anda harus menyetel kelas callback sebelum memanggil set_formats di portfolio_button';
$string['nocommonformats'] = 'Tidak ada format umum antara pengaya portofolio yang tersedia dan lokasi panggilan {$a->location} (didukung pemanggil {$a->format})';
$string['noinstanceyet'] = 'Belum dipilih';
$string['nologs'] = 'Tidak ada log untuk ditampilkan!';
$string['nomultipleexports'] = 'Maaf, tapi tujuan portofolionya ({$a->plugin}) tidak mendukung banyak ekspor secara bersamaan.  Silakan <a href="{$a->link}">selesaikan yang sekarang dulu</a> dan coba lagi';
$string['nonprimative'] = 'Nilai non primitif diteruskan sebagai argumen callback ke portfolio_add_button. Menolak untuk melanjutkan. Kuncinya adalah {$a->key} dan nilainya adalah {$a->value}';
$string['nopermissions'] = 'Maaf, tetapi Anda tidak memiliki izin yang diperlukan untuk mengekspor berkas dari area ini';
$string['notexportable'] = 'Maaf, tetapi jenis konten yang Anda coba ekspor tidak dapat diekspor';
$string['notimplemented'] = 'Maaf, tetapi Anda mencoba mengekspor konten dalam beberapa format yang belum diterapkan ({$a})';
$string['notyetselected'] = 'Belum dipilih';
$string['notyours'] = 'Anda mencoba melanjutkan ekspor portofolio yang bukan milik Anda!';
$string['nouploaddirectory'] = 'Tidak dapat membuat direktori sementara untuk mengemas data Anda';
$string['off'] = 'Diaktifkan tapi tersembunyi';
$string['on'] = 'Diaktifkan dan terlihat';
$string['plugin'] = 'Pengaya portofolio';
$string['plugincouldnotpackage'] = 'Gagal mengemas data Anda untuk ekspor: kesalahan asli adalah {$a}';
$string['pluginismisconfigured'] = 'Pengaya portofolio salah dikonfigurasi, lewati. Kesalahan adalah: {$a}';
$string['portfolio'] = 'Portofolio';
$string['portfolios'] = 'Portofolio';
$string['privacy:metadata'] = 'Subsistem portofolio bertindak sebagai saluran, meneruskan permintaan dari pengaya ke berbagai pengaya portofolio.';
$string['privacy:metadata:instance'] = 'Identifikasi portofolio';
$string['privacy:metadata:instancesummary'] = 'Menyimpan data model portofolio dan preferensi.';
$string['privacy:metadata:name'] = 'Nama preferensi';
$string['privacy:metadata:portfolio_log'] = 'Log transfer portofolio (digunakan untuk memeriksa duplikat nanti)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Nama kelas yang digunakan untuk membuat transfer';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Nama komponen yang bertanggung jawab untuk mengekspor';
$string['privacy:metadata:portfolio_log:time'] = 'Waktu transfer (dalam kasus antrean transfer, ini adalah waktu transfer sebenarnya berjalan, bukan saat pengguna memulainya)';
$string['privacy:metadata:portfolio_log:userid'] = 'ID pengguna yang mengekspor konten';
$string['privacy:metadata:portfolio_tempdata'] = 'Menyimpan data sementara untuk ekspor portofolio.';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Ekspor data';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Waktu rekaman ini akan kedaluwarsa';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Model pengaya portofolio sedang digunakan';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Pengguna melakukan ekspor';
$string['privacy:metadata:userid'] = 'ID pengguna';
$string['privacy:metadata:value'] = 'Nilai preferensi';
$string['privacy:path'] = 'Model portofolio';
$string['queuesummary'] = 'Transfer saat ini antre';
$string['returntowhereyouwere'] = 'Kembali ke tempat Anda sebelumnya';
$string['save'] = 'Simpan';
$string['selectedformat'] = 'Format ekspor terpilih';
$string['selectedwait'] = 'Terpilih untuk menunggu?';
$string['selectplugin'] = 'Pilih destinasi';
$string['showhide'] = 'Tampilkan/Sembunyikan';
$string['singleinstancenomultiallowed'] = 'Hanya satu model pengaya portofolio yang tersedia, itu tidak mendukung beberapa ekspor per sesi, dan sudah ada ekspor aktif dalam sesi menggunakan pengaya ini!';
$string['somepluginsdisabled'] = 'Beberapa pengaya portofolio keseluruhan telah dinonaktifkan karena salah konfigurasi atau bergantung pada hal lain yaitu:';
$string['sure'] = 'Anda yakin ingin menghapus \'{$a}\'? Ini tidak dapat dibatalkan.';
$string['thirdpartyexception'] = 'Pengecualian pihak ketiga diberikan selama ekspor portofolio ({$a}). Tertangkap dan ditampilkan kembali tetapi ini harus benar-benar diperbaiki';
$string['transfertime'] = 'Waktu transfer';
$string['unknownplugin'] = 'Tidak diketahui (mungkin telah dihapus oleh administrator)';
$string['wait'] = 'Tunggu';
$string['wanttowait_high'] = 'Anda tidak disarankan untuk menunggu transfer ini selesai, tetapi Anda bisa jika Anda yakin dan tahu apa yang Anda lakukan';
$string['wanttowait_moderate'] = 'Apakah Anda ingin menunggu transfer ini? Mungkin perlu waktu beberapa menit';
