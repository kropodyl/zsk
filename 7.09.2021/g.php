<?php
echo 'ZSL<br>';
echo 'ZSK<br>';
$name="Janusz";
echo 'Twoję imię: $name';
echo "<br>"."Twoję imię: $name<br>";
//typy danych
//booLean
$prawda = true;
$fałsz = false;
//inteager
$całkowita = 10;
$bin = 0b1011; //11
$oct = 011; //9
$hex = 0x11; //17
echo $hex;
echo gettype($hex);
echo gettype($prawda); //booLean
$x = 10.5;
echo gettype ($x); //double
//heredoc
$surname="Nowak";
echo <<< ETYKIETA
  Anna $surname<br>
  Poznań  
ETYKIETA;


?>
