<?php
    $db = mysqli_connect('localhost', 'root', '', 'register');

    if(isset($_POST['useremail'])) {
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];

        if (count($errors) == 0) {
            $userpassword = md5($userpassword);
            $sql = "select * from user where useremail='".$useremail."' AND userpassword='".$userpassword."'limit 1";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) == 1) {
                //log user in
                $_SESSION['useremail'] = $useremail;
                $_SESSION['userpassword'] = $userpassword;
                header("Location:../Home Page/Home.php"); //redirect to home page
            }
        }

        else {
            array_push($errors, "Wrong combination email or password");
        }
    }

?>