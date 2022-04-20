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
                <a class="reservation" href="#">
                    <span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span>
                    <span class="title">Reservation</span>
                </a>
              </li>

              <li>
                  <a class="booking" href="#" style="color: #ffde00;">
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
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date Book</th>
                            <th>Type Package</th>
                            <th>Date Event</th>
                            <th>Time Event</th>
							              <th>Phone Number</th>
							              <th>           </th>
                        </tr>
                        <tr>
                            <td>12/8/2021</td>
                            <td>Package A</td>
                            <td>12/12/2021</td>
                            <td>10:00 AM</td>
							              <td>0126960322</td>
							              <td><i onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                            class="fa fa-chevron-circle-down"></i></td>
                        </tr>
                        <tr>
                            <td>12/7/2018</td>
                            <td>Package C</td>
                            <td>12/9/2018</td>
                            <td>10:00 AM</td>
							              <td>0126960322</td>
							              <td><i onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                             class="fa fa-chevron-circle-down"></i></td>
                        </tr>
                        <tr>
                            <td>2/10/2019</td>
                            <td>Package B</td>
                            <td>1/11/2019</td>
                            <td>10:00 PM</td>
							              <td>0126960322</td>
							              <td><i onclick="document.getElementById('id01').style.display='block'" style="width:auto;" 
                            class="fa fa-chevron-circle-down"></i></td>
                        </tr>
                    </thead>
                </table>
              </div>
              </div>
            </form>  
          </div>
        </div>


        
        <div id="id01" class="modal">
  
          <form class="modal-content animate"  method="post">
            <div class="container">

              <div class="table-modal">
                <table class="table">

                  <thead>
                    <tr>
                      <th>Date Book</th>
                      <td>--/--/-- </td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td>asdfghj </td>
                    </tr>
                    <tr>
                      <th>Address</th>
                      <td>dggg </td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>dggg@gmail.com </td>
                    </tr>
                    <tr>
                      <th>Date Event</th>
                      <td>--/--/-- </td>
                    </tr>
                    <tr>
                      <th>Time Event</th>
                      <td>--:-- AM </td>
                    </tr>
                    <tr>
                      <th>Phone Number</th>
                      <td>0128354824 </td>
                    </tr>
                    <tr>
                      <th>Additional Info</th>
                      <td> dggg </td>
                    </tr>
                  </thead>
                </table>
              </div>
                <br>
                <p><button type="button" onclick="document.getElementById('id01').style.display='none'"
                   class="cancelbtn">Cancel</button></p>
            </div> 
                  
            </div>
          </form>

        </div>

      </div>  
    </div>  
    
    <script>
    // Get the modal
      var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>

  </body>



</html>