<?php

header('Contant-Type: application/json');
header('Acess-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Contant-Type, Authorization, X-Requested-With');


$data = json_decode(file_get_contents('php://input'), true);
$id = $data['sid'];
$name = $data['sname'];
$f_name = $data['sf_name'];
$email = $data['semail'];
$gender = $data['sgender'];
$address = $data['saddress'];
$number = $data['snumber'];

include('connection.php');


$sql = "UPDATE student SET name = '{$name}', f_name = '{$f_name}', email = '{$email}', gender = '{$gender}', address = '{$address}', number = '{$number}' WHERE id = {$id}";


$result = mysqli_query($conn, $sql);

if($result){
    echo json_encode(array('message' => 'Student Record Updated.','status'=>true));
}else{
    echo json_encode(array('message' => 'Student Record Not Updated.','status'=>false));
}
?>