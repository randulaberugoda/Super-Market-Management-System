<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {
    function __construct() {
        parent::__construct('L');
    }

    // Colored table
    function FancyTable($header, $data) {
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');

        $w = array(15, 50, 40, 45, 20, 35, 40);
        for ($i = 0; $i < count($header); $i++) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
        }
        $this->Ln();

        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');

        $fill = false;
        foreach ($data as $row) {
            $this->Cell($w[0], 6, $row[0] ?? '', 'LR', 0, 'C', $fill);
            $this->Cell($w[1], 6, $row[1] ?? '','LR', 0, 'C', $fill);
            $this->Cell($w[2], 6, $row[2] ?? '', 'LR', 0, 'C', $fill);
            $this->Cell($w[3], 6, $row[3] ?? '', 'LR', 0, 'c', $fill);
            $this->Ln();
            $fill = !$fill;
        }

        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

$type = $_GET['report'];
$report_headers = [
    'product' => 'Product Reports'
];

$mysqli = new mysqli('localhost', 'root', '', 'inventory');

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

if ($type == 'product') {
    $header = array('id', 'image', 'product_name', 'created_at');

    $query = "SELECT id, img, product_name, created_at FROM products ORDER BY created_at DESC";

    $result = $mysqli->query($query);

    $data = [];
    while ($row = $result->fetch_row()) {
        $data[] = $row;
    }
}

$mysqli->close();

$pdf = new PDF();
$pdf->SetFont('Arial', '', 20);
$pdf->AddPage();
$pdf->Cell(80);
$pdf->Cell(30, 10, $report_headers[$type], 0, 0, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Ln();
$pdf->Ln();
$pdf->FancyTable($header, $data);
$pdf->Output();
