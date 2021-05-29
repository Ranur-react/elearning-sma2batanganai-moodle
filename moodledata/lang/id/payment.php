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
 * Strings for component 'payment', language 'id', version '3.10'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Diarsipkan';
$string['accountconfignote'] = 'Gerbang pembayaran untuk akun ini akan dikonfigurasi secara terpisah';
$string['accountdeleteconfirm'] = 'Jika akun ini memiliki pembayaran sebelumnya, ini akan diarsipkan, jika tidak, data konfigurasinya akan dihapus secara permanen. Apakah anda yakin ingin melanjutkan?';
$string['accountidnumber'] = 'Nomor ID';
$string['accountidnumber_help'] = 'Nomor ID hanya digunakan saat mencocokkan akun dengan sistem eksternal dan tidak ditampilkan di mana pun di situs. Jika akun memiliki nama kode resmi, akun tersebut dapat dimasukkan, jika tidak, isian dapat dikosongkan.';
$string['accountname'] = 'Nama akun';
$string['accountname_help'] = 'Bagaimana akun ini akan diidentifikasi untuk pengajar atau manajer yang menyiapkan pembayaran (misalnya di pengaya pendaftaran kursus).';
$string['accountnotavailable'] = 'Tidak tersedia';
$string['createaccount'] = 'Buat akun pembayaran';
$string['deleteorarchive'] = 'Hapus atau arsipkan';
$string['eventaccountcreated'] = 'Membuat akun pembayaran';
$string['eventaccountdeleted'] = 'Mengahapus akun pembayaran';
$string['eventaccountupdated'] = 'Memperbarui akun pembayaran';
$string['feeincludesurcharge'] = '{$a->fee} (sertakan {$a->surcharge}% biaya tambahan untuk menggunakan jenis pembayaran ini)';
$string['gatewaycannotbeenabled'] = 'Gerbang pembayaran tidak dapat diaktifkan karena konfigurasinya tidak lengkap.';
$string['gatewaydisabled'] = 'Dinonaktifkan';
$string['gatewayenabled'] = 'Diaktifkan';
$string['gatewaynotfound'] = 'Gerbang tidak ditemukan';
$string['gotomanageplugins'] = 'Mengaktifkan dan menonaktifkan gerbang pembayaran dan menetapkan biaya tambahan melalui {$a}.';
$string['gotopaymentaccounts'] = 'Anda dapat membuat beberapa akun pembayaran menggunakan salah satu berbang ini di halaman {$a}';
$string['hidearchived'] = 'Sembunyikan yang diarsipkan';
$string['noaccountsavilable'] = 'Tidak ada akun pembayaran yang tersedia.';
$string['nocurrencysupported'] = 'Tidak ada pembayaran dalam mata uang apa pun yang didukung. Harap pastikan bahwa setidaknya satu gerbang pembayaran diaktifkan.';
$string['nogateway'] = 'Tidak ada gerbang pembayaran yang dapat digunakan.';
$string['nogatewayselected'] = 'Anda harus terlebih dahulu memilih gerbang pembayaran.';
$string['paymentaccount'] = 'Akun pembayaran';
$string['paymentaccounts'] = 'Akun pembayaran';
$string['paymentaccountsexplained'] = 'Buat satu atau beberapa akun pembayaran untuk situs ini. Setiap akun menyertakan konfigurasi untuk gerbang pembayaran yang tersedia. Orang yang mengonfigurasi pembayaran di situs (misalnya, pembayaran untuk pendaftaran kursus) akan dapat memilih dari akun yang tersedia.';
$string['payments'] = 'Pembayaran';
$string['privacy:metadata:database:payments'] = 'Informasi pembayaran.';
$string['privacy:metadata:database:payments:amount'] = 'Jumlah pembayaran.';
$string['privacy:metadata:database:payments:currency'] = 'Mata uang pembayaran.';
$string['privacy:metadata:database:payments:gateway'] = 'Gerbang pembayaran yang digunakan untuk pembayaran.';
$string['privacy:metadata:database:payments:timecreated'] = 'Waktu pembayaran dilakukan.';
$string['privacy:metadata:database:payments:timemodified'] = 'Waktu ketika catatan pembayaran terakhir diperbarui.';
$string['privacy:metadata:database:payments:userid'] = 'Pengguna yang melakukan pembayaran.';
$string['restoreaccount'] = 'Pemulihan';
$string['selectpaymenttype'] = 'Pilih jenis pembayaran';
$string['showarchived'] = 'Tampilkan arsip';
$string['supportedcurrencies'] = 'Mata uang yang didukung';
$string['surcharge'] = 'Biaya tambahan (persentase)';
$string['surcharge_desc'] = 'Biaya tambahan adalah persentase tambahan yang dibebankan kepada pengguna yang memilih untuk membayar menggunakan gerbang pembayaran ini.';
