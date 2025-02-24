<?php
# Ein string ist eine Sequenz von Zeichen
# Strings werden mit ' oder " umschlossen

$my_string = "Hallo";
$my_string2 = 'Hallo';

// In " ist es moeglich Variable und spezielle Zeichen zu benutzen

$name = "Rolf";
$doppel = "Hallo $name";
$einfach = 'Hallo $name';
echo $doppel;
echo "<br>";
echo $einfach;
echo "<br>";
echo strlen($name);
echo "<br>";
echo  str_word_count('Hallo Welt');

//Strings Verkettten
$vorname = "Jens";
$nachname = "Jenson";

// String kann man mit . verbinden
$name = $vorname . $nachname;
echo "<br>";
echo $name; // ohne Leerzeichen
$name = $vorname . " ". $nachname;
echo "<br>";
echo $name; // mit Leerzeichen
// bessere Methode ist die Variablen in einem " String zu schreiben
$name = "$vorname $nachname";
echo "<br>";
echo $name;
//https://www.w3schools.com/php/php_ref_string.asp
//strtoupper();
//strtolower();
//str_replace();
//strrev();
//trim();
//str_split()
// String Slicing
$a = "php ist super toll";


print "<br>";
echo substr($a,0,3); // Starte beim ersten Buchstaben und gehe 3 Buchstaben weiter
print "<br>";
echo substr($a,8); // ohne den lenght parameter macht er es bis zum ende
print "<br>";
echo substr($a,-5, 5); // bei negativen geht es am ende los
print "<br>";
echo substr($a,8, -5); // vom 5 bis zum index -5

