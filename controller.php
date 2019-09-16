
<?php
session_start();
error_reporting(E_ALL & ~ E_NOTICE);
require ('textlocal.class.php');

class Controller
{
    function __construct() {
        
        $this->processMobileVerification();
    }
    function processMobileVerification()
    {

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
}
$controller = new Controller();
?>