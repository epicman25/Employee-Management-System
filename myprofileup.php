<?php

require_once ('dbcon.php');
$sql = "SELECT * FROM `empinfo` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  $contact = mysqli_real_escape_string($conn, $_POST['phno']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
 


 $result = mysqli_query($conn, "UPDATE `empinfo` SET `email`='$email',`phno`='$contact',`address`='$address' WHERE id=$id");

 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='edashboard.php?id=$id  ';
    </SCRIPT>");

  
}
?>




<?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `empinfo` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $firstname = $res['fname'];
  $lastname = $res['lname'];
  $email = $res['email'];
  $contact = $res['phno'];
  $address = $res['address'];
  $gender = $res['gender'];
  $birthday = $res['dob'];
  $nid = $res['idno'];
  $dept = $res['dept'];
  $degree = $res['degree'];
}
}

?>

<html>
<head>
  <title>Update Profile | Employee Management System</title>
  <link href="./css/myprofileup.css" rel="stylesheet" media="all">
</head>
<body>
  <header>
    <nav>
      <h1>Employee Management System</h1>
      <ul id="navli">
        <li><a class="homeblack" href="edashboard.php?id=<?php echo $id?>"">My Profile</a></li>
        <li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>"">Apply Leave</a></li>
        <li><a class="homeblack" href="elogin.html">Log Out</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="divider"></div>
  
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Employee Info</h2>
                    <form id = "registration" action="myprofileup.php" method="POST">



                        <div class="input-group">
                          <p>Email</p>
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>">
                        </div>
                       
                        
                        <div class="input-group">
                          <p>Contact</p>
                            <input class="input--style-1" type="number" name="phno" value="<?php echo $contact;?>">
                        </div>

                       

                        
                         <div class="input-group">
                          <p>Address</p>
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>">
                        </div>

                       
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                    <br>
                   </div>
            </div>
        </div>
    </div>


</body>
</html>
