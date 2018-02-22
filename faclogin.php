<?php
session_start();
	if(isset($_SESSION['faclogin'])){
		header("Location:fprofile.php");
	}
	else{
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Faculty Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="e-Army">

    <!-- Le styles -->
		<script src="facassets/js/jquery-2.1.4.min.js"></script>
		<script src="facassets/js/bootstrap.js"></script>
		<script src="facassets/editor.js"></script>
		
		<link rel="stylesheet" href="facassets/css/bootstrap.css">
		<link rel="stylesheet" href="facassets/css/font-awesome.css">
		<link href="facassets/editor.css" type="text/css" rel="stylesheet"/>
		<link href="facassets/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="facassets/css/style.adaptip.css" rel="stylesheet" type="text/css">
        
        <link rel="SHORTCUT ICON" type="image/x-icon" href="facassets/images/nav.png">
        
  </head>
	<script type=text/javascript>
		function validate(thisform){
			with(thisform){
				if(idno.value==""){
        
					alert_popup('Enter FacID','danger');idno.focus();return false;
				}
				else if(pass.value==""){
					alert_popup('Enter Password, It should not be Empty','danger');pass.focus();return false;
				}
				else{
					return true;
				}
			}
		}
	</script>
  <body>
<div class="header-top" id="home" style="background:#A27E7E">
	<div class="container" >
		<h4 style="font-weight:bolder;text-align:center;color:#FFFFFF;"><img src="facassets/images/rgu.png" height="40px" width="40px" />Rajiv Gandhi University of Knowledge Technologies-Nuzvid</h4>
	</div>
</div>
<?
		include('facdb_config.php');
?>
 <div class="container"><br><br><br><br>
 
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="border:1px solid #8D5151;">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="font-weight:bold;"><i class="fa fa-lock"></i>&nbsp;Faculty Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action=faclogin.php  method=post onsubmit="return validate(this)">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Faculty ID" name="idno" type="text" id="idno" >
                                </div>
                                <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="pass" type="password" id="pass" value="">
                                </div>
                                <!--div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div-->
                                <button type=submit name="send"  class="btn btn-lg btn-primary btn-block">Sign in
                            </fieldset>
                        </form>
                        <small><br><b>*Note : </b>Default password is your Faculty ID.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- /container -->
<script>
 
      // Pretty print
	function alert_popup(msg,cssvalue){
	      window.prettyPrint && prettyPrint()
	 	
		$('.top-right').notify({
		  message: { text: msg },
		  type:cssvalue,
		  fadeOut: {
		    delay: 2000
		  }
		}).show();
	}
</script>
<br><br><br><br><br><br></br></br><br>
<style>

</style>
<div class="contact navbar-fixed-bottom" style="background:#8D5151" data-tp-title="<span style='font-weight:bold;'><u>Team e-Army</u></span>" data-tp-desc="Manoj Kumar<br>Venkatesh<br>Prathap<br>Durga Prasad<br>Salam<br>HemaSundhar<br>Jagadeesh">
		<p class="copy-right" >&copy 2016. All rights reserved | Design by <a href="http://www.rguktn.ac.in/">e-Army @ RGUKT-N</a></p>
</div>
<script src="facassets/js/jquery.adaptip.js"></script>
<script>
$(".contact").adapTip({
  "placement": "auto"
});
</script>

  </body>
</html>
<script src="facassets/js/alert.js" type="text/javascript"></script>
<script type="text/javascript">
  
			function loadfail() {
            $.alert('Login failed...!<br>Please enter valid details', {
                title: 'Error :',
                closeTime: 7* 1000,
                autoClose: 'withTime',
                position: ['top-right'],
                type: 'danger',
            
            });
        } 
        function loadsuccess() {
            $.alert('Login successfully...!', {
                title: 'Welcome :',
                closeTime: 5* 1000,
                autoClose: 'withTime',
                position: ['top-right'],
                type: 'success',
            
            });
        } 
        function loadfill() {
            $.alert('Please fill all the fields...!', {
                title: 'Error :',
                closeTime: 7* 1000,
                autoClose: 'withTime',
                position: ['top-right'],
                type: 'danger',
            
            });
        } 
        
</script>

<?php
	if(isset($_POST['send'])){
		
		$idno=htmlentities(mysql_real_escape_string($_POST['idno']));
		$pass=htmlentities(mysql_real_escape_string($_POST['pass']));
		include('facdb_config.php');
		$sql=mysql_query("SELECT * FROM fac_users where uname='$idno' and pass='$pass'");
		$row=mysql_fetch_array($sql);
		if(empty($row)){
					echo "<script>";
               echo "loadfail()";
					echo "</script>";
		}
		else{
					echo "<script>";
               echo "loadsuccess()";
				
					echo "</script>";
               	 
				 $_SESSION['faclogin']=$idno;
					echo "<script>window.location='fprofile.php';</script>";					
			}
	}
}
?>
