<?php
    session_start();

    include '../model/Nurse.php';
    
    if(isset($_POST['submit'])){
        $vaccineName = trim($_POST['vaccine_name']);
        $studentId = trim($_POST['student_id']);
        $parentsConsent = trim($_POST['parents_consent']);
        
        $nurseId = trim($_SESSION['student_id']);
        
        $nurse = new Nurse;
    
        $nurse->setImmunizationInfo($studentId, $nurseId, $parentsConsent);
    
        echo "success";
    
        header('location: ../view/immunization.php');
    
    
    
    
?>