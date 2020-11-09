<?php


    // funcion anónima o closures
    $saludando = function ($name = "Eduer") {
        return "Hola, $name";
    };


    if (! function_exists('arreglar')) {
        function arreglar()
        {
            return 'Estoy arreglando mi vida';
        }
    }

    $saludando('Emily y Samuel');
    arreglar();
    arreglar();
    arreglar();
