<?php 
	ob_start();
include('../libr/config.php');
include('session.php');

		if(isset($_POST['submit'])){
	  $errors= array();
      $file_name = $_FILES['filename']['name'];
      $file_size =$_FILES['filename']['size'];
      $file_tmp =$_FILES['filename']['tmp_name'];
      $file_type=$_FILES['filename']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['filename']['name'])));
      
      $expensions= array("jpeg","jpg","png");
	        if(in_array($file_ext,$expensions)=== false){
         //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		 							echo "<script>
			window.alert('Extension not Allowed, please choose a JPEG, PNG file.');
			window.history.back();
		</script>";
      }
      
      if($file_size > 2097152){
         //$errors[]='File size must be excately 2 MB';
		 		 							echo "<script>
			window.alert('File size must be excately 2 MB');
			window.history.back();
		</script>";
      }
		$lga_id = mysqli_real_escape_string($conn, $_POST['lga_id']);
		$ward_id = mysqli_real_escape_string($conn, $_POST['ward_id']);
		$pu_id = mysqli_real_escape_string($conn, $_POST['pu_id']);
		

		$reporttype = mysqli_real_escape_string($conn, $_POST['reporttype']);
		$a_report = mysqli_real_escape_string($conn, $_POST['anote']);

		
		$user_id = mysqli_real_escape_string($conn, $work_id);
		
		$lat = mysqli_real_escape_string($conn, $_POST['lat']);
		$lon = mysqli_real_escape_string($conn, $_POST['lon']);

							


			$query = mysqli_query($conn, "INSERT INTO `g_hrep_tbl_election_report` (`lga_id`,`ward_id`,`pu_id`,`reporttype`,`a_report`,`image_path`,`user_id`) VALUES ('$lga_id','$ward_id','$pu_id','$reporttype','$a_report','$file_name','$user_id')" );
				move_uploaded_file($file_tmp,"../upload/".$file_name);

				//$pid=mysqli_insert_id($conn);
				//exit();						
				if($query){
				
		mysqli_query($conn, "INSERT INTO `antennadetails` (`pu_id`,`lat`,`lon`,`reporttype`,`a_report`) VALUES ('$pu_id','$lat','$lon','$reporttype','$a_report')" );
							echo "<script>
			window.alert('Report Added successfully!');
			window.open('index.php','_self');
		</script>";
					
					exit();			
				} else {
					
					//echo json_encode(array("status" => "failed"));
							echo "<script>
			window.alert('Report adding Failed...');
			window.history.back();
		</script>";
					exit();
				}
				

	}



?>