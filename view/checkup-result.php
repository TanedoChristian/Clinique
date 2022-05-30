<?php

include '../templates/header.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Check up Result</title>
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
                <li> Logout </li>
            </ul>
            <div class="catgeory-container">
                <i class="material-icons">list</i>
            </div>
        </div>
</div>


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
