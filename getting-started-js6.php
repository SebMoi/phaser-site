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

		        <h2>Part 6 - Hello World!</h2>

		        <p>With your editor set-up, web server installed and Phaser downloaded it's time to create something and check it's all working.</p>

		        <p>You need to discover where your 'web root' is on your machine. This is the folder in which the server looks for files. If you are using WAMP on Windows you can locate it by clicking the WAMP icon in your system-tray and select "www directory" from the pop-up menu. Other servers will have other methods of determining the location, but from this point on we'll refer to it as the 'webroot'.</p>

		        <p>Download <a href="https://github.com/photonstorm/phaser/blob/master/tutorials/01%20Getting%20Started/hellophaser.zip">this zip file</a>. It contains a folder called 'hellophaser' inside which you'll find a JavaScript file, an index.html and a PNG. Copy the 'hellophaser' folder to your webroot.</p>

		        <h3>Testing, testing ...</h3>

		        <p>Open your web browser and browse to your local server. This may be as simple as typing in 'localhost' or '127.0.0.1' or you may need to specify a port number as well, it depends entirely on which server set-up method you used. If the server is set-up correctly and running you will see the default installation page in your browser. This will vary from server to server, but as long as the page doesn't "time out" or throw a permissions error you are good to go.</p>

		        <p>Now add <em>/hellophaser</em> onto the end of the URL and the Hello World test should load. If it does it will display a black game area with a phaser logo in the middle. If it doesn't for whatever reason you need to bring up the debug console and see what errors are output. In most browsers you can do this by pressing F12. This works across Chrome, Firefox and Internet Explorer. Check to see what the error is, hopefully it's a simple one like the files being missing, in which case check your folder names and refresh the page. If it's something more complex feel free to post about it <a href="http://www.html5gamedevs.com/forum/14-phaser/">on the forum</a> and we'll help.</p>

		        <p><a href="getting-started-js7.php">Part 7: The Phaser Examples</a></p>

		        <ul>
		            <li><a href="index.html">Part 1: Introduction</a></li>
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