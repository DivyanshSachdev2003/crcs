<?php include 'dbconnect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRCS Register Portal</title>    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <span class="ml-3 text-xl">CRCS Registration Portal</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href="#" class="mr-5 hover:text-gray-900">Get Details</a>
      <a href="register.php"class="mr-5 hover:text-gray-900">Register</a>
    </nav> 
  </div>
</header>
<hr><hr><hr><hr><hr>
<?php
                                $sql = "SELECT * FROM `register`"; 
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){
                                  $name = $row['Society_name'];
                $address = $row['Address'];
                $state = $row['State'];
                $dist = $row['District'];
                $date = $row['Register_date'];
                $area = $row['Operation_area'];
                $sector = $row['sector'];
                echo'
<section class="text-gray-600 body-font overflow-hidden style:">
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">'.$name.'</span>
          <span class="mt-1 text-gray-500 text-sm">'.$date.'</span>
          <span class="mt-1 text-gray-500 text-sm">'.$sector.'</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">'.$address.'</h2>
          <p class="leading-relaxed">'.$dist.'</p>
          <p class="leading-relaxed">'.$state.'</p>
          <h3 class="text-xl font-medium text-gray-900 title-font mb-2">'.$area.'</h3>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>';
                                }
?>
</body>
</html>'

