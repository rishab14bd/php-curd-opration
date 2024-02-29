<?php

include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Image Uplode</h1>
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="img" id=""><br><br>
            <input type="submit" name="submit" id=""><br><br>
        </form>
    </div>
</body>
</html>
<?php
    $filename =  $_FILES["img"]["name"];
    $tmpname =  $_FILES["img"]["tmp_name"];
    $folder = 'image/'. $filename;
    echo $folder;
    move_uploaded_file($tmpname,$folder);
    echo "<img src='$folder' height='100px' width='100px'>";
?>