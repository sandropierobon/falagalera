<?php
	include './Database.php';
	$login = 'wal@teste.com';
	$password = '123456';
	$db = new Database();
	$db->connect();
	$return = $db->login($login,$password);
	if ($return){
		$data['result'] = 'success';
		$users = $db->getUsers($return['id']);
	}else{
		$data['result'] = 'error: nenhum usuario valido encontrado';
	}
	$data['user_id'] = $return? $return['id'] : 'null';
	$data['nickname'] = $return? $return['nickname'] : 'null';
	
	if (!empty($users)){
		$data['users'] = $users;
	}else{
		$data['users'] = array();
	}
	echo json_encode($data);
?>



