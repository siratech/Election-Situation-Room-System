<?php 
	ob_start();
include('../libr/config.php');  

	
	if(isset($_POST['submit'])){

		$electiontype = mysqli_real_escape_string($conn, $_POST['electiontype']);
		$lga_id = mysqli_real_escape_string($conn, $_POST['lga_id']);
		$ward_id = mysqli_real_escape_string($conn, $_POST['ward_id']);
		$pu_id = mysqli_real_escape_string($conn, $_POST['pu_id']);
		
		$t_r_voters = mysqli_real_escape_string($conn, $_POST['t_r_voters']);		
		$a_voters = mysqli_real_escape_string($conn, $_POST['a_voters']);
		$t_v_votes = mysqli_real_escape_string($conn, $_POST['t_v_votes']);
		$t_inv_votes = mysqli_real_escape_string($conn, $_POST['t_inv_votes']);
		
		$a_p_c = mysqli_real_escape_string($conn, $_POST['a_p_c']);
		$p_d_p = mysqli_real_escape_string($conn, $_POST['p_d_p']);
		$n_n_p_p = mysqli_real_escape_string($conn, $_POST['n_n_p_p']);
		$labour = mysqli_real_escape_string($conn, $_POST['labour']);
		
		$others = mysqli_real_escape_string($conn, $_POST['others']);
		$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

							

			if(isset($_POST['electiontype']) && $electiontype=="Gubernatorial"){
		

			$query1 = mysqli_query($conn, "REPLACE `g_election_result_tbl` (`lga_id`,`ward_id`,`pu_id`,`t_r_voters`,`a_voters`,`t_v_votes`,`t_inv_votes`,`a_p_c`,`p_d_p`,`n_n_p_p`,`labour`,`others`,`user_id`) VALUES ('$lga_id','$ward_id','$pu_id','$t_r_voters','$a_voters','$t_v_votes','$t_inv_votes','$a_p_c','$p_d_p','$n_n_p_p','$labour','$others','$user_id')" );
	
				//$pid=mysqli_insert_id($conn);
				//exit();						
				if($query1){

							echo "<script>
			window.alert('Result Added successfully!');
			window.open('index.php','_self');
		</script>";
					
					exit();			
				} else {
					
					//echo json_encode(array("status" => "failed"));
							echo "<script>
			window.alert('Result adding Failed...');
			window.history.back();
		</script>";
					exit();
				}
				} elseif(isset($_POST['electiontype']) && $electiontype=="House of Assembly") {
			$query2 = mysqli_query($conn, "REPLACE `hrep_election_result_tbl` (`lga_id`,`ward_id`,`pu_id`,`t_r_voters`,`a_voters`,`t_v_votes`,`t_inv_votes`,`a_p_c`,`p_d_p`,`n_n_p_p`,`labour`,`others`,`user_id`) VALUES ('$lga_id','$ward_id','$pu_id','$t_r_voters','$a_voters','$t_v_votes','$t_inv_votes','$a_p_c','$p_d_p','$n_n_p_p','$labour','$others','$user_id')" );
					
					if($query2){

						echo "<script>
			window.alert('Result Added successfully!');
			window.open('index.php','_self');
		</script>";
					
					exit();			
				} else {
					
					//echo json_encode(array("status" => "failed"));
							echo "<script>
			window.alert('Result adding Failed...');
			window.history.back();
		</script>";
					exit();
				}

				}elseif(isset($_POST['electiontype']) && $electiontype=="House of Representatives") {
			$query3 = mysqli_query($conn, "REPLACE `tbl_repsl_result` (`lga_id`,`ward_id`,`pu_id`,`t_r_voters`,`a_voters`,`t_v_votes`,`t_inv_votes`,`a_p_c`,`p_d_p`,`n_n_p_p`,`labour`,`others`,`user_id`) VALUES ('$lga_id','$ward_id','$pu_id','$t_r_voters','$a_voters','$t_v_votes','$t_inv_votes','$a_p_c','$p_d_p','$n_n_p_p','$labour','$others','$user_id')" );
						
						if($query3){

						echo "<script>
			window.alert('Result Added successfully!');
			window.open('index.php','_self');
		</script>";
					
					exit();			
				} else {
					
					//echo json_encode(array("status" => "failed"));
							echo "<script>
			window.alert('Result adding Failed...');
			window.history.back();
		</script>";
					exit();
				}

				}else {
					
					//echo json_encode(array("status" => "failed"));
							echo "<script>
			window.alert('Selecting Election Type Failed...');
			window.history.back();
		</script>";
					exit();
				}

	}



?>