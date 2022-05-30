<?php
      include '../templates/header.php';
      include '../templates/nurseheader.php';
?>

<body>
<h1>New Dental Record</h1>
    <form action="../scripts/process-dental.php" method="POST">
            
            <label for="" class="lbl">ID Number: </label>
            <input type="text" id="#" name="student_id" ><br>
            <label for="" class="lbl">Dentist ID: </label>
            <input type="text" id="#" name="dentist_id"><br>
            <label for="" class="lbl">Tooth Location: </label>
            <input type="text" class="" name="tooth_location"><br>
            <label for="" class="lbl">Comments: </label>
            <input type="text" class="" name="comments"><br>
            
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel">       
    </form>
</body>
