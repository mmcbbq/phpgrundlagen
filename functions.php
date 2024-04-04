<?php
// Definieren mit function keyword
function myMessage()
{
    echo "Hello world!";
}

// aufrufen "call"

myMessage();

function saythename($name)// $ Platzhalter $name
{
    print ("$name <br>");
}

saythename('Bill'); // Aufrufen mit konkreten namen Bill
saythename('Donald'); // Aufrufen mit konkreten namen Donald

function saythenamedefault($name = "Jim")
{  // $ Platzhalter $name
    print ("$name <br>");
}

saythenamedefault();// Aufrufen mit default name Jim
saythenamedefault('Tom');// Aufrufen mit geänderten default value Tom
saythenamedefault($name='George');// Aufrufen mit geänderten default value Tom

$value ="default";

function change($string)
{
    $string = 'change';
    print ("Aufruf in der Funktion $string <br>");
}

change($value);
print ("Aufruf ausserhalb der Funktion $value <br>");


//mit dem & Zeichen wird es als Reference Übergeben

function changeref(&$string){
    $string = "change";
    print ("Aufruf in der Funktion $string Reference<br>");
}

changeref($value);
print ("Aufruf ausserhalb der Funktion $value <br>");



function sumMyNumbers(...$x) { // verpackt alle übergebenen Argumente in einem array
    var_dump($x);
}

sumMyNumbers(1,2,3,4,5);