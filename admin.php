<?php
$user_name = $_POST['username'];
$user_password = $_POST['password'];
$password = md5($user_password);

if ($user_name == '1206067148')
{
	if ($password == '793b899a4f8fdf8109b9b0e71aa0f28e')
	{
		// $_session = 'LOGIN';
		header("Location:index.php");
	}
	else
	{
		header("Location:ER.php");
	}
}
else
{
	header("Location:ER.php");
}
?>
