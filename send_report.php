<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Send Report Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

 <?php include('agent_sidebar.php')  ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Send Report Form</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
         
          <!-- /.card-header -->
      
        
        </div>
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
       
        <!-- /.card -->

       
        <!-- /.card -->

        
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
             
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->

                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
					<br>
                               <div class="row">
                        <div class="col-lg-3 col-md-6">
                           
                        </div>
                        <div class="col-lg-6 col-md-6">
			<form role="form" method="POST" action="insert_report.php" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="exampleInputEmail1">LGA</label>

				<select class="form-control" id="country"  name="lga_id" required>
					<option value="">Select LGA</option>
					<?php 
					$query = "SELECT * FROM localga WHERE lga_id='$work_id'";
					$result = $conn->query($query);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<option value="'.$row['lga_id'].'">'.$row['lga_name'].'</option>';
						}
					}else{
						echo '<option value="">LGA not available</option>'; 
					}
					?>
				</select>

                      </div>     

                       <div class="form-group">
                        <label for="exampleInputEmail1">Ward</label>

				<select class="form-control" id="state" name="ward_id" required>
					<option value="">Select Ward</option>
				</select>

                      </div>      

                       <div class="form-group">
                        <label for="exampleInputEmail1">Poling Unit</label>

				<select class="form-control" id="city" name="pu_id" required>
					<option value="">Select PU</option>
				</select>

                      </div>     
                       <div class="form-group">
                      <label for="exampleInputEmail1">Report Type</label>

                        <select class="form-control" name="reporttype" id="exampleInputEmail1">
                          <option>INEC Officials Arrived</option>
                          <option>INEC Offcials Absent</option>
                          <option>Voting Started</option>
                          <option>Voting Ended</option>
                          <option>Counting Started</option>
                          <option>Counting Ended</option>
                          <option>Collation Start</option>
                          <option>Results transmitted</option>
                          <option>Ballot Snatching</option>
                          <option>BVAS Not Working</option>
                          <option>Counting disagreement</option>
                          <option>Ballot Box Snatching</option>
                          <option>Fighting</option>
                           <option>No security officials</option>
                           <option>Others</option>

                        </select>
                      </div>


                         <div class="form-group">
                        <label for="exampleInputEmail1">Additional Note</label>
                       <textarea class="form-control" name="anote" id="exampleInputEmail1" placeholder="Others"></textarea> 
                      </div>
                                 	  <div class="form-group">
                        <label for="exampleInputEmail1">Attach Image</label>
                    	<input class="form-control" type="file" id="myFile" name="filename">
                      
                      </div>
                    <div class="form-group">
					<input type="hidden" id="latitude" name="lat">
<input type="hidden" id="logitude" name="lon">
                      <button class="btn btn-primary" type="submit" name="submit"  class="fa fa-save">Send</button>
					  </form>
                    </div>

					 </div>
                        <div class="col-lg-3 col-md-6">
</div>
  </div>             
                     
                     
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
             
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include('footer.php')  ?> 
	<script>
if("geolocation" in navigator){
navigator.geolocation.getCurrentPosition(function(position){
const lat = position.coords.latitude;
document.getElementById('latitude').value =lat;
const log = position.coords.longitude;
document.getElementById('Logitude').value =log;
});
}else{
console.log("is Not here");
}

</script>

