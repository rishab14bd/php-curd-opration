<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "curd_php";

$conn = mysqli_connect($severname,$username,$password,$dbname);


if($conn){
    // echo "connection okk";
}else{
    echo "commection failed";
};

?>
