<?php
require_once('./dbConnection.php');
$conn = new dbConnection();
 
class dbFunction extends dbConnection{
 
    public function getAllData(){
        global $conn;
        $sql = "Select * from question";
        $result = mysqli_query($conn->connection, $sql);
        return $result;  
    }
    function searchChat($input){
    global $conn;
    $string = $input;
    $sql = "SELECT * FROM `question` where active= '1'";
    $result = mysqli_query($conn->connection, $sql);
    $count = mysqli_num_rows($result);
    $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $i++;
             $substring = $row['question'];
        if(strpos($string, $substring) !== false){
            return  $row['answer'] . "<br>";
        }
        elseif($i==$count){
            self:: addQuestion($input);
            return 'Sorry';
           
                    }
       }
}

public function addQuestion($input){
     global $conn;
        $sql = "INSERT INTO `question`(`question`, `active`) VALUES ('$input','0')";
   // echo $sql;
    if (mysqli_query($conn->connection, $sql)) {
     //   return "New record created successfully";
    } else {
      //  return "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
public function delData($id){
    global $conn;
    mysqli_query($conn->connection, "Delete from question WHERE id='$id'");
    header('Location: ./chatBack.php');
}
 
public function insertData(array $data){
    global $conn;
    mysqli_query($conn->connection, "INSERT INTO question (question, answer, active) values ('$data[question]', '$data[answer]','$data[active]')");
    header('Location: ./chatBack.php');
}

public function updateData(array $data){
    global $conn;
    mysqli_query($conn->connection, "UPDATE question SET question='$data[question]', answer='$data[answer]',active='$data[active]' WHERE id='$data[id]'");
    header('Location: ./chatBack.php');
}
    
}
