<?php
class File{
   private $_supportedFormats = ['image/png','image/jpeg','image/jpg','image/gif','application/pdf','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/msword','application/rtf'];
   

    public function uploadFile($file)
    {
        if(is_array($file))
        {
            if(in_array($file['type'],$this->_supportedFormats))
            {
                move_uploaded_file($file['tmp_name'],'uploads/'.$file['name']);
             $title = $_POST["title"];
             $author = $_POST["uid"];
             $email = $_POST["email"];
             $file = rand(1000,10000)."-".$_FILES["file"]["name"];
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "filemanagement";
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
            //$maxsize = 5 * 1024 * 1024;
            //if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
             $sql = "INSERT into fileup(title,email,author,image)VALUES('$title','$email','$author','$file')";
             if(mysqli_query($conn,$sql))
            {
                 header("location:home.php");
                //echo"File Successfully Uploaded";
            }
            else
            {
                echo"Error occured";
            }
           
        }
         else
            {
                die('File format is not supported');
            }
        }
        else
        {
            die('No file was uploaded!');
        }
    }
}
?>

