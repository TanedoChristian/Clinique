<?php 
	include "../templates/header.php";
    include '../templates/adminheader.php';
 ?>

<body>

<div class="form-container nurse flex">
<h1>New Nurse Record</h1>
<form action="../scripts/process-nurse-account.php" method="POST">
            
            <label for="" class="lbl">Nurse ID: </label>
            <input type="text" id="#" name="#" >
            <label for="" class="lbl">First Name: </label>
            <input type="text" id="#" name="#">
            <label for="" class="lbl">Last Name: </label>
            <input type="text" class=""
            <label for="" class="lbl">Age: </label>
            <input type="text" class="">
            <label for="" class="lbl">Gender: </label>
            <input type="text" class="">
            <label for="" class="lbl">Address: </label>
            <input type="text" class="">
            <label for="" class="lbl">Contact Number: </label>
            <input type="text" class="">
            
            <div class="submit-btn dental-btn">
            <input type="submit" value="Create" name="submit">
            <input type="reset" value="Cancel">       
            </div>        
</form> 
</div>
</body>

