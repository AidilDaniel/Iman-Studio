<?php 
    session_start();
    include "Server.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Imanstudio.com/Contact</title>
    
    <link rel="stylesheet" href="Contact.css">

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
              <li><a href="../Home Page/Home.php">Home</a></li>
              <li><a href="../About Page/about.php">About</a></li>
              <li><a href="../Album Page/album.php">Album</a></li>
              <li><a href="../Contact Page/Contact.php"style="color: #ffde00;">Contact</a></li>
              <li><a href="../Book Online Page/book.php" >Book Online</a></li>
              <li><a href="../Login Page/login.php">Login</a></li>
            </ul>
          </nav>
        </div>

            <div class="header">
                <h1>Have Any Question?</h1>
            </div>

            <div class="row">

                <div class="col-1">
                    <p class='defination'>
                        For inquiries about sessions and pricing,
                        <br>fill out the form and we will get back to you promptly.
                        <br>
                        <br>
                        <br>38, Jalan Dato Dagang 41, Taman Sri Sentosa,
                        <br>41200, Klang, Selangor
                        <br>Tel : 011-2380 3887 (Daniel)
                    </p>
                </div>

                <div class="col-1">
                    <div class="form">
                        <form class="message-form" action="Server.php" method="post">
                            <h1 class="main-heading">Leave us a message</h1>
				            <textarea name="contact_message" rows = "15" cols = "68" placeholder="Leave a message" required></textarea>
				            <button class="btn" name="submit">Submit</button>
				        </form>
			        </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'>
    </script>
    <script>
        $('.message a').click(function(){$('form').animate({height: "toggle",opacity: "toggle"},"slow");});
    </script>
</body>
</html>