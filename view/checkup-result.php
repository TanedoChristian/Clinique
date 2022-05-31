<?php
session_start();
include '../templates/header.php';
include '../templates/nurseheader.php';
?>


<div class="w3-container checkup-result flex">


<h1> Check Up Result </h1>
<div class="immun-btn-container">

	<button><a href="input-checkup-record.php">Add Record </a></button>


</div>

  <table class="w3-table w3-striped">
	
    <tr>
      <th>Date</th>
      <th> Student ID </th>
      <th>Nurse</th>
      <th>Illness</th>
      <th>Symptomps</th>
      <th>Prescription</th>
    </tr>
	<?php

		include '../model/Nurse.php';
	$_SESSION['usertype'] = 'nurse';
	if($_SESSION['usertype'] == 'nurse'){

		$nurse = new Nurse;
		$result = $nurse->getCheckUpResult();
	
		foreach($result as $r){
		
			echo <<< HERE
				<tr>	
				<td> $r[date] </td>
				<td> $r[student_id] </td>
				<td> $r[nurse] </td>
				<td> $r[symptoms] </td>
				<td> $r[illness] </td>
				<td> $r[prescription_name] </td>
				</tr>
			HERE;
		
		
		}
	} else {
		$id = trim($_SESSION['student_id']);	
		$nurse = new Nurse;
		$result = $nurse->isStudentResult($id);
	
		foreach($result as $r){
		
			echo <<< HERE
				<tr>	
				<td> $r[date] </td>
				<td> $r[student_id] </td>
				<td> $r[nurse] </td>
				<td> $r[symptoms] </td>
				<td> $r[illness] </td>
				<td> $r[prescription_name] </td>
				</tr>
			HERE;
	}		
	
	}

	?>


     </table>

</div>


    
</body>
</html>
