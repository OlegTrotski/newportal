<?php

class database {
	private $conn;
	private $host;
	private $user;
	private $password;
	private $baseName;

	function __construct() {
		$this->host = 'localhost';
		$this->user = 'root';
		$this->password = '';
		$this->baseName = 'newsportal';
		$this->connect();
	}
	function __destruct() {
		$this->disconnect();
	}

	function connect() {
		if (!$this->conn) {
			try {
				$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->baseName.'', $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			}
			catch (Exception $e) {
				die('Connetcion failed : ' . $e->getMessage());
			}
		}
		return $this->conn;
	}

	function disconnect() {
		if ($this->conn) {
			$this->conn = null;
		}
	}

	function getOne($query) {
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$responce = $stmt->fetch();
		return $responce;
	}

	function getAll($query) {
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$responce = $stmt->fetchAll();
		return $responce;
	}

		function executeRun($query) {
		$responce = $this->conn->exec($query);
		return $responce;
	}
}

?>