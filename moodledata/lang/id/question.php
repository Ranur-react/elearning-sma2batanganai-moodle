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
 * Strings for component 'question', language 'id', version '3.10'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Aksi';
$string['addanotherhint'] = 'Tambahkan petunjuk lain';
$string['addcategory'] = 'Tambah kategori';
$string['addmorechoiceblanks'] = 'Klik untuk menambahkan {no} pilihan jawaban';
$string['adminreport'] = 'Laporkan untuk masalah yang dapat terjadi pada basis data soal.';
$string['advancedsearchoptions'] = 'Opsi pencarian';
$string['alltries'] = 'Semua pencobaan';
$string['answer'] = 'Jawaban';
$string['answers'] = 'Semua jawaban';
$string['answersaved'] = 'Jawaban disimpan';
$string['attemptfinished'] = 'Pencobaan selesai';
$string['attemptfinishedsubmitting'] = 'Pencobaan selesai mengirimkan:';
$string['attemptoptions'] = 'Opsi pencobaan';
$string['availableq'] = 'Tersedia?';
$string['badbase'] = 'Basis buruk sebelum **: {$a}**';
$string['behaviour'] = 'Sikap';
$string['behaviourbeingused'] = 'Sikap digunakan: {$a}';
$string['broken'] = 'Ini adalah "tautan rusak", ia merujuk kepada berkas yang tidak ada.';
$string['byandon'] = 'oleh {$a->user} pada {$a->time}';
$string['cannotcopybackup'] = 'Tidak dapat menyalin berkas cadangan';
$string['cannotcreate'] = 'Tidak dapat membuat masukan pada tabel question_attempts';
$string['cannotcreatepath'] = 'Tidak dapat membuat jalan: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Anda tidak dapat menghapus sikap \'{$a}\'. Ia digunakan oleh pencobaan soal.';
$string['cannotdeletecate'] = 'Anda tidak dapat menghapus kategori tersebut. Ia adalah kategori bawaan untuk konteks ini.';
$string['cannotdeleteneededbehaviour'] = 'Tidak dapat menghapus sikap soal \'{$a}\'. Ada sikap lain yang bergantung padanya.';
$string['cannotdeleteqtypeinuse'] = 'Anda tidak dapat menghapus tipe soal \'{$a}\'. Ada soal dari tipe ini pada bank soal.';
$string['cannotdeleteqtypeneeded'] = 'Anda tidak dapat menghapus tipe soal \'{$a}\'. Ada tipe soal lain yang bergantung padanya.';
$string['cannotdeletetopcat'] = 'Kategori utama tidak dapat di hapus.';
$string['cannotedittopcat'] = 'Kategori utama tidak dapat diubah.';
$string['cannotenable'] = 'Tipe soal {$a} tidak dapat dibuat secara langsung.';
$string['cannotenablebehaviour'] = 'sikap soal {$a} tidak dapat digunakan secara langsung. Hanya untuk penggunaan internal saja.';
$string['cannotfindcate'] = 'Tidak dapat menemukan rekaman kategori';
$string['cannotfindquestionfile'] = 'Tidak dapat menemukan berkas data soal pada zip';
$string['cannotgetdsfordependent'] = 'Tidak bisa mendapatkan paket data tertentu untuk paket data soal yang bergantung! (question: {$a->id}, datasetitem: {$a->item})';
$string['cannotgetdsforquestion'] = 'Tidak bisa mendapatkan paket data tertentu untuk soal yang dihitung! (question: {$a})';
$string['cannothidequestion'] = 'Tidak dapat menyembunyikan soal';
$string['cannotimportformat'] = 'Maaf, mengimpor format ini belum diimplementasikan!';
$string['cannotinsertquestion'] = 'Tidak dapat memasukkan soal baru!';
$string['cannotinsertquestioncatecontext'] = 'Tidak dapat memasukkan kategori soal baru {$a->cat} contextid ilegal{$a->ctx}';
$string['cannotloadquestion'] = 'Tidak dapat memuat soal';
$string['cannotmovequestion'] = 'Anda tidak dapat menggunakan naskah ini untuk memindahkan soal yang memiliki berkas terkait dengannya dari area yang berbeda.';
$string['cannotopenforwriting'] = 'Tidak dapat dibuka untuk ditulis: {$a}';
$string['cannotpreview'] = 'Anda tidak dapat melakukan pratinjau pada soal-soal ini!';
$string['cannotread'] = 'Tidak dapat membaca berkas impor (atau berkas kosong)';
$string['cannotretrieveqcat'] = 'Tidak dapat mengambil kategori soal';
$string['cannotunhidequestion'] = 'Gagal untuk membuka soal.';
$string['cannotunzip'] = 'Tidak dapat membuka berkas zip.';
$string['cannotwriteto'] = 'Tidak dapat menulis soal terekspor ke {$a}';
$string['categories'] = 'Kategori';
$string['category'] = 'Kategori';
$string['categorycurrent'] = 'Kategori saat ini';
$string['categorycurrentuse'] = 'Gunakan kategori ini';
$string['categorydoesnotexist'] = 'Kategori ini tidak ada';
$string['categoryinfo'] = 'Informasi kategori';
$string['categorymove'] = 'Kategori \'{$a->name}\' berisi {$a->count} pertanyaan (beberapa pertanyaan tersembunyi atau dalam pertanyaan acak masih digunakan dalam kuis).  Silakan memilih kategori yang lain untuk tujuannya.';
$string['categorymoveto'] = 'Simpan kategori';
$string['categorynamecantbeblank'] = 'Nama kategori tidak dapat dikosongkan.';
$string['changeoptions'] = 'Opsi perubahan';
$string['changepublishstatuscat'] = 'Kategori "{$a->name}" pada kursus "{$a->coursename}" akan berubah status pembagiannya dari {$a->changefrom} menjadi {$a->changeto}.';
$string['check'] = 'Periksa';
$string['chooseqtypetoadd'] = 'Pilih tipe soal untuk ditambahkan';
$string['clearwrongparts'] = 'Bersihkan respon salah';
$string['clickflag'] = 'Tandai pertanyaan';
$string['clicktoflag'] = 'Tandai soal untuk referensi dimasa depan';
$string['clicktounflag'] = 'Hilangkan penanda';
$string['clickunflag'] = 'Hilangkan penanda';
$string['closepreview'] = 'Tutup pratinjau';
$string['combinedfeedback'] = 'Kumpulan umpan balik';
$string['comment'] = 'Komentar';
$string['commented'] = 'Dikomentari: {$a}';
$string['commentormark'] = 'Buat komentar atau timpa tanda';
$string['comments'] = 'Komentar-komentar';
$string['commentx'] = 'Komentar: {$a}';
$string['complete'] = 'Selesai';
$string['contexterror'] = 'Anda seharusnya tidak dapat kesini apabila anda tidak memindahkan kategori ke konteks lain.';
$string['copy'] = 'Salin dari {$a} dan ubah tautan.';
$string['correct'] = 'Benar';
$string['correctfeedback'] = 'Untuk respon benar manapun';
$string['correctfeedbackdefault'] = 'Jawaban anda benar.';
$string['created'] = 'Dibuat';
$string['createdby'] = 'Dibuat oleh';
$string['createdmodifiedheader'] = 'Dibuat / terakhir disimpan';
$string['createnewquestion'] = 'Buat soal baru . . .';
$string['cwrqpfs'] = 'Soal acak memilih soal dari subkategori';
$string['cwrqpfsinfo'] = '<p> Selama peningkatan versi ke Moodle 1.9 kami akan memisahkan kategori soal ke dalam konteks yang berbeda. Beberapa kategori soal dan soal di situs Anda harus diubah status berbaginya. Ini diperlukan dalam kasus yang jarang terjadi di mana satu atau lebih soal \'acak\' dalam kuis diatur untuk memilih dari campuran kategori bersama dan tidak dibagikan (seperti yang terjadi di situs ini). Ini terjadi ketika soal \'acak\' diatur untuk memilih dari subkategori dan satu atau lebih subkategori memiliki status berbagi yang berbeda dengan kategori induk tempat soal acak dibuat. </p>
<p> Kategori soal berikut, dari mana soal \'acak\' dalam kategori induk memilih soal, status berbaginya akan diubah ke status berbagi yang sama dengan kategori dengan soal \'acak\' pada saat meningkatkan versi ke Moodle 1.9. Kategori berikut akan mengalami perubahan status berbaginya. Soal yang terpengaruh akan terus berfungsi di semua kuis yang ada sampai Anda menghapusnya dari kuis ini. </p>';
$string['cwrqpfsnoprob'] = 'Tidak ada kategori soal pada situs anda yang terpengaruh dengan permasalahan \'Soal acak yang mengambil soal dari subkategori\'.';
$string['decimalplacesingrades'] = 'Jumlah desimal pada nilai';
$string['defaultfor'] = 'Setelan bawaan untuk {$a}';
$string['defaultinfofor'] = 'Kategori bawaan untuk soal yang dibagikan pada konteks \'{$a}\'.';
$string['defaultmark'] = 'Poin bawaan';
$string['defaultmarkmustbepositive'] = 'Poin bawaan harus positif.';
$string['deletecoursecategorywithquestions'] = 'Ada soal pada bank soal bergubungan dengan kategori kursus ini. Apabila anda melanjutkan, maka akan terhapus. Anda mungkin ingin memindahkannya dulu dengan menggunakan antarmuka bank soal.';
$string['deletequestioncheck'] = 'Apakah anda benar-benar yakin untuk menghapus \'{$a}\'?';
$string['deletequestionscheck'] = 'Apakah anda benar-benar yakin untuk menghapus soal berikut?';
$string['deletingbehaviour'] = 'Menghapus sikap soal \'{$a}';
$string['deletingqtype'] = 'Menghapus tipe soal \'{$a}';
$string['didnotmatchanyanswer'] = '[Tidak cocok dengan jawaban manapun]';
$string['disabled'] = 'Dinonaktifkan';
$string['displayoptions'] = 'Opsi tampilan';
$string['disterror'] = 'Distribusi {$a} menyebabkan masalah';
$string['donothing'] = 'Jangan salin atau pindahkan berkas atau mengubah tautan.';
$string['editcategories'] = 'Sunting kategori';
$string['editcategories_help'] = 'Daripada menyimpan semuanya dalam satu daftar besar, soal dapat disusun kedalam kategori dan subkategori.

