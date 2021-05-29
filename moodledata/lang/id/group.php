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
 * Strings for component 'group', language 'id', version '3.10'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventgroupingupdated'] = 'Pengelompokan diperbarui';
$string['eventgroupmemberadded'] = 'Anggota grup ditambahkan';
$string['eventgroupmemberremoved'] = 'Anggota grup dihapus';
$string['eventgroupupdated'] = 'Grup di perbarui';
$string['existingmembers'] = 'Anggota-anggota yang ada: {$a}';
$string['filtergroups'] = 'Saring grup berdasarkan';
$string['group'] = 'Grup';
$string['groupaddedsuccesfully'] = 'Grup {$a} ditambahkan dengan sukses';
$string['groupaddedtogroupingsuccesfully'] = 'Grup {$a->groupname} yang ditambahkan ke pengelompokan {$a->groupoingname} dengan sukses';
$string['groupby'] = 'Diciptakan otomatis berdasarkan';
$string['groupdescription'] = 'Deskripsi kelompok';
$string['groupinfo'] = 'Info tentang grup yang dipilih';
$string['groupinfomembers'] = 'Info tentang anggota-anggota yang dipilih';
$string['groupinfopeople'] = 'Info tentang  orang-orang yang dipilih';
$string['grouping'] = 'Pengelompokan';
$string['grouping_help'] = 'Pengelompokan adalah kumpulan grup dalam suatu kursus. Jika pengelompokan dipilih, siswa yang ditugaskan ke grup dalam pengelompokan akan dapat bekerja bersama.';
$string['groupingaddedsuccesfully'] = 'Pengelompokan {$a} ditambahkan dengan sukses';
$string['groupingdescription'] = 'Deskripsi pengelompokan';
$string['groupingname'] = 'Nama pengelompokan';
$string['groupingnameexists'] = 'Pengelompokan nama \'{$a}\' sudah ada di kursus ini, silakan memilih lainnya.';
$string['groupings'] = 'Pengelompokan-pengelompokan';
$string['groupingsection'] = 'Akses pengelompokan';
$string['groupingsection_help'] = 'Pengelompokan adalah kumpulan grup dalam suatu kursus. Jika pengelompokan dipilih di sini, hanya siswa yang ditugaskan ke grup dalam pengelompokan ini yang akan memiliki akses ke bagian.';
$string['groupingsonly'] = 'Hanya pengelompokan';
$string['groupmember'] = 'Anggota grup';
$string['groupmemberdesc'] = 'Peran standar untuk anggota grup';
$string['groupmembers'] = 'Anggota-anggota grup';
$string['groupmemberssee'] = 'Lihat anggota-anggota grup';
$string['groupmembersselected'] = 'Anggota-anggota grup yang dipilih';
$string['groupmode'] = 'Mode pengelompokan';
$string['groupmode_help'] = 'Pengaturan ini memiliki 3 opsi:

* Tidak ada grup
* Grup terpisah - Setiap anggota grup hanya dapat melihat grup mereka sendiri, yang lain tidak terlihat
* Grup yang terlihat - Setiap anggota grup bekerja di grup mereka sendiri, tetapi juga dapat melihat grup lain

Mode grup yang ditentukan pada level kursus adalah mode default untuk semua aktivitas dalam kursus. Setiap aktivitas yang mendukung grup juga dapat menentukan mode grup sendiri, meskipun jika mode grup dipaksa pada tingkat kursus, pengaturan mode grup untuk setiap aktivitas diabaikan.';
$string['groupmodeforce'] = 'Mode kelompok paksa';
$string['groupmodeforce_help'] = 'Jika mode grup dipaksakan, maka mode grup kursus diterapkan ke setiap aktivitas dalam kursus. Pengaturan mode grup di setiap aktivitas kemudian diabaikan.';
$string['groupmy'] = 'Grupku / kelompokku';
$string['groupname'] = 'Nama grup / kelompok';
$string['groupnameexists'] = 'Nama kelompok {$a} sudah ada di kursus ini, silakan pilih yang lain.';
$string['groupnotamember'] = 'Maaf, kamu bukan anggota grup tersebut';
$string['groups'] = 'Kelompok - kelompok';
$string['groupscount'] = 'Kelompok - kelompok ({$a})';
$string['groupsettingsheader'] = 'Kelompok - kelompok';
$string['groupsgroupings'] = 'Kelompok-kelompok & pengelompokan';
$string['groupsinselectedgrouping'] = 'Kelompok-kelompok didalam';
$string['groupsnone'] = 'Tidak ada grup';
$string['groupsonly'] = 'Hanya kelompok-kelompok';
$string['groupspreview'] = 'pratinjau kelompok';
$string['groupsseparate'] = 'Memisahkan kelompok-kelompok';
$string['groupsvisible'] = 'Kelompok yang terlihat';
$string['grouptemplate'] = 'Grup @';
$string['hidepicture'] = 'Sembunyikan gambar';
$string['importgroups'] = 'Impor grup';
$string['importgroups_help'] = 'Grup dapat diimpor melalui file teks. Format file harus sebagai berikut:

