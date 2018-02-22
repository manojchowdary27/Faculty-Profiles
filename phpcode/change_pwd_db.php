<?php
session_start();
require_once("../facdb_config.php");
if(($_SESSION['faclogin'])==NULL)
{
header("location:../faclogin.php");
}
$id=$_SESSION['faclogin'];
$d=mysql_fetch_array(mysql_query("SELECT * FROM fac_users WHERE uname='$id'"));
$oldcheck=$d['pass'];

if(isset($_POST['op']) && isset($_POST['np']) && isset($_POST['cnp']))
{

if(!empty($_POST['op'])&& !empty($_POST['np']) && !empty($_POST['cnp']) && $_POST['np']==$_POST['cnp'] && $oldcheck==$_POST['op'])
{
$op=htmlentities(mysql_real_escape_string($_POST['op']));
$np=htmlentities(mysql_real_escape_string($_POST['np']));
$cnp=htmlentities(mysql_real_escape_string($_POST['cnp']));
$store=mysql_query("update fac_users set pass='".$cnp."' where uname='$id' ") or die(mysql_error());
if($store)
echo 4;

}
else
{
	if(empty($_POST['op']) || empty($_POST['np']) || empty($_POST['cnp']))
	echo "03";
	else if( $_POST['np']!=$_POST['cnp'])
	echo "01";
	else if($oldcheck!=$_POST['op'])
	echo "02";
}

}


?>

