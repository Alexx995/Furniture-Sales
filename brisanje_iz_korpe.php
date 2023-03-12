<?php

$server="localhost";
$user="root";
$password="";
$baza="jysk";

// ostvarivanje veze
$konekcija=mysqli_connect($server, $user, $password, $baza);

// sta ako dodje ili ne dodje do konekcije
if(!$konekcija) {
    echo "Ovo ne radi";
}



$sql_komanda="DELETE FROM cart_proizvodi INNER JOIN proizvodi ON cart_proizvodi.proizvodi_id = proizvodi.id WHERE id={$_POST['id']}";


$sql_featured="UPDATE proizvodi SET `featured` = `featured`+1 WHERE id={$_POST['id']}";
$sql_featured_command=mysqli_query($konekcija,$sql_featured);


// provera

if(mysqli_query($konekcija, $sql_komanda)) {
    header("Location: mojakorpa.php");
}else {
    echo "Sql komanda nije uspela". mysqli_error($konekcija);
}


?>