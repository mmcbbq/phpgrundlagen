<?php


$x = 5; // global scope

//function mylocal() {
//    // using x inside this function will generate an error
//    echo "<p>Variable x inside function is: $x</p>";
//}
//mylocal();

echo "<p>Variable x outside function is: $x</p>";


function mylocal() {
    $y = 5; // local scope
    echo "<p>Variable x inside function is: $y</p>";
}
mylocal();
//echo $y;
// using y outside the function will generate an error




$x = 5;
$y = 10;

function myglobal() {
    global $x, $y;
    $y = $x + $y;
}

myglobal();
echo $y; // outputs 15

function mystatic() {
    static $x = 0;
    print ("$x <br>");
    $x++;
}

mystatic();
mystatic();
mystatic();
