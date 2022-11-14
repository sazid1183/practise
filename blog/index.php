<?php
if(isset($_REQUEST["ganja"])){
    ?>

    <!doctype html>
<html lang="en">

<head>
  <title>Header</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
  
  <link rel="stylesheet" href="css/webpage.css">
  
</head>

<body>
  <header>
    <!-- place navbar here -->
        <nav class="nav">
            <p>MyDesign</p>
            <input type="checkbox">
            <P class="three_dot">|||</P>
        <ul>
            <li><a href="#" class="">Home</a></li>
            <li><a href="#" class="active">Services</a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">About us</a></li>
        </ul>
        </nav>
</header>

  <main class="main">
    <div class="regular">
      <h2>Regular</h1>
        <ul>
          <li><i class="bi bi-check-lg">1 Token each month</i> </li>
          <li><i class="bi bi-check-lg">Partition changes</i> </li>
          <li><i class="bi bi-check-lg">Format feauture</i> </li>
          <li><i class="bi bi-check-lg">Know about deleted data </i> </li>
          <li><i class="bi bi-check-lg">Boot Pendrive</i> </li>
          <li><del><i class="bi bi-x">Data recovery</i></del></li>
          <li><del><i class="bi bi-x">Help of our team member</i></del></li>
        </ul>
        <h3 class="price free">Free</h3>
    </div>
    <div class="Pro">
      <h2>Pro</h1>
        <ul>
          <li><i class="bi bi-check-lg">3 Token each month</i> </li>
          <li><i class="bi bi-check-lg">Partition changes</i> </li>
          <li><i class="bi bi-check-lg">Format feauture</i> </li>
          <li><i class="bi bi-check-lg">Know about deleted data </i> </li>
          <li><i class="bi bi-check-lg">Boot Pendrive</i> </li>
          <li><i class="bi bi-check-lg">Data recovery</i></li>
          <li><del><i class="bi bi-x">Help of our team member</i></del></li>
        </ul>
        <h3 class="price pro">100$</h3>
    </div>
    <div class="premium">
      <h2>Premium</h1>
        <ul>
          <li><i class="bi bi-check-lg">5 Token each month</i> </li>
          <li><i class="bi bi-check-lg">Partition changes</i> </li>
          <li><i class="bi bi-check-lg">Format feauture</i> </li>
          <li><i class="bi bi-check-lg">Know about deleted data </i> </li>
          <li><i class="bi bi-check-lg">Boot Pendrive</i> </li>
          <li><i class="bi bi-check-lg">Data recovery</i></li>
          <li><i class="bi bi-check-lg">Help of our team member</i></li>
        </ul>
        <h3 class="price premium">300$</h3>
    </div>

    
  </main>


  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
<?php

}