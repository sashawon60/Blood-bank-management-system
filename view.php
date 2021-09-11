<?php 
include('database.php'); 

if(isset($_POST["donor_id"])){
	$output = ''; 
	$query = "select * from sheet1 where id = '".$_POST["donor_id"]."'";
	$result = mysqli_query($con, $query); 
	$output .= '
	<div class="table-responsive">
	<table class="table table-bordered">
	<tbody>';  

	while($row=mysqli_fetch_array($result)){
		$output .= '
		<tr>
			<td width="30%">Name</td>
			<td width="70%">'.$row["Name"].'</td>
		</tr> 
		<tr>
			<td width="30%">Location</td>
			<td width="70%">'.$row["City"].', '.$row["Area"].'</td>
		</tr> 
		<tr>
			<td width="30%">Contact Number</td>
			<td width="70%">'.$row["Mobile"].' <a href="tel:'.$row["Mobile"].'">Call Now</a></td>
		</tr> 
		<tr>
			<td width="30%">Facebook</td>
			<td width="70%"><a href="https://facebook.com/'.$row["FBID"].'">See Profile</a></td>
		</tr> 
		<tr>
			<td width="30%"><label>Blood Group</label></td>
			<td width="70%">'.$row["BloodGroup"].'</td>
		</tr> 
		<tr>
			<td width="30%"><label>Last Donated</label></td>
			<td width="70%">'.$row["LastDonated"].'</td>
		</tr> 
		<tr>
			<td width="30%"><label>Remark</label></td>
			<td width="70%">'.$row["Remarks"].'</td>
		</tr> 

		'; 
	}
	$output .= "</tbody></table></div>"; 
	echo $output; 

}

?> 