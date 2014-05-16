<?php

	class Database{
		private $link;
		private $host = 'localhost';
		private $user = 'root';
		private $password = '';
		private $db = 'falagalera';

		public function connect(){
			$this->link = mysql_connect($this->host, $this->user, $this->password);
			if (!$this->link){
				die('Não foi possivel conectar: ' . mysql_error());
			}
			mysql_select_db($this->db);
			return true;
		}

		public function close(){
			mysql_close($this->link);
		}

		public function login($login, $password){
			$sql = "select * from user where email = '" . $login . "' and password = '" . $password . "'";
			$result = mysql_query($sql);
			return mysql_fetch_assoc($result);
		}

		public function getUsers($currentUserId){
			$sql = "select id, nickname, picture from user where id != " . $currentUserId;
			$result = mysql_query($sql);
			while($row=mysql_fetch_assoc($result)){
				$data[] = $row;
			}
			return $data;
		}
	}

?>