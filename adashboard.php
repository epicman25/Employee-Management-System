<?php 
require_once ('dbcon.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="./css/adashboard.css">
</head>
<body>
	
	<header>
		<nav>
			<a href="./adashboard.php" style="color: white;"><h1>EMS</h1></a>
			<ul id="navli">
				<li><a class="homered" href="adashboard.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="welcomenote">
		<h1>Welcome to admin dashboard of the employee management system</h1>
		<h1>Here are all the things that you can do with admin dashboard:</h1>
		<ul>
			<li>
				<h2>You can add an employee by using add employee option</h2> 
			</li>
			<li>
				<h2>You can modify or delete the employee using the options in the view employee page</h2>
			</li>
			<li>
				<h2>You can accept or reject the leaves applied by an employee</h2>
			</li>
		</ul>
	</div>	
	<div class="credits">
	<h1>Team members:</h1>
		<ul>
			<li><h3>D Tejeshwar Reddy</h3></li>
			<li><h3>M.Jaya Bharath</h3></li>
			<li><h3>N.Aravind Bhaskar</h3></li>
		</ul>
	</div>	
	</div>
</body>
</html>