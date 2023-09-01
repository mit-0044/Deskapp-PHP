<?php
include('../partials/_dbconnect.php');

$sql = "SELECT * FROM `country`";
$result = mysqli_query($conn, $sql);


    // output data of each row
while($row = mysqli_fetch_assoc($result)) {


	$data['value']=$row['id'];
	$data['label']=$row['name'];
	$json[]=$data;      
}
echo json_encode($json);


mysqli_close($conn);
