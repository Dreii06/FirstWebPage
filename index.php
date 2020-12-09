<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Glory Guide</title>
</head>
<body>
	<div class="top-nav">
		<ul>
			<li><img src="logo.png"/></li>
			<li class="title"><a href="index.html">GLORY GUIDE</a></li>
		</ul>
		<ul class="feature">
			<li><a href="heroes.html">HEROES</a></li>
			<li><a href="tierlists.html">TIER LISTS</a></li>
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
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sollicitudin, ligula ornare commodo tristique, enim purus imperdiet diam, a ultricies nibh lectus in risus. Maecenas lobortis sollicitudin mi sit amet luctus. Curabitur vitae cursus lacus. Nullam id metus eget mauris finibus porta at vel turpis. Praesent at diam bibendum justo auctor suscipit quis sollicitudin tortor.</p>
		<button class="btn-create-tierlists">VIEW TIER LISTS</button>
	</div>
	<div class="bot-nav">
		<div class="about">
			<span>2020 GLORYGUIDES.COM - ALL RIGHTS RESERVED</span>
		</div>
		<div class="socials">
			<button class="btnfacebook" type="facebook"><img src="facebook.png" width="25" height="25"></button>
			<button class="btntwitter" type="twitter"><img src="twitter.png" width="25" height="25"></button>
			<button class="btndiscord" type="discord"><img src="discord.png" width="25" height="25"></button>
		</div>
	</div>
</body>
</html>