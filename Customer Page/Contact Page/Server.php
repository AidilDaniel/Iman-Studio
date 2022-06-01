<?php 
    // CREATE DATABASE CONNECTION
    $db = mysqli_connect('localhost', 'root', '', 'register');
    
    // SELECT FORM DATA
    if(isset($_POST['submit']) ) {
        $contact_message = mysqli_real_escape_string($db, $_POST['contact_message']);
        $query = "INSERT INTO `contact`(`useremail`, `contact_message`) VALUES ('$_SESSION[useremail]','$contact_message')";
        $result = mysqli_query($db,$query);
        
        if ($result) 
        {
            echo ' 
            <script type="text/javascript"> alert("Message Saved");
                window.location.href = "Contact-logout.php" 
            </script> ';
        } 
        else 
        {
            echo ' 
            <script type="text/javascript"> alert("Message Not Saved"); 
                window.location.href = "home-logout.php" 
            </script> '; 
        }
    }
    //after click submit alert will popup and after click ok it will back to reservation page
    //INSERT DATA TO DATABASE 
?>