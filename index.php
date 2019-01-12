<!DOCTYPE html>
<html>
	<head>
		<?php include('head.inc.php'); ?>
		<style>
			.front{
	position: absolute;
	top: 70%;
	left: 0;
	width: 100%;
	height: 140vh;
	background: #eee;
}
		</style>
	</head>
	<body>
		<div class="head">
			<div id="expand">
				<div class="collapse" id="navbarToggleExternalContent" style="width: 100% !important">	
					<ul class="tog-ul">
						<li class="tog-li"><a href="#about" class="tog-a">About</a></li>
						<li class="tog-li"><a href="login.php" class="tog-a">Login</a></li>
						<li class="tog-li"><a href="signup.php" class="tog-a">Signup</a></li>-
					</ul>
				</div>
				<a href="#" class="navbar-toggler as" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</a>
			</div>
			<?php include('top.php'); ?>
			<div class="front">
				<center><h2 style="font-family: k2d;">MAP</h2></center>
				<div id="map">
					<script type="text/javascript" src="index.js">
					</script>  
				</div><br><br><br>
				<div class="container">
					<div class="about">
						<div class="row">
							<center><h2 style="font-family: k2d;" id="about">About</h2></center><br><br>
							<div class="col-lg-12">
								<div class="col-lg-5 wow slideInLeft">
									<center><img src="images/logo.png" width="200px" height="200px"></center>
								</div>
								<div class="col-lg-6 wow slideInRight">
									<p style="font-size: 16px; letter-spacing: 1px; color: #555; text-align: justify;">This web app is suppose to find the shortest route and parking area around certain radius of your destination. Walking, Cycling or Driving.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer>
					<div class="footer">
						<div class="left">
							<center>
							<ul>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
							</center>
						</div>
						<div class="right">
							<div class="lh" style="line-height: 100px">
								<div class="copyr">&copy; <?php echo date('Y'); ?> All Rights Reserved | Designed By:
									<a href="#"> Scripters</a>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		
		<?php include 'script.inc.php'; ?>
		<script>
				$(document).ready(function(){
					$(".mapboxgl-ctrl-icon").click();
				});
			</script>
	</body>
</html>