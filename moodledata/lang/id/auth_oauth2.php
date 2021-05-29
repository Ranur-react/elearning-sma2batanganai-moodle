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
 * Strings for component 'auth_oauth2', language 'id', version '3.10'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Seorang pengguna sudah ada di situs ini dengan nama pengguna ini. Jika ini adalah akun Anda, masuk dengan memasukkan nama pengguna dan kata sandi Anda dan tambahkan sebagai log masuk yang ditautkan melalui halaman preferensi Anda.';
$string['alreadylinked'] = 'Akun eksternal ini sudah ditautkan ke akun di situs ini';
$string['auth_oauth2description'] = 'Autentikasi berbasis standar OAuth 2';
$string['auth_oauth2settings'] = 'Setelan autentikasi OAuth 2.';
$string['confirmationinvalid'] = 'Tautan konfirmasi tidak valid, atau telah kedaluwarsa. Silakan mulai proses log masuk lagi untuk menghasilkan surel konfirmasi baru.';
$string['confirmationpending'] = 'Akun ini sedang menunggu konfirmasi surel.';
$string['createaccountswarning'] = 'Pengaya autentikasi ini memungkinkan pengguna untuk membuat akun di situs Anda. Anda mungkin ingin mengaktifkan setelan "authpreventaccountcreation" jika Anda menggunakan pengaya ini.';
$string['createnewlinkedlogin'] = 'Tautkan akun baru ({$a})';
$string['emailconfirmlink'] = 'Tautkan akun Anda';
$string['emailpasswordchangeinfo'] = 'Halo {$a->firstname},

Seseorang (mungkin Anda) telah meminta sandi baru untuk akun Anda di \'{$a->sitename}\'.

Namun kata sandi Anda tidak dapat diatur ulang karena Anda menggunakan akun Anda di situs lain untuk masuk.

Silakan masuk seperti sebelumnya, menggunakan tautan di halaman log masuk.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Informasi ubah kata sandi';
$string['info'] = 'Akun eksternal';
$string['issuer'] = 'Layanan OAuth 2';
$string['issuernologin'] = 'Penerbit ini tidak dapat digunakan untuk masuk';
$string['linkedlogins'] = 'Log masuk yang ditautkan';
$string['linkedloginshelp'] = 'Bantuan dengan log masuk yang ditautkan';
$string['loginerror_authenticationfailed'] = 'Proses autentikasi gagal.';
$string['loginerror_cannotcreateaccounts'] = 'Akun dengan alamat surel Anda tidak dapat ditemukan.';
$string['loginerror_invaliddomain'] = 'Alamat surel tidak diperbolehkan di situs ini.';
$string['loginerror_nouserinfo'] = 'Tidak ada informasi pengguna yang dikembalikan. Layanan OAuth 2 mungkin tidak dikonfigurasi dengan benar.';
$string['loginerror_userincomplete'] = 'Informasi pengguna yang dikembalikan tidak berisi nama pengguna dan alamat surel. Layanan OAuth 2 mungkin tidak dikonfigurasi dengan benar.';
$string['noissuersavailable'] = 'Tak satu pun dari layanan OAuth2 yang dikonfigurasi memungkinkan Anda menautkan akun masuk';
$string['notenabled'] = 'Maaf, pengaya autentikasi OAuth 2 tidak diaktifkan';
$string['notloggedindebug'] = 'Upaya log masuk gagal. Alasan: {$a}';
$string['notwhileloggedinas'] = 'Log masuk tertaut tidak dapat dikelola saat masuk sebagai pengguna lain.';
$string['oauth2:managelinkedlogins'] = 'Kelola akun masuk tertaut sendiri';
$string['plugindescription'] = 'Pengaya autentikasi ini menampilkan daftar penyedia identitas yang dikonfigurasi di halaman log masuk. Memilih penyedia identitas memungkinkan pengguna untuk masuk dengan kredensial mereka dari penyedia OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Autentikasi OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Pengaya ini terhubung ke subsistem autentikasi.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Token konfirmasi.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Stempel waktu saat token konfirmasi kedaluwarsa.';
$string['privacy:metadata:auth_oauth2:email'] = 'Email eksternal yang memetakan ke akun ini.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'ID penerbit OAuth 2 untuk login OAuth 2 ini';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Akun OAuth 2 ditautkan ke akun Moodle pengguna.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Stempel waktu saat akun pengguna ditautkan ke log masuk OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Stempel waktu saat rekaman ini diubah.';
$string['privacy:metadata:auth_oauth2:userid'] = 'ID akun pengguna yang ditautkan dengan login OAuth 2.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'ID pengguna yang mengubah akun ini.';
$string['privacy:metadata:auth_oauth2:username'] = 'Nama pengguna eksternal yang memetakan ke akun ini.';
