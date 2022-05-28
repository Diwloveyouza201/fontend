<?php
require_once 'dbconnect.php';
require_once 'showimage.php';
require_once 'Profile.php';

if (isset($_POST['submit']) && isset($_FILES['image'])) {
    $status = 'error';
    if (!empty($_FILES["image"]['name'])) {
        $filename = basename($_FILES['image']['name']);
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);

        $allowType = array("jpg", "jpeg", "png", "gif");
        if (in_array($fileType, $allowType)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $conn = new dbconnect();
            $insert = $conn->insertimage($imgContent);
            if ($insert) {
                $status = 'success';
                $statusMSG = "FILE UPLOAD SUCCESSFULLY";
            } else {
                $statusMSG = "FILE UPLOAD FAILED , PAEASE TRY AGAIN.";
            }
        } else {
            $statusMSG = "SORRY, only image files are allowed to upload.";
        }
    } else {
        $statusMSG = "Please selct an image file to upload.";
    }
}
