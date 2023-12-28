<?php
$type = $_GET['report'];
$file_name = '.xls';

$mapping_filenames = [
    'product' => 'Product_Report'
];

$file_name = $mapping_filenames[$type] . '.xls';

header("Content-Disposition: attachment; filename=\"$file_name\"");
header("Content-Type: application/vnd.ms-excel");

$file_name = $mapping_filenames[$type] . '.xls';
header("Content-Disposition: attachment; filename=\"$file_name\"");
header("Content-Type: application/vnd.ms-excel");

include('connection.php');

if ($type === 'product') {
    $stmt = $conn->prepare("SELECT * FROM products ORDER BY created_at DESC");
    $stmt->execute();

    $result = $stmt->get_result();
    $products = $result->fetch_all(MYSQLI_ASSOC);

    $is_header = true;
    foreach ($products as $product) {
        if ($is_header) {
            $row = array_keys($product);
            $is_header = false;
            echo implode("\t", $row) . "\n";
        }

        array_walk($product, function (&$str) {
            $str = preg_replace("/\t/", "\\t", $str);
            $str = preg_replace("/\r?\n/", "\\n", $str);
            if (strstr($str, '""')) $str = '""' . str_replace('"', '""', $str) . '"';
        });

        echo implode("\t", $product) . "\n";
    }
}
?>
