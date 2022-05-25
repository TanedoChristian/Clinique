<?php

include '../templates/header.php';

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
  <table class="w3-table w3-striped">
    <tr>
      <th>Date</th>
      <th>Visit Time</th>
      <th>Nurse</th>
      <th>Prescription</th>
      <th>Symptomps</th>
      <th>Illness</th>
    </tr>
    <tr>
      <td>07/18/22</td>
      <td>9:45-10:15am</td>
      <td>Rn. Johnny Lim</td>
      <td>Bioflu</td>
      <td>Asthma</td>
      <td>Flu</td>
    </tr>
    <tr>
      <td>09/20/22</td>
      <td>10:45-11:15am</td>
      <td>Rn. Johnny Lim</td>
      <td>Biogesic</td>
      <td>Fever</td>
      <td>Headache</td>
    </tr>
    <tr>
    <tr>
      <td>03/06/22</td>
      <td>8:45-9:30am</td>
      <td>Rn. Joy Sabella</td>
      <td>Biogesic</td>
      <td>High Temparature</td>
      <td>Fever</td>
    </tr>
  </table>
</div>


    
</body>
</html>