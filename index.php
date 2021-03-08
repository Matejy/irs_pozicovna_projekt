<?php include('register.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
		<div>
		<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
			<label>Meno</label>
			<input type="text" name="meno" value="<?php echo $meno; ?>">
			</div>
			<div class="input-group">
			<label>Priezvisko</label>
			<input type="text" name="priezvisko" value="<?php echo $priezvisko; ?>">
			</div>
			<div class="input-group">
			<label>Adresa</label>
			<input type="text" name="adresa" value="<?php echo $adresa; ?>">
			</div>
			<div class="input-group">
			<label>Telefon</label>
			<input type="text" name="telefon" value="<?php echo $telefon; ?>">
			</div>
			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
			</div>
			<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
			</div>
			<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
			</div>
		</form>
			</form>
		</div>
	</body>
</html>