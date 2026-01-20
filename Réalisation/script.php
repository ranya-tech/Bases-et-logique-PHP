<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application PHP simple</title>
</head>
<body>
    <header>
        <h1>Gestion simplifiée d'une bibliothèque</h1>
        <form method="GET">
            <input type="text" name="search" placeholder="Recherche">
            <button type="submit" name="btn"><img src="search.png" alt="search" width="10" height="10"></button>
        </form>
    </header>
<?php
$books = [
    ["title" =>"Apprendre PHP", "author" =>"Fatine Chebab", "year" =>2024, "price" => 120, "disponible" =>true],
    ["title" =>"JavaScript pour débutants", "author" =>"Ali Ahmed", "year" =>2023, "price" =>100, "disponible" =>false],
    ["title" =>"HTML & CSS", "author" =>"Sara Benali", "year" =>2022, "price" =>80, "disponible" =>true],
    ["title" =>"Python avancé", "author" =>"Mohamed Karim", "year" =>2025, "price" =>150, "disponible" =>true],
    ["title" =>"Design UX/UI", "author" =>"Leila Mansour", "year" =>2023, "price" =>90, "disponible" =>false],
    ["title" =>"Bases de données MySQL", "author" =>"Youssef Amrani", "year" =>2024, "price" =>110, "disponible" =>true],
    ["title" =>"Java avancé", "author" =>"Khadija Lahlou", "year" =>2021, "price" =>130, "disponible" =>true],
    ["title" =>"C++ pour débutants", "author" =>"Omar Saidi", "year" =>2022, "price" =>95, "disponible" =>false],
    ["title" =>"Algorithmique et structures de données", "author" =>"Imane Rami", "year" =>2023, "price" =>140, "disponible" =>true],
    ["title" =>"WordPress pour tous", "author" =>"Rachid Bensalem", "year" =>2024, "price" =>85, "disponible" =>true]
];

$table = "<h3>Livres</h3>
        <table border='1'>
            <tr>
               <th>Titre</th>
               <th>Auteur</th> 
               <th>Année de publication</th>
               <th>Prix</th>
               <th>Disponibilité</th>
            </tr>
        ";
if(isset($_GET['btn']) && !empty($_GET['search'])){
    $search = strtolower($_GET['search']);
        $result = array_filter($books,function($b) use ($search){
        return strpos(strtolower($b['title']), $search) !== false;
    });
    if (empty($result)) {
        echo "<h3>Résult</h3> Aucun livre trouvé.";
    } else{
        foreach ($result as $book) {
            echo "<h3>Résult</h3> 
            <table border='1'> <tr>
            <th>Titre</th>
               <th>Auteur</th> 
               <th>Année de publication</th>
               <th>Prix</th>
               <th>Disponibilité</th>
            </tr> <tr>
            <td>".$book["title"]."</td>
            <td>".$book["author"]."</td>
            <td>".$book["year"]."</td>
            <td>".$book["price"]." DH"."</td>
            <td>".($book['disponible'] ? "Disponible" : "Non-disponible")."</td>
        </tr> </table> <br>";
        }
    }
}
$grandTotal = 0;
foreach($books as $book){
    if($book['disponible']){
        $table.= "<tr>
                    <td>".$book["title"]."</td>
                    <td>".$book["author"]."</td>
                    <td>".$book["year"]."</td>
                    <td>".$book["price"]." DH"."</td>
                    <td>".($book['disponible'] ? "Disponible" : "Non-disponible")."</td>
                </tr>
        ";
        $total = $book["price"];
        $grandTotal += $total;
    }
}
$table.= "</table>";
echo $table."<br>";
echo "<strong>Total des prix des livres disponibles:</strong> ".$grandTotal;
?>
</body>
</html>