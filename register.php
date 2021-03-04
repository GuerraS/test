
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="assets\bootstrap3\css\bootstrap.min.css">
		<link rel="stylesheet" href="assets\css\style.css">
</head>
<body>

<div class="container">
<div class="text-center">
<h2>REGISTER</h2>
   <div class="col-md-12" id="container-login">
			<form id="createUser" action="/">
				<div class="form-group">
					<label for="createUsername">User</label>
					<input type="text" class="form-control" name="createUsername" id="createUsername" aria-describedby="emailHelp" placeholder="Username" required>
					
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" name="registerPassword" id="registerPassword" placeholder="Password" required>
				</div>
				<div class="form-group">
					<label for="confirmPassword">Confirm password</label>
					<input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
				</div>
				<button  id="btn-create" class="btn btn-primary">Create</button>

				<p class="message"> <a href="index.php">Sign in</a></p>
				
			</form>
   </div>
</div>

   
    
</div>
<script src="assets\js\jquery-3.2.1.js"></script>
<script src="assets\bootstrap3\js\bootstrap.js"></script> 
<script src="assets\plugins\jquery-validation-1.19.3\dist\jquery.validate.min.js"></script>

<script src="assets\js\register.js"></script> 
</body>
</html>