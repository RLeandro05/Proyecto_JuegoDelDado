<?php 
    // Ejercicio 4

    echo nl2br("<h2>Tirada de 6 dados</h2>\n");

    $listaDados = [];
    for ($i = 1; $i<= 6; $i++) {
        $dadoAleatorio = rand(1, 6);
        switch ($dadoAleatorio) { // Hacer un switch y mostrar cara del dado correspondiente con el número aleatorio
            case 1:
                echo "<img src=\"../img/1.svg\"/>";
                $listaDados [] = $dadoAleatorio;
                break;
            case 2:
                echo "<img src=\"../img/2.svg\"/>";
                $listaDados [] = $dadoAleatorio;
                break;
            case 3:
                echo "<img src=\"../img/3.svg\"/>";
                $listaDados [] = $dadoAleatorio;
                break;
            case 4:
                echo "<img src=\"../img/4.svg\"/>";
                $listaDados [] = $dadoAleatorio;
                break;
            case 5:
                echo "<img src=\"../img/5.svg\"/>";
                $listaDados [] = $dadoAleatorio;
                break;
            case 6:
                echo "<img src=\"../img/6.svg\"/>";
                $listaDados [] = $dadoAleatorio;
                break;
         }
    }

    echo nl2br("<h2>Dado a eliminar</h2>\n");

    $dadoaEliminar = rand(1, 6);
    switch ($dadoaEliminar) { // Eliminar el dado que salga aleatoriamente
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
    
    foreach ($listaDados as $indice => $valor) {
        if ($valor == $dadoaEliminar) {
            unset($listaDados[$indice]);
        }
    }

     echo nl2br("<h2>Dados restantes</h2>\n");
     foreach ($listaDados as $dado) {
        switch ($dado) {
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

?>