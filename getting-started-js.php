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

					<h1>Getting Started</h1>

					<h2>1. Set-up a local web server</h2>

					<p>As obvious as this may sound, when you make HTML5 games you are making games for a web browser, and as such you have to work within the security restrictions of those browsers. One such restriction is that a browser cannot access your local file system by default. This is a good thing! After all, think of the potential repurcusions if it could.</p>

					<p>But what it means is that you can't just drag a Phaser HTML file onto your browser and expect it to run. The file will need to be served from a web server if you want it to be able to load in resources like images or music. But that server can easily run locally and that's how we develop all of our games here.</p>

					<p>This isn't as daunting as it sounds. There are many great free packages available for Windows and OS X that bundle together pre-configured web servers for you and wrap them all up in a friendly installer.</p>

					<p>On Windows we recommend <a href="http://www.wampserver.com/en/">WAMP Server</a> and on OS X we recommend <a href="http://www.mamp.info/en/index.html">MAMP</a>.</p>

					<p>Once you've downloaded and installed a local web server you are ready to start using Phaser.</p>

					<h2>2. Download Phaser</h2>

					<p>Phaser is hosted on github. If you are comfortable using git then simply <a href="https://github.com/photonstorm/phaser">clone or fork our repository</a>.</p>

					<p>If you have never used git then you can <a href="https://github.com/photonstorm/phaser/archive/master.zip">Download a ZIP</a> of the project instead. Unzip this somewhere on your local filesystem.</p>

					<h2>3. Hello World</h2>

					<p>Now you've got the library let's create a simple demo to check it is all working.</p>

					<p>Create a new folder in your web servers home directory. The location of this folder will depend entirely on which web server you installed and where you installed it to. If you are using WAMP Server then click the WAMP icon in your task bar and pick the option "www directory":</p>

					<img src="guide/wamp.jpg" />
					
					<p>This will open a File Explorer window in the right place.</p>

					<p>Create a folder called '<em>hellophaser</em>'.</p>

					<p>Open the <em>phaser/docs</em> folder from where ever you cloned or unzipped Phaser to. Inside you'll find a folder called "<em>Hello Phaser</em>". Copy the contents of this folder (index.html, phaser-min.js and logo.png) to the <em>hellophaser</em> folder you created in your web root.</p>

					<h2>4. Run</h2>

					<p>Open your web browser and point it at the <em>hellophaser</em> folder on your local web server. Depending on your set-up this may be http://localhost/hellophaser.</p>

					<p>If you have configured your server correctly and copied the files over you should see the following appear:</p>

					<iframe width="640" height="480" src="http://codepen.io/photonstorm/full/bzedE"></iframe>

					<p>It's not exactly Call of Duty, but at least we know it's all working.</p>

					<h2>5. Edit the source</h2>

					<p>Open <em>index.html</em> into your favourite text editor. We recommend <a href="http://www.sublimetext.com/">Sublime Text</a>.</p>

					<p>You'll see a simple game structure based around a collection of functions. This is just one way of creating a game in Phaser. It also has advanced State management, allowing you to break your game up into as many parts as you like, but for the sake of this example we'll use this approach.</p>

					<p>Inside the <em>create</em> function edit the code so it looks like this:</p>

					<pre>
function create() {

	logo = game.add.sprite(game.world.centerX, game.world.centerY, 'logo');
	logo.anchor.x = 0.5;
	logo.anchor.y = 0.5;

}
					</pre>

					<p>Save your changes and refresh the browser. Now you'll see the logo appear in the middle of the game window instead of the top-left. The anchor property of the Sprite allows you to adjust where it is rendered from in relation to its x/y coordinates. 0.5 is 50% along the sprite, i.e. half-way. So these two lines have told Phaser to treat the Sprites x/y coordinates as being the middle of the sprite.</p>

					<h2>6. Spin it</h2>

					<p>Edit the html file again. This time modify the update function to the following:</p>

					<pre>
function update() {

	logo.angle++;

}
					</pre>

					<p>Save and refresh. The logo should now be nicely spinning around the center of the game window.</p>

					<h2>7. Learn by example</h2>

					<p>We appreciate this is only a very simple example, but you've now got a full copy of Phaser, a locally working web server in which to develop and a basic understanding of how Phaser projects are structured.</p>

					<p>More importantly than this you've also got access to loads of example code in the <em>examples</em> folder. You'll find sample code for all kinds of things. From Sprite animation, to playing sounds, to little mini-games. And we're constantly adding new examples all the time too. Watch them run, open up the source and look at how we achieved what you're seeing. We find it's the best way to learn!</p>

					<p>Please give us some time to get the documentation for Phaser finished off. We're busy preparing jsdoc formatting for all classes, but it's a long and painstaking process and we're only about half finished. Be assured that finishing the API docs is our priority right now though. The same goes for the TypeScript definitions file.</p>

					<h2>8. Get involved</h2>

					<p>Now we have shipped the 1.0 release of Phaser we will be publishing tutorials on how best to use it. These will be Beginner and Advanced level, both short and long-form. For the latest news we urge you to <a href="http://www.html5gamedevs.com/forum/14-phaser/">join our forum</a> and get involved. The team are on there every day, happy to answer your questions.</p>

					<p>Please do get involved with the community. We're a friendly and approachable bunch, with years of game dev experience between us. You don't have to code in isolation :) If you find a bug please submit an issue on github, or even better a patch and a pull request.</p>

					<p>Thanks for reading!</p>

					<p>Richard Davey</p>

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