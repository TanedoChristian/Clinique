<?php


include '../templates/header.php';




?>

<div class="second-header">
        <div class="left flex"> 
        <a href="home-page.html"> Home </a>
        </div>
        <div class="right flex">
            <ul> 
                <li><a href ="medical-record.php">Medical Record </a></li>
                <li><a href ="medical-info.php">Medical Info </a></li>
                        <li><a href ="Immunization.php">Immunization</a></li>
                        <li><a href ="Deworm.php">Deworm </a></li>
                <li><a href="dental-info.php"> Dental Record </a> </li>
                <li><a href="checkup-result.php"> Check up Result </a> </li>
                <li> Logout </li>
            </ul>
            <div class="catgeory-container">
                <i class="material-icons">list</i>
            </div>
        </div>
</div>


<div class="w3-container checkup-result flex">

<h1> Admin  </h1>
  <table class="w3-table w3-striped">
    <tr>
      <th>ID Number</th>
      <th>Name</th>
      <th>BirhDate</th>
      <th>Age</th>
      <th>Gender</th>
      <th> Address </th>
      <th> Email </th>
      <th> Password </th>
    </tr>
	<?php
	
	include '../model/Admin.php';
	
	$admin = new Admin;

	$result = $admin->getAllUser();
	
	foreach($result as $r){
	echo <<< HERE

		<tr> 
			<td> $r[person_id] </td> 
			<td> $r[name] </td>
			<td> $r[birthdate] </td>
			<td> $r[age] </td>
			<td> $r[gender] </td>
			<td> $r[address] </td>
			<td> $r[username] </td>
			<td> $r[password] </td>
		</tr> 
	HERE;
	}
	?>
    </table>


















