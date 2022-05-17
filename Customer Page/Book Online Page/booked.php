<?php 
  $db = mysqli_connect("localhost", "root", "", "register");  //database connection

  $query = "select * from booking";
  $db = mysqli_query($db, $query);
  $num = mysqli_num_rows($db); //check in database any data have or no

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Imanstudio.com/Book</title>
    
    <link rel="stylesheet" href="booked.css">

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
            <label class="logo"><a href="../Home Page/Home.php"><img src="images/logo.png"></a></label>

            <ul>
              <li><a href="../Home Page/Home.php">Home</a></li>
              <li><a href="../About Page/about.php">About</a></li>
              <li><a href="../Album Page/album.php">Album</a></li>
              <li><a href="../Contact Page/Contact.php">Contact</a></li>
              <li><a href="../Book Online Page/book.php" style="color: #ffde00;">Book Online</a></li>
              <li><a href="../Login Page/login.php">Login</a></li>
            </ul>
          </nav>
        </div>

        <div class=navigation>
            <ul>
                
              <li>
                <a class="profile" href="../Book Online Page/book.php">
                    <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                    <span class="title">Profile</span>
                </a>
              </li>

              <li>
                <a class="reservation" href="../Book Online Page/reservation.php">
                    <span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span>
                    <span class="title">Reservation</span>
                </a>
              </li>

              <li>
                  <a class="booking" href="../Book Online Page/booked.php" style="color: #ffde00;">
                    <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></i></span>
                    <span class="title">Booking</span>
                  </a>
              </li>

            </ul>
        </div>

        <div class="main">
          <div class="container">
            <form action="#">
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
                          if ($num>0) {
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