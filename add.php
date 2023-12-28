<?php
include_once 'connection.php';
//if ($_SERVER["REQUEST_METHOD" == "POST"]) {
$product_name = $_POST['product_name'];
$description = $_POST['description'];

function uploadFile($fileInputName, $uploadDirectory)
{
    $uploadedFilePath = '';

    if ($_FILES[$fileInputName]['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES[$fileInputName]['tmp_name'];
        $originalFileName = $_FILES[$fileInputName]['name'];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $encryptedFileName = uniqid() . '.' . $fileExtension;

        $uploadedFilePath = $uploadDirectory . $encryptedFileName;

        if (move_uploaded_file($tempName, $uploadedFilePath)) {
            return $encryptedFileName;
        } else {
            return '';
        }
    } else {
        return '';
    }
}

$img = uploadFile('img', 'C:/xampp/htdocs/IMS/images/upload/');

    $data = "INSERT INTO products (product_name, description, img , created_at,updated_at) VALUES (?,?,?, NOW(), NOW())";

    $stmt = $conn->prepare($data);
    $stmt->bind_param("sss", $product_name,$description,$img);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: ../product-view.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
        $stmt->close();
        $conn->close();
    }

//}
?>