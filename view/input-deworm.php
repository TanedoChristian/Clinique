<?php


include '../templates/header.php';
include '../templates/nurseheader.php';


?>
<body>
<div class="form-container flex">
<h1> Deworming </h1>
<form action="../scripts/process-deworm.php" method="POST">
            
            <label for="" class="lbl">Student ID: </label>
	    <input type="text" id="#" name="student_id"><br>
            <label for="" class="lbl">Parent's Consent: </label>
            <input type="text" class="" name="parents_consent"><br>
	    <label for="Remarks" class="lbl"> Remarks </label>
	    <input type="text" class="" name ="remarks"></br>
            
        <div class="submit-btn dental-btn">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel">       
            </div>       
</form>
</div>
</body>

