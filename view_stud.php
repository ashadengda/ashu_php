<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.mysql_error());
}
mysql_select_db("college",$con);
$sql="";
if(isset($_REQUEST['search']))
{
	$txt = $_REQUEST['searchtxt'];
	
	$sql = mysql_query("select * from student where name like '%$txt%' or city like '%$txt%' ");
	
}
else
{
	$sql=mysql_query("select * from student");
}
?>

  <?php include('header.php'); ?>
    <body>
	 <div class="block-content collapse in">
     <form action="view_stud.php" method="post">
	 <div class="span12">
	<div class="control-group">
		<div class="controls">
        <input class="input-xlarge focused" type="text" name="searchtxt"/>
        </div>
        </div>
		<div class="form-actions">
         <button type="submit" name="search" class="btn btn-primary">Search</button>
         </div>
		</div>
		</form>
        </div>
	
<!--	<div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                    <div class="row-fluid">
                                    <div class="span12" id="content">
                      <!-- morris stacked chart -->
                  <!--  <div class="row-fluid">
       <div class="block">-->
                            <div class="navbar navbar-inner block-header"t>
                              <div class= "text align:center"><center>View Students</center></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

  									<table class="table">
						              <thead>
						                <tr>
						                  <th>id</th>
						                  <th>Name</th>
                                          <th>Address</th>
                                          <th>City</th>
                                          <th>ContactNo</th>
                                          <th>EmailID</th>
										  <th>Image</th>
										  
										  <th>Remark</th>
										  <th>Update</th>
                                          <th>Delete</th>
						                </tr>
						              </thead>
						              <tbody>
                                    <?php
									while($row = mysql_fetch_array($sql))
									{
									?>
						                <tr>
                                        <?php 
										echo "<td>". $row["std_id"]."</td>";
										echo "<td>". $row["name"]."</td>";
										echo "<td>". $row["address"]."</td>";
										echo "<td>". $row["city"]."</td>";
										echo "<td>". $row["contactno"]."</td>";
										echo "<td>". $row["emailid"]."</td>";
										echo "<td><img width='100px' height='100px' src='images/". $row["image"]."' /></td>";
										
										echo "<td>". $row["remark"]."</td>";
									?>
  <td><a href="update_stud.php?std_id=<?php echo $row["std_id"]?>" target="_self">Update</a></td>
  <td><a href="delete_stud.php?std_id=<?php echo $row["std_id"]?>" target="_self">Delete</a></td>
						                </tr>
                                        <?php
										 }
										?>                                      
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            <hr>
<?php include("foot.php"); ?>

    </body>
</html>