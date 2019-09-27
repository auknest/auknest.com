<?php

$host="india5.ownmyserver.com";// Host name
$user="innoluti_root"; // Mysql username
$dbpassword="zlNQjeOR(3~v"; // Mysql password
$db_name="innoluti_testing"; // Database name

function connectDB(){
    $con=new PDO("mysql:host=$host;db_name=$db_name", $username,  $password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try{
        if($con){
            echo "Connection Successfully \r\n";
            return $con;
        }
        else{
            echo "Cannot connect";
        }
    }
    catch(Exception $e){
        echo"Into Catch Block";
        echo $e;
    }
}
//Connect to server and select database.
// $con=mysqli_connect("$host", "$username", "$password", "$db_name");
// $con=new PDO("mysql:host=$host;db_name=$db_name", $username,  $password);
// $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// try{
//     if($con){
//         echo "Connection Successfully \r\n";
//         return $con;
//     }
//     else{
//         echo "Cannot connect";
//     }
// }
// catch(Exception $e){
//     echo"Into Catch Block";
//     echo $e;
// }
// $con=mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect to server");
// mysql_select_db("$db_name")or die("cannot select DB");

?>