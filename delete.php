<?php

include('connection.php');
$id = $_GET['id'];

$query = "DELETE FROM student where id = '$id'";
$data = mysqli_query($conn, $query);

if($data){
    echo "<script>alert('record Deleted')</script>";
    header("Location: http://localhost/php_project/curd/");
}else{
    echo "<script>alert('record failed to delete')</script>";
}

?>