



<?php

session_start();
	include_once 'class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) {
		extract($_REQUEST);
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
                            if($emailusername=="admin@gmail.com"&&$password=="admin123"){
                                header("Location:adminPanel.php");
                            }
                            else{
                                 header("location:home.php");
                            }
	        // Registration Success
	      
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
        
 
 ?>   


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style><!--
            #container{width:400px; margin: 0 auto;}

--></style>

<script type="text/javascript" language="javascript">

            function submitlogin() {
                var form = document.login;
				if(form.emailusername.value == ""){
					alert( "Enter email or username." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}
			}

</script>



<!--<span style="font-family: 'Courier 10 Pitch', Courier, monospace; font-size: 13px; font-style: normal; line-height: 1.5;"><div id="container"></span>

<h1 style="margin-left:50px">Student File Management System</h1>
<h3 style="margin-top:85px">Login Here</h3>
 -->


<!DOCTYPE html>
<html lang = "en">
	<head>
            <title style="margin-left:485px">Student File Management System</title>
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
    <h1 style="margin-left:145px;margin-top: 65px">Student File Management System</h1>
    <div class="col-sm-4 offset-sm-4" style="padding-top:125px"> 
    <div class="card">
        <div class="card-header text-sm-center" style="background-color:lightseagreen">
  Login
    </div>
  <div class="card-body" >     
<form action="" method="post" name="login">

        
  <div class="form-group">
      <label for="exampleInputEmail1">Email address</label><br>
        <input  type="text" name="emailusername" required="" />
   
  </div>
  
  <div class="form-group">
      <label for="passwd">Password</label><br>
     <input type="password"  name="password" required="" />
  </div>
      
<input class="btn btn-primary float-sm-left"onclick="return(submitlogin());" type="submit" name="submit" value="Login" />
      
      
<a href="registration.php"style="float:right;padding-top:6px">Register new user</a>
      

</form>
     
       </div>
         
</div>
 </div>
 
</div>

</body>
</html>