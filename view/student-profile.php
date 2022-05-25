<?php

// HEADER
include '../templates/header.php';
include '../database/Database.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="../public/js/app.js"> </script>
</head>
<body>
    
<div class="second-header">
        <div class="left flex"> 
            <a href="home-page.html"> Home </a>
        </div>
        <div class="right flex">
            <ul> 
            <li><a href ="student-profile.php">My Profile </a></li>
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

<main class="student-wrapper flex">

    <div class="student-container flex">
        <div class="photo-container flex">
            <div class="student-photo-container">
               <img src="../public/images/student.png" alt="">
            </div>
            <div class="photo-btn-container flex">
                <button> Change Photo </button>
                <button> Save Changes </button>
            </div>
            
        </div>

        <div class="student-info-container flex">
            <div class="btn-wrapper flex">
                <button id="" onclick="showInfo(1)">  Student Information </button>
                <button id="" onclick="showInfo(2)"> Emergency Contact  </button>
            </div>

            <div class="info-container">
                <ul class="flex student-information" id="student">
                
                <li><a>ID No: 1001 </a></li>
                <li><a>Name: John Doe </a></li>
                <li><a>Birthday: 2012-03-13 </a></li>
                <li><a>Age: 21 </a></li>
                <li><a>Gender: Male </a></li>
                <li><a>Section: Sampaguita </a></li>
                <li><a>Level: 4 </a></li>
                <li><a>Contact: 09343434344 </a></li>
                
                </ul>
                <ul id="emergency">
                
                <li><a>Guardian: Jerome Doe </a></li>
                <li><a>Relationship: Father </a></li>
                <li><a>Address: Tisa Cebu City</a></li>
                <li><a>Age: 21 </a></li>
                <li><a>Contact: 09972166644 </a></li>
                
                </ul>
            </div>
            </div>


        </div>
    </div>
    
</main>

</body>
</html>

