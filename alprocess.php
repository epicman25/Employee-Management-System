<?php
//including the database connection file
require_once ('./dbcon.php');

//getting id of the data from url
$id = $_GET['id'];
//echo $id;
$reason = $_POST['reason'];

$start = $_POST['start'];
//echo "$reason";
$end = $_POST['end'];

$sql = "INSERT INTO `empleave`(`id`,`token`, `start`, `end`, `reason`, `status`) VALUES ('$id',NULL,'$start','$end','$reason','Pending')";

$result = mysqli_query($conn, $sql);

//redirecting to the display page (index.php in our case)
header("Location:./applyleave.php?id=$id");
?>

