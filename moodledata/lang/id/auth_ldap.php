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
 * Strings for component 'auth_ldap', language 'id', version '3.10'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_attrcreators_key'] = 'Atribut pencipta';
$string['auth_ldap_auth_user_create_key'] = 'Buat pengguna secara eksternal';
$string['auth_ldap_bind_dn'] = 'Jika Anda ingin menggunakan bind-user untuk mencari pengguna, tentukanlah di sini. Misalnya \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Nama yang dibedakan';
$string['auth_ldap_bind_pw'] = 'Kata sandi untuk pengguna-bind.';
$string['auth_ldap_bind_pw_key'] = 'Kata sandi';
$string['auth_ldap_bind_settings'] = 'Bind pengaturan';
$string['auth_ldap_changepasswordurl_key'] = 'URL ubah kata sandi';
$string['auth_ldap_contexts'] = 'Daftar dari konteks dimana pengguna dilokasikan. Pisahkan konteks lainnya dengan \';\'. Sebagai contoh: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Konteks';
$string['auth_ldap_create_context'] = 'Jika Anda mengaktifkan pembuatan pengguna dengan konfirmasi email, tentukan keadaan bagaimana pengguna akan dibuat. Keadaan ini harus berbeda dengan pengguna lainnya untuk menanggulangi bahaya keamanan. Anda tidak perlu menambahkan keadaan ini pada pemakaian variabel ldap_context, Moodle akan mencari pengguna secara otomatis dari keadaan ini.';
$string['auth_ldap_create_context_key'] = 'Konteks untuk pengguna baru';
$string['auth_ldap_create_error'] = 'Terjadi kesalahan saat membuat pengguna di LDAP.';
$string['auth_ldap_expiration_desc'] = 'Pilih \'{$a->no}\' untuk menonaktifkan pemeriksaan sandi kedaluwarsa atau \'{$a->ldapserver}\' untuk membaca waktu kedaluwarsa sandi langsung dari peladen LDAP.';
$string['auth_ldap_expiration_key'] = 'Kedaluwarsa';
$string['auth_ldap_expiration_warning_desc'] = 'Jumlah hari sebelum peringatan kedaluwarsa kata sandi dikeluarkan.';
$string['auth_ldap_expiration_warning_key'] = 'Peringatan kedaluwarsa';
$string['auth_ldap_expireattr_desc'] = 'Opsional: Mengganti atribut LDAP yang menyimpan waktu kedaluwarsa sandi.';
$string['auth_ldap_expireattr_key'] = 'Atribut kedaluwarsa';
$string['auth_ldap_graceattr_desc'] = 'Opsional: Mengganti atribut masuk masa tenggang';
$string['auth_ldap_gracelogin_key'] = 'Atribut grace login';
$string['auth_ldap_gracelogins_desc'] = 'Aktifkan dukungan log masuk tenggang LDAP. Setelah kata sandi kedaluwarsa, pengguna dapat masuk hingga hitungan masuk tenggang adalah 0. Mengaktifkan setelan ini akan menampilkan pesan masuk tenggang jika kata sandi telah kedaluwarsa.';
$string['auth_ldap_host_url'] = 'Tentukan host LDAP dalam bentuk URL seperti \'ldap: //ldap.myorg.com/\' atau \'ldaps: //ldap.myorg.com/\'. Pisahkan beberapa server dengan \';\' untuk mendapatkan dukungan failover.';
$string['auth_ldap_ldap_encoding_key'] = 'Pengkodean LDAP';
$string['auth_ldap_login_settings'] = 'Pengaturan login';
$string['auth_ldap_memberattribute'] = 'Tentukan atribut keanggotaan anggota, jika pengguna adalah anggota grup. Biasanya \'anggota\'';
$string['auth_ldap_memberattribute_isdn'] = 'Mengganti penanganan nilai atribut anggota';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atribut anggota menggunakan dn';
$string['auth_ldap_memberattribute_key'] = 'Atribut anggota';
$string['auth_ldap_no_mbstring'] = 'Anda memerlukan ekstensi mbstring untuk membuat pengguna di Active Directory.';
$string['auth_ldap_noconnect'] = 'Modul LDAP tidak dapat terhubung ke server: {$a}';
$string['auth_ldap_noconnect_all'] = 'Modul LDAP tidak dapat terhubung ke server manapun: {$a}';
$string['auth_ldap_noextension'] = 'Modul PHP LDAP sepertinya tidak ada. Harap pastikan itu diinstal dan diaktifkan jika Anda ingin menggunakan pengaya autentikasi ini.';
$string['auth_ldap_objectclass'] = 'Opsional: Mengganti objectClass yang digunakan untuk memberi nama / mencari pengguna di ldap_user_type. Biasanya Anda tidak perlu mengubahnya.';
$string['auth_ldap_objectclass_key'] = 'Kelas objek';
$string['auth_ldap_opt_deref'] = 'Menentukan bagaimana alias ditangani selama pencarian. Pilih salah satu dari nilai berikut: "Tidak" (LDAP_DEREF_NEVER) atau "Ya" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passtype'] = 'Tentukan format sandi baru atau yang diubah di peladen LDAP.';
$string['auth_ldap_passtype_key'] = 'Format kata sandi';
$string['auth_ldap_passwdexpire_settings'] = 'Pengaturan kedaluwarsa sandi LDAP';
$string['auth_ldap_preventpassindb'] = 'Pilih ya untuk mencegah kata sandi disimpan di basis data Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Cegah cache sandi';
$string['auth_ldap_rolecontext'] = 'Konteks {$a-> localname}';
$string['auth_ldap_rolecontext_help'] = 'Konteks LDAP digunakan untuk memilih pemetaan <i> {$a-> localname} </i>. Pisahkan beberapa grup dengan \';\'. Biasanya sesuatu seperti "cn = {$a-> shortname}, ou = staff, o = myorg".';
$string['auth_ldap_search_sub'] = 'Masukkan nilai &lt;&gt; 0 jika Anda ingin untuk mencari pengguna dari sub-konteks.';
$string['auth_ldap_search_sub_key'] = 'Telusuri subkonteks';
$string['auth_ldap_server_settings'] = 'Pengaturan server LDAP';
$string['auth_ldap_suspended_attribute'] = 'Opsional: Jika tersedia, atribut ini akan digunakan untuk mengaktifkan / menangguhkan akun pengguna yang dibuat secara lokal.';
$string['auth_ldap_suspended_attribute_key'] = 'Atribut yang ditangguhkan';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create () tidak mendukung jenis pengguna yang dipilih: {$a}';
$string['auth_ldap_update_userinfo'] = 'Perbaharui informasi pengguna (nama depan, namaakhir, alamat..) dari LDAP ke Moodle. Lihat pada /auth/ldap/attr_mappings.php untuk informasi pemetaannya';
$string['auth_ldap_user_attribute'] = 'Attribut yang dugunakan untuk nama/cari pengguna. Biasanya \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atribut pengguna';
$string['auth_ldap_user_exists'] = 'Nama pengguna LDAP sudah ada.';
$string['auth_ldap_user_settings'] = 'Pengaturan pencarian pengguna';
$string['auth_ldap_user_type'] = 'Pilih bagaimana pengguna disimpan di LDAP. Pengaturan ini juga menentukan bagaimana login kedaluwarsa, login masa tenggang dan pembuatan pengguna akan bekerja.';
$string['auth_ldap_user_type_key'] = 'Tipe Pengguna';
$string['auth_ldap_usertypeundefined'] = 'config.user_type tidak ditentukan atau fungsi ldap_expirationtime2unix tidak mendukung jenis yang dipilih!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type tidak ditentukan atau fungsi ldap_unixi2expirationtime tidak mendukung jenis yang dipilih!';
$string['auth_ldap_version'] = 'Versi protokol LDAP yang digunakan server Anda.';
$string['auth_ldap_version_key'] = 'Versi';
$string['auth_ldapdescription'] = 'Metode ini memberikan autentikasi terhadap server LDAP eksternal. Jika nama pengguna dan kata sandi yang diberikan valid, Moodle membuat entri pengguna baru di basis datanya. Pengaya ini dapat membaca atribut pengguna dari LDAP dan mengisi ulang ruas yang diinginkan di Moodle. Untuk log masuk berikut hanya nama pengguna dan kata sandi yang diperiksa.';
$string['auth_ldapextrafields'] = 'Bidang-bidang ini opsional. Anda dapat memilih untuk mengisi beberapa bidang pengguna Moodle sebelumnya dengan informasi dari <b> bidang LDAP </b> yang Anda tentukan di sini. <p> Jika Anda membiarkan bidang ini kosong, maka tidak ada yang akan ditransfer dari LDAP dan standar Moodle akan digunakan sebagai gantinya. </p> <p> Dalam kedua kasus tersebut, pengguna akan dapat mengedit semua bidang ini setelah mereka masuk. </p>';
$string['auth_ldapnotinstalled'] = 'Tidak dapat menggunakan autentikasi LDAP. Modul PHP LDAP tidak diinstal.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Setel ke ya untuk mencoba Sistem Masuk Tunggal dengan domain NTLM. Perhatikan bahwa ini membutuhkan penyiapan tambahan di server untuk bekerja. Untuk detail lebih lanjut, lihat dokumentasi <a href="https://docs.moodle.org/en/NTLM_authentication"> autentikasi NTLM </a>.';
$string['auth_ntlmsso_enabled_key'] = 'Mengaktifkan';
$string['auth_ntlmsso_ie_fastpath'] = 'Atur untuk mengaktifkan jalur cepat SSO NTLM (melewati langkah-langkah tertentu jika browser klien adalah MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Coba NTLM dengan semua browser';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Jalur cepat MS IE?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Ya, coba NTLM browser lain';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Ya, semua browser lain menggunakan formulir login standar';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Tidak dapat mengekstrak nama pengguna dari header REMOTE_USER. Apakah format yang dikonfigurasi sudah benar?';
$string['auth_ntlmsso_missing_username'] = 'Anda perlu menentukan setidaknya% username% dalam format nama pengguna jarak jauh';
$string['auth_ntlmsso_subnet'] = 'Jika disetel, ini hanya akan mencoba SSO dengan klien di subnet ini. Format: xxx.xxx.xxx.xxx/bitmask. Pisahkan beberapa subnet dengan \',\' (koma).';
$string['auth_ntlmsso_subnet_key'] = 'Subnet';
$string['auth_ntlmsso_type'] = 'Metode autentikasi yang dikonfigurasi di peladen web untuk mengautentikasi pengguna (jika ragu, pilih NTLM)';
$string['auth_ntlmsso_type_key'] = 'Jenis Autentikasi';
$string['connectingldap'] = 'Menghubungkan ke server LDAP ...';
$string['connectingldapsuccess'] = 'Berhasil menyambung ke server LDAP Anda';
$string['creatingtemptable'] = 'Membuat tabel sementara {$ a}';
$string['diag_contextnotfound'] = 'Konteks {$a} tidak ada atau tidak dapat dibaca oleh bind DN.';
$string['diag_emptycontext'] = 'Konteks kosong ditemukan.';
$string['diag_genericerror'] = 'Kesalahan LDAP {$a-> code} membaca {$a-> subject}: {$a-> message}.';
$string['diag_rolegroupnotfound'] = 'Grup {$a-> group} untuk peran {$a-> localname} tidak ada atau tidak bisa dibaca oleh bind DN.';
$string['diag_toooldversion'] = 'Sangat tidak mungkin server LDAP modern menggunakan protokol LDAP v2. Pengaturan yang salah dapat merusak nilai di bidang pengguna. Hubungi administrator LDAP Anda.';
$string['didntfindexpiretime'] = 'password_expire () tidak menemukan waktu kedaluwarsa.';
$string['didntgetusersfromldap'] = 'Tidak mendapatkan pengguna dari LDAP - kesalahan? - keluar';
$string['gotcountrecordsfromldap'] = 'Mendapat {$a} data dari LDAP';
$string['ldapnotconfigured'] = 'URL host LDAP saat ini tidak dikonfigurasi';
$string['morethanoneuser'] = 'Lebih dari satu catatan pengguna ditemukan di LDAP. Hanya menggunakan yang pertama.';
$string['needbcmath'] = 'Anda memerlukan ekstensi BCMath untuk menggunakan pemeriksaan kata sandi kedaluwarsa dengan Active Directory.';
$string['needmbstring'] = 'Anda memerlukan ekstensi mbstring untuk mengubah sandi di Active Directory';
$string['nodnforusername'] = 'Galat pada user_update_password(). No DN for: {$a->username}';
$string['noemail'] = 'Mencoba mengirimi Anda email tetapi gagal!';
$string['notcalledfromserver'] = 'Tidak boleh dipanggil dari server web!';
$string['noupdatestobedone'] = 'Tidak ada pembaruan yang harus dilakukan';
$string['nouserentriestoremove'] = 'Tidak ada entri pengguna untuk dihapus';
$string['nouserentriestorevive'] = 'Tidak ada entri pengguna yang akan dihidupkan kembali';
$string['nouserstobeadded'] = 'Tidak ada entri pengguna untuk ditambahkan';
$string['ntlmsso_attempting'] = 'Mencoba Sistem Masuk Tunggal melalui NTLM ...';
$string['ntlmsso_failed'] = 'Gagal masuk otomatis, coba halaman masuk biasa ...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO dinonaktifkan.';
$string['ntlmsso_unknowntype'] = 'Jenis ntlmsso tidak diketahui!';
$string['pagesize_key'] = 'Ukuran halaman';
$string['pluginname'] = 'Gunakan server LDAP';
$string['pluginnotenabled'] = 'Plugin tidak diaktifkan!';
$string['privacy:metadata'] = 'Pengaya autentikasi server LDAP tidak menyimpan data pribadi apa pun.';
$string['renamingnotallowed'] = 'Penggantian nama pengguna tidak diperbolehkan di LDAP';
$string['rootdseerror'] = 'Terjadi kesalahan saat menanyakan rootDSE untuk Active Directory';
$string['start_tls'] = 'Gunakan layanan LDAP biasa (port 389) dengan enkripsi TLS';
$string['start_tls_key'] = 'Gunakan TLS';
$string['syncroles'] = 'Sinkronkan peran sistem dari LDAP';
$string['synctask'] = 'Pengguna LDAP menyinkronkan pekerjaan';
$string['systemrolemapping'] = 'Pemetaan peran sistem';
$string['updatepasserror'] = 'Galat pada user_update_password(). Kode kesalahan: {$a->errno}; String kesalahan: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Galat pada user_update_password() saat membaca kata sandi kedaluwarsa. Kode kesalahan: {$a-> errno}; String kesalahan: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Galat pada user_update_password() saat mengubah waktu kedaluwarsa dan/atau masa masuk masa tenggang. Kode kesalahan: {$a->errno}; String kesalahan: {$a->errstring}';
$string['updateremfail'] = 'Terjadi kesalahan saat memperbarui data LDAP. Kode kesalahan: {$a-> errno}; String kesalahan: {$a-> errstring} <br/> Kunci ({$a-> key}) - nilai moodle lama: \'{$a-> ouvalue}\' nilai baru: \'{$a-> nuvalue}\'';
$string['userentriestoadd'] = 'Entri pengguna yang akan ditambahkan: {$a}';
$string['userentriestoremove'] = 'Entri pengguna yang akan dihapus: {$a}';
$string['userentriestorevive'] = 'Entri pengguna yang akan dihidupkan kembali: {$a}';
$string['userentriestoupdate'] = 'Entri pengguna yang akan diperbarui: {$a}';
$string['usernotfound'] = 'Pengguna tidak ditemukan di LDAP';
