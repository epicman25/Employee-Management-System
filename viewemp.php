<?php

require_once ('./dbcon.php');
$sql = "SELECT * from `empinfo`";

$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Employee </title>
	<link rel="stylesheet" type="text/css" href="./css/viewemp.css">
</head>
<body>
	<header>
		<nav>
		<a href="./adashboard.php" style="color: white;"><h1>EMS</h1></a>
			<ul id="navli">
				<li><a class="homeblack"href="adashboard.php">Home</a></li>
            <li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
            
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Emp. ID</th>
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">Birthday</th>
				<th align = "center">Gender</th>
				<th align = "center">Contact</th>
				<th align = "center">NID</th>
				<th align = "center">Address</th>
				<th align = "center">Department</th>
				<th align = "center">Degree</th>
				
				
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['fname']." ".$employee['lname']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['dob']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['phno']."</td>";
					echo "<td>".$employee['idno']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['degree']."</td>";
					

					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>