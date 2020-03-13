<?php
include("include/configure.php"); 
if(isset($_REQUEST['del_id']))
{
	$del_id=$_REQUEST['del_id'];
	$q_del1="delete from blog where blog_id=".$del_id;
	$r_del1=mysql_query($q_del1) or die(mysql_error());
	if($r_del1)
	{
		header('Location: blog_app.php');
	}
	else
	{
		echo"<script type='text/javascript'>alert('Please try after some time')</script> ";
	}
}
?>