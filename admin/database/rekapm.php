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
$sheet->setCellValue('E1', 'NAMA MOBIL');
$sheet->setCellValue('F1', 'NOMOR POLISI');
$sheet->setCellValue('G1', 'NOMOR RANGKA');
$sheet->setCellValue('H1', 'NOMOR MESIN');
$sheet->setCellValue('I1', 'TAHUN');
$sheet->setCellValue('J1', 'CATATAN');
$sheet->setCellValue('K1', 'KODE TRACKING');
$sheet->setCellValue('L1', 'KETERANGAN PROSES');
 
$data_mobil = mysqli_query($koneksi,"SELECT * FROM client_mobil");
$i = 2;
while($d = mysqli_fetch_array($data_mobil))
{
    $sheet->setCellValue('A'.$i, $d['cm_nama']);
    $sheet->setCellValue('B'.$i, $d['cm_tel']);
    $sheet->setCellValue('C'.$i, $d['cm_alamat']);
    $sheet->setCellValue('D'.$i, $d['cm_tanggalmasuk']);
    $sheet->setCellValue('E'.$i, $d['cm_namamobil']);    
    $sheet->setCellValue('F'.$i, $d['cm_nopol']);
    $sheet->setCellValue('G'.$i, $d['cm_norangka']);  
    $sheet->setCellValue('H'.$i, $d['cm_nomesin']);  
    $sheet->setCellValue('I'.$i, $d['cm_tahunmobil']);
    $sheet->setCellValue('J'.$i, $d['cm_catatan']); 
    $sheet->setCellValue('K'.$i, $d['cm_tracking']);
    $sheet->setCellValue('L'.$i, $d['cm_keterangan']);      
    $i++;
}

$writer = new Xlsx($spreadsheet); 
$writer->save('Data Mobil.xlsx');
echo "<script>window.location = 'Data Mobil.xlsx'; setTimeout(function(){ window.location.href = '../setting.php'; }, 5000);</script>";
?>