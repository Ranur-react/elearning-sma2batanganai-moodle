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
 * Strings for component 'enrol_paypal', language 'id', version '3.10'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Tetapkan peran';
$string['businessemail'] = 'Surel bisnis PayPal';
$string['businessemail_desc'] = 'Alamat surel akun bisnis  PayPal Anda';
$string['cost'] = 'Biaya pendaftaran';
$string['costerror'] = 'Biaya pendaftaran harus numerik';
$string['costorkey'] = 'Pilih salah satu dari metode pendaftaran berikut.';
$string['currency'] = 'Mata uang';
$string['defaultrole'] = 'Penetapan peran bawaan';
$string['defaultrole_desc'] = 'Pilih peran yang harus diberikan kepada pengguna selama pendaftaran PayPal';
$string['enrolenddate'] = 'Tanggal berakhir';
$string['enrolenddate_help'] = 'Jika diaktifkan, pengguna hanya dapat didaftarkan hingga tanggal ini.';
$string['enrolenddaterror'] = 'Tanggal akhir pendaftaran tidak boleh lebih awal dari tanggal mulai';
$string['enrolperiod'] = 'Durasi pendaftaran';
$string['enrolperiod_desc'] = 'Durasi bawaan pendaftaran valid. Jika disetel ke nol, durasi pendaftaran tidak akan terbatas secara bawaan.';
$string['enrolperiod_help'] = 'Durasi pendaftaran valid, dimulai dari saat pengguna terdaftar. Jika dinonaktifkan, durasi pendaftaran tidak akan terbatas.';
$string['enrolstartdate'] = 'Tanggal mulai';
$string['enrolstartdate_help'] = 'Jika diaktifkan, pengguna hanya dapat didaftarkan mulai tanggal ini dan seterusnya.';
$string['errdisabled'] = 'Pengaya pendaftaran PayPal dinonaktifkan dan tidak menangani pemberitahuan pembayaran.';
$string['erripninvalid'] = 'Pemberitahuan pembayaran instan belum diverifikasi oleh PayPal.';
$string['errpaypalconnect'] = 'Tidak dapat terhubung ke {$a->url} untuk memverifikasi pemberitahuan pembayaran instan: {$a->result}';
$string['expiredaction'] = 'Tindakan kedaluwarsa pendaftaran';
$string['expiredaction_help'] = 'Pilih aksi yang akan dilakukan saat pendaftaran pengguna berakhir. Harap dicatat bahwa beberapa data pengguna dan setelan dihapus dari kursus selama pembatalan pendaftaran.';
$string['mailadmins'] = 'Beri tahu admin';
$string['mailstudents'] = 'Beri tahu siswa';
$string['mailteachers'] = 'Beri tahu pengajar';
$string['messageprovider:paypal_enrolment'] = 'Pesan pendaftaran PayPal';
$string['nocost'] = 'Tidak ada biaya yang terkait dengan mendaftar di kursus ini!';
$string['paypal:config'] = 'Konfigurasikan model pendaftaran PayPal';
$string['paypal:manage'] = 'Kelola pengguna terdaftar';
$string['paypal:unenrol'] = 'Keluarkan pengguna dari kursus';
$string['paypal:unenrolself'] = 'Keluar mandiri dari kursus';
$string['paypalaccepted'] = 'Pembayaran PayPal diterima';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Modul PayPal memungkinkan Anda mengatur kursus berbayar. Jika biaya untuk kursus apapun adalah nol, maka siswa tidak diminta untuk membayar biaya masuk. Ada biaya seluruh situs yang Anda tetapkan di sini sebagai bawaan untuk seluruh situs dan kemudian pengaturan kursus yang dapat Anda tetapkan untuk setiap kursus satu per satu. Biaya kursus menggantikan biaya situs.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informasi tentang transaksi PayPal untuk pendaftaran PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Alamat surel atau ID akun PayPal dari penerima pembayaran (yaitu, \'merchant\').';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'ID kursus yang terjual.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'ID model pendaftaran dalam kursus.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Nama lengkap kursus yang pendaftarannya telah terjual.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Catatan yang dimasukkan oleh pembeli di bidang catatan pembayaran situs web PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Nama lengkap pembeli.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Dalam kasus pengembalian dana, pembalikan, atau pembalikan dibatalkan, ini akan menjadi ID transaksi dari transaksi asli.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Status pembayaran.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Menahan apakah pembayaran didanai dengan eCheck (echeck), atau didanai dengan saldo PayPal, kartu kredit, atau transfer instan (instan).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Alasan mengapa status pembayaran tertunda (jika itu).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Alasan mengapa status pembayaran adalah \'Reversed\', \'Refunded\', \'Canceled_Reversal\', atau \'Denied\' (jika statusnya adalah salah satunya).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Alamat email utama penerima pembayaran (yaitu, \'merchant\').';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ID akun PayPal unik dari penerima pembayaran (yaitu, \'merchant\').';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Jumlah pajak yang dibebankan pada pembayaran.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Waktu Moodle diberi tahu oleh PayPal mengenai pembayaran.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Nomor identifikasi transaksi asli \'merchant\' untuk pembayaran dari pembeli, yang kasusnya telah didaftarkan';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID pengguna yang membeli pendaftaran kursus.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Pengaya pendaftaran PayPal mengirimkan data pengguna dari Moodle ke situs web PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Alamat pengguna yang membeli kursus.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Kota pengguna yang membeli kursus.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Negara pengguna yang membeli kursus.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'String yang dipisahkan tanda hubung yang berisi ID pengguna (pembeli), ID kursus, ID model pendaftaran.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Alamat surel pengguna yang membeli kursus.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Nama depan pengguna yang membeli kursus.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Nama belakang pengguna yang membeli kursus.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Nama lengkap pembeli.';
$string['processexpirationstask'] = 'Pendaftaran PayPal mengirim tugas pemberitahuan kedaluwarsa';
$string['sendpaymentbutton'] = 'Kirim pembayaran melalui PayPal';
$string['status'] = 'Izinkan pendaftaran PayPal';
$string['status_desc'] = 'Izinkan pengguna menggunakan PayPal untuk mendaftar ke kursus secara bawaan.';
$string['transactions'] = 'Transaksi PayPal';
$string['unenrolselfconfirm'] = 'Anda yakin ingin membatalkan pendaftaran dari kursus "{$a}"?';
