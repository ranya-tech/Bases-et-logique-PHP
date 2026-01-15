<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Name"><br>
        <label for="age">Age</label>
        <input type="number" name="age" placeholder="Age"><br>
        <label for="gender">Gender: </label>
        <label for="gender">Male</label>
        <input type="radio" name="gender" value="male">
        <label for="gender">Female</label>
        <input type="radio" name="gender" value="female"><br>
        <input type="submit" name="btn">
    </form>
<?php


if(isset($_POST["btn"])){
    if(empty($_POST['name'])){
        echo "Enter your name";
    }elseif(empty($_POST["age"]) || !is_numeric($_POST["age"])){
        echo "Enter your age";
    }elseif((!isset($_POST["gender"]))){
        echo "Choose gender";
    }else{
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];

        if($gender == "male"){
            $gend = "Mr";
        } else {
            $gend = "Mme";
        }
        echo $gend. ", ".$name. " is ".$age. " years old";
    }
}
?>
</body>
</html>
