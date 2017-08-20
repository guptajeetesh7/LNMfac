<?php


if($con = mysqli_connect('localhost','root','')){

	$query =  'CREATE DATABASE `feedback` ';
	mysqli_query($con,$query);

	mysqli_select_db($con,'feedback');

	$query = "CREATE TABLE `feedback`.`data` ( `id` INT NOT NULL AUTO_INCREMENT , `year` INT(10) NOT NULL , `branch` VARCHAR(10) NOT NULL , `faculty` VARCHAR(100) NOT NULL , `course` VARCHAR(10) NOT NULL , `feedback` VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

	mysqli_query($con,$query);

}

?>