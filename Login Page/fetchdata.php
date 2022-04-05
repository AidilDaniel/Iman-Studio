<?php
    $db = mysqli_connect('localhost', 'root', '', 'register');

    if(isset($_POST['useremail'])) {
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];

        $sql = "select * from user where useremail='$useremail' AND userpassword='$userpassword 'limit 1";

        $result = mysqli_query($db, $sql);

        if (count($errors) == 0) {
            $_SESSION['username'] = $username;
            $_SESSION['userpassword'] = $userpassword;
            header("Location:../Home Page/Home.php"); //redirect to home page
        }
    }

?>