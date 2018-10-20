<?php
	session_start();
	unset($_SESSION);
	session_destroy();
	echo "Logout successfully. <a href='index.php'>Click here to login</a>";
?>