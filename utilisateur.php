<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="./app.js" defer></script>
    <title>Utilisateurs | Car Rental</title>
</head>
<body class="flex">
    <!-- side-bare -->
    <nav class="h-[100vh] w-[25%] bg-black bg-opacity-95">
            <ul class="flex flex-col gap-4 py-10 px-5 text-white">
                <a href="./main.php" class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Page d'Accueille</li></a>
                <a href="./utilisateur.php"><li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Utilisateurs</li></a>
                <a href="#"><li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Voitures</li></a>
                <a href="#"><li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Contrat</li></a>
            </ul>
            <div class="absolute bottom-2 w-[15%]">
                <ul class="flex justify-evenly">
                    <li><a href="#"><i class="fa-brands fa-facebook text-white hover:scale-110 hover:duration-500"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp text-white hover:scale-110 hover:duration-500"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram text-white hover:scale-110 hover:duration-500"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin text-white hover:scale-110 hover:duration-500"></i></a></li>
                </ul>
            </div>
        </nav>
    <main class="w-full bg-gradient-to-r from-indigo-600 p-20 ">
        <section>
            <h1 class="text-8xl">You are there !</h1><br>
            <h2 class="text-2xl">Stay up t date on all your vehicles <br> and contract expiry date.</h2><br>
            <p>Click <button onclick="utilisateurPopup()" class="underline text-red-400 hover:scale-105 hover:duration-300">here</button> to register your information.</p>
        </section>

        <section>
            <form id="popupForm" class="hidden mx-auto flex flex-col items-center gap-5 w-[60%] py-5 rounded-md shadow-lg">

                <label for="fullname"></label>
                <input id="fullName" type="text" name="fullname" placeholder="Enter Your Full Name" 
                class="w-[85%] border border-black border-opacity-70 rounded-md h-10 shadow-md pl-2 opacity-90">

                <label for="adsress"></label>
                <input id="address" type="text" name="address" placeholder="Enter Your Address" 
                class="w-[85%] border border-black border-opacity-70 rounded-md h-10 shadow-md pl-2 opacity-90">

                <label for="phone"></label>
                <input id="phone" type="number" name="phone" placeholder="Enter Your Phone Number" 
                class="w-[85%] border border-black border-opacity-70 rounded-md h-10 shadow-md pl-2 opacity-90">

                <div>
                    <input type="button" value="Save" class="cursor-pointer hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 border border-black border-opacity-50 rounded-lg px-5 py-1 shadow-lg">
                    <input onclick="cancel()" type="button" value="Cancel" class="cursor-pointer hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 border border-black border-opacity-50 rounded-lg px-4 py-1 shadow-lg">
                </div>
            </form>
        </section>
        
    </main>
</body>
</html>