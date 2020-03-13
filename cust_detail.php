<?php
session_start();
ob_start();

if(!isset($_SESSION['ad_id']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reel and Real : Admin Panel</title>
<link rel="stylesheet" href="css/style.css" />


<script type="text/javascript" src="js/jquery.min.js"></script>

<script src="js/display_image.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />

   


</head>
<?php

$edit_id="";
if(isset($_REQUEST['edit_id']))
{
	$edit_id=$_REQUEST['edit_id'];
}
			
include("include/configure.php");


if(isset($_REQUEST['view_id']))
{
	$view_id=$_REQUEST['view_id'];
	$sel_cust="select * from registration where id=".$view_id;
	$qry_cust=mysql_query($sel_cust);
	$row_cust=mysql_fetch_array($qry_cust);
}



?>
<body>
<center>
<table width="1000px">
	<tr>
    	<td bgcolor="#999999" >
       		<?php 
				include("include/header.php");
				
			 ?>
        </td>
     </tr>
     
     <tr>
     	<td>
       
        
        
        <form action="view_customer.php" method="post" >
        	<div style=" margin:20px;">
            	<div style="text-align:right; font-size:18px; font-weight:bold; "> <a href="view_customer.php">	View All Customers</a></div>
            	<div class="main_new_div_heading">
                	<center><span >Customer Detail</span></center>
                </div>
                
                <div class="main_new_div">
            	<table width="100%" cellpadding="5" cellspacing="5">
                	<tr>
                        <td class="main_heading">Name </td>
                        <td> <input type="text" name="name" style="width:40%" value="<?php echo $row_cust[1]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">DOB </td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[2]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Age </td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[3]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Gender </td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[4]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Entry Form No.</td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[5]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Age Group </td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[6]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Blood Group</td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[7]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Height</td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[8]; ?>" disabled="disabled"/></td>
                    </tr>
                   
                    <tr>
                    	<td width="20%" class="main_heading">Address</td><td>
                        <textarea name="add" style="width:40%;height:70px;" disabled="disabled"><?php echo $row_cust[9]; ?></textarea>
                       </td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">mobile No.</td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[10]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Tel. No.</td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[11]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">College Name</td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[12]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Hobby</td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[13]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Off Business Name</td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[14]; ?>" disabled="disabled"/></td>
                    </tr>
                    <tr>
                    	<td width="20%" class="main_heading">Experience Award</td><td>
                        <input type="text" name="dob" style="width:40%" value="<?php echo $row_cust[15]; ?>" disabled="disabled"></td>
                    </tr>
                    
                    
                    
                  </table>
                 </div>
            	
                 <!--<div class="main_new_div">
            	<table width="100%">
                    <tr>
                    	<td class="main_heading">Select Page  </td>
                        <td><input type="file"  name="imgfile"/></td>
                        <td class="main_heading">&nbsp;
                        	
                        </td>
                        
                    </tr>
                    
                 </table>
                 </div>-->
                
                 
                
                 
                 
                   
                 <div class="main_new_div">
                 
                 	<input type="submit" class="sub_btn" name="btn_submit" value="OK"/>
                    
                 </div> 
                    
                    
                  
            </div>
         </form> 
		
        </td>
     </tr>
     
     
 </table>
</center>
</body>
</html>
<?php ob_flush(); ?>