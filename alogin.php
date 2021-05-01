<?php

require_once ('dbcon.php');

$email = $_POST['mailid'];
$password = $_POST['password'];

$sql = "SELECT * from `alogin` WHERE uname = '$email' AND pword = '$password'";

//echo "$sql";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
	

	//echo ("logged in");
	header("Location: ./adashboard.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>