<?php
$name = "Ranya";
$age = 26;
$price= 20;
$isvalid = true;
$cours = ["PHP", "JS"];

echo "Name : " .$name. "<br>";
echo "Age : " .$age. "<br>";
echo "Price : " .$price. "€<br>";
echo "Valide : " .($isvalid ? "Yes" : "No"). "<br>";

var_dump($name);

$nombre = "6";
$nombreInt = (int)$nombre;
echo "Conversion : " . $nombreInt;
?>