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
	<div class="center-nav">
		<h2 id="text-tierlists">TIER LISTS</h2>
		<div class="lists-container">
			<?php
			$tierlists = array("S+ Tier Heroes", "S Tier Heroes", "A Tier Heroes");
			$heroes = array("ALICE", "ESMERALDA", "HELCURT", "LANCELOT", "LING", "YU ZHONG");
			echo "<div>";
			//echo "<h2 id="text-tierlists">" . $tierlists[0] . "</h2>";
			echo "<a href=\"ling.html\" id=\"link\">";
			echo "<div>";
			echo "<img src=\"ling.png\" class=\"hero-pic\">";
			echo "</div>";
			echo "<div class=\"desc\">";
			echo "<h4>" . $heroes[4] . "</h4>";
			echo "</div>";
			echo "</a>";
			echo "<a href=\"lance.html\" id=\"link\">";
			echo "<div>";
			echo "<img src=\"lance.png\" class=\"hero-pic\">";
			echo "</div>";
			echo "<div class=\"desc\">";
			echo "<h4>" . $heroes[3] . "</h4>";
			echo "</div>";		
			echo "</a>";
			echo "</div>";
			echo "<div>";
			//echo "<h2 id="text-tierlists">" . $tierlists[1] . "</h2>";
			echo "<a href="alice.html" id="link">";
			echo "<div>";
			echo "<img src="alice.png" class="hero-pic">";
			echo "</div>";
			echo "<div class="desc">";
			echo "<h4>" . $heroes[0] . "</h4>";
			echo "</div>";
			echo "</a>";
			echo "<a href="esme.html" id="link">";
			echo "<div>";
			echo "<img src="esme.png"  class="hero-pic">";
			echo "</div>";
			echo "<div class="desc">";
			echo "<h4>" . $heroes[1] . "</h4>";
			echo "</div>";
			echo "</a>";
			echo "</div>";
			echo "<div>";
			//echo "<h2 id="text-tierlists">" . $tierlists[2] . "</h2>";
			echo "<a href="helc.html" id="link">";
			echo "<div>";
			echo "<img src="helcurt.png"  class="hero-pic">";
			echo "</div>";
			echo "<div class="desc">";
			echo "<h4>" . $heroes[2] . "</h4>";
			echo "</div>";
			echo "</a>";
			echo "<a href="yz.html" id="link">";
			echo "<div>";
			echo "<img src="yz.png" class="hero-pic">";
			echo "</div>";
			echo "<div class="desc">";
			echo "<h4>" . $heroes[5] . "</h4>";
			echo "</div>";
			echo "</a>";
			echo "</div>";
			?>
		</div>
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