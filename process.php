<?php 
 	//get values passe from form in login.php file
	$username = $_POST['user'];
	$password = $_POST['pass'];
    
	//to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password); 
    
	//connect to the server and select database
	$con= mysqli_connect("localhost", "root", "", 'login');

    //Query the database for user
    $sql="select * from users where username = '$username' and password = '$password'";
	$result = mysqli_query($con, $sql)
	          or die("Failed to query database ".mysqli_error());
              $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	if($row['username'] == $username && $row['password'] == $password)
	{
	  echo "Login success!!! WELCOME".$row["username"];
	}
	  else {
	    echo "Failed to login!";
	}

?>