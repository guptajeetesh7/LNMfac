<?php


require('database/connect.php');

$data = json_decode(file_get_contents("php://input"));



$year = mysql_real_escape_string($data->year);
$branch = mysql_real_escape_string($data->branch);
$faculty = mysql_real_escape_string($data->faculty);
$feedback = mysql_real_escape_string($data->feedback);
$course = mysql_real_escape_string($data->course);


$query = "INSERT INTO `data` VALUES (null ,'$year' ,'$branch' ,'$faculty' , '$course' , '$feedback')";

if(mysqli_query($con,$query)){
	echo "DONE";
}else{
	echo "FAILED";
}


?>