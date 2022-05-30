<?php

include '../templates/header.php';
include '../templates/nurseheader.php';
session_start();


?>

<body>
    <h1>Book Appointment</h1>
    <form action="../scripts/process-appointment.php" method="POST">
            <label for="" class="lbl">Pick Date: </label>
            <input type="date" id="#" name="date" ><br>
           
<<<<<<< HEAD
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel">
            
            
=======
            <input type="text" name="student_id" placeholder="Student ID"> 
            <input type="submit" value="Submit" name="submit">
	    <input type="reset" value="Cancel">   

	

 	<select name="timeslot" id="cars">
  <option value="08:30:00-09:00:00" > 8:30am - 9:00am</option>
  <option value="09:00:00-09:30:00"> 9:00AM - 9:30AM</option>
  <option value="09:30:00-10:00:00">9:30AM - 10:00AM</option>
  <option value="audi">Audi</option>
</select>




>>>>>>> 70482ff915a8b267ad56e696782bcf52f8f9021a
    </form>




<?php



?>
 






</body>

