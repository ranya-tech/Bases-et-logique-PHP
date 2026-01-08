<?php

$x = 5;
$y = 1;
echo "Table de multiplication: ";
function multp($x, $y){
    return $x * $y;
}
for($y; $y<= 10; $y++){
    echo "$x * $y =".multp($x, $y)."<br>";
}


?>