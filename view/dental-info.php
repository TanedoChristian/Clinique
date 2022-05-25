<?php




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
                <li> Logout </li>
            </ul>
            <div class="catgeory-container">
                <i class="material-icons">list</i>
            </div>
        </div>
</div>

<div class="dental-container flex">
    <div class="dental-btn-container flex">
        <button>Dental Record </button>
        <button>Appointment </button>
    </div>
    <div class="w3-container">


  <table class="w3-table w3-striped">
    <tr>
      <th>First Name</th>
      <th>Condition</th>
      <th>Dentist</th>
      <th>Date</th>
      <th>Visit Time</th>
      <th>Comments</th>
    </tr>
    <tr>
      <td>R1</td>
      <td>Cavity</td>
      <td>Dr. John Smith</td>
      <td>01-23-22</td>
      <td>9:15-10:45asm</td>
      <td>Pasta</td>
    </tr>
    <tr>
       <td>R5</td>
      <td>Stains</td>
      <td>Dr. John Smith</td>
      <td>01-25-22</td>
      <td>11:50 1:45pm</td>
      <td>Cleaning</td>
    </tr>
    <tr>
    <td>l17</td>
      <td>Cavity</td>
      <td>Dr. James Blackh</td>
      <td>01-25-22</td>
      <td>11:50 1:45pm</td>
      <td>Removal</td>
    </tr>
    <td>l17</td>
      <td>Cavity</td>
      <td>Dr. James Blackh</td>
      <td>01-25-22</td>
      <td>11:50 1:45pm</td>
      <td>Removal</td>
    </tr>
    <td>l17</td>
      <td>Cavity</td>
      <td>Dr. James Blackh</td>
      <td>01-25-22</td>
      <td>11:50 1:45pm</td>
      <td>Removal</td>
    </tr>
  </table>
</div>
</div>


    
</body>
</html>