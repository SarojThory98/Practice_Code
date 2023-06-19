<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" id="fileInput" name="fileIn">
        <br>
        <input type="submit" name="submit">

</form>

<?php
if(isset($_FILES["fileIn"])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $temp_name=$_FILES['fileIn']['tmp_name'];
// echo $temp_name;
 $file=$_FILES['fileIn']['name'];
// echo $file;
// echo "file upload", move_uploaded_file($temp_name,"fileUpload/".$file);
 if(move_uploaded_file($temp_name,"fileUpload/".$file)){
 echo "file added successfully!!";
 }
 else{
     echo "error";
     }
}
 
?>
</body>
</html>