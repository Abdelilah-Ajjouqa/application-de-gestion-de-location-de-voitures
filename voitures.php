<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Voitures | Car Rental</title>
</head>

<body class="flex">

    <!-- side-bare -->
    <nav class="h-[100vh] w-[25%] bg-black bg-opacity-95">
        <ul class="flex flex-col gap-4 py-10 px-5 text-white">
            <a href="./main.php" class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Page d'Accueille</li></a>
            <a href="./utilisateur.php">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Utilisateurs</li>
            </a>
            <a href="#">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Contrat</li>
            </a>
            <a href="./voitures.php">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Voitures</li>
            </a>
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

    <!-- main page -->
    <main>
        <section class="p-10">
            <h1 class="text-5xl">All Cars There :</h1>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Cars</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                        <td>Malcolm Lockyer</td>
                        <td>1961</td>
                    </tr>
                    <tr>
                        <td>Witchy Woman</td>
                        <td>The Eagles</td>
                        <td>1972</td>
                    </tr>
                    <tr>
                        <td>Shining Star</td>
                        <td>Earth, Wind, and Fire</td>
                        <td>1975</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>

</html>