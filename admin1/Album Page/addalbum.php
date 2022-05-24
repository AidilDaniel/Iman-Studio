<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "imanstudio";

   $conn=mysqli_connect($servername,$username,$password,"$dbname");

   $result = mysqli_query($conn,"SELECT * FROM images ORDER BY uploaded_on DESC");

?>

<!DOCTYPE html> 
<html>
<head>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="addalbum.css">
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
                        <a class="reservation" href="#" style="background-color: #428bca;">
                            <span class="icon"><i class="fa fa-file" aria-hidden="true"></i></span>
                            <span class="title">Album</span>
                        </a>
                    </li>

                    <li>
                        <a class="booking" href="#" >
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
                <h1>Album <small>Management</small></h1>
            </div>

            <div class="main">

                <table style="width:100%; background-color: #428bca;" class="User-List-Container">

                    <!--Upload Picture -->
                    <tr style="background-color: #428bca;">
                        <td>

                            <table style="background: #428bca; ">
                                <td>
                                    <form class="upload" action="upload.php" method="post" enctype="multipart/form-data">
                                        <label>Image to Upload:</label> 
                                        <input class="file" type="file" name="file">
                                        <input class="button" type="submit" name="submit" value="Upload">
                                    </form>
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
                                    <th>Image</th>
                                    <th>Uploaded On</th>
                                    <th>View</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                    $i=0;
                                    while($row = mysqli_fetch_array($result)) {
                                        $imageURL = 'uploads/'.$row["file_name"];
                                ?>

                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td style="width: 50%;"><img width="10%" height="10%" src="<?= $imageURL; ?>" /></td>
                                    <td><?php echo $row["uploaded_on"]; ?></td>
                                    <td><a href="albumview.php?id=<?php echo $row["id"]; ?>"><button>View</button></a></td>
                                    <td><a href="albumdel.php?id=<?php echo $row["id"]; ?>"><button>Delete</button></a></td>
                                </tr>
                                   
                                <?php
                                    $i++;
                                    }
                                ?>

                            </table>
                        </td>
                    </tr>
                    
                </table>

            </div>
        </div>
    </div>
  </body>
</html>