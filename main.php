<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <main class="flex">

        <nav class="h-[100vh] w-[15%] bg-slate-700">
            <ul class="flex flex-col gap-4 py-10 px-5 text-white">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500"><a href="#">Page d'Accueille</a></li>
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500"><a href="#">Utilisateurs</a></li>
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500"><a href="#">Voitures</a></li>
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

        <!-- <section class="bg-red-100">
            <h1>Hello</h1>
        </section> -->
    </main>
</body>
</html>