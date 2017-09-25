<?php
include("header.php");
?>
    
	<div class="col-md-12">
	
	
<div class="panel panel-default">
  
  <div class="panel-body text-center">
    <h3>Register</h3>
<br> <br>
 <form action="insert_stud.php" method="post" name="register" enctype="multipart/form-data">
                       
                                        
  

    <div class="form-horizontal">
	  <div class="col-md-12">
				    <div class="form-group">
					  <label  class="col-lg-2 control-label">Studname</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="Studname" name="name" type="text">
					  </div>
					</div>
                        
					 <div class="form-group">
					  <label  class="col-lg-2 control-label">Address</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="Address" name="address" type="Address">
					  </div>
					</div>
                        
					 <div class="form-group">
					  <label for="inputcity" class="col-lg-2 control-label">City</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="city" name="city" type="city">
					  </div>
					</div>
					
					 <div class="form-group">
					  <label for="inputcontectno" class="col-lg-2 control-label">Contactno</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="contactno" name="contactno" type="contactno">
					  </div>
					</div>
                     <div class="form-group">
					  <label for="inputemailid" class="col-lg-2 control-label">Emailid</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="emailid" name="emailid" type="emailid">
					  </div>
					</div>
                    
					
                    <div class="form-group">
					<label for="inputimage" class="col-lg-2 control-label">Image</label>
					 <div class="col-lg-10">
						
					<input type="file" name="image" id="fileToUpload">
					</div>
					</div>
						
					 <div class="form-group">
					  <label for="inputphone" class="col-lg-2 control-label">Remark</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="remark" name="remark" type="remark">
					  </div>
					</div>
                
					   
					 
		</div>
		
	
	
	<div class="col-md-2">	<input type="submit" class="btn btn-info btn-login-submit btn-block " value="Register" /> </div>
	
	<div class="col-md-2">	<input type="reset" class="btn btn-info btn-login-submit btn-block " value="Reset" /> </div>
			
    </div>            

  
  </form>
  
  
  
  </div>
</div>
	
	</div>
	</div>



     <?php include("foot.php"); ?>

    </div>


    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
    </body>
</html>
