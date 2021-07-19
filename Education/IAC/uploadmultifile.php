<?php

$multifileF = $_SESSION['multifile'];

$multifile = $_FILES[$multifileF];
$email = $_SESSION['email'];
$id = $_SESSION['fileID'];

$allowed = array('jpg', 'jpeg', 'png', 'pdf');

$multifile_array = reArrayFiles($multifile);

for ($i = 0; $i < count($multifile_array); $i++) {
    $multifileName = $multifile_array[$i]['name'];
    $multifileTmpName = $multifile_array[$i]['tmp_name'];
    $multifileSize = $multifile_array[$i]['size'];
    $multifileError = $multifile_array[$i]['error'];
    $multifileType = $multifile_array[$i]['type'];

    $multifileExt = explode('.', $multifileName);
    $multifileActualExt = strtolower(end($multifileExt));
    if (in_array($multifileActualExt, $allowed)) {
        if ($multifileError === 0) {
            if ($multifileSize < 204800) {
                $multifileNameNew = $email.".".$id."_".$i.".".$multifileActualExt;
                $multifileDestination = 'uploads/'.$multifileNameNew;
                move_uploaded_file($multifileTmpName, $multifileDestination);
                echo '<script>alert("MultiFile uploaded successfully!")</script>';
            } else {
                echo '<script>alert("Your file '.$multifileName.' - is too Big!")</script>';
            }
        } else {
            echo '<script>alert("There was an error uploading your file! Name: '.$multifileName.'")</script>';
        }
    } else {
        echo '<script>alert("You can not upload files of this type!")</script>';
    }
}

// Converts $_FILES array to cleaner array when uploading multiple files
function reArrayFiles ($file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i = 0; $i < $file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}