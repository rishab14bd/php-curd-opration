<?php

header('Contant-Type: application/json');
header('Acess-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Contant-Type, Authorization, X-Requested-With');


$data = json_decode(file_get_contents('php://input'), true);
$name = $data['sname'];
$f_name = $data['sf_name'];
$email = $data['semail'];
$gender = $data['sgender'];
$address = $data['saddress'];
$number = $data['snumber'];

include('connection.php');


$sql = "INSERT INTO student(name, f_name, email, gender, address, number) VALUES ('{$name}', '{$f_name}', '{$email}', '{$gender}', '{$address}', '{$number}')";

$result = mysqli_query($conn, $sql);

if($result){
    echo json_encode(array('message' => 'Student Record Inserted.','status'=>true));
}else{
    echo json_encode(array('message' => 'Student Record Not Inserted.','status'=>false));
}
?>