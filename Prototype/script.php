<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="Num1">Nombre 1</label>
        <input type="number" name="Num1">
        <label for="Num2">Nombre 2</label>
        <input type="number" name="Num2">
        <select name="operation" id="operation">
            <option value="--">--Choose operation</option>
             <option value="+">Addition +</option>
             <option value="-">Subtraction -</option>
             <option value="*">Multiplication *</option>
             <option value="/">Division /</option>
        </select>
        <input type="submit" name="btn">
    </form>

<?php
function result($num1, $num2, $oprt){
    switch($oprt){
        case "+":
            return $resultat = "$num1 + $num2 = ". ($num1 + $num2);
        case "-":
            return $resultat = "$num1 - $num2 = ". ($num1 - $num2);
        case "*":
            return $resultat = "$num1 * $num2 = ". ($num1 * $num2);
        case "/":
            if ($num2 == 0) {
               return "Erreur: division par zéro !";
            }else{
                return $resultat = "$num1 / $num2 = ". ($num1 / $num2);
            }
        default :
            return "Choisir une operation!";
    }
}
$msgs = [];
if(isset($_POST["btn"])){
    if(isset($_POST["Num1"]) && isset($_POST["Num2"]) && is_numeric($_POST["Num1"])&& is_numeric($_POST["Num2"])){
        $num1 = $_POST["Num1"];
        $num2 = $_POST["Num2"];
        $oprt = $_POST["operation"];
        echo result($num1, $num2, $oprt). "<br>";
    }else{
        if($_POST['Num1'] === ""){
            $msgs [] = "Entrer le nombre 1!<br>";
        }
        if($_POST['Num2'] === ""){
            $msgs [] = "Entrer le nombre 2!<br>";
        }
        if(!is_numeric ($_POST['Num1'])|| !is_numeric ($_POST['Num2'])){
            $msgs [] = "Entrer un nombre!<br>";
        }
        if($_POST["operation"] == "--"){
            $msgs [] = "Choisir une operation!";
        }
        foreach($msgs as $message){
            echo $message;
        }
        
    }
}
?>
</body>

</html>

