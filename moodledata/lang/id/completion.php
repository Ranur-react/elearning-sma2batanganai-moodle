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
 * Strings for component 'completion', language 'id', version '3.10'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Pencapaian nilai';
$string['activities'] = 'Aktivitas';
$string['activitiescompleted'] = 'Penyelesaian aktivitas';
$string['activitiescompletednote'] = 'Catatan: Penyelesaian aktivitas harus diset untuk aktivitas yang terlihat pada daftar di atas.';
$string['activitieslabel'] = 'Aktivitas / Sumber';
$string['activityaggregation'] = 'Syarat yang dibutuhkan';
$string['activityaggregation_all'] = 'SEMUA aktivitas terpilih yang harus diselesaikan';
$string['activityaggregation_any'] = 'SETIAP aktivitas terpilih yang harus diselesaikan';
$string['activitycompletion'] = 'Penyelesaian aktivitas';
$string['activitycompletionupdated'] = 'Perubahan tersimpan';
$string['activitygradenotrequired'] = 'Nilai tidak diperlukan';
$string['affectedactivities'] = 'Perubahan akan memengaruhi aktivitas atau sumber <b> {$a} </b> berikut:';
$string['aggregationmethod'] = 'Metode agregasi';
$string['all'] = 'Semua';
$string['any'] = 'Setiap';
$string['approval'] = 'Persetujuan';
$string['areyousureoverridecompletion'] = 'Apakah Anda yakin ingin mengesampingkan kondisi penyelesaian saat ini dari aktivitas ini untuk pengguna ini dan menandainya "{$a}"?';
$string['badautocompletion'] = 'Ketika Anda memilih penyelesaian otomatis, Anda juga harus mengaktifkan setidaknya satu persyaratan (di bawah).';
$string['badcompletiongradeitemnumber'] = 'Nilai wajib tidak dapat diaktifkan untuk <b> {$a} </b> karena penilaian oleh {$a} tidak diaktifkan.';
$string['bulkactivitycompletion'] = 'Edit massal penyelesaian aktivitas';
$string['bulkactivitydetail'] = 'Pilih aktivitas yang ingin Anda edit massal.';
$string['bulkcompletiontracking'] = 'Pelacakan penyelesaian';
$string['bulkcompletiontracking_help'] = '<strong> Tidak ada: </strong> Jangan tunjukkan penyelesaian aktivitas <strong> Manual: </strong> Siswa dapat menandai selesai aktivitas secara manual <strong> Dengan ketentuan: </ strong> Tampilkan aktivitas selesai jika kondisi sesuai';
$string['checkactivity'] = 'Kotak centang untuk aktivitas/sumber daya: {$a}';
$string['checkall'] = 'Centang atau hapus centang semua aktivitas dan sumber';
$string['checkallsection'] = 'Centang atau hapus centang semua aktivitas dan sumber pada topik berikut: {$a}';
$string['completed'] = 'Selesai';
$string['completedunlocked'] = 'Opsi penyelesaian tidak terkunci';
$string['completedunlockedtext'] = 'Saat Anda menyimpan perubahan, status penyelesaian untuk semua siswa akan dihapus. Jika Anda berubah pikiran tentang ini, jangan simpan formulir.';
$string['completedwarning'] = 'Opsi penyelesaian terkunci';
$string['completedwarningtext'] = 'Aktivitas ini telah ditandai selesai untuk {$a} peserta. Mengubah opsi penyelesaian akan menghapus status penyelesaiannya dan dapat menyebabkan kebingungan. Dengan demikian opsi telah dikunci dan tidak boleh dibuka kecuali benar-benar diperlukan.';
$string['completion'] = 'Pelacakan penyelesaian';
$string['completion-alt-auto-enabled'] = 'Sistem menandai item ini selesai berdasarkan kondisi: {$a}';
$string['completion-alt-auto-fail'] = 'Selesai: {$ a} (tidak mencapai nilai lulus)';
$string['completion-alt-auto-n'] = 'Tidak selesai: {$a}';
$string['completion-alt-auto-n-override'] = 'Tidak selesai: {$a->modname} (set by {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Selesai: {$ a} (mencapai nilai lulus)';
$string['completion-alt-auto-y'] = 'Selesai: {$a}';
$string['completion-alt-auto-y-override'] = 'Selesai: {$a->modname} (set by {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Siswa dapat menandai selesai secara manual aktivitas ini: {$a}';
$string['completion-alt-manual-n'] = 'Tidak selesai: {$a}. Pilih untuk menandai sebagai selesai.';
$string['completion-alt-manual-n-override'] = 'Tidak selesai: {$a->modname} (set by {$a->overrideuser}). Pilih untuk menandai sebagai selesai.';
$string['completion-alt-manual-y'] = 'Selesai: {$a}. Pilih untuk menandai sebagai tidak selesai.';
$string['completion-alt-manual-y-override'] = 'Selesai: {$a->modname} (set by {$a->overrideuser}). Pilih untuk menandai sebagai tidak selesai.';
$string['completion-fail'] = 'Selesai (tidak mencapai nilai kelulusan)';
$string['completion-n'] = 'Tidak selesai';
$string['completion-n-override'] = 'Belum selesai (ditetapkan oleh {$a})';
$string['completion-pass'] = 'Selesai (mencapai nilai kelulusan)';
$string['completion-y'] = 'Selesai';
$string['completion-y-override'] = 'Selesai (ditetapkan oleh {$a})';
$string['completion_automatic'] = 'Aktivitas otomatis lengkap apabila kondisi terpenuhi';
$string['completion_help'] = 'Jika diaktifkan, penyelesaian aktivitas dilacak, baik secara manual atau otomatis, berdasarkan kondisi tertentu. Beberapa kondisi dapat diatur jika diinginkan. Jika demikian, aktivitas hanya akan dianggap lengkap jika SEMUA ketentuan terpenuhi. Tanda centang di sebelah nama aktivitas pada halaman saja menunjukkan kapan aktivitas selesai.';
$string['completion_manual'] = 'Siswa dapat menandai selesai aktivitas secara manual';
$string['completion_none'] = 'Jangan menunjukkan penyelesaian aktivitas';
$string['completionactivitydefault'] = 'Gunakan aktivitas bawaan';
$string['completiondefault'] = 'Pelacakan penyelesaian bawaan';
$string['completiondisabled'] = 'Dinonaktifkan, tidak ditampilkan dalam setelan aktivitas';
$string['completionduration'] = 'Pendaftaran';
$string['completionenabled'] = 'Diaktifkan, kontrol melalui penyelesaian dan setelan aktivitas';
$string['completionexpected'] = 'Diharapkan selesai pada';
$string['completionexpected_help'] = 'Setelan ini menentukan tanggal kapan aktivitas diharapkan selesai.';
$string['completionexpecteddesc'] = 'Diharapkan selesai pada {$a}';
$string['completionexpectedfor'] = '{$a-> instancename} harus diselesaikan';
$string['completionicons'] = 'Kotak centang penyelesaian';
$string['completionicons_help'] = 'Tanda centang di sebelah nama aktivitas dapat digunakan untuk menunjukkan kapan aktivitas selesai. Jika sebuah kotak dengan garis putus-putus ditunjukkan, tanda centang akan muncul secara otomatis saat Anda menyelesaikan aktivitas sesuai dengan kondisi yang ditetapkan oleh pengajar. Jika kotak dengan batas padat ditampilkan, Anda dapat mengkliknya untuk mencentang kotak saat Anda merasa telah menyelesaikan aktivitas. (Mengkliknya lagi menghapus centang jika Anda berubah pikiran.) Centang tersebut opsional dan hanya merupakan cara untuk melacak pencapaian Anda pada kursus ini.';
$string['completionmenuitem'] = 'Penyelesaian';
$string['completionnotenabled'] = 'Penyelesaian tidak diaktifkan';
$string['completionnotenabledforcourse'] = 'Penyelesaian tidak diaktifkan untuk kursus ini';
$string['completionnotenabledforsite'] = 'Penyelesaian tidak diaktifkan untuk situs ini';
$string['completionondate'] = 'Tanggal';
$string['completionondatevalue'] = 'Tanggal saat kursus akan ditandai sebagai selesai';
$string['completionsettingslocked'] = 'Setelan penyelesaian terkunci';
$string['completionupdated'] = 'Penyelesaian yang diperbarui untuk aktivitas <b> {$a} </b>';
$string['completionusegrade'] = 'Perlu dinilai';
$string['completionusegrade_desc'] = 'Siswa harus mendapatkan nilai untuk menyelesaikan aktivitas ini';
$string['completionusegrade_help'] = 'Jika diaktifkan, aktivitas dianggap selesai saat siswa mendapatkan nilai. Ikon lulus dan gagal mungkin ditampilkan jika nilai kelulusan untuk aktivitas telah ditetapkan.';
$string['completionview'] = 'Perlu dilihat';
$string['completionview_desc'] = 'Siswa harus melihat aktivitas ini untuk menyelesaikannya';
$string['configcompletiondefault'] = 'Setelan bawaan untuk pelacakan penyelesaian ketika membuat aktivitas baru.';
$string['configenablecompletion'] = 'Jika diaktifkan, kondisi penyelesaian kursus dan aktivitas dapat disetel. Menyetel kondisi penyelesaian aktivitas direkomendasikan agar data yang bermakna ditampilkan untuk pengguna dalam ikhtisar kursus mereka di Dasbor.';
$string['confirmselfcompletion'] = 'Konfirmasikan penyelesaian diri';
$string['courseaggregation'] = 'Membutuhkan kondisi';
$string['courseaggregation_all'] = 'SEMUA kursus yang dipilih harus diselesaikan';
$string['courseaggregation_any'] = 'SETIAP kursus yang dipilih untuk diselesaikan';
$string['coursealreadycompleted'] = 'Anda sudah menyelesaikan kursus ini';
$string['coursecomplete'] = 'Kelas selesai';
$string['coursecompleted'] = 'Kursus selesai';
$string['coursecompletedmessage'] = '<p>Selamat!</i> <p> Anda telah menyelesaikan kursus <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Penyelesaian kursus';
$string['coursecompletioncondition'] = 'Kondisi: {$a}';
$string['coursegrade'] = 'Nilai kursus';
$string['coursesavailable'] = 'Kursus yang tersedia';
$string['coursesavailableexplaination'] = 'Catatan: Ketentuan penyelesaian kursus harus ditetapkan agar kursus muncul dalam daftar di atas.';
$string['criteria'] = 'Kriteria';
$string['criteriagroup'] = 'Kriteria grup';
$string['criteriarequiredall'] = 'Semua kriteria di bawah ini diperlukan';
$string['criteriarequiredany'] = 'Semua kriteria di bawah ini diperlukan';
$string['csvdownload'] = 'Unduh dalam format <i>spreadsheet</i> (UTF-8.csv)';
$string['datepassed'] = 'Tanggal berlalu';
$string['days'] = 'Hari';
$string['daysoftotal'] = '{$a->days} dari {$a->total}';
$string['defaultcompletion'] = 'Standar penyelesaian aktivitas';
$string['defaultcompletionupdated'] = 'Perubahan disimpan';
$string['deletecompletiondata'] = 'Hapus data penyelesaian';
$string['dependencies'] = 'Dependensi';
$string['dependenciescompleted'] = 'Penyelesaian kursus lainnya';
$string['editcoursecompletionsettings'] = 'Edit setelan  penyelesaian kursus';
$string['enablecompletion'] = 'Aktifkan pelacakan penyelesaian';
$string['enablecompletion_help'] = 'Jika diaktifkan, kondisi penyelesaian aktivitas dapat diatur dalam pengaturan aktivitas dan / atau kondisi penyelesaian kursus dapat diatur. Dianjurkan untuk mengaktifkannya sehingga data yang berarti ditampilkan dalam ikhtisar kursus di Dasbor.';
$string['enrolmentduration'] = 'Durasi pendaftaran';
$string['enrolmentdurationlength'] = 'Pengguna harus tetap terdaftar';
$string['err_noactivities'] = 'Informasi penyelesaian tidak diaktifkan untuk aktivitas apa pun, jadi tidak ada yang bisa ditampilkan. Anda dapat mengaktifkan informasi penyelesaian dengan mengedit setelan untuk suatu aktivitas.';
$string['err_nocourses'] = 'Penyelesaian kursus tidak diaktifkan untuk beberapa kursus lain, jadi tidak ada yang dapat ditampilkan. Anda dapat mengaktifkan penyelesaian kursus di setelan kursus.';
$string['err_nograde'] = 'Nilai kelulusan kursus belum ditetapkan untuk kursus ini. Untuk mengaktifkan jenis kriteria ini, Anda harus membuat nilai kelulusan untuk kursus ini.';
$string['err_noroles'] = 'Tidak ada peran dengan kemampuan moodle/course:markcomplete dalam kursus ini.';
$string['err_nousers'] = 'Tidak ada siswa dalam kursus atau grup ini yang menampilkan informasi penyelesaiannya. (Informasi penyelesaian hanya ditampilkan untuk pengguna dengan kemampuan \'Ditampilkan pada laporan penyelesaian\'. Kemampuan tersebut diizinkan untuk peran bawaan siswa saja, jadi jika tidak ada siswa, Anda akan melihat pesan ini.)';
$string['err_settingslocked'] = 'Satu atau lebih siswa telah menyelesaikan kriteria sehingga setelannya dikunci. Membuka kunci setelan kriteria penyelesaian akan menghapus semua data pengguna yang ada dan dapat menyebabkan kebingungan.';
$string['err_system'] = 'Terjadi kesalahan internal dalam sistem penyelesaian. (Administrator sistem dapat mengaktifkan informasi awakutu untuk melihat lebih detail.)';
$string['eventcoursecompleted'] = 'Menyelesaikan kursus';
$string['eventcoursecompletionupdated'] = 'Memperbarui penyelesaian kursus';
$string['eventcoursemodulecompletionupdated'] = 'Memperbarui penyelesaian aktivitas kursus';
$string['eventdefaultcompletionupdated'] = 'Memperbarui penyelesaian aktivitas kursus bawaan';
$string['excelcsvdownload'] = 'Unduh dalam format yang kompatibel dengan excel (.csv)';
$string['fraction'] = 'Fraksi';
$string['graderequired'] = 'Nilai kursus dibutuhkan';
$string['gradexrequired'] = '{$a} dibutuhkan';
$string['hiddenrules'] = 'Beberapa setelan khusus untuk <b> {$a} </b> telah disembunyikan. Untuk melihatnya jangan centang aktivitas lain';
$string['inprogress'] = 'Sedang berlangsung';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Penyelesaian manual oleh orang lain';
$string['manualcompletionbynote'] = 'Catatan: Kemampuan moodle/course:markcomplete harus diizinkan untuk peran yang muncul dalam daftar.';
$string['manualselfcompletion'] = 'Penyelesaian manual';
$string['manualselfcompletionnote'] = 'Catatan: Blok penyelesaian sendiri harus ditambahkan ke kursus jika penyelesaian manual diaktifkan.';
$string['markcomplete'] = 'Tandai selesai';
$string['markedcompleteby'] = 'Ditandai selesai oleh {$a}';
$string['markingyourselfcomplete'] = 'Menandai sendiri telah selesai';
$string['modifybulkactions'] = 'Ubah aksi yang ingin Anda edit secara massal';
$string['moredetails'] = 'Lebih detail';
$string['nocriteriaset'] = 'Tidak ada kriteria penyelesaian yang ditetapkan untuk kursus ini';
$string['nogradeitem'] = 'Nilai wajib tidak dapat diaktifkan untuk <b> {$a} </b> karena aktivitas tidak dinilai.';
$string['notcompleted'] = 'Belum selesai';
$string['notenroled'] = 'Anda tidak terdaftar dalam kursus ini';
$string['nottracked'] = 'Anda saat ini tidak dilacak oleh penyelesaian dalam kursus ini';
$string['notyetstarted'] = 'Belum dimulai';
$string['overallaggregation'] = 'Syarat penyelesaian';
$string['overallaggregation_all'] = 'Kursus selesai ketika SEMUA ketentuan terpenuhi';
$string['overallaggregation_any'] = 'Kursus selesai jika SALAH SATU persyaratan terpenuhi';
$string['pending'] = 'Tertunda';
$string['periodpostenrolment'] = 'Periode pasca pendaftaran';
$string['privacy:metadata:completionstate'] = 'Jika aktivitas sudah selesai';
$string['privacy:metadata:course'] = 'Pengenal kursus';
$string['privacy:metadata:coursecompletedsummary'] = 'Menyimpan informasi tentang pengguna yang telah menyelesaikan kriteria dalam suatu kursus';
$string['privacy:metadata:coursemoduleid'] = 'ID aktivitas';
$string['privacy:metadata:coursemodulesummary'] = 'Menyimpan data penyelesaian aktivitas untuk pengguna';
$string['privacy:metadata:coursesummary'] = 'Menyimpan data penyelesaian kursus untuk pengguna.';
$string['privacy:metadata:gradefinal'] = 'Nilai akhir diterima untuk penyelesaian kursus';
$string['privacy:metadata:overrideby'] = 'ID pengguna dari orang yang mengganti penyelesaian aktivitas';
$string['privacy:metadata:reaggregate'] = 'Jika penyelesaian kursus dikumpulkan kembali.';
$string['privacy:metadata:timecompleted'] = 'Waktu kursus selesai.';
$string['privacy:metadata:timeenrolled'] = 'Waktu pengguna terdaftar dalam kursus';
$string['privacy:metadata:timemodified'] = 'Waktu penyelesaian aktivitas diubah';
$string['privacy:metadata:timestarted'] = 'Waktu kursus dimulai.';
$string['privacy:metadata:unenroled'] = 'Jika pengguna telah dibatalkan pendaftarannya dari kursus';
$string['privacy:metadata:userid'] = 'ID pengguna orang dengan data penyelesaian kursus dan aktivitas';
$string['privacy:metadata:viewed'] = 'Jika aktivitas itu dilihat';
$string['progress'] = 'Perkembangan siswa';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Capaian: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Pengakuan pembelajaran sebelumnya';
$string['remainingenroledfortime'] = 'Tetap terdaftar untuk jangka waktu tertentu';
$string['remainingenroleduntildate'] = 'Tetap terdaftar sampai tanggal yang ditentukan';
$string['reportpage'] = 'Menampilkan pengguna {$a->from} sampai {$a->to} dari {$a->total}.';
$string['requiredcriteria'] = 'Kriteria yang dibutuhkan';
$string['resetactivities'] = 'Hapus semua aktivitas dan sumber yang dicentang';
$string['restoringcompletiondata'] = 'Menuliskan data penyelesaian';
$string['roleaggregation'] = 'Kondisi yang dibutuhkan';
$string['roleaggregation_all'] = 'SEMUA peran yang dipilih untuk ditandai saat kondisi terpenuhi';
$string['roleaggregation_any'] = 'SETIAP peran yang dipilih untuk ditandai saat kondisi terpenuhi';
$string['roleidnotfound'] = 'ID peran {$a} tidak ditemukan';
$string['saved'] = 'Tersimpan';
$string['seedetails'] = 'Lihat detail';
$string['select'] = 'Pilih';
$string['self'] = 'Sendiri';
$string['selfcompletion'] = 'Penyelesaian sendiri';
$string['showinguser'] = 'Menampilkan pengguna';
$string['unenrolingfromcourse'] = 'Keluar dari kursus';
$string['unenrolment'] = 'Batalkan pendaftaran';
$string['unit'] = 'Unit';
$string['unlockcompletion'] = 'Buka kunci opsi penyelesaian';
$string['unlockcompletiondelete'] = 'Buka kunci opsi penyelesaian dan hapus data penyelesaian pengguna';
$string['updateactivities'] = 'Perbarui status penyelesaian aktivitas yang diperiksa';
$string['usealternateselector'] = 'Gunakan pemilih kursus alternatif';
$string['usernotenroled'] = 'Pengguna tidak terdaftar dalam kursus ini';
$string['viewcoursereport'] = 'Tampilkan laporan kursus';
$string['viewingactivity'] = 'Melihat {$a}';
$string['withconditions'] = 'Dengan kondisi';
$string['writingcompletiondata'] = 'Penulisan data penyelesaian';
$string['xdays'] = '{$a} hari';
$string['yourprogress'] = 'Pencapaian Anda';
