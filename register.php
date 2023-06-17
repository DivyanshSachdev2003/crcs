<?php include 'dbconnect.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRCS Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <span class="ml-3 text-xl">CRCS Registration Portal</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href="index.php" class="mr-5 hover:text-gray-900">Get Details</a>
      <a href="#"class="mr-5 hover:text-gray-900">Register</a>
    </nav> 
  </div>
</header>
<hr><hr><hr><hr><hr>

<h2 class="text-2xl font-bold mb-4">Register a Society</h2>
    <div class="flex justify-center items-center h-screen">
        <div class="w-1/3">
            <?php 
                $name = $_POST['name'];
                $address = $_POST['address'];
                $state = $_POST['state'];
                $dist = $_POST['dist'];
                $date = $_POST['date'];
                $area = $_POST['area'];
                $sector = $_POST['sector'];
             
             $sql = "INSERT INTO `register` (`Society_name`, `Address`, `State`, `District`, `Register_date`, `Operation_area`, `sector`) VALUES ( '$name', '$address', '$state', '$dist', '$date', '$area', '$sector')";
             $result = mysqli_query($conn, $sql);
            ?>
            <form method="post" action="register.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Name of Society">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Address:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" name="address" type="text" placeholder="Address">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">State:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="state" name="state" type="text" placeholder="State">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">District:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dist" name="dist" type="text" placeholder="District">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Date of Registartion:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" name="date" type="date" placeholder="registration Date">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Area of Operation:</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="area" name="area" placeholder="Area of Operation"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Sector Type:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sector" name="sector" type="text" placeholder="Sector Type">
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>