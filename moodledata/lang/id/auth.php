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
 * Strings for component 'auth', language 'id', version '3.10'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Pengaya autentikasi yang tersedia';
$string['allowaccountssameemail'] = 'Izinkan akun dengan surel sama';
$string['allowaccountssameemail_desc'] = 'Jika diaktifkan, lebih dari satu akun pengguna dapat berbagi alamat surel yang sama. Ini akan bisa berakibat masalah keamanan atau privasi, sebagai contoh tentang surel konfirmasi perubahan sandi.';
$string['alternatelogin'] = 'Jika Anda memasukan URL di sini, akan digunakan sebagai halaman login web ini. Halaman harus berisi formulir dengan data <strong>\'{$a}\'</strong> dan akan mengembalikan nilai <strong>nama pengguna</strong> dan <strong>kata sandi</strong>.<br />Hati-hati jika Anda memasukan URL yang salah dapat mengakibatkan web menjadi terkunci.<br />Kosongkan setelan ini jika Anda akan menggunakan halaman login bawaan.';
$string['alternateloginurl'] = 'URL Log Masuk alternatif';
$string['auth_changepasswordhelp'] = 'Ubah bantuan kata sandi';
$string['auth_changepasswordhelp_expl'] = 'Tampilkan bantuan sandi yang hilang kepada pengguna yang kehilangan sandi {$a} mereka. Ini akan ditampilkan sebagai pengganti <strong> Ubah URL Kata Sandi </strong> atau perubahan kata sandi Internal Moodle.';
$string['auth_changepasswordurl'] = 'Mengubah URL kata sandi';
$string['auth_changepasswordurl_expl'] = 'Tetapkan URL untuk mengirim pengguna yang kehilangan sandi {$a} mereka. Setel <strong> Gunakan laman Ubah Kata Sandi </strong> ke <strong> Tidak </strong>.';
$string['auth_changingemailaddress'] = 'Anda telah meminta perubahan alamat email, dari {$a->oldemail} ke {$a->newemail}. Untuk alasan keamanan, kami mengirimi Anda pesan surel di alamat baru untuk mengonfirmasi bahwa itu milik Anda. Alamat surel Anda akan diperbarui segera setelah Anda membuka URL yang dikirimkan kepada Anda dalam pesan itu.';
$string['auth_common_settings'] = 'Setelan umum';
$string['auth_data_mapping'] = 'Pemetaan data';
$string['auth_fieldlock'] = 'Kunci nilai';
$string['auth_fieldlock_expl'] = '<p> <b> Nilai kunci: </b> Jika diaktifkan, akan mencegah pengguna dan admin Moodle mengedit ruas secara langsung. Gunakan opsi ini jika Anda menyimpan data ini di sistem autentikasi eksternal. </p>';
$string['auth_fieldlockfield'] = 'Kunci nilai ({$a})';
$string['auth_fieldlocks'] = 'Kunci ruas pengguna';
$string['auth_fieldlocks_help'] = '<p>Anda bisa mengunci ruas data pengguna. Ini berguna untuk situs di mana data pengguna sedang dikelola secara manual oleh Administrator dengan cara mengedit data pengguna atau dengan fasilitas \'Unggah Pengguna". Jika Anda mengunci ruas yang disyaratkan oleh Moodle, pastikan Anda mencantumkan data tersebut saat membuat akun pengguna, atau akun tersebut menjadi tidak berfungsi.</p><p>Pertimbangkan menyetel kode kunci ke \'Tidak dikunci jika kosong\' untuk menghindari masalah ini.</p>';
$string['auth_fieldmapping'] = 'Pemetaan data ({$a})';
$string['auth_invalidnewemailkey'] = 'Galat: jika Anda mencoba untuk mengkonfirmasi perubahan alamat surel, Anda mungkin telah melakukan kesalahan dalam menyalin URL yang kami kirimkan melalui surel. Harap salin alamatnya dan coba lagi.';
$string['auth_multiplehosts'] = 'Beberapa host ATAU alamat dapat ditentukan (misalnya host1.com; host2.com; host3.com) atau (misalnya xxx.xxx.xxx.xxx; xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'Metode autentikasi {$a} tidak dikonfigurasi.';
$string['auth_outofnewemailupdateattempts'] = 'Anda telah kehabisan upaya yang diperbolehkan untuk memperbarui alamat email Anda. Permintaan pembaruan Anda telah dibatalkan.';
$string['auth_passwordisexpired'] = 'Kata sandi Anda kedaluwarsa. Apakah Anda ingin mengubah kata sandi sekarang?';
$string['auth_passwordwillexpire'] = 'Kata sandi Anda akan kedaluwarsa dalam {$a} hari. Apakah anda akan mengubah kata sandi Anda sekarang?';
$string['auth_remove_delete'] = 'Hapus penuh internal';
$string['auth_remove_keep'] = 'Biarkan internal';
$string['auth_remove_suspend'] = 'Tangguhkan internal';
$string['auth_remove_user'] = 'Tentukan apa yang harus dilakukan dengan akun pengguna internal selama sinkronisasi massal ketika pengguna dihapus dari sumber eksternal. Hanya pengguna yang ditangguhkan yang secara otomatis dipulihkan jika mereka muncul kembali di sumber eksternal.';
$string['auth_remove_user_key'] = 'Hapus pengguna eksternal';
$string['auth_sync_script'] = 'Sinkronisasi akun pengguna';
$string['auth_sync_suspended'] = 'Jika diaktifkan atribut yang ditangguhkan akan digunakan untuk memperbarui status penangguhan akun pengguna lokal.';
$string['auth_sync_suspended_key'] = 'Sinkronisasi status penangguhan pengguna lokal';
$string['auth_updatelocal'] = 'Perbarui lokal';
$string['auth_updatelocal_expl'] = '<p> <b> Perbarui lokal: </b> Jika diaktifkan, ruas ini akan diperbarui (dari autentikasi eksternal) setiap kali pengguna masuk atau ada sinkronisasi pengguna. Ruas yang disetel untuk diperbarui secara lokal harus dikunci. </p>';
$string['auth_updatelocalfield'] = 'Perbarui lokal ({$a})';
$string['auth_updateremote'] = 'Perbarui eksternal';
$string['auth_updateremote_expl'] = '<p> <b> Perbarui eksternal: </b> Jika diaktifkan, autentikasi eksternal akan diperbarui saat rekaman pengguna diperbarui. Kolom harus dibuka untuk memungkinkan pengeditan. </p>';
$string['auth_updateremote_ldap'] = '<p> <b> Catatan: </b> Memperbarui data LDAP eksternal mengharuskan Anda menyetel binddn dan bindpw ke bind-user dengan hak untuk mengedit semua rekaman pengguna. Saat ini tidak mempertahankan atribut multi-valued, dan akan menghapus nilai tambahan saat pembaruan. </p>';
$string['auth_updateremotefield'] = 'Perbarui eksternal ({$a})';
$string['auth_user_create'] = 'Aktifkan pembuatan pengguna';
$string['auth_user_creation'] = 'Pengguna baru (anonim) dapat membuat akun pengguna di sumber autentikasi eksternal dan dikonfirmasi melalui surel. Jika Anda mengaktifkan ini, ingatlah untuk juga mengkonfigurasi opsi module-specific untuk pembuatan pengguna.';
$string['auth_usernameexists'] = 'Nama pengguna yang anda pilih sudah digunakan. Silakan pilih yang lain.';
$string['auth_usernotexist'] = 'Tidak dapat memperbarui pengguna yang tidak ada: {$a}';
$string['authenticationoptions'] = 'Pilihan autentikasi';
$string['authinstructions'] = 'Biarkan kosong untuk instruksi log masuk bawaan yang akan ditampilkan di halaman log masuk. Jika Anda ingin memberikan instruksi log masuk tersuai, masukkan di sini.';
$string['authloginviaemail'] = 'Izinkan masuk melalui surel';
$string['authloginviaemail_desc'] = 'Izinkan pengguna mengunakan nama pengguna dan alamat surel (jika unik) untuk log masuk ke situs.';
$string['auto_add_remote_users'] = 'Otomatis menambahkan pengguna jarak jauh';
$string['cannotmapfield'] = 'Ruas "{$a->fieldname}" tidak dapat dipetakan karena nama pendek "{$a->shortname}" terlalu panjang. Untuk memungkinkannya dipetakan, Anda perlu mengurangi nama pendek menjadi {$a->charlimit} karakter. <a href="{$a->link}">Edit ruas profil pengguna</a>';
$string['changepassword'] = 'Ubah URL kata sandi';
$string['changepasswordhelp'] = 'URL halaman pemulihan kata sandi yang hilang, yang akan dikirim ke pengguna melalui surel. Perhatikan bahwa setelan ini tidak akan berpengaruh jika URL kata sandi yang terlupa diatur dalam setelan umum autentikasi.';
$string['chooseauthmethod'] = 'Pilih metode autentikasi';
$string['chooseauthmethod_help'] = 'Setelan ini menentukan metode autentikasi yang digunakan saat pengguna masuk. Hanya pengaya autentikasi yang diaktifkan yang harus dipilih, jika tidak, pengguna tidak akan dapat masuk lagi. Untuk memblokir pengguna agar tidak masuk, pilih "Tidak masuk".';
$string['createpassword'] = 'Buatkan kata sandi dan beritahu pengguna';
$string['createpasswordifneeded'] = 'Buat kata sandi jika dibutuhkan dan kirim via surel';
$string['emailchangecancel'] = 'Batalkan perubahan surel';
$string['emailchangepending'] = 'Perubahan menunggu keputusan. Buka tautan yang dikirimkan kepada Anda di {$a->preference_newemail}.';
$string['emailnowexists'] = 'Alamat surel yang Anda coba berikan ke profil Anda telah diberikan kepada orang lain sejak permintaan awal Anda. Permintaan Anda untuk mengubah alamat surel dengan ini dibatalkan, tetapi Anda dapat mencoba lagi dengan alamat yang berbeda.';
$string['emailupdate'] = 'Alamat surel diperbarui';
$string['emailupdatemessage'] = 'Hai {$a->fullname}, Anda telah meminta untuk mengubah alamat surel Anda pada {$a->site}. Silakan ikuti pranala (URL) berikut pada peramban web Anda untuk mengkonfirmasikan perubahan ini. Jika Anda memiliki pertanyaan, silakan hubungi kontak: {$a->supportemail} {$a->url}';
$string['emailupdatesuccess'] = 'Alamat surel dari pengguna <em>{$a->fullname}</em> berhasil diperbarui ke <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Konfirmasi perubahan alamat surel pada {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Kata sandi paling tidak harus memiliki {$a} karakter identik yang berurutan.';
$string['errorminpassworddigits'] = 'Kata sandi harus terdiri dari setidaknya {$a} digit.';
$string['errorminpasswordlength'] = 'Kata sandi harus terdiri dari setidaknya {$a} karakter.';
$string['errorminpasswordlower'] = 'Kata sandi harus terdiri dari setidaknya {$a} huruf kecil.';
$string['errorminpasswordnonalphanum'] = 'Kata sandi harus memiliki setidaknya {$a} karakter non-alfanumerik seperti *, -, atau #.';
$string['errorminpasswordupper'] = 'Sandi harus terdiri dari setidaknya {$a} huruf besar.';
$string['errorpasswordreused'] = 'Kata sandi ini telah digunakan sebelumnya, dan tidak diizinkan untuk digunakan kembali';
$string['errorpasswordupdate'] = 'Galat saat memperbarui kata sandi, kata sandi tidak diubah';
$string['eventuserloggedin'] = 'Pengguna sudah masuk';
$string['eventuserloggedinas'] = 'Pengguna masuk sebagai pengguna lain';
$string['eventuserloginfailed'] = 'Log masuk pengguna gagal';
$string['forcechangepassword'] = 'Paksa perubahan kata sandi';
$string['forcechangepassword_help'] = 'Paksa pengguna untuk mengubah kata sandi pada log masuk berikutnya ke Moodle.';
$string['forcechangepasswordfirst_help'] = 'Paksa pengguna untuk mengubah kata sandi pada login pertama mereka ke Moodle.';
$string['forgottenpassword'] = 'Jika Anda memasukkan URL di sini, itu akan digunakan sebagai halaman pemulihan kata sandi yang hilang untuk situs ini. Ini ditujukan untuk situs di mana kata sandi ditangani sepenuhnya di luar Moodle. Biarkan kosong untuk menggunakan pemulihan kata sandi bawaan.';
$string['forgottenpasswordurl'] = 'URL lupa kata sandi';
$string['getrecaptchaapi'] = 'Untuk menggunakan reCAPTCHA Anda harus mendapatkan kunci API dari <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Tombol log masuk tamu';
$string['incorrectpleasetryagain'] = 'Salah. Silakan coba lagi';
$string['infilefield'] = 'Ruas yang wajib diisi pada berkas';
$string['informminpassworddigits'] = 'setidaknya {$a} digit';
$string['informminpasswordlength'] = 'setidaknya {$a} karakter';
$string['informminpasswordlower'] = 'setidaknya {$a} huruf kecil';
$string['informminpasswordnonalphanum'] = 'setidaknya {$a} karakter non-alfanumerik, seperti *, -, atau #';
$string['informminpasswordreuselimit'] = 'Kata sandi dapat digunakan ulang setelah {$a} kali perubahan';
$string['informminpasswordupper'] = 'setidaknya {$a} huruf besar';
$string['informpasswordpolicy'] = 'Sandi harus memiliki {$a}';
$string['instructions'] = 'Instruksi';
$string['internal'] = 'Internal';
$string['limitconcurrentlogins'] = 'Batasi login paralel/bersamaan';
$string['limitconcurrentlogins_desc'] = 'Jika diaktifkan, jumlah log masuk peramban bersamaan untuk setiap pengguna dibatasi. Sesi terlama diakhiri setelah mencapai batas, harap dicatat bahwa pengguna dapat kehilangan semua pekerjaan yang belum disimpan. Setelan ini tidak kompatibel dengan setelan autentikasi sistem masuk tunggal (SSO).';
$string['locked'] = 'Terkunci';
$string['md5'] = 'Hash MD5';
$string['nopasswordchange'] = 'Kata sandi tidak dapat diubah';
$string['nopasswordchangeforced'] = 'Anda tidak dapat melanjutkan tanpa mengubah kata sandi Anda, namun tidak ada halaman yang tersedia untuk mengubahnya. Silakan hubungi Administrator Moodle Anda.';
$string['noprofileedit'] = 'Profil tidak dapat diubah';
$string['ntlmsso_attempting'] = 'Berusaha untuk Single Sign On melalui NTLM ...';
$string['ntlmsso_failed'] = 'Log masuk otomatis gagal, coba halaman log masuk yang normal...';
$string['ntlmsso_isdisabled'] = 'NTLM SSo tidak aktif';
$string['passwordhandling'] = 'Penanganan ruas kata sandi';
$string['plaintext'] = 'Teks biasa';
$string['pluginnotenabled'] = 'Pengaya autentikasi \'{$a}\' tidak aktif.';
$string['pluginnotinstalled'] = 'Pengaya autentikasi \'{$a}\' tidak dipasang.';
$string['potentialidps'] = 'Masuk menggunakan akun Anda pada:';
$string['privacy:metadata:userpref:createpassword'] = 'Menunjukkan bahwa kata sandi seharusnya dibuatkan untuk pengguna';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Menunjukkan apakah pengguna harus mengubah sandi mereka saat masuk';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Frekuensi pengguna gagal masuk';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Frekuensi pengguna gagal masuk sejak terakhir kali berhasil masuk';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Tanggal ketika upaya masuk terakhir yang gagal dicatat';
$string['privacy:metadata:userpref:loginlockout'] = 'Apakah akun pengguna dikunci karena upaya masuk yang gagal, dan tanggal ketika akun dikunci';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Menunjukkan bahwa akun pengguna tidak boleh dikunci';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Saat terkunci, rahasia yang harus digunakan pengguna untuk membuka kunci akun mereka';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA berguna untuk mencegah serangan program otomatis. Masukan kata-kata yang tertera di box. Jika Anda tidak yakin kata-kata yang tertera, Anda bisa meminta CAPTCHA yang lain atau audio CAPTCHA.';
$string['security_question'] = 'Pertanyaan keamanan';
$string['selfregistration'] = 'Pendaftaran mandiri';
$string['selfregistration_help'] = 'Jika pengaya autentikasi, seperti pendaftaran mandiri berbasis surel dipilih, maka itu memungkinkan pengguna potensial untuk mendaftarkan diri dan membuat akun. Ini menghasilkan kemungkinan spammer membuat akun untuk menggunakan posting forum, entri blog, dll. Untuk menghindari risiko ini, pendaftaran sendiri harus dinonaktifkan atau dibatasi oleh setelan <em> Domain surel yang diizinkan </em>.';
$string['settingmigrationmismatch'] = 'Ketidakcocokan nilai terdeteksi saat mengoreksi nama setelan pengaya! Pengaya autentikasi  \'{$a->plugin}\' memiliki setelan \'{$a->setting}\' yang telah dikonfigurasi ke \'{$a->legacy}\' dengan nama lama dan ke \'{$a->current}\' nama sekarang. Nilai terakhir telah ditetapkan sebagai nilai yang valid tetapi Anda harus memeriksa dan mengonfirmasi bahwa itu yang diharapkan.';
$string['sha1'] = 'hash SHA-1';
$string['showguestlogin'] = 'Anda dapat menyembunyikan atau menampilkan tombol log masuk tamu di halaman log masuk.';
$string['stdchangepassword'] = 'Gunakan halaman standar untuk mengubah kata sandi';
$string['stdchangepassword_expl'] = 'Jika sistem autentikasi eksternal memungkinkan perubahan kata sandi melalui Moodle, alihkan ini ke Ya. Setelan ini menggantikan \'URL ubah kata sandi\'.';
$string['stdchangepassword_explldap'] = 'CATATAN: Anda disarankan untuk menggunakan LDAP melalui terowongan terenkripsi SSL (ldaps://) jika peladen LDAP jauh.';
$string['suspended'] = 'Akun ditangguhkan';
$string['suspended_help'] = 'Akun pengguna yang ditangguhkan tidak dapat masuk atau menggunakan layanan web, dan semua pesan keluar dibuang.';
$string['testsettings'] = 'Uji setelan';
$string['testsettingsheading'] = 'Uji setelan autentikasi - {$a}';
$string['unlocked'] = 'Buka kunci';
$string['unlockedifempty'] = 'Buka kunci jika kosong';
$string['update_never'] = 'Tak pernah';
$string['update_oncreate'] = 'Pada penciptaan';
$string['update_onlogin'] = 'Pada setiap masuk';
$string['update_onupdate'] = 'Pada pembaruan';
$string['user_activatenotsupportusertype'] = 'autentikasi: ldap user_activate() tidak mendukung tipe pengguna terpilih: {$a}';
$string['user_disablenotsupportusertype'] = 'autentikasi: ldap user_disable() belum mendukung tipe pengguna terpilih';
$string['username'] = 'Nama pengguna';
$string['username_help'] = 'Perlu diketahui bahwa beberapa pengaya autentikasi tidak mengizinkan Anda untuk mengubah nama pengguna.';
