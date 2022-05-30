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

	
	public function setMedical($student_id, $nurse_id, $weight, $height, $bp, $temp, $hr){
	
	
		$sql = "INSERT INTO MEDICAL_INFORMATION (student_id, nurse_id, weight, height, blood_pressure, body_temp, heart_rate) values (:s, :n, :w,:h,:bp, :temp, :hr)";

		$statement = $this->connection->prepare($sql);
		$statement->bindParam(':s', $student_id);
		$statement->bindParam(':n', $nurse_id);
		$statement->bindParam(':w', $weight);
		$statement->bindParam(':h', $height);

		$statement->bindParam(':bp', $bp);
		$statement->bindParam(':temp', $temp);
		$statement->bindParam(':hr', $hr);

		$statement->execute();

	
	
	
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
		
		$sql = "SELECT immunization.immun_id, vaccine.vaccine_name, student_id, (select concat(person.first_name, ' ' ,person.last_name) from person  where person_id = nurse_id) as Nurse, parents_consent, date from immunization inner join vaccine on vaccine.vaccine_id = immunization.vaccine_id";

		$statement = $this->connection->query($sql);
		$result = $statement->fetchAll();

		return $result;

		
	}

	public function isStudentImmunization($id){
	
	$sql = "SELECT immunization.immun_id, vaccine.vaccine_name, student_id, (select concat(person.first_name, ' ' ,person.last_name) from person  where person_id = nurse_id) as Nurse, parents_consent, date from Immunization inner join vaccine on vaccine.vaccine_id = immunization.vaccine_id where student_id =:id";
	
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
	
		$sql = "SELECT dental_checkup_id, student_id, (SELECT concat(first_name, ' ', last_name) from person where person_id = dentist_id) as Dentist,time, date,tooth_location, comments from dental_check_up";

		$statement = $this->connection->query($sql);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	}

	public function isStudentDentalInfo($id){
		
		$sql = "SELECT dental_checkup_id, student_id, (SELECT concat(first_name, ' ', last_name) from person where person_id = dentist_id) as Dentist, time, date, tooth_location, comments from dental_check_up where student_id =:student_id";

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

	public function setImmunizationInfo($vaccineName, $studentId, $nurseId, $parentsConsent){
		$sql = "INSERT INTO immunization (student_id, vaccine_id, nurse_id, parents_consent) VALUES (:s, :v, :n, :p)";

		$statement = $this->connection->prepare($sql);
		$statement->bindParam(':s', $studentId);
		$statement->bindParam(':v', $vaccineName);
		$statement->bindParam(':n', $nurseId);
		$statement->bindParam(':p', $parentsConsent);

		$statement->execute();
	}


	public function setCheckUpInfo($idNumber, $nurseId, $symtomps, $illness, $prescription){
	
	
	$sql = "INSERT INTO check_up(student_id, nurse_id, symptoms, illness, prescription_name) values (:s, :n, :sy, :i, :p)";
	
	$statement = $this->connection->prepare($sql);

	$statement->bindParam(':s', $idNumber);
	$statement->bindParam(':n', $nurseId);
	$statement->bindParam(':sy', $symtomps);
	$statement->bindParam(':i', $illness);
	$statement->bindParam(':p', $prescription);

	$statement->execute();
	
	
	}

	public function getCheckUpResult(){
	
	
		$sql = "SELECT date, student_id, (SELECT concat(first_name, ' ', last_name)  from person where person_id = nurse_id) as nurse, symptoms, illness, prescription_name from check_up";

		$statement = $this->connection->query($sql);

		$result = $statement->fetchAll();

		return $result;
	
	}

	public function isStudentResult($id){
	
		$sql = "SELECT date, student_id, (SELECT concat(first_name, ' ', last_name)  from person where person_id = nurse_id) as nurse, symptoms, illness, prescription_name from check_up where student_id =:id";

		$statement = $this->connection->prepare($sql);
		$statement->bindParam(':id', $id);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	

	
	
	}


	public function setDentalInfo($studentId, $dentistId, $toothLocation, $comments){
	
		$sql = "INSERT INTO DENTAL_CHECK_UP(student_id, dentist_id, tooth_location, comments)values(:s, :d,:t,:c)";

		$statement = $this->connection->prepare($sql);
		$statement->bindParam(':s', $studentId);
		$statement->bindParam(':d', $dentistId);
		$statement->bindParam(':t', $toothLocation);
		$statement->bindParam(':c', $comments);

		$statement->execute();
	
	}


	
	public function getAppointment(){
	
	
		$sql = "SELECT dental_book_id, student_id, date, time from dental_booking";
		$statement = $this->connection->query($sql);

		$result = $statement->fetchAll();

		return $result;
	
	
	
	}

	public function isStudentAppoint($id){
	
	
	
		$sql = "SELECT dental_book_id, student_id, date, time from dental_booking where student_id =:id";

		$statement = $this->connection->prepare($sql);
		$statement->bindParam(':id', $id);
		$statement->execute();

		$result = $statement->fetchAll();

		return $result;
	
	
	}


	









}














?>
