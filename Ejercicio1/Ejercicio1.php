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


        if ($dado % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }
    echo "<br>";

    if ($pares == 1 && $impares == 1) {
    echo "Ha salido ".$pares." número par y ".$impares." número impar";
    } elseif($pares > 1 && $impares == 1) {
    echo "Han salido ".$pares." números pares y ".$impares." número impar";
    }elseif($impares > 1 && $pares == 1) {
    echo "Ha salido ".$pares." número par y ".$impares." números impares";
    }elseif($impares < 1 && $pares == 1) {
    echo "Ha salido ".$pares." números pares y ".$impares." número impar";
    }elseif($pares < 1 && $impares == 1) {
    echo "Ha salido ".$pares." números pares y ".$impares." número impar";
    }else{
        echo"Ha salido ".$pares." números pares y ".$impares." números impares";
    }

}


tirarDados();

echo "<br>";

?>