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
 * Strings for component 'chat', language 'id', version '3.10'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Anda masih dalam percakapan';
$string['ajax'] = 'Versi menggunakan Ajax';
$string['autoscroll'] = 'Gulir otomatis';
$string['beep'] = 'Beep';
$string['bubble'] = 'Gelembung';
$string['cantlogin'] = 'Tidak dapat login ke dalam ruang ngobrol!!';
$string['chat:addinstance'] = 'Tambah percakapan baru';
$string['chat:chat'] = 'Mengakses ruang ngobrol';
$string['chat:deletelog'] = 'Hapus rekaman obrolan';
$string['chat:exportparticipatedsession'] = 'Ekspor sesi obrolan yang Anda ikuti';
$string['chat:exportsession'] = 'Ekspor setiap sesi obrolan';
$string['chat:readlog'] = 'Baca rekaman obrolan';
$string['chat:talk'] = 'Ikut mengobrol';
$string['chatintro'] = 'Teks Pendahuluan';
$string['chatname'] = 'Nama ruang ngobrol ini';
$string['chatreport'] = 'Sesi obrolan';
$string['chattime'] = 'Waktu ngobrol berikutnya';
$string['composemessage'] = 'Menulis sebuah pesan';
$string['configmethod'] = 'Metode chatting ajax menyediakan sebuah antarmuka berbasis ajax, terhubung selalu dengan server secara teratur untuk memperbarui. Metode chatting normal melibatkan klien secara berkala menghubungi server untuk memperbarui. Hal ini tidak membutuhkan konfigurasi dan bekerja di mana-mana, tetapi dapat menciptakan beban besar pada server dengan jumlah chatters yang banyak. Menggunakan server daemon membutuhkan akses shell Unix, tetapi ini menghasilkan lingkungan chatting yang cepat untuk diubah-ubah kemampuannya.';
$string['confignormalupdatemode'] = 'Pembaruan ruang obrol biasanya dilayani secara efisien menggunakan fitur <em>Keep-Alive </em> HTTP 1.1, tetapi ini masih cukup berat bagi server. Sebuah metode yang lebih canggih adalah dengan menggunakan strategi <em>Stream</em> untuk mengirimkan pembaruan ke pengguna. Menggunakan <em>Streaming</em> jauh lebih baik (mirip dengan metode chatd) tetapi mungkin tidak didukung oleh server Anda.';
$string['configoldping'] = 'Berapa waktu maksimum yang dibolehkan sebelum kita mendeteksi bahwa seorang pengguna telah terputus (dalam detik)? Ini hanya sebuah batas atas, karena biasanya ini terdeteksi sangat cepat. Nilai yang lebih rendah akan lebih menuntut pada server Anda. Jika Anda menggunakan metode normal, <strong>jangan</strong> set ini lebih rendah dari 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Seberapa sering seharusnya ruang obrol diperbarui? (dalam detik). Pengaturan rendah ini akan membuat ruang chatting tampak lebih cepat, tetapi dapat menempatkan beban yang lebih tinggi pada server web Anda ketika banyak orang yang mengobrol. Jika Anda menggunakan pembaruan <em>Streaming</em>, Anda dapat memilih frekuensi yang lebih tinggi - coba dengan 2.';
$string['configrefreshuserlist'] = 'Seberapa sering daftar pengguna akan direfresh? (dalam detik)';
$string['configserverhost'] = 'Nama host dari komputer dimana daemon server berada';
$string['configserverip'] = 'Alamat IP numerik yang sesuai nama host di atas';
$string['configservermax'] = 'Jumlah maksimum klien yang diperbolehkan';
$string['configserverport'] = 'Port untuk digunakan server untuk daemon';
$string['coursetheme'] = 'Tema kursus';
$string['currentchats'] = 'Sesi obrolan aktif';
$string['currentusers'] = 'Pengguna saat ini';
$string['deletesession'] = 'Hapus sesi ini';
$string['deletesessionsure'] = 'Apakah Anda yakin ingin menghapus sesi ini?';
$string['donotusechattime'] = 'Jangan publikasikan waktu obrolan';
$string['enterchat'] = 'Klik di sini untuk masuk obrolan sekarang';
$string['entermessage'] = 'Tulis pesan Anda';
$string['errornousers'] = 'Tidak dapat menemukan satupun pengguna.';
$string['eventmessagesent'] = 'Pesan terkirim';
$string['eventsessionsviewed'] = 'Sesi yang dilihat';
$string['explaingeneralconfig'] = 'Pengaturan ini <strong>selalu</strong> digunakan';
$string['explainmethoddaemon'] = 'Pengaturan ini <strong>hanya</strong> jika Anda memilih metode "Daemon Chat Server" pada chat_method';
$string['explainmethodnormal'] = 'Pengaturan ini <strong>hanya</strong> jika Anda memilih "Metode Normal" pada chat_method';
$string['generalconfig'] = 'Konfigurasi umum';
$string['idle'] = 'Diam';
$string['inputarea'] = 'Area masukan';
$string['invalidid'] = 'Tidak dapat menemukan ruang chat!';
$string['list_all_sessions'] = 'Daftar seluruh sesi.';
$string['list_complete_sessions'] = 'Daftar hanya sesi yang telah selesai.';
$string['listing_all_sessions'] = 'Daftar seluruh sesi.';
$string['messagebeepseveryone'] = '{$a} beep semua!';
$string['messagebeepsyou'] = '{$a} baru saja membeep Anda!';
$string['messageenter'] = '{$a} baru saja memasuki obrolan ini';
$string['messageexit'] = '{$a} telah meninggalkan obrolan ini';
$string['messages'] = 'Pesan';
$string['messageyoubeep'] = 'Anda membeep {$a}';
$string['method'] = 'Metode obrolan';
$string['methodajax'] = 'Metode Ajax';
$string['methoddaemon'] = 'Daemon Chat Server';
$string['methodnormal'] = 'Metode Normal';
$string['modulename'] = 'Obrolan';
$string['modulename_help'] = 'Modul obrolan memungkinkan peserta untuk melakukan diskusi sinkron secara real-time melalui web. Ini adalah cara yang berguna untuk mendapatkan pemahaman yang berbeda satu sama lain dan topik sedang dibahas - modus menggunakan ruang obrolan sangat berbeda dari forum asinkron.';
$string['modulenameplural'] = 'Obrolan';
$string['neverdeletemessages'] = 'Jangan pernah menghapus pesan';
$string['nextsession'] = 'Sesi terjadwal selanjutnya';
$string['no_complete_sessions_found'] = 'Tidak ditemukan sesi yang telah selesai';
$string['nochat'] = 'Tidak ditemukan obrolan';
$string['noguests'] = 'Obrolan tidak terbuka untuk tamu';
$string['nomessages'] = 'Tidak ada pesan';
$string['nopermissiontoseethechatlog'] = 'Anda tidak memiliki izin untuk melihat log obrolan';
$string['normalkeepalive'] = 'Keep Alive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Tidak ada sesi terjadwal';
$string['notallowenter'] = 'Anda tidak diizinkan untuk memasuki ruang obrol';
$string['notlogged'] = 'Anda belum login!';
$string['oldping'] = 'Putus batas waktu';
$string['page-mod-chat-x'] = 'Setiap halaman modul obrolan';
$string['pastchats'] = 'Sesi obrolan lalu';
$string['pluginadministration'] = 'Administrasi obrolan';
$string['pluginname'] = 'Obrolan';
$string['refreshroom'] = 'Perbarui ruangan';
$string['refreshuserlist'] = 'Perbarui daftar pengguna';
$string['removemessages'] = 'Hapus semua pesan';
$string['repeatdaily'] = 'Pada waktu yang sama setiap hari';
$string['repeatnone'] = 'Tidak berulang - hanya publikasikan pada waktu yang ditentukan';
$string['repeattimes'] = 'Sesi pengulangan';
$string['repeatweekly'] = 'Pada waktu yang sama setiap minggu';
$string['saidto'] = 'Dikatakan ke';
$string['savemessages'] = 'Simpan sesi sebelumnya';
$string['search:activity'] = 'Percakapan - informasi aktivitas';
$string['seesession'] = 'Lihat sesi';
$string['send'] = 'Kirim';
$string['sending'] = 'Mengirimkan';
$string['serverhost'] = 'Nama peladen';
$string['serverip'] = 'IP peladen';
$string['servermax'] = 'Maksimal pengguna';
$string['serverport'] = 'Port peladen';
$string['sessions'] = 'Sesi percakapan';
$string['sessionstart'] = 'Sesi percakapan selanjutnya akan mulai pada {$a}';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Semua pengguna dapat melihat sesi sebelumnya';
$string['studentseereports_help'] = 'Jika pilihan Tidak, hanya pengguna yang memiliki mod/chat:readlog dengan statusnya tersedia yang bisa melihat rekaman percakapan';
$string['talk'] = 'Cakap';
$string['updatemethod'] = 'Ubah metode';
$string['updaterate'] = 'Ubah rating:';
$string['userlist'] = 'Dapat pengguna';
$string['usingchat'] = 'Menggunakan fitur percakapan';
$string['viewreport'] = 'Lihat sesi percakapan sebelumnya';
