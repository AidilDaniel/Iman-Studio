<?php 

    $conn = mysqli_connect("localhost", "root", "", "imanstudio");  //database connection

    if(isset($_POST['update'])) {
      
        $query = mysqli_query($conn,"UPDATE user set id='". $_POST['id']."' , username='".$_POST['username']."' , 
        name_user='". $_POST['name_user']."' , phone_no='".$_POST['phone_no']."' , user_status='". $_POST['user_status']."'");
    
        if ($query) 
        {
          echo ' 
          <script type="text/javascript"
          header("location:../../index.php");
          </script> ';
        } 
        else 
        {
          echo ' 
          <script type="text/javascript"> alert("Data Not Saved"); 
            window.location.href = "updateform.php" 
          </script> '; 
        }
    }
?>
