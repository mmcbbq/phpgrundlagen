<?php
echo 'Der Befehl echo gibt eine oder mehrere Variablen oder Zeichenketten auf dem Bildschirm aus.';
$var1 = "variable 1";
$var2 = "variable 2";
echo $var1, $var2, "Zeichenkette";

//

echo "<div style='border-style: solid; background-color: #2be2c7 '>
  <h2>echo</h2>
  <p>echo kann auch verwendet werden, um statische Inhalte wie Text oder HTML-Code auszugeben.</p>
</div>";

echo "<div style='border-style: solid; background-color: #2be2c7 '>
  <h2>var_dump</h2>
  <p>Der Befehl var_dump gibt Informationen über eine Variable auf dem Bildschirm aus.</p>
  <p>var_dump wird häufig zur Fehlersuche verwendet, um den Inhalt einer Variablen zu überprüfen.</p>
</div>";


var_dump($var1);


