<?php

header('Contant-Type: application/json');
header('Acess-Control-Allow-Origin: *');
include('connection.php');

$sql = "SELECT * FROM student";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo "not okk";
}
?>