Setiap kategori memiliki konteks yang menentukan dimana soal pada kategori dapat digunakan:

* Konteks aktifitas - Soal hanya tersedia dalam modul aktifitas
* Konteks kursus - Soal tersedia pada seluruh modul aktifitas dalam kursus
* Konteks kategori kursus - Soal tersedia di seluruh modul aktivitas dan kursus pada kategori kursus
* Konteks sistem - Soal tersedia di seluruh kursus dan aktivitas pada situs

Kategori juga dapat digunakan pada soal acak, karena soal-soalnya akan diambil dari kategori tertentu.';
$string['editcategories_link'] = 'soal/kategori';
$string['editcategory'] = 'Sunting kategori';
$string['editingcategory'] = 'Menyunting kategori';
$string['editingquestion'] = 'Menyunting soal';
$string['editquestion'] = 'Sunting soal';
$string['editquestions'] = 'Sunting soal';
$string['editthiscategory'] = 'Sunting kategori ini';
$string['emptyxml'] = 'Galat tidak dikenali - imsmanifest.xml kosong';
$string['enabled'] = 'Diaktifkan';
$string['erroraccessingcontext'] = 'Tidak dapat mengakses konteks';
$string['errordeletingquestionsfromcategory'] = 'Galat menghapus soal dari kategori {$a}.';
$string['errorduringpost'] = 'Terjadi galat ketika pasca-proses!';
$string['errorduringpre'] = 'Terjadi galat ketika pra-proses!';
$string['errorduringproc'] = 'Terjadi galat ketika proses!';
$string['errorduringregrade'] = 'Tidak dapat menilai ulang soal {$a->qid}, pergi ke status {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Galat: tidak dapat menyalin berkas {$a}.';
$string['errorfilecannotbemoved'] = 'Galat: tidak dapat memindahkan berkas {$a}.';
$string['errorfileschanged'] = 'Galat: berkas yang ditautkan dari soal telah dirubah sejak form ditampilkan';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Soal ({$a}) muncul lebih dari sekali dengan bobot berbeda di posisi yang berbeda pada tes. Hal ini tidak didukung oleh laporan statistik saat ini dan kemungkinan akan membuat statistik untuk soal ini tidak dapat diandalkan.';
$string['errormanualgradeoutofrange'] = 'Nilai {$a->grade} tidak diantara 0 and {$a->maxgrade} untuk soal {$a->name}. Nilai dan komentar tidak disimpan.';
$string['errormovingquestions'] = 'Galat ketika memindahkan soal dengan ID {$a}.';
$string['errorpostprocess'] = 'Terjadi galat ketika pasca-proses!';
$string['errorpreprocess'] = 'Terjadi galat ketika pra-proses!';
$string['errorprocess'] = 'Terjadi galat ketika proses!';
$string['errorprocessingresponses'] = 'Terjadi galat ketika memproses respon anda ({$a}). Pilih lanjutkan untuk kembali ke halaman tadi anda berada dan coba lagi.';
$string['errorsavingcomment'] = 'Galat menyimpan komentar untuk soal {$a->name} pada basis data.';
$string['errorsavingflags'] = 'Galat menyimpan status tanda';
$string['errorupdatingattempt'] = 'Galat percobaan pembaruan {$a->id} pada basis data.';
$string['eventquestioncategorycreated'] = 'Kategori soal dibuat';
$string['eventquestioncategorydeleted'] = 'Kategori pertanyaan telah dihapus';
$string['eventquestioncategorymoved'] = 'Kategori pertanyaan telah dipindahkan';
$string['eventquestioncategoryupdated'] = 'Kategori pertanyaan telah diperbarui';
$string['eventquestioncategoryviewed'] = 'Kategori pertanyaan telah dilihat';
$string['eventquestioncreated'] = 'Pertanyaan telah dibuat';
$string['eventquestiondeleted'] = 'Pertanyaan telah dihapus';
$string['eventquestionmoved'] = 'Pertanyaan telah dipindahkan';
$string['eventquestionsexported'] = 'Pertanyaan telah diekspor';
$string['eventquestionsimported'] = 'Pertanyaan telah diimpor';
$string['eventquestionupdated'] = 'Pertanyaan telah diperbarui';
$string['eventquestionviewed'] = 'Pertanyaan telah dilihat';
$string['export'] = 'Ekspor';
$string['exportasxml'] = 'Ekspor ke format Moodle XML';
$string['exportcategory'] = 'Ekspor kategori';
$string['exportcategory_help'] = 'Pengaturan ini menentukan kategori, yang darinya soal yang diekspor akan diambil.

