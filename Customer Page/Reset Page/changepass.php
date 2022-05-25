<?php 
    require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>

<body>

    <?php 

        if(isset($_GET['useremail']) && isset($_GET['resettoken']))
        {

            date_default_timezone_get("Asia/Kuala_Lumpur");
            $date=date("Y-m-d");
            $query="SELECT * FROM `user` WHERE `useremail`='$_GET[useremail]' AND `resettoken`='$_GET[reset_token]' AND `resettokenexpire`='$date'";
            $result=mysqli_query($db, $query);

            if($result)
            {

                if(mysqli_num_rows($result)==1)
                {

                    echo"

                        <form>
                            <h1>Bodo</h1>
                        </form>
                    ";

                }
                else
                {

                    echo "
                        <script>
                            alert('Invalid');
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
                        window.location.href='../Login Page/login.php';
                    </script>
                ";
                
            }
        }
        else
        {

            echo "
                <script>
                    alert('Invalid or Expired Link');
                    window.location.href='../Login Page/login.php';
                </script>
            ";

        }
    ?>
</body>

</html>