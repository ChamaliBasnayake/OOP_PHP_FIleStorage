<?php
require 'class.file.php';
$fileupload = new File();
if(isset($_FILES['file'])){
    $fileupload ->uploadFile($FILES['file']);
    
}
else{
    die('File was not submitted');
}
?>