Beberapa format impor tertentu, seperti GIFT dan Moodle XML, mengizinkan kategori dan data konteks untuk dimasukkan kedalam berkas ekspor, memungkinkannya untuk dibuat kembali pada impor (sesuai pilihan). Apabila diperlukan, kotak pilihan yang berhubungan harus dipilih.';
$string['exporterror'] = 'Terjadi galat ketika ekspor!';
$string['exportfilename'] = 'soal-soal';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Unduh pertanyaan ini dengan format Moodle XML';
$string['exportquestions'] = 'Ekspor soal ke berkas';
$string['exportquestions_help'] = 'Fungsi ini memungkinkan ekspor kategori lengkap (dan subkategori manapun) dari soal ke berkas. Perhatikan bahwa tergantung pada format berkas yang dipilih, beberapa data soal dan tipe soal tertentu mungkin tidak terekspor.';
$string['exportquestions_link'] = 'soal/ekspor';
$string['feedback'] = 'Umpan balik';
$string['filecantmovefrom'] = 'Berkas soal tidak dapat dipindahkan karena anda tidak memiliki izin untuk memindahkan berkas dari tempat yang sedang anda coba pindahkan.';
$string['filecantmoveto'] = 'Berkas soal tidak dapat dipindahkan atau disalin karena anda tidak memiliki izin untuk menambahkan berkas ke tempat yang sedang anda coba pindahkan.';
$string['fileformat'] = 'Format berkas';
$string['filesareacourse'] = 'area berkas kursus';
$string['filesareasite'] = 'area berkas situs';
$string['filestomove'] = 'Pindahkan / salin berkas ke {$a}?';
$string['fillincorrect'] = 'Isi respon benar';
$string['filterbytags'] = 'Filter dengan tag...';
$string['firsttry'] = 'Pencobaan pertama';
$string['flagged'] = 'Ditandai';
$string['flagthisquestion'] = 'Tandai soal ini';
$string['formquestionnotinids'] = 'Form berisi soal yang tidak ada pada questionids';
$string['fractionsnomax'] = 'Salah satu jawaban harus memiliki nilai 100% sehingga dimungkinkan untuk meraih nilai sempurna untuk soal ini.';
$string['generalfeedback'] = 'Umpan balik umum';
$string['generalfeedback_help'] = 'Umpan balik umum diperlihatkan kepada siswa setelah mereka menyelesaikan soal. Tidak seperti umpan balik khusus, yang bergantung pada jenis soal dan tanggapan apa yang diberikan siswa, teks umpan balik umum yang sama ditampilkan kepada semua siswa.

