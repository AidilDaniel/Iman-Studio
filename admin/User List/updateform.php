<?php  

$conn = mysqli_connect("localhost", "root", "", "imanstudio");  //database connection

if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE user set id='". $_POST['id']."' , username='".$_POST['username']."' , 
    name_user='". $_POST['name_user']."' , phone_no='".$_POST['phone_no']."' , user_status='". $_POST['user_status']."'");

}

$result = mysqli_query($conn,"SELECT * FROM user WHERE id='". $_GET['id']."'");
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
                        <a class="profile" href="../User List/index.php" style="background-color: #428bca;">
                            <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                            <span class="title">User Management</span>
                        </a>
                    </li>

                    <li>
                        <a class="reservation" href="../Album Page/addalbum.php">
                            <span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span>
                            <span class="title">Album</span>
                        </a>
                    </li>

                    <li>
                        <a class="booking" href="../Booking List/blist.php" >
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
                <h1>User <small>Update</small></h1>
            </div>

            <div class="main">
                <div class="container">
                    <form method="post" >
                        <div class="reserve-details">  
                            
                            <div class="input-box"
                                <label>Username</label>
                                <span class="details"></span>
                                <input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>"></td>
                            </div>

                            <div class="input-box"
                                <label>Name</label>
                                <span class="details"></span>
                                <input type="text" placeholder="Name" name="name_user" value= "<?php echo $row['name_user']; ?>">
                            </div>

                            <div class="input-box"
                                <label>Email</label>
                                <span class="details"></span>
                                <input type="text" placeholder="Email" name="useremail" value= "<?php echo $row['useremail']; ?>">
                            </div>

                            <div class="input-box"
                                <label>Phone No</label>
                                <span class="details"></span>
                                <input type="text" placeholder="Phone Number" name="phone_no" value= "<?php echo $row['phone_no']; ?>">
                            </div>

                            <div class="input-box"
                                <label>Status</label>
                                <span class="details"></span>
                                <input type="text" placeholder="Status" name="user_status" value= "<?php echo $row['user_status']; ?>">
                            </div>

                            <div class="input-box"
                                <span class="details"></span>
                                <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
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