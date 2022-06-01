<?php 
  session_start();
  include "server.php";

  $query = "SELECT `useremail` FROM `user` WHERE '$_SESSION[useremail]'";
  $result = mysqli_query($db,$query); //check in database any data have or no
  if(empty($_SESSION["useremail"])) {
    header("Location:../Login Page/login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Imanstudio.com/Book</title>
      
    <link rel="stylesheet" href="booked-logout.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  </head>

  <body>
    <div class="full-page">
      <div class="sub-page">

        <div class="navigation-bar">
          <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
              <i class="fas fa-bars"></i>
            </label>
            <label class="logo"><a href="../Home Page/Home-logout.php"><img src="images/logo.png"></a></label>

            <ul>
              <li><a href="../Home Page/Home-logout.php">Home</a></li>
              <li><a href="../About Page/about-logout.php">About</a></li>
              <li><a href="../Album Page/album-logout.php">Album</a></li>
              <li><a href="../Contact Page/Contact-logout.php">Contact</a></li>
              <li><a href="../Book Online Page/book-logout.php" style="color: #ffde00;">Book Online</a></li>
              <li><a href="../Login Page/logout.php">LogOut</a></li>
            </ul>
          </nav>
        </div>

        <div class=navigation>
          <ul>
                  
            <li>
              <a class="profile" href="../Book Online Page/book-logout.php">
                <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                <span class="title">Profile</span>
              </a>
            </li>

            <li>
              <a class="reservation" href="../Book Online Page/reservation-logout.php">
                <span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span>
                <span class="title">Reservation</span>
              </a>
            </li>

            <li>
              <a class="booking" href="../Book Online Page/booked-logout.php" style="color: #ffde00;">
                <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></i></span>
                <span class="title">Booking</span>
              </a>
            </li>

          </ul>
        </div>

        <div class="main">
          <div class="container">
            <form action="#" method="get">
              <div class="title">HISTORY BOOKING</div> 

                <div class="table-responsive">
                  <table class="table" style="width: 120%;">
                    <thead>
                      <tr>
                        <th> Date </th>
                        <th> Time </th>
                        <th> Phone Number </th>
                        <th> Package </th>
                        <th> Address </th>
                        <th> Info </th>
                      </tr>
                      <?php
                        if ('$_SESSION[useremail]'>0) {
                          while($data = mysqli_fetch_assoc($db)){
                            echo "
                              <tr>
                                <td>".$data['booking_date']."</td>
                                <td>".$data['booking_time']."</td>
                                <td>".$data['phone_number']."</td>
                                <td>".$data['booking_package']."</td>
                                <td>".$data['booking_address']."</td>
                                <td>".$data['booking_info']."</td>
                              </tr>
                            ";
                          }
                        }
                      ?>
                    </thead>
                  </table>
                </div>
              </div>
            </form>
          </div>
        </div>  
      </div>
    </div>  
  </body>
</html>