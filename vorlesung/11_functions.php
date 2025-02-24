<?php
// Definieren mit function keyword
function myMessage()
{
    echo "Hello world!";
}

// aufrufen "call"

myMessage();

function saythename($name)// Platzhalter $name
{
    print ("$name <br>");
}

saythename('Bill'); // Aufrufen mit konkreten namen Bill
saythename('Donald'); // Aufrufen mit konkreten namen Donald

function saythenamedefault($name = "Jim")
{
    print ("$name <br>");
}

saythenamedefault();// Aufrufen mit default name Jim
saythenamedefault('Tom');// Aufrufen mit geänderten default value Tom
saythenamedefault($name='George');// Aufrufen mit geänderten default value Tom

$value ="default";

function change($string)
{
    $string = 'change';  // änderung der Variable in der Funktion
    print ("Aufruf in der Funktion $string <br>");
}

change($value);  // Beim Aufruf wird der geänderte Wert ausgegeben
print ("Aufruf ausserhalb der Funktion $value <br>");  // Die übergebene Variable hat sich aber nicht geändert
// Sie wird nur 'by Value' übergeben

//mit dem & Zeichen wird es als Reference Übergeben

function changeref(&$string){
    $string = "change";  // durch das & wird es der Wert der übergebenen Variable selbst geandert
    print ("Aufruf in der Funktion $string Reference<br>");
}

changeref($value);
print ("Aufruf ausserhalb der Funktion $value <br>");
// nun ist, hat sich die Variable in und ausserhalb der Funktion geandert

$value_array = ["default",'test',123];


function change_array($array)
{
    $array[0] = 'change';  // änderung der Variable in der Funktion
    print ("Aufruf in der array Funktion $array[0] <br>");
}

change_array($value_array);  // Beim Aufruf wird der geänderte Wert ausgegeben
print ("Aufruf ausserhalb der array Funktion $value_array[0] <br>");  // Die übergebene Variable hat sich aber nicht geändert
// Sie wird nur 'by Value' übergeben

// In PHP werden auch arrays by Value uebergeben.

// Die Art und Weise, wie Parameter an Funktionen übergeben werden,
// variiert stark zwischen verschiedenen Programmiersprachen,
// was bedeutet, dass ein und derselbe Code in verschiedenen Sprachen unterschiedliche Ergebnisse liefern kann.









// mit ... vor einem Parameter teilt man PHP mit das eine beliebige AAnzahl von Parametern uebergeben werden kann
function sumMyNumbers(...$x) { // verpackt PHP alle übergebenen Argumente in einem array
    var_dump($x);
}

sumMyNumbers(1,2,3,4,5);  // x = [1,2,3,4,5]