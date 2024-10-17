<?php


//Ejercicio 1


function tirarDados()
{

    $numDados = rand(1, 10); // numeros al azar del 1 al 10
    $dados = [];
    $pares = 0;
    $impares = 0;

    echo "<h2>$numDados Dados: </h2>";
    for ($i = 0; $i < $numDados; $i++) {
        $dado = rand(1, 6);
        $dados[] = $dado;
        
        switch ($dado) { // Hacer un switch y mostrar cara del dado correspondiente con el número aleatorio
            case 1:
                echo "<img src=\"img/1.svg\"/>";
                break;
            case 2:
                echo "<img src=\"img/2.svg\"/>";
                break;
            case 3:
                echo "<img src=\"img/3.svg\"/>";
                break;
            case 4:
                echo "<img src=\"img/4.svg\"/>";
                break;
            case 5:
                echo "<img src=\"img/5.svg\"/>";
                break;
            case 6:
                echo "<img src=\"img/6.svg\"/>";
                break;
        }


        if ($dado % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }





    
}


tirarDados();

echo"<br>";

//Ejercicio 2
$numJugador1 = rand(1, 6); // Definir numero aleatorio para el Jugador 1
// echo $numJugador1;
$numJugador2 = rand(1, 6); // Definir numero aleatorio para el Jugador 2
// echo $numJugador2;

echo nl2br("------------------------------------------------------------------------");

echo nl2br("<h2>Jugador1</h2>");
switch ($numJugador1) { // Hacer un switch y mostrar cara del dado correspondiente con el número aleatorio
    case 1:
        echo "<img src=\"img/1.svg\"/>";
        break;
    case 2:
        echo "<img src=\"img/2.svg\"/>";
        break;
    case 3:
        echo "<img src=\"img/3.svg\"/>";
        break;
    case 4:
        echo "<img src=\"img/4.svg\"/>";
        break;
    case 5:
        echo "<img src=\"img/5.svg\"/>";
        break;
    case 6:
        echo "<img src=\"img/6.svg\"/>";
        break;
}

echo nl2br("<h2>Jugador2</h2>");
switch ($numJugador2) { // Hacer un switch y mostrar cara del dado correspondiente con el número aleatorio
    case 1:
        echo "<img src=\"img/1.svg\"/>";
        break;
    case 2:
        echo "<img src=\"img/2.svg\"/>";
        break;
    case 3:
        echo "<img src=\"img/3.svg\"/>";
        break;
    case 4:
        echo "<img src=\"img/4.svg\"/>";
        break;
    case 5:
        echo "<img src=\"img/5.svg\"/>";
        break;
    case 6:
        echo "<img src=\"img/6.svg\"/>";
        break;
}



//Ejercicio 3




//Ejercicio 4
?>