<?php

function enfrentarJugadores()
{

    $numDados = 4;
    $jugador1 = [];
    $jugador2 = [];
    $jugadorpuntos1=0;
    $jugadorpuntos2=0;
    $empate=0;


    echo "<h2>Jugador 1 </h2>";
    for ($i = 0; $i < $numDados; $i++) {
        $dado = rand(1, 6);
        $jugador1[] = $dado;

        switch ($dado) { // Hacer un switch y mostrar cara del dado correspondiente con el número aleatorio
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
        
    }
    echo "<br>";

    echo "<h2>Jugador 2 </h2>";
    for ($i = 0; $i < $numDados; $i++) {
        $dado = rand(1, 6);
        $jugador2[] = $dado;

        switch ($dado) { // Hacer un switch y mostrar cara del dado correspondiente con el número aleatorio
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
    }

    for ($i = 0; $i < $numDados; $i++) {

        if ($jugador1[0]>$jugador2[0]) {
            $jugadorpuntos1++;
        } else if ($jugador1[0]<$jugador2[0]){
            $jugadorpuntos2++; 
        }else if ($jugador1[0]==$jugador2[0]){
            $empate++; //Primeros dados
        } else if ($jugador1[1]>$jugador2[1]) {
            $jugadorpuntos1++;
        }else if ($jugador1[1]<$jugador2[1]) {
            $jugadorpuntos2++;
        }else if ($jugador1[1]==$jugador2[1]){
            $empate++; //Segundos dados
        }else if ($jugador1[2]>$jugador2[2]) {
            $jugadorpuntos1++;
        }else if ($jugador1[2]<$jugador2[2]) {
            $jugadorpuntos2++;
        }else if ($jugador1[2]==$jugador2[2]){
            $empate++; //Terceros dados
        }else if ($jugador1[3]>$jugador2[3]) {
            $jugadorpuntos1++;
        }else if ($jugador1[3]<$jugador2[3]) {
            $jugadorpuntos2++;
        }else if ($jugador1[3]==$jugador2[3]){
            $empate++; //Cuarto dados
        }
    }



    echo "<br>";

    
}


enfrentarJugadores();

echo "<br>";




echo "<h2>Resultado </h2>";
echo "<p>El jugador 1 ha ganado " . (int)$jugadorpuntos1 . " veces, el jugador 2 ha ganado " . (int)$jugadorpuntos2 . " veces y los jugadores han empatado " . (int)$empate . " veces. </p>";

