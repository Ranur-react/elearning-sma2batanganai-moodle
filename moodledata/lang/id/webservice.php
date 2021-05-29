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
 * Strings for component 'webservice', language 'id', version '3.10'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Pengecualian kontrol akses';
$string['actwebserviceshhdr'] = 'Protokol web service aktif';
$string['addaservice'] = 'Tambah layanan';
$string['addcapabilitytousers'] = 'Cek kemampuan pengguna';
$string['addcapabilitytousersdescription'] = 'Pengguna harus memiliki dua kemampuan - webservice:createtoken dan kemampuan yang cocok dengan protokol yang digunakan, misalnya webservice/rest:user, webservice/soap:use. Untuk mencapai hal ini, membuat peran layanan web dengan kemampuan yang sesuai diperbolehkan dan menetapkan ke pengguna layanan web sebagai peran sistem.';
$string['addfunction'] = 'Tambahkan fungsi';
$string['addfunctionhelp'] = 'Pilih fungsi untuk menambahkan layanan';
$string['addfunctions'] = 'Tambahkan fungsi';
$string['addfunctionsdescription'] = 'Pilih fungsi yang diperlukan untuk layanan yang baru dibuat.';
$string['addrequiredcapability'] = 'Menetapkan/membatalkan penetapan kemampuan yang diperlukan';
$string['addservice'] = 'Menambahkan layanan baru: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Menambahkan fungsi pada layanan "{$a}"';
$string['allusers'] = 'Semua pengguna';
$string['apiexplorer'] = 'API explorer';
$string['apiexplorernotavalaible'] = 'API explorer belum tersedia.';
$string['arguments'] = 'Argumen';
$string['authmethod'] = 'Metode autentikasi';
$string['callablefromajax'] = 'Dapat dipanggil dari AJAX';
$string['cannotcreatetoken'] = 'Tidak ada izin untuk membuat token web service  untuk layanan {$a}.';
$string['cannotgetcoursecontents'] = 'Tidak bisa mendapatkan isi kursus';
$string['checkusercapability'] = 'Cek kemampuan pengguna';
$string['checkusercapabilitydescription'] = 'Pengguna harus memiliki kemampuan yang tepat sesuai dengan protokol yang digunakan, misalnya  webservice/rest:use, webservice/soap:use. Untuk mencapai hal ini, membuat peran layanan web dengan kemampuan protokol diperbolehkan dan menetapkan ke pengguna layanan web sebagai peran sistem.';
$string['configwebserviceplugins'] = 'Untuk alasan keamanan, hanya protokol yang digunakan harus diaktifkan.';
$string['context'] = 'Konteks';
$string['createservicedescription'] = 'layanan adalah satu set fungsi layanan web. Anda akan memungkinkan pengguna untuk mengakses ke layanan baru. Pada <strong> Tambahkan layanan </strong> centang \'Enable\' dan pilihan \'Pengguna Resmi\'. Pilih \'Tidak ada kemampuan yang diperlukan\'.';
$string['createserviceforusersdescription'] = 'Layanan adalah satu set fungsi layanan web. Anda akan memungkinkan pengguna untuk mengakses ke layanan baru. Pada <strong> Tambahkan layanan </strong> centang \'Enable\' dan pilihan \'Pengguna Resmi\'. Pilih \'Tidak ada kemampuan yang diperlukan\'.';
$string['createtoken'] = 'Buat token';
$string['createtokenforuser'] = 'Buat token untuk pengguna';
$string['createtokenforuserdescription'] = 'Buat token untuk pengguna web service';
$string['createuser'] = 'Buat pengguna spesifik';
$string['createuserdescription'] = 'Seorang pengguna web services diperlukan untuk mewakili sistem pengendalian Moodle.';
$string['criteriaerror'] = 'Kehilangan izin untuk pencarian kriteria';
$string['default'] = 'Default untuk "{$a}"';
$string['deleteaservice'] = 'Hapus layanan';
$string['deleteservice'] = 'Hapus layanan: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Menghapus layanan juga akan menghapus token yang terkait dengan layanan ini. Apakah Anda benar-benar ingin menghapus layanan eksternal "{$a}"?';
$string['deletetokenconfirm'] = 'Apakah Anda benar-benar ingin menghapus token web service untuk <strong> {$a->user} </strong> pada layanan <strong> {$a->service} </strong>?';
$string['disabledwarning'] = 'Semua protokol layanan web dinonaktifkan. "Aktifkan layanan web" pengaturan dapat ditemukan dalam fitur Advanced.';
$string['doc'] = 'Dokumentasi';
$string['docaccessrefused'] = 'Anda tidak diizinkan untuk melihat dokumentasi untuk token ini';
$string['documentation'] = 'dokumentasi web service';
$string['downloadfiles'] = 'dapat mengunduh berkas';
$string['downloadfiles_help'] = 'Jika diaktifkan, setiap pengguna dapat mengunduh berkas dengan kunci keamanan mereka. Tentu saja mereka dibatasi untuk berkas mereka diizinkan untuk mengunduh di situs.';
$string['editaservice'] = 'Edit layanan';
$string['editservice'] = 'Edit layanan: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Diaktifkan';
$string['enabledocumentation'] = 'Aktifkan dokumentasi pengembang';
$string['enabledocumentationdescription'] = 'Detail dokumentasi \'web service\'  yang tersedia untuk protokol yang diaktifkan.';
$string['enableprotocols'] = 'Aktifkan protokol';
$string['enableprotocolsdescription'] = 'Setidaknya satu protokol harus diaktifkan. Untuk alasan keamanan, hanya protokol yang akan digunakan harus diaktifkan.';
$string['enablews'] = 'Aktifkan web service';
$string['enablewsdescription'] = 'Web service harus diaktifkan dalam fitur canggih.';
$string['entertoken'] = 'Masukkan kunci keamanan/token:';
$string['error'] = 'Galat: {$a}';
$string['errorcatcontextnotvalid'] = 'Anda tidak dapat menjalankan fungsi dalam konteks kategori (category id:{$a->catid}). Pesan kesalahan konteks adalah: {$a->message}';
$string['errorcodes'] = 'Pesan kesalahan';
$string['errorcoursecontextnotvalid'] = 'Anda tidak dapat menjalankan fungsi dalam konteks kursus (course id:{$a->courseid}). Pesan kesalahan konteks adalah: {$a->message}';
$string['errorinvalidparam'] = 'Parameter "{$a}" invalid';
$string['errornotemptydefaultparamarray'] = 'Parameter deskripsi web service dengan nama \'{$a}\' adalah struktur tunggal atau beberapa. Default hanya bisa array kosong. Periksa deskripsi web service.';
$string['erroroptionalparamarray'] = 'Parameter deskripsi web service dengan nama \'{$a}\' adalah struktur tunggal atau beberapa. Tidak dapat di-set sebagai VALUE_OPTIONAL. Periksa deskripsi web service.';
$string['eventwebservicefunctioncalled'] = 'Fungsi web service dipanggil';
$string['eventwebserviceloginfailed'] = 'Gagal masuk web service';
$string['eventwebserviceservicecreated'] = 'Berhasil membuat layanan web service';
$string['eventwebserviceservicedeleted'] = 'Layanan web service dihapus';
$string['eventwebserviceserviceupdated'] = 'Layanan web service diperbaharui';
$string['eventwebserviceserviceuseradded'] = 'Pengguna layanan web service ditambahkan';
$string['eventwebserviceserviceuserremoved'] = 'Pengguna layanan web service dihapus';
$string['eventwebservicetokencreated'] = 'Berhasil membuat token web service';
$string['eventwebservicetokensent'] = 'Token web service terkirim';
$string['execute'] = 'Jalankan';
$string['executewarnign'] = 'PERINGATAN: Jika Anda menekan mengeksekusi database Anda akan diubah dan perubahan tidak dapat dikembalikan secara otomatis!';
$string['externalservice'] = 'Layanan eksternal';
$string['externalservicefunctions'] = 'Fungsi layanan eksternal';
$string['externalservices'] = 'Layanan eksternal';
$string['externalserviceusers'] = 'Pengguna layanan eksternal';
$string['failedtolog'] = 'Gagal masuk';
$string['filenameexist'] = 'Nama berkas {$a} sudah ada';
$string['forbiddenwsuser'] = 'Tidak dapat membuat token untuk dikonfirmasi, dihapus, ditangguhkan atau guest.';
$string['function'] = 'Fungsi';
$string['functions'] = 'Fungsi';
$string['generalstructure'] = 'Struktur umum';
$string['information'] = 'Informasi';
$string['installexistingserviceshortnameerror'] = 'Sebuah layanan web dengan nama pendek "{$a}" sudah ada. Tidak dapat memasang/memperbaharui web service yang berbeda dengan nama pendek ini.';
$string['installserviceshortnameerror'] = 'Galat koding: Layanan dengan nama pendek "{$a}" seharusnya  berisi angka, huruf dan _- .. saja.';
$string['invalidextparam'] = 'Parameter api eksternal invalid: {$a}';
$string['invalidextresponse'] = 'Respon api eksternal invalid: {$a}';
$string['invalidiptoken'] = 'Token invalid - IP Anda tidak didukung';
$string['invalidtimedtoken'] = 'Token invalid - token kadaluarsa';
$string['invalidtoken'] = 'Token invalid - token tidak ditemukan';
$string['iprestriction'] = 'Pembatasan IP';
$string['iprestriction_help'] = 'Pengguna perlu memanggil web service dari daftar IP yang tersedia (dipisahkan oleh koma )';
$string['key'] = 'Kunci';
$string['keyshelp'] = 'Kunci digunakan untuk mengakses  akun Moodle dari aplikasi eksternal';
$string['manageprotocols'] = 'Mengatur protokol';
$string['managetokens'] = 'Mengatur token';
$string['missingcaps'] = 'Kehilangan kemampuan';
$string['missingcaps_help'] = 'Daftar kemampuan yang diperlukan untuk layanan yang dipilih pengguna tidak memiliki. Kehilangan kemampuan harus ditambahkan ke peran pengguna untuk menggunakan layanan ini.';
$string['missingpassword'] = 'Kehilangan kata sandi';
$string['missingrequiredcapability'] = 'Kemampuan {$a} diperlukan.';
$string['missingusername'] = 'Nama pengguna hilang';
$string['missingversionfile'] = 'Coding error: version.php kelihalangan komponen {$a}';
$string['nameexists'] = 'Nama ini sudah digunakan oleh layanan yang lain';
$string['nocapabilitytouseparameter'] = 'Pengguna tidak memiliki kemampuan yang dibutuhkan untuk menggunakan parameter {$a}';
$string['nofunctions'] = 'Layanan ini tidak memiliki fungsi.';
$string['norequiredcapability'] = 'Tidak ada kemampuan yang diperlukan';
$string['notoken'] = 'Daftar token kososng';
$string['onesystemcontrolling'] = 'Memungkinkan sistem eksternal untuk mengendalikan Moodle';
$string['onesystemcontrollingdescription'] = 'Langkah-langkah berikut membantu Anda untuk mengatur layanan web Moodle untuk memungkinkan sistem eksternal untuk berinteraksi dengan Moodle. Ini termasuk menyiapkan token (kunci keamanan) metode autentikasi.';
$string['operation'] = 'Operasi';
$string['optional'] = 'Opsional';
$string['passwordisexpired'] = 'Kata sandi kedaluwarsa.';
$string['phpparam'] = 'XML-RPC (Struktur PHP)';
$string['phpresponse'] = 'XML-RPC (Struktur PHP)';
$string['postrestparam'] = 'Kode PHP untuk REST (POST request)';
$string['potusers'] = 'Bukan pengguna resmi';
$string['potusersmatching'] = 'Tidak ada pengguna resmi yang cocok';
$string['print'] = 'Cetak semua';
$string['protocol'] = 'Protokol';
$string['removefunction'] = 'Hapus';
$string['removefunctionconfirm'] = 'Apakah Anda benar-benar ingin menghapus fungsi "{$a->function}" dari layanan "{$a->service}"?';
$string['requireauthentication'] = 'Metode ini memerlukan autentikasi dengan izin xxx.';
$string['required'] = 'Diperlukan';
$string['requiredcapability'] = 'kemampuan yang diperlukan';
$string['requiredcapability_help'] = 'Jika diatur, hanya pengguna dengan kemampuan yang dibutuhkan dapat mengakses layanan.';
$string['requiredcaps'] = 'kemampuan yang diperlukan';
$string['resettokenconfirm'] = 'Apakah Anda benar-benar ingin me-reset ini kunci web service untuk <strong>{$a->user} </strong> pada layanan<strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Apakah Anda benar-benar ingin me-reset kunci ini? Setiap tautan yang disimpan mengandung kunci lama tidak akan bekerja lagi.';
$string['response'] = 'Respon';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Untuk mengembalikan akun harus mereset kata sandi sebelum mendapatkan token.';
$string['restparam'] = 'REST (POST parameters)';
$string['restrictedusers'] = 'Hanya pengguna resmi';
$string['restrictedusers_help'] = 'Pengaturan ini menentukan apakah semua pengguna dengan izin untuk membuat token web service dapat menghasilkan token untuk layanan ini melalui halaman kunci keamanan mereka atau apakah pengguna hanya berwenang dapat melakukannya.';
$string['securitykey'] = 'Kunci keamanan (token)';
$string['securitykeys'] = 'Kunci keamanan';
$string['selectauthorisedusers'] = 'Pilih pengguna resmi';
$string['selectedcapability'] = 'Dipilih';
$string['selectedcapabilitydoesntexit'] = 'Saat ini pengaturan kemampuan yang diperlukan ({$a}) tidak ada lagi. Silakan mengubahnya dan menyimpan perubahan.';
$string['selectservice'] = 'Pilih layanan';
$string['selectspecificuser'] = 'Pilih pengguna tertentu';
$string['selectspecificuserdescription'] = 'Tambahkan pengguna layanan web sebagai pengguna resmi.';
$string['service'] = 'Layanan';
$string['servicehelpexplanation'] = 'Layanan A adalah satu set fungsi. Sebuah layanan dapat diakses oleh semua pengguna atau pengguna tertentu saja.';
$string['servicename'] = 'Nama layanan';
$string['servicenotavailable'] = 'We service tidak tersedia (tidak ada atau belum diaktifkan)';
$string['servicesbuiltin'] = 'Layanan terintegrasi';
$string['servicescustom'] = 'Layanan kustom';
$string['serviceusers'] = 'Pengguna resmi';
$string['serviceusersettings'] = 'Pengaturan pengguna';
$string['serviceusersmatching'] = 'Pengguna resmi cocok';
$string['serviceuserssettings'] = 'Ubah pengaturan untuk pengguna resmi';
$string['shortnametaken'] = 'Nama pendek sudah digunakan oleh layanan yang lain.';
$string['simpleauthlog'] = 'Autentikasi login sederhana';
$string['step'] = 'Langkah';
$string['supplyinfo'] = 'Lebih detail';
$string['testauserwithtestclientdescription'] = 'Mensimulasikan akses eksternal ke layanan menggunakan klien uji layanan web. Sebelum melakukannya, masuk  sebagai pengguna dengan kemampuan moodle/webservice:createtoken dan mendapatkan kunci keamanan (token) melalui halaman preferensi pengguna. Anda akan menggunakan token ini dalam klien tes. Pada klien tes, juga memilih protokol diaktifkan dengan autentikasi tanda. <strong>PERINGATAN: Fungsi bahwa Anda menguji AKAN DILAKSANAKAN untuk pengguna ini, jadi hati-hati apa yang Anda pilih untuk menguji </strong>';
$string['testclient'] = 'Test web service klien';
$string['testclientdescription'] = '* Tes web service client <strong> menjalankan</strong> fungsi untuk <strong> REAL </strong>. Jangan menguji fungsi yang Anda tidak tahu. <br/> * Semua fungsi layanan web yang ada belum diimplementasikan ke tes klien <br/> * Untuk memeriksa bahwa pengguna tidak dapat mengakses beberapa fungsi, Anda dapat menguji beberapa fungsi yang tidak memungkinkan. <br/> * Untuk melihat pesan kesalahan yang lebih jelas mengatur debugging untuk <strong> {$a->mode} </strong> ke {$a->atag} <br/> * Akses {$a->amfatag}.';
$string['testwithtestclient'] = 'Test layanan';
$string['testwithtestclientdescription'] = 'Mensimulasikan akses eksternal ke layanan menggunakan klien uji layanan web. Gunakan protokol diaktifkan dengan autentikasi tanda. <strong> PERINGATAN: Fungsi bahwa Anda menguji AKAN DILAKSANAKAN, jadi hati-hati apa yang Anda pilih untuk menguji </strong>';
$string['token'] = 'Token';
$string['tokenauthlog'] = 'Otentifikasi token';
$string['tokencreatedbyadmin'] = 'Hanya bisa di-set ulang oleh administrator';
$string['tokencreator'] = 'Pembuat';
$string['unknownoptionkey'] = 'Kunci pilihan ({$a}) tidak diketahui';
$string['unnamedstringparam'] = 'Parameter string belum diberi nama';
$string['updateusersettings'] = 'Pembaharuan';
$string['uploadfiles'] = 'Dapat mengunggah berkas';
$string['uploadfiles_help'] = 'Jika diaktifkan, setiap pengguna dapat mengunggah berkas dengan kunci keamanan untuk file pribadi sendiri daerah mereka atau wilayah rancangan berkas. Setiap kuota berkas pengguna berlaku.';
$string['userasclients'] = 'Pengguna sebagai klien dengan token';
$string['userasclientsdescription'] = 'Langkah-langkah berikut membantu Anda untuk mengatur layanan web Moodle untuk pengguna sebagai klien. Langkah-langkah ini juga membantu untuk mengatur token direkomendasikan (kunci keamanan) metode autentikasi. Dalam kasus penggunaan ini, pengguna akan menghasilkan token mereka dari halaman kunci keamanan melalui halaman preferensi mereka.';
$string['usermissingcaps'] = 'Kehilangan kemampuan: {$a}';
$string['usernameorid'] = 'Nama Pengguna / ID Pengguna';
$string['usernameorid_help'] = 'Masukkan nama pengguna atau ID pengguna';
$string['usernameoridnousererror'] = 'Tidak ditemukan pengguna dengan nama pengguna / ID pengguna tersebut.';
$string['usernameoridoccurenceerror'] = 'Lebih dari satu pengguna ditemukan dengan nama pengguna ini. Silakan masukkan ID pengguna.';
$string['usernotallowed'] = 'Pengguna tidak diperbolehkan untuk layanan ini. Pertama, Anda perlu mengizinkan pengguna ini pada halaman administrasi pengguna  {$a}.';
$string['usersettingssaved'] = 'Pengaturan pengguna tersimpan';
$string['validuntil'] = 'Berlaku sampai';
$string['validuntil_help'] = 'Jika diatur, layanan akan tidak aktif setelah tanggal ini untuk pengguna ini.';
$string['webservice'] = 'Web service';
$string['webservices'] = 'Web service';
$string['webservicesoverview'] = 'Tinjauan';
$string['webservicetokens'] = 'Token web service';
$string['wrongusernamepassword'] = 'Nama pengguna atau kata sandi salah';
$string['wsaccessuserdeleted'] = 'Menolak akses layanan web untuk nama pengguna terhapus: {$a}';
$string['wsaccessuserexpired'] = 'Menolak akses layanan web untuk kata sandi kedaluwarsa untuk nama pengguna: {$a}';
$string['wsaccessusernologin'] = 'Menolak akses web service untuk nama pengguna dengan autentikasi Nologin: {$a}';
$string['wsaccessusersuspended'] = 'Menolak akses web service untuk nama pengguna yang ditangguhkan: {$a}';
$string['wsaccessuserunconfirmed'] = 'Menolak akses web service untuk nama pengguna yang belum dikonfirmasi: {$a}';
$string['wsclientdoc'] = 'Dokumentasi Klien Web Service Moodle';
$string['wsdocapi'] = 'Dokumentasi API';
$string['wsdocumentation'] = 'Dokumentasi Web service';
$string['wsdocumentationdisable'] = 'Dokumentasi Web service dinonaktifkan';
$string['wsdocumentationintro'] = 'Untuk membuat klien kami menyarankan Anda untuk membaca {$a->doclink}';
$string['wsdocumentationlogin'] = 'atau masukkan nama pengguna layanan web dan kata sandi:';
$string['wspassword'] = 'Kata sandi layanan web';
$string['wsusername'] = 'Nama pengguna web service';
