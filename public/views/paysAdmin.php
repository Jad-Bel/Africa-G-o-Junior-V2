<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afriqua Geo - Pays Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-green-600 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#" class="flex items-center space-x-3">
                <img src="/placeholder.svg?height=48&width=48" alt="Africa Gio Logo" class="w-12 h-12">
                <span class="text-2xl font-semibold text-white">Africa Gio</span>
            </a>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white hover:text-green-200">log-out</a></li>
            </ul>
        </div>
    </nav>

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r">
            <div class="p-6">
                <h1 class="text-xl font-semibold text-gray-800">Navigation</h1>
            </div>
            <nav class="mt-6">
                <a href="../views/continentAdmin.php" class="flex items-center px-6 py-3 text-gray-600 hover:bg-green-600 hover:text-white transition-all duration-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    Continent
                </a>
                <a href="../views/paysAdmin.php" class="flex items-center px-6 py-3 bg-green-600 text-white">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Pays
                </a>
                <a href="../views/villeAdmin.php" class="flex items-center px-6 py-3 text-gray-600 hover:bg-green-600 hover:text-white transition-all duration-500">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Ville
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-auto">
            <div class="p-8">
                <!-- Header -->
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800">Pays Dashboard</h2>
                </div>

                <!-- Countries Table -->
                <div class="bg-white shadow-xl mb-8">
                    <div class="px-6 py-4 border-b border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-800">Management des Pays</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50 border-b border-gray-100">
                                <tr>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Country Name</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Capital</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Population</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Continent</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Nigeria</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Abuja</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">206,139,589</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Africa</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                        <a href="#" class="inline-flex items-center px-3 py-1.5 border border-green-400 text-sm font-medium text-black bg-white hover:bg-green-600 hover:text-white hover:transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                                            Modifier
                                        </a>
                                        <a href="#" class="inline-flex items-center px-3 py-1.5 border border-red-400 text-sm font-medium text-black bg-white hover:bg-red-700 hover:text-white hover:transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                            Supprimer
                                        </a>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">South Africa</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Pretoria</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">59,308,690</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Africa</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                        <a href="#" class="inline-flex items-center px-3 py-1.5 border border-green-400 text-sm font-medium text-black bg-white hover:bg-green-600 hover:text-white hover:transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                                            Modifier
                                        </a>
                                        <a href="#" class="inline-flex items-center px-3 py-1.5 border border-red-400 text-sm font-medium text-black bg-white hover:bg-red-700 hover:text-white hover:transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                            Supprimer
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Add New Country Form -->
                <div class="bg-white shadow-xl">
                    <div class="p-6 border-b">
                        <h2 class="text-xl font-semibold">Ajouter un Pays</h2>
                    </div>
                    <div class="p-6">
                        <form class="space-y-6" method="POST" action="pays-admin.html">
                            <input type="hidden" name="country_id" value="1">

                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="countryName">Nom du Pays</label>
                                <input type="text" name="countryName" id="countryName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="population">Population</label>
                                <input type="number" name="population" id="population" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="continent">Continent</label>
                                <select name="continent" id="continent" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <option value="africa">Africa</option>
                                </select>
                            </div>
                            
                            <div class="flex justify-end space-x-3">
                                <button type="submit" class="px-4 py-2 bg-white text-black hover:text-white hover:bg-green-600 hover:transition-all duration-500">
                                    Save Country
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-green-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2023 Africa Gio. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Table row hover effect
            const tableRows = document.querySelectorAll('tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.classList.add('bg-gray-50');
                });
                row.addEventListener('mouseleave', function() {
                    this.classList.remove('bg-gray-50');
                });
            });
        });
    </script>
</body>
</html>