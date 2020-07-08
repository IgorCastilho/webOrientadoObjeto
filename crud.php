<?php


require_once 'config/DB.php';

abstract class Crud extends DB{

	protected $table;

	abstract public function insert();



	public function verTudo(){
		$sql = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
}