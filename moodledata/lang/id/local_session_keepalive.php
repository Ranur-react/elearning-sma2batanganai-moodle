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
 * Strings for component 'local_session_keepalive', language 'id', version '3.10'.
 *
 * @package     local_session_keepalive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['setting_keepaliveinterval_desc'] = 'Dengan setelan ini, Anda dapat mengatur interval (dalam menit) di mana peramban pengguna akan memeriksa input pengguna yang belum terkirim dan menjaga sesi tetap hidup jika diperlukan. Sekalipun permintaan ini sangat ringan di sisi peladen, Anda tidak boleh mengatur interval yang lebih pendek seperlunya karena interval pendek yang tidak perlu, bersama dengan sejumlah besar pengguna aktif bersamaan, dapat menghasilkan beban tambahan yang terlihat di peladen Anda. Untuk pengaturan Moodle normal, setelan bawaan harus baik. <br>Interval paling baik diatur ke setengah dari batas waktu sesi yang dikonfigurasikan pada halaman konfigurasi {$a->page} (saat ini diatur ke menit {$a->minutes}). Contoh: Jika batas waktu sesi diatur ke 120 menit, atur waktu keepalive menjadi 60 menit. Peramban pengguna kemudian akan melakukan permintaan keepalive pertama 60 menit setelah memuat halaman yang masih banyak waktu sebelum sesi biasanya berakhir.';
