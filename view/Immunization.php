<?php

session_start();
include '../templates/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

  include('../templates/nurseheader.php');

?>


<div class="w3-container checkup-result flex">


<h1> Immunization  </h1>
  <table class="w3-table w3-striped">
    <tr>
      <th>Immunization ID</th>
      <th>Vaccine Name</th>
      <th>Student  ID</th>
      <th>Nurse</th>
      <th>Parents Approval</th>
      <th>Date</th>
    </tr>
   <?php

	include '../model/Nurse.php';
	if($_SESSION['usertype'] == 'nurse'){	
	$nurse = new Nurse;
	$result = $nurse->getImmunization();

	foreach($result as $r){
		echo <<< HERE
			<tr>
				<td> $r[immun_id] </td>
				<td> $r[vaccine_name] </td>
				<td> $r[student_id] </td>
				<td> $r[Nurse] </td>
				<td> $r[parents_consent] </td>
				<td> $r[date_of_immunization] </td>		
			</tr>
		HERE;
	} 
	} else {
		$id = trim($_SESSION['student_id']);
		$nurse = new Nurse;
		$result = $nurse->isStudentImmunization($id);
		foreach($result as $r){
		echo <<< HERE
			<tr>
				<td> $r[immun_id] </td>
				<td> $r[vaccine_name] </td>
				<td> $r[student_id] </td>
				<td> $r[Nurse] </td>
				<td> $r[parents_consent] </td>
				<td> $r[date_of_immunization] </td>		
			</tr>
		HERE;
	} 	



	
	}
	
   ?>


<!--    <tr>
      <td>193023231</td>
      <td>Triavlent</td>
      <td>1001</td>
      <td>Leslie Alexander</td>
      <td>Yes</td>
      <td>10/10/22</td>
    </tr>
    <tr>
      <td>193023232</td>
      <td>Triavlent</td>
      <td>1002</td>
      <td>Brad Pritt</td>
      <td>Yes</td>
      <td>10/1022</td>
    </tr>
    <tr>
    <tr>
      <td>193023233</td>
      <td>Triavlent</td>
      <td>1003</td>
      <td>Chris John </td>
      <td>Yes</td>
      <td>10/10/22</td>
    </tr>
    <tr>
      <td>193023234</td>
      <td>Triavlent</td>
      <td>1004</td>
      <td>Alex Cooper</td>
      <td>Yes</td>
      <td>10/11/22</td>
    </tr>
    <tr>
      <td>193023235</td>
      <td>Triavlent</td>
      <td>1005</td>
      <td>Leslie Alexander</td>
      <td>Yes</td>
      <td>10/10/22</td>
    </tr>
    <tr>
      <td>193023231</td>
      <td>Triavlent</td>
      <td>1001</td>
      <td>Anton Marshall</td>
      <td>Yes</td>
      <td>10/10/22</td>
    </tr>
--!>
  </table>
</div>


    
</body>
</html>
