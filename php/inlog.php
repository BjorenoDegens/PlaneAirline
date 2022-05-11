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
</form>
</body>
</html>