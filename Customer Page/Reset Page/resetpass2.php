<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="resetpass2.css"> <!--link to css file-->
</head>

<body img src="background.png">
    
    <?php 

        require("connection.php");

        if(isset($_GET['useremail']) && isset($_GET['reset_token'])){
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $date=date("Y-m-d");
            $query="SELECT * FROM `user` WHERE `useremail`='$_GET[useremail]' AND `resettoken`='$_GET[reset_token]' AND `resettokenexpire`='$date'";
            $result=mysqli_query($db,$query);
            if($result){
                if(mysqli_num_rows($result)==1){
                    echo"
                        
                    ";
                }
                else{
                    echo "
                        <script>
                            alert('Invalid or Expired Link');
                            window.location.href='../Login Page/login.php';
                        </script>
                    ";
                }
            }
            else{
                echo "
                    <script>
                        alert('Server Down! Try Again Later...');
                        window.location.href='../Login Page/login.php';
                    </script>
                ";
            }
        }
    
    
    
    ?>

    <main id="main-holder">
        <h1 id="pass-header">Reset Password</h1>
    
    
        <div id="pass-error-msg-holder">
            <p id="pass-error-msg">Invalid email </p>
        </div>
     
        <form method='POST' id="newpass-form">
            <input type="text" name="new-pass" id="new-pass-field" class="new-pass-field" placeholder="New Password" required>  <!--for input box email-->
            <input type="text" name="confirm-pass" id="confirm-pass-field" class="confirm-pass-field" placeholder="Confirm New Password" required>  <!--for input box email-->
            <input type="submit" value="Reset Password" id="pass-form-submit">  <!--for button submit-->
            </p>
        </form>
  
    </main>
    
    <div class="footer">
        <p>© 2020. All Rights Reserved. Designed by Iman Studio</p>
    </div>

    <?php 

        if(isset($_POST['pass-form-submit'])){

            $pass=password_hash($_POST['userpassword'],PASSWORD_BCRYPT);
            $update="UPDATE `user` SET `userpassword`='$pass',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `useremail`=$_POST[useremail]";
            if(mysqli_query($db, $update)){
                echo "
                    <script>
                        alert('Password Updated Successfully);
                        window.location.href='../Login Page/login.php';
                    </script>
                ";
            }
            else{
                echo "
                    <script>
                        alert('Server Down! Try Again Later...');
                        window.location.href='../Reset Page/resetpass2.php';
                    </script>
                ";
            }
        }
    
    
    ?>

</body>

</html>