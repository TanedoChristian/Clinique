<?php


include '../templates/header.php';
include '../templates/adminheader.php';




?>




<div class="w3-container checkup-result flex">

<h1> Student Account  </h1>


<div class="immun-btn-container">

	<button><a href="input-student-accout.php">Add Record </a></button>


</div>
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


















