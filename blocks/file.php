<?php
$file ="text.txt";
$branch = "Branch: ".$_POST['branch'];
$birthDate = "Birth Date: ".$_POST['birthDate'];
$name = "Name: ".$_POST['firstName'];
$lname  = "Last Name: ".$_POST['lastName'];
$email = "Email Address: ".$_POST['email'];
$selfie = "Image NAME: ".$_FILES['photo']['name'];
$phone = "Mobile Phone: ".$_POST['phone'];
$homePhone = "Home Phone: ".$_POST['homePhone'];
$br = "\n";
$body = $branch.$br.$name.$br.$lname.$br.$birthDate.$br.$email.$br.$selfie.$br.$phone;
if ($_POST['homePhone'] != "") {
   $body.=$br.$homePhone;
 }
file_put_contents($file, $body);
?>