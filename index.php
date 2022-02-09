<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Guest Book</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-light nav_cl">
  <a class="navbar-brand" href="#">Guest Book</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="guest/addEvent.php" target="_blank">Add New Event</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          History
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">History</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


<!-- End Of Navigation -->

    <!-- Start Of Container -->
    <div class="container-fluid">

        <!-- creat a simple card for my header -->
        <div class="card-header text-center mb-3  my-mt">
            <h2>Christian Guest Book</h2>
            <h4 id="clock" style="overflow: hidden" ></h4>
        </div>


        <?php

        require "guest/events.php";



        ?>
         
    </div>


    <!-- End Of Container -->


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>