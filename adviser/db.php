<?php 

	try {
		$connection=new PDO('mysql:host=localhost;dbname=adviser', 'root', '');
	} catch (PDOException $e) {
		echo $e->getMessage();
		
	}
	
	function getAdviser($username){
		global $connection;
		$query=$connection->prepare("SELECT * FROM adviser where adviser_email=:username");
		$query->execute(array("username"=>$username));
		$result=$query->fetch();
		return $result;
	}

	function getUsersGroup($idshka){
		global $connection;
		$query=$connection->prepare("SELECT * FROM groups where adviser_id = :idshka");
		$query->execute(array());
		$result=$query->fetchAll();
		return $result;
	}

	function getSearchedGroups($value){
		global $connection;
		//$query=$connection->prepare("SELECT * FROM groups name LIKE '%:value%'");
		$query=$connection->prepare("SELECT * FROM groups name = :value");

		$query->execute(array());
		$result=$query->fetchAll();
		return $result;
	}

 ?>