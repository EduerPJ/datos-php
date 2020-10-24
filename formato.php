<?php
// ALTERAR

// Convertir string a minúscula
$text = 'PHP es un LengUage';
echo strtolower($text);
echo "<hr>";

// Convertir a Mayúscula
echo strtoupper($text);
echo "<hr>";

// La primera en minúscula
echo lcfirst($text);

echo "<hr>";
// La primera en Mayúscula
echo ucfirst($text);
echo "<hr>";


// REEMPLAZAR
$slug = str_replace(' ', '-', $text);
echo strtolower($slug);
echo "<hr>";


// MODIFICACIÓN
// para facturas
$code = 39;
echo str_pad($code, 8, '#');
echo "<br>";
// a ambos lados
echo str_pad($code, 8, '#', STR_PAD_BOTH);
echo "<br>";
// a la izquierda
echo str_pad($code, 8, '#', STR_PAD_LEFT);
echo "<br>";
echo "<hr>";

// Eliminar etiquetas html <>
$text = '<h1>PHP es un LengUage</h1>';
echo $text;
echo strip_tags($text);
echo "<hr>";

// Acentos
$text = "PHP es un LengUage, año 2020, programación";
echo strtoupper($text); // monobyte
echo "<br>";
echo mb_strtoupper($text); // multibyte
