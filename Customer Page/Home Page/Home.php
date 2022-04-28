<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Imanstudio.com/Home</title>
    
    <link rel="stylesheet" href="home.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  </head>
  <body>
    <div class="full-page">
      <div class="sub-page">

        <!--Navigation bar -->
        <div class="navigation-bar">
          <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
              <i class="fas fa-bars"></i>
            </label>
            <label class="logo"><a href="../Home Page/Home.php"><img src="images/logo.png"></a></label>

            <ul>
              <li><a href="../Home Page/Home.php"style="color: #ffde00;">Home</a></li>
              <li><a href="../About Page/about.php">About</a></li>
              <li><a href="../Album Page/album.php">Album</a></li>
              <li><a href="../Contact Page/Contact.php">Contact</a></li>
              <li><a href="../Book Online Page/book.php">Book Online</a></li>
              <li><a href="../Login Page/login.php">Login</a></li>
            </ul>
          </nav>
        </div>

        <!--Page header-->
        <div class="header">
          <h1>Package Available</h1>
        </div>

        <div class="row">

          <div class="container">
            <div class="column">
              <img src="images/Pakej A.jpeg" alt="Pakej A" class="image">
            </div>

            <div class="overlay">
              <div class="text"><a href="../Book Online Page/reservation.php">BOOK NOW!!</a></div>
            </div>
          </div>

          <div class="container">
            <div class="column">
              <img src="images/Pakej B.jpeg" alt="Pakej B" class="image">
            </div>

            <div class="overlay">
              <div class="text"><a href="../Book Online Page/reservation.php">BOOK NOW!!</a></div>
            </div>
          </div>

          <div class="container">
            <div class="column">
              <img src="images/Pakej C.jpeg" alt="Pakej C" class="image">
            </div>

            <div class="overlay">
              <div class="text"><a href="../Book Online Page/reservation.php">BOOK NOW!!</a></div>
            </div>

          </div>

        </div>

        <div class="page-content">
          <br><br>
          <h1>Our Professional Service</h1>

          <br>
          <br>

          <h3>Photography Service</h3>

          <p>We provide professional photography service for all kind of event whether it's a large scale,
            small event or private for wedding,comercial,advertisement,personal or corporat event. 
            We will help you to capture each moment during your event with a good quality outcome.
          </p>

          <h3>Videography Service</h3>

          <p>We provide professional videography service for all type of events.
            you can choose your own storyline and make all your dream comes true. We will help you to 
            achieve your dream through our professional cinematography. We provide high quality video
            outcome and artwork
          </p>
        </div>

        <div class="client">
          
          <h1>Our Client</h1>

          <img src="images/client.png" alt="Pakej A"class="center">

        </div>

        <div class="content">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="error-success">
                    <h3>
                        <?php   
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
        </div>
      </div>
    </div>
  </body>
</html>