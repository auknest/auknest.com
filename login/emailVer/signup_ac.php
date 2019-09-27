<?php

include('config.php');

// table name
$tbl_name='temp_members_db';

// Random confirmation code
$confirm_code=md5(uniqid(rand()));

// values sent from form
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

// Insert data into database
$sql="INSERT INTO $tbl_name(confirm_code, name, email, password, phone)VALUES('$confirm_code', '$name', '$email', '$password', '$phone')"; 

$result=mysqli_query($con, $sql) or die(mysqli_error($con));

// if suceesfully inserted data into database, send confirmation link to email
// echo"...........................",$result;
if($result){

// ---------------- SEND MAIL FORM ----------------


// send e-mail to ...
$to=$email;

// Your subject
$subject="Your confirmation link here";

// From
$header="from: ss10hogale@gmail.com>";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="https://innolution.in/nest/auknest.com/auknest.com/login/emailVer/confirmation.php?passkey=$confirm_code";


// send email
$sentmail = mail($to,$subject,$message,$header);

// if your email succesfully sent

if($sentmail){
echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}
}


// if not found
else {
echo "Not found your email in our database";
}
?>