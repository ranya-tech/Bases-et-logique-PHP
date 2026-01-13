
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
    if(isset($_POST['name'], $_POST['gender'])){
        $name = $_POST['name'];
        $gender = $_POST ['gender'];
    }else{
        echo "Entre your name";
    }
    if(isset($_POST['age'])){
        if(is_numeric($_POST['age'])){
            $age = $_POST['age'];
        }
    }else{
        echo "Entre age";
    }
    if($gender =="male"){
         $gend = "Mr";
    }else{
         $gend = "Mme";
    }
    echo $gend.",".($name)." a " .($age). " ans";
}
?>
</body>
</html>
