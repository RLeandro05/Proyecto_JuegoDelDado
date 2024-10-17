<?php 

//Ejercicio 2
$numJugador1 = rand(1, 6); // Definir numero aleatorio para el Jugador 1
//echo $numJugador1;
$numJugador2 = rand(1, 6); // Definir numero aleatorio para el Jugador 2
//echo $numJugador2;

echo nl2br("------------------------------------------------------------------------");

echo nl2br("<h2>Jugador1</h2>");
switch ($numJugador1) { // Hacer un switch y mostrar cara del dado correspondiente con el número aleatorio
   case 1:
       echo "<img src=\"../img/1.svg\"/>";
       break;
   case 2:
       echo "<img src=\"../img/2.svg\"/>";
       break;
   case 3:
       echo "<img src=\"../img/3.svg\"/>";
       break;
   case 4:
       echo "<img src=\"../img/4.svg\"/>";
       break;
   case 5:
       echo "<img src=\"../img/5.svg\"/>";
       break;
   case 6:
       echo "<img src=\"../img/6.svg\"/>";
       break;
}

echo nl2br("<h2>Jugador2</h2>\n");
switch ($numJugador2) { // Hacer un switch y mostrar cara del dado correspondiente con el número aleatorio
   case 1:
        echo "<img src=\"../img/1.svg\"/>";
       break;
   case 2:
       echo "<img src=\"../img/2.svg\"/>";
       break;
   case 3:
       echo "<img src=\"../img/3.svg\"/>";
       break;
   case 4:
       echo "<img src=\"../img/4.svg\"/>";
       break;
   case 5:
       echo "<img src=\"../img/5.svg\"/>";
       break;
   case 6:
       echo "<img src=\"../img/6.svg\"/>";
       break;
}
echo nl2br("\n");

if ($numJugador1 > $numJugador2) { // Según los resultados del dado, mostrar el ganador
   echo nl2br("<h3>Ha ganado el Jugador1</h3>");
} else if ($numJugador2 > $numJugador1) {
   echo nl2br("<h3>Ha ganado el Jugador2</h3>");
} else { // Si ninguno resulta ser ganador, se muestra el empate
   echo nl2br("<h3>Han quedado empate</h3>");
}



?>