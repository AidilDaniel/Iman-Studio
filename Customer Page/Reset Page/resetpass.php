<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="resetpass.css">   <!--link to css file-->
</head>

<body img src="background.png">   
    <main id="main-holder">
        <h1 id="email-header">Forgot Password</h1>
    
    
        <div id="email-error-msg-holder">
            <p id="email-error-msg">Invalid email </p>
        </div>
     
        <form action="forgotpassword.php" id="email-form" method="POST">
            <input type="email" name="useremail" id="email-field" class="email-form-field" placeholder="Your e-mail address" required>  <!--for input box email-->
            <input type="submit"name="send-reset-link" value="Send Link" id="email-form-submit">  <!--for button submit-->
            </p>
        </form>
  
    </main>
    
    <div class="footer">
        <p>© 2020. All Rights Reserved. Designed by Iman Studio</p>
    </div>


</body>

</html>