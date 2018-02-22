<?php
include "../facprofiles/facdb_config.php";
$getdata=mysql_fetch_array(mysql_query("select * from faculty where id='$uid' ")) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $getdata['name']?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="About,Office Hours,Teaching,Professional Experience,Publications" />
<meta name="keywords" content="Research & Interested Areas,Awards and Recognitions,Workshops & Invited talks" />
<meta name="author" content="e-Army @ RGUKT-N" />
<link rel="SHORTCUT ICON" type="imge/x-icon" href="../facprofiles/facassets/images/rgu.png">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link rel="stylesheet" href="../facprofiles/facassets/css/bootstrap.css">
<link rel="stylesheet" href="../facprofiles/facassets/css/font-awesome.min.css">
<link href="../facprofiles/facassets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../facprofiles/facassets/css/style.adaptip.css" rel="stylesheet" type="text/css">

<!-- js -->
<script type="text/javascript" src="../facprofiles/facassets/js/jquery-2.1.4.min.js"></script>

<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="../facprofiles/facassets/js/move-top.js"></script>
		<script type="text/javascript" src="../facprofiles/facassets/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- start-smoth-scrolling -->

<script type="text/javascript" src="../facprofiles/facassets/js/numscroller-1.0.js"></script>

</head>

<!-- Menu ------>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="">
        <div class="container" >
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav" >
					<li><a style="color:#97F0EE;font-weight:bold;" href="http://www.rguktn.ac.in/"><img src="../facprofiles/facassets/images/nav.png" width="20px" height="20px" />RGUKT-N</a></li>
                    <li><a class="scroll" href="#page-top" style="color:#000;"><i class="fa fa-home"></i>&nbsp;Home</a></li>
					<li><a class="scroll" href="#teaching" style="color:#000;"><i class="fa fa-book"></i>&nbsp;Teaching</a></li>
					<li><a class="scroll" href="#professexp" style="color:#000;"><i class="fa fa-user"></i>&nbsp;Professional Experience</a></li>
					<li><a class="scroll" href="#interest" style="color:#000;"><i class="fa fa-pencil"></i>&nbsp;Interested Areas</a></li>
					<li><a class="scroll" href="#publications" style="color:#000;"><i class="fa fa-file-text-o"></i>&nbsp;Publications</a></li>
					<li><a class="scroll" href="#awards" style="color:#000;"><i class="fa fa-trophy"></i>&nbsp;Awards</a></li>
					<li><a class="scroll" href="#workshops" style="color:#000;"><i class="fa fa-map-marker"></i>&nbsp;Workshops</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!--/// Menu ------>

<!-- Photo , Details , Address ------>
<br><br>
<div class="header">
	<div class="container">

		<div class="col-md-8 header-left">
			<div class="col-sm-5 pro-pic">
				<img class="img-responsive" src="../facprofiles/photo/<?php echo $getdata['photo']?>" alt=" "/>
			</div>
			<div class="col-sm-5 pro-text">
				<h1><?php echo $getdata['name'];?></h1>
				<p style="font-size:16px;"><?php echo $getdata['qua']?></p></br>
				<p><?php echo $getdata['dept']?></p>
				<p>Rajiv Gandhi University of Knowledge Technologies (AP-IIIT).</p>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="col-md-4 header-right ">
         <table border="0" >
				<tr><td  class="tabhead">Phone no :</td><td style="color:#fff;"><?php echo $getdata['pno']?></td></tr><br>
				<tr><td  class="tabhead">Email :</td><td style="color:#fff;"><?php echo $getdata['email']?></td></tr><br>
				<tr ><td class="tabhead">Address :</td><td style="color:#fff;"><?php echo $getdata['oa']?></td></tr>
        <tr ><td class="tabhead">OfficeHours :</td><td style="color:#fff;"><?php echo $getdata['oh']?></td></tr>
			  </table>
			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!--/// Photo , Details , Address ------>

<br><br>


<!-- Bio -------->
<div class="container">
	<h3 class="tittle">Bio :</h3>
		<div class="col-md-12 col-lg-12 skill-right ">
			<div class="col-sm-12 more-right">
				<div class="accordion-section">
					<?php echo $getdata['others']; ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>
