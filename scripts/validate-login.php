<?php


include '../database/Database.php';
include '../model/User.php';

//Account User
$user = new User;


//Database Connection 
$database = new Database;


if(isset($_POST['submit'])){
    $user = $_POST['idno'];
    $password = $_POST['password'];

    $connection = $database->getConnection();
    $sql = 'SELECT acc_number from acc_details where person_id = :idno and password = :password';
    $statement = $connection->prepare($sql);
    $statement->bindParam(':idno', $user);
    $statement->bindParam(':password', $password);
    $statement->execute();

    $result = $statement->rowCount();

    if($result >= 1){
	    header('location: ../view/home-page.html');
    } else {
        echo 2;
    }

}







?>
