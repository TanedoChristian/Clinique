<?php
    include '../templates/header.php';
    include '../templates/nurseheader.php';
?>


<body>
    <form action="../scripts/process-medinfo.php" method="POST">
            
            <label for="" class="lbl">ID Number: </label>
            <input type="text" id="#" name="#" ><br>
            <label for="" class="lbl">Height(cm): </label>
            <input type="text" id="#" name="#"><br>
            <label for="" class="lbl">Weight(kg): </label>
            <input type="text" class=""><br>
            <label for="" class="lbl">Blood Pressure: </label>
            <input type="text" class=""><br>
            <label for="" class="lbl">Temperature: </label>
            <input type="text" class=""><br>
            <label for="" class="lbl">Heart Rate: </label>
            <input type="text" class=""><br>
            <label for="" class="lbl">Illnes: </label>
            <input type="text" class=""><br>
            <label for="" class="lbl">Disabilities: </label>
            <input type="text" class=""><br>
            <label for="" class="lbl">Allergies: </label>
            <input type="text" class=""><br>
            <label for="" class="lbl">Injury: </label>
            <input type="text" class=""><br>
            <label for="" class="lbl">Mental Disorder: </label>
            <input type="text" class=""><br>
            
            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">       
    </form>
</body>
