<?php $message="";?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="inlogcheck.php" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="login" value="Submit">
<<<<<<< HEAD
</form> 
=======
</form>
>>>>>>> d12276114663c5848d8ac1a23422a03e8ae36e1f
</body>
</html>