<?php

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require __DIR__. '/vendor/autoload.php';
// var_dump(App\Validate::email('eduer@eduer.com'));

\App\Argumentos::greet('Eduer Pallares');
echo "<br>";

\App\Argumentos::references($course);
echo "<br>";

\App\Argumentos::predeterminado('Samuel Pallares');
echo "<br>";

\App\Argumentos::predeterminado();
echo "<br>";

echo \App\Retornar::greet();
