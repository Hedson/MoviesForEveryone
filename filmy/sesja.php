<?php

	session_start();

	if(isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany']==true))
	{
		header('Location: rejestracja/index.php');
		exit();
	}
	
?>