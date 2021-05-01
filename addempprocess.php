<?php

require_once ('./dbcon.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nid = $_POST['nid'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$salary = $_POST['salary'];
$birthday =$_POST['birthday'];





$sql = "INSERT INTO `empinfo` (`id`, `fname`, `lname`,`salary`, `email`, `password`, `dob`, `gender`, `phno`, `idno`,  `address`, `dept`, `degree`,`pic`) VALUES (NULL,'$firstname','$lastName','$salary','$email','1234','$birthday','$gender','$contact','$nid','$address','$dept','$degree','')";

$result = mysqli_query($conn, $sql);



if(($result)==1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='./viewemp.php';
    </SCRIPT>");
}

 else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('Failed to Registere2')
     window.location.href='javascript:history.go(-1)';
     </SCRIPT>");
 }







?>