Anda dapat menggunakan umpan balik umum untuk memberi siswa jawaban yang benar-benar dikerjakan dan mungkin tautan ke lebih banyak informasi yang dapat mereka gunakan jika mereka tidak memahami soalnya.';
$string['getcategoryfromfile'] = 'Dapatkan kategori dari berkas';
$string['getcontextfromfile'] = 'Dapatkan konteks dari berkas';
$string['hintn'] = 'Petunjuk {no}';
$string['hintnoptions'] = 'Opsi petunjuk {no}';
$string['hinttext'] = 'Teks petunjuk';
$string['howquestionsbehave'] = 'Bagaimana soal bersikap';
$string['howquestionsbehave_help'] = 'Siswa dapat berinteraksi dengan pertanyaan dalam kuis dengan berbagai cara berbeda. Misalnya, Anda mungkin ingin siswa memasukkan jawaban untuk setiap pertanyaan dan kemudian mengirimkan seluruh kuis, sebelum ada yang dinilai atau mereka mendapatkan umpan balik. Itu akan menjadi mode \'Tanggapan yang ditunda\'.

Alternatifnya, Anda mungkin ingin siswa mengirimkan setiap pertanyaan sambil berjalan untuk mendapatkan umpan balik segera, dan jika mereka tidak segera menjawabnya, coba lagi untuk mendapatkan nilai yang lebih sedikit. Itu akan menjadi mode \'Interaktif dengan beberapa percobaan\'.

Itu mungkin dua mode perilaku yang paling umum digunakan.';
$string['howquestionsbehave_link'] = 'soal/sikap';
$string['idnumber'] = 'Nomor ID';
$string['ignorebroken'] = 'Abaikan tautan rusak';
$string['import'] = 'Impor';
$string['importcategory'] = 'Impor kategori';
$string['importcategory_help'] = 'Pengaturan ini menentukan ke kategori mana soal yang diimpor akan dimasukkan.

