<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head> 
	  <link rel="stylesheet" href="../css/bootstrap.min.css">
	  <style type="text/css">
		.container {
			width: 100%;
		}
		
		#profile {
			height: 450px;
			background: whitesmoke;
		}
		
		#pPicture {
			width: 20%;
			height: 50%;
		}
		
		.img-circle {
			border-radius: 50%
		}
		
	   </style>
</head>
<body>
	<div class="container">
		<div>
			<h1 align="center">Welcome to O-Auth Home Page</h1>
			
		</div>
		<div class="row" id="profile" style="background: ">
			<div align="center">
				<img id="pPicture" class="img-circle" src="<?=$_SESSION['user']['picture']; ?>">
			</div>
			<div align="right">
				<p><strong><?=$_SESSION['user']['name']; ?></strong></p>
				<p><strong><?=$_SESSION['user']['email']; ?></strong></p>
				<p><strong><?=$_SESSION['user']['gender']; ?></strong></p>
				<p><a href="<?=$_SESSION['user']['pageLink']; ?>">Visit My Page</a></p>
			</div>
			<div align="left">
				<a href="logout.php">Logout</a>
			</div>
		</div>
	</div>
</body>
</html>
	