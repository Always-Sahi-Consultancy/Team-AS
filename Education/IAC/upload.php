<?php

$fileF = $_SESSION['file'];

$file = $_FILES[$fileF];
$fileName = $_FILES[$fileF]['name'];
$fileTmpName = $_FILES[$fileF]['tmp_name'];
$fileSize = $_FILES[$fileF]['size'];    // Size in Binary Bytes i.e 1 KB = 1024 Bytes
$fileError = $_FILES[$fileF]['error'];
$fileType = $_FILES[$fileF]['type'];
$email = $_SESSION['email'];
$id = $_SESSION['fileID'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'pdf');

if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
        $FileSizeNew = round($fileSize/1024);   // Size in KiloBytes
        if ($fileSizeNew < 800) {
            $fileNameNew = $email.".".$id.".".$fileActualExt;
            $fileDestination = 'uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            echo '<script>alert("Files uploaded successfully!")</script>';
        } else {
            echo '<script>alert("Your file is too Big!")</script>';
        }
    } else {
        echo '<script>alert("There was an error uploading your file!")</script>';
    }
} else {
    echo '<script>alert("You can not upload files of this type!")</script>';
}
