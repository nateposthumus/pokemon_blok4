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
    <title>Pokemon details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body class="bg-gray-100 min-h-screen py-8">
    <?php include 'navbar.php'; ?>
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-8">
                <div class="flex flex-col items-center">
                    <h1 class="text-4xl font-bold text-gray-800 mb-6"><?php echo $pokemon['name']; ?></h1>
                    <div class="w-64 h-64 mb-6 rounded-lg overflow-hidden shadow-md">
                        <img src="images/<?php echo $pokemon['image']; ?>"
                            alt="<?php echo $pokemon['name']; ?>"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Type Badge -->
                    <div class="mb-6">
                        <span class="px-4 py-2 rounded-full text-white font-semibold
                            <?php echo match ($pokemon['type']) {
                                'Elektrisch' => 'bg-yellow-500',
                                'Vuur' => 'bg-red-500',
                                'Water' => 'bg-blue-500',
                                'Gras' => 'bg-green-500',
                                'Psychisch' => 'bg-purple-500',
                                default => 'bg-gray-500'
                            }; ?>">
                            <?php echo $pokemon['type']; ?>
                        </span>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mb-6">
                        <!-- Basic Info -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-xl font-semibold mb-4">Basis Informatie</h2>
                            <div class="space-y-2">
                                <p><span class="font-medium">Hoogte:</span> <?php echo $pokemon['height']; ?> m</p>
                                <p><span class="font-medium">Gewicht:</span> <?php echo $pokemon['weight']; ?> kg</p>
                                <p><span class="font-medium">Evolutie Stadium:</span> <?php echo $pokemon['evolution_stage']; ?></p>
                                <p><span class="font-medium">Vaardigheden:</span> <?php echo $pokemon['abilities']; ?></p>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-xl font-semibold mb-4">Statistieken</h2>
                            <div class="space-y-4">
                                <div>
                                    <p class="font-medium">HP</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-green-500 h-2.5 rounded-full" style="width: <?php echo ($pokemon['hp'] / 150) * 100; ?>%"></div>
                                    </div>
                                    <p class="text-sm text-gray-600"><?php echo $pokemon['hp']; ?></p>
                                </div>
                                <div>
                                    <p class="font-medium">Aanval</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-red-500 h-2.5 rounded-full" style="width: <?php echo ($pokemon['attack'] / 150) * 100; ?>%"></div>
                                    </div>
                                    <p class="text-sm text-gray-600"><?php echo $pokemon['attack']; ?></p>
                                </div>
                                <div>
                                    <p class="font-medium">Verdediging</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: <?php echo ($pokemon['defense'] / 150) * 100; ?>%"></div>
                                    </div>
                                    <p class="text-sm text-gray-600"><?php echo $pokemon['defense']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="bg-gray-50 p-6 rounded-lg w-full">
                        <h2 class="text-xl font-semibold mb-4">Beschrijving</h2>
                        <p class="text-gray-600 text-lg leading-relaxed"><?php echo $pokemon['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>