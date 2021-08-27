<?php 
session_start();?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html;">
<meta charset="UTF-8">
<title>LOG IN</title>
</head>
<body>
<form action="check.php" method="get" name="login">
<label for="user">User name </label>
<input type="text" name="user"><br><br>
<label for="pass">Password</label>
<input type="password" name="pass"><br>
<img src="captcha.php">
<input type="text" name="cap"><br>
<button>submit</button>
</form>
<?php
if(isset($_SESSION['flash']))
{echo "<p>".$_SESSION['flash']."</p>";
unset($_SESSION['flash']);
}?>
</body>
</html>
