<?php 
    session_start();
    include "server.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Imanstudio.com/Book</title>
    
    <link rel="stylesheet" href="reservation.css">

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
                <a class="reservation" href="../Book Online Page/reservation.php" style="color: #ffde00;">
                    <span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span>
                    <span class="title">Reservation</span>
                </a>
              </li>

              <li>
                  <a class="booking" href="../Book Online Page/booked.php">
                    <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></i></span>
                    <span class="title">Booking</span>
                  </a>
              </li>

            </ul>
        </div>

        <div class="main">
          <div class="container">
            <form action="server.php" method="post" >
              <div class="title">RESERVATION</div>
              <div class="reserve-details">  

                <div class="input-box"
                  <span class="details"></span>
                  <input type="date" name="booking_date" required>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <input type="time" name="booking_time" required>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <input type="text" placeholder="Phone Number" name="phone_number" required>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                    <select name="booking_package" id="booking_page"  required>
                        <option value="">Choose Package</option>
                        <option value="Pakej A">Pakej A</option>
                        <option value="Pakej B">Pakej B</option>
                        <option value="Pakej C">Pakej C</option>
                    </select>
                    <!--this is the select option-->
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <textarea rows="8" cols="38" placeholder="Address" name="booking_address" required></textarea>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <textarea rows="8" cols="38" placeholder="Add Info" name="booking_info"></textarea>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <span class="details"></span>
                </div>

                <div class="btn-submit"   
                  <span class="btn-details"></span>
                  <button class="btn" name="submit"><span>Submit</span></button>  <!--Button Submit-->
                </div>
              </div>
              </div>
            </form>  
          </div>
        </div>
      </div>  
    </div>
  </body>
</html>