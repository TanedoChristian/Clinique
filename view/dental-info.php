<?php


session_start();

include '../templates/header.php'


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Dental Info</title>
</head>
<body>
<div class="second-header">
        <div class="left flex"> 
        <a href="home-page.html"> Home </a>
        </div>
        <div class="right flex">
            <ul> 
                <li><a href ="medical-record.php">Medical Record </a></li>
                <li><a href="dental-info.php"> Dental Record </a> </li>
                <li><a href="checkup-result.php"> Check up Result </a> </li>
                <li><a href='../scripts/logout.php'> Logout </a></li>
            </ul>
            <div class="catgeory-container">
                <i class="material-icons">list</i>
            </div>
        </div>
</div>

<div class="dental-container flex">
    <div class="dental-btn-container flex">
        <button><a href="dental-info.php">Dental Record </a></button>
        <button><a href= "appointment.php">Appointment</a></button>
    </div>
    <div class="w3-container">


  <table class="w3-table w3-striped">
    <tr>
      <th>Dental Check Up ID</th>
      <th>Student ID</th>
      <th>Dentist</th>
      <th>Time</th>
      <th>Date</th>
      <th> Tooth Location </th>
      <th>Comments</th>
    </tr>
   <tr>
	<?php
		
	include "../model/Nurse.php";

    if($_SESSION['usertype'] == 'nurse'){
		$nurse = new Nurse;
		$result = $nurse->getDentalInfo();

		foreach($result as $r){
		echo <<<HERE
			<tr>
				<td> $r[dental_checkup_id]</td>
				<td> $r[student_id]</td>
				<td> $r[Dentist]</td>
				<td> $r[time]</td> 
				<td> $r[date] </td> 
				<td> $r[tooth_location] </td>
				<td> $r[comments] </td>
			</tr>
		HERE;
		  }
    } else {
    echo $_SESSION['student_id'];
    $id = trim($_SESSION['student_id']);
		$nurse = new Nurse;
		$result = $nurse->isStudentDentalInfo($id);

		foreach($result as $r){
		echo <<<HERE
			<tr>
				<td> $r[dental_check_up_id]</td>
				<td> $r[student_id]</td>
				<td> $r[Dentist]</td>
				<td> $r[Time]</td> 
				<td> $r[date] </td>
				<td> $r[tooth_location] </td>
				<td> $r[comments] </td>
			</tr>
		HERE;
			}
		  }
	?>			
	

  </tr>	
  </table>
</div>
</div>


    
</body>
</html>
