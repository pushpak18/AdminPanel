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

if(isset($_REQUEST['add_news']))
{
extract($_POST);



		  move_uploaded_file($_FILES["img_file"]["tmp_name"],"../upload/".$_FILES["img_file"]["name"]);
	     $aphoto="upload/".$_FILES["img_file"]["name"];
		 

$qur="insert into news (news_title,news_disc,news_date,news_ph) values('".$news_title."','".$news_disc."','".$news_date."','".$aphoto."')";

$result=mysql_query($qur) or die(mysql_error());

if($result)
{
	echo"<script type='text/javascript'>alert('sending sucessfully')</script>";
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

                 

                            <table border="0" width="95%" style=" color:#FFF;font-family:Arial, Helvetica, sans-serif; padding:10px;">
								<tr valign="top">

                                    <td width="25%">Date :</td>

                                    <td >

                               ]<input type="text" name="news_date" placeholder="News Date">

                                    </td>  

                                    

                                 </tr>

                                <tr valign="top">

                                    <td width="25%">News Title :</td>

                                    <td >

                               ]<textarea name="news_title" cols="50"  placeholder="News TITLE"></textarea>

                                    </td>  

                                    

                                 </tr>

                                <tr valign="top">

                                    <td>News Discription :</td>

                                    <td>

                                   ]<textarea name="news_disc"  cols="50" rows="10"  placeholder="News Discription "></textarea>


                                    </td>
</tr>
<tr>
                                    <td>Upload Photo :</td>

                                    <td>

                                   <input type="file" name="img_file"  />

                                    </td>

                                   
                             </table>

                            

                        

                   

    <table border="2" height="6%" align="center" bgcolor="#333333" cellpadding="10">

    <tr>

    <td>

         <input type="submit" value="Register" name="add_news" style="background-color:#999">

    </td>

    </tr>
    
    

    </table>

</div>

    

</form>

                   

                       

   
      


     
 </table>
</center>
</body>
</html>