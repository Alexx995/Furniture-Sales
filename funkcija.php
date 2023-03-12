<?php

class html
{
public function header(){
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
}
}

?>