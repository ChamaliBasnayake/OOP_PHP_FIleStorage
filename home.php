<?php
include 'action.php';
session_start();
include_once 'class.user.php';
$user = new User();
$uid = $_SESSION['uid'];
if (!$user->get_session()){
 header("location:login.php");
}

if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 
 }
 
 
 
 
?>

<!-- <nav class="navbar navbar-default navbar-fixed-top" style="background-color:white;">
		<div class="container-fluid">
			<label class="navbar-brand" id="title">Student File Management System</label>
		</div>
	</nav>-->
<div><h1 style="font-family: sans-serif;font-size:20px;padding-top: 25px;padding-left: 5px;color: blueviolet"> Hello <?php $user->get_fullname($uid); ?></h1></div>     
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:-580px">
   
        <a class="navbar-brand" href="home.php">Navigate</a>
             <div id="main-body">
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="home.php" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="float: right">
    <ul class="navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="home.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      
     
      
      <li class="nav-item" style="float:right" >
          <a class="nav-link" href="login.php" >Login </a>
      </li>
      <li class="nav-item" style="float:right" >
          <a class="nav-link" href="registration.php" >Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="commentadd.php">Add Notes</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="home.php?q=logout">Logout</a>
      </li>
     
    </ul>
  </div>
  
</nav> 

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<style>
 body{
 font-family:Arial, Helvetica, sans-serif;
 }
 h1{
 font-family:'Georgia', Times New Roman, Times, serif;
 }<!--
--></style>
<div id="container">
<!--    <div  style="float:right"id="header"><a href="home.php?q=logout">Logout</a></div>
    <div  style="float:right"id="header"><a href="commentadd.php">Add Notes</a></div>-->

<div id="footer"></div>
</div>


<!DOCTYPE html>
<html>
<head>
    <style>
  .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  -->
  
                 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
  


</head>
<body>
    <div  class="container">
        <div class="" > 
           <h2 style="padding-left: 285px;padding-top: 25px">Add New Files  </h2>
        
       </div>   
     </div>
    
    <div class="container" style="padding-top:65px">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="padding-top: 15px">Enter Details</div>
                    <div class="panel-body"style="padding-top: 25px">
                       
                        <?php
                       
                          if(isset($_GET["update"])){
                              $id = $_GET["id"] ?? null;
                              $where = array(
                                  "id" =>$id,
                                      );
                            $row = $obj->select_record("fileup",$where);
                            ?>
                        
                          <form method="post" action="action.php">
                            <table class="table table-hover">
                                
                                <tr>
                                    <td><input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" ></td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td><input type="text" class="form-control" value="<?php echo $row["title"]; ?>" name="title" placeholder="Eneter Title "></td>
                                </tr>
                                <tr>
                                    <td>File</td>
                                    <td><input type="text" class="form-control" value="<?php echo $row["image"]; ?>" name="image" placeholder="Upload file "></td>
                                </tr>
                                <tr>
                                   
                                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="edit" value="Update" ></td>
                                </tr>
                            </table>
                        </form> 
                        
                        
                        <?php
                        
                          }else{
                              ?>
                        
<!--                            <table class="table table-hover">
                               
                                <tr>
                                  
                                    <td><input type="hidden" class="form-control" name="email" placeholder="Eneter Title " value="<?php echo $user->get_email($uid); ?>" ></td>
                                
                                  
                                    <td><input type="hidden" class="form-control" name="uid" placeholder="Eneter Title " value="<?php echo $uid; ?>" ></td>
                                </tr>
                                <tr>
                                    <td>Upload Title</td>
                                    <td><input type="text" class="form-control" name="title" placeholder="Enter Title "></td>
                                </tr>
                                <tr>
                                    <td>File</td>
                                    <td><input type="text" class="form-control" name="image" placeholder="File "></td>
                                </tr>
                                <tr>
                                   
                                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Add" style="float:right"></td>
                                </tr>
                            </table>-->
                        <form action="email.php" id="form-box"method="POST"enctype="multipart/form-data">
                             
                                  
                            <input type="hidden" class="form-control" name="email" placeholder="Eneter Title " value="<?php echo $user->get_email($uid); ?>" >
                                
                                  
                            <input type="hidden" class="form-control" name="uid" placeholder="Eneter Title " value="<?php echo $uid; ?>" >
                                
                            <input type="text" name="title" class="inp" placeholder="Title of the File....." required ><br><br>
                            <input type="hidden" name="to" class="inp" placeholder="To:Email....." required >
                            <input type="text" name="author" class="inp" placeholder="Author....." required ><br><br>
                            <input type="file" name="file" class="inp" placeholder="PDF,DOC,DOCX,PNG,JPEG,JPG," required ><br><br>
                <input type="submit" name="submit" class="sub-btn" value="UPLOAD">
            
                        </form>
                        
                                
                        
                             <?php
                          }
                        
                        ?>
                        
                      
                    </div>
                    
                </div>
            </div>    
       </div>
    
    </div>
    
    <div class="container">
       <div class="row">
           <diiv class="col-md-2"></div>
           <div class="col-md-8">
               <table class="table table-bordered">
                   <tr>
                       <th>Number</th>
                       <th>Title</th>
                       <th>Image</th>
                       <th>Action</th>
                       
                   </tr>
                   
                   <?php
                   
                     $myrow=$obj->fetch_record("fileup");
                     foreach ($myrow as $row)
                     {
                         ?>
                   
                          <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["title"]; ?></td>
                            <td><b><?php echo $row["image"]; ?></b></td>
                            <td><a href="home.php?update=1&id=<?php echo $row["id"]; ?>" class="btn btn-info">Update File</a>
                                <a href="action.php?delete=1&id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                                <a href="downloads.php?update=1&id=<?php echo $row["id"]; ?>&uid=<?php echo $uid ?>" class="btn btn-primary">Download</a></td>
                        
                          </tr>
                     
                         <?php
                     }
                   
                   ?>
                   
                    
               </table>
           
           </div>
           
       </div>
    
    
    </div>
    <button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
    <form action="./chatController.php" class="form-container" method="post">
    
<text><?php 
if(isset($_GET['answer'])){ 
        $answer = unserialize(urldecode($_GET['answer']));
        echo $answer."<br><br><br>";
    }else{
        echo "Hi, I am Sara. Can I help you?<br><br><br>";
    }?></text>
    <label for="msg"><b>Question</b></label>
    <textarea placeholder="Type message.." name="comments" required></textarea>
    <button type="submit" class="btn" name="submit">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>
