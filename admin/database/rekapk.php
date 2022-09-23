<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: ../../login.php");
}
include'connectiondb.php';
include'system_detail.php';
require '../../vendor/autoload.php';

 
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
 
$sheet->setCellValue('A1', 'NAMA (OWNER)');
$sheet->setCellValue('B1', 'NOMOR PONSEL');
$sheet->setCellValue('C1', 'ALAMAT');
$sheet->setCellValue('D1', 'TANGGAL DAFTAR');
$sheet->setCellValue('E1', 'JENIS PERMINTAAN');
$sheet->setCellValue('F1', 'CATATAN');
$sheet->setCellValue('G1', 'KODE TRACKING');
$sheet->setCellValue('H1', 'KETERANGAN PROSES');
 
$data_kontruksi = mysqli_query($koneksi,"SELECT * FROM client_kontruksi");
$i = 2;
while($d = mysqli_fetch_array($data_kontruksi))
{
    $sheet->setCellValue('A'.$i, $d['ck_nama']);
    $sheet->setCellValue('B'.$i, $d['ck_tel']);
    $sheet->setCellValue('C'.$i, $d['ck_alamat']);
    $sheet->setCellValue('D'.$i, $d['ck_tanggalmasuk']);
    $sheet->setCellValue('E'.$i, $d['ck_jenis']);    
    $sheet->setCellValue('F'.$i, $d['ck_catatan']);
    $sheet->setCellValue('G'.$i, $d['ck_tracking']);  
    $sheet->setCellValue('H'.$i, $d['ck_keterangan']);       
    $i++;
}

$writer = new Xlsx($spreadsheet); 
$writer->save('Data Kontruksi.xlsx');
echo "<script>window.location = 'Data Kontruksi.xlsx'; setTimeout(function(){ window.location.href = '../setting.php'; }, 5000);</script>";
?>