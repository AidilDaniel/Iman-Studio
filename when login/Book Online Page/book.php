<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Imanstudio.com/Book</title>
    
    <link rel="stylesheet" href="book.css">

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
            <label class="logo"><a href="#"><img src="images/logo.png"></a></label>

            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Album</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#" style="color: #ffde00;">Book Online</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </nav>
        </div>

        <!--Page header-->
        <div class="header">
          <h1>Reservation</h1>
        </div>
    
        <div class="row">

            <div class="col-1">
                <p class='defination'>
                    Fill out the form and our team will be
                    <br>contacting you for quotation and 
                    <br>payment method.
                    <br>
                    <br>
                </p>
            </div>

            <div class="col-1">
                <div class="form">
                    <form class="message-form">
                        <h1 class="main-heading"></h1>
                        <div class="half">
                            <div class="item">
                              <label for="name">EVENT DATE</label>
                              <input type="text" id = "Date">
                            </div>
                            <div class="item">
                              <label for="email">EVENT TIME</label>
                              <input type="text" id = "time">
                            </div>
                          </div>
                          <div class="full">
                            <label for="message">EVENT ADDRESS</label>
                            <textarea name="message" rows = "1" cols = "56"></textarea>
                          </div>
                          <div class="full">
                            <label for="message">ADD-ON / INFORMATION</label>
                            <textarea name="message" rows = "10" cols = "56"></textarea>
                          </div>
                          <div class="action">
                            <input type="submit" value = "SEND MESSAGE">
                          </div>
                    </form>
                </div>
            </div>
        </div> 
      </div>
    </div>
  </body>
</html>