<?php 

    $conn = mysqli_connect("localhost", "root", "", "imanstudio");  //database connection

    if(isset($_POST['update'])) {
      
        $query = mysqli_query($conn,"UPDATE booking set id='". $_POST['id']."' , book_date='".$_POST['book_date']."' , 
        book_time='". $_POST['book_time']."' , phone_no='".$_POST['phone_no']."' , book_package='". $_POST['book_package']."'
        , book_address='". $_POST['book_address']."' , book_info='". $_POST['book_info']."' , book_status='". $_POST['book_status']."'
        WHERE id='". $_POST['id'] ."'");
    
        if ($query) 
        {
          echo ' 
          <script type="text/javascript"> alert("Data Saved");
            window.location.href = "blist.php" 
          </script> ';
        } 
        else 
        {
          echo ' 
          <script type="text/javascript"> alert("Data Not Saved"); 
            window.location.href = "updateform.php" 
          </script> '; 
        }   //after click submit alert will popup and after click ok it will go to booked.php
    }

   		
?>
