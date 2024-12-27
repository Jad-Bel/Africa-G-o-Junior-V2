
<?php

require __DIR__."/.././CONTROLLER/pays.php";

$pays = new Pays();
$pays = $pays->readPays();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Gio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body class="bg-gray-100">
    <nav class="bg-green-600 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#" class="flex items-center space-x-3">
                <img src="../src/img/logo.png" alt="Africa Gio Logo" class="w-12 h-12">
                <span class="text-2xl font-semibold text-white">Africa Gio</span>
            </a>
            <a href="../public/views/login.php">singup</a>
         
        </div>
    </nav>

    <header class="bg-green-800 text-white py-20 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to AFRICA</h1>
            <p class="text-xl md:text-2xl">Discover the beauty and diversity of the African continent</p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-12 px-4">
  
        <a href="../public/views/ville">
        <h2 class="text-3xl font-bold text-center mb-12 ">Pays</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Country Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <?php
             foreach($pays as $row){
             ?>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2"><?= htmlspecialchars($row['nom_pays']) ?></h3>
                    <p><strong>Population:</strong> <?= htmlspecialchars($row['POPULATION']) ?></p>
                    <p><strong>Langue:</strong> <?= htmlspecialchars($row['LANGAUGE_PAYS']) ?></p>
                    <p><strong>Continent:</strong> Africa</p>

                 
                </div>
            </div>

        </div>
            <?php }?>
        </div>
    </main>

    <footer class="bg-green-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2023 Africa Gio. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>