<?php
$db = mysqli_connect('localhost', 'root', 'root', 'irs');
if (isset($_POST['add_new_product'])) {
    $nazov = mysqli_real_escape_string($db, $_POST['nazov']);
    $cena = mysqli_real_escape_string($db, $_POST['cena']);
    $popis = mysqli_real_escape_string($db, $_POST['popis']);

    if (empty($nazov)) { array_push($errors, "Nazov is required"); }
    if (empty($cena)) { array_push($errors, "Cena is required"); }
    if (empty($popis)) { array_push($errors, "Popis is required"); }

    $produkt_check_query = "SELECT * FROM produkty WHERE nazov='$nazov' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $produkt = mysqli_fetch_assoc($result);
    if ($produkt) { 
        if ($produkt['nazov'] === $nazov) {
        array_push($errors, "Nazov already exists");
        }
    }
    if (count($errors) == 0) {
        $query = "INSERT INTO produkty (nazov, cena, popis) 
                VALUES('$nazov', '$cena', '$popis')";
        mysqli_query($db, $query);
        header('location: home.php');
    }
}
?>