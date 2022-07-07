<?php

 session_start();

 if(isset($_SESSION['user'])){

?>


 	<html>
 	<head>
				<title>Login Demo</title>
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			</head>
 		<body>
 			<header>Welcome <?php echo $_SESSION['user']; ?></header>

 			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			 
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="page2.php">page2</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="logout.php">Logout</a>
			      </li>
			    </ul>
			  </div>
			</nav> 			
 		</body>

 	</html>

 <?php
 	}else{

 		header("Location:index.php");
	}

 ?>