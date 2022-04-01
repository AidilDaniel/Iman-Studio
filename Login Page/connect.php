<?php
    $host="localhost";
    $email="";
    $password="";
    $db="clientlogin";

    mysql_connect($host,$email,$password);
    mysql_select_db($db);

    if(isset($_POST['email'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="Select *from login where email='".$email."'AND password='".$password"'
        limit 1";

        $result=mysql_query($sql);

        if(mysql_num_row($result)==1){
            echo "You have successfully login";
            exit();
        }

        else {
            echo "you failed";
        }
    }
?>