<?php
    // Include the database configuration file
    include 'config.php';

    if(isset($_GET['id']))
	{
		$sql = "select * from images where id = ".$_GET['id'];
		$query = mysqli_query($db,$sql);
		$result = mysqli_fetch_assoc($query);

        if ($sql) {
            $imageURL = 'uploads/'.$result["file_name"]; ?>

            <img style="width: 40%; height: auto; display: block;
                margin-left: auto; margin-right: auto; background-size: fill;"
            src="<?= $imageURL; ?>" />
            <?php 
        }
    } 
?>