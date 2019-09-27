<?php

        $email=$_REQUEST['email'];
        echo $email;
        
        try {
                $host="india5.ownmyserver.com";// Host name
                $username="innoluti_root"; // Mysql username
                $dbpassword="zlNQjeOR(3~v"; // Mysql password
                $db_name="innoluti_testing"; // Database name
                
                //Conection to the Database
                $con=new PDO("mysql:host=$host;dbname=$db_name", $username,  $dbpassword);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                //Checking Details
                    $tbl_name3="login_details";
                    $stmt6 = $con->prepare("SELECT email FROM `$tbl_name3` WHERE `email`='$email'");
                    $resultt=$stmt6->execute();
                    // $sql5="SELECT email FROM `$tbl_name2` WHERE `email`='$email'";
                    // $result5=mysqli_query($con, $sql5);
                    // echo"Row count:",$stmt5 -> rowCount();
                    echo $resultt;
                    if($stmt6 -> rowCount()>0){
                        if($resultt){
                            // ---------------- SEND MAIL FORM ----------------
                            // send e-mail to ...
                            echo $email;
                            $to=$email;
                            
                            // Your subject
                            $subject="Reset Password Request";
                            
                            // From
                            $header="from: info@auknest.com>";
                            
                            // Your message
                            $message="Your Reset Password Request link \r\n";
                            $message.="Click on this link to reset your password \r\n";
                            $message.="https://innolution.in/nest/auknest.com/auknest.com/index.php?email=$to";
                            
                            
                            // send email
                            // $sentmail = mail($to,$subject,$message,$header);
                            
                            // if your email succesfully sent
                            
                            if(mail($to,$subject,$message,$header)){
                            echo "Your Reset Password Link Has Been Sent To Your Email Address.";
                            }
                            else {
                            // echo $email;
                            // echo $to;
                            echo "Cannot send Reset Password link to your e-mail address";
                            }
                        }
                        else{
                            echo"Something Went Wrong, Please try again later!";
                        }
                    }
                    // if not found
                    else {
                    echo "Not found your email in our database";
                    }
            }//try Ends
            catch(Exception $e) {
                echo "INto cACHE.";
                echo $e;
            }

?>