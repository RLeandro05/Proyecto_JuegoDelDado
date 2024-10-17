<?php

function enfrentarJugadores(&$jugadorpuntos1, &$jugadorpuntos2, &$empate)
{
    $numDados = 4;
    $jugador1 = [];
    $jugador2 = [];

    echo "<h2>Jugador 1 </h2>";
    for ($i = 0; $i < $numDados; $i++) {
        $dado = rand(1, 6);
        $jugador1[] = $dado;

        echo "<img src=\"../img/$dado.svg\"/>";
    }
    echo "<br>";

    echo "<h2>Jugador 2 </h2>";
    for ($i = 0; $i < $numDados; $i++) {
        $dado = rand(1, 6);
        $jugador2[] = $dado;

        echo "<img src=\"../img/$dado.svg\"/>";
    }

    for ($i = 0; $i < $numDados; $i++) {
        if ($jugador1[$i] > $jugador2[$i]) {
            $jugadorpuntos1++;
        } else if ($jugador1[$i] < $jugador2[$i]) {
            $jugadorpuntos2++;
        } else {
            $empate++; // Empate en dados
        }
    }

    echo "<br>";
}

$jugadorpuntos1 = 0;
$jugadorpuntos2 = 0;
$empate = 0;

enfrentarJugadores($jugadorpuntos1, $jugadorpuntos2, $empate);

echo "<br>";
echo "<h2>Resultado </h2>";
echo "<p>El jugador 1 ha ganado " . (int)$jugadorpuntos1 . " veces, el jugador 2 ha ganado " . (int)$jugadorpuntos2 . " veces y los jugadores han empatado " . (int)$empate . " veces.</p>";
