<?php
if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] == 0) {
    $path = $_FILES['fileUpload']['name'];
    $upload_path = "./upload/" . $path; // ✅ Fixed missing slash

    //  Check & Create "upload" directory if it doesn't exist
    if (!is_dir('upload')) {
        mkdir('upload', 0777, true); // Create directory with full permissions
    }

    // ✅ Move the uploaded file
    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)) {
        echo "File uploaded successfully: " . $upload_path;
    } else {
        die("Failed to upload file");
    }
} else {
    echo "No file selected or upload error";
}
?>
