<!DOCTYPE html>
<html>
<head>
     <title>Login page</title>
     <line rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
     <div id="frm">
	<form action="process.php" method="POST">
	  <P>
	   	<lable>Username:</lable>
		<input type="text"id="username" name="user"/>
	  </p>
          <p>
		<lable>Password:</lable>
		<input type="password" id="password" name="pass"/>
	  </p>
	  <p>
		<input type="submit" id="btn" value="login"/>
	  </p>
        </form>
      </div>
</body>
</html>