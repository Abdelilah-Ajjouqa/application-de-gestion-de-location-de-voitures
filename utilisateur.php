<?php
require 'config-db.php';
$result = $conn->query("SELECT * FROM client");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="./app.js" defer></script>
    <title>Utilisateurs | Car Rental</title>
</head>

<body class="flex bg-gradient-to-r from-indigo-600 ">
    <!-- side-bare -->
    <nav class="h-[100vh] w-[25%] bg-black bg-opacity-95">
        <ul class="flex flex-col gap-4 py-10 px-5 text-white">
            <a href="./main.php"
                class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Page
                d'Accueille</li></a>
            <a href="./utilisateur.php">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">
                    Utilisateurs</li>
            </a>
            <a href="#">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Contrat
                </li>
            </a>
            <a href="./voitures.php">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Voitures
                </li>
            </a>
        </ul>
        <div class="absolute bottom-2 w-[15%]">
            <ul class="flex justify-evenly">
                <li><a href="#"><i class="fa-brands fa-facebook text-white hover:scale-110 hover:duration-500"></i></a>
                </li>
                <li><a href="#"><i class="fa-brands fa-whatsapp text-white hover:scale-110 hover:duration-500"></i></a>
                </li>
                <li><a href="#"><i class="fa-brands fa-instagram text-white hover:scale-110 hover:duration-500"></i></a>
                </li>
                <li><a href="#"><i class="fa-brands fa-linkedin text-white hover:scale-110 hover:duration-500"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- main page -->
    <!-- <main>
        
        <div class="w-full">
            <button onclick="addClient()"
            class="bg-violet-950 px-3 py-1 text-white text-xl rounded shadow-lg shadow-violet-600 hover:scale-95 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85">
                Add New Client</button>
        </div>
        <section class="p-10">
            <div class="table-wrapper">
                <?php
                echo "
        <table class='custom-table'>
        <thead>
            <tr>
                <th>N.Client</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Duration</th>
                <th>N.Telephone</th>
            </tr>
        </thead>
            <tr>
                <th>1</th>
                <td>Abdelilah Ajjouqa</td>
                <td>Fes, Maroc</td>
                <td>11/12/2024</td>
                <td>15/01/2025</td>
                <td>35</td>
                <td>0775398853</td>
            </tr>
        </table>
        ";
                ?>
            </div>
        </section>
        </main>

        <form id="firstForm" action="" 
        class=
        "hidden w-[40%] p-8 flex flex-col gap-8 items-center absolute top-20 left-1/3 bg-gradient-to-br from-indigo-800 shadow-lg rounded">
        <label for="name"></label>
        <input id="name" type="text" placeholder="Enter Your Name" required id="name"
        class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

        <label for="adress"></label>
        <input type="text" placeholder="Enter Your Adress" required id="adress"
        class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

        <label for="phone"></label>
        <input type="number" placeholder="Enter Your Phone Number" required id="phone"
        class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

        <div>
            <input onclick="nextPopup()" type="button" value="Add New Car" 
            class="cursor-pointer px-4 py-1 bg-indigo-400 shadow-md rounded hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 hover:text-white">
            
            <input onclick="saveFirstForm()" type="button" value="Save"
            class="cursor-pointer px-4 py-1 bg-indigo-400 shadow-md rounded hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 hover:text-white">
            
            <input onclick="closeFirst()" type="button" value="Cancel"
            class="cursor-pointer px-4 py-1 bg-indigo-400 shadow-md rounded hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 hover:text-white">
        </div>
        </form>

        <form id="secondForm" action="" 
        class=
        "hidden w-[40%] p-8 flex flex-col gap-8 items-center absolute top-20 left-1/3 bg-gradient-to-br from-indigo-800 to-indigo-300 shadow-lg rounded">
        <label class="text-xl text-white self-start" for="">Select The Marque Of Your Car :</label>
        <select required id="marque"
        class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">
            <option value="audi">Audi</option>
            <option value="bmw">Bmw</option>
            <option value="ford">Ford</option>
            <option value="nissan">Nissan</option>
            <option value="toyota">Toyota</option>
        </select>

        <label class="text-xl text-white self-start" for="">Enter the Model's Of Your Car :</label>
        <input type="text" required id="modele"
        class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

        <label class="text-xl text-white self-start" for="">Year :</label>
        <input type="date" required id="date"
        class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

        <div>
            <input onclick="secondePopup()" type="button" value="Save" 
            class="cursor-pointer px-4 py-1 bg-indigo-400 shadow-md rounded hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 hover:text-white">
            
            <input onclick="closeSconde()" type="button" value="Cancel" 
            class="cursor-pointer px-4 py-1 bg-indigo-400 shadow-md rounded hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 hover:text-white">
        </div>
        </form> -->








    <!-- main page  2-->
    <section class="flex flex-col gap-5 items-center w-full">
        <div class="my-3">
            <button onclick="addClient()"
                class="bg-violet-950 px-6 py-1 text-white text-xl rounded shadow-lg shadow-violet-600 hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85">
                Add New Car
            </button>
        </div>

        <div class="table-wrapper">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>N.Client</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>N.Telephone</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tbody>
                    <tr>
                        <th scope='row'>{$row['clientId']}</th>
                        <td>{$row['name']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['phone']}</td>
                        <td><button class='btn-edit'><i class='fa-solid fa-pen-to-square hover:text-green-600'></i></button></td>
                        <td><button class='btn-delete'><i class='fa-solid fa-trash hover:text-red-600'></i></button></td>
                        </tr>
                        </tbody>";
                    }
                ?>
            </table>
        </div>

        <form id="firstForm" action="./assests/clients.php" method="POST"
            class="hidden w-[40%] p-8 flex flex-col gap-8 items-center absolute top-20 left-1/3 bg-gradient-to-br from-indigo-800 shadow-lg rounded">
            <label for="name"></label>
            <input id="name" type="text" placeholder="Enter Your Name" required name="name"
                class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

            <label for="adress"></label>
            <input type="text" placeholder="Enter Your Adress" required name="address"
                class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

            <label for="phone"></label>
            <input type="number" placeholder="Enter Your Phone Number" required name="phone"
                class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

            <div>
                <input onclick="saveFirstForm()" type="submit" value="Save"
                    class="cursor-pointer px-4 py-1 bg-indigo-400 shadow-md rounded hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 hover:text-white">

                <input onclick="closeFirst()" type="button" value="Cancel"
                    class="cursor-pointer px-4 py-1 bg-indigo-400 shadow-md rounded hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 hover:text-white">
            </div>
        </form>
    </section>
</body>

</html>