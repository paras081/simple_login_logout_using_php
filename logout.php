<?php

 session_start();

 	unset($_SESSION['user']);
 	echo "Logging out...";
	header('Refresh: 2; URL=index.php');

?>
