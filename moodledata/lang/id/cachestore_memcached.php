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
 * Strings for component 'cachestore_memcached', language 'id', version '3.10'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['sessionhandlerconflict'] = 'Peringatan: Sebuah model memcache ({$a}) telah dikonfigurasi untuk menggunakan peladen memcache yang sama sebagai sesi. Membersihkan semua cache akan menyebabkan sesi juga dibersihkan.';
$string['upgrade200recommended'] = 'Kami menyarankan Anda meningkatkan ekstensi Memcached PHP Anda ke versi 2.0.0 atau yang lebih baru.
Versi ekstensi Memcached PHP yang Anda gunakan saat ini tidak menyediakan fungsionalitas yang digunakan Moodle untuk memastikan tembolok berkotak pasir. Sebelum Anda meningkatkan, kami menyarankan Anda untuk tidak mengonfigurasi aplikasi lain untuk menggunakan peladen Memcached yang sama seperti yang dikonfigurasi Moodle untuk digunakan.';
