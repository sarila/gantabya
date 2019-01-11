<!DOCTYPE html>
<html>
	<head>
		<?php include('head.inc.php'); ?>
	</head>
	<body>
		<div class="head">
			<div class="top">
				<div class="black"></div>
				<img src="images/s11.jpg" alt="" class="bg"/>
				<h1 class="p">By The Way</h1>
				<p id="desc">Save Your Time</p>
			</div>
			<div class="front">
				<div class="container">
					<h1 align="center">MAP</h1>
					<div id="map">
						<script type="text/javascript" src="index.js">
							// add markers to map
							geojson.features.forEach(function(marker) {

							  // create a HTML element for each feature
							  var el = document.createElement('div');
							  el.className = 'marker';

							  // make a marker for each feature and add to the map
										    new mapboxgl.Marker(el)
							  .setLngLat(marker.geometry.coordinates)
							  .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
							    .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
							    .addTo(map);
							});
						</script>			
					</div>

				</div>
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
			</div>
		</div>
		
		<?php include 'script.inc.php'; ?>
	</body>
</html>