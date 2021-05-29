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
 * Strings for component 'allocationform', language 'id', version '3.10'.
 *
 * @package     allocationform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allocationformname_help'] = 'Nama formulir alokasi ini, ini akan digunakan untuk menautkan ke formulir.';
$string['allocations_not_visible'] = 'Alokasi hanya dapat dilihat oleh editor.';
$string['availabilityheading'] = 'Ketersediaan formulir';
$string['back_to_edit'] = 'Beralih ke mode edit';
$string['back_to_edit_warning'] = 'Ini akan menghapus semua informasi yang dikirimkan ke formulir.';
$string['before_start'] = 'Tanggal mulai formulir alokasi ini belum lewat.';
$string['calendar:deadline'] = 'Batas waktu untuk {$ a}';
$string['cannoteditinapp'] = 'Formulir alokasi tidak dapat diedit di aplikasi moodle';
$string['changestateto'] = 'Anda yakin ingin mengubah formulir ke negara bagian {$ a}?';
$string['choice'] = 'Pilihan {$ a-> pilihan}';
$string['choice_help'] = 'Pilih opsi yang anda ingin dialokasikan.';
$string['choicealreadyselected'] = 'Sebuah opsi hanya dapat dipilih satu kali';
$string['choiceheading'] = 'Pilihan penyiapan';
$string['choiceincorrectstate'] = 'Formulir tidak terbuka. Harap segarkan halaman.';
$string['choiceinvalid'] = 'Anda telah memilih opsi yang bukan bagian dari formulir';
$string['choicerequired'] = 'Pilihlah';
$string['choicesexported'] = 'Pilihan diekspor';
$string['cron'] = 'Pemrosesan latar belakang untuk formulir alokasi';
$string['csvgenerated'] = 'CSV dibuat';
$string['deadline'] = 'Tenggat waktu';
$string['deadline_help'] = 'Waktu terakhir pengguna dapat memilih alokasinya, ini juga waktu paling awal saat formulir alokasi akan diantrekan untuk proses alokasi terjadi.';
$string['deadline_message'] = 'Batas waktu pengisian formulir ini adalah: {$ a-> batas waktu}';
$string['deadline_passed'] = 'Batas waktu formulir ini telah berlalu, jika anda mengaktifkannya sekarang, formulir akan segera diproses.';
$string['defaultrole'] = 'Peran default';
$string['defaultrole_help'] = 'Tetapkan peran default yang akan digunakan untuk memilih pengguna yang akan dialokasikan menggunakan aktivitas';
$string['deleteuserdata'] = 'Hapus data pengguna';
$string['disallow_list'] = 'Larang daftar';
$string['disallow_list_help'] = 'Semua pengguna yang dicentang tidak akan dapat memilih {$ a-> nama_opsi}';
$string['duplicate_choice'] = 'Anda hanya dapat memilih satu kali';
$string['duplicateoption'] = 'Perubahan anda tidak dapat disimpan ke database. Ini kemungkinan besar karena nama opsi duplikat dimasukkan';
$string['editingmode'] = 'Mengedit';
$string['editingoption'] = 'Opsi pengeditan';
$string['event:optiondcreated'] = 'Opsi dibuat';
$string['event:optiondeleted'] = 'Opsi dihapus';
$string['form_allocation_error2'] = 'EROR: Tidak dapat mengalokasikan userid {$ a-> userid}';
$string['generate_allocation_csv'] = 'Hasilkan csv alokasi pengguna';
$string['generate_csv'] = 'Hasilkan csv pilihan pengguna';
$string['in_editingmode'] = 'Formulir sedang diedit, tahap 1 dari 5.';
$string['in_processedmode'] = 'Alokasi telah dirilis, tahap 5 dari 5.';
$string['in_processmode'] = 'Pengguna sedang dialokasikan, tahap 3 dari 5.';
$string['in_readymode'] = 'Formulirnya aktif, tahap 2 dari 5.';
$string['in_reviewmode'] = 'Alokasi sedang ditinjau, tahap 4 dari 5.';
$string['incorrectnumberofchoices'] = 'Formulir tidak memiliki jumlah pilihan yang benar';
$string['instructions'] = 'Anda harus memberi peringkat pada opsi {$ a-> pilihan}, Anda akan dialokasikan ke {$ a-> alokasi} opsi.';
$string['invalidstate'] = 'Perubahan status yang tidak valid diteruskan ke formulir alokasi';
$string['invalidstatechange'] = 'Mencoba mengubah status tidak valid';
$string['make_active'] = 'Buat formulir menjadi aktif';
$string['makechoice'] = 'Tentukan pilihan Anda';
$string['modulename'] = 'Formulir alokasi';
$string['modulename_help'] = 'Formulir alokasi dapat digunakan untuk menugaskan siswa ke antara satu dan sepuluh opsi (misalnya modul, tugas, penempatan ...)

Guru mendefinisikan:

* Daftar opsi yang tersedia untuk siswa.
* Jumlah siswa yang dapat ditugaskan ke suatu opsi.
* Berapa banyak pilihan siswa yang ditetapkan (antara satu dan sepuluh)
* Berapa banyak pilihan yang dapat ditentukan oleh siswa (antara satu dan sepuluh)
* Jika siswa dapat memilih opsi yang tidak mereka inginkan.
* Titik terakhir di mana siswa dapat mengirimkan pilihan.

Peringatan: Saat mengalihkan aktivitas dari mode aktif kembali ke mode edit, pilihan apa pun yang dibuat oleh siswa akan dihapus.

