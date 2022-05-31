<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "imanstudio";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");

   $per_page_record = 5;  // Number of entries to show in a page.

    // Look for a GET variable page if not found default is 1.        
    if (isset($_GET["page"])) {    
        $page  = $_GET["page"];    
    }    
    else {    
        $page=1;    
    }    
    
    $start_from = ($page-1) * $per_page_record;     
    
    $query = "SELECT * FROM user WHERE userroles='admin' LIMIT $start_from, $per_page_record";     
    $rs_result = mysqli_query ($conn, $query); 
?> 

<!DOCTYPE html>
<html>
<head>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="setting.css">
</head>
<body>
    <div class="full-page">
        <div class="sub-page">

            <div class="navbar">
                <a href="../User List/index.php">MAIN MENU</a>
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
                        <a class="profile" href="#" style="background-color: #428bca;">
                            <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                            <span class="title">Admin Management</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="Header-User">
                <h1>Administrator <small>Account</small></h1>
            </div>

            <div class="add-admin">
                <button>Add New Admin</button>
            </div>

            <div class="main">

            

                <table style="width:100%; background-color: #428bca;" class="User-List-Container">

                    <!--New User counter and search -->
                    <tr style="background-color: #428bca;">
                        <td></td>
                    </tr>

                    <!--User List Table -->
                    <tr style="background-color:white;">
                        <td>
                            <table style="width: 100%; " class="User-list">
                                <tr style="border-bottom: 1px solid black;">
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>

                                <?php
                                    $i=0;
                                    while($row = mysqli_fetch_array($rs_result)) {
                                ?>

                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["Useremail"]; ?></td>
                                    <td><?php echo $row["phone_no"]; ?></td>
                                    <td><?php echo $row["user_status"]; ?></td>
                                    <td>
                                        <a href="updateform.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:green; font-size:20px;"></i></a>   
                                        <a href="sqldel.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-minus-square-o" aria-hidden="true" style="color:red; font-size:20px;"></i></a>
                                    </td>
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

                                    $db2 = mysqli_connect("localhost", "root", "", "imanstudio");  //database connection
                                    $rsql = "SELECT * FROM `user` WHERE userroles='admin'";
                                    $rre = mysqli_query($db2,$rsql);
                                    $r =0;

                                    while($row=mysqli_fetch_array($rre) ){		
                                        $br = $row['user_status'];

                                            if($br=="Active") {
                                                $r = $r + 1;
                                            }
                                    }
                                                        
                                ?>

                                <td style="background-color: #428bca; color:white">Registered Admin (<?php echo $r; ?>)</td>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="paging-container">
                <div class="pagination">    
                    <?php  
                        $query = "SELECT COUNT(*) FROM user  WHERE userroles='admin'";     
                        $rs_result = mysqli_query($conn, $query);     
                        $row = mysqli_fetch_row($rs_result);     
                        $total_records = $row[0];     
                                        
                        echo "</br>";     
                        // Number of pages required.   
                        $total_pages = ceil($total_records / $per_page_record);     
                        $pagLink = "";       
                                    
                        if($page>=2){   
                            echo "<a href='settings.php?page=".($page-1)."'>  Prev </a>";   
                        }       
                                            
                        for ($i=1; $i<=$total_pages; $i++) {   
                            if ($i == $page) {   
                                $pagLink .= "<a class = 'active' href='settings.php?page="  .$i."'>".$i." </a>";   
                            }               
                            else  {   
                                $pagLink .= "<a href='settings.php?page=".$i."'>   ".$i." </a>";     
                            }   
                        };  

                        echo $pagLink;   
                            
                        if($page<$total_pages){   
                            echo "<a href='settings.php?page=".($page+1)."'>  Next </a>";   
                        }     
                    ?>    

                    <input id="page" type="number" min="1" max="<?php echo $total_pages?>" placeholder="<?php echo $page."/".$total_pages; ?>" required>   
                    <button onClick="go2Page();">Go</button>

                    <script>   
                        function go2Page()   
                        {   
                            var page = document.getElementById("page").value;   
                            page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
                            window.location.href = 'settings.php?page='+page;   
                        }   
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>
</html>