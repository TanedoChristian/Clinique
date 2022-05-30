<?php
    include '../templates/header.php';
    include '../templates/nurseheader.php';
?>


<body>
<div class="form-container flex">
<h1>New Medical Info</h1>
    <form action="../scripts/process-medinfo.php" method="POST">
            
            <label for="" class="lbl">ID Number: </label>
            <input type="text" id="#" name="student_id" >
            <label for="" class="lbl" name="">Height(cm): </label>
            <input type="text" id="#" name="height">
            <label for="" class="lbl">Weight(kg): </label>
            <input type="text" class="" name="weight">
            <label for="" class="lbl">Blood Pressure: </label>
            <input type="text" class="" name="blood_pressure">
            <label for="" class="lbl">Temperature: </label>
            <input type="text" class="" name="temp">
            <label for="" class="lbl">Heart Rate: </label>
            <input type="text" class="" name="heart_rate">
            <div class="submit-btn">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel">       
            </div>
    </form>
    </div>
</body>
