<?php
include 'comment.php';
session_start();
include_once 'class.user.php';
$user = new User(); $uid = $_SESSION['uid'];
if (!$user->get_session()){
 header("location:login.php");
}

if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 }
?>
       
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:-580px">
   
        <a class="navbar-brand" href="home.php">Navigate</a>
             <div id="main-body">
    <h1 style="font-family: sans-serif;font-size:25px;padding-top: 25px;color: aqua">Hello <?php $user->get_fullname($uid); ?></h1>
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <div  style="float:right"id="header"><a href="home.php?q=logout">Logout</a></div>
    <div  style="float:right"id="header"><a href="home.php">Upload Files</a></div>
<div id="main-body">
    <h1 style="font-family: sans-serif;font-size:25px;padding-top: 25px;color: aqua">Hello <?php $user->get_fullname($uid); ?></h1>
</div>
<div id="footer"></div>
</div>


<!DOCTYPE html>
<html>
<head>
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
       <div class=""> 
           <h2 style="padding-left: 285px">Update File </h2>
        
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
                            $row = $obj->select_record("medicines",$where);
                            ?>
                        
                          <form method="post" action="action.php">
                            <table class="table table-hover">
                                <tr>
                                    <td><input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" ></td>
                                </tr>
                                
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" class="form-control" value="<?php echo $row["mediname"]; ?>" name="name" placeholder="Eneter quantity "></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td><input type="text" class="form-control" value="<?php echo $row["quantity"]; ?>" name="qty" placeholder="Eneter quantity "></td>
                                </tr>
                                <tr>
                                   
                                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="edit" value="Update" ></td>
                                </tr>
                            </table>
                        </form> 
                        
                        
                        <?php
                        
                          }else{
                              ?>
                        <form method="post" action="action.php">
                            <table class="table table-hover">
                                <tr>
                                    <td>Medicine Name</td>
                                    <td><input type="text" class="form-control" name="name" placeholder="Enetername "></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td><input type="text" class="form-control" name="qty" placeholder="Eneter quantity "></td>
                                </tr>
                                <tr>
                                   
                                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Store" ></td>
                                </tr>
                            </table>
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
                       <th>#</th>
                       <th>Medicine Name</th>
                       <th>Available Stock</th>
                       <th>&nbsp;</th>
                       <th>&nbsp;</th>
                   </tr>
                   
                   <?php
                   
                     $myrow=$obj->fetch_record("medicines");
                     foreach ($myrow as $row)
                     {
                         ?>
                   
                          <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["mediname"]; ?></td>
                            <td><b><?php echo $row["quantity"]; ?></b></td>
                            <td><a href="index.php?update=1&id=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a></td>
                            <td><a href="action.php?delete=1&id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
                        
                          </tr>
                     
                         <?php
                     }
                   
                   ?>
                   
                    
               </table>
           
           </div>
           
       </div>
    
    
    </div>
    
</body>
</html>
