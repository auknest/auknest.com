<?php
        // values sent from form
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $password=base64_encode($password);//Encrypting the password
        echo $email;
        echo $password;
        
        try {
                $host="india5.ownmyserver.com";// Host name
                $username="innoluti_root"; // Mysql username
                $dbpassword="zlNQjeOR(3~v"; // Mysql password
                $db_name="innoluti_testing"; // Database name
                
                //Conection to the Database
                $con=new PDO("mysql:host=$host;dbname=$db_name", $username,  $dbpassword);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                //Storing the login Details in "login_details" table
                    $tbl_name="login_details";
                    $stmt = $con->prepare("SELECT email FROM `$tbl_name` WHERE `email`='$email'");
                    $resultt=$stmt->execute();
                    
                    
                    if($stmt -> rowCount()>0){
                        // echo"In UPDATE........";
                        $stmt4 = $con->prepare("UPDATE `$tbl_name` SET `password`='$password' WHERE `email`='$email'");
                        $result2=$stmt4->execute();
                        
                        if($result2){
                            echo "Your Password has been Changed";
                        }
                        else{
                            echo "Something Went Wrong Please try again later!";
                        }
                    }
                    else{
                        echo"Your Email has been not found in our Database! ";
                    }
                    
            }
            catch(Exception $e) {
                echo "INto cACHE.";
                echo $e;
            }

?>