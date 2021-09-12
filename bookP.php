<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Book </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Logo -->
    <link rel='shortcut icon' type='image/x-icon' href='images/travel.png'/>

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Css file link -->
    <link rel="stylesheet" href="css/bookP.css">
</head>
<body>
    
<?php include "includes/template/nav.php";?>

     <!-- Tabela -->
     <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Leaving</th>
            <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Going</th>
            <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Number of persons</th>
            <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Departing</th>
            <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Returning</th>
            <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Email</th>
          </tr>
        </thead>
     <!-- php -->     
     <tbody>
      <?php 
      $con=mysqli_connect("localhost: 3307","root","","travelbooking");
      mysqli_select_db($con,"travelbooking");

      $query = "SELECT * from booking order by 1 DESC";

      $run = mysqli_query($con, $query);

      while($row=mysqli_fetch_array($run)){
	
	   $b_id = $row['b_id'];
	   $leaving = $row['leaving'];
	   $going = $row['going'];
	   $nripersonave = $row['nripersonave'];
	   $departing = $row['departing'];
       $returning = $row['returning'];
       $email = $row['email'];
       ?> 
    <tr>
      <th scope="row"><?php  echo $leaving ?></th>
      <td><?php  echo $going ?></td>
      <td> <?php  echo $nripersonave ?></td>
      <td> <?php  echo $departing ?></td> 
      <td> <?php  echo $returning ?></td>
      <td> <?php  echo $email ?></td>
    </tr>
      <?php  } ?>
    </tbody>
  </table>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Js file link -->
<script src="javascript/script.js"></script>
    
    </body>
</html>