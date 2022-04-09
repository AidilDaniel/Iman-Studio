<?php 
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'register');

    //if not connected to database, error message popup
    if($db===false)
    {
        die("Connection Error");
    }
?>