<?php

$data = 'Estudio PHP';

echo $data{0};
echo '<hr>';

$post = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus deleniti doloremque dolorum omnis quo mollitia debitis corporis minus optio error quam distinctio commodi ipsum, ipsa, sunt similique provident incidunt sit!';

// Extraer
$extract = substr($post, 0, 17);
echo "$extract... [ver más]";
echo '<hr>';

// Convertir a array
$data = 'javascript, php, laravel'; // input de formulario
$tags = explode(', ', $data);

var_dump($tags);

// Array a string
echo '<hr>';
echo implode(', ', $tags);
echo '<hr>';


// Quitar espacios a las cadenas
$course = '   Curso de    PHP';
// ltrim rtrim
echo trim($course);
echo '<hr>';
