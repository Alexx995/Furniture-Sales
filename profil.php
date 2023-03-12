<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" >
    <meta charset="UTF-8">
    <title>Jysk</title>
</head>
<body>
<header>
    <div class="conteiner">
        <img src=images/brand.gif  height=80 width=120 alt="logo" class="logo">
        <form class="inputs" action="pretraga.php" method='get'>

            <div class="inputis">
                <input type="text" name='text' >
                <input class="save" type="submit"  value="pretraga" >

            </div>


        </form>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<?php
// parametri za vezu
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


$sql="SELECT * FROM proizvodi WHERE id={$_POST['id']}";

$rezultat=mysqli_query($konekcija, $sql);

$row = mysqli_fetch_assoc($rezultat);

echo "<p><img src='" . $row['image'] . "' height=350 width=280  >
  <p>" . $row['title'] . "</p>
  <p>Price: <b>" . $row['price'] . "</b></p>
  <p>Brandname: <b>" . $row['brandname'] . "</b></p>
  <p>Description: <b>" . $row['description'] . "</b></p>
  <p>Featured: <b>" . $row['featured'] . "</b></p>
  <form action='addtocart.php' method='post'><input value=".$row["id"]." name='id' hidden><button>Add to cart</button></form>
  ";





?>
