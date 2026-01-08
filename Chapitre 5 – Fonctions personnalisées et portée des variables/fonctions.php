<?php
function greeting(){
    echo "Hello, World <br>";
}
greeting();

function somme($a,$b){
    return $a+$b;
}
echo "La somme est: ". somme(1,9)."<br>";

function name($nom = "student"){
    echo "Hello,".$nom. "<br>";
}
name();

$i=0;
function add(){
    static $i=0;
    $i++;
    echo $i;
}
add();
?>