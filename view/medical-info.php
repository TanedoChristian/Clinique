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
<div class="second-header">
        <div class="left flex"> 
        <a href="home-page.html"> Home </a>
        </div>
        <div class="right flex">
            <ul> 
                <li><a href ="medical-record.php">Medical Record </a></li>
                <div class="dropdown">
                <li><a href ="medical-info.php"> Medical Info </a></li>
                <div class="dropdown-content">
                <li><a href ="Immunization.php">Immunization</a></li>
                <li><a href="Deworm.php">Deworm </a></li>
                </div>
                </div>
                <li><a href="dental-info.php"> Dental Record </a> </li>
                <li><a href="checkup-result.php"> Check up Result </a> </li>
                <li><a href="../scripts/logout.php"> Logout </a></li>
            </ul>
            <div class="catgeory-container">
                <i class="material-icons">list</i>
            </div>
        </div>
</div>



<div class="w3-container checkup-result flex">

<h1> Medical Info  </h1>
<div class="immun-btn-container">

	<button><a href="input-.php">Add Record </a></button>

</div>

  <table class="w3-table w3-striped">
    <tr>
      <th>MedInfo ID</th>
      <th>Student ID</th>
      <th>Nurse</th>
      <th>Height</th>
      <th>Weight</th>
      <th>Blood Pressure</th>
      <th>Temparature</th>
      <th>Heart Rate</th>
      <th>Date</th>
    </tr>

    <tr>
	<?php

  if($_SESSION['usertype'] != 'nurse')
  {
    include '../model/Nurse.php';
		
		$nurse = new Nurse;
    $id = $_SESSION['student_id'];
		$result = $nurse->isStudentMedicalInfo($id);
		if(isset($result)){
			
			foreach($result as $r) {
				ECHO <<<HERE
					<tr>
						<td> $r[medical_information_id] </td>
						<td> $r[student_id] </td>
						<td> $r[Nurse] </td>
						<td> $r[height] </td>
						<td> $r[weight] </td>
						<td> $r[blood_pressure] </td>
						<td> $r[body_temp] </td>
						<td> $r[heart_rate] </td>
						<td> $r[date] </td>
					</tr>

				HERE;
			}
    
    }
  }else {
		include '../model/Nurse.php';
		
		$nurse = new Nurse;
		$result = $nurse->getMedicalInfo();
		if(isset($result)){
			
			foreach($result as $r) {
				ECHO <<<HERE
					<tr>
						<td> $r[medical_information_id] </td>
						<td> $r[student_id] </td>
						<td> $r[Nurse] </td>
						<td> $r[height] </td>
						<td> $r[weight] </td>
						<td> $r[blood_pressure] </td>
						<td> $r[body_temp] </td>
						<td> $r[heart_rate] </td>
						<td> $r[date] </td>
					</tr>

				HERE;
			}
    }
		}
	?>

    </tr>

   <!-- <tr>
      <td>011923</td>
      <td>1001</td>
      <td>Lexi Alexander</td>
      <td>170</td>
      <td>71</td>
      <td>24.6</td>
      <td>Optimal</td>
      <td>100/80hg</td>
      <td>36.6</td>
      <td>60</td>
      <td>10/10/2022</td>
    </tr>
    <tr>
      <td>011923</td>
      <td>1001</td>
      <td>Lexi Alexander</td>
      <td>170</td>
      <td>71</td>
      <td>24.6</td>
      <td>Optimal</td>
      <td>100/80hg</td>
      <td>36.6</td>
      <td>60</td>
      <td>10/10/2022</td>
    </tr>
    <tr>
    <tr>
      <td>011923</td>
      <td>1002</td>
      <td>Brad Fox</td>
      <td>150</td>
      <td>51</td>
      <td>23.6</td>
      <td>Optimal</td>
      <td>120/80hg</td>
      <td>30.6</td>
      <td>70</td>
      <td>09/10/2022</td>
    </tr>
    <tr>
      <td>01123</td>
      <td>1003</td>
      <td>Jane Cooper</td>
      <td>170</td>
      <td>72</td>
      <td>28.6</td>
      <td>Optimal</td>
      <td>90/80hg</td>
      <td>36.2</td>
      <td>53</td>
      <td>10/9/2022</td>
    </tr>
    <tr>
      <td>011924</td>
      <td>1004</td>
      <td>Chris Alexander</td>
      <td>150</td>
      <td>59</td>
      <td>30.6</td>
      <td>Optimal</td>
      <td>120/80hg</td>
      <td>32.6</td>
      <td>80</td>
      <td>10/15/2022</td>
    </tr>
    <tr>
      <td>011925</td>
      <td>1005</td>
      <td>Alex Prat</td>
      <td>175</td>
      <td>73</td>
      <td>27.6</td>
      <td>Optimal</td>
      <td>120/80hg</td>
      <td>38.6</td>
      <td>80</td>
      <td>10/11/2022</td>
    </tr>
    <tr>
      <td>011926</td>
      <td>1006</td>
      <td>Jake Paul</td>
      <td>150</td>
      <td>61</td>
      <td>20.6</td>
      <td>Optimal</td>
      <td>100/80hg</td>
      <td>36.6</td>
      <td>60</td>
      <td>10/10/2022</td>
    </tr>
    --!>
  </table>
</div>



    
</body>
</html>
