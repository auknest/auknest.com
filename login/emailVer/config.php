<?php

$host="india5.ownmyserver.com";// Host name
$username="innoluti_root"; // Mysql username
$password="zlNQjeOR(3~v"; // Mysql password
$db_name="innoluti_testing"; // Database name


//Connect to server and select database.
$con=mysqli_connect("$host", "$username", "$password", "$db_name");
if($con){
    echo "Connection Successfully \r\n";
}
else{
    echo "Cannot connect";
}
// $con=mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect to server");
// mysql_select_db("$db_name")or die("cannot select DB");

?>