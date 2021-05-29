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
 * Strings for component 'analytics', language 'id', version '3.10'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Dapat dianalisis {$a->analysableid} tidak digunakan: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Dapat dianalisis {$a->analysableid} tidak valid untuk target ini: {$a->result}';
$string['analysisinprogress'] = 'Masih dianalisa dengan eksekusi sebelumnya';
$string['analytics'] = 'Analitik';
$string['analyticsdisabled'] = 'Analitik dinonaktifkan. Anda dapat mengaktifkannya di "Administrasi situs> Fitur lanjutan".';
$string['analyticslogstore'] = 'Penyimpanan log digunakan untuk analitik';
$string['analyticslogstore_help'] = 'Penyimpanan log yang akan digunakan oleh API analitik untuk membaca aktivitas pengguna.';
$string['analyticssettings'] = 'Setelan analitik';
$string['analyticssiteinfo'] = 'Informasi situs';
$string['defaultpredictionsprocessor'] = 'Pemroses prediksi bawaan';
$string['defaultpredictoroption'] = 'Prosesor bawaan ({$a})';
$string['defaulttimesplittingmethods'] = 'Interval analisis bawaan untuk evaluasi model';
$string['defaulttimesplittingmethods_help'] = 'Interval analisis menentukan kapan sistem akan menghitung prediksi dan porsi log aktivitas yang akan dipertimbangkan untuk prediksi tersebut. Proses evaluasi model akan mengulangi interval analisis ini kecuali jika interval analisis tertentu ditentukan.';
$string['disabledmodel'] = 'Model dinonaktifkan';
$string['erroralreadypredict'] = 'Berkas {$a} telah digunakan untuk menghasilkan prediksi.';
$string['errorcannotreaddataset'] = 'Berkas set data {$a} tidak dapat dibaca.';
$string['errorcannotusetimesplitting'] = 'Interval analisis yang diberikan tidak dapat digunakan pada model ini.';
$string['errorcannotwritedataset'] = 'Berkas set data {$a} tidak dapat ditulis.';
$string['errorexportmodelresult'] = 'Model pembelajaran mesin tidak dapat diekspor.';
$string['errorimport'] = 'Terjadi kesalahan saat mengimpor berkas JSON yang disediakan.';
$string['errorimportmissingclasses'] = 'Komponen analitik berikut tidak tersedia di situs ini: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Model yang disediakan membutuhkan pengaya berikut untuk dipasang: {$a}. Perhatikan bahwa versi tersebut tidak harus sesuai dengan versi yang dipasang di situs Anda. Memasang pengaya yang sama atau versi yang lebih baru seharusnya baik-baik saja dalam banyak kasus.';
$string['errorimportversionmismatches'] = 'Versi komponen berikut berbeda dari versi yang dipasang di situs ini: {$a}. Anda dapat menggunakan opsi \'Abaikan ketidakcocokan versi\' untuk mengabaikan perbedaan ini.';
$string['errorinvalidcontexts'] = 'Beberapa konteks yang dipilih tidak dapat digunakan dalam target ini.';
$string['errorinvalidindicator'] = 'Indikator {$a} tidak valid';
$string['errorinvalidtarget'] = 'Target {$a} tidak valid';
$string['errorinvalidtimesplitting'] = 'Interval analisis tidak valid; harap pastikan Anda menambahkan nama kelas yang memenuhi syarat.';
$string['errornocontextrestrictions'] = 'Target yang dipilih tidak mendukung batasan konteks';
$string['errornoexportconfig'] = 'Ada masalah saat mengekspor konfigurasi model.';
$string['errornoexportconfigrequirements'] = 'Hanya model non-statis dengan interval analisis yang dapat diekspor.';
$string['errornoindicators'] = 'Model ini tidak memiliki indikator apa pun.';
$string['errornopredictresults'] = 'Tidak ada hasil yang dikembalikan dari pemroses prediksi. Periksa isi direktori keluaran untuk informasi lebih lanjut.';
$string['errornoroles'] = 'Peran siswa atau pengajar belum ditentukan. Tentukan mereka di halaman setelan analitik.';
$string['errornotarget'] = 'Model ini tidak memiliki target apa pun.';
$string['errornotimesplittings'] = 'Model ini tidak memiliki interval analisis.';
$string['errorpredictioncontextnotavailable'] = 'Konteks prediksi ini tidak lagi tersedia.';
$string['errorpredictionformat'] = 'Format kalkulasi prediksi salah';
$string['errorpredictionnotfound'] = 'Prediksi tidak ditemukan';
$string['errorpredictionsprocessor'] = 'Kesalahan prosesor prediksi: {$a}';
$string['errorpredictwrongformat'] = 'ia prediksi pengembalian prosesor tidak dapat didekodekan: "{$a}"';
$string['errorprocessornotready'] = 'Pemroses prediksi yang dipilih belum siap: {$a}';
$string['errorsamplenotavailable'] = 'Sampel yang diprediksi tidak lagi tersedia.';
$string['errorunexistingmodel'] = 'Model yang tidak ada {$a}';
$string['errorunexistingtimesplitting'] = 'Interval analisis yang dipilih tidak tersedia.';
$string['errorunknownaction'] = 'Tindakan tidak diketahui';
$string['eventinsightsviewed'] = 'Melihat wawasan';
$string['eventpredictionactionstarted'] = 'Proses prediksi dimulai';
$string['fixedack'] = 'Menerima';
$string['incorrectlyflagged'] = 'Salah ditandai';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Sistem menghasilkan wawasan untuk Anda.';
$string['insightinfomessageplain'] = 'Sistem menghasilkan wawasan untuk Anda: {$a}';
$string['insightmessagesubject'] = 'Wawasan baru untuk "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Itu tidak dapat dianalisis menggunakan interval analisis {$a}.';
$string['invalidtimesplitting'] = 'Model dengan ID {$a} membutuhkan interval analisis sebelum dapat digunakan untuk pelatihan.';
$string['levelinstitution'] = 'Tingkat pendidikan';
$string['levelinstitutionisced0'] = 'Pendidikan anak usia dini (PAUD) (\'sebelum SD\' untuk pencapaian pendidikan)';
$string['levelinstitutionisced1'] = 'Pendidikan Utama (SD)';
$string['levelinstitutionisced2'] = 'Pendidikan Menengah Pertama (SMP/MTs)';
$string['levelinstitutionisced3'] = 'Pendidikan Menengah Atas (SMA/MA/SMK)';
$string['levelinstitutionisced4'] = 'Pendidikan non-tersier pasca sekolah menengah (dapat mencakup pelatihan perusahaan atau komunitas / LSM)';
$string['levelinstitutionisced5'] = 'Pendidikan tinggi siklus pendek (dapat mencakup pelatihan perusahaan atau komunitas / LSM)';
$string['levelinstitutionisced6'] = 'Strata 1 atau sederajat';
$string['levelinstitutionisced7'] = 'Strata 2 atau sederajat';
$string['levelinstitutionisced8'] = 'Doktoral atau sederajat';
$string['modeinstruction'] = 'Mode instruksi';
$string['modeinstructionblendedhybrid'] = 'Campuran atau hibrida';
$string['modeinstructionfacetoface'] = 'Tatap muka';
$string['modeinstructionfullyonline'] = 'Sepenuhnya daring';
$string['modeloutputdir'] = 'Model direktori output';
$string['modeloutputdirinfo'] = 'Direktori tempat pemroses prediksi menyimpan semua info evaluasi. Berguna untuk awakutu dan penelitian.';
$string['modeloutputdirwithdefaultinfo'] = 'Direktori tempat pemroses prediksi menyimpan semua info evaluasi. Berguna untuk awakutu dan penelitian. Jika kosong, maka {$a} akan digunakan sebagai bawaan.';
$string['modeltimelimit'] = 'Batas waktu analisis per model';
$string['modeltimelimitinfo'] = 'Setelan ini membatasi waktu yang dihabiskan setiap model untuk menganalisis konten situs.';
$string['neutral'] = 'Netral';
$string['nocourses'] = 'Tidak ada kursus untuk dianalisis';
$string['nodata'] = 'Tidak ada data untuk dianalisis';
$string['noevaluationbasedassumptions'] = 'Model berdasarkan asumsi tidak dapat dievaluasi.';
$string['noinsights'] = 'Tidak ada wawasan yang dilaporkan';
$string['noinsightsmodel'] = 'Model ini tidak menghasilkan wawasan';
$string['nonewdata'] = 'Tidak ada data baru yang tersedia. Model akan dianalisis setelah interval analisis berikutnya.';
$string['nonewranges'] = 'Belum ada prediksi baru. Model akan dianalisis setelah interval analisis berikutnya.';
$string['nopredictionsyet'] = 'Prediksi belum tersedia';
$string['noranges'] = 'Belum ada prediksi';
$string['notapplicable'] = 'Tak dapat diterapkan';
$string['notrainingbasedassumptions'] = 'Model yang didasarkan pada asumsi tidak membutuhkan pelatihan';
$string['notuseful'] = 'Tidak berguna';
$string['novaliddata'] = 'Data valid tidak tersedia';
$string['novalidsamples'] = 'Contoh valid tidak tersedia';
$string['onlycli'] = 'Analitik memproses eksekusi melalui baris perintah saja';
$string['onlycliinfo'] = 'Proses analisis seperti mengevaluasi model, melatih algoritme pembelajaran mesin, atau mendapatkan prediksi mungkin membutuhkan waktu. Mereka berjalan sebagai tugas cron atau mungkin dipaksa melalui baris perintah. Jika dinonaktifkan, proses analitik dapat dijalankan secara manual melalui antarmuka web.';
$string['percentonline'] = 'persen daring';
$string['percentonline_help'] = 'Jika organisasi Anda menawarkan kursus campuran, berapa persentase pekerjaan siswa yang dilakukan secara daring di Moodle? Masukkan angka antara 0 dan 100.';
$string['predictionsprocessor'] = 'Prosesor prediksi';
$string['predictionsprocessor_help'] = 'Pemroses prediksi adalah backend pembelajaran mesin yang memproses kumpulan data yang dihasilkan dengan menghitung indikator dan target model. Setiap model dapat menggunakan prosesor yang berbeda. Yang ditentukan di sini akan menjadi bawaan.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Indikator perhitungan';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Konteks';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Kalkulasi waktu berakhir';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Indikator kelas kalkulator';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'ID contoh';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Tabel asal sampel';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Perhitungan waktu mulai';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Waktu prediksi dibuat';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Nilai yang dihitung';
$string['privacy:metadata:analytics:predictionactions'] = 'Aksi prediksi';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Nama aksi';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'ID prediksi';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Saat aksi prediksi dilakukan';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Pengguna yang melakukan aksi';
$string['privacy:metadata:analytics:predictions'] = 'Prediksi';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Indikator kalkulasi';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Konteks';
$string['privacy:metadata:analytics:predictions:modelid'] = 'ID model';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Prediksi';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Skor prediksi';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Indeks interval analisis';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'ID sampel';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Waktu prediksi dibuat';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Kalkulasi waktu berakhir';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Kalkulasi waktu mulai';
$string['processingsitecontents'] = 'Memproses konten situs';
$string['successfullyanalysed'] = 'Berhasil dianalisis';
$string['timesplittingmethod'] = 'Interval analisis';
$string['timesplittingmethod_help'] = 'Interval analisis menentukan kapan sistem akan menghitung prediksi dan porsi log aktivitas yang akan dipertimbangkan untuk prediksi tersebut. Misalnya, durasi kursus dapat dibagi menjadi beberapa bagian, dengan prediksi yang dihasilkan di akhir setiap bagian.';
$string['typeinstitution'] = 'Tipe institusi';
$string['typeinstitutionacademic'] = 'Akademik';
$string['typeinstitutionngo'] = 'Lembaga Swadaya Masyarakat (LSM)';
$string['typeinstitutiontraining'] = 'Pelatihan perusahaan';
$string['useful'] = 'Berguna';
$string['viewdetails'] = 'Lihat detail';
$string['viewinsight'] = 'Lihat wawasan';
$string['viewinsightdetails'] = 'Lihat detail wawasan';
$string['viewprediction'] = 'Lihat detail prediksi';
$string['washelpful'] = 'Apakah ini berguna?';
