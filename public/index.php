<?php
include ("../src/function.php");

echo sayHello();

$watchmens = [
    'Dr. Manhattan',
    'Ozymandias',
    'Silk Spectre',
    'Rorschach',
    'The comedian',
    'Nite Owl'
];

echo whoAmI("Ozymandias", $watchmens);