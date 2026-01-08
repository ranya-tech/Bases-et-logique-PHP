<?php
$week = ["Monday","Tuesday","Wednsday","Thursday","Friday","Saturday","Sunday"];
echo "Weekend : ".$week[5].", " .$week[6]. "<br>";
echo "Days of the week: <br>";
foreach($week as $day){
    echo " $day <br>";
};

$cars = [
    "brand" => "Porsche",
    "model" => "Cayenne",
    "Year" => "2018"
];
echo "Brand: ".$cars["brand"]."<br>";

echo "Days of the week: ". count($week);

?>