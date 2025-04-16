<?php
$breadcrumb = "Pokemon details";
//get the pokemon id from the url
$pokemon_id = $_GET['id'];

//connect to the database
require 'database_connection.php';

// Use mysqli_query instead of prepared statement
$query = "SELECT * FROM cards WHERE id = $pokemon_id";
$result = mysqli_query($conn, $query);
$pokemon = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon details - Simple Version</title>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <h1><?php echo $pokemon['name']; ?></h1>

    <img src="images/<?php echo $pokemon['image']; ?>" alt="<?php echo $pokemon['name']; ?>" style="width: 200px; height: 200px;">

    <h2>Type: <?php echo $pokemon['type']; ?></h2>

    <h3>Basis Informatie:</h3>
    <ul>
        <li>Hoogte: <?php echo $pokemon['height']; ?> m</li>
        <li>Gewicht: <?php echo $pokemon['weight']; ?> kg</li>
        <li>Evolutie Stadium: <?php echo $pokemon['evolution_stage']; ?></li>
        <li>Vaardigheden: <?php echo $pokemon['abilities']; ?></li>
    </ul>

    <h3>Statistieken:</h3>
    <ul>
        <li>HP: <?php echo $pokemon['hp']; ?></li>
        <li>Aanval: <?php echo $pokemon['attack']; ?></li>
        <li>Verdediging: <?php echo $pokemon['defense']; ?></li>
    </ul>

    <h3>Beschrijving:</h3>
    <p><?php echo $pokemon['description']; ?></p>
</body>

</html>