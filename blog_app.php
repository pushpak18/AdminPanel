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
if(isset($_REQUEST['app_id']))
{
	
	echo $app_id=$_REQUEST['app_id'];
	//echo"<script type='text/javascript'>alert($app_id)</script> ";
	
	$up="UPDATE blog SET blog_status='1' WHERE blog_id='$app_id'";
	$qry_up=mysql_query($up) or die(mysql_error());
}

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
                	<center><span >All Blog Details</span></center>
                </div>
                
            	<div class="main_new_div">
            		 <table width="100%" cellpadding="5" cellspacing="5" >
                     	<tr bgcolor="#CCCCCC">
                        	<td width="5%">Sr.No.</td>
                            <td width="20%">Name</td>
                            <td width="15%">Mobile No.</td>
                            <td width="40%">Interested In</td>
							<td width="10%">Approve</td>
                            <td width="5%">Action</td>
                        </tr>
                        
                        <?php
						$i=1;
						$qry_rev_disp=mysql_query("select * from blog ORDER BY blog_id DESC") or die(mysql_error());
						while($row_rev_disp=mysql_fetch_array($qry_rev_disp))
						{ 
						?>
                        <tr>
                        	<td valign="top"><?php echo $i;$i++; ?></td>
                            <td valign="top"><?php echo $row_rev_disp[1]; ?></td>
                            <td valign="top"><?php echo $row_rev_disp[3]; ?></td>
                            <td valign="top"><?php echo $row_rev_disp[5]; ?></td>
                          <td>
                          <?php
                          if($row_rev_disp[9]==1)
                          {
                          ?>
                           <a href="blog_app.php?app_id=<?php echo $row_rev_disp[0]; ?>" onclick="return confirm('Are you sure you want to Approve this record?')"> <input type="button" name="app_btn" value="Approved" style="padding:8px;font-size:14px;border-radius:5px;background:#00F90;font-weight:bold;cursor:pointer"/> </a></td>
						   
                          <?php
                          }
                          else
                          {
                          ?>
                          <a href="blog_app.php?app_id=<?php echo $row_rev_disp[0]; ?>" onclick="return confirm('Are you sure you want to Approve this record?')"> <input type="button" name="app_btn" value="Approve" style="padding:8px;font-size:14px;border-radius:5px;background:#00F43E;font-weight:bold;cursor:pointer"/> </a>  
                           <?php
                            }
                            ?>
							
						</td>
						<td>
							<?php
								if ($row_rev_disp >= 0){ ?>
									 <a href="del_blog.php?del_id=<?php echo $row_rev_disp[0]; ?>" onclick="return confirm('Are you sure you want to Delete this record?')"> <input type="button" name="app_btn" value="Delete" style="padding:8px;font-size:14px;border-radius:5px;background:#ff1010;font-weight:bold;cursor:pointer"/> </a>  
								<?php
								}?>
						</td>
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