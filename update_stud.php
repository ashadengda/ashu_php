<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.mysql_error());
}
mysql_select_db("college",$con);

if(isset($_POST['save']))
{	
	//$c_name_save=$_POST['name'];
$eid = $_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$contactno=$_POST['contactno'];
$emailid=$_POST['emailid'];
$image=$_FILES['image']['name'];
if(!isset($_FILES['image']))
{
	
	mysql_query("update student set name='$name',address='$address',city='$city',contactno='$contactno',emailid='$emailid',remark='$remark'  where std_id='$eid'");
	
}
else
{
		mysql_query("update student set name='$name',address='$address',city='$city',contactno='$contactno',emailid='$emailid',image='$image',remark='$remark'  where std_id='$eid'");

	
}
$remark=$_POST['remark'];

	echo "update student set name='$name',address='$address',city='$city',contactno='$contactno',emailid='$emailid',image='$image',remark='$remark'  where std_id='$eid'";
	mysql_query("update student set name='$name',address='$address',city='$city',contactno='$contactno',emailid='$emailid',image='$image',remark='$remark'  where std_id='$eid'");
	header("location:view_stud.php");
}


$std_id =$_REQUEST['std_id'];
$result=mysql_query("select *from student where std_id='$std_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
	$name=$test['name'];
	
	
mysql_close($con);
?>
<?php
include("header.php");
?>
	<div class="col-md-8">
	
	
<div class="panel panel-default">
  
  <div class="panel-body text-center">
    <h3>Edit Student</h3>
<br> <br>
 <form action="update_stud.php" method="post"   enctype="multipart/form-data">
                       
          <input type="hidden"         name="id" value="<?php echo $_REQUEST['std_id'];?>" />                      
  

    <div class="form-horizontal">
	  <div class="col-md-12">
				    <div class="form-group">
					  <label  class="col-lg-2 control-label">Studname</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="Studname" name="name" type="text" value="<?php echo $test['name']; ?>">
                                         
					  </div>
					</div>
                        
					 <div class="form-group">
					  <label  class="col-lg-2 control-label">Address</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="Address" name="address" type="Address" value="<?php echo $test['address']; ?>">
                                         
					  </div>
					</div>
                        
					 <div class="form-group">
					  <label for="inputcity" class="col-lg-2 control-label">City</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="city" name="city" type="city" value="<?php echo $test['city']; ?>">
                                         
					  </div>
					</div>
					
					 <div class="form-group">
					  <label for="inputcontactno" class="col-lg-2 control-label">Contactno</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="contactno" name="contactno" type="contactno" value="<?php echo $test['contactno']; ?>">
                                         
					  </div>
					</div>
                        
							
									<!-- <div class="form-group">
						<label for="inputimage" class="col-lg-2 control-label">Image</label>
					  
						<img class="img img-responsive" src="images" />
						 <div class="col-lg-10">
						</div>
					</div>-->
					 <div class="form-group">
					  <label for="inputemailid" class="col-lg-2 control-label">Emailid</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="emailid" name="emailid" type="emailid" value="<?php echo $test['emailid']; ?>">
                                         
					  </div>
					</div>
                    
					
                    <div class="form-group">
					<label for="inputimage" class="col-lg-2 control-label">Image</label>
					 <div class="col-lg-10">
					 <img src="images/<?php echo $test['image']?>" width="200px" height="200px" />
						
					<input type="file" name="image" id="fileToUpload" >
										
                                         
					</div>
					</div>
					<!--<div class="form-group">
                        <label class="control-label" for="focusedInput">Image</label>
                        <div class="controls">
                        <input type="file" name="image" id="image">
                        </div>
                        </div>  -->
										
			
		             <!-- <div class="form-group">
					  <label class="inputremark" class="col-lg-2 control-label">Remark</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="city" name="remark" type="remark">
					  </div>
					</div>-->
						
					 <div class="form-group">
					  <label for="inputphone" class="col-lg-2 control-label">Remark</label>
					  <div class="col-lg-10">
						<input class="form-control" placeholder="remark" name="remark" type="remark" value="<?php echo $test['remark']; ?>">
                                         
					  </div>
					</div>
                
					   
					 
		</div>
		
	
	
	<div class="col-md-2">	<input type="submit" class="btn btn-info btn-login-submit btn-block " name="save" value="Update" /> </div>
	
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
