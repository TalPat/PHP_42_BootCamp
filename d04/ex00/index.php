<?php

	session_start();
	if ($_GET[submit] == "OK")
	{
		if ($_GET[login] && $_GET[passwd])
		{
			$_SESSION[login] = $_GET[login];
			$_SESSION[passwd] = $_GET[passwd];
		}
	}
	if ($_SESSION[login] && $_SESSION[passwd])
	{
		$login = $_SESSION[login];
		$passwd = $_SESSION[passwd];
	}
	else
	{
		$login = "";
		$passwd = "";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>D04 Ex00</title>
    <style>
    </style> 
</head>

<body>
    <form action="" method="GET">
		Username: <input type="text" name="login" placeholder="login" value="<?php echo($login)?>"><br>
		Password: <input type="text" name="passwd" placeholder="password" value="<?php echo($passwd)?>"><br>
		<input type="submit" name="submit" value="OK">
	</form>
</body>
</html>
