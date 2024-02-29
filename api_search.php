<?php

header('Contant-Type: application/json');
header('Acess-Control-Allow-Origin: *');

$data = json_decode(file_get_contents('php://input'), true);
$search_value = $data['search'];

include('connection.php');


$sql = "SELECT * FROM student WHERE name LIKE '%{$search_value}%'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo json_encode(array('massage'=>'No Search Found.', 'status'=>false));
    
}
?>