<?php
session_start();
/*
include '../database/Database.php';

if(isset($_POST['submit'])){



$date = trim( $_POST['date']);





echo $_POST['timeslot'];


$myTime = explode('-', $_POST['timeslot']);



var_dump($myTime);


$database = new Database;

$connection = $database->getConnection();


$startTime = $myTime[0];
$endTime = $myTime[1];


$sql = "SELECT isAvailable from appointment_time where start =:s and end =:e";


$statement = $connection->prepare($sql);
$statement->bindParam(':s', $startTime);
$statement->bindParam(':e', $endTime);

$statement->execute();

$result = $statement->fetchAll();



foreach($result as $r){



if($r['isAvailable'] == '1'){

	echo 'Available';
	
	$sql = "INSERT INTO dental_booking(student_id, date, time) values (:s, :d, :t)";
	$statement = $connection->prepare($sql);
	$studentId = trim($_POST['student_id']);
	$time = trim($_POST['timeslot']);
	$statement->bindParam(':s', $studentId);
	$statement->bindParam(':d', $date);
	$statement->bindParam(':t', $time);
	
	$statement->execute();

	$sql = "INSERT INTO APPOINTMENT_TIME (date) values(:date)";
	$statement = $connection->prepare($sql);
	$statement->bindParam(':date', $date);
	$statement->execute();



	$sql = "UPDATE appointment_time set isAvailable = false where start =:s and end =:e";
	$statement = $connection->prepare($sql);
	$statement->bindParam(':s', $startTime);
	$statement->bindParam(':e', $endTime);

	$statement->execute();
	
	$date = trim($_POST['date']);

	

}


else if($r['isAvailable'] == '0'){ 

	echo 'Not Available';

}




}

}



 */

include '../database/Database.php';

$database = new Database;
$connection = $database->getConnection();



if(isset($_POST['submit'])){

	
	 $date = trim($_POST['date']);
	 $student_id = trim($_POST['student_id']);
	 $timeSlot = trim($_POST['timeslot']);

	 $newTime = explode('-', $timeSlot);

	 $start = $newTime[0];
	 $end = $newTime[1];


	 


	 $sql = "SELECT date, concat(start, '-', end) as datetime from appointment_time";
	 $statement = $connection->query($sql);

	 $result = $statement->fetchAll();
	
	 if(empty($result)){
	 	echo "Empty result";
		$sql = "INSERT into appointment_time (date, start, end) values(:d, :s,:e)";
		$statement = $connection->prepare($sql);

		$statement->bindParam(':d', $date);
		$statement->bindParam(':s', $start);
		$statement->bindParam(':e', $end);

		$statement->execute();
		$statement->closeCursor();
	 } 


	 $sql = "SELECT date, concat(start, '-', end) as datetime from appointment_time";
	 $statement = $connection->query($sql);

	 $result = $statement->fetchAll();
	 $statement->closeCursor();
	 foreach($result as $r){
	 
		if($date == $r['date'] &&  $timeSlot == $r['datetime']){
			header('location: ../view/appointment.php');
			break;
	 	} else { 
			echo $r['date'] ." ". $r['datetime'];	
			$query = "INSERT INTO appointment_time(date, start,end) values(:d,:s,:e)";
			$stmnt = $connection->prepare($query);

			$stmnt->bindParam(':d', $date);
			$stmnt->bindParam(':s', $start);
			$stmnt->bindParam(':e', $end);

			$stmnt->execute();

		}
	 
	 }

}



















?>
