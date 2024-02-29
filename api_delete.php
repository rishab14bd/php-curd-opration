<?php

header('Contant-Type: application/json');
header('Acess-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Contant-Type, Authorization, X-Requested-With');

$data = json_decode(file_get_contents('php://input'), true);
$student_id = $data['sid'];

include('connection.php');


$sql = "DELETE FROM student WHERE id = {$student_id}";

$result = mysqli_query($conn, $sql);

if($result){
    echo json_encode(array('massage'=>'Student Record Delete.', 'status'=>true));

}else{
    echo json_encode(array('massage'=>'Student Record Failed To Delete.', 'status'=>false));
}
?>