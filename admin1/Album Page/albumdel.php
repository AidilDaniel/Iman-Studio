<?php

// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "imanstudio";
// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if(isset($_GET['id']))
	{
		$querySelect = "select * from images where id = ".$_GET['id'];
		$ResultSelectStmt = mysqli_query($conn,$querySelect);
		$fetchRecords = mysqli_fetch_assoc($ResultSelectStmt);
		
		$fetchImgTitleName = $fetchRecords['file_name'];
		
		$createDeletePath = "uploads/".$fetchImgTitleName;
		
		if(unlink($createDeletePath))
		{
			$liveSqlQQ = "delete from images where id = ".$fetchRecords['id'];
			$rsDelete = mysqli_query($conn, $liveSqlQQ);	
			
			if($rsDelete)
			{
				header('location:addalbum.php?success=true');
				exit();
			}
		}
		else
		{
			$displayErrMessage = "Unable to delete Image";
		}
		
	}
?>