<?php
		include('facdb_config.php');
	session_start();
	if(($_SESSION['faclogin'])!=NULL){
			$id=$_SESSION['faclogin'];
			$ip=$_SERVER['REMOTE_ADDR'];

if(mysql_num_rows(mysql_query("SELECT * FROM faculty WHERE id='$id'"))<=0){header("location:fprofile.php");}
$mydata=mysql_fetch_array(mysql_query( "select * from faculty where id='$id' " )) or die(mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<title>Edit Faculty Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="About,Office Hours,Teaching,Professional Experience,Publications" />
<meta name="keywords" content="Research & Interested Areas,Awards and Recognitions,Workshops & Invited talks" />
<meta name="author" content="e-Army @ RGUKT-N" />

		<script src="facassets/js/jquery-2.1.4.min.js"></script>
		<script src="facassets/js/bootstrap.js"></script>
		<script src="facassets/js/editor.js"></script>

		<link rel="stylesheet" href="facassets/css/bootstrap.css">
		<link rel="stylesheet" href="facassets/css/font-awesome.min.css">
		<link href="facassets/css/editor.css" type="text/css" rel="stylesheet"/>
		<link href="facassets/css/style.adaptip.css" rel="stylesheet" type="text/css">


    <!-- Fav and touch icons -->
    <link rel="SHORTCUT ICON" type="imge/x-icon" href="facassets/images/nav.png">

  </head>
	<script>
		function validate(thisform){
			with(thisform){
				if(msg.value=="" || msg.value==null){
					alert_popup('Enter something, It should not be Empty','danger');msg.focus();return false;
				}
			}
		}
	</script>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload=fet()>
	  <?php $ct=$mydata['ct'];?>
<script>
function fet()
{
<?php

  $ct = $mydata['ct'];
  echo "var ct = `{$ct}`;";

  $th = $mydata['th'];
  echo "var th = `{$th}`;";

  $rarea = $mydata['rarea'];
  echo "var rarea = `{$rarea}`;";

  $rarea = $mydata['rarea'];
  echo "var rarea = `{$rarea}`;";

	$fdp = $mydata['work'];
  echo "var fdp = `{$fdp}`;";

  $expr = $mydata['exp'];
  echo "var expr = `{$expr}`;";

   $pub = $mydata['skill'];
  echo "var pub = `{$pub}`;";

  $awards = $mydata['awards'];
  echo "var awards = `{$awards}`;";


  $others = $mydata['others'];
 echo "var others = `{$others}`;";
?>
$("#txtEditorct").Editor('setText',ct);
$("#txtEditorth").Editor('setText',th);
$("#txtEditorr").Editor('setText',rarea);
$("#txtEditorf").Editor('setText',fdp);
$("#txtEditorp").Editor('setText',expr);
$("#txtEditor").Editor('setText',pub);
$("#txtEditora").Editor('setText',awards);
$("#txtEditore").Editor('setText',others);

}
</script>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="">
        <div class="container-fluid" >
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				   <span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			  </button>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li style="font-size:16px;font-weight:bolder;"><a>FACULTY PROFILE</a></li>
					<li><a class="scroll" href="#page-top"><i class="fa fa-home"></i>&nbsp;Home</a></li>
					<li><a class="scroll" href="#bio"><i class="fa fa-file-text-o"></i>&nbsp;Bio</a></li>
					<li><a class="scroll" href="#teaching"><i class="fa fa-book"></i>&nbsp;Teaching</a></li>
					<li><a class="scroll" href="#interest"><i class="fa fa-pencil"></i>&nbsp;Interested Areas</a></li>
					<li><a class="scroll" href="#Professional"><i class="fa fa-file-text"></i>&nbsp;Professional Experience</a></li>
					<li><a class="scroll" href="#publications"><i class="fa fa-file-text-o"></i>&nbsp;Publications</a></li>
					<li><a class="scroll" href="#awards"><i class="fa fa-trophy"></i>&nbsp;Awards</a></li>
					<li><a class="scroll" href="#workshops"><i class="fa fa-map-marker"></i>&nbsp;Workshops</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle " data-toggle="dropdown" ><i class="fa fa-cog"></i>&nbsp;Settings&nbsp;<i class=" fa fa-angle-down"></i></a>
						<ul class="dropdown-menu" >
							<li><a data-toggle="modal" data-target="#myModal" style="color:red;"><i class="fa fa-key"></i>&nbsp;Change Password</a></li>
							<li><a href="logout.php" style="color:red;"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
						</ul>
					</li>
					
					<li><a class="scroll" data-toggle="modal" data-target="#myModal1" ><i class="fa fa-map-marker"></i>&nbsp;Post</a></li>
				</ul>

			</div>

		</div>
	</nav>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
              <div class="modal-content">
                   <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                   </div>
                   <div class="modal-body">
                       <div class="form-group">
                          <label>Enter Old Password*</label>
                          <input class="form-control" type="password" id=op name=op required />
                        </div>
                        <div class="form-group">
                          <label>Enter New Password*</label>
                          <input class="form-control" type="password" id=np name=np required />
                        </div>
                        <div class="form-group">
                          <label>Confirm Password*</label>
                          <input class="form-control" type="password" id=cnp name=cnp required />
                        </div>

                        <div class="form-group" id="msg" style='color:blue;visibility:hidden;display:none;' >

                        </div>

                   </div>
                   <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary" onclick=up() >Update Password</button>
                   </div>
               </div>
          </div>
    </div>



	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
              <div class="modal-content">
                   <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                   </div>
                   <div class="modal-body">
                       <div class="form-group">
                          <label>Enter Old Password*</label>
                          <input class="form-control" type="password" id=op name=op required />
                        </div>
                        <div class="form-group">
                          <label>Enter New Password*</label>
                          <input class="form-control" type="password" id=np name=np required />
                        </div>
                        <div class="form-group">
                          <label>Confirm Password*</label>
                          <input class="form-control" type="password" id=cnp name=cnp required />
                        </div>

                        <div class="form-group" id="msg" style='color:blue;visibility:hidden;display:none;' >

                        </div>

                   </div>
                   <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary" onclick=up() >Update Password</button>
                   </div>
               </div>
          </div>
    </div>


    <script>
		function up(){
			var op=document.getElementById('op').value;
			var np=document.getElementById('np').value;
			var cnp=document.getElementById('cnp').value;
			document.getElementById("msg").style.display="block";
			document.getElementById("msg").style.visibility="visible";
			$("#msg").html("<img src='facassets/images/loading'>Sending..");
			status = $.ajax({
											url: "phpcode/change_pwd_db.php",
											global: true,
											type: "POST",
											data: {op:op,np:np,cnp:cnp},
											dataType:'json',
											async:false
												}).responseText;
			$("#msg").html("<img src='facassets/images/loading'>changing..");
			if(status==4)
			{
			$("#msg").html(" <p style='font-weight:bold;'><i class='fa fa-thumbs-up'></i>&nbsp;Successfully Updated");
			}
			else if(status==01)
			{
			$("#msg").html("<p style='color:red;'><i class='fa fa-thumbs-down'></i>&nbsp;New & confirm Passwords Must match</p>");
			}
			else if(status==02)
			{
			$("#msg").html("<p style='color:red;'><i class='fa fa-thumbs-down'></i>&nbsp;Old Password didn't match</p>");
			}
			else if(status==03)
			{
			$("#msg").html("<p style='color:red;'><i class='fa fa-times-circle'></i>&nbsp;All fields are required</p>");
			}
			else
			{
			$("#msg").html("<p style='color:red;'><i class='fa fa-thumbs-down'></i>&nbsp;Check your connection</p>");
			}

		}
    </script>
<?

?>
<style>
       legend{
               font-size:20px;
               font-weight:bold;
               color:#385168;
       }
</style>

 <div class="container">
	<form method=post enctype="multipart/form-data" action=editprofile.php onsubmit="return confirm('Do You want to Update?')">
 <br><br><br>
 <fieldset>
			<legend>URL Information:<h4>Your Profile Page : <a href="<?php echo 'http://www.rguktn.ac.in/'.$mydata['url'].'/'; ?>" target="_blank" ><?php echo 'http://www.rguktn.ac.in/'.$mydata['url'].'/'; ?> </a></h4></legend>
			<table border=0 width=70%>
				<tr>
				<td> <b>Url : </b></td><td><input style=width:600px; name=url type=text value="<?php echo $mydata['url']; ?>" disabled  readonly ><br></td>
				</tr>
    </table>
 </fieldset>


 <br><br>
		<fieldset>
			<legend>Personal Information :</legend>
			<table border=0 width=70%>
				<tr>
				<td> <b>Name : </b></td><td><input style=width:600px; name=uname type=text value="<?php echo $mydata['name']; ?>"><br></td>
				</tr>
				<tr>
				<td> <b>Designation  : </b></td><td><input style=width:600px; name=qua type=text value="<?php echo $mydata['qua']; ?>"><br></td>
				</tr>
        	<tr>
				<td> <b>Department: </b></td><td><input style=width:600px; name=dept type=text value="<?php echo $mydata['dept']; ?>"><br></td>
				</tr>
				<tr>
				<td><b>Photo :</b></td><td><input name=img type=file accept="image/*"> <small>Passport Size photo</small><br></td>


				</tr>
			</table>
		</fieldset>
		 <br><br>
		<fieldset>
			<legend>Contact Information :</legend>
			<table border=0 width=70%>
				<tr>
				<td> <b>Email : </b></td><td><input style=width:300px; name=email type=text value="<?php echo $mydata['email']; ?>"><br></td>
				</tr>
				<tr>
				<td> <b>Phone Number  : </b></td><td><input style=width:300px; name=pno type=text value="<?php echo $mydata['pno']; ?>"><br></td>
				</tr>
        <tr>
				<td> <b>Office Hours  : </b></td><td><input style=width:300px; name=oh type=text value="<?php echo $mydata['oh']; ?>"><br></td>
				</tr>
        <tr>
				<td> <b>Office Address  : </b></td><td><input style=width:300px; name=oa type=text value="<?php echo $mydata['oa']; ?>"><br></td>
				</tr>
			</table>
		</fieldset>
<!-- Your bio-->
<h3 class="tittle" id="bio">&nbsp;</h3>
		<h4>&nbsp;</h4>
		<fieldset>
			<legend>Your Bio:</legend>
			<table border=0 width=70%>
				<tr>
				<td>



<script>
$(document).ready(function()
{
  $("#txtEditore").Editor();
});

$(function()
{
  $('#save').click(function ()
  {
   //get text in div and assign to textarea
   var str = $( '#editor4 .Editor-editor' ).html();


   $('#txtEditore').val(str);
  });
});
</script>

<div class="container-fluid" id="editor4">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 nopadding">
             <textarea id="txtEditore" name="oexp"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>

        </td>
				</tr>
			</table>
		</fieldset>
		<br>

<!-- Your Teaching-->
		 <h3 class="tittle" id="teaching">&nbsp;</h3>
		<h4>&nbsp;</h4>
   <fieldset>
			<legend>Teaching :</legend>
			<table border=0 width=70%>
				<tr>

				<td><span style="font-size:16px;font-weight:bold;">Current Teaching :</span>
				<?php $ct=$mydata['ct'];?>
        <script>
        $(document).ready(function()
        {
          $("#txtEditorct").Editor();
          });



   $(function()
   {
   $('#save').click(function ()
   {

   //get text in div and assign to textarea
   var str = $( '#editorct .Editor-editor' ).html();

   $('#txtEditorct').val(str);
  });
  });



  </script>

<div class="container-fluid" id="editorct" >
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 nopadding">
             <textarea id="txtEditorct" name="ct" ></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
 </td>
				</tr>



        <tr>
				<td><span style="font-size:16px;font-weight:bold;"><br><br>Previous Teaching :</span>

        <script>
$(document).ready(function()
{
  $("#txtEditorth").Editor();
});

$(function()
{
  $('#save').click(function ()
  {
   //get text in div and assign to textarea
   var str = $( '#editorth .Editor-editor' ).html();

   $('#txtEditorth').val(str);
  });
});
</script>

<div class="container-fluid" id="editorth">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 nopadding">
             <textarea id="txtEditorth" name="th"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
</td>
				</tr>
			</table>
		</fieldset>

		<!-- Your Research & Interested Areas -->
   	<h3 class="tittle" id="interest">&nbsp;</h3>
	<h4>&nbsp;</h4>
     <fieldset >
			<legend>Research & Interested Areas :</legend>
			<table border=0 width=70%>
				<tr>

				<td>

        <script>
$(document).ready(function()
{
  $("#txtEditorr").Editor();
});

$(function()
{
  $('#save').click(function ()
  {
   //get text in div and assign to textarea
   var str = $( '#editorr .Editor-editor' ).html();

   $('#txtEditorr').val(str);
  });
});
</script>

<div class="container-fluid" id="editorr">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 nopadding">
             <textarea id="txtEditorr" name="rarea"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>

        </td>
				</tr>
			</table>
		</fieldset>
<!--

your workshops

-->


   	<h3 class="tittle" id="workshops">&nbsp;</h3>
	<h4>&nbsp;</h4>
		<fieldset>
			<legend>Workshops or short-term courses or FDP (Attended or conducted) :</legend>
			<table border=0 width=70%>
				<tr>
				<td>

        <script>
$(document).ready(function()
{
  $("#txtEditorf").Editor();
});

$(function()
{
  $('#save').click(function ()
  {
   //get text in div and assign to textarea
   var str = $( '#editorf .Editor-editor' ).html();

   $('#txtEditorf').val(str);
  });
});
</script>

<div class="container-fluid" id="editorf">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 nopadding">
             <textarea id="txtEditorf" name="fdp"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>


        </td>
				</tr>
			</table>
		</fieldset>
  			<h3 class="tittle" id="Professional">&nbsp;</h3>
			<h4>&nbsp;</h4>
		<fieldset >
			<legend>Professional Experience :</legend>
			<table border=0 width=70%>
				<tr>
				<td>

        <script>
$(document).ready(function()
{
  $("#txtEditorp").Editor();
});

$(function()
{
  $('#save').click(function ()
  {
   //get text in div and assign to textarea
   var str = $( '#editorp .Editor-editor' ).html();

   $('#txtEditorp').val(str);
  });
});
</script>

<div class="container-fluid" id="editorp">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 nopadding">
             <textarea id="txtEditorp" name="pexp"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>




        </td>
				</tr>
			</table>
		</fieldset>
	<h3 class="tittle" id="publications">&nbsp;</h3>
	<h4>&nbsp;</h4>
		<fieldset>
			<legend>Selected Publications & Conferences & Talks :</legend>
			<table border=0 width=70%>
				<tr>
				<td>

        <script>
$(document).ready(function()
{
  $("#txtEditor").Editor();
});

$(function()
{
  $('#save').click(function ()
  {
   //get text in div and assign to textarea
   var str = $( '#editor2 .Editor-editor' ).html();

   $('#txtEditor').val(str);
  });
});
</script>

<div class="container-fluid" id="editor2">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 nopadding">
             <textarea id="txtEditor" name="notes"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>

</td>
				</tr>
			</table>
		</fieldset>
		<h3 class="tittle" id="awards">&nbsp;</h3>
		<h4>&nbsp;</h4>
		<fieldset>
			<legend>Achivement and Awards :</legend>
			<table border=0 width=70%>
				<tr>
				<td>

        <script>
$(document).ready(function()
{
  $("#txtEditora").Editor();
});

$(function()
{
  $('#save').click(function ()
  {
   //get text in div and assign to textarea
   var str = $( '#editor3 .Editor-editor' ).html();

   $('#txtEditora').val(str);
  });
});
</script>

<div class="container-fluid" id="editor3">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 nopadding">
             <textarea id="txtEditora" name="award"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>

</td>
				</tr>
			</table>
		</fieldset>

			<Br><br>
	<input type=submit id=save name=send value="Click here to submit"  class="btn btn-success btn-large">
	</form>




    </div> <!-- /container -->
 <br><br><br>

<div class="contact" style="background:#8D5151" data-tp-title="<span style='font-weight:bold;'><u>Team e-Army</u></span>" data-tp-desc="Manoj Kumar - N120027 - E3 <br>Venkatesh - N120034 - E3 <br>Prathap - N130950 - E2<br>Durga Prasad<br>Salam<br>HemaSundhar<br>Jagadeesh">
		<p class="copy-right" >&copy 2016. All rights reserved | Design by <a href="http://www.rguktn.ac.in/">e-Army @ RGUKT-N</a></p>
</div>
<script src="facassets/js/jquery.adaptip.js"></script>
<script>
$(".contact").adapTip({
  "placement": "auto"
});
</script>
<!---- footer------->
<style>

.contact {
    background: #272727;
    padding: 10px 0;
}
.contact-right iframe {
    width: 100%;
    height: 288px;
}
p.copy-right {
    color: #fff;
    text-align: center;
    font-size: 14px;
}
p.copy-right a{
    color: #fff;
	text-decoration:none;
}
p.copy-right a:hover{
    color: #10A7AF;
}
</style>
<!---- ///footer------->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

</body>
<script src="facassets/js/alert.js" type="text/javascript"></script>
<script type="text/javascript">

			function loadfail() {
            $.alert('Sorry Error Occured <br>Please try again', {
                title: 'Error :',
                closeTime: 8* 1000,
                autoClose: 'withTime',
                position: ['top-right'],
                type: 'danger',

            });
        }
			function imgcheck() {

            $.alert('Your data Updated but Profile picture Not updated <br>', {
                title: 'Success :',
                closeTime: 8* 1000,
                autoClose: 'withTime',
                position: ['bottom-right'],
                type: 'success',

            });
        }
        function loadsuccess() {
            $.alert('Your profile is updated...!', {
                title: 'Success :',
                closeTime: 8* 1000,
                autoClose: 'withTime',
                position: ['top-right'],
                type: 'success',

            });
        }
        function Welcome() {
			<?php $name = $mydata['name'];
			echo "var name = `{$name}`;"; ?>
            $.alert(' '+name, {
                title: 'Welcome',
                closeTime: 12* 1000,
                autoClose: 'withTime',
                position: ['top-right'],
                type: 'success',

            });
        }
        Welcome();

</script>
</html>
<?php

	if(isset($_POST['send']) )
	{
		$uname=htmlentities(mysql_real_escape_string($_POST['uname']));
		$qua=htmlentities(mysql_real_escape_string($_POST['qua']));
		$email=mysql_real_escape_string($_POST['email']);
		$pno=mysql_real_escape_string($_POST['pno']);
		$fdp=mysql_real_escape_string($_POST['fdp']);
		$pexp=mysql_real_escape_string($_POST['pexp']);
		$rarea=mysql_real_escape_string($_POST['rarea']);
		$pskill=mysql_real_escape_string($_POST['notes']);

		$award=mysql_real_escape_string($_POST['award']);
		$oexp=mysql_real_escape_string($_POST['oexp']);
   $dept=htmlentities(mysql_real_escape_string($_POST['dept']));
   $oh=htmlentities(mysql_real_escape_string($_POST['oh']));
   $oa=htmlentities(mysql_real_escape_string($_POST['oa']));
   $ct=mysql_real_escape_string($_POST['ct']);
   $th=mysql_real_escape_string($_POST['th']);

		$ip = $_SERVER['REMOTE_ADDR'];


			$photo=$_FILES['img']['name'];

			$path="photo/".$_FILES['img']['name'];
			$imageFileType = pathinfo($path,PATHINFO_EXTENSION);


			 $check = getimagesize($_FILES["img"]["tmp_name"]);
			if($check !== false)
			{
				echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
			}
			else
			{

			$uploadOk = 0;
			}

			if (file_exists($path))
			{
			$uploadOk = 0;
			}
			if ($_FILES["img"]["size"] > 1200000)
			{

				$uploadOk = 0;
			}
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
			{

				$uploadOk = 0;
			}

			if ($uploadOk == 0)
			{
				$sql=mysql_query("update faculty set name='$uname',qua='$qua',dept='$dept',email='$email',pno='$pno',oh='$oh',oa='$oa',ct='$ct',th='$th',work='$fdp',exp='$pexp',rarea='$rarea',skill='$pskill',awards='$award',others='$oexp',ip='$ip' where id='$id' ") or die(mysql_error());
				if($sql)
				{
					echo '<script>loadsuccess()</script>';
				}
				else
				{
					echo '<script>loadfail()</script>';
				}
			echo "<script>imgcheck()</script>";

			}
			 else
			 {

				if(is_uploaded_file($_FILES['img']['tmp_name']))
				{

						if(@move_uploaded_file($_FILES['img']['tmp_name'],$path))
						{
						}
						else
						{
							echo 'Failed Please change filename and try again';
						}

				}
				else
				{
						echo 'Image not uploaded';
				}

				include('facdb_config.php');

				$sql=mysql_query("update faculty set photo='$photo' where id='$id' ") or die(mysql_error());
				if($sql)
				{
					echo '<script>loadsuccess()</script>';
				}
				else
				{
					echo '<script>loadfail()</script>';
				}

			}






	}
}
else
{
	header("Location:faclogin.php");
}
?>
