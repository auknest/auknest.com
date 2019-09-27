<?php

    // include('config.php');
    
    // Passkey that got from link
    $passkey=$_GET['passkey'];
    
    $tbl_name1="temp_members_db";
    try {
            $host="india5.ownmyserver.com";// Host name
            $username="innoluti_root"; // Mysql username
            $dbpassword="zlNQjeOR(3~v"; // Mysql password
            $db_name="innoluti_testing"; // Database name
            
            //Conection to the Database
            $con=new PDO("mysql:host=$host;dbname=$db_name", $username,  $dbpassword);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            
            // Retrieve data from table where row that match this passkey
            $stmt = $con->prepare("SELECT * FROM `$tbl_name1` WHERE `confirm_code`='$passkey'");
            $result1 = $stmt->execute();
            
            // Retrieve data from table where row that match this passkey
            // $sql1="SELECT * FROM `$tbl_name1` WHERE `confirm_code`='$passkey'";
            // $result1=mysqli_query($con, $sql1);


            // If successfully queried
            if($result1){
                // Count how many row has this passkey
                // $count=mysqli_num_rows($result1);
                $count = $stmt->rowCount();
                // if found this passkey in our database, retrieve data from table "temp_members_db"
                if($count==1){
                    $rows=$stmt->fetch();
                    $name=$rows['name'];
                    $email=$rows['email'];
                    $password=$rows['password'];
                    $phone=$rows['phone'];
                    $confirm_code=$rows['confirm_code'];
                    
                    $tbl_name2="registered_members";
                    
                    // Insert data that retrieves from "temp_members_db" into table "registered_members"
                    $stmt5 = $con->prepare("SELECT email FROM `$tbl_name2` WHERE `email`='$email'");
                    $result5=$stmt5->execute();
                    // $sql5="SELECT email FROM `$tbl_name2` WHERE `email`='$email'";
                    // $result5=mysqli_query($con, $sql5);
                    // echo"Row count:",$stmt5 -> rowCount();
                    
                    if($stmt5 -> rowCount()>0){
                        // echo"In UPDATE........";
                        $stmt4 = $con->prepare("UPDATE `$tbl_name2` SET `confirm_code`='$confirm_code',`name`='$name',`email`='$email',`password`='$password',`phone`='$phone' WHERE `email`='$email'");
                        $result2=$stmt4->execute();
                        // $sql4="UPDATE `$tbl_name2` SET `name`='$name',`email`='$email',`password`='$password',`phone`='$phone' WHERE `email`='$email'";
                        // $result2=mysqli_query($con, $sql4);
                    }
                    else{
                        // echo"In INSERT........";
                        $stmt2 = $con->prepare("INSERT INTO $tbl_name2(confirm_code, name, email, password, phone)VALUES('$confirm_code', '$name', '$email', '$password', '$phone')");
                        $result2=$stmt2->execute();
                        // $sql2="INSERT INTO $tbl_name2(name, email, password, phone)VALUES('$name', '$email', '$password', '$phone')";
                        // $result2=mysqli_query($con, $sql2);
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
                // $msgDiv.html("Your account has been activated");
                
                echo "Your account has been activated";
                
                $yourURL="https://innolution.in/nest/auknest.com/auknest.com/index.php?confirm_code=$passkey";
                echo ("<script>location.href='$yourURL'</script>");
                
                
                // Delete information of this user from table "temp_members_db" that has this passkey
                $stmt3 = $con->prepare("DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'");
                $result3=$stmt3->execute();
                // $sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
                // $result3=mysqli_query($con, $sql3);
                
                }
            }
        }
        catch(Exception $e) {
            // echo "INto cACHE.";
            echo $e;
        }
?>