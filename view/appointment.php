<?php


session_start();
include '../templates/header.php';
include '../templates/nurseheader.php';


?>

<body>
<div class="form-container flex">
    <h1>Dental Appointment</h1>
    <form action="../scripts/process-appointment.php" method="POST">
    <label for="" class="lbl">Student  ID: </label>
    <input type="text" name="student_id" placeholder="Student ID"> 
            <label for="" class="lbl">Pick Date: </label>
            <input type="date" id="#" name="date" >
            <label for="" class="lbl">Choose Time: </label>
 	<select name="timeslot" id="cars">
        <option value="08:30:00-09:00:00" > 8:30am - 9:00am</option>
        <option value="09:00:00-09:30:00"> 9:00AM - 9:30AM</option>
        <option value="09:30:00-10:00:00">9:30AM - 10:00AM</option>
        <option value="10:00:00-10:30:00">10:00AM - 10:30AM</option>
</select>


<div class="submit-btn dental-btn">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel">       
            </div>  

    </form>
</div>



<?php

if(isset($_SESSION['error'])){

	echo $_SESSION['error'];
    $_SESSION['error'] = "";
} else {
	
	echo "";

}

?>
 






</body>

