<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reel And Real : Admin Panel</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<?php include("include/configure.php"); ?>

<?php
$v_id="";
if(isset($_REQUEST['v_id']))
{
	$v_id=$_REQUEST['v_id'];
}

?>

<?php



if(isset($_REQUEST['del_id']))
{
	$del_id=$_REQUEST['del_id'];
	
	$q_del1="delete from registration where id=".$del_id;
	$r_del1=mysql_query($q_del1) or die(mysql_error());
	if($r_del1)
	{
		
	}
	else
	{
		echo"<script type='text/javascript'>alert('Please try after some time')</script> ";
	}
}
/*if(isset($_REQUEST['app_btn']))
{
	echo "gdfgdrtgdgd";
	echo $app_id=$_REQUEST['app_id'];
	echo '*****'.$up="UPDATE review SET re_approve='Yes' WHERE re_id='$app_id'";
	$qry_up=mysql_query($up) or die(mysql_error());
}*/

?>
<center>
<table width="1000px">
	<tr>
    	<td bgcolor="#999999" >
       		<?php 
				include("include/header.php");
				
			 ?>
        </td>
     </tr>
     
     
     <?php
	 	
	 ?>
     
     <tr>
     	<td>
        <form action="" method="post" enctype="multipart/form-data">
        	<div style=" margin:20px;">
            	
            	<div class="main_new_div_heading" style="margin-top:50px;">
                	<center><span >All Customers</span></center>
                </div>
                
            	<div class="main_new_div">
            		 <table width="100%" cellpadding="5" cellspacing="5" >
                     	<tr bgcolor="#CCCCCC">
                        	<td width="5%">Sr.No.</td>
                            <td width="20%">Name</td>
                            <td width="15%">Mobile No.</td>
                            <td width="40%">Address</td>
                           <!-- <td width="10%">Approve</td>-->
                            
                            <td>Action</td>
                        </tr>
                        
                        <?php
						$i=1;
						$qry_rev_disp=mysql_query("select * from registration ORDER BY id DESC") or die(mysql_error());
						while($row_rev_disp=mysql_fetch_array($qry_rev_disp))
						{ 
						?>
                        <tr>
                        	<td valign="top"><?php echo $i;$i++; ?></td>
                            <td valign="top"><?php echo $row_rev_disp[1]; ?></td>
                            <td valign="top"><?php echo $row_rev_disp[10]; ?></td>
                            <td valign="top"><?php echo $row_rev_disp[9]; ?></td>
                            <!--<td><a href="view_review.php?app_id=<?php echo $row_rev_disp[0]; ?>" onclick="return confirm('Are you sure you want to Approve this record?')"><input type="submit" name="app_btn" value="Approve" style="padding:8px;font-size:14px;border-radius:5px;background:#00F43E;font-weight:bold;cursor:pointer"/> </a></td>-->
                            
                            
                            <td valign="top">
                            <a href="cust_detail.php?view_id=<?php echo $row_rev_disp[0]; ?>" > View</a> &nbsp; &nbsp;
                            <a href="view_customer.php?del_id=<?php echo $row_rev_disp[0]; ?>" onclick="return confirm('Are you sure you want to Delete this record?')"> Delete</a></td>
                        </tr>
                        <?php
						
						}
						?>
                     </table>
                 </div>
                 
                
                 
                
                   
                  
                    
                    
                  
            </div>
         </form> 
        </td>
     </tr>
     
     
 </table>
</center>
</body>
</html>