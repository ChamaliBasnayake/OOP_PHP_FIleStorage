<?php

include_once 'class.user.php';  $user = new User(); // Checking for user logged in or not

 if (isset($_REQUEST['submit'])){
 extract($_REQUEST);
 $register = $user->reg_user($fullname, $uname,$upass, $uemail);
 if ($register) {
 // Registration Success
 //echo 'Registration successful <a href="login.php">Click here</a> to login';
 echo '<div class="alert alert-success">Registration successful!</div> <a href="login.php" class="btn btn-primary" style="float: right"> Login </a>';
    
 } else {
 // Registration Failed
 //echo 'Registration failed. Email or Username already exits please try again';
 echo '<div class="alert alert-danger">Registration failed. Email or Username already exits please try again</div>';
 }
 }
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<style><!--
 #container{width:400px; margin: 0 auto;}
--></style>

<script type="text/javascript" language="javascript">
 function submitreg() {
 var form = document.reg;
 if(form.name.value == ""){
 alert( "Enter name." );
 return false;
 }
 else if(form.uname.value == ""){
 alert( "Enter username." );
 return false;
 }
 else if(form.upass.value == ""){
 alert( "Enter password." );
 return false;
 }
 else if(form.uemail.value == ""){
 alert( "Enter email." );
 return false;
 }
 }
</script>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Student File Management System</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type="text/css" href="admin/css/bootstrap.css" />
		<link rel = "stylesheet" type="text/css" href="admin/css/style.css" />
            
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
</head>  
<body>
  
 <div class="col-sm-4 offset-sm-4" style="padding-top:125px"> 
    <div class="card">
        <div class="card-header text-sm-center" style="background-color:blue">
  Register
    </div>
  <div class="card-body" >     
<form action="" method="post" name="reg">
    
    <div class="form-group">
        <label for="exampleInputEmail1">Full Name</label><br>
   <input type="text" name="fullname" required="" />
   
  </div>
  
  <div class="form-group">
      <label for="passwd">Username</label><br>
    <input type="text" name="uname" required="" />
  </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label><br>
  <input type="email" name="uemail" required="" />
   
  </div>
  
  <div class="form-group">
      <label for="passwd">Password</label><br>
    <input type="password" name="upass" required="" />
  </div>
      
    <input class="btn btn-info" onclick="return(submitreg());" type="submit" name="submit" value="Register" />
      
    <a style="padding-left:5px "href="login.php">Already registered! Click Here!</a>  
    
    
</form>
       </div>
         
</div>
 </div>
 
    
</body>
</html>

