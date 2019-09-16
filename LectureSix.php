<!doctype html>
<html>
<head>
<title>Simple Dashboard Website</title>
<link rel="stylesheet" href="index-style-1.css">
</head>
<body>

	<main>

		<header>
			<img id="BannerLogo" src="simplyrecipes.png"/>
			<!--
				To center an image, set left and right margin to auto and make it into a block element
			-->
		</header>

		<nav>
			<ul>
				<li><a href="LectureSix.php">Home</a></li>
				<li><a href="LectureSix.php">About Us</a></li>
				<li><a href="LectureSix.php">Our Recipes</a></li>
				<li><a href="LectureSix.php">Contact Us</a></li>
				<li><a href="LectureSix.php">Comments</a></li>
			</ul>
		</nav>

		<div id="ImageDiv">
			<div id="box-1">
				<img class="imagePlace" src="Adobo.jpg"/>
				<center><label>Adobo</label></center>
			</div>

			<div id="box-2">
				<img class="imagePlace" src="KareKare.jpg"/>
				<center><label>Kare-Kare</label></center>
			</div>

			<div id="box-3">
				<img class="imagePlace" src="Sinigang.jpg"/>
				<center><label>Sinigang</label></center>
			</div>

			<div id="box-4">
				<img class="imagePlace" src="Spaghetti.jpg"/>
				<center><label>Spaghetti</label></center>
			</div>

		</div>


		<footer>
			<label id="FooterHeader">All rights reserved. Chowfunking.com</label>
		</footer>

	</main>


</body>
</html>