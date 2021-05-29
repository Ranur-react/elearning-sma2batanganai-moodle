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
 * Strings for component 'tool_analytics', language 'id', version '3.10'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Akurasi';
$string['actionexecutedgroupedusefulness'] = 'Aksi yang dikelompokkan';
$string['actions'] = 'Aksi';
$string['actionsexecutedbyusers'] = 'Aksi yang dilakukan oleh pengguna';
$string['actionsexecutedbyusersfor'] = 'Aksi yang dijalankan oleh pengguna untuk model "{$a}"';
$string['allpredictions'] = 'Semua prediksi';
$string['alltimesplittingmethods'] = 'Semua interval analisis';
$string['analysingsitedata'] = 'Menganalisis situs';
$string['analysis'] = 'Analisis';
$string['analyticmodels'] = 'Model analitik';
$string['bettercli'] = 'Mengevaluasi model dan menghasilkan prediksi mungkin melibatkan pemrosesan yang berat. Disarankan untuk menjalankan tindakan ini dari baris perintah.';
$string['cantguessenddate'] = 'Tidak bisa menebak tanggal akhir';
$string['cantguessstartdate'] = 'Tidak bisa menebak tanggal mulai';
$string['classdoesnotexist'] = 'Kelas {$a} tidak ada';
$string['clearmodelpredictions'] = 'Anda yakin ingin menghapus semua prediksi "{$a}"?';
$string['clearpredictions'] = 'Bersihkan prediksi';
$string['clienablemodel'] = 'Anda dapat mengaktifkan model dengan memilih interval analisis dengan ID-nya. Perhatikan bahwa Anda juga dapat mengaktifkannya nanti menggunakan antarmuka web (\'tidak ada\' untuk keluar). Evaluasi model melalui antarmuka web dinonaktifkan. Anda dapat mengizinkan proses ini untuk dijalankan secara manual melalui antarmuka web dengan menonaktifkan setelan analitik <a href="{$a}"> \'onlycli\' </a>.';
$string['clievaluationandpredictions'] = 'Tugas terjadwal mengulangi model yang diaktifkan dan mendapatkan prediksi.';
$string['clievaluationandpredictionsnoadmin'] = 'Tugas terjadwal mengulangi model yang diaktifkan dan mendapatkan prediksi. Evaluasi model melalui antarmuka web dinonaktifkan. Ini mungkin diaktifkan oleh administrator situs.';
$string['component'] = 'Komponen';
$string['componentcore'] = 'Inti';
$string['componentselect'] = 'Pilih semua model yang disediakan oleh komponen \'{$a}\'';
$string['componentselectnone'] = 'Batalkan semua pilihan';
$string['contexts'] = 'Konteks';
$string['contexts_help'] = 'Model akan dibatasi pada rangkaian konteks ini. Tidak ada batasan konteks yang akan diterapkan jika tidak ada konteks yang dipilih.';
$string['createmodel'] = 'Buat model';
$string['currenttimesplitting'] = 'Interval analisis saat ini';
$string['delete'] = 'Hapus';
$string['deletemodelconfirmation'] = 'Anda yakin ingin menghapus "{$ a}"? Perubahan ini tidak dapat dikembalikan.';
$string['disabled'] = 'Dinonaktifkan';
$string['editmodel'] = 'Edit model "{$a}"';
$string['edittrainedwarning'] = 'Model ini sudah dilatih. Perhatikan bahwa mengubah indikatornya atau interval analisisnya akan menghapus prediksi sebelumnya dan mulai membuat prediksi baru.';
$string['enabled'] = 'Diaktifkan';
$string['errorcantenablenotimesplitting'] = 'Anda perlu memilih interval analisis sebelum mengaktifkan model';
$string['errornoenabledandtrainedmodels'] = 'Tidak ada model yang diaktifkan dan terlatih untuk diprediksi.';
$string['errornoenabledmodels'] = 'Tidak ada model yang diaktifkan untuk dilatih.';
$string['errornoexport'] = 'Hanya model terlatih yang dapat diekspor';
$string['errornostaticevaluated'] = 'Model berdasarkan asumsi tidak dapat dievaluasi. Mereka selalu 100% benar menurut bagaimana mereka didefinisikan.';
$string['errornostaticlog'] = 'Model yang didasarkan pada asumsi tidak dapat dievaluasi karena tidak ada log kinerja.';
$string['erroronlycli'] = 'Eksekusi hanya diperbolehkan melalui baris perintah';
$string['errortrainingdataexport'] = 'Data pelatihan model tidak dapat diekspor';
$string['evaluate'] = 'Evaluasi';
$string['evaluatemodel'] = 'Evaluasi model';
$string['evaluationinbatches'] = 'Konten situs dihitung dan disimpan dalam kelompok. Proses evaluasi dapat dihentikan kapan saja. Saat dijalankan berikutnya, ini akan berlanjut dari titik saat dihentikan.';
$string['evaluationmode'] = 'Mode evaluasi';
$string['evaluationmode_help'] = 'Ada dua mode evaluasi: * Model terlatih - Data situs digunakan sebagai data pengujian untuk mengevaluasi keakuratan model yang dilatih. * Model terlatih - Data situs digunakan sebagai data pengujian untuk mengevaluasi keakuratan model yang dilatih. * Konfigurasi - Data situs dibagi menjadi data pelatihan dan pengujian, untuk melatih dan menguji keakuratan konfigurasi model. Model terlatih hanya tersedia jika model terlatih telah diimpor ke situs, dan belum dilatih ulang menggunakan data situs.';
$string['evaluationmodecolconfiguration'] = 'Konfigurasi';
$string['evaluationmodecoltrainedmodel'] = 'Model terlatih';
$string['evaluationmodeconfiguration'] = 'Evaluasi konfigurasi model';
$string['evaluationmodeinfo'] = 'Model ini telah diimpor ke situs. Anda dapat mengevaluasi kinerja model, atau Anda dapat mengevaluasi kinerja konfigurasi model menggunakan data situs.';
$string['evaluationmodetrainedmodel'] = 'Evaluasi model terlatih';
$string['executescheduledanalysis'] = 'Jalankan analisis terjadwal';
$string['export'] = 'Ekspor';
$string['exportincludeweights'] = 'Sertakan bobot model yang dilatih';
$string['exportmodel'] = 'Ekspor konfigurasi';
$string['exporttrainingdata'] = 'Ekspor data pelatihan';
$string['extrainfo'] = 'Info';
$string['generalerror'] = 'Kesalahan evaluasi. Kode status {$a}';
$string['getpredictions'] = 'Dapatkan prediksi';
$string['goodmodel'] = 'Ini adalah model yang baik untuk digunakan untuk mendapatkan prediksi. Aktifkan untuk mulai mendapatkan prediksi.';
$string['ignoreversionmismatches'] = 'Abaikan ketidakcocokan versi';
$string['ignoreversionmismatchescheckbox'] = 'Abaikan perbedaan antara versi situs ini dan versi situs asli.';
$string['importedsuccessfully'] = 'Model berhasil diimpor.';
$string['importmodel'] = 'Model impor';
$string['indicators'] = 'Indikator';
$string['indicators_help'] = 'Indikatornya adalah apa yang menurut Anda akan mengarah pada prediksi target yang akurat.';
$string['indicatorsnum'] = 'Jumlah indikator: {$a}';
$string['info'] = 'Info';
$string['insights'] = 'Wawasan';
$string['insightsreport'] = 'Laporan wawasan';
$string['invalidanalysables'] = 'Elemen situs tidak valid';
$string['invalidanalysablesinfo'] = 'Halaman ini mencantumkan elemen yang dapat dianalisis yang tidak dapat digunakan oleh model prediksi ini. Elemen yang terdaftar tidak dapat digunakan baik untuk melatih model prediksi maupun model prediksi tidak dapat memperoleh prediksi untuk mereka.';
$string['invalidanalysablestable'] = 'Tabel elemen situs yang dapat dianalisis tidak valid';
$string['invalidcurrenttimesplitting'] = 'Interval analisis saat ini tidak valid untuk target model ini. Pilih interval yang berbeda.';
$string['invalidindicatorsremoved'] = 'Model baru telah ditambahkan. Indikator yang tidak berfungsi dengan target yang dipilih telah dihapus secara otomatis.';
$string['invalidprediction'] = 'Tidak valid untuk mendapatkan prediksi';
$string['invalidtimesplitting'] = 'Interval analisis yang dipilih tidak valid untuk target yang dipilih.';
$string['invalidtimesplittinginmodels'] = 'Interval analisis yang digunakan oleh beberapa model tidak valid. Pilih interval yang berbeda untuk model berikut: {$a}';
$string['invalidtraining'] = 'Tidak valid untuk melatih model';
$string['loginfo'] = 'Log ekstra info';
$string['missingmoodleversion'] = 'Berkas yang diimpor tidak menentukan nomor versi';
$string['modelid'] = 'ID Model';
$string['modelinvalidanalysables'] = 'Elemen yang dapat dianalisis tidak valid untuk model "{$a}"';
$string['modelname'] = 'Nama model';
$string['modelresults'] = '{$a} hasil';
$string['modeltimesplitting'] = 'Interval analisis';
$string['newmodel'] = 'Model baru';
$string['nextpage'] = 'Halaman selanjutnya';
$string['noactionsfound'] = 'Pengguna belum melakukan tindakan apa pun pada wawasan yang dihasilkan.';
$string['nodatatoevaluate'] = 'Tidak ada data untuk mengevaluasi model';
$string['nodatatopredict'] = 'Tidak ada elemen baru untuk mendapatkan prediksi.';
$string['nodatatotrain'] = 'Tidak ada data baru yang bisa digunakan untuk pelatihan.';
$string['noinvalidanalysables'] = 'Situs ini tidak mengandung elemen yang dapat dianalisis yang tidak valid.';
$string['notdefined'] = 'Belum ditentukan';
$string['pluginname'] = 'Model analitik';
$string['predictionprocessfinished'] = 'Proses prediksi selesai';
$string['predictionresults'] = 'Hasil prediksi';
$string['predictmodels'] = 'Memprediksi model';
$string['predictorresultsin'] = 'Prediktor mencatat informasi dalam direktori {$a}';
$string['previouspage'] = 'Halaman sebelumnya';
$string['privacy:metadata'] = 'Pengaya model analitik tidak menyimpan data pribadi apa pun.';
$string['restoredefault'] = 'Pulihkan model bawaan';
$string['restoredefaultempty'] = 'Pilih model yang akan dipulihkan.';
$string['restoredefaultinfo'] = 'Model bawaan ini hilang atau telah berubah sejak dipasang. Anda dapat memulihkan model bawaan yang dipilih.';
$string['restoredefaultnone'] = 'Semua model bawaan yang disediakan oleh inti dan pengaya yang dipasang telah dibuat. Tidak ada model baru yang ditemukan; tidak ada yang bisa dipulihkan.';
$string['restoredefaultsome'] = 'Berhasil membuat ulang {$a->count} model baru.';
$string['restoredefaultsubmit'] = 'Pulihkan yang dipilih';
$string['sameenddate'] = 'Tanggal akhir saat ini bagus';
$string['samestartdate'] = 'Tanggal mulai saat ini bagus';
$string['scheduledanalysisresults'] = 'Hasil menggunakan interval analisis {$a->name}';
$string['scheduledanalysisresultscli'] = 'Hasil menggunakan interval analisis {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Pilih interval analisis yang ingin Anda gunakan untuk mengevaluasi konfigurasi model.';
$string['target'] = 'Target';
$string['target_help'] = 'Targetnya adalah apa yang akan diprediksi oleh model.';
$string['timesplittingnotdefined'] = 'Tidak ada interval analisis yang ditentukan.';
$string['timesplittingnotdefined_help'] = 'Anda perlu memilih interval analisis sebelum mengaktifkan model.';
$string['trainandpredictmodel'] = 'Model pelatihan dan prediksi penghitungan';
$string['trainingprocessfinished'] = 'Proses pelatihan selesai';
$string['trainingresults'] = 'Hasil pelatihan';
$string['trainmodels'] = 'Model kereta';
$string['versionnotsame'] = 'Berkas yang diimpor berasal dari versi yang berbeda ({$a->importversion}) dari yang sekarang ({$a->version})';
$string['viewlog'] = 'Log evaluasi';
$string['weeksenddateautomaticallyset'] = 'Tanggal akhir secara otomatis ditetapkan berdasarkan tanggal mulai dan jumlah bagian';
$string['weeksenddatedefault'] = 'Tanggal akhir secara otomatis dihitung dari tanggal mulai kursus.';
