<?php
		
		session_start();
		$msg="";
		if(isset($_POST['login']) && isset($_POST['uid']) && isset($_POST['pwd']))
		{
			$uid= $_POST['uid'];
			$pwd= $_POST['pwd'];
			if($uid == 'paras' &&  $pwd == '123'){	
				$_SESSION['user']=$_POST['uid'];
				header("Location:home.php");
			
			}else{
				$msg = "Wrong UserName or Password!";
			}
		}
?>
		<html>
			<head>
				<title>Login Demo</title>
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			</head>
			<body>
				<div class="container">
					<form method="post">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="text" name='uid' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <label for="validationMsg">
						    	<?php 
						    		echo $msg;
						    	?>
						    </label>
						    
						  </div>
						  <div class="form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
						  </div>
						  <button type="submit" name="login" class="btn btn-primary">Submit</button>
						</form>
					</div>
			</body>
		</html>