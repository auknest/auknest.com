
<?php
session_start();
error_reporting(E_ALL & ~ E_NOTICE);
require ('textlocal.class.php');
// include('config.php');

class Controller
{
    function __construct() {
        
        $this->processMobileVerification();
        // $this->processEmailVerification();
    }
        
    
    function processMobileVerification()
    {
        //Email Verification 
        echo "In Email Verification Section...";
        $tbl_name='temp_members_db';
        
        // Random confirmation code
        $confirm_code=md5(uniqid(rand()));
        
        // values sent from form
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['mobile_number'];
        $password=$_REQUEST['password'];
        $password=base64_encode($password);//Encrypting the password
        echo $name;
        echo $email;
        echo $phone;
        echo $password;
        
        try {
                $host="india5.ownmyserver.com";// Host name
                $username="innoluti_root"; // Mysql username
                $dbpassword="zlNQjeOR(3~v"; // Mysql password
                $db_name="innoluti_testing"; // Database name
                
                //Conection to the Database
                $con=new PDO("mysql:host=$host;dbname=$db_name", $username,  $dbpassword);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                // echo "INTO try";
                //Storing the login Details in "login_details" table
                    $tbl_name3="login_details";
                    $stmt6 = $con->prepare("SELECT email FROM `$tbl_name3` WHERE `email`='$email'");
                    $resultt=$stmt6->execute();
                    // $sql5="SELECT email FROM `$tbl_name2` WHERE `email`='$email'";
                    // $result5=mysqli_query($con, $sql5);
                    // echo"Row count:",$stmt5 -> rowCount();
                    
                    if($stmt6 -> rowCount()>0){
                        // echo"In UPDATE........";
                        $stmt4 = $con->prepare("UPDATE `$tbl_name3` SET `name`='$name',`email`='$email',`password`='$password',`phone`='$phone' WHERE `email`='$email'");
                        $result2=$stmt4->execute();
                        // $sql4="UPDATE `$tbl_name2` SET `name`='$name',`email`='$email',`password`='$password',`phone`='$phone' WHERE `email`='$email'";
                        // $result2=mysqli_query($con, $sql4);
                    }
                    else{
                        // echo"In INSERT........";
                        $stmt2 = $con->prepare("INSERT INTO $tbl_name3(name, email, password, phone)VALUES('$name', '$email', '$password', '$phone')");
                        $result2=$stmt2->execute();
                        // $sql2="INSERT INTO $tbl_name2(name, email, password, phone)VALUES('$name', '$email', '$password', '$phone')";
                        // $result2=mysqli_query($con, $sql2);
                    }
                
                // Insert data into database
                $stmt = $con->prepare("INSERT INTO $tbl_name(confirm_code, name, email, password, phone)VALUES('$confirm_code', '$name', '$email', '$password', '$phone')");
                // echo "INTO try1";
                
                $result = $stmt->execute();
                // echo "INTO try2";
                // echo "connection...........";
            }
            catch(Exception $e) {
                echo "INto cACHE.";
                echo $e;
            }
        if($result){
        
        // ---------------- SEND MAIL FORM ----------------
        
        
        // send e-mail to ...
        $to=$email;
        
        // Your subject
        $subject="Your confirmation link here";
        
        // From
        $header="from: info@auknest.com>";
        
        // Your message
        $message="Your Comfirmation link \r\n";
        $message.="Click on this link to activate your account \r\n";
        $message.="https://innolution.in/nest/auknest.com/auknest.com/confirmation.php?passkey=$confirm_code";
        
        
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
        
        //end of Email code
        
        
        $action = isset($_REQUEST['action'])?$_REQUEST['action']:"";
     
        switch ($action) {

            case "send_otp":
            echo "************Send otp************";

                $mobile_number = $_REQUEST['mobile_number'];
                echo $mobile_number;
                $apiKey = urlencode('FEBlmUXPXVM-A511Cv4LApEAmllUALNLPpugv4wVrJ');
                $Textlocal = new Textlocal(false, false, $apiKey);

                $numbers = array(
                    $mobile_number
                );
                $sender = 'TXTLCL';
                $otp = rand(100000, 999999);
                $_SESSION['session_otp'] = $otp;
                // sessionStorage.setItem("session_otp", $otp);    

                $message = "Your One Time Password is " . $otp;
                

                try{
                    echo "************\n";

                    $response = $Textlocal->sendSms($numbers, $otp, $sender);
                    echo "************";
                    echo $response;
                    // require_once ("verification-form.php");
                    exit();
                }catch(Exception $e){
                    die('Error: '.$e->getMessage());
                }
                break;
                
            case "verify_otp":
                echo "Wthin verify otp function...";


                $otp = $_REQUEST['otp'];
             
                if ($otp == $_SESSION['session_otp']) {
                    unset($_SESSION['session_otp']);
                    echo json_encode(array("type"=>"success", "message"=>"Your mobile number is verified!"));
                } else {
                    echo json_encode(array("type"=>"error", "message"=>"Mobile number verification failed"));
                }
                break;
        }
    }
    
    //****Email verification Code**** 
    
    // function processEmailVerification(){
    //     // $this->processMobileVerification();
    //     // table name.
    //     // console.log("In Email Verification Section......");
    //     echo "In Email Verification Section...";
    //     $tbl_name='temp_members_db';
        
    //     // Random confirmation code
    //     $confirm_code=md5(uniqid(rand()));
        
    //     // values sent from form
    //     $name=$_REQUEST['name'];
    //     $email=$_REQUEST['email'];
    //     $phone=$_REQUEST['mobile_number'];
    //     $password=$_REQUEST['password'];
    //     echo $name;
    //     echo $email;
    //     echo $phone;
    //     echo $password;
        
    //     try {
    //             $host="india5.ownmyserver.com";// Host name
    //             $username="innoluti_root"; // Mysql username
    //             $dbpassword="zlNQjeOR(3~v"; // Mysql password
    //             $db_name="innoluti_testing"; // Database name
                
    //             //Conection to the Database
    //             $con=new PDO("mysql:host=$host;dbname=$db_name", $username,  $dbpassword);
    //             $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //             // echo "INTO try";
                
    //             // Insert data into database
    //             $stmt = $con->prepare("INSERT INTO $tbl_name(confirm_code, name, email, password, phone)VALUES('$confirm_code', '$name', '$email', '$password', '$phone')");
    //             // echo "INTO try1";
                
    //             $result = $stmt->execute();
    //             // echo "INTO try2";
    //             // echo "connection...........";
    //         }
    //         catch(Exception $e) {
    //             echo "INto cACHE.";
    //             echo $e;
    //         }
    //     if($result){
        
    //     // ---------------- SEND MAIL FORM ----------------
        
        
    //     // send e-mail to ...
    //     $to=$email;
        
    //     // Your subject
    //     $subject="Your confirmation link here";
        
    //     // From
    //     $header="from: ss10hogale@gmail.com>";
        
    //     // Your message
    //     $message="Your Comfirmation link \r\n";
    //     $message.="Click on this link to activate your account \r\n";
    //     $message.="https://innolution.in/nest/auknest.com/auknest.com/confirmation.php?passkey=$confirm_code";
        
        
    //     // send email
    //     $sentmail = mail($to,$subject,$message,$header);
        
    //     // if your email succesfully sent
        
    //     if($sentmail){
    //     echo "Your Confirmation link Has Been Sent To Your Email Address.";
    //     }
    //     else {
    //     echo "Cannot send Confirmation link to your e-mail address";
    //     }
    //     }
        
        
    //     // if not found
    //     else {
    //     echo "Not found your email in our database";
    //     }
    // }
   
}
$controller = new Controller();

?>