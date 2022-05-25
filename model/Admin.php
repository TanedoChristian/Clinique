<?php

include '../database/Database.php';

class Admin {

	private $connection;

	public function __construct(){
		$database = new Database;
		$this->connection = $database->getConnection();
	}

	public function getAllUser(){
	
		$sql = "SELECT person.person_id, concat(first_name, ' ', last_name) as name, birthdate, age, gender, address, acc_details.username, acc_details.password from person left join acc_details on person.person_id = acc_details.person_id";
		$statement = $this->connection->query($sql);

		$result = $statement->fetchAll();

		return $result;
	}

	public function getAllNurse(){
	
		$sql = " SELECT person.person_id, concat(first_name, ' ', last_name) as name, birthdate, age, gender, address, acc_details.username, acc_details.password from person inner join acc_details on person.person_id = acc_details.person_id where person.person_id < 6000 and person.person_id >=5000"; 
		
		$statement = $this->connection->query($sql);
		$result = $statement->fetchAll();

		return $result;	
	}

}


?>
		
