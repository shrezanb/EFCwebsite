<?php

class database
{
	

	private $host;
	private $username; 
	private $password;
	private $database;
	private $conn;
	
	function __construct()
	{
		$this->host="localhost";
		$this->username="root";
		$this->password="";
		$this->database="MachamasiSusanSiteDB";
		$this->connect();
	}
	
	private function connect()
	{
		$this->conn = mysqli_connect($this->host, $this->username, $this->password);
		mysqli_select_db($this->conn,$this->database);
		return($this->conn);
		
		
	}
	
	public function run($query)
	{
		$query_result = mysqli_query($this->conn, $query);
		return $query_result;
	}
	
	public function fetch($query_result)
	{
		$row = mysqli_fetch_array($query_result);
		return $row;
	}
	
	
	public function countNum($query_count)
	{
		$num = mysqli_num_rows($query_count);
		return $num;
	}
	
	public function getId()
	{
		$id = mysqli_insert_id($this->conn);
		return $id;
	}
	
	public function errorDetail()
	{
		$error = mysqli_error($this->conn);
		return $error;
	}
	
	public function error()
	{
		$data = error_reporting(1);
		return $data;
	}
	
	public function injection($data)
	{
		$data = mysqli_real_escape_string($this->conn, $data);
		return $data;
	}
}


$db_database = new database;

?>