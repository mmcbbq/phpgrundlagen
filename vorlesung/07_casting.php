<?php
//(string) wandelt den Datentyp in einen string
//(int) - wandelt den Datentyp in einen string Integer
//(float) - wandelt den Datentyp in einen string Float
//(bool) - wandelt den Datentyp in einen string Boolean

$integer = 5;       // Integer
$float = 5.34;    // Float
$string = "hello"; // String
$bool = true;    // Boolean
$null = NULL;    // NULL

$integer = (string) $integer;
$float = (string) $float;
$string = (string) $string;
$bool = (string) $bool;
$null = (string) $null;

//Um den Datentypen einer Variable zu pruefen benutzte var_dump
echo "aus dem interger 5 wird nach (string) $integer <br>";
var_dump($integer);
echo "<br>aus dem float 5.34 wird nach (string) $float <br>";
var_dump($float);
echo "<br>aus dem string 'hello' wird nach (string) $string <br>";
var_dump($string);
echo "<br>aus dem boolean 'true' wird nach (string) $bool <br>";
var_dump($bool);
echo "<br>aus dem null wird nach (string) $null <br>";
var_dump($null);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$integer = 5;       // Integer
$float = 5.34;    // Float
$string = "hello"; // String
$string_mit_int_anfang = "25 kilometers"; // String
$string_mit_int_ende = "kilometers 25"; // String
$bool = true;    // Boolean
$null = NULL;    // NULL

$integer = (int) $integer;
$float = (int) $float;
$string = (int) $string;
$string_mit_int_anfang = (int) $string_mit_int_anfang; // String
$string_mit_int_ende = (int) $string_mit_int_ende; // String


$bool = (int) $bool;
$null = (int) $null;

// Um den Datentypen einer Variable zu prüfen, verwenden Sie var_dump
echo "aus dem integer 5 wird nach (int) $integer <br>";
var_dump($integer);
echo "<br>aus dem float 5.34 wird nach (int) $float wird immer abgerundet <br>";
var_dump($float);
echo "<br>aus dem string 'hello' wird nach (int) $string <br>";
var_dump($string);
echo "<br>aus dem string_mit_int_anfang '25 kilometers' wird nach (int) $string_mit_int_anfang <br>";
var_dump($string_mit_int_anfang);
echo "$<br>aus dem string_mit_int_ende 'kilometers 25' wird nach (int) $string_mit_int_ende <br>";
var_dump($string_mit_int_ende);
echo "<br>aus dem boolean 'true' wird nach (int) $bool <br>";
var_dump($bool);
echo "<br>aus dem null wird nach (int) $null <br>";
var_dump($null);

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

$integer = 5;       // Integer
$float = 5.34;    // Float
$string = "hello"; // String
$string_mit_int_anfang = "25 kilometers"; // String
$string_mit_int_ende = "kilometers 25"; // String
$bool = true;    // Boolean
$null = NULL;    // NULL

$integer = (float) $integer;
$float = (float) $float;
$string = (float) $string;
$string_mit_int_anfang = (float) $string_mit_int_anfang; // String
$string_mit_int_ende = (float) $string_mit_int_ende; // String
$bool = (float) $bool;
$null = (float) $null;

// Um den Datentypen einer Variable zu prüfen, verwenden Sie var_dump
echo "aus dem integer 5 wird nach (float) $integer <br>";
var_dump($integer);
echo "<br>aus dem float 5.34 wird nach (float) $float <br>";
var_dump($float);
echo "<br>aus dem string 'hello' wird nach (float) $string <br>";
var_dump($string);
echo "<br>aus dem string_mit_int_anfang '25 kilometers' wird nach (float) $string_mit_int_anfang <br>";
var_dump($string_mit_int_anfang);
echo "<br>aus dem string_mit_int_ende 'kilometers 25' wird nach (float) $string_mit_int_ende <br>";
var_dump($string_mit_int_ende);
echo "<br>aus dem boolean 'true' wird nach (float) $bool <br>";
var_dump($bool);
echo "<br>aus dem null wird nach (float) $null <br>";
var_dump($null);


echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";


$integer = 5;       // Integer
$float = 5.34;    // Float
$string = "hello"; // String
$bool = true;    // Boolean
$null = NULL;    // NULL
$int0 = 0; // Integer
$int_minus = -1; // Integer
$string_leer = "";
$integer = (bool) $integer;
$float = (bool) $float;
$string = (bool) $string;
$bool = (bool) $bool;
$null = (bool) $null;
$int0 = (bool) $int0;
$int_minus = (bool) $int_minus;
$string_leer = (bool) $string_leer;
// Um den Datentypen einer Variable zu prüfen, verwenden Sie var_dump
echo "aus dem integer 5 wird nach (bool) $integer <br>";
var_dump($integer);
echo "<br>aus dem float 5.34 wird nach (bool) $float <br>";
var_dump($float);
echo "<br>aus dem string 'hello' wird nach (bool) $string <br>";
var_dump($string);
echo "<br>aus dem boolean 'true' wird nach (bool) $bool <br>";
var_dump($bool);
echo "<br>aus dem null wird nach (bool) $null <br>";
var_dump($null);
echo "<br>aus dem integer 0 wird nach (bool) $int0 <br>";
var_dump($int0);
echo "<br>aus dem integer -1 wird nach (bool) $int_minus <br>";
var_dump($int_minus);
echo "<br>aus dem leeren string '' wird nach (bool) $string_leer <br>";
var_dump($string_leer);


