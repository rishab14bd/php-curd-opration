<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>STUDENT FORM</h1>
    </div>
    <div>
        <form action="#" method="POST" enctype="multipart/form-data">
            image = <input type="file" name="img" id=""><br><br>
            name = <input type="text" name="name" id=""><br><br>
            father_name = <input type="text" name="f_name" id=""><br><br>
            email = <input type="text" name="email" id=""><br><br>
            gender = <select name="gender">
                <option value="">select gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
            </select><br><br>
            address = <input type="text" name="address" id=""><br><br>
            ph. number = <input type="number" name="number" id=""><br><br>
            <input type="submit" name="submit" value="submit" id="">
        </form>
    </div>
</body>

</html>

<?php
    if(isset($_POST["submit"])){

        $filename =  $_FILES["img"]["name"];
        $tmpname =  $_FILES["img"]["tmp_name"];
        $folder = 'image/'. $filename;
        // die($folder);
        move_uploaded_file($tmpname,$folder);

        $name = $_POST['name'];
        $f_name = $_POST['f_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $number = $_POST['number'];
        // die($number);

        $query = "INSERT INTO student (img, name, f_name, email, gender, address, number) VALUES ('$folder','$name', '$f_name', '$email', '$gender', '$address','$number')";
        $data = mysqli_query($conn, $query);

        // die($data);
        if($data){
            echo "<script>alert('data insert into database')</script>";
            header("Location: http://localhost/php_project/curd/");

        }else {
            echo "<script>alert('failed to save data')</script>";
        }
    }
?>