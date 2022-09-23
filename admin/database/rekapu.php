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
 
$sheet->setCellValue('A1', 'NAMA ADMIN');
$sheet->setCellValue('B1', 'NOMOR TELEPON');
$sheet->setCellValue('C1', 'USERNAME ADMIN');
$sheet->setCellValue('D1', 'CATATAN');
 
$data_user = mysqli_query($koneksi,"SELECT * FROM user");
$i = 2;
while($d = mysqli_fetch_array($data_user))
{
    $sheet->setCellValue('A'.$i, $d['nama_admin']);
    $sheet->setCellValue('B'.$i, $d['telepon']);
    $sheet->setCellValue('C'.$i, $d['username_admin']);
    $sheet->setCellValue('D'.$i, $d['catatan_admin']);      
    $i++;
}

$writer = new Xlsx($spreadsheet); 
$writer->save('Data User.xlsx');
echo "<script>window.location = 'Data User.xlsx'; setTimeout(function(){ window.location.href = '../setting.php'; }, 5000);</script>";
?>