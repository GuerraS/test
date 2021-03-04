
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets\bootstrap3\css\bootstrap.min.css">
	<link rel="stylesheet" href="assets\css\style.css">
</head>
<body>

<div class="container">
<div class="text-center">
<h2>SIGN IN</h2>
   <div class="col-md-12" id="container-login">
		<form id="formLogin" action="">
			<div class="form-group">
				<label for="usernamelogin">Username</label>
				<input type="text" class="form-control" name="usernamelogin" id="usernamelogin" aria-describedby="emailHelp" placeholder="Username" required>
				
			</div>
			<div class="form-group">
				<label for="passwordlogin">Password</label>
				<input type="password" class="form-control" name="passwordlogin" id="passwordlogin" placeholder="Password" required>
			</div>
			<button type="button" id="btn-login" class="btn btn-primary">Login</button>
			<p class="message"> <a href="register.php">Create account</a></p>
		</form>
   </div>
</div>

   
    
</div>
<script src="assets\js\jquery-3.2.1.js"></script>
<script src="assets\bootstrap3\js\bootstrap.js"></script> 
<script src="assets\plugins\jquery-validation-1.19.3\dist\jquery.validate.min.js"></script>
<script src="assets\js\login.js?1500"></script> 
</body>
</html>