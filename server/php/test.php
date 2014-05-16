<?php

	include './Database.php';

	$db = new Database();
	
	if ($db->connect()){
		echo 'conectando com sucesso!';
	}

?>