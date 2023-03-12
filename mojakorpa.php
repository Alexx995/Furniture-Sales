<table>
    <thead>
    <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Brandname</th>
        <th>Price</th>
        <th>Featured</th>
        <th>Obrisi</th>

    </tr>
    </thead>
    <tbody>
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
    session_start();

    $podaci = $_SESSION["podaci"];



//
//    $sql="SELECT * FROM cart_proizvodi";
//
//    $rezultat=mysqli_query($konekcija, $sql);

   // $row = mysqli_fetch_assoc($rezultat);

//    while(($row = mysqli_fetch_assoc($rezultat))) {
//        $podaci[] = $row;
//    }
//
    foreach($podaci as $row) {

        echo
            "<tr>
        <td><img src='" . $row['image'] . "' height=70 width=45 ></td>
        <td>" . $row["title"] . "</td>
        <td>" . $row['description'] . "</td>
        <td>" . $row['brandname'] . "</td>
        <td>" . $row['price'] . "</td>
        <td>" . $row['featured'] . "</td>
        <td><form action='brisanje_iz_korpe.php' method='post'><input value=".$row["id"]." name='id' hidden><button>Obrisi</button></form></td>
      </tr>";

    }

    ?>

    </tbody>
</table>


<?php
$zbir="SELECT SUM(price) FROM cart_proizvodi INNER JOIN proizvodi ON cart_proizvodi.proizvodi_id = proizvodi.id";
$rez=mysqli_query($konekcija, $zbir);
$rew = mysqli_fetch_assoc($rez);
$rok=implode($rew);

echo "Ukupna cena je " . $rok . "";



?>


<form action="potvrda_kupovine.php" name='potvrda'>
    <input type="submit" value="Nastavi kupovinu" >

</form>


