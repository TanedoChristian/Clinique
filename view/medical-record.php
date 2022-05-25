<?php

include '../templates/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                <li><a href="checkup-result.php"> Check-up Result </a></li>
                <li> Logout </li>
            </ul>
            <div class="catgeory-container">
                <i class="material-icons">list</i>
            </div>
        </div>
</div>



</body>
</html>