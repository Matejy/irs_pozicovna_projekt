<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Požičovňa</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Požičovňa</h1>
				<a href="logout.php">Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Hlavná stránka</h2>
			<p>Prihlásený - <?=$_SESSION['name']?>!</p>
		</div>
		<div>
			<h2>Registruj produkt</h2>
			<form method="POST" action="add_product.php">
				<div class="input-group">
				<label>Názov produktu</label>
				<input type="text" name="nazov" value="<?php echo $nazov; ?>">
				</div>
				<div class="input-group">
				<label>Cena</label>
				<input type="text" name="cena" value="<?php echo $cena; ?>">
				</div>
				<div class="input-group">
				<label>popis</label>
				<input type="text" name="popis" value="<?php echo $popis; ?>">
				</div>
				<div class="input-group">
				<button type="submit" class="btn" name="add_new_product">Pridat produkt</button>
				</div>
			</form>			
		</div>
		<div>
			<h2>Ukaz polozky</h2>
			<div>
				<?php 
				$connection = mysqli_connect('localhost', 'root', 'root', 'irs'); 				
				$query = "SELECT * FROM produkty";
				$result = mysqli_query($connection, $query);;				
				echo "<div>";				
				while($row = mysqli_fetch_array($result)){ 				
				echo "<h2>" . $row['nazov'] . "</h2>";
				echo "<p>" . $row['cena'] . "</p>";
				echo "<p>" . $row['popis'] . "</p>";
				}
				echo "</div>";				
				mysqli_close();
				?>
			</div>
		</div>
	</body>
</html>