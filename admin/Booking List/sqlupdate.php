<?php 

  $conn = mysqli_connect("localhost", "root", "", "imanstudio");  //database connection
      
  $query = mysqli_query($conn,"UPDATE booking WHERE id='" . $_GET["id"] . "' , book_date='".$_POST['book_date']."' , 
  book_time='". $_POST['book_time']."' , phone_no='".$_POST['phone_no']."' , book_package='". $_POST['book_package']."'
  , book_address='". $_POST['book_address']."' , book_info='". $_POST['book_info']."' , book_status='". $_POST['book_status']."'
  WHERE id='". $_POST['id'] ."'");
    
  mysqli_query($conn, $query);
     
  mysqli_close($conn);
  
  if(isset($_POST['update'])) {
    header("location:../blist.php");
  }
?>