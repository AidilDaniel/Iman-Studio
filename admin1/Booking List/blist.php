<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "imanstudio";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");

   $result = mysqli_query($conn,"SELECT * FROM booking");
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="blist.css">
</head>
<body>
    <div class="full-page">
        <div class="sub-page">

            <div class="navbar">
                <a href="#home">AIDIL ( ADMIN )</a>
                <!--<a href="#home"><?php echo $_SESSION["user"]; ?></a>-->
                <div class="dropdown">
                    <button class="dropbtn"><i class="fa fa-user-circle-o" aria-hidden="true"></i><i class="fa fa-caret-down"></i></button>

                    <div class="dropdown-content">
                        <a href="#">User Profile</a>
                        <a href="#">Settings</a>
                        <a href="#">Logout</a>
                    </div>
                    
                </div> 
            </div>

            

            <div class=navigation>
                <ul>     
                    <li>
                        <a class="profile" href="#">
                            <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                            <span class="title">User Management</span>
                        </a>
                    </li>

                    <li>
                        <a class="reservation" href="#">
                            <span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span>
                            <span class="title">Album</span>
                        </a>
                    </li>

                    <li>
                        <a class="booking" href="#" style="background-color: #428bca;">
                            <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <span class="title">Booking Management</span>
                        </a>
                    </li>

                    <li>
                        <a class="booking" href="#">
                            <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <span class="title">Payment</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="Header-User">
                <h1>Booking <small>Management</small></h1>
            </div>

            <div class="main">

                <table style="width:100%; background-color: #428bca;" class="User-List-Container">

                    <!--New User counter and search -->
                    <tr style="background-color: #428bca;">
                        <td>

                            <table style="background: #428bca; ">
                                <!--New Booking Counter -->
                                <?php
                                    $db1 = mysqli_connect("localhost", "root", "", "imanstudio");  //database connection
                                    $sql = "select * from booking";
                                    $re = mysqli_query($db1,$sql);
                                    $c =0;

                                    while($row=mysqli_fetch_array($re)) {
                                        $new = $row['book_status'];
                                        $id = $row['id'];

                                        if($new=="Pending") {
                                            $c = $c + 1;							
                                        }
                                                        
                                    }						
                                ?>

                                <td style="background-color: white;">New Booking (<?php echo $c; ?>)</td>
                            </table>
                        </td>
                    </tr>

                    <!--User List Table -->
                    <tr style="background-color:white;">
                        <td>
                            <table style="width: 100%; " class="User-list">
                                <tr style="border-bottom: 1px solid black;">
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Book Date</th>
                                    <th>Book TIme</th>
                                    <th>Phone No</th>
                                    <th>Package</th>
                                    <th>Address</th>
                                    <th>Addintional Info</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                                <?php
                                    $i=0;
                                    while($row = mysqli_fetch_array($result)) {
                                ?>

                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["book_date"]; ?></td>
                                    <td><?php echo $row["book_time"]; ?></td>
                                    <td><?php echo $row["phone_no"]; ?></td>
                                    <td><?php echo $row["book_package"]; ?></td>
                                    <td><?php echo $row["book_address"]; ?></td>
                                    <td><?php echo $row["book_info"]; ?></td>
                                    <td><?php echo $row["book_status"]; ?></td>
                                    <td><a href="updateform.php?id=<?php echo $row["id"]; ?>">Update</a></td>
                                </tr>
                                   
                                <?php
                                    $i++;
                                    }
                                ?>
                            </table>
                        </td>
                    </tr>

                    <!--Registered User Counter -->
                    <tr style="background-color: white;">
                        <td>
                            <table>
                                <!-- Registered User Counter -->
                                <?php

                                    $rsql = "SELECT * FROM `booking`";
                                    $rre = mysqli_query($db1,$rsql);
                                    $r =0;

                                    while($row=mysqli_fetch_array($rre) ){		
                                        $br = $row['book_status'];

                                            if($br=="Ongoing") {
                                                $r = $r + 1;
                                            }
                                    }
                                                        
                                ?>

                                <td style="background-color: #428bca; color:white">Booked Reservation (<?php echo $r; ?>)</td>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>