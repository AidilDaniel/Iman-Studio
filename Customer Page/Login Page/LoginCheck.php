<?php
    require 'server.php';

    $errors = array();

    if(isset($_POST['useremail'])) {
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];

        if (count($errors) == 0) {
            $userpassword = md5($userpassword);
            $sql = "select * from user where useremail='".$useremail."' AND userpassword='".$userpassword."'limit 1";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result);

            if (mysqli_num_rows($result) == 1) {
                //log user in
                if ($row['userroles'] == "user" ) {
                    $_SESSION['useremail'] = $useremail;
                    $_SESSION['userpassword'] = $userpassword;
                    $_SESSION['userroles'] = "user";
                    header("Location:../Home Page/Home.php"); //redirect to Customer page
                }
    
                else if ($row['userroles'] == "worker" ) {
                    $_SESSION['useremail'] = $useremail;
                    $_SESSION['userpassword'] = $userpassword;
                    $_SESSION['userroles'] = "worker";
                    header("Location:../Album Page/Album.php"); //redirect to Worker page
                }
    
                else if ($row['userroles'] == "admin" ) {
                    $_SESSION['useremail'] = $useremail;
                    $_SESSION['userpassword'] = $userpassword;
                    $_SESSION['userroles'] = "admin";
                    header("Location:../About Page/about.php"); //redirect to Manager page
                }
    
                else {
                    echo "failed";
                }
            }
        }
    }

?>