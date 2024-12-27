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
                <img src="/placeholder.svg?height=48&width=48" alt="Africa Gio Logo" class="w-12 h-12">
                <span class="text-2xl font-semibold text-white">Africa Gio</span>
            </a>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white hover:text-green-200">Home</a></li>
                <li><a href="#" class="text-white hover:text-green-200">Ajouter</a></li>
            </ul>
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
        <?php
             foreach($pays as $row){
             ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Country Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/placeholder.svg?height=200&width=400" alt="Country Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Nigeria</h3>
                    <p><strong>Population:</strong> 206 million</p>
                    <p><strong>Langue:</strong> English</p>
                    <p><strong>Continent:</strong> Africa</p>
                    <p><strong>Best Food:</strong> Jollof Rice</p>
                    <p><strong>Capitale:</strong> Abuja</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Modifier</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Supprimer</button>
                    </div>
                </div>
            </div>

            <!-- Country Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/placeholder.svg?height=200&width=400" alt="Country Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">South Africa</h3>
                    <p><strong>Population:</strong> 59 million</p>
                    <p><strong>Langue:</strong> 11 official languages</p>
                    <p><strong>Continent:</strong> Africa</p>
                    <p><strong>Best Food:</strong> Bobotie</p>
                    <p><strong>Capitale:</strong> Pretoria, Cape Town, Bloemfontein</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Modifier</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Supprimer</button>
                    </div>
                </div>
            </div>

            <!-- Country Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/placeholder.svg?height=200&width=400" alt="Country Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Egypt</h3>
                    <p><strong>Population:</strong> 102 million</p>
                    <p><strong>Langue:</strong> Arabic</p>
                    <p><strong>Continent:</strong> Africa</p>
                    <p><strong>Best Food:</strong> Koshari</p>
                    <p><strong>Capitale:</strong> Cairo</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Modifier</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Supprimer</button>
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