<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="../libs/style.css">
</head>
<body>
	<div class="log">
		<div class="header-log">
		<h1>Register</h1>
		</div>
		<form action="../controllers/registercontroller.php" method="POST">
			<!-- <?php 
				// include ('errors.php');
			?> -->
			<div>
			<?php
			//In loi
			if(isset($errors)){
				if(!empty($errors)){
					foreach ($errors as $value) {
						echo $value . '<br />';
					}
					echo '<br />';
				}
			}
			?>
			</div>
			<div class="input-group">
				<label for="">Username</label>
				<input type="text"  name="username" value="<?php echo isset($_POST['username'])  ? $_POST['username'] : ''; ?>"  />
			</div>
			<div class="input-group">
				<label for="">Email</label>
				<input type="text" name="email" value="<?php echo isset($_POST['email'])  ? $_POST['email'] : ''; ?>" />
			</div>
			<div class="input-group">
				<label for="">Password</label>
				<input type="password" name="password_1" />
			</div>
			<div class="input-group">
				<label for="">Confirm password</label>
				<input type="password" name="password_2" />
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button>
			</div>
			<div class="radio">
				<input type="radio" class="radio" name="partner" value="normal-partner">Normal Partner<br>
				<input type="radio" class="radio"  name="partner" value="partner">Partner<br>
			</div>
			<p>
				Not yet a member ? <a href="../../login/index.php">Sign In</a>
			</p>
		</form>
	</div>
	
</body>
</html>