# # Der User wird nach einer Zahl gefragt und es soll ausgegeben werden ob die Zahl = ,< oder > 10
<?php
$input = 11;

if ($input > 10) {
    print "Die Zahl ist gr.";
} elseif ($input < 10) {
    print "die Zahl ist kleiner";
} elseif ($input == 10) {
    print "die Zahl ist 10";
}

# # Der User wird nach einer Zahl gefragt und es soll ausgegeben werden ob die Zahl = ,< oder > 10

$input = 11;

if ($input > 10) {
    print "Die Zahl ist gr.";
} elseif ($input < 10) {
    print "die Zahl ist kleiner";
} elseif ($input == 10) {
    print "die Zahl ist 10";
}


# # Der User wird nach einer Zahl gefragt. Es soll geprüft werden ob es eine gerade oder ungerade Zahl ist
$input_gerade_ungerade = 4;
if ($input_gerade_ungerade % 2 == 0) {
    print "Die Zahl ist gerade";
} else {
    print "Die Zahl ist ungerade.";
}

# Schreibe ein Programm, das den Benutzer nach einem Passwort fragt und prüft, ob es mindestens 8 Zeichen lang ist.


$input = 12345678;
if (strlen($input) >= 8) {
    print("Passwort ist gültig");
} else {
    print("Passwort ist nicht gültig");
}


# Der User wird nach einer Zahl zwischen 1-7 gefragt
# 1 Montag 2 Dienstag 3 Mittwoch 4 Donnerstag 5 Freitag 6 Samstag 7 Sonntag
# Bei anderen eingaben "keine gültige Eingabe"

#<?php

$input = 1;

if ($input == 1) {
    print("montag");
} elseif ($input == 2) {
    print("dienstag");
} elseif ($input == 3) {
    print("mittwoch");
} elseif ($input == 4) {
    print("donnerstag");
} elseif ($input == 5) {
    print("freitag");
} elseif ($input == 6) {
    print("sammstag");
} elseif ($input == 7) {
    print("sonntag");
} elseif ($input > 7) {
    print("keine gültige Eingabe");

}


# Der User wird nach seiner Punktzahl gefragt
# sehr gut 100 - 92
# gut       91 - 81
# befriedigend 80 - 67
# ausreichend 66 - 50
# mangelhaft 49 - 30
# ungenügend 29 - 0
# Bei anderen eingaben "keine gültige Eingabe"


$input = 100;
if ($input <= 100 and $input >= 92) {
    print("sehr gut");
} elseif ($input <= 91 and $input >= 81) {
    print("gut ");
} elseif ($input <= 80 and $input >= 67) {
    print("befriedigend");
} elseif ($input <= 65 and $input >= 50) {
    print("ausreichend");
} elseif ($input <= 50 and $input >= 30) {
    print("mangelhaft");
} elseif ($input <= 29 and $input >= 0) {
    print("ungenügend");
} else {
    print 'keine gültige Eingabe';
}