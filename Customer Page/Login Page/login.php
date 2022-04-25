<!--Connect to database -->
<?php include('server.php'); ?>

<!--Transfer data to database-->
<?php include('RegisterData.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Imanstudio.com/login</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            <label class="logo"><a href="#"><img src="images/logo.png"></a></label>

            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Album</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Book Online</a></li>
              <li><a href="#" style="color: #ffde00;">Login</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <div class="container">
      <input type="checkbox" id="flip">

      <div class="cover">
        <div class="front">
          <img src="images/backimg.png" alt="">

          <div class="text">
            <span class="text-1">Every moment is precious<br> let's make it permenant</span>
            <span class="text-2">Let's get connected</span>
          </div>
        </div>

        <div class="back">
          <img class="backImg" src="images/frontimg.png" alt="">

          <div class="text">
            <span class="text-1" style="color: rgb(255, 255, 255);">A thousand mile journey<br>started with one step</span>
            <span class="text-2" style="color: white;">Let's get started</span>
          </div>
        </div>
      </div>

      <div class="forms">

        <div class="form-content">
          <div class="login-form">

            <div class="title">Login</div>
            <form action="LoginCheck.php" method="post" >
              
              <div class="input-boxes">

                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" placeholder="Enter your email" name="useremail" required>
                </div>

                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Enter your password" name="userpassword" required>
                </div>

                <div class="text"><a href="#" style="color: black;">Forgot password?</a></div>
                <div class="button input-box">
                  <input type="submit" value="Submit">
                </div>

                <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
              </div>
            </form>
          </div>

          <div class="signup-form">
            <div class="title">Signup</div>

            <form action="#" method="post"> 

              <div class="input-boxes">

                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Enter your username" name = "username" value = "<?php echo $username; ?>" required>
                </div>

                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" placeholder="Enter your email" name = "useremail" value = "<?php echo $useremail; ?>" required>
                </div>

                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Enter your password" name = "userpassword" value = "<?php echo $useremail; ?>" required>
                </div>

                <div class="button input-box">
                  <input type="submit" value="Submit" name="register">
                </div>

                <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>

                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </body>
</html>
