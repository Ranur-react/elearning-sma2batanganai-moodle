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
 * Strings for component 'cachestore_redis', language 'id', version '3.10'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['password'] = 'Kata sandi';
$string['password_help'] = 'Ini mengatur kata sandi peladen Redis.';
$string['prefix_help'] = 'Prefiks ini digunakan untuk semua nama kunci di server Redis.
* Jika Anda hanya memiliki satu model Moodle yang menggunakan peladen ini, Anda dapat membiarkan nilai ini sebagai bawaan.
* Karena batasan panjang kunci, maksimal 5 karakter yang diperbolehkan.';
$string['test_password'] = 'Uji kata sandi peladen';
$string['test_password_desc'] = 'Uji kata sandi peladen Redis.';