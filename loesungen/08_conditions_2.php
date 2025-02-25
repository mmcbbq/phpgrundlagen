# Schaltjahres-Berechnung
# Eingabe eines Jahres -> Ausgabe Schaltjahr, kein Schaltjahr
# Laut Kalender hat ein Jahr 365 Tage. Die Erde braucht aber 365 Tage, 5 Stunden, 48 Minuten und 45 Sekunden, um die Sonne zu umrunden. Der Schalttag gleicht diese Differenz aus – allerdings nicht ganz, dazu sind die Zahlen zu unrund. Denn die überzähligen Stunden, Minuten und Sekunden addieren sich nach vier Jahren zu etwa 23 Stunden und 11 Minuten – also keinem ganzen Tag.
# Im Jahr 1582 veranlasste Papst Gregor eine Kalenderreform. Seitdem gilt der Gregorianische Kalender mit den folgenden Regeln zur Schaltjahresberechnung:
#
# Bedingung 1:
# Ist eine Jahreszahl ganzzahlig durch 4 teilbar, dann ist das Jahr ein Schaltjahr. Testwerte: 1720, 1972
# und 1980 waren Schaltjahre.

# Bedingung 2:
# Ausnahme zu den Jahreszahlen, die der Bedingung 1 genügen, sind alle Jahreszahlen, die nach Bedingung 1
# ein Schaltjahr sind, aber deren Jahreszahl ganzzahlig durch 100 teilbar ist.
# Testwerte: 1700, 1800 und 1900 oder ferner 2100 sind keine Schaltjahre.

# Bedingung 3:
# Ausnahme zu den Jahreszahlen, die der Bedingung 2 genügen, sind alle Jahreszahlen, die nach Bedingung 2
# kein Schaltjahr sind, aber deren Jahreszahl ganzzahlig durch 400 teilbar.
# Testwerte: 1600 und 2000 waren Schaltjahre.

<?php
$jahr = 2024;
if ($jahr % 4 == 0) {
    if ($jahr % 100 != 0) {
        print 'Schaltjahr';
    } else {
        if ($jahr % 400 == 0) {
            print "Schaltjahr";
        } else {
            print 'kein Schaltjahr';
        }
    }
} else {
    print "kein Schaltjahr";
}
// Variante 2
$var_jahr = 1980;
if ($var_jahr % 4 == 0 and $var_jahr % 100 != 0 or $var_jahr % 400 == 0) {
    echo "Das war ein Schaltjahr!";
} else {
    echo "Das war kein Schaltjahr!";
}

print 'test';