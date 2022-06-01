<?php 
    // CREATE DATABASE CONNECTION
    $db = mysqli_connect('localhost', 'root', '', 'register');

    // SELECT FORM DATA
    if(isset($_POST['submit']) ) {
        $booking_date = mysqli_real_escape_string($db, $_POST['booking_date']);
        $booking_time = mysqli_real_escape_string($db, $_POST['booking_time']);
        $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
        $booking_package = mysqli_real_escape_string($db, $_POST['booking_package']);
        $booking_address = mysqli_real_escape_string($db, $_POST['booking_address']);
        $booking_info = mysqli_real_escape_string($db, $_POST['booking_info']);
        $query = "INSERT INTO `booking`(`useremail`, `booking_date`, `booking_time`, `phone_number`, `booking_package`, `booking_address`, `booking_info`) VALUES ('$_SESSION[useremail]','$booking_date','$booking_time','$phone_number','$booking_package','$booking_address','$booking_info')";
        $result = mysqli_query($db,$query);

        if ($result) 
        {
            echo ' 
            <script type="text/javascript"> alert("Data Saved");
                window.location.href = "booked-logout.php" 
            </script> ';
        }       //after click submit alert will popup and after click ok it will go to booked.php
        else 
        {
            echo ' 
            <script type="text/javascript"> alert("Data Not Saved"); 
                window.location.href = "reservation-logout.php" 
            </script> '; 
        }   

    }
    
    //INSERT DATA TO DATABASE 
?>