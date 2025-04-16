<?php

$breadcrumb = "Home";


require "database_connection.php";

$sql = "SELECT * FROM cards";
$result = mysqli_query($conn, $sql);
$pokemon_info = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $title; ?>
    </title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <div class="w-full">
        <!-- Hero Section -->
        <div class="px-8 py-20 text-white bg-blue-600">
            <div class="max-w-4xl mx-auto">
                <!-- <h1 class="mb-4 text-5xl font-bold"><?php echo $bericht; ?></h1> -->
                <p class="text-xl">Ontdek de wonderlijke wereld van Pokémon en bekijk mijn uitgebreide collectie!</p>
            </div>
        </div>

        <!-- Pokemon Grid -->
        <div class="px-8 py-12 mx-auto max-w-7xl">
            <h2 class="mb-8 text-3xl font-bold">Mijn Favoriete Pokémon</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

                <?php foreach ($pokemon_info as $pokemon) { ?>
                    <!-- Pokemon Card 1 -->
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                        <div class="flex justify-center">
                            <img src="images/<?php echo $pokemon['image'] ?>" alt="Pikachu"
                                class="object-contain w-full h-64">
                        </div>
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-bold"><?php echo $pokemon["name"]; ?></h3>
                            <p class="mb-4 text-gray-600"><?php echo $pokemon["type"]; ?></p>
                            <a href="pokemon_detail_simple.php?id=<?php echo $pokemon["id"]; ?>" class="text-blue-600 hover:text-blue-800">Meer informatie →</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Footer -->
        <footer class="py-12 text-white bg-gray-800">
            <div class="grid grid-cols-1 gap-8 px-8 mx-auto max-w-7xl md:grid-cols-3">
                <div>
                    <h4 class="mb-4 text-xl font-bold">Over Ons</h4>
                    <p class="text-gray-400">Wij zijn gepassioneerde Pokémon verzamelaars die onze liefde voor deze
                        geweldige wezens willen delen met de wereld.</p>
                </div>
                <div>
                    <h4 class="mb-4 text-xl font-bold">Snelle Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Verzameling</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="mb-4 text-xl font-bold">Contact</h4>
                    <p class="text-gray-400">Email: info@pokemon-verzameling.nl</p>
                    <p class="text-gray-400">Tel: +31 (0)6 12345678</p>
                    <p class="text-gray-400">Locatie: Amsterdam, Nederland</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>