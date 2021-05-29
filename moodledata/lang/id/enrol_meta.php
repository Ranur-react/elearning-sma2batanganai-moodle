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
 * Strings for component 'enrol_meta', language 'id', version '3.10'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Tambahkan ke grup';
$string['coursesort'] = 'Urutkan daftar kursus';
$string['coursesort_help'] = 'Ini menentukan apakah daftar kursus yang dapat ditautkan diurutkan menurut urutan (yaitu urutan yang diatur dalam Administrasi situs> kursus> Kelola kursus dan kategori) atau menurut abjad menurut pengaturan kursus.';
$string['creategroup'] = 'Buat grup baru';
$string['defaultgroupnametext'] = 'kursus {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'Tugas sinkronisasi pendaftaran meta';
$string['linkedcourse'] = 'Tautan kursus';
$string['meta:config'] = 'Konfigurasikan model pendaftaran meta';
$string['meta:selectaslinked'] = 'Pilih kursus sebagai tautan meta';
$string['meta:unenrol'] = 'Keluarkan pengguna yang ditangguhkan';
$string['nosyncroleids'] = 'Peran yang tidak disinkronkan';
$string['nosyncroleids_desc'] = 'Secara bawaan, semua penetapan peran tingkat kursus disinkronkan dari kursus induk ke anak. Peran yang dipilih di sini tidak akan disertakan dalam proses sinkronisasi. Peran yang tersedia untuk sinkronisasi akan diperbarui di eksekusi cron berikutnya.';
$string['pluginname'] = 'Tautan kursus meta';
$string['pluginname_desc'] = 'Pengaya pendaftaran tautan kursus meta menyinkronkan pendaftaran dan peran dalam dua kursus yang berbeda.';
$string['privacy:metadata:core_group'] = 'Mendaftarkan pengaya meta dapat membuat grup baru atau menggunakan grup yang sudah ada untuk menambahkan semua peserta kursus yang ditautkan.';
$string['syncall'] = 'Sinkronkan semua pengguna terdaftar';
$string['syncall_desc'] = 'Jika diaktifkan, semua pengguna yang terdaftar akan disinkronkan meskipun mereka tidak memiliki peran dalam kursus induk, jika yang dinonaktifkan hanya pengguna yang memiliki setidaknya satu peran tersinkronisasi yang terdaftar dalam kursus anak.';
