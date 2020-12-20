<?php
	class db{
		private $servername;
		private $username;
		private $password;
		private $dbname;
		private $charset;

		public function connect(){
			$this->servername='localhost';
			$this->username='root';
			$this->password='';
			$this->dbname='noushed';
			$this->charset='utf8mb4';

			try {
			$dsn="mysql:localhost=".$this->localhost.";dbname=".$this->dbname.";charset=".$this->charset;
			$pdo=new PDO($dsn, $this->username, $this->password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (PDOException $e) {
			echo "Connection faild: ".$e->getMessage();
		}
		}

		
	}
?>