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
 * Strings for component 'attendance', language 'id', version '3.10'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['Afull'] = 'Tidak hadir';
$string['Eacronym'] = 'E';
$string['Efull'] = 'Permisi';
$string['Lacronym'] = 'L';
$string['Lfull'] = 'Terlambat';
$string['Pacronym'] = 'P';
$string['Pfull'] = 'Menyajikan';
$string['absenteereport'] = 'Laporan absensi';
$string['acronym'] = 'Akronim';
$string['add'] = 'Menambahkan';
$string['addedrecip'] = 'Menambahkan {$a} penerima baru';
$string['addedrecips'] = 'Menambahkan {$a} penerima baru';
$string['addmultiplesessions'] = 'Banyak sesi';
$string['addsession'] = 'Tambahkan sesi';
$string['adduser'] = 'Tambahkan pengguna';
$string['addwarning'] = 'Tambahkan peringatan';
$string['all'] = 'Semua';
$string['allcourses'] = 'Semua kursus';
$string['allpast'] = 'Semua masa lalu';
$string['allsessions'] = 'Semua sesi';
$string['allsessionstotals'] = 'Total sesi  terpilih';
$string['attendance:addinstance'] = 'Tambahkan aktivitas kehadiran baru';
$string['attendance:canbelisted'] = 'Muncul di daftar';
$string['attendance:changeattendances'] = 'Ubah kehadiran';
$string['attendance:changepreferences'] = 'Mengubah Preferensi';
$string['attendance:export'] = 'Ekspor Laporan';
$string['attendance:manageattendances'] = 'Kelola Kehadiran';
$string['attendance:managetemporaryusers'] = 'Kelola pengguna sementara';
$string['attendance:takeattendances'] = 'Lakukan presensi kehadiran';
$string['attendance:view'] = 'Melihat kehadiran';
$string['attendance:viewsummaryreports'] = 'Lihat laporan ringkasan kursus';
$string['attendance_already_submitted'] = 'Kehadiran Anda telah disetel';
$string['attendance_no_status'] = 'Tidak ada status valid yang tersedia - Anda mungkin terlambat untuk mencatat kehadiran.';
$string['attendancedata'] = 'Data kehadiran';
$string['attendancefile'] = 'Berkas kehadiran (format csv)';
$string['attendancefile_help'] = 'Berkas harus berupa berkas CSV dengan tajuk baris dan ruas untuk mengidentifikasi pengguna dan waktu kehadiran dicatat misalnya ((email,scantime) atau (username,time)';
$string['attendanceforthecourse'] = 'Kehadiran kursus';
$string['attendancegrade'] = 'Nilai kehadiran';
$string['attendancenotset'] = 'Anda harus setel kehadiran Anda';
$string['attendancenotstarted'] = 'Kehadiran belum dimulai untuk kursus ini';
$string['attendancepercent'] = 'Presentasi kehadiran';
$string['attendancereport'] = 'Laporan kehadiran';
$string['attendanceslogged'] = 'Kehadiran dicatat';
$string['attendancestaken'] = 'Melakukan presensi kehadiran';
$string['attendancesuccess'] = 'Berhasil melakukan presensi kehadiran';
$string['attendanceupdated'] = 'Kehadiran berhasil diperbarui';
$string['attrecords'] = 'Rekaman kehadiran';
$string['automark_help'] = 'Memungkinkan penandaan diselesaikan secara otomatis. Jika "Ya", siswa akan secara otomatis ditandai tergantung pada akses pertama mereka ke kursus. Jika "Setel tanpa tanda di akhir sesi" setiap siswa yang belum menandai kehadiran mereka akan disetel ke status tidak ditandai dipilih.';
$string['automarkclose'] = 'Setel tanpa tanda di akhir sesi';
$string['automarktask'] = 'Periksa sesi kehadiran yang membutuhkan penandaan otomatis';
$string['averageattendance'] = 'Rata-rata kehadiran';
$string['averageattendancegraded'] = 'Rata-rata kehadiran';
$string['calendarevent'] = 'Buat acara kalender untuk sesi';
$string['calendarevent_help'] = 'Jika diaktifkan, acara kalender akan dibuat untuk sesi ini. Jika dinonaktifkan, acara kalender yang ada untuk sesi ini akan dihapus.';
$string['caleventcreated'] = 'Acara kalender untuk sesi berhasil dibuat';
$string['caleventdeleted'] = 'Acara kalender untuk sesi berhasil dihapus';
$string['cannottakeforgroup'] = 'Anda tidak dapat melakukan presensi untuk grup "{$a}"';
$string['categoryreport'] = 'Laporan kategori kursus';
$string['changeattendance'] = 'Ubah kehadiran';
$string['changesession'] = 'Ubah sesi';
$string['checkweekdays'] = 'Pilih hari kerja yang termasuk dalam rentang tanggal sesi yang Anda pilih.';
$string['closed'] = 'Sesi ini saat ini tidak tersedia untuk penandaan sendiri';
$string['confirmdeletehiddensessions'] = 'Anda yakin ingin menghapus {$a->count} sesi yang dijadwalkan sebelum tanggal mulai kursus ({$a->date})?';
$string['confirmdeleteuser'] = 'Anda yakin menghapus pengguna \'{$a->fullname}\' ({$a->email})?<br/>Semua rekaman data kehadiran akan dihapus permanen.';
$string['copyfrom'] = 'Salin data kehadiran dari';
$string['coursesummary'] = 'Laporan ringkasan kursus';
$string['createmultiplesessions'] = 'Buat beberapa sesi';
$string['createmultiplesessions_help'] = 'Fungsi ini memungkinkan Anda membuat beberapa sesi dalam satu langkah sederhana. Sesi dimulai pada tanggal sesi dasar dan berlanjut hingga tanggal \'ulangi sampai\'. * <strong> Ulangi pada </strong>: Pilih hari dalam seminggu ketika kelas Anda akan bertemu (misalnya, Senin / Rabu / Jumat). * <strong> Ulangi setiap </strong>: Ini memungkinkan untuk pengaturan frekuensi. Jika kelas Anda akan bertemu setiap minggu, pilih 1; jika akan bertemu dua minggu sekali, pilih 2; setiap minggu ke-3, pilih 3, dll. * <strong> Ulangi hingga </strong>: Pilih hari terakhir kelas (hari terakhir Anda ingin presensi).';
$string['createonesession'] = 'Buat satu sesi untuk kursus';
$string['csvdelimiter'] = 'Pembatas CSV';
$string['defaultsessionsettings'] = 'Setalan sesi bawaan';
$string['defaultsessionsettings_help'] = 'Setelan ini menentukan default untuk semua sesi baru';
$string['defaultsettings'] = 'Setelan bawaan kehadiran';
$string['defaultsettings_help'] = 'Setelan ini menentukan aturan bawaan untuk semua kehadiran baru';
$string['defaultstatus'] = 'Setelan status bawaan';
$string['defaultsubnet_help'] = 'Pencatatan kehadiran mungkin dibatasi untuk subnet tertentu dengan menentukan daftar alamat IP sebagian atau lengkap yang dipisahkan koma. Ini adalah nilai default yang digunakan saat membuat sesi baru.';
$string['deletedgroup'] = 'Grup yang terkait dengan sesi ini telah dihapus';
$string['deletehiddensessions'] = 'Hapus semua sesi tersembunyi';
$string['deletelogs'] = 'Hapus data kehadiran';
$string['deleteselected'] = 'Hapus yang terpilih';
$string['deletesession'] = 'Hapus sesi';
$string['deletesessions'] = 'Hapus semua sesi';
$string['deletingsession'] = 'Menghapus sesi kursus';
$string['downloadexcel'] = 'Unduh dalam format Excel';
$string['editsession'] = 'Edit sesi';
$string['emailcontent_default'] = 'Hallo %userfirstname%, Kehadiran Anda pada %coursename% %attendancename% telah turun di bawah %warningpercent% sekarang %percent% - Kami harap Anda baik-baik saja! Untuk mendapatkan hasil maksimal dari kursus ini, Anda harus meningkatkan kehadiran Anda, silakan hubungi kami jika Anda memerlukan dukungan lebih lanjut.';
$string['emailcontent_help'] = 'Saat peringatan dikirim ke siswa, itu mengambil konten surel dari bidang ini. Karakter pengganti berikut dapat digunakan: <ul> <li>%coursename%</li> <li>%userfirstname%</li> <li>%userlastname%</li> <li>%userid%</li> <li>%warningpercent%</li> <li>%attendancename%</li> <li>%cmid%</li> <li>%numtakensessions%</li> <li>%points%</li> <li>%maxpoints%</li> <li>%percent%</li> </ul>';
$string['emailsubject_default'] = 'Peringatan kehadiran';
$string['enablecalendar_desc'] = 'Jika diaktifkan, acara kalender akan dibuat untuk setiap sesi kehadiran. Setelah mengubah setelan ini, Anda harus menjalankan laporan ulang kalender.';
$string['enablewarnings_desc'] = 'Ini memungkinkan set peringatan untuk ditentukan untuk kehadiran dan pemberitahuan surel kepada pengguna ketika kehadiran turun di bawah ambang batas yang dikonfigurasi.
<br/> <strong> PERINGATAN: Ini adalah fitur baru dan belum diuji secara ekstensif. Gunakan dengan risiko Anda sendiri dan berikan tanggapan di forum moodle jika menurut Anda itu berfungsi dengan baik. </strong>';
$string['endtime'] = 'Waktu akhir sesi';
$string['error:coursehasnoattendance'] = 'Kursus dengan nama pendek {$a} ini tidak memiliki aktivitas kehadiran.';
$string['error:qrcode'] = 'Izinkan siswa untuk mencatat kehadiran sendiri harus diaktifkan untuk menggunakan kode QR! Melewati.';
$string['error:sessioncourseinvalid'] = 'Kursus sesi tidak valid! Lewati.';
$string['error:sessiondateinvalid'] = 'Tanggal sesi tidak valid! Lewati.';
$string['error:sessionendinvalid'] = 'Waktu akhir sesi tidak valid! Lewati.';
$string['eventreportviewed'] = 'Melihat laporan kehadiran';
$string['eventsessionipshared'] = 'Menandai kehadiran sendiri ketika terjadi Konflik IP';
$string['hiddensessions_help'] = 'Sesi disembunyikan jika dijadwalkan sebelum tanggal mulai kursus. Anda dapat menggunakan fitur ini untuk menyembunyikan sesi yang lebih lama daripada menghapusnya. Hanya sesi yang terlihat yang akan muncul di Buku Nilai';
$string['hideextrauserdetails'] = 'Sembunyikan detail pengguna tambahan';
$string['hidensessiondetails'] = 'Sembunyikan detail sesi';
$string['includeqrcode'] = 'Sertakan kode QR';
$string['indicator:cognitivedepth'] = 'Kehadiran kognitif';
$string['indicator:cognitivedepthdef'] = 'Kehadiran kognitif';
$string['indicator:socialbreadth'] = 'Kehadiran sosial';
$string['indicator:socialbreadthdef'] = 'Kehadiran sosial';
$string['mobilesettings'] = 'Setelan aplikasi seluler';
$string['mobilesettings_help'] = 'Setelan ini mengontrol perilaku aplikasi seluler Moodle';
$string['modulename'] = 'Kehadiran';
$string['modulename_help'] = 'Modul aktivitas kehadiran memungkinkan seorang guru untuk mengambil kehadiran selama kelas dan siswa untuk melihat catatan kehadiran mereka sendiri. Guru dapat membuat beberapa sesi dan dapat menandai status kehadiran sebagai "Hadir", "Absen", "Terlambat", atau "Dimaafkan" atau mengubah status agar sesuai dengan kebutuhan mereka. Laporan tersedia untuk seluruh kelas atau siswa individu.';
$string['modulenameplural'] = 'Kehadiran';
$string['mustselectusers'] = 'Harus pilih pengguna untuk melakukan ekspor';
$string['noabsentstatusset'] = 'Status yang digunakan tidak memiliki status untuk digunakan jika tidak ditandai.';
$string['noguest'] = 'Tamu tidak dapat melihat kehadiran';
$string['pluginadministration'] = 'Administrasi kehadiran';
$string['pluginname'] = 'Kehadiran';
$string['preferences_desc'] = 'Perubahan setelan status akan mempengaruhi sesi kehadiran yang ada dan dapat mempengaruhi penilaian.';
$string['privacy:metadata:attendancelog'] = 'Log kehadiran pengguna dicatat.';
$string['privacy:metadata:statusset'] = 'Ke ID yang mana status ID disetel.';
$string['qrcode'] = 'Kode QR';
$string['resetdescription'] = 'Ingatlah bahwa menghapus data kehadiran akan menghapus informasi dari basis data. Anda bisa menyembunyikan sesi lama yang telah mengubah tanggal mulai tentunya!';
$string['rotateqrcode'] = 'Putar kode QR';
$string['rotateqrcode_cleartemppass_task'] = 'Tugas untuk menghapus kata sandi sementara yang dibuat dengan memutar fungsi kode QR.';
$string['rotateqrcodeexpirymargin'] = 'Putar margin kadaluwarsa kode QR / kata sandi (detik)';
$string['rotateqrcodeexpirymargin_desc'] = 'Interval waktu (detik) untuk mengizinkan kode QR / kata sandi kedaluwarsa.';
$string['rotateqrcodeinterval'] = 'Putar kode QR / interval kata sandi (detik)';
$string['rotateqrcodeinterval_desc'] = 'Interval waktu (detik) untuk memutar kode QR / kata sandi.';
$string['save'] = 'Simpan kehadiran';
$string['search:activity'] = 'Kehadiran - Informasi aktivitas';
$string['sessionsbyactivity'] = 'Model kehadiran';
$string['showextrauserdetails'] = 'Tampilkan detail pengguna tambahan';
$string['showqrcode'] = 'Tampilkan kode QR';
$string['showsessiondetails'] = 'Tunjukkan detail sesi';
$string['status'] = 'Status';
$string['statusset'] = 'Setelan status {$a}';
$string['statussetsettings'] = 'Setelan status';
$string['strftimedm'] = '%b %d';
$string['studentmarked'] = 'Kehadiran Anda di sesi ini telah dicatat.';
$string['studentscanmark'] = 'Izinkan siswa untuk mencatat kehadiran mereka sendiri';
$string['studentscanmark_help'] = 'Jika dicentang, siswa akan dapat mengubah status kehadiran mereka untuk sesi tersebut.';
$string['studentscanmarksessiontime'] = 'Siswa mencatat kehadiran selama waktu sesi';
$string['studentscanmarksessiontime_desc'] = 'Jika dicentang, siswa hanya dapat mencatat kehadiran mereka selama sesi.';
$string['studentscanmarksessiontimeend_desc'] = 'Jika sesi tidak memiliki waktu akhir, berapa menit sesi harus tersedia bagi siswa untuk mencatat kehadiran mereka.';
$string['submitattendance'] = 'Ajukan kehadiran';
$string['subnetactivitylevel_desc'] = 'Jika diaktifkan, pengajar dapat mengganti subnet bawaan di tingkat aktivitas saat membuat kehadiran. Jika tidak, bawaan situs akan digunakan saat membuat sesi.';
$string['summary'] = 'Ringkasan';
$string['timeahead'] = 'Beberapa sesi yang melebihi satu tahun tidak dapat dibuat, harap sesuaikan tanggal mulai dan akhir.';
$string['usestatusset'] = 'Setelan status';
