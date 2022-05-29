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


<h1> Deworm  </h1>
  <table class="w3-table w3-striped">
    <tr>
      <th>Deworm ID</th>
      <th>Student  ID</th>
      <th>Nurse</th>
      <th>Date</th>
      <th>Parents Approval</th>
      <th> Remarks </th>
    </tr>
   
	<?php

   include "../model/Nurse.php";

    if($_SESSION['usertype'] == 'nurse'){
		$nurse = new Nurse;
		$result = $nurse->getDeworming();

		foreach($result as $r){
		echo <<<HERE
			<tr>
				<td> $r[deworm_id]</td>
				<td> $r[student_id]</td>
				<td> $r[Nurse]</td>
				<td> $r[date]</td> 
				<td> $r[parents_consent] </td>
				<td> $r[remarks] </td>
			</tr>
		HERE;
		  }
    } else {
    echo $_SESSION['student_id'];
    $id = trim($_SESSION['student_id']);
		$nurse = new Nurse;
		$result = $nurse->isStudentDeworming($id);

		foreach($result as $r){
		echo <<<HERE
			<tr>
				<td> $r[deworm_id]</td>
				<td> $r[student_id]</td>
				<td> $r[Nurse]</td>
				<td> $r[date_of_deworming]</td> 
				<td> $r[parents_consent] </td>
				<td> $r[remarks] </td>
			</tr>
		HERE;
			}
		  }
	?>

<!--
    <tr>
      <td>193023231</td>
      <td>1001</td>
      <td>Leslie Alexander</td>
      <td>10/10/22</td>
      <td>Yes</td>
      <td>None</td>
    </tr>
    <tr>
      <td>193023232</td>

      <td>1002</td>
      <td>Brad Pritt</td>
      <td>10/1022</td>
      <td>Yes</td>
      <td>None</td>
    </tr>
    <tr>
    <tr>
      <td>193023233</td>
      <td>1003</td>
      <td>Chris John </td>
     
      <td>10/10/22</td>
      <td>Yes</td>
      <td>None</td>
    </tr>
    <tr>
      <td>193023234</td>
      <td>1004</td>
      <td>Alex Cooper</td>
      <td>10/11/22</td>
      <td>Yes</td>
      <td>None</td>
    </tr>
    <tr>
      <td>193023235</td>
      <td>1005</td>
      <td> Cooper Brad</td>
      <td>01/03/22</td>
      <td>Yes</td>
      <td>None</td>
    </tr>
    <tr>
      <td>193023236</td>
      <td>1006</td>
      <td>Alex Santos</td>
      <td>10/11/22</td>
      <td>Yes</td>
      <td>None</td>
    </tr>
    <tr>
      <td>193023234</td>
      <td>1004</td>
      <td>Alex Cooper</td>
      <td>10/11/22</td>
      <td>Yes</td>
      <td>None</td>
    </tr>
--!>
  </table>
</div>


    
</body>
</html>
