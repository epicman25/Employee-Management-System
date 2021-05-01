$sql = "INSERT INTO `empinfo`(`id`, `fname`, `lname`, `email`, `password`, `dob`, `gender`, `phno`, `idno`,  `address`, `dept`, `degree`, `pic`,'salary') VALUES ('','$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$nid','$address','$dept','$degree','$destinationfile','$salary')";
    $result = mysqli_query($conn, $sql);
