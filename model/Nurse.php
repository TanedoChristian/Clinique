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

	public function isStudentMedicalInfo($id){
		$sql = "SELECT medical_information_id, student_id, (select concat(person.first_name, ' ', person.last_name) from person where person_id = nurse_id) as Nurse, height,weight, blood_pressure, body_temp, heart_rate, date from medical_information where student_id=:id";
		$statement = $this->connection->prepare($sql);
		$statement->bindParam(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	}

	public function getImmunization(){
		
		$sql = "SELECT immunization.immun_id, vaccine.vaccine_name, student_id, (select concat(person.first_name, ' ' ,person.last_name) from person  where person_id = nurse_id) as Nurse, parents_consent, date_of_immunization from immunization inner join vaccine on vaccine.vaccine_id = immunization.vaccine_id";

		$statement = $this->connection->query($sql);
		$result = $statement->fetchAll();

		return $result;

		
	}

	public function isStudentImmunization($id){
	
	$sql = "SELECT immunization.immun_id, vaccine.vaccine_name, student_id, (select concat(person.first_name, ' ' ,person.last_name) from person  where person_id = nurse_id) as Nurse, parents_consent, date_of_immunization from Immunization inner join vaccine on vaccine.vaccine_id = immunization.vaccine_id where student_id =:id";
	
	$statement = $this->connection->prepare($sql);
	$statement->bindParam(':id', $id);
	$statement->execute();

	$result = $statement->fetchAll();

	return $result;

	
	}

	public function getDeworming(){
	
	
		$sql = "SELECT deworm_id, student_id, (select concat(person.first_name, ' ', person.last_name) from person where person_id = nurse_id) as Nurse, date, parents_consent, remarks from deworming";

		$statement = $this->connection->query($sql);
		$result = $statement->fetchAll();

		return $result;
	}

	public function isStudentDeworming($id){


		$sql = "SELECT deworm_id, student_id, (select concat(person.first_name, ' ', person.last_name) from person where person_id = nurse_id) as Nurse, date, parents_consent, remarks from deworming where student_id =:student";

		$statement = $this->connection->prepare($sql);
		$statement->bindParam(':student', $id);
		$statement->execute();

		$result = $statement->fetchAll();
		return $result;

	}

	public function getDentalInfo(){
	
		$sql = "SELECT dental_checkup_id, student_id, (SELECT concat(first_name, ' ', last_name) from person where person_id = dentist_id) as Dentist, (SELECT time_in from daily_log where daily_log.daily_log_id = daily_log_id) as Time, date, tooth_location, comments from dental_check_up";

		$statement = $this->connection->query($sql);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	}

	public function isStudentDentalInfo($id){
		
		$sql = "SELECT dental_checkup_id, student_id, (SELECT concat(first_name, ' ', last_name) from person where person_id = dentist_id) as Dentist, (SELECT time_in from daily_log where daily_log.daily_log_id = daily_log_id) as Time, date, tooth_location, comments from dental_check_up where student_id =:student_id";

		$statement = $this->connection->prepare($sql);
		$statement->bindParam(':student_id', $id);
		$statement->execute();

		$result = $statement->fetchAll();

		return $result;

	
	}

	

	public function setDewormInfo($studentId, $nurseId, $parentsConsent, $remarks){
	
		
		$sql = "INSERT INTO deworming (student_id, nurse_id, parents_consent, remarks) values (:student_id, :nurse_id, :parents_consent, :remarks)";

		$statement = $this->connection->prepare($sql);
		$statement->bindParam(':student_id', $studentId);
		$statement->bindParam(':nurse_id', $nurseId);
		$statement->bindParam(':parents_consent', $parentsConsent);
		$statement->bindParam(':remarks', $remarks);

		$statement->execute();



	
	}



























}














?>
