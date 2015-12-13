<?php
use Aura\Sql\ExtendedPdo;

class Db {
	function __constructor() {
		$host = "localhost";
		$dbname = "hierark";
		$user = "root";
		$password = "yuta0502";
		$this->pdo = new ExtendedPdo(
			"mysql:host=$host;dbname=$dbname;charset=utf8",
			$user,
			$password,
			array(), // driver options as key-value pairs
			array()  // attributes as key-value pairs
		);
	}
	function query() {
		$this->pdoStatement = $this->pdo->query("select * from user_items");
		
	}
	funciton findAll($sql) {
		$this->pdoStatement = $this->pdo->query("select * from user_items");
		return $this->pdoStatement->fetchAll(PDO::FETCH_ASSOC);
	}
}
