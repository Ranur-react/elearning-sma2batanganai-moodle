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
 * Strings for component 'enrol_ldap', language 'id', version '3.10'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Menetapkan peran \'{$a->role_shortname}\' untuk pengguna \'{$a->user_username}\' ke dalam kursus \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Gagal menetapkan peran \'{$a->role_shortname}\' untuk pengguna \'{$a->user_username}\' ke dalam kursus \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = '<p> kursus dapat dibuat secara otomatis jika ada pendaftaran ke kursus yang belum ada di Moodle </p> <p> Jika Anda menggunakan pembuatan kursus otomatis, disarankan agar Anda menghapus kemampuan berikut:
moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname dan moodle/course:changesummary, dari peran yang relevan untuk mencegah modifikasi dari empat bidang kursus yang ditentukan di atas (nomor ID, nama pendek, nama lengkap dan ringkasan). </p>';
$string['autocreate_key'] = 'Buat otomatis';
$string['autocreation_settings'] = 'Setelan pembuatan kursus otomatis';
$string['autoupdate_settings'] = 'Setelan pembaruan kursus otomatis';
$string['autoupdate_settings_desc'] = '<p> Pilih bidang yang akan diperbarui ketika tugas terjadwal \'Sinkronkan pendaftaran LDAP\' sedang berjalan. </p> <p> Ketika setidaknya satu bidang dipilih, pembaruan akan dilakukan. </p>';
$string['bind_dn'] = 'Jika Anda ingin menggunakan pengguna mengikat untuk mencari pengguna, tentukan di sini. Sesuatu seperti  \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'Ikat nama yang dibedakan pengguna';
$string['bind_pw'] = 'KataKata sandi untuk pengguna yang mengikat';
$string['bind_pw_key'] = 'Kata sandi';
$string['bind_settings'] = 'Setelan Bind';
$string['cannotcreatecourse'] = 'Tidak dapat membuat kursus: data yang diperlukan tidak ada dari data LDAP!';
$string['cannotupdatecourse'] = 'Tidak dapat memperbarui kursus: data yang diperlukan tidak ada dari data LDAP!  Nomor ID kursus: \'{$a->idnumber}\'';
$string['cannotupdatecourse_duplicateshortname'] = 'Tidak dapat memperbarui kursus: Nama pendek duplikat. Lewati kursus dengan Nomor ID \'{$a->idnumber}\' ...';
$string['category'] = 'Kategori untuk kursus yang dibuat secara otomatis';
$string['category_key'] = 'Kategori';
$string['contexts'] = 'Konteks LDAP';
$string['couldnotfinduser'] = 'Tidak dapat menemukan pengguna \'{$a}\', lewati';
$string['course_fullname'] = 'Opsional: Atribut LDAP untuk mendapatkan nama lengkapnya';
$string['course_fullname_key'] = 'Nama lengkap';
$string['course_fullname_updateonsync'] = 'Perbarui nama lengkap selama skrip sinkronisasi';
$string['course_fullname_updateonsync_key'] = 'Perbarui nama lengkap';
$string['course_idnumber'] = 'Atribut LDAP untuk mendapatkan nomor ID kursus. Biasanya \'cn\' atau \'uid\'.';
$string['course_idnumber_key'] = 'Nomor ID';
$string['course_search_sub'] = 'Cari keanggotaan grup dari subkonteks';
$string['course_search_sub_key'] = 'Cari subkonteks';
$string['course_settings'] = 'Setelan pendaftaran kursus';
$string['course_shortname'] = 'Opsional: Atribut LDAP untuk mendapatkan nama pendek';
$string['course_shortname_key'] = 'Nama pendek';
$string['course_shortname_updateonsync'] = 'Perbarui nama pendek selama skrip sinkronisasi';
$string['course_shortname_updateonsync_key'] = 'Perbarui nama pendek';
$string['course_summary'] = 'Opsional: atribut LDAP untuk mendapatkan ringkasan';
$string['course_summary_key'] = 'Ringkasan';
$string['course_summary_updateonsync'] = 'Perbarui ringkasan selama skrip sinkronisasi';
$string['course_summary_updateonsync_key'] = 'Perbarui ringkasan';
$string['coursenotexistskip'] = 'kursus \'{$a}\' tidak ada dan pembuatan otomatis dinonaktifkan, lewati';
$string['courseupdated'] = 'Kursus dengan nomor ID \'{$a->idnumber}\' berhasil diperbarui.';
$string['courseupdateskipped'] = 'Kursus dengan nomor ID \'{$a->idnumber}\' tidak perlu diperbarui. Lewati ...';
$string['createcourseextid'] = 'BUAT Pengguna terdaftar ke kursus yang tidak ada \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'Pengguna terdaftar ke kursus yang tidak ada \'{$a->courseextid}\'';
$string['creatingcourse'] = 'Membuat kursus \'{$a}\' ...';
$string['duplicateshortname'] = 'Pembuatan kursus gagal. Nama pendek duplikat. Lewati kursus dengan nomor ID \'{$a->idnumber}\' ...';
$string['editlock'] = 'Kunci nilai';
$string['emptyenrolment'] = 'Kosongkan pendaftaran untuk peran \'{$a->role_shortname}\' dalam  kursus \'{$a->course_shortname}\'';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Daftarkan pengguna \'{$a->user_username}\' ke dalam kursus \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Pendaftaran diaktifkan untuk pengguna \'{$a->user_username}\' dalam kursus \'{$ a-> course_shortname}\' (id {$ a-> course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() tidak mendukung jenis pengguna yang dipilih: {$a}';
$string['extcourseidinvalid'] = 'ID eksternal kursus tidak valid!';
$string['extremovedsuspend'] = 'Pendaftaran dinonaktifkan untuk pengguna \'{$a->user_username}\' dalam kursus \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Pendaftaran dinonaktifkan dan peran pengguna dihapus \'{$a->user_username}\' pada kursus \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Keluarkan pengguna \'{$a->user_username}\' dari kursus \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Gagal!';
$string['general_options'] = 'Pilihan umum';
$string['group_memberofattribute'] = 'Nama atribut yang menentukan grup mana yang memiliki pengguna atau grup tertentu (mis., MemberOf, groupMembership, dll.)';
$string['group_memberofattribute_key'] = 'Atribut \'Anggota\'';
$string['host_url'] = 'Tentukan host LDAP dalam bentuk URL seperti \'ldap://ldap.myorg.com/\' atau \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'URL host';
$string['idnumber_attribute'] = 'Jika keanggotaan grup berisi nama yang berbeda, tentukan atribut yang sama yang telah Anda gunakan untuk pemetaan \'Nomor ID\' pengguna di setelan autentikasi LDAP.';
$string['idnumber_attribute_key'] = 'Atribut nomor ID';
$string['ldap:manage'] = 'Kelola model pendaftaran LDAP';
$string['ldap_encoding'] = 'Tentukan encoding yang digunakan oleh peladen LDAP. Kemungkinan besar utf-8, MS AD v2 menggunakan pengkodean platform bawaan seperti cp1252, cp1250, dll.';
$string['ldap_encoding_key'] = 'Pengkodean LDAP';
$string['memberattribute'] = 'Atribut anggota LDAP';
$string['memberattribute_isdn'] = 'Jika keanggotaan grup berisi nama yang berbeda, Anda perlu menentukannya di sini. Jika demikian, Anda juga perlu mengonfigurasi setelan lainnya di bagian ini.';
$string['memberattribute_isdn_key'] = 'Atribut anggota menggunakan dn';
$string['nested_groups'] = 'Apakah Anda ingin menggunakan grup bertingkat (grup grup) untuk pendaftaran?';
$string['nested_groups_key'] = 'Grup bertingkat';
$string['nested_groups_settings'] = 'Setelan grup bertingkat';
$string['nosuchrole'] = 'Tidak ada peran seperti itu: \'{$a}\'';
$string['objectclass'] = 'objectClass digunakan untuk mencari kursus. Biasanya \'group\' atau \'posixGroup\'';
$string['objectclass_key'] = 'Kelas Objek';
$string['ok'] = 'O.K.!';
$string['opt_deref'] = 'Jika keanggotaan grup berisi nama yang berbeda, tentukan bagaimana alias ditangani selama pencarian. Pilih salah satu dari nilai berikut: \'No\' (LDAP_DEREF_NEVER) atau \'Yes\' (LDAP_DEREF_ALWAYS). enrol_ldap / opt_deref';
$string['opt_deref_key'] = 'Alias referensi';
$string['phpldap_noextension'] = 'Modul PHP LDAP sepertinya tidak ada. Harap pastikan itu dipasang dan diaktifkan jika Anda ingin menggunakan pengaya pendaftaran ini.';
$string['pluginname'] = 'Pendaftaran LDAP';
$string['pluginname_desc'] = '<p> Anda dapat menggunakan peladen LDAP untuk mengontrol pendaftaran Anda. Diasumsikan bahwa pohon LDAP Anda berisi grup yang memetakan ke kursus, dan setiap grup / kursus tersebut akan memiliki entri keanggotaan untuk dipetakan ke siswa. </p> Diasumsikan bahwa kursus didefinisikan sebagai grup di LDAP, dengan setiap grup memiliki beberapa bidang keanggotaan (<em> member </em> atau <em> memberUid </em>) yang berisi identifikasi unik pengguna. </p> <p> Untuk menggunakan pendaftaran LDAP, pengguna Anda <strong> harus </strong> memiliki bidang nomor id yang valid. Grup LDAP harus memiliki nomor id di bidang anggota agar pengguna dapat terdaftar dalam kursus. Ini biasanya akan bekerja dengan baik jika Anda sudah menggunakan Autentikasi LDAP. </p> <p> Pendaftaran akan diperbarui saat pengguna masuk. Anda juga dapat menjalankan skrip agar pendaftaran tetap sinkron. Lihat di <em> register/ldap/cli /sync.php </em>. </p>';
$string['pluginnotenabled'] = 'Pengaya tidak diaktifkan!';
$string['privacy:metadata'] = 'Pengaya pendaftaran LDAP tidak menyimpan data pribadi apa pun.';
$string['role_mapping'] = '<p> Untuk setiap peran, Anda perlu menentukan semua konteks LDAP tempat grup yang mewakili kursus berada. Pisahkan konteks yang berbeda dengan titik koma (;). </p> <p> Anda juga perlu menentukan atribut yang digunakan server LDAP Anda untuk menampung anggota grup. Biasanya ini adalah \'member\' atau \'memberUid\'. </p>';
$string['role_mapping_attribute'] = 'Atribut anggota LDAP untuk {$a}';
$string['role_mapping_context'] = 'Konteks LDAP untuk {$a}';
$string['role_mapping_key'] = 'Memetakan peran dari LDAP';
$string['roles'] = 'Pemetaan peran';
$string['server_settings'] = 'Setelan peladen LDAP';
$string['synccourserole'] = '== Menyinkronkan kursus \'{$a->idnumber}\' untuk peran \'{$a->role_shortname}\'';
$string['syncenrolmentstask'] = 'Sinkronkan tugas pendaftaran LDAP';
$string['template'] = 'Opsional: kursus yang dibuat secara otomatis dapat menyalin setelannya dari templat kursus';
$string['template_key'] = 'Templat';
$string['unassignrole'] = 'Membatalkan penetapan peran \'{$a->role_shortname}\' pada pengguna \'{$a->user_username}\' dari kursus \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignrolefailed'] = 'Gagal membatalkan penetapan peran \'{$a->role_shortname}\' pada pengguna \'{$a->user_username}\' dari kursus \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignroleid'] = 'Membatalkan penetapan id peran \'{$a->role_id}\' pada id pengguna \'{$a->user_id}\'';
$string['updatelocal'] = 'Perbarui data lokal';
$string['user_attribute'] = 'Jika keanggotaan grup berisi nama-nama yang berbeda, tentukan atribut yang digunakan untuk memberi nama / mencari pengguna. Jika Anda menggunakan autentikasi LDAP, nilai ini harus cocok dengan atribut yang ditentukan dalam pemetaan \'Nomor ID\' di pengaya autentikasi LDAP.';
$string['user_attribute_key'] = 'Nomor ID atribut';
$string['user_contexts'] = 'Jika keanggotaan grup berisi nama yang dibedakan, tentukan daftar konteks tempat pengguna berada. Pisahkan konteks yang berbeda dengan titik koma (;). Contohnya: \'ou=users,o=org; ou=others,o=org\'.';
$string['user_contexts_key'] = 'Konteks';
$string['user_search_sub'] = 'Jika keanggotaan grup berisi nama-nama yang berbeda, tentukan apakah pencarian untuk pengguna juga dilakukan dalam subkonteks.';
$string['user_search_sub_key'] = 'Telusuri subkonteks';
$string['user_settings'] = 'Setelan pencarian pengguna';
$string['user_type'] = 'Jika keanggotaan grup berisi nama yang berbeda, tentukan bagaimana pengguna disimpan di LDAP';
$string['user_type_key'] = 'Tipe Pengguna';
$string['version'] = 'Versi protokol LDAP yang digunakan perladen Anda';
$string['version_key'] = 'Versi';
