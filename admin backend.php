<?php
require 'vendor/autoload.php'; 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;


$studentName = filter_input(INPUT_POST, 'studentName', FILTER_SANITIZE_STRING);
$gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
$password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

// Excel file path
$file = 'admin_data.xlsx';

// Load existing Excel or create new
if (file_exists($file)) {
    $spreadsheet = IOFactory::load($file);
    $sheet = $spreadsheet->getActiveSheet();
} else {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('Student Registration');

    $headers=['Sl.No','Admin Name','Gender','Email','Mobile','Student Password'];
    $col='A';
    foreach($headers as $header){
        $sheet->setCellValue($col.'1',$header);
        $sheet->getStyle($col.'1')->getFont()->setBold(true);
        $sheet->getStyle($col.'1')->getAlignment()->setHorizontal('center');
        $col++;
    }

    $sheet->getRowDimension(1)->setRowHeight(28);
}

    
$row = $sheet->getHighestRow() + 1;

$serialNumber=$row-1;
$sheet->setCellValue("A{$row}",$serialNumber);
$sheet->setCellValue("B{$row}", $studentName);
$sheet->setCellValue("C{$row}", $gender);
$sheet->setCellValue("D{$row}", $email);
$sheet->setCellValue("E{$row}", $mobile);
$sheet->setCellValue("F{$row}", $password);



$sheet->getRowDimension($row)->setRowHeight(80);
$sheet->getColumnDimension('A')->setWidth(7);
$sheet->getColumnDimension('B')->setWidth(18);
$sheet->getColumnDimension('C')->setWidth(10);
$sheet->getColumnDimension('D')->setWidth(22);
$sheet->getColumnDimension('E')->setWidth(22);
$sheet->getColumnDimension('F')->setWidth(22);





$sheet->getStyle("A{$row}:F{$row}")->getAlignment()->setVertical('center');
$sheet->getStyle("A{$row}:F{$row}")->getAlignment()->setHorizontal('center');

$sheet->setShowGridlines(false);

$pageSetup=$sheet->getPageSetup();
$pageSetup->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);
$pageSetup->setPaperSize(PageSetup::PAPERSIZE_A4);
$pageSetup->setFitToWidth(1);
$pageSetup->setFitToHeight(0);

$margins=$sheet->getPageMargins();
$margins->setTop(0.4);
$margins->setBottom(0.4);
$margins->setLeft(0.4);
$margins->setRight(0.4);

$sheet->getStyle("A1:F{$row}")
->getBorders()
->getAllBorders()

->setBorderStyle(Border::BORDER_THIN);


 // Save signature path

// Save the Excel file
$writer = new Xlsx($spreadsheet);

$writer->save($file);

// Redirect to thank you page after successful submission
header('Location: Thankyou.php');
exit();


?>