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
 * Strings for component 'dbtransfer', language 'id', version '3.10'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Memeriksa struktur tabel sumber';
$string['copyingtable'] = 'Menyalin tabel {$a}';
$string['copyingtables'] = 'Menyalin isi tabel
';
$string['creatingtargettables'] = 'Membuat tabel di basis data target
';
$string['dbexport'] = 'Ekspor basis data';
$string['dbtransfer'] = 'Transfer basis data';
$string['differenttableexception'] = 'Struktur tabel {$a} tidak cocok.';
$string['done'] = 'Selesai';
$string['exportschemaexception'] = 'Struktur basis data saat ini tidak cocok dengan semua berkas install.xml. <br /> {$a}';
$string['importschemaexception'] = 'Struktur basis data saat ini tidak cocok dengan semua berkas install.xml. <br /> {$a}';
$string['importversionmismatchexception'] = 'Versi saat ini {$a->currentver} tidak cocok dengan versi yang diekspor {$a->schemaver}.';
$string['malformedxmlexception'] = 'XML rusak ditemukan, tidak dapat melanjutkan.';
$string['tablex'] = 'Tabel {$a}:';
$string['unknowntableexception'] = 'Tabel tidak dikenal {$a} ditemukan dalam berkas ekspor.';
