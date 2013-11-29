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

		        <h2>Part 2 - Installing a web server</h2>

		        <h3>Windows</h3>

		        <p>On Windows there are lots of "single install" bundles available. These are easy-to-install files that package together popular web technologies like Apache, PHP and MySQL and install them all for you at once, often with a handy system-tray icon to manage them too.</p>

		        <p>We would recommend either <a href="http://www.wampserver.com/en/">WAMP Server</a> or <a href="http://www.apachefriends.org/en/xampp.html">XAMPP</a>. Both have easy set-up guides available. WAMP specifically installs an icon into your system-try from which you can stop and restart the services as well as modify Apache settings, such as creating a new folder alias for a project.</p>

		        <p>Cesanta provide the <a href="http://cesanta.com/downloads.html">Mongoose web server</a>. This is a really small application that requires no installation and can run as a single EXE file. Without all of the additional bundles like SSI and WebDAV (none of which you'll need for an HTML5 game) the EXE is a paltry 45KB in size. Even the fully featured one is only 355KB.</p>

		        <p>Instead of an 'all in one' bundle you could also download just a web server on its own. Both <a href="http://www.iis.net/">Microsoft IIS</a> and <a href="http://httpd.apache.org/">Apache</a> can be downloaded for free from their respective sites.</p>

		        <p><strong>Note:</strong> Skype likes to steal port 80 by default. This is the traditional port for a web server to run over and it might interfer with WAMP or similar being able to start. To disable this within Skype go to "Tools - Options - Connection" and uncheck the "Use port 80 and 443 as alternatives for incoming connections" checkbox.</p>

		        <h3>OS X</h3>

		        <p>Being a Unix environment at heart there are more options available of OS X. But if you'd like an "all in one" approach like WAMP for Windows, with a nice clean and easy to use interface then we'd strongly recommend <a href="http://www.mamp.info/en/index.html">MAMP</a>. This comes in two versions: one free and one paid for.</p>

		        <p>Naturally there are also guides for setting up a local web server manually, such as <a href="https://discussions.apple.com/docs/DOC-3083">this guide written for Mountain Lion</a>. Pick whichever approach you feel most comfortable with.</p>

		        <h3>grunt connect</h3>

		        <p><a href="http://gruntjs.com/">Grunt</a> is an extremely powerful tool to have installed, regardless if you use it as a web server or not. At its essence it's a JavaScript based task runner and allows you to automate tedious time consuming tasks. We use it in Phaser to build our distribution scripts for example. But it can also be configured with Connect to serve local files, acting as a web server, and <a href="https://github.com/gruntjs/grunt-contrib-connect">here's a guide on doing just that</a>.</p>

		        <h3>Simple HTTP Server with Python</h3>

		        <p>If you need a quick web server running and you don't want to mess around with setting up Apache or downloading an app, then Python can help. Python comes with a simple built-in HTTP server. With the help of this little HTTP server you can turn any directory on your system into your web server directory. Naturally the only thing you need to have installed is Python. <a href="http://www.linuxjournal.com/content/tech-tip-really-simple-http-server-python">Read the full guide here</a>.</p>

		        <h3>http-server for node.js</h3>

		        <p>http-server is a simple, zero-configuration command-line http server for <a href="http://nodejs.org/">node.js</a>. It is powerful enough for production usage, but it's simple and hackable enough to be used for testing, local development, and learning. Or as the web site says "Serving up static files like they were turtles strapped to rockets". Get the npm and instructions from the <a href="https://npmjs.org/package/http-server">http-server web site</a>.</p>

		        <h3>php 5 built-in web server</h3>

		        <p>As of PHP 5.4.0, the CLI SAPI provides a built-in web server. It's only really suitable for development purposes and serves all files sequentially, but it's easily powerful enough for testing HTML5 games. It's invoked from a single command-line call, and you can find details on how to do this in <a href="http://php.net/manual/en/features.commandline.webserver.php">the PHP Manual</a>.</p>

		        <p>Rather than running a web server locally you could build your HTML5 game fully in the cloud. We explore some cloud options in Part 3.</p>

		        <p><a href="getting-started-js3.php">Part 3: Run in the Cloud</a></p>

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