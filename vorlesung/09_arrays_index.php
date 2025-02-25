<?php
function printn(string $string)
{
    echo("$string <br>");
}

printn("Arrays in PHP sind Datenstrukturen, die eine geordnete Sammlung von Elementen speichern können.
 Diese Elemente können Zahlen, Strings, Objekte oder sogar andere Arrays sein.");

printn('arrays werden entweder mit der array Funktion erzeugt oder mit [] die Elemente werden mit einem , getrennt');
$teilnehmer = array("Bob", 'Tim', 'Alice');
$teilnehmer = ["Bob", 'Tim', 'Alice'];
// Anzahl der Elemente

printn("Um die Anzahl der Elemente zu erhalten kann amn die count Funkktion nutzten");
printn(count($teilnehmer));

# Auswahl  Item
printn("Um ein Element in aus dem Array auszuwaehlen spricht man es ueber seinen Index an ");
printn('Der Index startet bei 0');
var_dump($teilnehmer);
printn("");
printn("teilnehmer mit den index 1 ist $teilnehmer[1]");
printn('');

# Change
printn("Um ein Element zu andern weist man es mit dem Zuweisungsoperator = einen neuen Wert zu");

$teilnehmer[1] = "Rene";
printn("index 1 ist jetzt $teilnehmer[1]");

# hinzufügen
printn('Um Elemente hinzufügengibt es zwei moeglichkeiten');
$teilnehmer[] = "Tom";
var_dump($teilnehmer);
array_push($teilnehmer, "noch ein");
var_dump($teilnehmer);


//Eine Liste einer anderen anhängen
$teilnehmer2 = ["Bill", 'Donald', 'George'];
printn("");
printn("");
printn("");
$teilnehmer = array_merge($teilnehmer, $teilnehmer2);
var_dump($teilnehmer);
// Durch arrays iterieren

printn("");
printn("");
printn("");

# Remove
printn("Remove eines Elementes");
$teilnehmer = ["Bob", 'Tim', 'Alice', "Bill", 'Donald', 'George'];
printn('mit der array_pop Funktion kann das letzte Element entfernt werden');
array_pop($teilnehmer);
var_dump($teilnehmer);
printn('');
array_splice();
printn('Mit der unset Funktion koennen auch Elemente ueber den Index entfernt werden');
unset($teilnehmer[2]);

printn('');
printn('Die Indexe bleiben aber unverändert so das eine Luecke entsteht');
printn('');
var_dump($teilnehmer);
//unset($teilnehmer);
printn('Um das Array neu zu Sortieren kann man dies mit der array_values Funktion verwenden');
$teilnehmer = array_values($teilnehmer);
var_dump($teilnehmer);
printn('');
printn('unset($teilnehmer); #löscht die gesamte Liste');
#löscht die gesamte Liste
printn("");
printn("");
var_dump($teilnehmer);
# löscht den Inhalt der Liste
//$teilnehmer = [];
//var_dump($teilnehmer);
// nach Listen Element suchen
printn(array_search("Bill", $teilnehmer));

// Liste Kopieren
printn('In Php kann man Arrays einfach kopieren da sie immer by Value uebergeben werden');
$copy_teilnehmer = $teilnehmer;
printn("");
printn("");
printn("Original");
var_dump($teilnehmer);
printn("");
printn("");
printn("Copy");

var_dump($copy_teilnehmer);
//
$copy_teilnehmer[0] = 'change';

printn("");
printn("");
printn("Original");
var_dump($teilnehmer);
printn("");
printn("");
printn("Copy");
var_dump($copy_teilnehmer);
print('Um Teilstuecke auszuschneiden');
array_slice();