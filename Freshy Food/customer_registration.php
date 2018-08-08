<?php
if (isset($_GET["register"])) {
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Freshy Food</title>

	</head>
<body >

	
			
				<a href="#">Freshy Food</a>
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="phome.php">Product</a></li>
			</ul>
		
		
			
					<h1>Customer SignUp Form</h1>
					
					
					<form>
						
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							
								<label for="password">password</label>
								<input type="password" id="password" name="password"class="form-control">
							
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" name="address1"class="form-control">
							
								<label for="address2">Address Line 2</label>
								<input type="text" id="address2" name="address2"class="form-control">
							
						<p><br/></p>
						
								<input style="width:100%;" value="Sign Up" type="submit">
							
					</form>
				
</html>
	
