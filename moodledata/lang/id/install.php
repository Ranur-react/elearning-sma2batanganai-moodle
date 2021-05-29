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
 * Strings for component 'install', language 'id', version '3.10'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Direktori admin yang ditentukan salah';
$string['admindirname'] = 'Direktori admin';
$string['admindirsetting'] = 'Beberapa penyedia hosting menggunakan /admin sebagai URL khusus untuk Anda mengakses panel kontrol atau sesuatu. Sayangnya ini bertentangan dengan lokasi standar untuk halaman admin Moodle. Anda dapat memperbaikinya dengan mengganti nama direktori admin di instalasi Anda, dan meletakkan nama baru itu di sini. Misalnya: <br /> <br /> <b> moodleadmin </b> <br /> <br /> Ini akan memperbaiki tautan admin di Moodle.';
$string['admindirsettinghead'] = 'Menyetel direktori admin ...';
$string['admindirsettingsub'] = 'Beberapa penyedia hosting menggunakan / admin sebagai URL khusus untuk Anda mengakses panel kontrol atau sesuatu. Sayangnya ini bertentangan dengan lokasi standar untuk halaman admin Moodle. Anda dapat memperbaikinya dengan mengganti nama direktori admin di instalasi Anda, dan meletakkan nama baru itu di sini. Misalnya: <br /> <br /> <b> moodleadmin </b> <br /> <br /> Ini akan memperbaiki tautan admin di Moodle.';
$string['availablelangs'] = 'Paket bahasa yang tersedia';
$string['caution'] = 'Peringatan';
$string['chooselanguage'] = 'Pilih bahasa';
$string['chooselanguagehead'] = 'Pilih bahasa';
$string['chooselanguagesub'] = 'Sila pilih bahasa untuk instalasi. Bahasa ini juga akan digunakan sebagai bahasa bawaan untuk situs, meskipun mungkin akan diubah kemudian.';
$string['cliadminemail'] = 'Alamat surel pengguna admin';
$string['cliadminpassword'] = 'Kata sandi pengguna admin';
$string['cliadminusername'] = 'Nama pengguna akun admin';
$string['clialreadyconfigured'] = 'Berkas konfigurasi config.php sudah ada. Sila gunakan admin /cli/install_database.php untuk memasang Moodle untuk situs ini.';
$string['clialreadyinstalled'] = 'Berkas konfigurasi config.php sudah ada. Silakan gunakan admin/cli/install_database.php untuk menginstal Moodle untuk situs ini.';
$string['cliinstallfinished'] = 'Instalasi berhasil.';
$string['cliinstallheader'] = 'Program pemasangan baris perintah Moodle {$a}';
$string['climustagreelicense'] = 'Dalam mode non-interaktif, Anda harus menyetujui lisensi dengan menentukan opsi --agree-license';
$string['cliskipdatabase'] = 'Melewatkan instalasi basis data.';
$string['clitablesexist'] = 'Tabel basis data sudah ada; Instalasi CLI tidak dapat dilanjutkan.';
$string['compatibilitysettings'] = 'Pengecekan setelan PHP...';
$string['compatibilitysettingshead'] = 'Pengecekan setelan PHP...';
$string['compatibilitysettingssub'] = 'Peladen Anda harus berhasil menjalankan semua tes ini agar Moodle berjalan dengan baik';
$string['configfilenotwritten'] = 'Skrip pemasang tidak dapat secara otomatis membuat berkas config.php yang berisi pengaturan yang Anda pilih, mungkin karena direktori Moodle tidak dapat ditulisi. Anda dapat menyalin kode berikut secara manual ke berkas bernama config.php dalam direktori root Moodle.';
$string['configfilewritten'] = 'berkas config.php berhasil dibuat';
$string['configurationcomplete'] = 'Konfigurasi lengkap';
$string['configurationcompletehead'] = 'Konfigurasi lengkap';
$string['configurationcompletesub'] = 'Moodle berupaya menyimpan konfigurasi Anda dalam berkas di root instalasi Moodle Anda.';
$string['database'] = 'Basis data';
$string['databasehead'] = 'Setelan basis data';
$string['databasehost'] = 'Hos basis data';
$string['databasename'] = 'Nama basis data';
$string['databasepass'] = 'Kata sandi basis data';
$string['databaseport'] = 'Porta basis data';
$string['databasesocket'] = 'Soket UNIX';
$string['databasetypehead'] = 'Pilih pengandar basis data';
$string['databasetypesub'] = 'Moodle mendukung beberapa jenis peladen basis data. Silakan hubungi administrator peladen jika Anda tidak tahu jenis yang digunakan.';
$string['databaseuser'] = 'Pengguna basis data';
$string['dataroot'] = 'Direktori data';
$string['datarooterror'] = '\'Direktori data\' yang Anda tentukan tidak dapat ditemukan atau dibuat. Perbaiki jalur atau buat direktori itu secara manual.';
$string['datarootpermission'] = 'Izin direktori data';
$string['datarootpublicerror'] = '\'Direktori data\' yang Anda tentukan dapat diakses langsung melalui web, Anda harus menggunakan direktori yang berbeda.';
$string['dbconnectionerror'] = 'Kami tidak dapat terhubung ke basis data yang Anda tentukan. Silakan periksa pengaturan basis data Anda.';
$string['dbcreationerror'] = 'Kesalahan pembuatan basis data. Tidak dapat membuat nama basis data yang diberikan dengan pengaturan yang disediakan';
$string['dbhost'] = 'Peladen hos';
$string['dbpass'] = 'Kata sandi';
$string['dbport'] = 'Porta';
$string['dbprefix'] = 'Prefiks tabel';
$string['dbtype'] = 'Tipe';
$string['directorysettings'] = '<p> Harap konfirmasikan lokasi pemasangan Moodle ini. </p> <p> <b> Alamat web: </b> Tetapkan alamat web lengkap tempat Moodle akan diakses. Jika situs web Anda dapat diakses melalui beberapa URL, maka pilih yang paling alami yang akan digunakan siswa Anda. Jangan sertakan garis miring. </p> <p> <b> Direktori moodle: </b> Tetapkan jalur direktori lengkap untuk instalasi ini. Pastikan huruf besar/kecil sudah benar. </p> <p> < b> Direktori data: </b> Anda memerlukan tempat di mana Moodle dapat menyimpan berkasi yang diunggah. Direktori ini harus dapat DIBACA DAN DITULISI oleh pengguna server web (biasanya \'nobody\', \'www-data\' atau \'apache\'), tetapi tidak boleh diakses langsung melalui web. Pemasang akan mencoba membuatnya jika tidak ada. </p>';
$string['directorysettingshead'] = 'Harap konfirmasikan lokasi pemasangan Moodle ini';
$string['directorysettingssub'] = '<p> Harap konfirmasikan lokasi pemasangan Moodle ini. </p> <p> <b> Alamat web: </b> Tetapkan alamat web lengkap tempat Moodle akan diakses. Jika situs web Anda dapat diakses melalui beberapa URL, maka pilih yang paling alami yang akan digunakan siswa Anda. Jangan sertakan garis miring. </p> <p> <b> Direktori moodle: </b> Tetapkan jalur direktori lengkap untuk instalasi ini. Pastikan huruf besar/kecil sudah benar. </p> <p> < b> Direktori data: </b> Anda memerlukan tempat di mana Moodle dapat menyimpan berkasi yang diunggah. Direktori ini harus dapat DIBACA DAN DITULISI oleh pengguna server web (biasanya \'nobody\', \'www-data\' atau \'apache\'), tetapi tidak boleh diakses langsung melalui web. Pemasang akan mencoba membuatnya jika tidak ada. </p>';
$string['dirroot'] = 'Direktori Moodle';
$string['dirrooterror'] = 'Pengaturan \'Direktori moodle\' tampaknya salah - kami tidak dapat menemukan pemasangan Moodle di sana. Nilai di bawah ini telah diatur ulang.';
$string['download'] = 'Unduh';
$string['downloadlanguagebutton'] = 'Unduh paket bahasa "{$a}"';
$string['downloadlanguagehead'] = 'Unduh paket bahasa';
$string['downloadlanguagenotneeded'] = 'Anda dapat melanjutkan proses instalasi menggunakan paket bahasa bawaan, "{$a}".';
$string['downloadlanguagesub'] = 'Anda sekarang memiliki opsi untuk mengunduh paket bahasa dan melanjutkan proses instalasi dalam bahasa ini. <br /> <br /> Jika Anda tidak dapat mengunduh paket bahasa, proses instalasi akan dilanjutkan dalam bahasa Inggris. (Setelah proses instalasi selesai, Anda akan memiliki kesempatan untuk mengunduh dan menginstal paket bahasa tambahan.)';
$string['doyouagree'] = 'Anda setuju? (ya/tidak)';
$string['environmenthead'] = 'Memeriksa sistem Anda ...';
$string['environmentsub'] = 'Kami sedang memeriksa apakah berbagai komponen sistem Anda memenuhi persyaratan sistem';
$string['environmentsub2'] = 'Setiap rilis Moodle memiliki beberapa persyaratan versi PHP minimum dan sejumlah ekstensi PHP wajib. Pemeriksaan komponen sistem akan dilakukan sebelum pemasangan dan peningkatan versi. Silakan hubungi administrator peladen jika Anda tidak tahu cara mamasang versi baru atau mengaktifkan ekstensi PHP.';
$string['errorsinenvironment'] = 'Pemeriksaan sistem gagal!';
$string['fail'] = 'Gagal';
$string['fileuploads'] = 'Unggah berkas';
$string['fileuploadserror'] = 'Ini harus aktif';
$string['fileuploadshelp'] = '<p> Pengunggahan berkas tampaknya dinonaktifkan di peladen Anda. </p> <p> Moodle masih dapat dipasang, tetapi tanpa kemampuan ini, Anda tidak akan dapat mengunggah berkas kursus atau gambar profil pengguna baru. </p> <p> Untuk mengaktifkan pengunggahan berkas. Anda (atau administrator sistem Anda) harus mengedit berkas php.ini utama di sistem Anda dan edit pada baris <b> file_uploads </b> menjadi \'1\'. </p>';
$string['inputdatadirectory'] = 'Direktori data:';
$string['inputwebadress'] = 'Alamat web:';
$string['inputwebdirectory'] = 'Direktori Moodle:';
$string['installation'] = 'Instalasi';
$string['langdownloaderror'] = 'Sayangnya bahasa "{$a}" tidak dapat diunduh. Proses instalasi akan dilanjutkan dalam bahasa Inggris.';
$string['langdownloadok'] = 'Bahasa "{$a}" berhasil dipasang. Proses instalasi akan berlanjut dalam bahasa ini.';
$string['memorylimit'] = 'Limit memori';
$string['memorylimiterror'] = 'Batas memori PHP disetel terlalu rendah ... Anda mungkin akan mengalami masalah di kemudian hari.';
$string['memorylimithelp'] = '<p> Batas memori PHP untuk server Anda saat ini diatur ke {$a}. </p> <p> Ini dapat menyebabkan Moodle memiliki masalah memori di kemudian hari, terutama jika Anda memiliki banyak modul yang diaktifkan dan/atau banyak pengguna. </p> <p> Kami menyarankan Anda mengkonfigurasi PHP dengan batas yang lebih tinggi jika memungkinkan, seperti 40M. Ada beberapa cara untuk melakukan ini yang dapat Anda coba: </p>
<ol> <li> Jika Anda bisa, kompilasi ulang PHP dengan <i> --enable-memory-limit </i>. Ini memungkinkan Moodle untuk mengatur batas memori itu sendiri. </li>
 <li> Jika Anda memiliki akses ke file php.ini, Anda dapat mengubah pengaturan <b> memory_limit </b> di sana menjadi sekitar 40M. Jika Anda tidak memiliki akses, Anda mungkin dapat meminta administrator untuk melakukan ini untuk Anda. </li>
