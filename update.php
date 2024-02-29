<?php include('connection.php');

$id =  $_GET['id'];

$query = "SELECT * FROM student where id = '$id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1> update form </h1>
        <form action="#" method="POST">
            name = <input type="text" value="<?php echo $result['name']; ?>" name="name" id=""><br><br>
            father_name = <input type="text" value="<?php echo $result['f_name']; ?>" name="f_name" id=""><br><br>
            email = <input type="text" value="<?php echo $result['email']; ?>" name="email" id=""><br><br>
            gender = <select name="gender">
                <option value="">select gender</option>
                <option value="male"
                <?php if($result['gender']=='male'){echo "selected";}?>
                >male</option>
                <option value="female"
                <?php if($result['gender']=='female'){echo "selected";}?>
                >female</option>
                <option value="other" 
                <?php if($result['gender']=='other'){echo "selected";}?>
                >other</option>
            </select><br><br>
            address = <input type="text" value="<?php echo $result['address']; ?>" name="address" id=""><br><br>
            ph. number = <input type="number" value="<?php echo $result['number']; ?>" name="number" id=""><br><br>
            <input type="submit" name="update" value="update" id="">
        </form>
    </div>
</body>

</html>

<?php
    if(isset($_POST["update"])){
        $name = $_POST['name'];
        $f_name = $_POST['f_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $number = $_POST['number'];
        // die($number);

        $query = "UPDATE student SET name='$name', f_name='$f_name', email='$email', gender='$gender', address='$address', number='$number' where id = '$id'";
        $data = mysqli_query($conn, $query);

        // die($data);
        if($data){
            echo "<script>alert('record updated')</script>";
            header("Location: http://localhost/php_project/curd/");
        }else {
            echo "<script>alert('failed record update')</script>";
        }
    }
?>