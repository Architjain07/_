<?php
     session_start();
	 
	 $db = mysqli_connect("localhost", "root","","authentication");

?>
<!DOCTYPE html>
<html>
<head>
       <title>Register ,Login and logout user my sql</title>
</head>
<body>
<div class="header">
    <h1>Register ,Login and logout user my sql</h1>

</div>

<form method="post" action="register.php">
      <table>
	       <tr>
		       <td>Username:</td>
			   <td><input type="text" name="user" class="textInput"></td>
		   
	       </tr>
		   <tr>
		       <td>Email:</td>
			   <td><input type="email" name="email" class="textInput"></td>
		   
	       </tr>
		   <tr>
		       <td>Password:</td>
			   <td><input type="password" name="password" class="textInput"></td>
		   
	       </tr>
		   <tr>
		       <td>Password:</td>
			   <td><input type="password" name="password2" class="textInput"></td>
		   
	       </tr>
		     <tr>
		       <td></td>
			   <td><input type="submit" name="register_btn" class="Register"></td>
		   
	       </tr>
	  </table>

</form>
</body>
</html>