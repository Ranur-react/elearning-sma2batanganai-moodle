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
 * Strings for component 'enrol', language 'id', version '3.10'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Pengaya pendaftaran kursus yang tersedia';
$string['addinstance'] = 'Tambahkan metode';
$string['addinstanceanother'] = 'Tambahkan metode dan buat lainnya';
$string['ajaxnext25'] = '25 berikutnya ...';
$string['ajaxoneuserfound'] = 'ditemukan 1 pengguna';
$string['ajaxxmoreusersfound'] = 'Lebih dari {$a} pengguna ditemukan';
$string['ajaxxusersfound'] = 'ditemukan {$a} pengguna';
$string['assignnotpermitted'] = 'Anda tidak memiliki izin atau tidak dapat memberikan peran dalam kursus ini.';
$string['bulkuseroperation'] = 'Operasi massal pengguna';
$string['configenrolplugins'] = 'Pilihlah semua pengaya yang dibutuhkan dan sesuaikan urutannya.';
$string['custominstancename'] = 'Nama \'instance\' kustom';
$string['defaultenrol'] = 'Tambahkan \'instance\' ke kursus baru';
$string['defaultenrol_desc'] = 'Dimungkinkan untuk menambah pengaya ini ke semua kursus baru secara bawaan.';
$string['deleteinstanceconfirm'] = 'Anda akan menghapus metode pendaftaran "{$a->name}". Semua {$a->users} pengguna yang saat ini terdaftar menggunakan metode ini akan dihapus pendaftarannya dan semua data yang berkaitan dengan nilai pengguna, keanggotaan grup atau langganan forum akan dihapus. Apakah Anda yakin untuk melanjutkan?';
$string['deleteinstanceconfirmself'] = 'Apakah Anda yakin untuk menghapus instance "{$a->name}" yang memberikan Anda akses ke kursus ini? Kemungkinan Anda tidak akan bisa mengakses kursus ini jika dilanjutkan menghapus.';
$string['deleteinstancenousersconfirm'] = 'Anda akan menghapus metode pendaftaran "{$a->name}". Apakah Anda yakin untuk melanjutkan?';
$string['disableinstanceconfirmself'] = 'Apakah Anda yakin untuk menonaktifkan "{$a->name}" yang memberikan Anda akses ke kursus ini? Dimungkinkan Anda tidak akan bisa mengakses kursus ini jika dilanjutkan menghapus.';
$string['durationdays'] = '{$a} hari';
$string['editenrolment'] = 'Edit pendaftaran';
$string['edituserenrolment'] = 'Edit Pendaftaran {$a}';
$string['enrol'] = 'Daftarkan';
$string['enrolcandidates'] = 'Pengguna tidak terdaftar';
$string['enrolcandidatesmatching'] = 'Mencocokkan pengguna yang tidak terdaftar';
$string['enrolcohort'] = 'Daftarkan kohor';
$string['enrolcohortusers'] = 'Daftarkan pengguna';
$string['enroldetails'] = 'Detail pendaftaran';
$string['enrollednewusers'] = 'Berhasil mendaftarkan {$a} pengguna baru';
$string['enrolledusers'] = 'Pengguna terdaftar';
$string['enrolledusersmatching'] = 'Pencocokan pengguna terdaftar';
$string['enrolme'] = 'Daftarkan saya dalam kursus ini';
$string['enrolmentinstances'] = 'Metode pendaftaran';
$string['enrolmentmethod'] = 'Metode pendaftaran';
$string['enrolmentnew'] = 'Pendaftaran baru di {$a}';
$string['enrolmentnewuser'] = '{$a->user} telah mendaftar di kursus "{$a->course}"';
$string['enrolmentoptions'] = 'Pilihan pendaftaran';
$string['enrolments'] = 'Pendaftaran';
$string['enrolmentupdatedforuser'] = 'Pendaftaran untuk pengguna "{$a->fullname}" telah diperbarui';
$string['enrolnotpermitted'] = 'Anda tidak memiliki izin atau tidak diizinkan untuk mendaftar seseorang dalam kursus ini';
$string['enrolperiod'] = 'Durasi pendaftaran';
$string['enroltimecreated'] = 'Pendaftaran telah dibuat';
$string['enroltimeend'] = 'Pendaftaran berakhir';
$string['enroltimeendinvalid'] = 'Akhir tanggal pendaftaran haruslah setelah tanggal mulai pendaftaran';
$string['enroltimestart'] = 'Pendaftaran dimulai';
$string['enrolusage'] = 'Model / pendaftaran';
$string['enrolusers'] = 'Daftarkan pengguna';
$string['enrolxusers'] = 'Daftarkan {$a} pengguna';
$string['errajaxfailedenrol'] = 'Gagal mendaftarkan pengguna';
$string['errajaxsearch'] = 'Kesalahan ketika mencari pengguna';
$string['erroreditenrolment'] = 'Terjadi kesalahan saat mencoba mengubah pendaftaran pengguna';
$string['errorenrolcohort'] = 'Galat dalam membuat contoh pendaftaran sinkronisasi kohor dalam kursus ini.';
$string['errorenrolcohortusers'] = 'Galat mendaftarkan anggota kohor pada kursus ini.';
$string['errorthresholdlow'] = 'Batas pemberian notifikasi minimal 1 hari.';
$string['errorwithbulkoperation'] = 'Terjadi kesalahan saat memproses perubahan pendaftaran massal Anda.';
$string['eventenrolinstancecreated'] = 'Membuat model pendaftaran';
$string['eventenrolinstancedeleted'] = 'Menghapus model pendaftaran';
$string['eventenrolinstanceupdated'] = 'Memperbarui model pendaftaran';
$string['eventuserenrolmentcreated'] = 'Pengguna terdaftar di kursus';
$string['eventuserenrolmentdeleted'] = 'Pengguna dikeluarkan dari kursus';
$string['eventuserenrolmentupdated'] = 'Penghapusan pengguna dari pendaftaran diperbaharui';
$string['expirynotify'] = 'Beritahukan sebelum masa pendaftaran berakhir';
$string['expirynotify_help'] = 'Setelan ini menentukan apakah pesan pemberitahuan kedaluwarsa pendaftaran dikirim.';
$string['expirynotifyall'] = 'Pengguna pendaftar dan terdaftar';
$string['expirynotifyenroller'] = 'Hanya pendaftar';
$string['expirynotifyhour'] = 'Jam untuk mengirim pemberitahuan berakhirnya pendaftaran';
$string['expirythreshold'] = 'Batas notifikasi';
$string['expirythreshold_help'] = 'Berapa lama sebelum batas pendaftaran pengguna diberikan notifikasi?';
$string['extremovedaction'] = 'Aksi penghapusan pendaftaran eksternal';
$string['extremovedaction_help'] = 'Pilih aksi yang akan dilakukan ketika pendaftaran pengguna menghilang dari sumber pendaftaran eksternal. Harap dicatat bahwa beberapa data dan pengaturan pengguna dihapus dari kursus selama pembatalan kursus.';
$string['extremovedkeep'] = 'Biarkan pengguna tetap terdaftar';
$string['extremovedsuspend'] = 'Nonaktifkan pendaftaran kursus';
$string['extremovedsuspendnoroles'] = 'Nonaktifkan pendaftaran kursus dan hapus peran';
$string['extremovedunenrol'] = 'Keluarkan pengguna dari kursus';
$string['finishenrollingusers'] = 'Selesai mendaftarkan pengguna';
$string['foundxcohorts'] = 'Ditemukan {$a} kohor';
$string['instanceadded'] = 'Metode ditambahkan';
$string['instanceeditselfwarning'] = 'Peringatan:';
$string['instanceeditselfwarningtext'] = 'Anda terdaftar pada kursus ini melalui metode pendaftaran, perubahan dapat mempengaruhi akses Anda ke kursus ini.';
$string['invalidenrolduration'] = 'Durasi pendaftaran tidak valid';
$string['invalidenrolinstance'] = 'Model pendaftaran tidak valid';
$string['invalidrequest'] = 'Permintaan invalid';
$string['invalidrole'] = 'Peran invalid';
$string['manageenrols'] = 'Kelola pengaya pendaftaran';
$string['manageinstance'] = 'Kelola';
$string['migratetomanual'] = 'Migrasi ke Pendaftaran manual';
$string['nochange'] = 'Tak ada perubahan';
$string['noexistingparticipants'] = 'Belum ada peserta';
$string['nogroup'] = 'Tidak ada grup';
$string['noguestaccess'] = 'Tamu tidak dapat mengakses kursus ini, sila masuk dengan akun Anda.';
$string['none'] = 'Tidak ada';
$string['notenrollable'] = 'Anda tidak dapat mendaftar sendiri ke kursus ini.';
$string['notenrolledusers'] = 'Pengguna lain';
$string['otheruserdesc'] = 'Para pengguna berikut ini tidak terdaftar dalam kursus ini tetapi memiliki peran, yang diwarisi atau ditugaskan di dalamnya.';
$string['participationactive'] = 'Aktif';
$string['participationnotcurrent'] = 'Bukan sekarang';
$string['participationstatus'] = 'Status';
$string['participationsuspended'] = 'Dibekukan';
$string['periodend'] = 'sampai {$a}';
$string['periodnone'] = 'terdaftar {$a}';
$string['periodstart'] = 'dari {$a}';
$string['periodstartend'] = 'dari {$a->start} sampai {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Pendaftaran';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Model pengaya pendaftaran';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID pengguna yang terakhir mengubah pendaftaran pengguna';
$string['privacy:metadata:user_enrolments:status'] = 'Status pendaftaran pengguna dalam suatu kursus';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Pengaya pendaftaran inti menyimpan pengguna yang terdaftar.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Waktu pembuatan pendaftaran pengguna';
$string['privacy:metadata:user_enrolments:timeend'] = 'Waktu berakhir pendaftaran pengguna';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Waktu modifikasi pendaftaran pengguna';
$string['privacy:metadata:user_enrolments:timestart'] = 'Waktu mulai pendaftaran pengguna';
$string['privacy:metadata:user_enrolments:userid'] = 'ID Pengguna';
$string['proceedtocourse'] = 'Lanjutkan ke konten kursus';
$string['recovergrades'] = 'Pulihkan nilai pengguna lama jika memungkinkan';
$string['rolefromcategory'] = '{$a->role} (Diwarisi dari kategori kursus)';
$string['rolefrommetacourse'] = '{$a->role} (Diwarisi dari kursus utama)';
$string['rolefromsystem'] = '{$a->role} (Ditetapkan pada level situs)';
$string['rolefromthiscourse'] = '{$a->role} (Ditetapkan pada kursus ini)';
$string['sendfromcoursecontact'] = 'Dari kontak kursus';
$string['sendfromkeyholder'] = 'Dari pemegang kunci';
$string['sendfromnoreply'] = 'Dari alamat no-reply';
$string['startdatetoday'] = 'Hari ini';
$string['synced'] = 'Disinkronkan';
$string['testsettings'] = 'Uji setelan';
$string['testsettingsheading'] = 'Uji setelan pendaftaran - {$a}';
$string['totalenrolledusers'] = '{$a} pengguna terdaftar';
$string['totalotherusers'] = '{$a} pengguna lain';
$string['totalunenrolledusers'] = '{$a} pengguna keluar';
$string['unassignnotpermitted'] = 'Anda tidak memiliki izin membatalkan penetapan peran dalam kursus ini';
$string['unenrol'] = 'Hapus pendaftaran kursus';
$string['unenrolconfirm'] = 'Apakah Anda yakin ingin membatalkan pendaftaran "{$a->user}" (sebelumnya terdaftar melalui "{$a->enrolinstancename}") dari "{$a->course}"?';
$string['unenrolleduser'] = 'Pengguna "{$a->fullname}" dikeluarkan dari kursus';
$string['unenrolme'] = 'Keluarkan saya dari kursus {$a}';
$string['unenrolnotpermitted'] = 'Anda tidak memiiki izin atau tidak dapat mengeluarkan siswa ini dari kursus.';
$string['unenrolroleusers'] = 'Keluarkan pengguna';
$string['uninstallmigrating'] = 'Migrasi pendaftaran "{$a}"';
$string['unknowajaxaction'] = 'Aksi tak dikenal diminta';
$string['unlimitedduration'] = 'Tak terbatas';
$string['userremovedfromselectiona'] = 'Pengguna "{$a}" dihapus dari pilihan';
$string['usersearch'] = 'Cari';
$string['withselectedusers'] = 'Dengan pengguna terpilih';
$string['youenrolledincourse'] = 'Anda terdaftar dalam kursus.';
$string['youunenrolledfromcourse'] = 'Anda dikeluarkan dari kursus "{$a}"';
