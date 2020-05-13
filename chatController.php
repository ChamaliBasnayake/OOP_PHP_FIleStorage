<?php
require_once('./dbConnection.php');
$conn = new dbFunction();// create object to call dbFunction class
if (isset($_GET['del'])) {
                   global $conn;
	$id = $_GET['del'];
                   $conn->delData($id);
}
if(isset($_POST['insert'])){ 
    global $conn;
    $data = array(
                    "question" => $_POST['question'],
                    "answer" => $_POST['answer'],
                    "active"=>$_POST['active']
                );
    $conn->insertData($data); 
} 
if(isset($_POST['update'])) {
    global $conn;
    $data = array(
                    "id" => $_POST['id'],
                    "question" => $_POST['question'],
                    "answer" => $_POST['answer'],
                    "active"=>$_POST['active']
                );
    $conn->updateData($data);          
}

if(isset($_POST['comments'])){ 
  $input = $_POST['comments']; 

  $answer = $conn->searchChat($input);
  header("Location: ./home.php?answer=".urlencode(serialize($answer))); 
  
} 