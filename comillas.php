<?php
// Comillas

$developer = 'eduer';
$eduer = 'Web Developer';

// Acceder de manera dinámica | variables variables
echo "My name is $developer and i'am a ${$developer}";
echo '<br>';

function getTeacher()
{
    return 'teacher';
}

$teacher = 'Italo';

echo "{${getTeacher()}} enseña PHP";
