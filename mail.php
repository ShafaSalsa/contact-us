<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$telepon = $_POST['telepon'];
$to = "shafasalsabila@smkwikrama.sch.id";
$subject = "MAIL FROM WEBSITE";
$TXT = "Nama = " . $name . "\r\n Email = " . $email . "\r\n Pesan = " . $message . "\r\n Telepon = " . $telepon;
$headers = "From: noreply@yoursite.com" . "\r\n" . 
"CC: somebodyelse@example.com";
if($email!=NULL){
	mail($to, $subject, $TXT, $headers);
}
//redirect
header("Location:index.html");

?>