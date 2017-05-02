<?php
class database {
	private $dbHost;
	private $dbUser;
	private $dbPass;
	private $dbName;
	
	function __construct ($a,$b,$c,$d) {
		$this->dbHost = $a;
		$this->dbUser = $b;
		$this->dbPass = $c;
		$this->dbName = $d;
		
	}
	
	function connectMysql(){
		mysql_connect($this->dbHost,$this->dbUser,$this->dbPass);
		mysql_select_db($this->dbName);
	}
}

$host = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'db_ptba';

$db = new database ($host,$user,$pass,$mydb);
$db->connectMysql();
?>