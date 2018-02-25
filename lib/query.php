<?php 
class Query
{
	private $db;

	public function __construct()
	{
		try {
			$this->db = new PDO("mysql:host=localhost;dbname=tiket","root","");
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
		return $this->db;
	}

	public function result($value, $param)
	{
		try {
			$data=$this->db->prepare($value);
			$data->execute($param);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
		return $data;
	}
	public function select($tab,$value='*')
	{
		try {
			$data = $this->db->prepare("SELECT $value FROM $tab");
			$data->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
		return $data;
	}
	public function insert($tab,$value)
	{
		try {
			$data = $this->db->prepare("INSERT INTO $tab VALUES($value)");
			$data->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function update($tab,$value)
	{
		try {
			$data = $this->db->prepare("UPDATE $tab SET $value");
			$data->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function del($value)
	{
		try {
			$data = $this->db->prepare("DELETE FROM $value");
			$data->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function lastId($value)
	{
		try {
			return $this->db->lastInsertId($value);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function row($value)
	{
		return $data=$value->rowCount();
	}
	public function sant($value)
	{
		return $data=filter_input_array($value,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	}
	public function random($length=10)
	{
		$string='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$rand_cod=strlen($string);
		$rand_str='';
		for ($i = 0; $i < $length; $i++) {
        	$rand_str .= $string[rand(0, $rand_cod - 1)];
    	}
    	return $rand_str;
	}
}
$base = new Query();
include_once 'javaSc.php';
 ?>