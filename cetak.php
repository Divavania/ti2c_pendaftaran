<?php
// Database connection
$koneksi = mysqli_connect("localhost", "root", "", "siswa");

// Check connection
if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
    exit();
}

// Include PhpSpreadsheet library
require 'vendor/autoload.php';

// Use PhpSpreadsheet classes
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// SQL query to fetch data from the database
$sql = "SELECT nis, nama, alamat, agama, jk, sekolah_asal FROM biodata";
$result = mysqli_query($koneksi, $sql);

// Check if query executed successfully and data found
if ($result && mysqli_num_rows($result) > 0) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Header row
    $sheet->setCellValue('A1', 'NIS');
    $sheet->setCellValue('B1', 'Nama');
    $sheet->setCellValue('C1', 'Alamat');
    $sheet->setCellValue('D1', 'Agama');
    $sheet->setCellValue('E1', 'Jenis Kelamin');
    $sheet->setCellValue('F1', 'Asal Sekolah');

    $rowIndex = 2; // Start from row 2
    while ($row = mysqli_fetch_assoc($result)) {
        $sheet->setCellValue('A' . $rowIndex, $row['nis']);
        $sheet->setCellValue('B' . $rowIndex, $row['nama']);
        $sheet->setCellValue('C' . $rowIndex, $row['alamat']);
        $sheet->setCellValue('D' . $rowIndex, $row['agama']);
        $sheet->setCellValue('E' . $rowIndex, $row['jk']);
        $sheet->setCellValue('F' . $rowIndex, $row['sekolah_asal']);
        $rowIndex++;
    }

    // Set headers for Excel file download
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="data_pendaftar.xlsx"');
    header('Cache-Control: max-age=0');

    // Create writer object and save Excel file
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
} else {
    echo "Tidak ditemukan";
}

// Close database connection
mysqli_close($koneksi);
?>
