<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reel and Real : Admin Panel</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<?php include("include/configure.php"); ?>

<?php
if(isset($_REQUEST['del_id1']))
{
	$del_id1=$_REQUEST['del_id1'];
	
	$q_del2="delete from contact where co_id=".$del_id1;
	$r_del2=mysql_query($q_del2) or die(mysql_error());
	if($r_del2)
	{
		
	}
	else
	{
		echo"<script type='text/javascript'>alert('Please try after some time')</script> ";
	}
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
     
     <tr>
     	<td>
        <form action="" method="post" enctype="multipart/form-data">
        	<div style=" margin:20px;">
            	
            	<div class="main_new_div_heading" style="margin-top:50px;">
                	<center><span >All Contact</span></center>
                </div>
                
            	<div class="main_new_div">
            		 <table width="100%" cellpadding="5" cellspacing="5" >
                     	<tr bgcolor="#CCCCCC">
                        	<td width="5%">Sr.No.</td>
                            <td width="10%">Name</td>
                            <td width="10%">Contact</td>
                            <td width="15%">Email</td>
                            <td width="50%">Enquiry</td>
                            
                            <td>Action</td>
                        </tr>
                        
                        <?php
						$i=1;
						$qry_con_disp=mysql_query("select * from contact ORDER BY co_id DESC") or die(mysql_error());
						while($row_con_disp=mysql_fetch_array($qry_con_disp))
						{ 
						?>
                        <tr>
                        	<td valign="top"><?php echo $i;$i++; ?></td>
                            <td valign="top"><?php echo $row_con_disp[1]; ?></td>
                            <td valign="top"><?php echo $row_con_disp[2]; ?></td>
                            <td valign="top"><?php echo $row_con_disp[3]; ?></td>
                            <td valign="top"><?php echo $row_con_disp[4]; ?></td>
                            
                            <td valign="top">
                            <a href="view_contact.php?del_id1=<?php echo $row_con_disp[0]; ?>" onclick="return confirm('Are you sure you want to Delete this record?')"> Delete</a></td>
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