<!-- ///Bio -------->

<!-- Teaching -------->

<div class="container" id="teaching">
	<h3 class="tittle ">&nbsp;</h3>
	<h4>&nbsp;</h4>
	<div id="officehours1">
		<h3 class="tittle">Teaching :</h3>
		<div class="col-md-12 col-lg-12 skill-right ">
			<div class="col-sm-12 more-right">
				<div class="accordion col-lg-10">
							<div class="accordion-section">
								<h5 class="accordion-section-title">Current Teaching :</h5>
								<?php echo  $getdata['ct'];	?>
							</div>
							<div class="accordion-section">
								<h5 class="accordion-section-title">Previous Teaching :</h5>
							 <?php echo  $getdata['th']; ?>
							</div>
							<div class="accordion-section"></div>
				</div>
				</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>


<br>
<!-- Professional experience -------->
<div class="container" id="professexp">
	<h3 class="tittle ">&nbsp;</h3>
	<h4>&nbsp;</h4>
	<h3 class="tittle">Professional Experience :</h3>
		<div class="col-md-12 col-lg-12 skill-right ">
			<div class="col-sm-12 more-right">
				<div class="accordion-section">
					<?php echo  $getdata['exp']; ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>
<!-- ///Professional experience -------->


<br>
<!-- Research Interest  -------->
<div class="container" id="interest">
	<h3 class="tittle ">&nbsp;</h3>
	<h4>&nbsp;</h4>
	<h3 class="tittle">Research & Interested Areas :</h3>
		<div class="col-md-12 col-lg-12 skill-right ">
			<div class="col-sm-12 more-right">
				<div class="accordion-section">
					<?php echo  $getdata['rarea']; ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>
<!-- ///Research Interest  -------->



<br>
<!--- Publications ------>
	<div class="container" id="publications">
		<h3 class="tittle ">&nbsp;</h3>
		<h4>&nbsp;</h4>
		<h3 class="tittle ">Publications :</h3>
		<div class="col-md-12 col-lg-12 skill-right ">
					<div class="col-sm-12 more-right">
						<?php echo $getdata['skill'];?>
					</div>
					<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
</div>
<!--- //Publications ------------>

<br>
<!--- Awards ------>
	<div class="container" id="awards">
		<h3 class="tittle ">&nbsp;</h3>
		<h4>&nbsp;</h4>
		<h3 class="tittle ">Awards and Recognitions :</h3>
		<div class="col-md-12 col-lg-12  ">
					<div class="col-sm-12 more-right">
						<?php echo $getdata['awards'];?>
					<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!--- //Awardss ------------>

<br><br>
<!--- Workshops ------>
	<div class="container" id="workshops">
		<h3 class="tittle ">&nbsp;</h3>
		<h4>&nbsp;</h4>
		<h3 class="tittle ">Workshops & Invited talks :</h3>
		<div class="col-md-12 col-lg-12 skill-right ">
					<div class="col-sm-12 more-right">
						<?php echo $getdata['work']?>
					</div>
					<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
</div>
<!--- //Awardss ------------>

<br>
<!-- footer -->
<div class="contact" style="background:#8D5151" data-tp-title="<span style='font-weight:bold;'><u>Team e-Army</u></span>" data-tp-desc="Manoj Kumar - N120027 - E3 <br>Venkatesh - N120034 - E3 <br>Prathap - N130950 - E2<br>Durga Prasad<br>Salam<br>HemaSundhar<br>Jagadeesh">
		<p class="copy-right" >&copy 2016. All rights reserved | Design by <a href="http://www.rguktn.ac.in/">e-Army @ RGUKT-N</a></p>
</div>
<script src="../facprofiles/facassets/js/jquery.adaptip.js"></script>
<script>
$(".contact").adapTip({
  "placement": "auto"
});
</script>
<!-- //footer-->


<!---------------------------- js ------------------------------>

	<script src="../facprofiles/facassets//js/bootstrap.js"></script>

	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>
