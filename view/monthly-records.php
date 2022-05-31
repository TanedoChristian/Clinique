<?php
session_start();

include '../templates/header.php';
include '../templates/nurseheader.php';

?>
	
<div class="w3-container checkup-result flex">

<h1> Monthly Medical Records </h1>

  <table class="w3-table w3-striped">
    <tr>
      <th>Date</th>
      <th>Total Records</th>
    </tr>
    
    <?php

	include '../model/Nurse.php';

if($_SESSION['usertype'] == 'nurse'){
	
	$nurse = new Nurse;
	$result = $nurse->getMonthlyReportMedical();


	foreach($result as $r){
	
	
		echo <<<HERE
			<tr>
				<td> $r[month] </td>
				<td> $r[Records] </td>
			</tr>

		HERE;	
	}

}


     ?>