<li> Pada beberapa server PHP, Anda dapat membuat file .htaccess di direktori Moodle yang berisi baris ini: <blockquote> <div> php_value memory_limit 40M </div> </blockquote> <p> Namun, pada beberapa server ini tidak diizinkan <b> semua </b> halaman PHP tidak berfungsi (Anda akan melihat kesalahan ketika Anda melihat halaman) sehingga Anda Anda harus menghapus file .htaccess. </p> </li> </ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP belum dikonfigurasi dengan benar dengan ekstensi MySQLi agar dapat berkomunikasi dengan MySQL. Silakan periksa berkas php.ini Anda atau kompilasi ulang PHP.';
$string['nativeauroramysqlhelp'] = '<p> Basis data adalah tempat sebagian besar setelan dan data Moodle disimpan dan harus dikonfigurasi di sini. </p>
<p> Bidang nama basis data, nama pengguna, dan kata sandi harus diisi; prefiks tabel adalah opsional. </p>
<p> Nama database hanya boleh berisi karakter alfanumerik, dollar ($) dan garis bawah (_). </p>
<p> Jika basis data saat ini tidak ada, dan pengguna yang Anda tentukan memiliki izin, Moodle akan mencoba membuat basis data baru dengan izin dan setelan yang benar. </p>
<p> Penggerak ini tidak kompatibel dengan mesin MyISAM lama. </p>';
$string['nativemariadb'] = 'MariaDB (Native/mariadb)';
$string['nativemariadbhelp'] = '<p> Basis data adalah tempat sebagian besar setelan dan data Moodle disimpan dan harus dikonfigurasikan di sini. </p> <p> Nama basis data, nama pengguna, dan kata sandi adalah bidang wajib diisi; awalan tabel adalah opsional. </p> <p> Nama basis data hanya boleh berisi karakter alfanumerik, dolar ($) dan garis bawah (_). </p> <p> Jika basis data saat ini tidak ada, dan pengguna yang Anda gunakan tentukan memiliki izin, Moodle akan berusaha membuat basis data baru dengan izin dan pengaturan yang benar. </p> <p> Penggerak ini tidak kompatibel dengan mesin MyISAM lama. </p>';
$string['nativemysqli'] = 'Improved MySQL (native/mysqli)';
$string['nativemysqlihelp'] = '<p> Basis data adalah tempat sebagian besar pengaturan dan data Moodle disimpan dan harus dikonfigurasikan di sini. </p> <p> Nama basis data, nama pengguna, dan kata sandi adalah bidang wajib diisi; awalan tabel adalah opsional. </p> <p> Nama basis data hanya boleh berisi karakter alfanumerik, dolar ($) dan garis bawah (_). </p> <p> Jika basis data saat ini tidak ada, dan pengguna yang Anda gunakan tentukan memiliki izin, Moodle akan berusaha membuat basis data baru dengan izin dan setelan yang benar. </p>';
$string['nativeoci'] = 'Oracle (Native/oci)';
$string['nativeocihelp'] = 'Sekarang Anda perlu mengkonfigurasi basis data tempat sebagian besar data Moodle akan Basis data. Basis data ini harus sudah dibuat dan nama pengguna dan kata sandi dibuat untuk mengaksesnya. Prefiks tabel adalah wajib.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p> Basis data adalah tempat sebagian besar setelan dan data Moodle disimpan dan harus dikonfigurasi di sini. </p> <p> Nama basis data, nama pengguna, kata sandi, dan awalan tabel merupakan bidang yang wajib diisi. </p> <p> Basis data harus sudah ada dan pengguna harus memiliki akses untuk membaca, dan menulisnya. </p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Sekarang Anda perlu mengkonfigurasi basis data dimana sebagian besar data Moodle akan disimpan. Basis data ini harus sudah dibuat dan nama pengguna dan kata sandi dibuat untuk mengaksesnya. Prefiks tabel adalah wajib.';
$string['nativesqlsrvnodriver'] = 'Pengandar Microsoft untuk SQL Server untuk PHP tidak terpasang atau terjadi kesalahan konfigurasi.';
$string['ociextensionisnotpresentinphp'] = 'PHP belum dikonfigurasikan dengan benar dengan ekstensi OCI8 sehingga dapat berkomunikasi dengan Oracle. Silakan periksa berkas php.ini Anda atau kompilasi ulang PHP.';
$string['pass'] = 'Lulus';
$string['paths'] = 'Jalur';
$string['pathserrcreatedataroot'] = 'Direktori data ({$a->dataroot}) tidak dapat dibuat  oleh installer.';
$string['pathshead'] = 'Konfirmasi jalur';
$string['pathsrodataroot'] = 'Direktori data root tidak dapat ditulisi.';
$string['pathsroparentdataroot'] = 'Direktori induk ({$a->parent}) tidak dapat ditulisi. Direktori data ({$a->dataroot}) tidak dapat dibuat oleh installer.';
$string['pathssubadmindir'] = 'Beberapa hosting menggunakan / admin sebagai URL khusus untuk Anda mengakses panel kontrol atau sesuatu. Sayangnya ini bertentangan dengan lokasi standar untuk halaman admin Moodle. Anda dapat memperbaikinya dengan mengganti nama direktori admin di instalasi Anda, dan meletakkan nama baru itu di sini. Misalnya: <em> moodleadmin </em>. Ini akan memperbaiki tautan admin di Moodle.';
$string['pathssubdataroot'] = '<p> Direktori tempat Moodle akan menyimpan semua konten file yang diunggah oleh pengguna. </p> <p> Direktori ini harus dapat dibaca dan ditulis oleh pengguna server web (biasanya \'www-data\', \'nobody\', atau \' apache \'). </p> <p> Itu tidak boleh diakses secara langsung melalui web. </p> <p> Jika direktori saat ini tidak ada, proses instalasi akan berusaha membuatnya. </p>';
$string['pathssubdirroot'] = '<p> Jalur lengkap ke direktori yang berisi kode Moodle. </p>';
$string['pathssubwwwroot'] = '<p> Alamat lengkap tempat Moodle akan diakses yaitu alamat yang akan dimasukkan pengguna ke bilah alamat peramban mereka untuk mengakses Moodle. </p> <p> Tidak mungkin mengakses Moodle menggunakan banyak alamat. Jika situs Anda dapat diakses melalui beberapa alamat, maka pilih yang termudah dan buat pengalihan permanen untuk masing-masing alamat lainnya. </p> <p> Jika situs Anda dapat diakses baik dari Internet, dan dari jaringan internal (kadang-kadang disebut Intranet), lalu gunakan alamat publik di sini. </p> <p> Jika alamat saat ini tidak benar, silakan ubah URL di bilah alamat peramban Anda dan mulai kembali instalasi. </p>';
$string['pathsunsecuredataroot'] = 'Lokasi dataroot tidak aman';
$string['pathswrongadmindir'] = 'Direktori admin tidak ada';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP belum dikonfigurasikan dengan benar dengan ekstensi PGSQL sehingga dapat berkomunikasi dengan PostgreSQL. Silakan periksa berkas php.ini Anda atau kompilasi ulang PHP.';
$string['phpextension'] = 'Ekstensi PHP {$a}';
$string['phpversion'] = 'Versi PHP';
$string['phpversionhelp'] = '<p> Moodle membutuhkan versi PHP setidaknya 5.6.5 atau 7.1 (7.0.x memiliki beberapa keterbatasan mesin). </p> <p> Anda saat ini menjalankan versi {$a}. </p> <p> Anda harus meningkatkan versi PHP atau pindah ke hos dengan versi PHP yang lebih baru. </p>';
$string['releasenoteslink'] = 'Untuk informasi tentang versi Moodle ini, silakan lihat catatan rilis di {$a}';
$string['safemode'] = 'Mode aman';
$string['safemodeerror'] = 'Moodle mungkin mengalami masalah ketika mode aman aktif';
$string['safemodehelp'] = '<p> Moodle mungkin memiliki berbagai masalah dengan mode aman aktif, paling tidak itu mungkin tidak akan diizinkan untuk membuat berkas baru. </p> <p> Mode aman biasanya hanya diaktifkan oleh host web publik paranoid, jadi Anda mungkin harus mencari perusahaan hosting web baru untuk situs Moodle Anda. </p> <p> Anda dapat melanjutkan instalasi jika suka, tetapi akan mengalaim beberapa masalah nantinya. </p>';
$string['sessionautostart'] = 'Sesi mulai otomatis';
$string['sessionautostarterror'] = 'Seharusnya dimatikan';
$string['sessionautostarthelp'] = '<p> Moodle memerlukan dukungan sesi dan tidak akan berfungsi tanpanya. </p> <p> Sesi dapat diaktifkan di berkas php.ini ... cari parameter session.auto_start. </p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP belum dikonfigurasi dengan benar dengan ekstensi SQLite. Silakan periksa berkas php.ini Anda atau kompilasi ulang PHP.';
$string['upgradingqtypeplugin'] = 'Peningkatan pengaya pertanyaan/tipe';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Anda melihat halaman ini karena Anda telah berhasil memasang dan meluncurkan paket <strong> {$a->packname} {$a->packversion}</strong> di komputer Anda. Selamat!';
$string['welcomep30'] = 'Rilis <strong> {$a->installername}</strong> ini mencakup aplikasi untuk menciptakan lingkungan tempat <strong> Moodle </strong> yang akan digunakan, yaitu:';
$string['welcomep40'] = 'Paket juga termasuk <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Penggunaan semua aplikasi dalam paket ini diatur oleh lisensi masing-masing. Paket <strong>{$a->installername}</strong> lengkap adalah <a href="http://www.opensource.org/docs/definition_plain.html"> sumber terbuka </a> dan didistribusikan di bawah lisensi <a href="http://www.gnu.org/copyleft/gpl.html"> GPL </a>.';
$string['welcomep60'] = 'Halaman berikut akan menuntun Anda melalui beberapa langkah yang mudah diikuti untuk mengonfigurasi dan menyiapkan <strong> Moodle </strong> di komputer Anda. Anda dapat menerima pengaturan bawaan atau, secara opsional, mengubahnya sesuai dengan kebutuhan Anda.';
$string['welcomep70'] = 'Klik tombol "Selanjutnya" di bawah untuk melanjutkan instalasi <strong> Moodle </strong>.';
$string['wwwroot'] = 'Alamat web';
$string['wwwrooterror'] = '\'Alamat Web\' tampaknya tidak valid - instalasi Moodle ini tampaknya tidak ada di sana. Nilai di bawah ini telah direset.';
