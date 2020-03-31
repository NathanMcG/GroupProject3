<?php

    /*https://cloudinary.com/blog/file_upload_with_php 15/03/2020 */

    function uploadImage($folder,$endName){
    $currentDir = getcwd();
    $uploadDirectory = '/srv/http/default/public/images/' . $folder . '/';

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    $fileName = $_FILES['productImage']['name'];
    $fileSize = $_FILES['productImage']['size'];
    $fileTmpName  = $_FILES['productImage']['tmp_name'];
    $fileType = $_FILES['productImage']['type'];
    $fileExtension_explode = explode('.',$fileName);
    $fileExtension = strtolower(end($fileExtension_explode));

    $uploadPath = $uploadDirectory . basename($endName.'.png'); 

    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }
    }


?>