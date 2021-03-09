<?php
$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', 'root', 'irs');

if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $meno = mysqli_real_escape_string($db, $_POST['meno']);
  $priezvisko = mysqli_real_escape_string($db, $_POST['priezvisko']);
  $adresa = mysqli_real_escape_string($db, $_POST['adresa']);
  $telefon = mysqli_real_escape_string($db, $_POST['telefon']);

  if (empty($meno)) { array_push($errors, "Meno is required"); }
  if (empty($priezvisko)) { array_push($errors, "Priezvisko is required"); }
  if (empty($adresa)) { array_push($errors, "Adresa is required"); }
  if (empty($telefon)) { array_push($errors, "Telefon is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM zakaznik WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
  	$password = $password_1;

  	$query = "INSERT INTO zakaznik (meno, priezvisko, telefon, adresa, email, username, password) 
  			  VALUES('$meno', '$priezvisko', '$telefon', '$adresa', '$email', '$username', '$password')";
  	mysqli_query($db, $query);
  	header('location: index.php');
  }
}
