<?php
    session_start();

    require 'server.php';

    $username = "";
    $useremail = "";
    $errors = array();

     // if the register button is clicked
     if (isset($_POST['register'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $useremail = mysqli_real_escape_string($db, $_POST['useremail']);
        $userpassword = mysqli_real_escape_string($db, $_POST['userpassword']);

        //if there are no errors, save user to database
        if (count($errors) == 0) {
            $userpassword = md5($userpassword); //encrypt password before storing in database (security)
            $sql = "INSERT INTO user (username, useremail, userpassword, userroles) VALUES ('$username', '$useremail', '$userpassword', 'user')";
            mysqli_query($db, $sql);
            
            $_SESSION['useremail'] = $useremail;
            $_SESSION['userpassword'] = $userpassword;
            header("Location:../Home Page/Home.php"); //redirect to home page
        }

        else {
            session_destroy();
            session_abort();
        }
    }
?>