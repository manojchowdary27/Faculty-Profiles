<?php
session_start();
require_once("../facdb_config.php");
if(($_SESSION['faclogin'])==NULL)
{
header("location:../faclogin.php");
}
$id=$_SESSION['faclogin'];
if(isset($_POST['checkurl']))
{
	if($_POST['checkurl']==NULL || $_POST['checkurl']=='~')
	{
	echo 03;
	}
	else {
	$url=htmlentities(mysql_real_escape_string($_POST['checkurl']));
	$checkurl=mysql_query("select * from faculty where url='$url'") or die(mysql_error());
   if(mysql_num_rows($checkurl))
   {
	echo 5; 
   }
   else
   {
	   echo 4;
   }
}

}


?>

