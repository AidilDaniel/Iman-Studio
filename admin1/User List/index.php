<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="index.css">
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
                        <a class="booking" href="#">
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
                <h1>User <small>Management</small></h1>
            </div>

            <div class="main">

                <table style="width:100%; background-color: #428bca;" class="User-List-Container">

                    <!--New User counter and search -->
                    <tr style="background-color: #428bca;">
                        <td>
                            <table style="background: #428bca;">
                                <td style="background-color: white;">New User (0)</td>
                                <td style="color: #428bca;">------------------------------------------------------------------------------------------------</td>
                                <td>
                                    <div class="search-container">
                                        <form action="/action_page.php">
                                            <input style="font-size: 20px;" type="text" placeholder="Search.." name="search">
                                            <button style="font-size: 20px;" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </td>
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
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Aidil1</td>
                                    <td>aidil1</td>
                                    <td>Aidil1@gmail.com</td>
                                    <td>User</td>
                                    <td>Active</td>
                                    <td><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:green"></i>   <i class="fa fa-minus-square-o" aria-hidden="true" style="color:red"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Anwar1</td>
                                    <td>anwar1</td>
                                    <td>Anwar1@gmail.com</td>
                                    <td>User</td>
                                    <td>Active</td>
                                    <td><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:green"></i>   <i class="fa fa-minus-square-o" aria-hidden="true" style="color:red"></i></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!--Registered User Counter -->
                    <tr style="background-color: white;">
                        <td>
                            <table>
                                <td style="background-color: #428bca; color:white">Registered User (0)</td>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>