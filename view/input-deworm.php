<?php


include '../templates/header.php';
include '../templates/nurseheader.php';


?>

<form action="../scripts/process-deworm.php" method="POST">
            
            <label for="" class="lbl">Student ID: </label>
	    <input type="text" id="#" name="student_id"><br>
            <label for="" class="lbl">Parent's Consent: </label>
            <input type="text" class="" name="parents_consent"><br>
	    <label for="Remarks" class="lbl"> Remarks </label>
	    <input type="text" class="" name ="remarks"></br>
            
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel">       
</form>

