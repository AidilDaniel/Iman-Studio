<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="updatepassword.css"> 
    <title>Password Update</title>

</head>

<body>

    <?php 

        require("connection.php");

        if(isset($_GET['useremail']) && isset($_GET['resettoken']))
        {
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $date=date("Y-m-d");
            $query=" SELECT `useremail` FROM `user` WHERE `useremail`='$_GET[useremail]' AND `resettoken`='$_GET[resettoken]' AND `resettokenexpire`='$date'";
            $result=mysqli_query($db, $query);
            if($result)
            {
                if(mysqli_num_rows($result))
                {
                    echo"
                        <main id='main-holder'>
                            <h1 id='updatepass-header'>Create New Password</h1>
                                
                            <form id='updatepass-form' method='POST'>
                                <input type='text' name='newpass' id='email-field' class='update-form-field' placeholder='New Password'>
                                <input type='submit' name='update' value='UPDATE' id='update-submit'>
                                <input type='hidden' name='useremail' value='$_GET[useremail]'>
                            </form>
            
                        </main>
                
                        <div class='footer'>
                            <p>© 2020. All Rights Reserved. Designed by Iman Studio</p>
                        </div>
                        </main>
                    ";
                }
                else
                {
                    echo "
                    <script>
                        alert('Server Down! Try Again Later...');
                        window.location.href='../Login Page/login.php';
                    </script>
                ";
                }
            }
            else
            {
                echo "
                    <script>
                        alert('Server Down! Try Again Later...');
                        window.location.href='resetpass.php';
                    </script>
                ";
            }
        }
    
    
    
    
    ?>

    <?php 

        require("connection.php");

        if(isset($_POST['update']))
        {
            $pass=md5($_POST['newpass']);
            $update=("UPDATE `user` SET `userpassword`='$pass',`resettoken`=NULL, `resettokenexpire`=NULL WHERE `useremail`='$_POST[useremail]'");
            if(mysqli_query($db, $update))
            {
                echo "
                    <script>
                        alert('Password Change Successfully!!');
                        window.location.href='../Login Page/login.php';
                    </script>
                ";
            }
            else
            {
                echo "
                    <script>
                        alert('Error');
                        window.location.href='../Login Page/login.php';
                    </script>
                ";
            }
        }
    ?>
</body>
</html>




