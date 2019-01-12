<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale= 1.0">
		<title>Profile</title>
		<link rel="stylesheet" type="text/css" href="dist/css/styles.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" crossorigin="anonymous">
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
									<p><h1 align="center" style="padding-top: 10px; font-size: 30px; font-family: k2d;">Admin</h1></p><br><center>
									<img src="images/s11.jpg" alt="Profile" class="img-fluid rounded-circle fit" ></center><br><hr><br>
									<i class="fa fa-home marg-l"></i>
									<p class="col-lg-10">London, UK</p><br>
									<i class="fa fa-birthday-cake marg-l"></i>
									<p class="col-lg-10 d">April 1, 1998</p>
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
			<footer>
				<a href="index.php">GO</a>
			</footer>
			<script>
				function hide(){
					document.getElementById('notice').innerHTML = 'BYE!';
					document.getElementById('notice').style.visibility = 'hidden';
				}
			</script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.min.js"></script>
		</body>
	</html>