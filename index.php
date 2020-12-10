<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="icon" type="png" href="logo.png">
<script type="text/javascript" src="main.js"></script>
	<title>Glory Guide</title>
</head>
<body>
	<div class="top-nav">
		<ul>
			<li><img src="logo.png"/></li>
			<li class="title"><a href="index.php">GLORY GUIDE</a></li>
		</ul>
		<ul class="feature">
			<li><a href="heroes.php">HEROES</a></li>
			<li><a href="tierlists.php">TIER LISTS</a></li>
			<li><a href="about.html">ABOUT</a></li>
			<li><a href="feedback.html">HELP</a></li>
		</ul>
	</div>
	<div class="tier-lists">
		<h2 id="text-tierlists">LATEST HEROES</h2>
		<div class="lists-container">
			<div>
			<?php
			$newheroes = array("BENEDETTA", "BRODY", "BARATS", "KHALEED", "YU ZHONG", "LUO YI");
			$roles = array("Assassin", "Marksman", "Tank", "Support", "Mage", "Fighter");
				echo "<div>";
				echo "<img src=\"benedetta.png\" class=\"hero-pic\">";
				echo "</div>";
				echo "<div class=\"desc\">";
				echo "<h4>" . $newheroes[0] . "</h4>";
				echo "<span>Role:" . $roles[0] . "</span>";
				echo "</div>";
				echo "<div>";
				echo "<img src=\"brody.png\" class=\"hero-pic\">";
				echo "</div>";
				echo "<div class=\"desc\">";
				echo "<h4>" . $newheroes[1] . "</h4>";
				echo "<span>Role:" . $roles[1] . "</span>";
				echo "</div>";
				echo "<div>";
				echo "<img src=\"barats.png\" class=\"hero-pic\">";
				echo "</div>";
				echo "<div class=\"desc\">";
				echo "<h4>" . $newheroes[2] . "</h4>";
				echo "<span>Role:" . $roles[2] . "</span>";
				echo "</div>";
				echo "</div>";
				echo "<div>";
				echo "<div>";
				echo "<img src=\"khaleed.png\" class=\"hero-pic\">";
				echo "</div>";
				echo "<div class=\"desc\">";
				echo "<h4>" . $newheroes[3] . "</h4>";
				echo "<span>Role:" . $roles[5] . "</span>";
				echo "</div>";
				echo "<div>";
				echo "<img src=\"yz.png\" class=\"hero-pic\">";
				echo "</div>";
				echo "<div class=\"desc\">";
				echo "<h4>" . $newheroes[4] . "</h4>";
				echo "<span>Role:" . $roles[5] . "</span>";
				echo "</div>";
				echo "<div>";
				echo "<img src=\"luoyi.png\" class=\"hero-pic\">";
				echo "</div>";
				echo "<div class=\"desc\">";
				echo "<h4>" . $newheroes[5] . "</h4>";
				echo "<span>Role:" . $roles[3] .  "</span>";
				echo "</div>";
			?>
			</div>
		</div>
	</div>
	<div class="info">
		<h3 class="info-title">THESE CAN HELP YOU REACH THE TOP!</h3>
		<p>These guides will help you obtain great performance in your ranked games every now as you visit this website and check the tier lists and the builds of each hero. Do you want to reach the true potential of your gaming? Take your time to visit our guides!</p>
		<button class="btn-create-tierlists" onclick="window.location.href='tierlists.html'">VIEW TIER LISTS</button>
	</div>
	<div class="bot-nav">
		<div class="about">
			<span>2020 GLORYGUIDES.COM - ALL RIGHTS RESERVED</span>
		</div>
		<div class="socials">
			<button class="btnfacebook" type="facebook" onclick="location.href='https://facebook.com';"><img src="facebook.png" width="25" height="25"></button>
			<button class="btntwitter" type="twitter" onclick="location.href='https://twitter.com';"><img src="twitter.png" width="25" height="25"></button>
			<button class="btndiscord" type="discord" onclick="location.href='https://discord.com';"><img src="discord.png" width="25" height="25"></button>
		</div>
	</div>
</body>
</html>