<?php
require_once 'thumbnails.php';
?>
<!--<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<body>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"><br />
    <input type="submit" value="Upload">
  </form>
</body>
</html> -->
<?PHP
if (isset($_POST['upload'])) {
    if (!empty($_FILES['uploaded_file'])) {
        $path = "uploads/";
        $path1 = $path . 's' . basename($_FILES['uploaded_file']['name']);
        $path2 = $path . 'b' . basename($_FILES['uploaded_file']['name']);
        echo createThumbnail($_FILES['uploaded_file']['tmp_name'], $path1, 818, 460.13);
        if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path2)) {
            echo "The file ".  basename($_FILES['uploaded_file']['name']).
      " has been uploaded";
        } else {
            echo "There was an error uploading the file, please try again!";
        }
    }
}else{
  echo "Select image to upload";
}
?>