Setelah tanggal penutupan, formulir akan mencoba melakukan alokasi yang \'paling sesuai\' bagi siswa sehingga:

* Sebanyak mungkin siswa ditugaskan ke opsi setinggi mungkin pada peringkat mereka.
* Siswa tidak akan pernah diberi pilihan yang mereka pilih sebagai \'Tidak mau\'.
* Siswa tidak akan diberikan pilihan yang telah dibatasi untuk mereka pilih.
* Siswa yang tidak membuat pilihan akan dialokasikan terakhir.

Setelah alokasi diproses, guru dapat:

* Tinjau hasil dan ubah jumlah siswa yang dialokasikan ke opsi sebelum mereka merilis hasilnya kepada siswa.
* Dapatkan csv dari pilihan siswa.
* Dapatkan csv dari alokasi.';
$string['not_enough_slots'] = 'Slot yang tersedia tidak cukup untuk semua orang yang memenuhi syarat untuk tugas';
$string['not_set'] = 'Anda harus membuat pilihan';
$string['notrequired'] = 'Tidak dibutuhkan';
$string['notwant'] = 'Sertakan tidak diinginkan';
$string['notwant_help'] = 'Jika dipilih, pengguna akan diberi kesempatan untuk menentukan opsi yang tidak ingin mereka alokasikan';
$string['nousersallocated'] = 'Tidak ada pengguna yang dialokasikan';
$string['numberofallocations'] = 'Alokasi per pengguna';
$string['numberofallocations_help'] = 'Jumlah opsi yang akan dialokasikan pengguna';
$string['numberofchoices'] = 'Jumlah pilihan';
$string['numberofchoices_help'] = 'Jumlah opsi yang harus dipilih pengguna';
$string['ok_to_continue'] = 'Anda yakin ingin melanjutkan?';
$string['option_form_header'] = 'Opsi baru';
$string['option_heading'] = 'Judul';
$string['option_heading_help'] = 'Judul yang akan ditampilkan tepat di atas opsi ini.';
$string['option_list'] = 'Daftar opsi';
$string['option_maxallocation'] = 'Alokasi maksimum';
$string['option_maxallocation_help'] = 'Jumlah maksimum orang yang dapat dialokasikan ke opsi ini.';
$string['option_maxallocation_invalid'] = 'Alokasi maksimum tidak ditetapkan';
$string['option_name'] = 'Nama opsi';
$string['option_name_help'] = 'Nama opsi seperti yang akan ditampilkan kepada pengguna.';
$string['option_restricted'] = 'Pengguna yang dibatasi';
$string['optioncreated'] = 'Opsi yang dibuat: {$a}';
$string['optiondeleted'] = 'Opsi yang dihapus: {$a}';
$string['optionedited'] = 'Opsi diedit';
$string['optionmodified'] = 'Opsi yang diubah: {$a}';
$string['overviewclose'] = 'Tanggal tutup: {$a-> closedate}';
$string['overviewready'] = 'Alokasi anda tersedia.';
$string['overviewreview'] = 'Siap untuk ditinjau. Orang-orang yang dialokasikan tidak dapat melihat hasilnya.';
$string['people'] = 'Jumlah orang yang akan dialokasikan';
$string['permissionedited'] = 'Izin diedit';
$string['permissionviewed'] = 'Izin dilihat';
$string['privacy:export:choices'] = 'Pilihan';
$string['privacy:export:restrictions'] = 'Batasan';
$string['privacy:metadata:allocationform_allocations'] = 'Menyimpan alokasi yang dibuat untuk pengguna';
$string['privacy:metadata:allocationform_allocations:allocation'] = 'Opsi tempat pengguna dialokasikan';
$string['privacy:metadata:allocationform_allocations:userid'] = 'Pengguna sedang dialokasikan';
$string['privacy:metadata:allocationform_choices'] = 'Menyimpan pilihan yang telah dibuat pengguna pada formulir alokasi';
$string['privacy:metadata:allocationform_choices:choice1'] = 'Preferensi pertama pengguna';
$string['privacy:metadata:allocationform_choices:choice10'] = 'Preferensi kesepuluh pengguna';
$string['privacy:metadata:allocationform_choices:choice2'] = 'Preferensi kedua pengguna';
$string['privacy:metadata:allocationform_disallow:disallow_allocation'] = 'Opsi yang dibatasi oleh pengguna untuk memilih';
$string['privacy:metadata:allocationform_disallow:userid'] = 'Pengguna sedang dibatasi';
$string['processedmode'] = 'Diproses';
$string['processmode'] = 'Pengolahan';
$string['readymode'] = 'Aktif';
$string['requirechoice'] = 'Membutuhkan pilihan';
$string['restrict'] = 'Membatasi';
$string['reviewmode'] = 'Ulasan';
$string['saved'] = 'Pilihan anda telah disimpan.';
$string['savefail'] = 'Pilihan anda tidak dapat disimpan di Moodle';
$string['slots'] = 'Jumlah ruang untuk alokasi';
$string['startdate'] = 'Mulai tanggal';
$string['startdate_help'] = 'Waktu paling awal bagi pengguna untuk memilih alokasinya.';
$string['statechanged'] = 'Status berubah';
$string['statechangefailed'] = 'Tidak dapat mengubah negara bagian';
$string['trackcompletion'] = 'Memerlukan pengiriman pilihan untuk menyelesaikan aktivitas ini?';
$string['unallocated'] = 'Tidak dialokasikan';
$string['youralloactions'] = 'Anda telah dialokasikan untuk:';
