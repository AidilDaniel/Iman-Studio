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

              <div class="co-box">
                <span class="cbo-details"></span>
                <select name="select" id="#">
                  <option value="1">Package A</option>
                  <option value="2">Package B</option>
                  <option value="3">Package C</option>
                </select>
              </div>

              <div class="input-box"
                <span class="details"></span>
                <textarea rows="5" cols="38" placeholder="Add Info" required></textarea>
              </div>

              <div class="btn-submit"
                <span class="btn-details"></span>
                <button class="btn"><span>Submit</span></button>
              </div>

                

            </div>

          </form> 

        <div class="main">
          <div class="container">
            <form action="#">
              <div class="title">RESERVATION</div>
              <div>
                  <div>
                    <p>Email</p>
                    <input type="email" placeholder="Email">
                  </div>
                  <div>
                    <p>Address</p>
                    <input type="text" placeholder="Address">
                  </div>
                  <div>
                    <p>Date</p>
                    <input type="date">
                  </div>
                  <div>
                    <p>Time</p>
                    <input type="time">
                  </div>
                  <div>
                    <p>Type Package</p>
                    <select name="select" id="#">
                      <option value="1"></option>
                      <option value="2">Package A</option>
                      <option value="3">Package B</option>
                      <option value="4">Package C</option>
                    </select>
                  </div>
                  <button>Submit</button>
                </form>
              </div>
              </div>
            </form>  
          </div>
        </div>
      </div>  
    </div>
  </body>
</html>