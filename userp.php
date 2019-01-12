<!DOCTYPE html>
<html>
	<head>
		<!-- <meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale= 1.0">
		<title>Profile</title>
		<link rel="stylesheet" type="text/css" href="dist/css/styles.css">
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" crossorigin="anonymous"> -->
		<?php include('head.inc.php'); ?>
		<style>
			.add{
				display: block;
				width:95%;
				padding: 20px;
				background: #eee;
				box-shadow: 0 0 10px #444;
				margin: 15px;
			}
			.btn{
				float: right;
				margin-top: -10px;
				margin-right: 100px;
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<main>
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<div class="side-left">
								<div class="profile">
									<div class="row">
										<div class="col-lg-12">
											<div class="col-lg-2">
												<p><h1 align="center" style="padding-top: 10px; font-size: 30px; font-family: k2d;">username</h1></p><br><center>
											<img src="images/profile.png" alt="Profile" class="img-fluid rounded-circle fit" width="200px" style="border-radius: 50%;"></center><br><hr></div>
											<div class="col-lg-10" style="z-index: 1111111;">
												<div id="map">

													<script type="text/javascript" src="index1.js">
													</script>
													<center><h2 style="position: absolute;z-index: 1111111111; left:50%; top: 50%; transform: translate(-50%,-50%); text-transform: uppercase;font-weight: 700;" id="here">You are here</h2></center>
												</div>
											</div>
										</div>
									</div>
									<br>
									<i class="fa fa-home marg-l" style="float: left !important;"></i>
									<p class="col-lg-10">Kathmandu ,NP</p><br>
									<a href="index.php" style="float: left !important;">Logout</a>
								</div>
							</div>
						</div>
						<center><h1 style="font-size: 30px; padding:10px; font-family: k2d;">Your friend</h1></center>
						<div class="row">
							<div class="col-lg-12">
								<div class="add"><span style="font-size: 20px;">Friend 1</span><button class="btn">Request Connection</button></div>
								<div class="add"><span style="font-size: 20px;">Friend 2</span><button class="btn">Request Connection</button></div>
								<div class="add"><span style="font-size: 20px;">Friend 3</span><button class="btn">Request Connection</button></div>
							</div>
						</div>
					</div>
				</div>
			</main>
			
			<script>
				function hide(){
					document.getElementById('notice').innerHTML = 'BYE!';
					document.getElementById('notice').style.visibility = 'hidden';
				}
			</script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.min.js"></script>
			<script>
				$(document).ready(function(){
					$(".mapboxgl-ctrl-icon").click();
				});
			</script>
			<script>
				 $('#map').on('click', function () {
			       $('#here').delay(5000).fadeOut();
			    });
			</script>
		</body>
	</html>