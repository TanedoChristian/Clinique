<?php


include '../database/Database.php';


class Nurse {

	private $connection;

	public function __construct(){
		
		$database = new Database;
		$this->connection = $database->getConnection();
	
	}

	public function getAllData($table){

		$sql = "SELECT * FROM " . trim($table);
		$statement = $this->connection->query($sql);
		$result = $statement->fetchAll();
		return $result;	
	}

	public function getMedicalInfo(){
	
		$sql = "SELECT medical_information_id, student_id, (select concat(person.first_name, ' ', person.last_name) from person where person_id = nurse_id) as Nurse, height,weight, blood_pressure, body_temp, heart_rate, date from medical_information";

		$statement = $this->connection->query($sql);
		$result = $statement->fetchAll();
		
		return $result;	
	
	}

	public function getImmunization(){
		
		$sql = "SELECT immunization.immun_id, vaccine.vaccine_name, student_id, (select concat(person.first_name, ' ' ,person.last_name) as Nurse from person, immunization where person_id = nurse_id) as Nurse, parents_consent, date_of_immunization from immunization inner join vaccine on vaccine.vaccine_id = immunization.vaccine_id";

		$statement = $this->connection->query($sql);
		$result = $statement->fetchAll();

		return $result;

		
	}

	public function getDeworming(){
	
	
		$sql = "SELECT deworm_id, student_id, (select concat(person.first_name, ' ', person.last_name) from person where person_id = nurse_id) as Nurse, date_of_deworming, parents_consent, remarks from deworming";

		$statement = $this->connection->query($sql);
		$result = $statement->fetchAll();

		return $result;
	}


}














?>
