<?php
// Da man meist durch ein array iterieren muss, gibt es dafür eine eigene Loop foreach

$index_array = ["eins", 'zwei', 'drei'];
// Um durch ein Indexed Array zu iterieren
foreach ($index_array as $value) {
    echo "$value <br>";
}
// Falls man den index in der Schleife benötigt
foreach ($index_array as $key => $value) {
    echo "$key:$value <br>";
}