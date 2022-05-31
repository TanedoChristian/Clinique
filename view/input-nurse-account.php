<?php 
	include "../templates/header.php";
    include '../templates/adminheader.php';
 ?>

<body>

<div class="form-container nurse flex">
<h1>New Nurse Record</h1>
<form action="../scripts/process-nurse-account.php" method="POST">
            
            <label for="" class="lbl">Nurse ID: </label>
            <input type="text" id="#" name="nurse_id" >
            <label for="" class="lbl">First Name: </label>
            <input type="text" id="#" name="first_name">
            <label for="" class="lbl">Last Name: </label>
            <input type="text" class="" name="last_name">
            <label for="" class="lbl">Middle Name: </label>
            <input type="text" class="" name="middle_name">
            <label for="" class="lbl">Age: </label>
            <input type="text" class="" name="age">
            <label for="" class="lbl">Birthdate: </label>
            <input type="text" class="" name="birth">
            <label for="" class="lbl">Gender: </label>
            <input type="text" class="" name="gender">
            <label for="" class="lbl">Address: </label>
            <input type="text" class="" name="address">
            <label for="" class="lbl">Contact Number: </label>
            <input type="text" class="" name="contact">
            
            <div class="submit-btn dental-btn">
            <input type="submit" value="Create" name="submit">
            <input type="reset" value="Cancel">       
            </div>        
</form> 
</div>
</body>

