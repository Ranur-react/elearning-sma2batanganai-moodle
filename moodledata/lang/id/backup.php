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
 * Strings for component 'backup', language 'id', version '3.10'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Proses pencadangan selesai';
$string['asyncbackupcompletebutton'] = 'Lanjutkan';
$string['asyncbackupcompletedetail'] = 'Proses pencadangan berhasil diselesaikan. <br/> Anda dapat mengakses cadangan di <a href="{$a}"> halaman pemulihan. </a>';
$string['asyncbackuperror'] = 'Proses pencadangan gagal';
$string['asyncbackuperrordetail'] = 'Proses pencadangan gagal. Silakan kontak administrator sistem.';
$string['asyncbackuppending'] = 'Proses pencadangan ditangguhkan';
$string['asyncbackupprocessing'] = 'Pencadangan sedang berlangsung';
$string['asyncbadexecution'] = 'Eksekusi pengontrol cadangan yang buruk. Ini adalah {$a} dan seharusnya 2.';
$string['asynccheckprogress'] = 'Anda dapat memeriksa kemajuannya kapan saja di <a href="{$a}"> Laman pemulihan </a>.';
$string['asyncemailenable'] = 'Aktifkan pesan notifikasi';
$string['asyncemailenabledetail'] = 'Jika diaktifkan, pengguna akan menerima pesan saat pencadangan atau pemulihan asinkron selesai.';
$string['asyncgeneralsettings'] = 'Pencadangan/pemulihan asinkron';
$string['asyncmessagebody'] = 'Pesan';
$string['asyncmessagebodydefault'] = 'Hai {user_firstname}, <br/> {operation} Anda (ID: {backupid}) berhasil diselesaikan. <br/> <br/> Anda dapat mengaksesnya di sini: {link}.';
$string['asyncmessagebodydetail'] = 'Pesan yang akan dikirim ketika pencadangan atau pemulihan asinkron selesai.';
$string['asyncmessagesubject'] = 'Subjek';
$string['asyncmessagesubjectdefault'] = 'Moodle {operation} berhasil diselesaikan';
$string['asyncmessagesubjectdetail'] = 'Subjek pesan';
$string['asyncnowait'] = 'Anda tidak perlu menunggu di sini, karena prosesnya akan berlangsung di latar belakang.';
$string['asyncprocesspending'] = 'Proses ditangguhkan';
$string['asyncrestorecomplete'] = 'Proses pemulihan selesai';
$string['asyncrestorecompletebutton'] = 'Lanjutkan';
$string['asyncrestorecompletedetail'] = 'Proses pemulihan berhasil diselesaikan. Mengeklik lanjutkan akan membawa Anda ke <a href="{$a}"> kursus untuk item yang dipulihkan. </a>';
$string['asyncrestoreerror'] = 'Proses pemulihan gagal';
$string['asyncrestoreinprogress'] = 'Pemulihan sedang berlangsung';
$string['asyncrestoreinprogress_help'] = 'Pemulihan kursus asinkron yang sedang berlangsung ditampilkan di sini.';
$string['asyncrestoreprocessing'] = 'Pemulihan sedang berlangsung';
$string['asyncreturn'] = 'Kembali ke kursus';
$string['autoactivedescription'] = 'Pilih apakah akan melakukan pencadangan otomatis atau tidak. Jika manual dipilih, cadangan otomatis hanya dimungkinkan melalui skrip CLI cadangan otomatis. Ini dapat dilakukan secara manual pada baris perintah atau melalui cron.';
$string['autoactivedisabled'] = 'Dinonaktifkan';
$string['autoactiveenabled'] = 'Diaktifkan';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Jadwal';
$string['automatedbackupschedulehelp'] = 'Pilih hari dalam seminggu untuk melakukan backup otomatis.';
$string['automatedbackupsinactive'] = 'Pencadangan otomatis tidak diaktifkan oleh admin situs';
$string['automatedbackupstatus'] = 'Status jadual backup';
$string['automateddeletedays'] = 'Hapus pencadangan yang lebih lama dari';
$string['automatedmaxkept'] = 'Jumlah cadangan maksimum yang tetap disimpan';
$string['automatedmaxkepthelp'] = 'Ini menentukan jumlah maksimum cadangan otomatis terbaru yang akan disimpan untuk setiap kursus. Cadangan yang lebih lama akan dihapus secara otomatis.';
$string['automatedminkept'] = 'Jumlah minimum cadangan yang tetap disimpan';
$string['automatedminkepthelp'] = 'Jika cadangan yang lebih lama dari jumlah hari tertentu dihapus, dapat terjadi kursus yang tidak aktif berakhir tanpa cadangan. Untuk mencegah hal ini, jumlah minimum cadangan yang disimpan harus ditentukan.';
$string['automatedsettings'] = 'Setelan pencadangan otomatis';
$string['automatedsetup'] = 'Setel pencadangan otomatis';
$string['automatedstorage'] = 'Penyimpanan pencadangan otomatis';
$string['automatedstoragehelp'] = 'Pilih lokasi penyimpanan cadangan yang Anda inginkan saat dibuat secara otomatis.';
$string['backupactivity'] = 'Aktivitas pencadangan: {$a}';
$string['backupcourse'] = 'Cadangkan kursus: {$a}';
$string['backupcoursedetails'] = 'Detail kursus';
$string['backupcoursesection'] = 'Bagian: {$a}';
$string['backupcoursesections'] = 'Topik kursus';
$string['backupdate'] = 'Tanggal diambil';
$string['backupdetails'] = 'Detail pencadangan';
$string['backupdetailsnonstandardinfo'] = 'Berkas yang dipilih bukan file cadangan Moodle standar. Proses pemulihan akan mencoba mengubah berkas cadangan ke dalam format standar dan kemudian mengembalikannya.';
$string['backupformat'] = 'Format';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Format tidak diketahui';
$string['backuplog'] = 'Informasi dan peringatan teknis';
$string['backupmode'] = 'Mode';
$string['backupmode10'] = 'Umum';
$string['backupmode20'] = 'Impor';
$string['backupmode30'] = 'Hub';
$string['backupmode40'] = 'Situs sama';
$string['backupmode50'] = 'Diotomatiskan';
$string['backupmode60'] = 'Dikonversikan';
$string['backupmode70'] = 'Asinkron';
$string['backupsection'] = 'Cadangkan topik kursus: {$a}';
$string['backupsettings'] = 'Setelan pencadangan';
$string['backupsitedetails'] = 'Detail situs';
$string['backupstage16action'] = 'Lanjutkan';
$string['backupstage1action'] = 'Selanjutnya';
$string['backupstage2action'] = 'Selanjutnya';
$string['backupstage4action'] = 'Lakukan pencadangan';
$string['backupstage8action'] = 'Lanjutkan';
$string['backuptype'] = 'Tipe';
$string['backuptypeactivity'] = 'Aktivitas';
$string['backuptypecourse'] = 'kursus';
$string['backuptypesection'] = 'Bagian';
$string['backupversion'] = 'Versi Cadangan';
$string['cannotfindassignablerole'] = 'Peran {$a} dalam berkas cadangan tidak dapat dipetakan ke peran apa pun yang diizinkan untuk Anda tetapkan.';
$string['choosefilefromactivitybackup'] = 'Area pencadangan aktivitas';
$string['choosefilefromactivitybackup_help'] = 'Aktivitas pencadangan dibuat menggunakan setelan bawaan tersimpan di sini.';
$string['choosefilefromautomatedbackup'] = 'Pencadangan Otomatis';
$string['choosefilefromcoursebackup'] = 'Area cadangan kursus';
$string['choosefilefromcoursebackup_help'] = 'Cadangan kursus dibuat menggunakan setelan bawaan tersimpan di sini.';
$string['choosefilefromuserbackup'] = 'Area privat pencadangan pengguna';
$string['configgeneralanonymize'] = 'JIka diaktifkan semua informasi yang berkaitan dengan pengguna akan dibuat anonim secara bawaan.';
$string['configgeneralbadges'] = 'Menyetel bawaan untuk menyertakan lencana dalam cadangan.';
$string['configgenerallogs'] = 'Jika log yang diaktifkan akan dimasukkan dalam cadangan secara bawaan.';
$string['configgeneralusers'] = 'Setel bawaan apakah akan memasukkan pengguna atau tidak dalam pencadangan.';
$string['configloglifetime'] = 'Ini menentukan lama waktu Anda ingin menyimpan informasi log cadangan. Log yang lebih tua dari usia ini secara otomatis dihapus. Disarankan untuk menjaga nilai ini kecil, karena informasi yang dicatat dapat sangat besar.';
$string['configrestorebadges'] = 'Menyetel bawaan untuk memulihkan lencana.';
$string['confirmcancel'] = 'Batalkan pencadangan';
$string['confirmcancelimport'] = 'Batalkan impor';
$string['confirmcancelrestore'] = 'Batalkan pemulihan';
$string['confirmcancelyes'] = 'Batalkan pencangan';
$string['copiesinprogress'] = 'Salinan kursus ini sedang dalam proses. <a href="{$a}"> Lihat salinan yang sedang diproses. </a>';
$string['copycoursedesc'] = 'Kursus ini akan digandakan dan dimasukkan ke dalam kategori kursus yang dipilih.';
$string['copycourseheading'] = 'Salin kursus';
$string['copycoursetitle'] = 'Salin kursus: {$a}';
$string['copyingcourse'] = 'Penyalinan kursus sedang berlangsung';
$string['copyprogressheading'] = 'Penyalinan kursus sedang berlangsung';
$string['copyprogresstitle'] = 'Penyalinan kursus sedang berlangsung';
$string['copyreturn'] = 'Salin dan kembali';
$string['copyview'] = 'Salin dan lihat';
$string['coursecategory'] = 'Kategori kursus akan dipulihkan ke';
$string['courseid'] = 'ID Orisinal';
$string['coursesettings'] = 'Setelan kursus';
$string['coursetitle'] = 'Judul';
$string['currentstage1'] = 'Setelan awal';
$string['currentstage16'] = 'Selesai';
$string['currentstage2'] = 'Skema setelan';
$string['currentstage4'] = 'Konfirmasi dan ulasan';
$string['currentstage8'] = 'Lakukan pencadangan';
$string['enableasyncbackup_help'] = 'Jika diaktifkan, semua operasi pencadangan dan pemulihan akan dilakukan secara asinkron. Ini tidak mempengaruhi impor dan ekspor. Pencadangan dan pemulihan asinkron memungkinkan pengguna melakukan operasi lain saat pencadangan atau pemulihan sedang berlangsung.';
$string['error_block_for_module_not_found'] = 'Ditemukan model blok yatim piatu (id: {$a->bid}) untuk modul kursus (id: {$a->mid}). Blok ini tidak akan dicadangkan';
$string['filename'] = 'Nama berkas';
$string['generalactivities'] = 'Sertakan aktivitas dan sumber';
$string['generalanonymize'] = 'Informasi anonim';
$string['generalbackdefaults'] = 'Setelan pencadangan bawaan';
$string['generalbadges'] = 'Sertakan lencana';
$string['generalblocks'] = 'Sertakan blok';
$string['generalcalendarevents'] = 'Termasuk acara kalender';
$string['generalcomments'] = 'Sertakan komentar';
$string['generalcompetencies'] = 'Sertakan kompetensi';
$string['generalcontentbankcontent'] = 'Sertakan isi bank konten';
$string['generalfiles'] = 'Sertakan berkas';
$string['generalfilters'] = 'Sertakan filter';
$string['generalgroups'] = 'Sertakan grup dan pengelompokan';
$string['generallegacyfiles'] = 'Sertakan  berkas kursus lawas';
$string['generalquestionbank'] = 'Sertakan bank soal';
$string['generalrestoredefaults'] = 'Setelan bawaan pemulihan umum';
$string['generalrestoresettings'] = 'Setelan bawaan pemulihan umum';
$string['generalroleassignments'] = 'Sertakan penugasan peran';
$string['generalsettings'] = 'Setelan pencadangan umum';
$string['generalusers'] = 'Sertakan';
$string['generaluserscompletion'] = 'Sertakan informasi ketercapaian pengguna';
$string['hidetypes'] = 'Sembunyikan opsi tipe';
$string['importbackupstage16action'] = 'Lanjutkan';
$string['importbackupstage8action'] = 'Lanjutkan';
$string['importcurrentstage1'] = 'Setelan awal';
$string['importcurrentstage16'] = 'Selesai';
$string['importcurrentstage2'] = 'Skema setelan';
$string['importcurrentstage4'] = 'Konfirmasi dan ulasan';
$string['importfile'] = 'Impor berkas cadangan';
$string['importgeneralduplicateadminallowed_desc'] = 'Jika situs memiliki akun dengan nama pengguna \'admin\', maka upaya untuk memulihkan file cadangan yang berisi akun dengan nama pengguna \'admin\' dapat menyebabkan konflik. Jika pengaturan ini diaktifkan, konflik akan diselesaikan dengan mengubah nama pengguna di file cadangan menjadi \'admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Jumlah maksimum kursus terdaftar untuk diimpor';
$string['importgeneralmaxresults_desc'] = 'Mengontrol jumlah kursus yang terdaftar ketika melakukan langkah pertama proses impor';
$string['importgeneralsettings'] = 'Setelan Impor bawaan';
$string['inprogress'] = 'Pencadangan sedang berlangsung';
$string['jumptofinalstep'] = 'Lompat ke langkah terakhir';
$string['keptroles'] = 'Sertakan pendaftaran peran';
$string['keptroles_help'] = 'Pengguna dengan peran yang dipilih akan didaftarkan ke kursus baru. Tidak ada data pengguna yang akan disalin kecuali \'Sertakan data pengguna\' diaktifkan.';
$string['locked'] = 'Terkunci';
$string['lockedbyconfig'] = 'Setelan terkunci sesuai setelan pencadangan bawaan';
$string['lockedbyhierarchy'] = 'Terkunci berdasarkan dependensi';
$string['managefiles'] = 'Menata berkas cadangan';
$string['morecoursesearchresults'] = 'Ditemukan lebih dari {$a} kursus, menampilkan {$a} hasil  pertama';
$string['nomatchingcourses'] = 'Tidak ada kursus yang ditampilkan';
$string['norestoreoptions'] = 'Tidak ada kategori atau kursus yang tersedia dapat Anda pulihkan.';
$string['pendingasyncdeletedetail'] = 'kursus ini memiliki cadangan asinkron yang tertunda. <br/> kursus tidak dapat dihapus sampai pencadangan ini selesai.';
$string['previousstage'] = 'Sebelumnya';
$string['privacy:metadata:backup:detailsofarchive'] = 'Arsip dapat berisi banyak data pengguna yang terkait pada kursus, seperti nilai, pendaftaran dan data aktivitas.';
$string['privacy:metadata:backup:externalpurpose'] = 'Tujuan arsip ini adalah untuk menyimpan informasi yang terkait dengan kursus, dimana nantinya cadangan akan dipulihkan di masa yang akan datang.';
$string['privacy:metadata:backup_controllers'] = 'Daftar operasi pencadangan';
$string['privacy:metadata:backup_controllers:itemid'] = 'ID kursus';
$string['qcategory2coursefallback'] = 'Kategori pertanyaan "{$a->name}", originally at system/course category context in backup file, will be created at course context by restore';
$string['qcategorycannotberestored'] = 'Kategori pertanyaan "{$a->name}" tidak dapat dibuat pada proses pemulihan kursus';
$string['question2coursefallback'] = 'Kategori pertanyaan "{$a->name}", aslinya pada konteks kategori sistem / kursus dalam berkas cadangan, akan dibuat pada konteks kursus dengan pemulihan';
$string['questionegorycannotberestored'] = 'Pertanyaan "{$a->name}" tidak dapat dibuat pada proses pemulihan kursus';
$string['recyclebin_desc'] = 'Perhatikan bahwa setelan ini juga akan digunakan untuk tong sampah.';
$string['restorecourse'] = 'Pulihkan kursus';
$string['restorecoursesettings'] = 'Setelan kursus';
$string['restoreexecutionsuccess'] = 'Cadangan kursus berhasil dipulihkan, klik tombol Lanjutkan akan membawa Anda ke halaman kursus yang telah dipulihkan.';
$string['restorenewcoursefullname'] = 'Nama kursus baru';
$string['restorenewcourseshortname'] = 'Nama pendek kursus baru';
$string['restorestage1'] = 'Konfirmasi';
$string['restorestage16'] = 'Ulasan';
$string['restorestage1action'] = 'Selanjutnya';
$string['restorestage2'] = 'Destinasi';
$string['restorestage2action'] = 'Selanjutnya';
$string['restorestage32'] = 'Proses';
$string['restorestage32action'] = 'Lanjutkan';
$string['restorestage4'] = 'Setelan';
$string['restorestage4action'] = 'Selanjutnya';
$string['restorestage64'] = 'Selesai';
$string['restorestage64action'] = 'Lanjutkan';
$string['restorestage8'] = 'Skema';
$string['restorestage8action'] = 'Selanjutnya';
$string['restoretocourse'] = 'Pulihkan cadangan ke kursus:';
$string['restoretocurrentcourse'] = 'Pulihkan ke kursus ini';
$string['restoretocurrentcourseadding'] = 'Gabungkan cadangan kursus pada kursus ini';
$string['restoretocurrentcoursedeleting'] = 'Hapus konten dari kursus ini kemudian pulihkan cadangan';
$string['restoretoexistingcourse'] = 'Pulihkan ke dalam kursus yang tersedia';
$string['restoretoexistingcourseadding'] = 'Gabungkan cadangan kursus pada kursus yang telah ada';
$string['restoretoexistingcoursedeleting'] = 'Hapus konten dari kursus yang ada, kemudian pulihkan cadangan';
$string['restoretonewcourse'] = 'Pulihkan cadangan sebagai kursus baru';
$string['restoringcourse'] = 'Pemulihan kursus sedang berlangsung';
$string['rootenrolmanual'] = 'Pulihkan menjadi Pendaftaran manual';
$string['rootsettingactivities'] = 'Sertakan aktivitas dan sumber';
$string['rootsettinganonymize'] = 'Informasi pengguna anonim';
$string['rootsettingbadges'] = 'Sertakan lencana';
$string['rootsettingblocks'] = 'Sertakan blok';
$string['rootsettingcalendarevents'] = 'Termasuk acara kalender';
$string['rootsettingcomments'] = 'Sertakan komentar';
$string['rootsettingcompetencies'] = 'Sertakan kompetensi';
$string['rootsettingcontentbankcontent'] = 'Sertakan isi bank konten';
$string['rootsettingcustomfield'] = 'Sertakan ruas tersuai';
$string['rootsettingenrolments_never'] = 'Tidak, pulihkan pengguna ke Pendaftaran manual';
$string['rootsettingfiles'] = 'Sertakan berkas';
$string['rootsettingfilters'] = 'Sertakan filter';
$string['rootsettinggradehistories'] = 'Sertakan riwayat penilaian';
$string['rootsettinggroups'] = 'Sertakan grup dan pengelompokan';
$string['rootsettinglegacyfiles'] = 'Sertakan  berkas kursus lawas';
$string['rootsettinglogs'] = 'Sertakan log kursus';
$string['rootsettingquestionbank'] = 'Sertakan bank soal';
$string['rootsettingroleassignments'] = 'Sertakan peran penugasan pengguna';
$string['rootsettings'] = 'Setelan pencadangan';
$string['rootsettingusers'] = 'Sertakan siswa terdaftar';
$string['rootsettinguserscompletion'] = 'Sertakan detail penyelesaian pengguna';
$string['sectionactivities'] = 'Aktivitas';
$string['selectacategory'] = 'PIlih kategori';
$string['selectacourse'] = 'Pilih kursus';
$string['setting_course_fullname'] = 'Nama kursus';
$string['setting_course_shortname'] = 'Nama pendek kursus';
$string['setting_course_startdate'] = 'Tanggal mulai kursus';
$string['setting_keep_roles_and_enrolments'] = 'Tetap gunakan peran dan pendaftaran sekarang';
$string['setting_overwrite_conf'] = 'Timpa konfigurasi kursus';
$string['setting_overwrite_course_fullname'] = 'Timpa nama lengkap kursus';
$string['setting_overwrite_course_shortname'] = 'Timpa nama pendek kursus';
$string['setting_overwrite_course_startdate'] = 'Timpa tanggal mulai kursus';
$string['skiphidden'] = 'Abaikan kursus tersembunyi';
$string['skiphiddenhelp'] = 'Pilih apakah akan melewatkan kursus tersembunyi atau tidak';
$string['skipmodifdays'] = 'Lewati kursus tidak diubah sejak';
$string['skipmodifdayshelp'] = 'Pilih untuk melewatkan kursus yang belum diubah sejak beberapa hari';
$string['skipmodifprev'] = 'Lewati kursus tidak diubah sejak pencadangan sebelumnya';
$string['skipmodifprevhelp'] = 'Pilih apakah akan melewati kursus yang belum diubah sejak pencadangan otomatis terakhir. Ini membutuhkan log untuk diaktifkan.';
$string['storagecourseonly'] = 'Area berkas cadangan kursus';
$string['storageexternalonly'] = 'Menentukan direktori untuk pencadangan otomatis';
$string['timetaken'] = 'Waktu yang digunakan';
$string['title'] = 'Judul';
$string['totalcategorysearchresults'] = 'Total kategori: {$a}';
$string['totalcoursesearchresults'] = 'Total kursus: {$a}';
$string['userdata'] = 'Sertakan data pengguna';
$string['userdata_help'] = 'Jika diaktifkan, data seperti kiriman forum, pengiriman tugas, dll. Akan disalin ke kursus baru untuk setiap pengguna dengan peran yang dipilih di \'Sertakan pendaftaran peran\'.';
