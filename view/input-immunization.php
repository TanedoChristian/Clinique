<?php
    include '../templates/header.php';
    include '../templates/nurseheader.php';
?>

<body>
<h1>New Immunization Info</h1>
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
