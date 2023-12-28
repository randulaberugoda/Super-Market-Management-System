<?php
include_once 'connection.php';
//if ($_SERVER["REQUEST_METHOD" == "POST"]) {

$id = $_POST['id'];
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

if ($id !== '') {
    $updateQuery = "UPDATE products SET product_name = ?, description = ?, img = ?, updated_at = NOW() WHERE id = ?";

    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("ssss", $product_name, $description, $img, $id);

    if ($stmt->execute()) {
        header("Location: ../product-view.php");
        exit;
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error uploading user image.";
}

$conn->close();
?>
