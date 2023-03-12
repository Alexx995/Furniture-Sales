
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
        } else {
         echo "Ovo radi<br>";
        }


        $sql_komanda="SELECT * FROM proizvodi";
        $rezultat=mysqli_query($konekcija, $sql_komanda);
         while(($row = mysqli_fetch_assoc($rezultat))) {
             $podaci[] = $row;
         }
         //var_dump($podaci);
        
          session_start();

         $_SESSION["podaci"]=$podaci;



         header("Location: indexxx.php");


        
         






     ?>
