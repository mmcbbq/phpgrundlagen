<?php


//while( true or false){  // so lage die Bedingung true ist wird der Code
//    print 'while';
//
//}


while (true) { // stop die Schleife
    print 'break';
    break;
}
$i = 0;
while ($i < 10) {
    $i += 1;
    if ($i == 3) {
        continue;
    } else {
        print ($i);
    }

}
// the do while loop führt den Code mindestens 1-mal aus "Fussgesteuerte Schleife"
do {
    echo $i;
    $i++;
} while ($i < 6);


for ($x = 0; $x <= 10; $x++) {  // (start; stop wenn false; Schrittweite)
    echo "The number is: $x <br>";
}
// Rückwärts Zählen
for ($x = 10; $x >= 0; $x -= 2) {
    echo "The number is: $x <br>";
}

// Durch ein array iterieren
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    echo "$x <br>";
}

// Durch ein Associative array

$teilnehmer = array("Bill" => "35", "Donald" => "37", "Obama" => "43");

foreach ($teilnehmer as $key => $value) {
    echo " Key: $key  : Value: $value    <br>";
}
$colors = array("red", "green", "blue", "yellow");

for ($x = 0; $x <= count($colors) - 1; $x++) {
    print ("$colors[$x] <br>");
}
