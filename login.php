<!DOCTYPE html>
<html>
	<head>
		<?php include('head.inc.php'); ?>
	</head>
	<body>
		<div id="expand" class="navbar-top navbar-inverse">
			<div style="width: 100% !important  top: 100px;">	
				<ul class="tog-ul">
					<li class="tog-li"><a href="index.php" class="tog-a">Home</a></li>
					<li class="tog-li"><a href="index.php#about" class="tog-a">About</a></li>
					<li class="tog-li"><a href="login.php" class="tog-a">Login</a></li>
					<li class="tog-li"><a href="signup.php" class="tog-a">Signup</a></li>-
				</ul>
			</div>
			
		</div>
		<div class="front" style="height: 80vh !important; top: 100px;">
			<form method="post" action="userp.php" name="sign" enctype="multipart/form-data" class="form-sup" style="top: 5%; left:55%;">
				<fieldset>
					<legend>Login</legend>
					<input class="input" type="text" name="name" required placeholder="Username"><br>
					<input class="input" type="password" name="p1" required placeholder="Password"><br>
					<br>
					<input class="submit-btn" type="submit" name="signup" value="Login" href="#">
				</fieldset>
			</form>
		</div>

		<footer>
					<div class="footer" style="position: absolute; top: 140vh;">
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
	</body>
</html>