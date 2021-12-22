<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login For Administrator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="main-content">
		<div class="container">
			<div class="d-none d-sm-none d-md-block">
			</div>
			<div class="login-card d-flex rounded-lg overflow-hidden bg-white">
				<div class="login-message d-none d-sm-none d-md-flex flex-column justify-content-center p-5">
					<img src="img/admin-login.png" alt="Welcome" class="img-fluid mb-3">
					<h4>Welcome back, Administrator</h4>
					<p>Login to access the management system</p>
				</div>
				<div class="login-body">
					<div class="login-body-wrapper mx-auto">
						<h1 class="text-center text-uppercase mb-3 text-primary">Login</h1>
						<div class="form-group">
							<label for="email">Email</label>
							<form class="form-signin" action="process-login-admin.php" method="post">
							<input type="email" class="form-control form-control-lg" name="email" id="email"
								aria-describedby="helpId" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control form-control-lg" name="password" id="password"
								aria-describedby="helpId" placeholder="****">
							<a href="#"><br>Forgot password?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg" style="margin-top:45px;" name="btnlogin" >Login</button>
					</div>
                  </form>
				</div>
			</div>
		</div>
	</section>

	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
</body>
</body>
</html>