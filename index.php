<?php

include('connection.php');

$query = "SELECT * FROM student";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0){
?>
<table border="2px solid black">
    <tr>
        <th>id</th>
        <th>img</th>
        <th>name</th>
        <th>father_name</th>
        <th>email</th>
        <th>gender</th>
        <th>address</th>
        <th>number</th>
        <th>options</th>
    </tr>
    <?php
    $key = 1;
    while($result = mysqli_fetch_assoc($data))
    {
        
       echo "<tr>
        <td>". $key++ ."</td>
        <td>". $result['img'] ."</td>
        <td>". $result['name'] ."</td>
        <td>". $result['f_name'] ."</td>
        <td>". $result['email'] ."</td>
        <td>". $result['gender'] ."</td>
        <td>". $result['address'] ."</td>
        <td>". $result['number'] ."</td>
        <td>
            <a href='update.php?id=$result[id]'>update</a>
            <a href='delete.php?id=$result[id]'>delete</a>
        </td>
        </tr>";
    }

    
}else{

}

?>

</table>
<h1><a href='fom.php'>form</a></h1>