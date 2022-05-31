<?php




session_start();

include '../model/Nurse.php';

if(isset($_POST['submit'])){
	
	$nurseId = trim($_POST['nurse_id']);
	$first = trim($_POST['first_name']);
	$last = trim($_POST['last_name']);
    $middle = trim($_POST['middle_name']);
	$age = trim($_POST['age']);
    $birth = trim($_POST['birth']);
    $gender = trim($_POST['gender']);
	$address = trim($_POST['address']);
	$number = trim($_POST['contact']);

	$nurseId = trim($_SESSION['student_id']);
	
	$nurse = new Nurse;
    $nurse1 = "N";

	$nurse->setNurseAcc($nurseId, $first, $last, $middle,$age, $gender, $birth, $address, $number, $nurse1);



	//header('location: ../view/admin-nurse.php');

}











?>