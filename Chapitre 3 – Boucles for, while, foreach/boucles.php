<?php
echo "Boucle for:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Nombre : $i <br>";
};

echo "Boucle foreach:<br>";
$animaux = ["Chat", "Chien", "Lapin"];
foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
};
?>