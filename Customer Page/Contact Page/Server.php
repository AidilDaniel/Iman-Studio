<?php 
    // CREATE DATABASE CONNECTION
    $db = mysqli_connect('localhost', 'root', '', 'register');    
    // SELECT FORM DATA
    if(isset($_POST['submit'])) {
        $contact_message = mysqli_real_escape_string($db, $_POST['contact_message']);

        // QUERY
        $query = mysqli_query($db,"INSERT INTO contact(contact_message) VALUES ('$contact_message')");
        
        if ($query) 
        {


            echo ' 
            <script type="text/javascript"> alert("Message Saved");
                window.location.href = "Contact.php" 
            </script> ';
        } 
        else 
        {
            echo ' 
            <script type="text/javascript"> alert("Message Not Saved"); 
                window.location.href = "Contact.php" 
            </script> '; 
        }   //after click submit alert will popup and after click ok it will back to reservation page

    }
    
    //INSERT DATA TO DATABASE 
?>