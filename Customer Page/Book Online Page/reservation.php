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

        <div class=navigation>
            <ul>
                
              <li>
                <a class="profile" href="#">
                    <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                    <span class="title">Profile</span>
                </a>
              </li>

              <li>
                <a class="reservation" href="#" style="color: #ffde00;">
                    <span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span>
                    <span class="title">Reservation</span>
                </a>
              </li>

              <li>
                  <a class="booking" href="#">
                    <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></i></span>
                    <span class="title">Booking</span>
                  </a>
              </li>

            </ul>
        </div>

        <div class="main">
          <div class="container">
            <form action="#">
              <div class="title">RESERVATION</div>
              <div class="reserve-details">  

                <div class="input-box"
                  <span class="details"></span>
                  <input type="date" required>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <input type="time" required>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <input type="text" placeholder="Phone Number" required>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                    <select name="people" id="people" required>
                        <option value="">Choose Package</option>
                        <option value="1">Package A</option>
                        <option value="2">Package B</option>
                        <option value="3">Package C</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <textarea rows="8" cols="38" placeholder="Address" required></textarea>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <textarea rows="8" cols="38" placeholder="Add Info" required></textarea>
                </div>

                <div class="input-box"
                  <span class="details"></span>
                  <span class="details"></span>
                </div>

                <div class="btn-submit"
                  <span class="btn-details"></span>
                  <button class="btn"><span>Submit</span></button>
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