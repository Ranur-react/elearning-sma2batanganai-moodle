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
 * Strings for component 'plugin', language 'id', version '3.10'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aksi';
$string['availability'] = 'Ketersediaan';
$string['cancelinstallall'] = 'Batalkan instalasi ({$a}) baru';
$string['cancelinstallhead'] = 'Membatalkan instalasi pengaya';
$string['cancelinstallinfo'] = 'Pengaya berikut belum dipasang sepenuhnya sehingga instalasinya dapat dibatalkan. Untuk melakukannya, folder pengaya harus dihapus dari server sekarang. Pastikan ini benar-benar yang Anda inginkan untuk mencegah kehilangan data yang tidak disengaja (seperti modifikasi kode Anda sendiri).';
$string['cancelinstallinfodir'] = 'Folder untuk dihapus {$a}';
$string['cancelinstallone'] = 'Batalkan pemasangan ini';
$string['cancelupgradeall'] = 'Batalkan peningkatan ({$a})';
$string['cancelupgradehead'] = 'Memulihkan pengaya ke versi sebelumnya';
$string['cancelupgradeone'] = 'Batalkan peningkatan ini';
$string['checkforupdates'] = 'Cek pembaruan yang tersedia';
$string['checkforupdateslast'] = 'Pengecekan terakhir dilakukan pada {$a}';
$string['dependencyavailable'] = 'Tersedia';
$string['dependencyfails'] = 'Gagal';
$string['dependencyinstall'] = 'Instal';
$string['dependencyinstallhead'] = 'Menginstal dependensi yang hilang';
$string['dependencyinstallmissing'] = 'Menginstall dependensi ({$a}) yang hilang';
$string['dependencymissing'] = 'Hilang';
$string['dependencyunavailable'] = 'Tidak tersedia';
$string['dependencyupload'] = 'Unggah';
$string['dependencyuploadmissing'] = 'Unggah berkas ZIP';
$string['detectedmisplacedplugin'] = 'Pengaya "{$a->component}" terinstal di lokasi yang salah "{$a->current}", lokasi yang seharusnya adalah "{$a->expected}"';
$string['displayname'] = 'Nama pengaya';
$string['err_response_curl'] = 'Tidak dapat mengambil data pembaruan yang tersedia - kesalahan cURL yang tidak terduga.';
$string['err_response_format_version'] = 'Terdapat versi yang tidak diharapkan dari format respons. Harap coba periksa kembali pembaruan yang tersedia.';
$string['err_response_http_code'] = 'Tidak dapat mengambil data pembaruan yang tersedia - kode tanggapan HTTP yang tidak terduga.';
$string['filterall'] = 'Tampilkan semua';
$string['filtercontribonly'] = 'Tampilkan pengaya tambahan saja';
$string['filterupdatesonly'] = 'Tampilkan yang dapat diperbarui saja';
$string['incompatibleversion'] = 'Versi Moodle tidak kompatibel: {$a}';
$string['isenabled'] = 'Diaktifkan?';
$string['misdepinfoplugin'] = 'Info pengaya';
$string['misdepinfoversion'] = 'Info versi';
$string['misdepsavail'] = 'Dependensi hilang yang tersedia';
$string['misdepsunavail'] = 'Dependensi hilang yang tidak tersedia';
$string['misdepsunavaillist'] = 'Tidak ada versi yang ditemukan untuk memenuhi permintaan dependensi: {$a}.';
$string['misdepsunknownlist'] = 'Tidak ada di direktori Pengaya: <strong> {$a} </strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Tidak ada tipe pengaya seperti ini yang terinstal';
$string['notdownloadable'] = 'Tidak dapat mengunduh paket';
$string['notdownloadable_help'] = 'Paket ZIP dengan pembaruan tidak dapat diunduh secara otomatis. Silakan merujuk ke halaman dokumentasi untuk bantuan lebih lanjut.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Catatan';
$string['notsupported'] = 'Pengaya mungkin tidak kompatibel dengan versi Moodle {$a}';
$string['notwritable'] = 'Berkas pengaya tidak dapat ditulisi';
$string['notwritable_help'] = 'Berkas pengaya tidak dapat ditulis oleh server web. Proses server web harus memiliki akses tulis ke folder pengaya dan semua isinya. Akses tulis ke folder root dari jenis pengaya yang diberikan mungkin juga diperlukan.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Semua pengaya';
$string['overviewext'] = 'Pengaya tambahan';
$string['overviewupdatable'] = 'Pembaruan yang tersedia';
$string['packagesdebug'] = 'Keluaran pengawakutuan diaktifkan';
$string['packagesdownloading'] = 'Mengunduh {$a}';
$string['packagesextracting'] = 'Mengekstrak {$a}';
$string['packagesvalidating'] = 'Memvalidasi {$a}';
$string['packagesvalidatingfailed'] = 'Penginstalan dibatalkan karena kegagalan validasi';
$string['packagesvalidatingok'] = 'Validasi sukses, penginstalan dapat dilanjutkan';
$string['plugincheckall'] = 'Semua pengaya';
$string['plugincheckattention'] = 'Pengaya yang perlu perhatian';
$string['pluginchecknone'] = 'Tidak ada pengaya yang perlu perhatian sekarang';
$string['pluginchecknotice'] = 'Halaman ini menampilkan pengaya yang mungkin perlu diperhatikan pada saat peningkatan, seperti pengaya baru yang akan diinstal, pengaya yang akan diperbarui, pengaya yang hilang, dll. Pengaya tambahan akan ditampilkan apabila ada pembaruan yang tersedia untuk pengaya tersebut. Anda disarankan untuk memeriksa apakah versi pengaya terbaru tersedia dan pembaruan kode sumber sebelum melanjutkan peningkatan pembaruan Moodle.';
$string['plugindisable'] = 'Nonaktifkan';
$string['plugindisabled'] = 'Dinonaktifkan';
$string['pluginenable'] = 'Aktifkan';
$string['pluginenabled'] = 'Diaktifkan';
$string['release'] = 'Rilis';
$string['requiredby'] = 'Dibutuhkan oleh: {$a}';
$string['requires'] = 'Membutuhkan';
$string['rootdir'] = 'Direktori';
$string['settings'] = 'Setelan';
$string['source'] = 'Sumber';
$string['sourceext'] = 'Tambahan';
$string['sourcestd'] = 'Standar';
$string['status'] = 'Status';
$string['status_delete'] = 'Akan dihapus';
$string['status_downgrade'] = 'Versi yang lebih mutakhir telah terinstal';
$string['status_missing'] = 'Hilang dari diska!';
$string['status_new'] = 'Untuk dipasang';
$string['status_nodb'] = 'Tidak ada basis data';
$string['status_upgrade'] = 'Untuk ditingkatkan';
$string['status_uptodate'] = 'Telah diinstal';
$string['supportedconversions'] = 'Konversi dokumen yang didukung';
$string['supportedmoodleversions'] = 'Versi Moodle yang didukung';
$string['systemname'] = 'Pengidentifikasi';
$string['type_antivirus'] = 'Pengaya antivirus';
$string['type_antivirus_plural'] = 'Pengaya antivirus';
$string['type_auth'] = 'Metode autentikasi';
$string['type_auth_plural'] = 'Metode autentikasi';
$string['type_availability'] = 'Pembatasan ketersediaan';
$string['type_availability_plural'] = 'Pembatasan ketersediaan';
$string['type_block'] = 'Blok';
$string['type_block_plural'] = 'Blok';
$string['type_cachelock'] = 'Penangan kunci tembolok';
$string['type_cachelock_plural'] = 'Penangan kunci tembolok';
$string['type_cachestore'] = 'Penyimpanan tembolok';
$string['type_cachestore_plural'] = 'Penyimpanan tembolok';
$string['type_calendartype'] = 'Tipe kalender';
$string['type_calendartype_plural'] = 'Tipe kalender';
$string['type_contentbank'] = 'Bank konten';
$string['type_contentbank_plural'] = 'Pengaya bank konten';
$string['type_coursereport'] = 'Laporan kursus';
$string['type_coursereport_plural'] = 'Laporan kursus';
$string['type_customfield'] = 'Ruas tersuai';
$string['type_customfield_plural'] = 'Ruas tersuai';
$string['type_dataformat'] = 'Format data';
$string['type_dataformat_plural'] = 'Format data';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editor';
$string['type_enrol'] = 'Metode pendaftaran';
$string['type_enrol_plural'] = 'Metode pendaftaran';
$string['type_fileconverter'] = 'Konverter dokumen';
$string['type_fileconverter_plural'] = 'Konverter dokumen';
$string['type_fileconvertermanage'] = 'Kelola konverter dokumen';
$string['type_filter'] = 'Filter teks';
$string['type_filter_plural'] = 'Filter teks';
$string['type_format'] = 'Format kursus';
$string['type_format_plural'] = 'Format kursus';
$string['type_gradeexport'] = 'Metode ekspor nilai';
$string['type_gradeexport_plural'] = 'Metode ekspor nilai';
$string['type_gradeimport'] = 'Metode impor nilai';
$string['type_gradeimport_plural'] = 'Metode impor nilai';
$string['type_gradereport'] = 'Laporan buku nilai';
$string['type_gradereport_plural'] = 'Laporan buku nilai';
$string['type_gradingform'] = 'Metode penilaian lanjutan';
$string['type_gradingform_plural'] = 'Metode penilaian lanjutan';
$string['type_h5plib'] = 'Kerangka H5P';
$string['type_h5plib_plural'] = 'Kerangka H5P';
$string['type_local'] = 'Pengaya lokal';
$string['type_local_plural'] = 'Pengaya lokal';
$string['type_media'] = 'Pemutar media';
$string['type_media_plural'] = 'Pemutar media';
$string['type_message'] = 'Pengaya notifikasi';
$string['type_message_plural'] = 'Pengaya notifikasi';
$string['type_mlbackend'] = 'Backend pembelajaran mesin';
$string['type_mlbackend_plural'] = 'Backend pembelajaran mesin';
$string['type_mnetservice'] = 'Layanan MNet';
$string['type_mnetservice_plural'] = 'Layanan MNet';
$string['type_mod'] = 'Modul aktivitas';
$string['type_mod_plural'] = 'Modul aktivitas';
$string['type_paygw'] = 'Gerbang pembayaran';
$string['type_paygw_plural'] = 'Gerbang pembayaran';
$string['type_paygwmanage'] = 'Kelola gerbang pembayaran';
$string['type_plagiarism'] = 'Pengaya plagiarisme';
$string['type_plagiarism_plural'] = 'Pengaya plagiarisme';
$string['type_portfolio'] = 'Portofolio';
$string['type_portfolio_plural'] = 'Portofolio';
$string['type_profilefield'] = 'Tipe ruas profil';
$string['type_profilefield_plural'] = 'Tipe ruas profil';
$string['type_qbehaviour'] = 'Perilaku soal';
$string['type_qbehaviour_plural'] = 'Perilaku soal';
$string['type_qformat'] = 'Format ekspor/impor soal';
$string['type_qformat_plural'] = 'Format ekspor/impor soal';
$string['type_qtype'] = 'Tipe soal';
$string['type_qtype_plural'] = 'Tipe soal';
$string['type_report'] = 'Laporan situs';
$string['type_report_plural'] = 'Laporan-laporan';
$string['type_repository'] = 'Repositori';
$string['type_repository_plural'] = 'Repositori';
$string['type_search'] = 'Mesin pencari';
$string['type_search_plural'] = 'Mesin pencari';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Tema';
$string['type_tool'] = 'Perkakas Admin';
$string['type_tool_plural'] = 'Perkakas Admin';
$string['type_webservice'] = 'Protokol layanan web';
$string['type_webservice_plural'] = 'Protokol layanan web';
$string['uninstall'] = 'Bongkar';
$string['uninstallconfirm'] = 'Anda akan membongkar pemasangan pengaya <em> {$a->name} </em>. Ini sepenuhnya akan menghapus semua yang ada dalam basis data yang terkait dengan pengaya ini, termasuk konfigurasinya, catatan log, file pengguna yang dikelola oleh pengaya dll. Tidak ada jalan kembali dan Moodle sendiri tidak membuat cadangan pemulihan. Apakah Anda yakin Anda ingin melanjutkan?';
$string['uninstalldelete'] = 'Semua data yang terkait dengan pengaya <em> {$a->name} </em> telah dihapus dari basis data. Untuk mencegah pengaya menginstal ulang dirinya sendiri, foldernya <em> {$a->rootdir} </em> harus dihapus secara manual dari server Anda sekarang. Moodle sendiri tidak dapat menghapus folder karena aturan perizinan penulisan.';
$string['uninstalldeleteconfirm'] = 'Semua data yang terkait dengan plugin <em> {$a->name} </em> telah dihapus dari basis data. Untuk mencegah pengaya menginstal ulang dirinya sendiri, foldernya <em> {$a->rootdir} </em> harus dihapus dari server Anda. Apakah Anda ingin menghapus folder pengaya sekarang?';
$string['uninstalldeleteconfirmexternal'] = 'Tampaknya versi pengaya saat ini telah diperoleh melalui  sistem manajemen pemeriksaan kode sumber ({$a}). Jika Anda menghapus folder pengaya, Anda mungkin kehilangan modifikasi lokal penting dari kode tersebut. Harap pastikan bahwa Anda pasti ingin menghapus folder pengaya sebelum melanjutkan.';
$string['uninstallextraconfirmblock'] = 'Terdapat model {$a->instances} dari blok ini.';
$string['uninstallextraconfirmenrol'] = 'Terdapat {$a->enrolments} keanggotaan pengguna.';
$string['uninstallextraconfirmmod'] = 'Terdapat pengaya {$a->instances} dari modul ini pada kursus {$a->courses}.';
$string['uninstalling'] = 'Membongkar {$a->name}';
$string['updateavailable'] = 'Versi baru {$a} tersedia!';
$string['updateavailable_moreinfo'] = 'Informasi lebih lanjut...';
$string['updateavailable_release'] = 'Rilis {$a}';
$string['updatepluginconfirm'] = 'Konfirmasi pembaruan pengaya';
$string['updatepluginconfirmexternal'] = 'Tampaknya versi pengaya saat ini telah diperoleh melalui  sistem manajemen pemeriksaan kode sumber ({$a}). Bila anda menginstal pembaruan ini, anda tidak dapat lagi memperoleh pembaruan pengaya dari sistem pengelolaan kode sumber. Tolong pastikan bahwa anda benar-benar ingin memperbarui pengaya sebelum melanjutkan.';
$string['updatepluginconfirminfo'] = 'Anda akan memasang versi baru pengaya <strong> {$a->name} </strong>. Paket zip dengan versi pengaya {$a->version} akan diunduh dari <a href="{$a->url} "> {$ a->url} </a> dan diekstrak ke instalasi Moodle Anda sehingga dapat meningkatkan penginstalan Anda.';
$string['updatepluginconfirmwarning'] = 'Perhatikan bahwa Moodle tidak akan membuat cadangan basis data Anda sebelum pembaruan. Kami menyarankan Anda untuk membuat snapshot cadangan sekarang untuk mengantisipasi kasus langka, dimana kode baru memiliki kutu yang membuat situs Anda tidak tersedia atau bahkan membuat basis data Anda menjadi korup. Lanjutkan dengan risiko ditanggung sendiri.';
$string['validationmsg_componentmatch'] = 'Nama lengkap komponen';
$string['validationmsg_componentmismatchname'] = 'Nama pengaya tidak cocok';
$string['validationmsg_componentmismatchname_help'] = 'Dalam beberapa paket ZIP, seperti yang disediakan oleh Github, mungkin terdapat nama direktori akar yang tidak benar. Anda perlu memperbaiki nama direktori akarnya supaya cocok dengan nama pengaya yang tercantum.';
$string['validationmsg_componentmismatchname_info'] = 'Pengaya menyatakan namanya adalah \'{$a}\' tetapi tidak cocok dengan nama direktori root.';
$string['validationmsg_componentmismatchtype'] = 'Tipe pengaya tidak cocok';
$string['validationmsg_componentmismatchtype_info'] = 'Tipe yang diharapkan \'{$a->expected}\' tetapi pengaya menyatakan tipenya adalah \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Berkas yang diekstrak tidak ditemukan';
$string['validationmsg_filesnumber'] = 'Berkas dalam paket tidak cukup';
$string['validationmsg_filestatus'] = 'Tidak dapat mengekstrak seluruh berkas';
$string['validationmsg_filestatus_info'] = 'Mencoba mengekstrak berkas {$a->file} terjadi galat \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Berkas bahasa ditemukan';
$string['validationmsg_maturity'] = 'Tingkatan kematangan yang dilaporkan';
$string['validationmsg_maturity_help'] = 'Pengaya dapat menyatakan tingkat kematangannya. Jika pengelola menganggap pengaya tersebut stabil, tingkat kematangan yang dinyatakan akan membaca MATURITY_STABLE. Semua tingkat kematangan lainnya (seperti alfa atau beta) harus dianggap tidak stabil dan peringatan akan dinaikkan.';
$string['validationmsg_missingcomponent'] = 'Pengaya tidak menunjukkan nama komponennya';
$string['validationmsg_missingcomponent_help'] = 'Semua pengaya harus memberikan nama lengkap komponennya melalui deklarasi `$plugin->component` di berkas version.php.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Nama berkas bahasa Inggris tidak cocok';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Jenis pengaya yang diberikan tidak memiliki berkas bahasa Inggris yang diharapkan {$a}.';
$string['validationmsg_missinglangenfile'] = 'Tidak ada berkas berbahasa Inggris ditemukan';
$string['validationmsg_missinglangenfolder'] = 'Folder berbahasa Inggris tidak ada';
$string['validationmsg_missingversion'] = 'Pengaya tidak menunjukkan versinya';
$string['validationmsg_missingversionphp'] = 'berkas version.php tidak ditemukan';
$string['validationmsg_multiplelangenfiles'] = 'Banyak berkas berbahasa Inggris ditemukan';
$string['validationmsg_onedir'] = 'Struktur paket ZIP tidak valid.';
$string['validationmsg_onedir_help'] = 'Paket ZIP hanya boleh berisi satu direktori root yang menyimpan kode pengaya. Nama direktori root tersebut harus sama dengan nama pengaya.';
$string['validationmsg_pathwritable'] = 'Pemeriksaan akses penulisan';
$string['validationmsg_pluginversion'] = 'Versi pengaya';
$string['validationmsg_pluginversiontoolow'] = 'Versi yang lebih baru dari pengaya ini sudah terpasang';
$string['validationmsg_release'] = 'Rilis pengaya';
$string['validationmsg_requiresmoodle'] = 'Versi Moodle yang diminta';
$string['validationmsg_rootdir'] = 'Nama pengaya yang akan diinstal';
$string['validationmsg_rootdir_help'] = 'Nama direktori root dalam paket ZIP membentuk nama pengaya yang akan diinstal. Jika namanya salah, Anda mungkin ingin mengganti nama direktori root di ZIP sebelum menginstal pengaya.';
$string['validationmsg_rootdirinvalid'] = 'Nama pengaya tidak valid';
$string['validationmsg_rootdirinvalid_help'] = 'Nama direktori root dalam paket ZIP melanggar persyaratan sintaks formal. Beberapa paket ZIP, seperti yang dibuat oleh Github, mungkin berisi nama direktori root yang salah. Anda perlu memperbaiki nama direktori root agar sesuai dengan nama pengaya.';
$string['validationmsg_targetexists'] = 'Lokasi target telah tersedia dan akan dihapus';
$string['validationmsg_targetexists_help'] = 'Direktori pengaya sudah ada dan akan digantikan dengan paket konten pengaya.';
$string['validationmsg_targetnotdir'] = 'Lokasi target telah ditempati oleh berkas lain';
$string['validationmsg_unknowntype'] = 'Tipe pengaya tidak diketahui';
$string['validationmsg_versionphpsyntax'] = 'Siktaks yang tidak didukung ditemukan pada berkas version.php';
$string['validationmsglevel_debug'] = 'Awakutu';
$string['validationmsglevel_error'] = 'Galat';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Peringatan';
$string['version'] = 'Versi';
$string['versiondb'] = 'Versi saat ini';
$string['versiondisk'] = 'Versi baru';
