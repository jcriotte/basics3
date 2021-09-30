<?php

function sayHello (string $name = "Dr. Manhattan"):string {
    return "Hello $name" . "<br>";
}

function whoAmI (string $name, array $watchmen):string {
    $key = array_search($name, $watchmen);
    if ($key != null) {
        return "$name est un watchmen" . "<br>";
    } else {
        return "c'est un intrus" . "<br>";
    }
}