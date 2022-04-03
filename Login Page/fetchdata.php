<?php
    $db = mysqli_connect('localhost', 'root', '', 'register');

    if(isset($_POST['useremail'])) {
        $uname = $_POST['useremail'];
        $password = $_POST['userpassword'];

        $sql = "select * from user where username='$uname' AND userpassword='$password'
        limit 1";

        $result = mysqli_query($sql);

        if(mysqli_num_row($result) > 0) {
            header("Location: ../Home Page/Home.php");
        }
    }


?>