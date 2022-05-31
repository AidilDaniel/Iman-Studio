<?php  

$conn = mysqli_connect("localhost", "root", "", "imanstudio");  //database connection

if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE booking set id='". $_POST['id']."' , book_date='".$_POST['book_date']."' , 
    book_time='". $_POST['book_time']."' , phone_no='".$_POST['phone_no']."' , book_package='". $_POST['book_package']."'
    , book_address='". $_POST['book_address']."' , book_info='". $_POST['book_info']."' , book_status='". $_POST['book_status']."'
    WHERE id='". $_POST['id'] ."'");

    $message = "Record Modified Successfully";
}

$result = mysqli_query($conn,"SELECT * FROM booking WHERE id='". $_GET['id']."'");
$row= mysqli_fetch_array($result);
?> 


<!DOCTYPE html>
<html>
<head>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="update.css">
</head>
<body>
    <div class="full-page">
        <div class="sub-page">

            <div class="navbar">
                <a href="#home">AIDIL ( ADMIN )</a>
                <!--<a href="../User List/index.php"><?php echo $_SESSION["user"]; ?></a>-->
                <div class="dropdown">
                    <button class="dropbtn"><i class="fa fa-user-circle-o" aria-hidden="true"></i><i class="fa fa-caret-down"></i></button>

                    <div class="dropdown-content">
                        <a href="../Profile/profile.php">User Profile</a>
                        <a href="../Settings/setting.php">Settings</a>
                        <a href="#">Logout</a>
                    </div>
                    
                </div> 
            </div>

            <div class=navigation>
                <ul>     
                    <li>
                        <a class="profile" href="../User List/index.php">
                            <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                            <span class="title">User Management</span>
                        </a>
                    </li>

                    <li>
                        <a class="reservation" href="../Album Page/addalbum.php" >
                            <span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span>
                            <span class="title">Album</span>
                        </a>
                    </li>

                    <li>
                        <a class="booking" href="../Booking List/blist.php" style="background-color: #428bca;">
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
                <h1>Reservation <small>Update</small></h1>
            </div>

            <div class="main">
                <div class="container">
                    <form method="post" >
                        <div class="reserve-details">  

                            <div class="input-box"
                                <label>Date</label>
                                <span class="details"></span>
                                <input type="date" placeholder="Event Date" name="book_date" value= "<?php echo $row['book_date']; ?>" >
                            </div>

                            <div class="input-box"
                                <label>Time</label>
                                <span class="details"></span>
                                <input type="time" placeholder="Event Time" name="book_time" value= "<?php echo $row['book_time']; ?>">
                            </div>

                            <div class="input-box"
                                <label>Phone No</label>
                                <span class="details"></span>
                                <input type="text" placeholder="Phone Number" name="phone_no" value= "<?php echo $row['phone_no']; ?>">
                            </div>

                            <div class="input-box"
                                <label>Package</label>
                                <span class="details"></span>
                                <select name="book_package" id="package" value="<?php echo $row['book_package']; ?>";>
                                    <option>Choose Package</option>
                                    <option>Pakej A</option>
                                    <option>Pakej B</option>
                                    <option>Pakej C</option>
                                </select>
                            </div>

                            <div class="input-box"
                                <label>Status</label>
                                <span class="details"></span>
                                <select name="book_status" id="book_status" value="<?php echo $row['book_status']; ?>";>
                                    <option>Pending</option>
                                    <option>Ongoing</option>
                                    <option>Completed</option>
                                </select>
                            </div>

                            <div class="input-box"
                                <label>Username</label>
                                <span class="details"></span>
                                <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
                                <input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>"></td>
                            </div>

                            <div class="input-box"
                                <label>Address</label>
                                <span class="details"></span>
                                <input placeholder="Address" name="book_address" value= "<?php echo $row['book_address']; ?>"></input>
                            </div>

                            <div class="input-box"
                                <label>Information</label>
                                <span class="details"></span>
                                <input placeholder="Add Info" name="book_info" value= "<?php echo $row['book_info']; ?>"></input>
                            </div>

                            <div class="btn-submit"   
                                <span class="btn-details"></span>
                                <a href="sqlupdate.php?id=<?php echo $row["id"]; ?>"><button class="btn" name="update" id="update"><span>Update</span></button></a>  <!--Button Submit-->
                            </div>


                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>