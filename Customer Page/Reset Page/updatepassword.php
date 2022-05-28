<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="updatepassword.css">   link to css file-->
    <title>Password Update</title>

</head>

<body img src="background.png">

    <main id="main-holder">
        <h1 id="updatepass-header">Create New Password</h1>
            
            <div id="email-error-msg-holder">
                <p id="email-error-msg">Invalid email </p>
            </div>
            
            <form id="updatepass-form" method="POST">
                <input type="text" name="newpass" id="email-field" class="update-form-field" placeholder="New Password"> <!--for input box email-->
                <input type="submit"name="update" value="UPDATE" id="update-submit">  <!--for button submit-->
                <input type="text" name='useremail' value=<?php '$_GET[useremail]'; ?>>
                </p>
            </form>
        
        </main>
            
        <div class="footer">
            <p>© 2020. All Rights Reserved. Designed by Iman Studio</p>
        </div>
    </main>

    <?php 

        require("connection.php");

        if(isset($_POST['update']))
        {
            $pass=password_hash($_POST['newpass'],PASSWORD_BCRYPT);
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