* Setiap baris file berisi satu catatan
* Setiap catatan adalah serangkaian data yang dipisahkan oleh koma
* Catatan pertama berisi daftar nama field yang mendefinisikan format dari sisa file
* Fieldname yang diperlukan adalah nama grup
* Nama pilihan bidang adalah nomor grup, deskripsi, kunci enrolment, nama grup, aktifkan pengiriman pesan';
$string['includeonlyactiveenrol'] = 'Hanya sertakan pendaftaran aktif';
$string['includeonlyactiveenrol_help'] = 'Jika diaktifkan, pengguna yang ditangguhkan tidak akan dimasukkan dalam grup.';
$string['javascriptrequired'] = 'Halaman ini membutuhkan JavaScript untuk diaktifkan.';
$string['memberofgroup'] = 'Anggota grup dari: {$a}';
$string['members'] = 'Anggota per grup';
$string['membersofselectedgroup'] = 'Anggota dari';
$string['mygroups'] = 'Kelompokku';
$string['namingscheme'] = 'Skema penamaan';
$string['namingscheme_help'] = 'Simbol at (@) dapat digunakan untuk membuat grup dengan nama yang mengandung huruf. Misalnya Grup @ akan menghasilkan grup bernama Grup A, Grup B, Grup C, ...

Simbol hash (#) dapat digunakan untuk membuat grup dengan nama yang berisi angka. Misalnya Grup # akan menghasilkan grup bernama Grup 1, Grup 2, Grup 3, ...';
$string['newgrouping'] = 'Pengelompokan yang baru';
$string['newpicture'] = 'Gambar yang baru';
$string['newpicture_help'] = '<P ALIGN=CENTER><B>Mengupload sebuah gambar</B></P>

<p align="justify">Anda dapat mengupload foto anda dari komputer
   anda ke server ini, dan gambar tersebut akan digunakan
   pada berbagai tempat untuk menunjukkan keberadaan anda.</p>
<p align="justify">Untuk itulah, maka gambar yang paling baik digunakan
   adalah close-up dari wajah anda, tetapi anda dapat
   menggunakan gambar lainnya yang anda sukai.</p>
<p align="justify">Gambar harus dalam format JPG atau PNG dan nama
   file harus selalu mempunyai ekstension dengan jpg atau png.</p>
<p align="justify">Membuat file gambar atau foto anda bisa
   dengan menggunakan salah satu dari metode ini :</p>
<OL>
<LI><p align="justify">Dengan menggunakan kamera digital, foto anda akan menjadi
    seperti yang anda kehendaki dengan pemformatan yang benar.</p>
<LI><p align="justify">Anda dapat menggunakan alat scan untuk mendigitalkan foto yang sudah
    dicetak. Pastikan bahwa anda menyimpannya dalam format JPG atau PNG.</p>
<LI><p align="justify">Jika anda seorang yang seniman lukis, anda bisa menggambar
    foto anda dengan program untuk melukis.</p>
<LI><p align="justify">Yang terakhir adalah anda dapat mengambil banyak gambar secara gratis dari web. <A TARGET="_new" HREF="http://images.google.com/">http://images.google.com</A>
    adalah sebuah situs pencari yang hebat untuk gambar-gambar.
    Pada saat anda menemukannya anda dapat mengklik kanan pada mouse
    dan simpan gambar tersebut dari menu pilih, simpanlah gambar tersebut
    dalam harddisk komputer anda.</p>
</OL>

<p align="justify">Untuk mengupload gambar, clik  tombol "browse" pada halaman
   editing dan pilih gambar dari dalam harddisk komputer anda.</p>
<p align="justify"><b>Catatan :</b> Pastikan bahwa ukuran file anda tidak lebih
   besar dari daftar ukuran maksimum, atau gambar
   anda tidak dapat diupload.</p>
<p align="justify">Kemudian klik"Update my Profile" pada bagian bawah file,
   dan image file image akan dikroping menjadi segiempat dan
   disesuaikan ukurannya menjadi 100x100 pixel.</p>
<p align="justify">Pada saat anda melihat kembali gambar profil
   anda dan pada gambar tidak nampak adanya perubahan, gunakan tombol "Reload" pada browser anda atau "Refresh (F5)" browser anda.</p>';
$string['noallocation'] = 'Tidak ada alokasi';
$string['nogroup'] = 'Tidak ada kelompok';
$string['nogrouping'] = 'Tidak ada pengelompokan';
$string['nogroups'] = 'Belum ada grup yang ditetapkan dalam kursus ini';
$string['nogroupsassigned'] = 'Tidak ada grup yang ditugaskan';
$string['nopermissionforcreation'] = 'Tidak dapat membuat grup "{$ a}" karena Anda tidak memiliki izin yang diperlukan';
$string['nosmallgroups'] = 'Cegah grup kecil terakhir';
$string['notingroup'] = 'Abaikan pengguna dalam grup';
$string['notingrouping'] = '[Tidak didalam pengelompokan manapun]';
$string['notingrouplist'] = '[Tidak di kelompok manapun]';
$string['nousersinrole'] = 'Tidak ada pengguna yang cocok dalam peran yang dipilih';
$string['number'] = 'Jumlah grup / anggota';
$string['numgroups'] = 'Jumlah kelompok';
$string['nummembers'] = 'Anggota setiap kelompok';
$string['othergroups'] = 'Kelompok yang lain';
$string['overview'] = 'Gambaran';
$string['potentialmembers'] = 'Anggota potensial: {$ a}';
$string['potentialmembs'] = 'Anggota potensial';
$string['printerfriendly'] = 'Layar ramah-printer';
$string['privacy:metadata:core_message'] = 'Percakapan kelompok';
$string['privacy:metadata:groups'] = 'Catatan keanggotaan kelompok';
$string['privacy:metadata:groups:groupid'] = 'ID dari kelompok';
$string['privacy:metadata:groups:timeadded'] = 'Stempel waktu yang menunjukkan kapan pengguna ditambahkan ke grup.';
$string['privacy:metadata:groups:userid'] = 'ID pengguna yang terkait dengan grup.';
$string['random'] = 'Secara acak';
$string['removefromgroup'] = 'Hapus pengguna dari grup {$a}';
$string['removefromgroupconfirm'] = 'Apakah Anda benar-benar ingin menghapus pengguna "{$ a-> pengguna}" dari grup "{$ a-> grup}"?';
$string['removegroupfromselectedgrouping'] = 'Hapus kelompok dari pengelompokan';
$string['removegroupingsmembers'] = 'Hapus semua kelompok dari pengelompokan';
$string['removegroupsmembers'] = 'Hapus semua anggota kelompok';
$string['removeselectedusers'] = 'Hapus pengguna yang dipilih';
$string['selectfromgroup'] = 'Pilih anggota dari kelompok';
$string['selectfromgrouping'] = 'Pilih anggota dari pengelompokan';
$string['selectfromrole'] = 'Pilih anggota dengan peran';
$string['showgroupsingrouping'] = 'Tunjukkan kelompok didalam pengelompokan';
$string['showmembersforgroup'] = 'Tunjukkan anggota pada kelompok';
$string['toomanygroups'] = 'Tidak cukup pengguna untuk mengisi jumlah grup ini - hanya ada {$ a} pengguna dalam peran yang dipilih.';
$string['usercount'] = 'Jumlah pengguna';
$string['usercounttotal'] = 'Jumlah pengguna ({$a})';
