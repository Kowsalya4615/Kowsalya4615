<?php
extract($_POST);
session_start(); 
include("dbconnect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Placement Cell</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Photo Bum Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//fonts-->

</head>
<body>

<!-- banner -->
<div id="home" class="w3ls-banner w3ls-banner-inner"> 
	<!-- header -->
	<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

				<h1>
					<a class="navbar-brand text-white" href="#"><i class="fab mr-2 fa-tripadvisor"></i>Smart Placement Cell</a>
				</h1>
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-center">
						<li class="nav-item   mr-1">
							<a class="nav-link" href="admin_home.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item active mr-1">
							<a class="nav-link" href="admin_view_student.php">Student Details</a>
						</li>
						
						<li class="nav-item mr-1">
							<a class="nav-link" href="admin_view_company.php">Company Details</a>
						</li>
					 
						<li  class="nav-item mr-1">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>
					</ul>
				</div>

			</nav>
	</header>
	<!-- //header -->
</div>
<!-- //banner -->

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Admin</li>
	</ol>
</nav>

<h3 class="heading text-center mb-sm-5 mb-3">Student Details </h3>
<p>
 
</p>
<form name="form1" method="post" action="">
  
  <p>&nbsp;</p>
  <table width="80%" height="130" border="0" align="center">
    <tr>
      <td><div align="center"><strong>Name</strong></div></td>
      <td><div align="center"><strong>Contact</strong></div></td>
      <td><div align="center"><strong>Email</strong></div></td>
      <td><div align="center"><strong>Address</strong></div></td>
      <td><div align="center"><strong>Roll No </strong></div></td>
      <td><div align="center"><strong>Delete</strong></div></td>
    </tr>
    <?php
	$qrys1="select * from  student_details";
		$result = $conn->query($qrys1);
		while($row = $result->fetch_assoc())
		{
		 ?>
    <tr>
      <td><div align="center"><?php echo $row['name'];?></div></td>
      <td><div align="center"><?php echo $row['contact'];?></div></td>
      <td><div align="center"><?php echo $row['email'];?></div></td>
      <td><div align="center"><?php echo $row['address'];?></div></td>
      <td><div align="center">
          <?php 
					echo $st=$row['rollno'];
					
					?>
      </div></td>
      <td><div align="center"><a href="admin_view_student_delete.php?id=<?php echo $row['id'];?>">select</a></div></td>
    </tr>
    <?php
	  }
	  ?>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p> 
  <!-- footer -->
</p>
<footer class="py-5">
	<div class="container py-md-3">
		<div class="row footer-grids">
			
		</div>
		<div class="copyright mt-5">
			<p class="text-center">� All Rights Reserved | Design by <a href="#"> Admin </a></p>
		</div>
	</div>
</footer>
<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->

	<script src="js/SmoothScroll.min.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
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
	
	<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- //move to top-js-files -->

	<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

</body>
</html>