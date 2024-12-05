<?php
@include './../../config.php';

// Handle image upload
if (isset($_POST['submit']) && isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Allowed file extensions
    $allowedfileExtensions = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        // Sanitize file name
        $newFileName = uniqid() . '.' . $fileExtension;
        $uploadDir = './../../uploads/'; // Define the upload folder path
        $destPath = $uploadDir . $newFileName;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            // Return the file path if the upload is successful
            echo "Image uploaded successfully!";
        } else {
            echo "There was an error uploading the image.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
} else {
    echo "No image uploaded or there was an upload error.";
}
?>
