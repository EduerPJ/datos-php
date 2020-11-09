<?php
echo "<h3>Unión de Arrays</h3>";

$frontend = ['javascript'];
$backend = ['php', 'laravel'];

var_dump(array_merge($frontend, $backend)); // Unir con los kits númericos

$courses = ['javascript', 'php', 'laravel'];
$categories = ['front', 'back', 'framework'];
var_dump(array_combine($categories, $courses));