Beberapa format impor tertentu, seperti GIFT dan Moodle XML, dapat berisi kategori dan data konteks pada berkas impor. Untuk mempergunakan data ini, daripada kategori yang dipilih, kotak pilihan yang berhubungan harus dipilih. Apabila kategori yang dispesifikasikan pada berkas impor tidak ada, maka akan dibuat.';
$string['importerror'] = 'Terjadi galat ketika proses impor';
$string['importerrorquestion'] = 'Galat mengimpor soal';
$string['importfromcoursefiles'] = '... atau pilih berkas kursus untuk diimpor.';
$string['importfromupload'] = 'Pilih berkas untuk diunggah ...';
$string['importingquestions'] = 'Mengimpor {$a} soal dari berkas';
$string['importparseerror'] = 'Galat ditemukan menguraikan kalimat berkas impor. Tidak ada soal diimpor. Untuk mengimpor soal, coba lagi dengan mengatur \'Berhenti ketika galat\' ke \'Tidak';
$string['importquestions'] = 'Impor soal dari berkas';
$string['importquestions_help'] = 'Fungsi ini memungkinkan soal dari bermacam format diimpor melalui berkas teks. Perhatikan bahwa berkas harus menggunakan penyandian UTF-8';
$string['importquestions_link'] = 'soal/impor';
$string['importwrongfiletype'] = 'Tipe berkas yang anda pilih ({$a->actualtype}) tidak cocok dengan tipe yang diperlukan oleh format impor ({$a->expectedtype}).';
$string['impossiblechar'] = 'Karakter yang tidak dimungkinkan {$a} terdeteksi pada karakter tanda kurung';
$string['includesubcategories'] = 'Tampilkan juga soal dari subkategori';
$string['incorrect'] = 'Tidak benar';
$string['incorrectfeedback'] = 'Untuk setiap respon tidak benar';
$string['incorrectfeedbackdefault'] = 'Jawaban anda tidak benar.';
$string['information'] = 'Informasi';
$string['invalidanswer'] = 'Jawaban tidak lengkap';
$string['invalidarg'] = 'Tidak ada argumen sah yang disuplai atau pengaturan server tidak benar';
$string['invalidcategoryidforparent'] = 'Kategori id untuk induk tidak benar!';
$string['invalidcategoryidtomove'] = 'Categori id untuk pindah tidak benar!';
$string['invalidconfirm'] = 'Senar konfirmasi tidak benar';
$string['invalidcontextinhasanyquestions'] = 'Konteks yang tidak benar dilanjutkan ke question_context_has_any_questions.';
$string['invalidgrade'] = 'Nilai ({$a}) tidak cocok dengan opsi nilai - soal dilewatkan.';
$string['invalidpenalty'] = 'Penalti tidak benar';
$string['invalidwizardpage'] = 'Tidak ada halaman wizard yang dispesifikasikan atau tidak benar!';
$string['lastmodifiedby'] = 'Terakhir dimodifikasi oleh';
$string['lasttry'] = 'Pencobaan terakhir';
$string['linkedfiledoesntexist'] = 'Berkas tertaut {$a} tidak ada';
$string['makechildof'] = 'Buat anak dari \'{$a}';
$string['makecopy'] = 'Buat salinan';
$string['maketoplevelitem'] = 'Pindahkan ke level atas';
$string['manualgradeinvalidformat'] = 'Ini bukan nomor yang sah.';
$string['manualgradeoutofrange'] = 'Nilai ini diluar rentang yang sah.';
$string['manuallygraded'] = 'Dinilai secara manual {$a->mark} dengan komentar: {$a->comment}';
$string['mark'] = 'Tandai';
$string['markedoutof'] = 'Ditandai dari';
$string['markedoutofmax'] = 'Ditandai dari {$a}';
$string['markoutofmax'] = 'Poin {$a->mark} dari {$a->max}';
$string['marks'] = 'Penanda-penanda';
$string['matchgrades'] = 'Cocokkan nilai';
$string['matchgrades_help'] = 'Nilai diimpor harus cocok dengan salah satu dari daftar nilai sah yang ditentukan - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (juga bilangan negatif). Apabila tidak, ada dua opsi:
*  Galat apabila nilai tidak terdaftar - Apabila soal berisi nilai yang tidak ditemukan pada daftar, galat akan ditampilkan dan soal tidak akan diimpor
* Nilai terdekat apabila tidak terdaftar - Apabila nilai tidak cocok dengan bilangan dalam daftar, nilai akan diubah ke bilangan yang cocok terdekat dengan bilangan pada daftar';
$string['matchgradeserror'] = 'Galat apabila nilai tidak terdaftar';
$string['matchgradesnearest'] = 'Nilai terdekat apabila tidak terdaftar';
$string['missingcourseorcmid'] = 'Perlu menyediakan courseid atau cmid untuk print_question.';
$string['missingcourseorcmidtolink'] = 'Perlu menyediakan courseid atau cmid untuk get_question_edit_link .';
$string['missingimportantcode'] = 'Tipe soal ini kehilangan kode penting: {$a}.';
$string['missingoption'] = 'Soal cloze {$a} kehilangan opsinya';
$string['modified'] = 'Terakhir disimpan';
$string['move'] = 'Pindahkan dari {$a} dan ubah tautan.';
$string['movecategory'] = 'Pindahkan kategori';
$string['movedquestionsandcategories'] = 'Pindahkan soal dan kategori soal dari {$a->oldplace} ke {$a->newplace}.';
$string['movelinksonly'] = 'Hanya ubah apa yang ditunjuk tautan, jangan pindahkan atau salin berkas.';
$string['moveq'] = 'Pindahkan soal';
$string['moveqtoanothercontext'] = 'Pindahkan soal ke konteks lain';
$string['moveto'] = 'Pindah ke >>';
$string['movingcategory'] = 'Memindahkan kategori';
$string['movingcategoryandfiles'] = 'Apakah anda yakin untuk memindahkan kategori {$a->name} dan semua kategori anak ke konteks untuk "{$a->contextto}"?

