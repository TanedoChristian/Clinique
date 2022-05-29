<?php 
session_start();
	include "../templates/header.php";

 ?>

<body>
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
         
            <input type="submit" value="Back">
           <input type="submit" value="Save Changes" name="submit">       
</form> 

<h1>External Check-up Record</h1>
<form action="../scripts/process-external-checkup-record.php" method="POST">
            
            <label for="" class="lbl">External Health Record ID:</label>
            <input type="text"><br>
            <label for="" class="lbl">Health Worker:</label>
            <input type="text"><br>
            <label for="" class="lbl">Student ID number: </label>
            <input type="text"><br>
            <label for="" class="lbl">Prescription:</label>
            <input type="text"><br>
            <label for="" class="lbl">Medical Certificate:</label>
            <input type="file" alt="Choose a file"><br>
         
            <input type="submit" value="Back">
            <input type="submit" value="Save changes">       
</form> 
</body>

