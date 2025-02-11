<?php
// Include the database connection file
include('../database/conn.php');

if (isset($_POST['countryId']) && !empty($_POST['countryId'])) {

	// Fetch state name base on country id
	$query = "SELECT * FROM tbl_ward WHERE lgatbl_id = ".$_POST['countryId'];
	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		echo '<option value="">Select Ward</option>'; 
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['ward_code'].'">'.$row['ward_name'].'</option>'; 
		}
	} else {
		echo '<option value="">Ward not available</option>'; 
	}
} elseif(isset($_POST['stateId']) && !empty($_POST['stateId'])) {

	// Fetch city name base on state id
	$query = "SELECT * FROM tbl_pollingunit WHERE ward_code = ".$_POST['stateId'];
	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		echo '<option value="">Select PU</option>'; 
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['pu_id'].'">'.$row['pu_name'].'</option>'; 
		}
	} else {
		echo '<option value="">PU not available </option>'; 
	}
}
?>