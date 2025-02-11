

 <?php include('agent_sidebar.php')  ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Send Result Form</h1>
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
<br>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                        <div class="row">
                        <div class="col-lg-3 col-md-6">
                           
                        </div>
                        <div class="col-lg-6 col-md-6">
			<form role="form" method="POST" action="insert_pri_result.php">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Choose Election Type</label>

                        <select class="form-control" name="electiontype" id="exampleInputEmail1" required>
						<option> Choose Election Type </option>
                          <option>Gubernatorial</option>
                          <option>House of Assembly</option>
                        </select>

                      </div>     

                   <div class="form-group">
                        <label for="exampleInputEmail1">LGA</label>

				<select class="form-control" id="country"  name="lga_id" required>
					<option value="">Select LGA</option>
					<?php 
					$query = "SELECT * FROM tbl_lga WHERE lga_id='$work_id'";
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
                        <label for="exampleInputEmail1">Total Registered Voters</label>
						<input type="number"   text-transform:capitalize;" class="form-control" name="t_r_voters" max="5000" value="<?php echo $t_r_voters; ?>" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Accredited Voters</label>
                        <input type="number"  text-transform:capitalize;" class="form-control" name="a_voters" value="<?php echo $a_voters; ?>" required>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Total Votes</label>
                         <input type="number"  class="form-control" name="t_v_votes" value="<?php echo $t_v_votes; ?>" required>
                      </div>

                    
                       <div class="form-group">
                        <label for="exampleInputEmail1">Invalid Votes</label>
                           <input type="number" 
						   class="form-control" value="<?php echo $t_inv_votes; ?>" name="t_inv_votes" required>
                      </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">APC</label>
                        <input type="number"  class="form-control" name="a_p_c" value="<?php echo $a_p_c; ?>" required>
                      </div>
                      
                       <div class="form-group">
                        <label for="exampleInputEmail1">PDP</label>
                      <input type="number"  class="form-control" name="p_d_p" value="<?php echo $p_d_p; ?>" required>
                      </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">NNPP</label>
                        <input type="number"  class="form-control" name="n_n_p_p" value="<?php echo $n_n_p_p; ?>" required>
                      </div>

                  <div class="form-group">
                        <label for="exampleInputEmail1">LP</label>
                         <input type="number"  class="form-control" name="labour" value="<?php echo $labour; ?>" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Others</label>
                        <input type="number"  class="form-control" name="others" value="<?php echo $others; ?>">
						 <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />

                      </div>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" class="fa fa-save">Send</button>
					  					</form>
                    </div>
					</div>
					 </div>
                        <div class="col-lg-3 col-md-6">
</div>

                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                     
                     
                     
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

