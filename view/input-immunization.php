<?php
    include '../templates/header.php';
    include '../templates/nurseheader.php';
?>

<body>
<div class="form-container flex">
<h1>New Immunization Info</h1>
<form action="../scripts/process-immune.php" method="POST">
            
            <label for="" class="lbl">Vaccine Name: </label>
            <input type="text" id="#" name="vaccine_name" ><br>
            <label for="" class="lbl">Student ID: </label>
            <input type="text" id="#" name="student_id"><br>
            <label for="" class="lbl">Parent's Consent: </label>
            <input type="text" class="" name="parents_consent"><br>
            
            <div class="submit-btn">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel">       
            </div>    
</form>
</div>
    
</body>
