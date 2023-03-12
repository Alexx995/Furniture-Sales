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



$sql_featured="INSERT INTO cart_proizvodi (proizvodi_id) VALUES ({$_POST['id']})";
$sql_featured_command=mysqli_query($konekcija,$sql_featured);



//$sql="SELECT * FROM proizvodi WHERE id={$_POST['id']}";
$sql="SELECT proizvodi.title, proizvodi.brandname, proizvodi.image, proizvodi.description, proizvodi.featured, cart_proizvodi.id, cart_proizvodi.proizvodi_id, proizvodi.id, proizvodi.price FROM cart_proizvodi INNER JOIN proizvodi ON cart_proizvodi.proizvodi_id = proizvodi.id";

$rezultat=mysqli_query($konekcija, $sql);
//$row = mysqli_fetch_assoc($rezultat);

//var_dump($row);
//return;

while(($row = mysqli_fetch_assoc($rezultat))) {
        $podaci[] = $row;
    }


session_start();

$_SESSION["podaci"] = $podaci;




header("Location: mojakorpa.php");
//$title=$row['title'];
//$image=$row['image'];
//$price=$row['price'];
//$brandname=$row['brandname'];
//$desctription=$row['description'];
//$featured=$row['featured'];
//
//$sql_komanda="INSERT INTO cart_proizvodi (title, price, brandname, image, description, featured)
// VALUES('$title', '$price', '$brandname', '$image',  '$desctription', '$featured')";

//if(mysqli_query($konekcija, $sql_komanda)) {
//    header("Location: mojakorpa.php");
//}else {
//    echo "Sql komanda nije uspela". mysqli_error($konekcija);
//}




?>







