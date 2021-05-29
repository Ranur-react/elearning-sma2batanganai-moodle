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
 * Strings for component 'course', language 'id', version '3.10'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Footer pemilih aktivitas';
$string['activitychooseractivefooter_desc'] = 'Pemilih aktivitas dapat mendukung plugin yang menambahkan item ke footer.';
$string['activitychoosercategory'] = 'Pemilih aktivitas';
$string['activitychooserhidefooter'] = 'Tanpa footer';
$string['activitychooserrecommendations'] = 'Aktivitas yang direkomendasikan';
$string['activitychoosersettings'] = 'Setting pemilih aktivitas';
$string['activitychoosertabmode'] = 'Tab pemilih aktivitas';
$string['activitychoosertabmode_desc'] = 'Pemilih aktivitas (Activity Chooser) memungkinkan pengajar memilih aktivitas dan resources yang secara mudah ditambahkan pada kursus mereka. Setting ini menentukan tab mana yang akan ditampilkan. Perhatikan bahwa tab bertanda bintang hanya ditampilkan pada user jika terdapat lebih dari satu aktivitas bertanda bintang dan tab yang direkomendasikan hanya ditampilkan jika admin site telah menetapkan beberapa aktivitas yang direkomendasikan.';
$string['activitychoosertabmodeone'] = 'Bertanda bintang, Semua, Aktivitas, Bahan Ajar, Direkomendasikan';
$string['activitychoosertabmodethree'] = 'Bertanda bintang, Aktivitas, Bahan Ajar, Direkomendasikan';
$string['activitychoosertabmodetwo'] = 'Bertanda bintang, Semua, Direkomendasikan';
$string['aria:coursecategory'] = 'Kategori kursus';
$string['aria:courseimage'] = 'Gambar kelas';
$string['aria:coursename'] = 'Nama kelas';
$string['aria:courseshortname'] = 'Nama singkat kelas';
$string['aria:defaulttab'] = 'Aktivitas bawaan';
$string['aria:favourite'] = 'Kelas ditandai bintang';
$string['aria:favouritestab'] = 'Aktivitas yang bertanda bintang';
$string['aria:modulefavourite'] = 'Tandai {$a} aktivitas';
$string['aria:recommendedtab'] = 'Akitivitas yang direkomendasikan';
$string['coursealreadyfinished'] = 'Kursus telah selesai';
$string['coursenotyetfinished'] = 'Kursus belum selesai';
$string['coursenotyetstarted'] = 'Kursus belum dimulai';
$string['coursetoolong'] = 'Kursus terlalu lama';
$string['customfield_islocked'] = 'Terkunci';
$string['customfield_islocked_help'] = 'Jika ruas dikunci, hanya pengguna dengan kemampuan untuk mengubah ruas tersuai terkunci (secara bawaan pengguna dengan peran bawaan manajer saja) yang akan dapat mengubahnya dalam setelan kursus.';
$string['customfield_notvisible'] = 'Tak seorang pun';
$string['customfield_visibility'] = 'Terlihat untuk';
$string['customfield_visibility_help'] = 'Pengaturan ini menentukan siapa saja yang dapat melihat custom field name dan isinya pada daftar mata kuliah atau pada filter custom field yang tersedia pada Dasbor.';
$string['customfield_visibletoall'] = 'Setiap orang';
$string['customfield_visibletoteachers'] = 'Pengajar';
$string['customfieldsettings'] = 'Setelan ruas tersuai kursus umum';
$string['downloadcourseconfirmation'] = 'Anda akan mengunduh berkas zip dari konten kursus (termasuk materi yang tidak bisa diunduh dan semua berkas berukuran lebih dari {$a}).';
$string['downloadcoursecontent'] = 'Unduh konten kursus';
$string['downloadcoursecontent_help'] = 'Setelan ini menentukan apakah konten kursus dapat diunduh oleh pengguna dengan kemampuan mengunduh konten kursus (setelan bawaan untuk pengguna dengan peran siswa atau pengajar).';
$string['enabledownloadcoursecontent'] = 'Aktifkan unduh konten kursus';
$string['errorendbeforestart'] = 'Tanggal akhir ({$a}) tertulis sebelum tanggal mulai kursus.';
$string['favourite'] = 'Kelas yang bertanda bintang';
$string['gradetopassnotset'] = 'Kursus ini belum menetapkan nilai untuk lulus. Ini dapat disetel dalam item nilai kursus (Penyiapan Buku Nilai).';
$string['informationformodule'] = 'Informasti tentang aktivitas {$a}';
$string['module'] = 'Aktivitas';
$string['noaccesssincestartinfomessage'] = 'Hai {$a->userfirstname},
<p>Sejumlah siswa di {$a->coursename} belum pernah mengakses kursus.</p>';
$string['nocourseactivity'] = 'Tidak cukup memiliki aktivitas antara awal dan akhir kursus';
$string['nocourseendtime'] = 'Kursus tidak memiliki tanggal akhir';
$string['nocoursesections'] = 'Tidak ada bagian kursus';
$string['nocoursestudents'] = 'Tidak ada siswa';
$string['norecentaccessesinfomessage'] = 'Hai {$a->userfirstname},
<p>Sejumlah siswa di {$a->coursename} belum mengakses kursus akhir-akhir ini.</p>';
$string['noteachinginfomessage'] = 'Halo {$a->userfirstname},
<p>Kursus dengan tanggal mulai minggu depan telah teridentifikasi sebagai tak memiliki pendaftaran pengajar atau siswa. </p>';
$string['privacy:completionpath'] = 'Penyelesaian kursus';
$string['privacy:favouritespath'] = 'Informasi kursus yang bertanda bintang';
$string['privacy:metadata:activityfavouritessummary'] = 'Sistem kursus berisi informasi tentang item mana dari pemilih aktivitas yang telah ditandai/dibintangi oleh pengguna.';
$string['privacy:metadata:completionsummary'] = 'Kursus ini berisi informasi penyelesaian tentang pengguna.';
$string['privacy:metadata:favouritessummary'] = 'Kursus berisi informasi yang berkaitan dengan kursus yang dibintangi oleh pengguna.';
$string['privacy:perpage'] = 'Jumlah kelas yang ditampilkan per halaman.';
$string['recommend'] = 'Merekomendasikan';
$string['recommendcheckbox'] = 'Merekomendasikan aktivitas: {$a}';
$string['searchactivitiesbyname'] = 'Pencarian aktivitas berdasarkan nama';
$string['searchresults'] = 'Hasil pencarian: {$a}';
$string['studentsatriskincourse'] = 'Siswa dalam risiko di kursus {$a}';
$string['studentsatriskinfomessage'] = 'Hai {$a->userfirstname},
<p>Siswa di kursus {$a->coursename} teridentifikasi dalam risiko.</p>';
$string['submitsearch'] = 'Kirim Pencarian';
$string['target:coursecompetencies'] = 'Siswa berisiko tidak mencapai kompetensi yang ditugaskan pada satu kursus';
$string['target:coursecompetencies_help'] = 'Target ini menggambarkan apakah seorang siswa berisiko tidak mencapai kompetensi yang ditugaskan pada suatu kursus. Target ini menganggap bahwa semua kompetensi yang diberikan pada kursus tersebut harus dicapai pada akhir kursus.';
$string['target:coursecompletion'] = 'Siswa berisiko tidak memenuhi persyaratan penyelesaian kursus';
$string['target:coursecompletion_help'] = 'Target ini menjelaskan apakah siswa dianggap berisiko tidak memenuhi ketentuan penyelesaian kursus.';
$string['target:coursedropout'] = 'Siswa dalam risiko keluar';
$string['target:coursedropout_help'] = 'Sasaran ini menggambarkan apakah siswa tersebut dianggap berisiko putus sekolah.';
$string['target:coursegradetopass'] = 'Siswa berisiko tidak mencapai nilai minimum untuk lulus kursus';
$string['target:coursegradetopass_help'] = 'Target ini menjelaskan apakah siswa berisiko tidak mencapai nilai minimum untuk lulus kursus.';
$string['target:noaccesssincecoursestart'] = 'Siswa-siswa yang belum mengakses kursus sama sekali.';
$string['target:noaccesssincecoursestart_help'] = 'Target ini menggambarkan siswa yang tidak pernah mengakses kursus tempat mereka terdaftar.';
$string['target:noaccesssincecoursestartinfo'] = 'Siswa berikut terdaftar dalam kursus yang telah dimulai, tetapi mereka belum pernah mengakses kursus tersebut.';
$string['target:norecentaccesses'] = 'Siswa yang belum mengakses kursus baru-baru ini';
$string['target:norecentaccesses_help'] = 'Target ini mengidentifikasi siswa yang belum mengakses kursus tempat mereka terdaftar dalam interval analisis yang ditetapkan (secara default sebulan terakhir).';
$string['target:norecentaccessesinfo'] = 'Siswa berikut belum mengakses kursus tempat mereka terdaftar dalam interval analisis yang ditetapkan (secara default sebulan terakhir).';
$string['target:noteachingactivity'] = 'Kursus berisiko tidak dimulai';
$string['target:noteachingactivity_help'] = 'Target ini menjelaskan tentang apakah kursus yang akan dimulai minggu depan akan memiliki aktivitas mengajar.';
$string['target:noteachingactivityinfo'] = 'Kursus berikut yang akan dimulai dalam beberapa hari mendatang berisiko tidak dimulai karena tidak memiliki pengajar atau siswa yang terdaftar.';
$string['targetlabelstudentcompetenciesno'] = 'Siswa yang cenderung mencapai kompetensi yang ditugaskan pada suatu kursus';
$string['targetlabelstudentcompetenciesyes'] = 'Siswa berisiko tidak mencapai kompetensi yang ditugaskan pada suatu kursus';
$string['targetlabelstudentcompletionno'] = 'Siswa yang mungkin memenuhi persyaratan penyelesaian kursus';
$string['targetlabelstudentcompletionyes'] = 'Siswa berisiko tidak memenuhi persyaratan penyelesaian kursus';
$string['targetlabelstudentdropoutno'] = 'Tidak dalam risiko';
$string['targetlabelstudentdropoutyes'] = 'Siswa berisiko drop out';
$string['targetlabelstudentgradetopassno'] = 'Siswa yang kemungkinan akan memenuhi nilai minimum untuk lulus kursus.';
$string['targetlabelstudentgradetopassyes'] = 'Siswa berisiko tidak memenuhi nilai minimum untuk lulus kursus.';
$string['targetlabelteachingno'] = 'Kursus yang berisiko tidak dimulai';
$string['targetlabelteachingyes'] = 'Pengguna dengan kemampuan mengajar yang memiliki akses ke kursus';