Kami mendeteksi {$a->urlcount} berkas tertaut dari soal pada {$a->fromareaname}, apakah anda ingin menyalin atau memindahkan ini ke {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Apakah anda yakin untuk memindahkan kategori "{$a->name}" dan seluruh kategori anak ke konteks untuk "{$a->contextto}"?';
$string['movingquestions'] = 'Memindahkan soal dan berkas apapun';
$string['movingquestionsandfiles'] = 'Apakah anda yakin untuk memindahkan soal {$a->questions} ke konteks untuk "{$a->tocontext}"?

Kami mendeteksi {$a->urlcount} berkas tertaut dari soal ini pada {$a->fromareaname}, apakah anda ingin menyalin atau memindahkan ini ke {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Apakah anda yakin untuk memindahkan soal {$a->questions} ke konteks untuk "{$a->tocontext}"?

Tidak ada berkas tertaut dari soal-soal ini di {$a->fromareaname}.';
$string['needtochoosecat'] = 'Anda harus memilih kategori tujuan untuk memindahkan soal ini atau tekan \'batalkan';
$string['nocate'] = 'Tidak ada kategori semacam itu {$a}!';
$string['nopermissionadd'] = 'Anda tidak memiliki izin untuk menambahkan soal di sini.';
$string['nopermissionmove'] = 'Anda tidak memiliki izin untuk memindahkan soal dari sini. Anda harus menyimpan soal pada kategori ini atau menyimpannya sebagai pertanyaan baru.';
$string['noprobs'] = 'Tidak ada masalah ditemukan pada basis data soal anda.';
$string['noquestions'] = 'Tidak ada soal yang dapat diekspor yang ditemukan. Pastikan bahwa anda telah memilih kategori untuk ekspor yang berisi soal.';
$string['noquestionsinfile'] = 'Tidak ada soal pada berkas impor';
$string['noresponse'] = '[Tidak ada respon]';
$string['notagfiltersapplied'] = 'Tidak ada filter tag yang diterapkan';
$string['notanswered'] = 'Tidak dijawab';
$string['notchanged'] = 'Belum diubah sejak pencobaan terakhir';
$string['notenoughanswers'] = 'Tipe soal ini membutuhkan setidaknya {$a} jawaban';
$string['notenoughdatatoeditaquestion'] = 'Tidak ada id soal, id kategori dan tipe soal yang dispesifikasikan.';
$string['notenoughdatatomovequestions'] = 'Anda harus menyediakan ID soal untuk pertanyaan yang mau anda pindahkan.';
$string['notflagged'] = 'Tidak ditandai';
$string['notgraded'] = 'Tidak dinilai';
$string['notshown'] = 'Tidak ditampilkan';
$string['notyetanswered'] = 'Belum dijawab';
$string['notyourpreview'] = 'Pratinjau ini bukan milik anda';
$string['novirtualquestiontype'] = 'Tidak ada tipe soal virtual untuk tipe soal {$a}';
$string['numqas'] = 'No. pencobaan soal';
$string['numquestions'] = 'No. soal';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} hidden)';
$string['options'] = 'Opsi';
$string['page-question-category'] = 'Halaman kategori soal';
$string['page-question-edit'] = 'Halaman penyunting soal';
$string['page-question-export'] = 'Halaman ekspor soal';
$string['page-question-import'] = 'Halaman impor soal';
$string['page-question-x'] = 'Halaman soal apapun';
$string['parent'] = 'Induk';
$string['parentcategory'] = 'Kategori induk';
$string['parentcategory_help'] = 'Kategori induk adalah tempat dimana kategori baru akan ditempatkan. "Atas" berarti kategori ini tidak berada di dalam kategori lainnya. Konteks kategori ditunjukkan dalam cetak tebal. Harus ada setidaknya satu kategori dalam setiap konteks.';
$string['parentcategory_link'] = 'soal/kategori';
$string['parenthesisinproperclose'] = 'Tanda kurung sebelum ** tidak ditutup dengan benar pada {$a}**';
$string['parenthesisinproperstart'] = 'Tanda kurung sebelum ** tidak dijalankan dengan benar pada {$a}**';
$string['parsingquestions'] = 'Menguraikan kalimat soal dari berkas impor.';
$string['partiallycorrect'] = 'Separuh benar';
$string['partiallycorrectfeedback'] = 'Untuk setiap respon separuh benar';
$string['partiallycorrectfeedbackdefault'] = 'Jawaban anda separuh benar.';
$string['penaltyfactor'] = 'Faktor penalti';
$string['penaltyfactor_help'] = 'Setelan ini menentukan pecahan dari skor yang dicapai dikurangkan untuk setiap respon yang salah. Ini hanya berlaku jika kuis dijalankan dalam mode adaptif.

Faktor penalti harus berupa angka antara 0 dan 1. Faktor penalti 1 berarti bahwa siswa harus mendapatkan jawaban yang benar pada jawaban pertamanya untuk mendapatkan kredit sama sekali. Faktor penalti 0 berarti siswa dapat mencoba sesering yang dia suka dan tetap mendapatkan nilai penuh.';
$string['penaltyforeachincorrecttry'] = 'Penalti untuk setiap pencobaan yang tidak benar';
$string['penaltyforeachincorrecttry_help'] = 'Ketika pertanyaan dijalankan menggunakan perilaku \'Interaktif dengan beberapa upaya\' atau \'Modus adaptif\', sehingga siswa akan memiliki beberapa upaya untuk menjawab pertanyaan dengan benar, maka opsi ini mengontrol seberapa besar mereka mendapatkan penalti untuk setiap upaya yang salah.

Penalti adalah proporsi dari total nilai soal, jadi jika soal bernilai tiga nilai, dan penaltinya adalah 0,3333333, maka siswa akan mendapat nilai 3 jika mereka menjawab pertanyaan dengan benar pada kali pertama, 2 jika mereka menjawab dengan benar pada percobaan kedua, dan 1 dari mereka melakukannya dengan benar pada percobaan ketiga.

