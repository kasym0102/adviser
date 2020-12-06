<?php 

$mysqli = new mysqli('localhost', 'root', '', 'adviser')	 or die(mysqli_error($mysqli));

if(isset($_POST['addGroup'])){
	$group_name = $_POST['group_name'];
	
	$mysqli->query("insert into adviser (adviser_name,adviser_surname,adviser_email, adviser_password, adviser_url,adviser_gender,adviser_departament) values('$adviser_name','$adviser_surname','$adviser_email', $adviser_password, '$adviser_url', '$adviser_gender', '$adviser_departament')") or die(mysqli_error($mysqli));
}