<?php

// include('config.php');

// Passkey that got from link
$passkey=$_GET['passkey'];

$tbl_name1="temp_members_db";

// Retrieve data from table where row that match this passkey
$sql1="SELECT * FROM `$tbl_name1` WHERE `confirm_code`='$passkey'";
$result1=mysqli_query($con, $sql1);


// If successfully queried
if($result1){

// Count how many row has this passkey
$count=mysqli_num_rows($result1);

// if found this passkey in our database, retrieve data from table "temp_members_db"
if($count==1){
// echo"Inside the confirm IF.......";
$rows=mysqli_fetch_array($result1);
$name=$rows['name'];
$email=$rows['email'];
$password=$rows['password'];
$phone=$rows['phone'];

$tbl_name2="registered_members";

// Insert data that retrieves from "temp_members_db" into table "registered_members"
    $sql5="SELECT email FROM `$tbl_name2` WHERE `email`='$email'";
    $result5=mysqli_query($con, $sql5);
    if($result5 -> num_rows>0){
        echo"In UPDATE........";
        $sql4="UPDATE `$tbl_name2` SET `name`='$name',`email`='$email',`password`='$password',`phone`='$phone' WHERE `email`='$email'";
        $result2=mysqli_query($con, $sql4);
    }
    else{
        echo"In INSERT........";
        $sql2="INSERT INTO $tbl_name2(name, email, password, phone)VALUES('$name', '$email', '$password', '$phone')";
        $result2=mysqli_query($con, $sql2);
    }
    // $sql2="INSERT INTO $tbl_name2(name, email, password, country)VALUES('$name', '$email', '$password', '$country')";
    // $result2=mysqli_query($con, $sql2);
}

// if not found passkey, display message "Wrong Confirmation code"
else {
echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
if($result2){

echo "Your account has been activated";

// Delete information of this user from table "temp_members_db" that has this passkey
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
$result3=mysqli_query($con, $sql3);

}

}
?>