Untuk beberapa pertanyaan multi-bagian, logika penilaian ini diterapkan secara terpisah untuk setiap bagian pertanyaan. Rinciannya bergantung pada jenis pertanyaan dan dapat menjadi rumit, tetapi prinsipnya adalah memberi penghargaan kepada siswa atas pengetahuan yang telah mereka tunjukkan seadil mungkin.';
$string['permissionedit'] = 'Sunting soal ini';
$string['permissionmove'] = 'Pindahkan soal ini';
$string['permissionsaveasnew'] = 'Simpan sebagai soal baru';
$string['permissionto'] = 'Anda memiliki izin untuk :';
$string['previewquestion'] = 'Pratinjau soal: {$a}';
$string['privacy:metadata:database:question:modifiedby'] = 'Pengguna yang telah memperbarui pertanyaan';
$string['privacy:metadata:database:question:name'] = 'Nama pertanyaan';
$string['privacy:metadata:database:question:questiontext'] = 'Teks pertanyaan';
$string['privacy:metadata:database:question:timecreated'] = 'Tanggal dan waktu ketika pertanyaan ini dibuat.';
$string['privacy:metadata:database:question:timemodified'] = 'Tanggal dan waktu ketika pertanyaan ini diperbarui.';
$string['privacy:metadata:database:question_attempts'] = 'Informasi tentang percobaan pada pertanyaan spesifik.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Rangkuman jawaban pertanyaan.';
$string['published'] = 'dibagi';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = 'Soal "{$a->name}" ({$a->qtype}) berada pada kategori soal ini namun digunakan juga pada kuis "{$a->quizname}" pada kursus lain "{$a->coursename}".';
$string['questionbank'] = 'Bank soal';
$string['questionbehaviouradminsetting'] = 'Pengaturan sikap soal';
$string['questionbehavioursdisabled'] = 'Sikap soal untuk dinonaktifkan';
$string['questionbehavioursdisabledexplained'] = 'Masukkan daftar yang dipisahkan dengan koma untuk sikap yang tidak ingin anda munculkan pada menu dropdown';
$string['questionbehavioursorder'] = 'Susunan sikap soal';
$string['questionbehavioursorderexplained'] = 'Masukkan daftar yang dipisahkan dengan koma untuk sikap yang ingin anda munculkan pada menu dropdown';
$string['questioncategory'] = 'Kategori soal';
$string['questioncatsfor'] = 'Kategori soal untuk \'{$a}';
$string['questiondoesnotexist'] = 'Soal ini tidak ada';
$string['questionformtagheader'] = '{$a} tag';
$string['questionidmismatch'] = 'Id soal tidak cocok';
$string['questionname'] = 'Nama soal';
$string['questionnamecopy'] = '{$a} (salin)';
$string['questionno'] = 'Soal {$a}';
$string['questionpreviewdefaults'] = 'Pratinjau soal bawan';
$string['questionpreviewdefaults_desc'] = 'Setelan bawaan ini digunakan ketika pengguna pertama kali melakukan pratinjau soal pada bank soal. Ketika pratinjau soal dilakukan, preferensi pribadi mereka akan disimpan sebagai preferensi pengguna.';
$string['questions'] = 'Soal-soal';
$string['questionsaveerror'] = 'Terjadi galat ketika menyimpan soal - ({$a})';
$string['questionsinuse'] = '(* Soal yang ditandai dengan tanda bintang berarti sudah dipakai di sejumlah kuis. Soal-soal ini tidak akan dihapus dari kuis-kuis ini, namun hanya dari daftar kategori.)';
$string['questionsmovedto'] = 'Soal yang masih digunakan dipindahkan ke "{$a}" pada kategori kursus induk.';
$string['questionsrescuedfrom'] = 'Soal disimpan dari konteks {$a}.';
$string['questionsrescuedfrominfo'] = 'Soal-soal ini (yang beberapa kemungkinan tersembunyi) disimpan ketika konteks {$a} dihapus karena masih dipakai di sejumlah kuis atau aktivitas lainnya.';
$string['questiontags'] = 'Tag pertanyaan';
$string['questiontext'] = 'Teks soal';
$string['questiontype'] = 'Tipe soal';
$string['questionuse'] = 'Gunakan soal pada aktivitas ini';
$string['questionvariant'] = 'Macam soal

Check variant!';
$string['questionx'] = 'Soal {$a}';
$string['requiresgrading'] = 'Meminta penilaian';
$string['responsehistory'] = 'Riwayat respon';
$string['restart'] = 'Mulai lagi';
$string['restartwiththeseoptions'] = 'Mulai lagi dengan pengaturan ini';
$string['reviewresponse'] = 'Respon tinjauan ulang';
$string['rightanswer'] = 'Jawaban benar';
$string['rightanswer_help'] = 'Ringkasan yang dibuat secara otomatis untuk respon benar. Ini dapat dibatasi, jadi anda dapat mempertimbangkan untuk menjelaskan jawaba yang benar pada umpan balik umum untuk soal tersebut, dan menonaktifkan opsi ini.';
$string['save'] = 'Simpan';
$string['savechangesandcontinueediting'] = 'Simpan perubahan dan lanjutkan penyuntingan';
$string['saved'] = 'Disimpan: {$a}';
$string['saveflags'] = 'Simpan status penanda';
$string['selectacategory'] = 'Pilih kategori:';
$string['selectaqtypefordescription'] = 'Pilih tipe soal untuk melihat deskripsinya.';
$string['selectcategoryabove'] = 'Pilih kategori diatas';
$string['selectquestionsforbulk'] = 'Pilih soal untuk aksi massal

