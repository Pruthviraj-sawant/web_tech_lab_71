<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>File Upload Form</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
            $fileName = $_FILES['uploadedFile']['name'];
            $fileSize = $_FILES['uploadedFile']['size'];
            $fileType = $_FILES['uploadedFile']['type'];
            $fileNameCmps = pathinfo($fileName);
            $fileExtension = strtolower($fileNameCmps['extension']);

            $allowedExtensions = ['jpg', 'png', 'gif', 'pdf', 'txt'];

            if (in_array($fileExtension, $allowedExtensions)) {
                $destPath = $uploadDir . $fileName;

                if (move_uploaded_file($fileTmpPath, $destPath)) {
                    echo "<p>File is successfully uploaded to: $destPath</p>";
                } else {
                    echo "<p>Error moving the uploaded file.</p>";
                }
            } else {
                echo "<p>Upload failed. Allowed file types: " . implode(', ', $allowedExtensions) . "</p>";
            }
        } else {
            echo "<p>Error in file upload: " . $_FILES['uploadedFile']['error'] . "</p>";
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="fileUpload">Choose a file to upload:</label>
        <input type="file" name="uploadedFile" id="fileUpload" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>