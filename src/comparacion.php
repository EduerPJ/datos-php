<?php
echo "<h3>Comparación de datos en PHP </h3>";
$courses = [
    'javascript',
    'php'
];

$wishes = [
    'php',
    'laravel',
    'javascript',
    'vuejs'
];

var_dump(array_diff($wishes, $courses));