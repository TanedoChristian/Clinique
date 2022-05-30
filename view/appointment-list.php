<?php


session_start();

include '../templates/header.php';
include '../templates/nurseheader.php';




?>
<h1> Dental Appointments </h1>

<div class="w3-container checkup-result flex">

<div class="immun-btn-container">

	<button><a href="appointment.php">Add Record </a></button>


</div>


<table class="w3-table w3-striped">
    <tr>
      <th>Dental Check Up ID</th>
      <th>Student ID</th>
      <th>Time</th>
      <th>Date</th>
    </tr>
   <tr>
	<?php
		
	include "../model/Nurse.php";
	$_SESSION['usertype'] = 'nurse';
    if($_SESSION['usertype'] == 'nurse'){
		$nurse = new Nurse;
		$result = $nurse->getAppointment();

		foreach($result as $r){
		echo <<<HERE
			<tr>
				<td> $r[dental_book_id]</td>
				<td> $r[student_id]</td>
				<td> $r[time]</td> 
				<td> $r[date] </td> 
			</tr>
		HERE;
		  }
    } else {
    $id = trim($_SESSION['student_id']);
		$nurse = new Nurse;
		$result = $nurse->isStudentAppoint($id);

		foreach($result as $r){
		echo <<<HERE
			<tr>
				<td> $r[dental_checkup_id]</td>
				<td> $r[student_id]</td>
				<td> $r[time]</td> 
				<td> $r[date] </td>
			</tr>
		HERE;
			}
		  }
	?>			
	

  </tr>	
  </table>
</div>
