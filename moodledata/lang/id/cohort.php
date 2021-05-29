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
 * Strings for component 'cohort', language 'id', version '3.10'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Tambah kohor baru';
$string['allcohorts'] = 'Semua kohor';
$string['anycohort'] = 'Setiap';
$string['assign'] = 'Tetapkan';
$string['assigncohorts'] = 'Tetapkan anggota kohor';
$string['assignto'] = 'Anggota kohor {$a}';
$string['backtocohorts'] = 'Kembali ke kohor';
$string['bulkadd'] = 'Tambahkan pada kohor';
$string['bulknocohort'] = 'Tidak ada kohor yang tersedia';
$string['categorynotfound'] = 'Kategori <b> {$a} </b> tidak ditemukan atau Anda tidak memiliki izin untuk membuat kohor di sana. Konteks bawaan akan digunakan.';
$string['cohort'] = 'Kohor';
$string['cohorts'] = 'Kohor';
$string['cohortsin'] = '{$a}: kohor tersedia';
$string['component'] = 'Sumber';
$string['contextnotfound'] = 'Konteks <b> {$a} </b> tidak ditemukan atau Anda tidak memiliki izin untuk membuat kohor di sana. Konteks bawaan akan digunakan.';
$string['csvcontainserrors'] = 'Galat ditemukan pada data CSV. Lihat detail di bawah ini.';
$string['csvcontainswarnings'] = 'Peringatan ditemukan pada data CSV. Lihat detail di bawah ini.';
$string['csvextracolumns'] = 'Kolom <b>{$a}</b> akan diabaikan.';
$string['currentusers'] = 'Pengguna sekarang';
$string['currentusersmatching'] = 'Pengguna saat ini cocok';
$string['defaultcontext'] = 'Konteks bawaan';
$string['delcohort'] = 'Hapus kohor';
$string['delconfirm'] = 'Anda yakin ingin menghapus kohor \'{$a}\'?';
$string['description'] = 'Deskripsi';
$string['displayedrows'] = '{$a->displayed} baris ditampilkan dari {$a->total}.';
$string['duplicateidnumber'] = 'Kohor dengan ID sama sudah ada';
$string['editcohort'] = 'Edit kohor';
$string['editcohortidnumber'] = 'Edit ID kohor';
$string['editcohortname'] = 'Edit nama kohor';
$string['eventcohortcreated'] = 'Kohor dibuat';
$string['eventcohortdeleted'] = 'Kohor dihapus';
$string['eventcohortmemberadded'] = 'Pengguna ditambahakan pada kohor';
$string['eventcohortmemberremoved'] = 'Pengguna dihapus dari kohor';
$string['eventcohortupdated'] = 'Kohor diperbarui';
$string['external'] = 'Kohor eksternal';
$string['idnumber'] = 'ID Kohor';
$string['invalidtheme'] = 'Tema kohor tidak ada';
$string['memberscount'] = 'Isi Kohor';
$string['name'] = 'Nama';
$string['namecolumnmissing'] = 'Ada yang salah dengan format berkas CSV. Periksa apakah itu termasuk nama kolom yang benar. Untuk menambahkan pengguna ke kohor, buka \'Unggah pengguna\' di administrasi situs.';
$string['namefieldempty'] = 'Kolom nama tidak boleh kosong';
$string['newidnumberfor'] = 'Nomor ID baru untuk kohor {$a}';
$string['newnamefor'] = 'Nama baru untuk kohor {$a}';
$string['nocomponent'] = 'Dibuat secara manual';
$string['potusers'] = 'Pengguna potensial';
$string['potusersmatching'] = 'Pengguna potensial yang cocok';
$string['preview'] = 'Pratinjau';
$string['privacy:metadata:cohort_members'] = 'Informasi mengenai kohor pengguna';
$string['privacy:metadata:cohort_members:cohortid'] = 'ID Kohor';
$string['privacy:metadata:cohort_members:timeadded'] = 'Waktu yang menunjukkan kapan pengguna ditambahkan ke kohor';
$string['privacy:metadata:cohort_members:userid'] = 'ID pengguna yang terkait dengan kohor';
$string['removeuserwarning'] = 'Menghapus pengguna dari kohor dapat mengakibatkan membatalkan pendaftaran pengguna dari berbagai program yang mencakup menghapus pengaturan pengguna, nilai, keanggotaan grup, dan informasi pengguna lainnya dari kursus yang terpengaruh.';
$string['search'] = 'Pencarian';
$string['searchcohort'] = 'Pencarian kohor';
$string['selectfromcohort'] = 'Pilih anggota dari kohor';
$string['systemcohorts'] = 'Kohor sistem';
$string['unknowncohort'] = 'Kohor tidak diketahui ({$a})!';
$string['uploadcohorts'] = 'Unggah kohor';
$string['uploadcohorts_help'] = 'Kohor dapat diunggah melalui berkas teks. Format berkas harus sebagai berikut:

* Setiap baris berkas berisi satu catatan
* Setiap rekaman adalah serangkaian data yang dipisahkan oleh koma (atau pembatas lainnya)
* Baris pertama berisi daftar nama ruas yang menentukan format dari sisanya berkas
* Nama ruas yang harus adalah adalah name
* Nama ruas opsional adalah idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Mengunggah {$a} kohor';
$string['useradded'] = 'Pengguna ditambahkan pada kohor "{$a}"';
$string['visible'] = 'Terlihat';
$string['visible_help'] = 'Setiap kohor dapat dilihat oleh pengguna yang memiliki kemampuan \'moodle/cohort:view\' dalam konteks kohor. <br/> Kohor yang terlihat juga dapat dilihat oleh pengguna dalam kursus yang mendasarinya';
