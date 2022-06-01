<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Imanstudio.com/Book</title>
    
    <link rel="stylesheet" href="book-logout.css?v=>...">

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
                <a class="profile" href="../Book Online Page/book-logout.php" style="color: #ffde00;">
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
                  <a class="booking" href="../Book Online Page/booked-logout.php">
                    <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></i></span>
                    <span class="title">Booking</span>
                  </a>
              </li>

            </ul>
        </div>

        <div class="main">
          <div class="container">
            <form action="#">
              <div class="title">Profile</div>
                <div class="user-details">

                  <div class="input-box"
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter your username" required>
                  </div>
                  <div class="input-box"
                    <span class="details">Name</span>
                    <input type="text" name="name_user" placeholder="Enter your name" required>
                  </div>
                  <div class="input-box"
                    <span class="details">Email</span>
                    <input type="text" name="useremail" placeholder="Enter your email" required>
                  </div>
                  <div class="input-box"
                    <span class="details">Phone No</span>
                    <input type="text" name="phone_number" placeholder="Enter your phone number" required>
                  </div>
                </div>

                <div class="change-pass">

                  <div class="title-pass">Change Password</div>

                  <div class="pass-details">

                    <div class="pass-box"
                      <span class="pass">Old Password</span>
                      <input type="password" name="userpassword" required>
                    </div>

                    <div class="pass-box"
                      <span class="pass">New Password</span>
                      <input type="password" name="new_password" required>
                    </div>

                    <div class="pass-box"
                      <span class="pass">Confirm Password</span>
                      <input type="password" name="confirm_password" required>
                    </div>

                  </div>

                </div>

                <button class="btn-update" name="update"><span>Update</span></button>

              </div>

            </form> 

          </div>

        </div>
      </div>
    </div>
  </body> 
</html>