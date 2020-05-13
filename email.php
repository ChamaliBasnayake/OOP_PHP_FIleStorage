<?php

include "classes/class.phpmailer.php";
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->IsHTML(true);
$mail->Username=("filemanagement2020@gmail.com");
$mail->Password="0713857140";
$mail->SetFrom("filemanagement2020@gmail.com");
$mail->Subject=$_POST["title"];
$mail->Body=$_POST["author"];
$mail->AddAddress($_POST["email"]);
//$mail->File=$_POST["file"];
//$mail->File=rand(1000,10000)."-".$_FILES["file"]["name"];
if(!$mail->Send()){
		echo "Error";
	}
else{
		//echo "Messsage sent";
	}

?>
<?php
require 'uploads/class.file.php';
$fileupload = new File();
if(isset($_FILES['file'])){
    $fileupload ->uploadFile($_FILES['file']);
    
}
else{
    die('File was not submitted');
}
?>