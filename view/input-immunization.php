<?php
    include '../templates/header.php';
    include '../templates/nurseheader.php';


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

<form action="../scripts/process-immune.php" method="POST">
            
            <label for="" class="lbl">Vaccine Name: </label>
            <input type="text" id="#" name="#" ><br>
            <label for="" class="lbl">Student ID: </label>
            <input type="text" id="#" name="#"><br>
            <label for="" class="lbl">Parent's Consent: </label>
            <input type="text" class=""><br>
            
            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">       
</form>
    
</body>
</html>