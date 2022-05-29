<?php
      include '../templates/header.php';
      include '../templates/nurseheader.php';
?>

<body>
<h1>New Dental Record</h1>
    <form action="../scripts/process-dental-record.php" method="POST">
            
            <label for="" class="lbl">ID Number: </label>
            <input type="text" id="#" name="#" ><br>
            <label for="" class="lbl">Dentist ID: </label>
            <input type="text" id="#" name="#"><br>
            <label for="" class="lbl">Tooth Location: </label>
            <input type="text" class=""><br>
            <label for="" class="lbl">Comments: </label>
            <input type="text" class=""><br>
            
            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">       
    </form>
</body>