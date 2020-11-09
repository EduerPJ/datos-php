<?php
namespace App;

class Argumentos
{
    public $course = 'PHP';
    
    // Valores
    public static function greet($name)
    {
        echo "Hola $name";
    }

    // Referencias
    public static function references(&$course)
    {
        $course = 'Laravel';
        echo $course;       // imprime Laravel
    }

    // Predeterminado
    public static function predeterminado($name = 'Emily Pallares')
    {
        echo "Hello, $name";
    }
}
