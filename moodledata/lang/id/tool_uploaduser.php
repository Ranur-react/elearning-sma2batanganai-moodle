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
 * Strings for component 'tool_uploaduser', language 'id', version '3.10'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['uploadusers'] = 'Upload pengguna';
$string['uploadusers_help'] = 'Pengguna dapat diunggah (dan secara opsional terdaftar dalam kursus) melalui berkas teks. Format berkas harus sebagai berikut:

* Setiap baris berkas berisi satu rekaman
* Setiap record adalah rangkaian data yang dipisahkan dengan koma (atau pembatas lainnya)
* Catatan pertama berisi daftar nama kolom yang menentukan format berkas lainnya
* Nama ruas yang diperlukan adalah username, password, firstname, lastname, email';
$string['usersweakpassword'] = 'Pengguna memiliki kata sandi yang lemah';
$string['uupasswordnew'] = 'Kata sandi pengguna baru';
$string['uupasswordold'] = 'Kata sandi pengguna yang sudah ada';
