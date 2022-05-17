/*New Booking Counter */
<?php
	include ('db.php');
	$sql = "select * from booking";
	$re = mysqli_query($con,$sql);
	$c =0;

	while($row=mysqli_fetch_array($re)) {
		$new = $row['stat'];
		$cin = $row['date'];
		$id = $row['id'];

		if($new=="Not Confirm") {
			$c = $c + 1;							
		}
						
	}						
?>

/*connect list with db */
<?php
	$tsql = "select * from booking";
	$tre = mysqli_query($con,$tsql);

	while($trow=mysqli_fetch_array($tre)) {	
		$co =$trow['stat']; 

		if($co=="Not Confirm") {
			echo"<tr>
			<th>".$trow['id']."</th>
			<th>".$trow['name']." ".$trow['LName']."</th>
			<th>".$trow['address']."</th>
			<th>".$trow['phoneno']."</th>
			<th>".$trow['type']."</th>
			<th>".$trow['package']."</th>
			<th>".$trow['date']."</th>
			<th>".$trow['time']."</th>
			<th>".$trow['addinfo']."</th>
			<th>".$trow['stat']."</th>
			</tr>";
		}	
									
	}
?>

/* Registered User Counter */
<?php

	$rsql = "SELECT * FROM `booking`";
	$rre = mysqli_query($con,$rsql);
	$r =0;

	while($row=mysqli_fetch_array($rre) ){		
		$br = $row['stat'];

			if($br=="Conform") {
				$r = $r + 1;
			}
	}
						
?>

