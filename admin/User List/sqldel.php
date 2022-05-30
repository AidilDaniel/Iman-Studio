<?php 

    $conn = mysqli_connect("localhost", "root", "", "imanstudio");  //database connection

    // sql to delete a record
    if (mysqli_query($conn, $sql)) {
        echo ' 
        <script type="text/javascript">
        window.location.href = "blist.php"
        </script> ';
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
