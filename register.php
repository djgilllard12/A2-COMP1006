<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome - Login</title>
		<!-- BOOTSTRAP -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div id = "container">
			<header>
				<h1>
					COMP1054 - Assignment 2
				</h1>
				<!-- Navigation section -->
				<nav class="navbar navbar-inverse">
					<ul class="nav navbar-nav">
						<li><a href="admins.php">Adminstrators</a></li>
						<li><a href="register.php">Register</a></li>
					</ul>
				</nav>
			</header>
			<!-- Form section -->
			<form action="process-register.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>
</html>
