<?php

    $palos = ['bastos_', 'espadas_', 'copas_', 'oros_'];


    function cartasAleatorias($numero_cartas){
        $cartas = [];
        $palos = $GLOBALS['palos'];

        while (count($cartas) < $numero_cartas){
            $aleatorio = (string)rand(1, 12);
            $nombre_imagen = ($palos[array_rand($palos)].$aleatorio.'.jpg');
            $nombre_completo = "./imagenesCartas/".$nombre_imagen;

            if (!in_array($nombre_completo, $cartas)){
                $cartas[] = $nombre_completo;
            }
        }
        return $cartas;
    }


    function validarBaza($baza, $mano){
        foreach($baza as $carta){
            if (in_array($carta, $mano)){
                $indice = array_search($carta, $baza);
                while(in_array($carta, $mano)){
                    $carta = cartasAleatorias(1)[0];
                }
                $baza[$indice] = $carta;
            }
        }   
        return $baza;
    }


    function mostrarCartas($array){
        foreach ($array as $carta){
            echo "<img src='".$carta."' label='carta.jpg'>";
        }
    }

    function puntosBaza($baza){
        $puntos = 0;
        foreach($baza as $carta){
            if (strpos($carta, "_1.")){
                $puntos += 11;
            }
            elseif (strpos($carta, "_3.")){
                $puntos += 10;
            }
            elseif (strpos($carta, "_12.")){
                $puntos += 4;
            }
            elseif (strpos($carta, "_11.")){
                $puntos += 3;
            }
            elseif (strpos($carta, "_10.")){
                $puntos += 2;
            }
        }
        return $puntos;
    }


    $cartas_mano = cartasAleatorias(3);
    mostrarCartas($cartas_mano);
    $cartas_baza = cartasAleatorias(10);
    $cartas_baza = validarBaza($cartas_baza, $cartas_mano);
    echo "<br>";
    $puntos_baza = puntosBaza($cartas_baza);

    
?>