Check bulk!';
$string['settingsformultipletries'] = 'Banyak pencobaan';
$string['shareincontext'] = 'Bagikan di konteks untuk {$a}';
$string['showhidden'] = 'Tampilkan juga soal-soal lama';
$string['showmarkandmax'] = 'Tunjukkan poin dan maks';
$string['showmaxmarkonly'] = 'Tunjukkan poin maks saja';
$string['shown'] = 'Ditampilkan';
$string['shownumpartscorrect'] = 'Tampilkan jumlah respon benar';
$string['shownumpartscorrectwhenfinished'] = 'Tampilkan jumlah respon benar setelah soal diselesaikan';
$string['showquestiontext'] = 'Tunjukkan teks soal pada daftar soal';
$string['specificfeedback'] = 'Umpan balik spesifik';
$string['specificfeedback_help'] = 'Umpan balik itu tergantung pada tanggapan apa yang diberikan siswa.';
$string['started'] = 'Dimulai';
$string['state'] = 'Status';
$string['step'] = 'Langkah';
$string['steps'] = 'Langkah-langkah';
$string['stoponerror'] = 'Berhenti ketika galat';
$string['stoponerror_help'] = 'Pengaturan ini menentukan apakah proses impor berhenti ketika terjadi galat, menyebabkan tidak ada soal yang diimpor, atau apakah soal yang berisi galat dan soal yang benar diimpor.';
$string['submissionoutofsequence'] = 'Akses diluar langkah-langkah. Mohon tidak mengklik tombol kembali ketika mengerjakan soal kuis.';
$string['submissionoutofsequencefriendlymessage'] = 'Anda memasukkan data diluar langkah-langkah normal. Ini terjadi ketika anda menekan tombol kembali atau maju pada browser anda; mohon jangan gunakan tombol-tombol tersebut ketika tes. Hal ini dapat juga terjadi apabila anda mengklik sesuatu ketika halaman sedang memuat. Pilih lanjutkan untuk melanjutkan.';
$string['submit'] = 'Kirimkan';
$string['submitandfinish'] = 'Kirimkan dan selesai';
$string['submitted'] = 'Kirim: {$a}';
$string['tagarea_question'] = 'Soal-soal';
$string['technicalinfo'] = 'Informasi teknis';
$string['technicalinfo_help'] = 'Informasi teknis ini mungkin hanya berguna bagi pengembang yang mengerjakan tipe pertanyaan baru. Ia dapat juga berguna untuk mendiagnosis masalah dengan soal.';
$string['technicalinfomaxfraction'] = 'Fraksi maksimum: {$a}';
$string['technicalinfominfraction'] = 'Fraksi minimum: {$a}';
$string['technicalinfoquestionsummary'] = 'Ringkasan soal: {$a}';
$string['technicalinforesponsesummary'] = 'Ringkasan respon: {$a}';
$string['technicalinforightsummary'] = 'Ringkasan jawaban benar: {$a}';
$string['technicalinfostate'] = 'Status soal: {$a}';
$string['technicalinfovariant'] = 'Jenis soal: {$a}';
$string['tofilecategory'] = 'Tulis kategori ke berkas';
$string['tofilecontext'] = 'Tulis konteks ke berkas';
$string['topfor'] = 'Paling atas untuk {$a}';
$string['uninstallbehaviour'] = 'Uninstal sikap soal ini.';
$string['uninstallqtype'] = 'Uninstal tipe soal ini.';
$string['unknown'] = 'Tidak diketahui';
$string['unknownbehaviour'] = 'Sikap tidak diketahui: {$a}.';
$string['unknownorunhandledtype'] = 'Tipe soal tidak diketahui atau tidak ditangani: {$a}';
$string['unknownquestion'] = 'Soal tidak diketahui: {$a}.';
$string['unknownquestioncatregory'] = 'Kategori soal tidak diketahui: {$a}.';
$string['unknownquestiontype'] = 'Tipe soal tidak diketahui: {$a}.';
$string['unknowntolerance'] = 'Tipe toleransi tidak diketahui {$a}';
$string['unpublished'] = 'tidak lagi dibagikan';
$string['unusedcategorydeleted'] = 'Kategori ini telah dihapus karena, setelah menghapus kursus, soal-soal didalamnya tidak dipakai lagi.';
$string['updatedisplayoptions'] = 'Perbarui opsi tampilan';
$string['upgradeproblemcategoryloop'] = 'Masalah terdeteksi ketika memperbarui kategori soal. Terdapat loop pada pohon kategori. id kategori yang terpengaruh adalah {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Tidak dapat memperbarui kategori soal {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Masalah terdeteksi ketika memperbarui kategori soal. Katgegori {$a->id} merujuk ke induk {$a->parent}, yang tidak ada. Induk diganti untuk menyelesaikan masalah.';
$string['whethercorrect'] = 'Apabila benar';
$string['whethercorrect_help'] = 'Ini mencakupi kedua deskripsi tekstual \'Benar\', \'Separuh benar\' atau \'Salah\', dan segala penyorotan berwarna yang menunjukkan informasi yang sama';
$string['whichtries'] = 'Yang mencoba';
$string['withselected'] = 'Dengan yang dipilih';
$string['wrongprefix'] = 'Prefiks nama diformat dengan salah {$a}';
$string['xoutofmax'] = '{$a->mark} dari {$a->max}';
$string['yougotnright'] = 'Anda telah memilih {$a->num} dengan benar.';
$string['youmustselectaqtype'] = 'Anda harus memilih tipe soal.';
$string['yourfileshoulddownload'] = 'Seharusnya Anda sudah mulai mengunduh. Apabila tidak, silakan klik  <a href="{$a}"> di sini.</a>.';
