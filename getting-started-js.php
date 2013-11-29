<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Phaser - Desktop and Mobile HTML5 game framework</title>
	<meta name="description" content="A free, fast and flexible framework for HTML5 game creation">
	<link media="all" rel="stylesheet" href="css/all.css">
	<link rel="author" href="https://plus.google.com/106676047029022880747/"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
	<meta property="og:title" content="phaser - HTML5 game framework"/>
	<meta property="og:url" content="http://phaser.io"/>
	<meta property="og:description" content="A free, fast and flexible framework for HTML5 game creation"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>
	<script src="js/jquery.main.js"></script>
	<!--[if IE]><script src="js/ie.js"></script><![endif]-->
	<script src="//use.typekit.net/fmc0gtt.js"></script>
	<script src="http://s.cdpn.io/35162/phaser-min.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>
<body>
	<?php include_once("ga.php") ?>
	<div id="wrapper">
		<div class="w1">
			<header id="header">
				<div class="logo-holder">
					<strong class="logo"><a href="http://phaser.io">Phaser</a></strong>
					<a href="http://phaser.io" class="logotype"><img src="images/logotype.png" width="82" height="114" alt="HTML5"></a>
				</div>
				<section class="container">
					<h1 class="head">Desktop and Mobile HTML5 game framework</h1>
					<div class="text">
						<p>A fast, free and fun open source framework supporting both JavaScript and TypeScript</p>
					</div>
					<a href="https://github.com/photonstorm/phaser" class="btn">Download and get started. Download or Fork via Github</a>
				</section>
			</header>
			<div id="main">
				<section class="section add">

		        <h1>Getting started with Phaser</h1>

		        <h2>Part 1 - Introduction</h2>

		        <p>In this tutorial we're going to cover setting-up a development enviornment with which you can build your Phaser games. This will include running a local web server, picking an IDE, getting the latest version of Phaser and checking it all works together properly.</p>

		        <p><strong>"Why do I need a local web server? Can't I just drag the html files onto my browser?"</strong></p>

		        <p>Not these days, no. I appreciate that it's a bit confusing, even contradictory at times, but it all boils down to browser security. If you're making a static html web page, perhaps with a few images in it, then you can happily drag this file into your browser and see the end results. You can also "Save As" entire web pages locally and re-open them, with all the contents mostly intact. If both of these things work why can't you drag an HTML5 game into a browser and run it?</p>

		        <p>It's to do with the protocol used to access the files. When you request anything over the web you're using http, and the server level security is enough to ensure you can only access files you're meant to. But when you drag a file in it's loaded via the local file system (technically file://) and that is massively restricted, for obvious reasons. Under file:// there's no concept of domains, no server level security, just a raw file system. Ask yourself this: do you really want JavaScript to have the ability to load files from your local file system? Your immediate answer should of course be "not in a million years!". If JavaScript had free reign while operating under file:// there would be nothing stopping it loading pretty much <em>any</em> file it fancied and sending it off who knows where.</p>

		        <p>Because this is so dangerous browsers lock themselves down tighter than Alcatraz when running under file://. Every single page becomes treated as a unique local domain. That is why "Save Web page" works, to a degree. It opens under the same cross-site restrictions as if they were on a live server. There's a detailed post about it on the <a href="http://blog.chromium.org/2008/12/security-in-depth-local-web-pages.html">Chromium blog</a> that is well worth a read.</p>

		        <p>Your game is going to need to load in resources. Images, audio files, JSON data, maybe other JavaScript files. In order to do this it needs to run unhindered by the browser security shackles. It needs http:// access to the game files. And for that we need a web server.</p>

		        <p><a href="getting-started-js2.php">Part 2: Installing a web server</a></p>

		        <ul>
		            <li><a href="getting-started-js.php">Part 1: Introduction</a></li>
		            <li><a href="getting-started-js2.php">Part 2: Installing a web server</a></li>
		            <li><a href="getting-started-js3.php">Part 3: Run in the Cloud</a></li>
		            <li><a href="getting-started-js4.php">Part 4: Choosing an Editor</a></li>
		            <li><a href="getting-started-js5.php">Part 5: Downloading Phaser</a></li>
		            <li><a href="getting-started-js6.php">Part 6: Hello World!</a></li>
		            <li><a href="getting-started-js7.php">Part 7: The Phaser Examples</a></li>
		            <li><a href="getting-started-js8.php">Part 8: Next Steps</a></li>
		        </ul>

				</section>
			</div>
			<footer id="footer">
				<div class="footer-holder">
					<ul class="social-networks">
						<li><a class="forum" href="http://www.html5gamedevs.com/forum/14-phaser/">Phaser Forums</a></li>
						<li><a class="twitter" href="https://twitter.com/photonstorm">@photonstorm</a></li>
						<li><a class="github" href="https://github.com/photonstorm/phaser">Phaser on Github</a></li>
					</ul>
					<div class="holder">
						<div class="text-holder">
							<strong class="logotype-01"><a href="http://www.photonstorm.com">Photon Storm</a></strong>
							<strong class="copy">&copy; 2013 Photon Storm Ltd.</strong>
							<span>All rights reserved.</span>
						</div>
						<div class="logo-holder">
							<a href="http://flixel.org"><img src="images/logotype-02.png" width="26" height="50" alt="image description"></a>
							<div class="description">
								<span>Looking for a Flash game framework?</span>
								<a class="link" href="http://flixel.org">Try Flixel</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>