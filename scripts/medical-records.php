<?php

include '../database/Database.php';

$database = new Database;

$connection = $database->getConnection();


$statement = $connection->query("SELECT * FROM MEDICAL_INFORMATION");
$result = $statement->fetchAll();





?>
