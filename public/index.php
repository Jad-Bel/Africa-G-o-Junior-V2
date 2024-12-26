<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Geo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="overflow-x-hidden relative">
    <div>
        <!-- Navbar -->
        <nav class="border-gray-200 bg-green-600 block w-screen">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img class="w-12" src="./public/img/logo.png" alt="logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Africa Gio</span>
                </a>
                <div class="hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-green-600">
                        <li><a href="./index.php" class="block py-2 px-3 text-white hover:text-green-900">Home</a></li>
                        <li><a href="./views/ajouter.php" class="block py-2 px-3 text-white hover:text-green-900">Ajouter</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section>
            <div class="w-screen h-screen flex justify-center items-center">

                <div class="bg-[url('./public/img/africa.png')] bg-cover bg-center w-[70vw] h-[70vh] rounded-xl flex justify-center items-center mb-10">

                    <div class="text-[7vw] font-semibold text-center">
                        <h1 class="text-white">Welcome To</h1>
                        <h1 class="text-green-900">AFRICA</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Countries Section -->
        <section class="flex flex-col items-center">
            <div class="w-screen h-20 flex justify-center items-center font-bold text-[32px]">
                <h1>Pays</h1>
            </div>
            <div class="w-[90vw] flex flex-wrap gap-16 justify-center">
                
                        <div id="alert-border-3" class="flex items-center p-4 mb-4  text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800 absolute w-[50vw]  rounded-lg left-0 top-20"  role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                            l'modification est un susses .
                        </div>
                        <button type="button"  onclick="closeAlert()" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
                            <span class="sr-only">Dismiss</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    
                <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        l'modification n'est pas reusse.
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-2" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            
                    <div class="max-w-sm bg-green-800  border border-gray-200 rounded-lg shadow w-[23vw]">
                        <div class="w-[22,8vw] h-[29vh] rounded-lg bg-no-repeat object-fill">
                        <a  href="./views/villes.php?id=id">
                            <img class="rounded-t-lg w-full h-full " src="image" alt="Image de name">
                        </a>
                        </div>
                        
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-100 dark:text-white">
                                name
                            </h5>
                            <div class="flex gap-2">
                                <h5 class="text-white font-extrabold font-sans">Population :</h5>
                                <p class="mb-3 text-white font-mono font-bold">population</p>
                            </div>
                            <div class="flex gap-2">
                                <h5 class="text-white font-extrabold font-sans">Langue :</h5>
                                <p class="mb-3 font-mono font-bold text-white">id</p>
                            </div>
                            <div class="flex gap-2">
                                <h5 class="text-white font-extrabold font-sans">Continent :</h5>
                                <p class="mb-3 font-mono font-bold text-white">name_continent</p>
                            </div>
                            <div class="flex gap-2">
                                <h5 class="text-white font-extrabold font-sans">Best Food :</h5>
                                <p class="mb-3 font-mono font-bold text-white">food</p>
                            </div>
                            <div class="flex gap-2">
                                <h5 class="text-white font-extrabold font-sans">Capitale :</h5>
                                <p class="mb-3 font-mono font-bold text-white">capitale</p>
                            </div>
                            <div class="flex gap-2 w-full justify-around">
                                <form action="#" method="get">
                                    <input type="hidden" value="id" name="idd">
                                    <button type="submit" name="modifecation" onclick="modification()" class="w-28 inline-flex items-center px-3 py-2 text-sm font-medium text-green-600 bg-white rounded-lg">modifier</button>
                                </form>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="id">
                                    <button type="submit" name="supprimer" class="w-28 inline-flex items-center px-3 py-2 text-sm font-medium text-green-600 bg-white rounded-lg">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tbody>
            </table>
            <div class="w-screen h-screen absolute z-20 bg-opacity-50 hidden  bg-black flex justify-center items-center" id="modification">

                <form method="post" action="./index.php" class=" w-[40vw] mb-28 h-[85vh] bg-white bg-no-repeat bg-center bg-cover  p-10 rounded-xl shadow-lg">
                <div class="w-full flex justify-end">
            <button class="w-8 h-8 rounded-full font-bold bg-red-300 " onclick="modification()">
                X
            </button>
        </div>
                    <input type="hidden" value="id" name="id_paye" />

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" value="name" name="payes" id="payes" class="block py-2.5 px-0 w-full text-lg text-blzck bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                        <label for="payes" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name payes</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="url" name="image" value="image" id="image" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                        <label for="image" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">image Ville</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="Lang" id="Lang" value="langue" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                        <label for="Lang" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Longage</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="food" id="food" value="food" class="block py-2.5 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                        <label for="food" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Best Food</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <select name="continent" class="w-full h-9 rounded-xl bg-inherit text-black text-lg border-solid border-2 border-black" id="Continent">
                        <label for="population" class="text-black  text-lg transform -translate-y-6 scale-75 top-3 -z-10">select continent</label>
                            <option value="id_continent">Africa</option>
                        </select>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" name="population" value="population" id="popilation" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-black d  focus:outline-none focus:ring-0 focus:borde-black peer" placeholder=" " required />
                        <label for="population" class="text-black peer-focus:font-medium absolute text-lg text-whit duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">popilation</label>
                    </div> <button type="submit" name="modifer"
                        class="mt-5 w-full py-3 px-6 bg-green-600 hover:bg-green-400 text-white font-medium rounded-lg focus:outline-none focus:ring-4 focus:ring-green-300 text-xl transition">
                        Submit
                    </button>
                </form>
            </div>


    </div>
    </section>
 <script src="./public/js/script.js"></script>
    </div>
</body>

</html>