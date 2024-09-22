<?
$name = $_POST{'name'};
$email = $_POST{'pavanjohny777@gmail.com'};
$phone = $_POST{'phone'};
$subject = $_POST{'subject'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Phone: ".$phone."
Subject: ".$subject."
Message: ".$message."

";

mail ("pavanjohny777@gmail.com" , "New Message", $email_message);
header("location: ../mail-success.html");
?>


