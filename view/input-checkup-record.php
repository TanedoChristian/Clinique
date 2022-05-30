<?php 
session_start();
	include "../templates/header.php";
	include "../templates/nurseheader.php";
 ?>

<body>
<div class="form-container flex">
<h1>New Check-up Record</h1>
<form action="../scripts/process-checkup.php" method="POST">
            
            <label for="" class="lbl">ID Number:</label>
            <input type="text" name="student_id"><br>
            <label for="" class="lbl">Symptoms: </label>
            <input type="text" name="symptoms"><br>
            <label for="" class="lbl">Illness:</label>
            <input type="text" name="illness"><br>
            <label for="" class="lbl">Prescription:</label>
            <input type="text" name="prescription"><br>
           
            <div class="submit-btn">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel">       
            </div>     
</form> 
<div class="form-container flex">

</body>

