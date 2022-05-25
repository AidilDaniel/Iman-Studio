<?php 
    require("connection.php");

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($useremail, $resettoken){
        require('PHPMailer/PHPMailer.php');
        require('PHPMailer/SMTP.php');
        require('PHPMailer/Exception.php');

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'seraianwar@gmail.com';                     //SMTP username
            $mail->Password   = 'Anwarazhad1#';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('seraianwar@gmail.com', 'Iman Studio');
            $mail->addAddress($useremail);     //Add a recipient
                            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Password Reset Link From ImanStudio';
            $mail->Body    = "We got a request from you to reset your password! <br>
               Click the link below: <br>
               <a href='http://localhost/Iman-Studio/Customer Page/Reset Page/changepass.php?email=$useremail&resettoken=$resettoken'>
                    Reset Password
                </a>";
        
            $mail->send();
            return true;
            } 
            catch (Exception $e) {
                return false;
            }
    }


    if(isset($_POST['send-reset-link'])) {
        
        $query="SELECT * FROM `user` WHERE `useremail`='$_POST[useremail]'";
        $result=mysqli_query($db, $query);
        if($result){
            if(mysqli_num_rows($result)==1){
                $resettoken=bin2hex(random_bytes(16));
                date_default_timezone_set("Asia/Kuala_Lumpur");
                $date=date("Y-m-d");
                $query="UPDATE `user` SET `resettoken`='$resettoken',`resettokenexpire`='$date' WHERE `useremail`='$_POST[useremail]'";
                if(mysqli_query($db, $query) && sendMail($_POST['useremail'],$resettoken)){
                    echo "
                        <script>
                            alert('Password Reset Link Sent To Mail');
                            window.location.href='../Login Page/login.php';
                        </script>
                    ";
                }
                else{
                    echo "
                        <script>
                            alert('Server Down! Try Again Later...');
                            window.location.href='resetpass.php';
                        </script>
                    ";
                }
            }
            else {
                echo "
                    <script>
                        alert('Email Not Found');
                        window.location.href='resetpass.php';
                    </script>
                ";
            }
        }
        else {
            echo "
                <script>
                    alert('cannot run query');
                    window.location.href='resetpass.php';
                </script>
            ";
        }
    }


?>