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
				<section class="section">
					<h1><span class="featured">Phaser Features</span></h1>
					<div class="about">
						<ul>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">WebGL &amp; Canvas</a>
									<div class="popup">
										<h2>WebGL &amp; Canvas</h2>
										<p>Phaser uses both a Canvas and WebGL renderer internally and can automatically swap between them based on browser support. This allows for lightning fast rendering across Desktop and Mobile. Phaser uses and contributes towards the excellent Pixi.js library for rendering.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Preloader</a>
									<div class="popup">
										<h2>Preloader</h2>
										<p>We've made the loading of assets as simple as one line of code. Images, Sounds, Sprite Sheets, Tilemaps, JSON data, XML - all parsed and handled automatically, ready for use in game and stored in a global Cache for Sprites to share.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Physics</a>
									<div class="popup">
										<h2>Physics</h2>
										<p>Phaser ships with our Arcade Physics system. An extremely light-weight AABB physics library perfect for low-powered devices and fast collision response. Control velocity, acceleration, bounce, drag and full collision and separation control.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Sprites</a>
									<div class="popup">
										<h2>Sprites</h2>
										<p>Sprites are the life-blood of your game. Position them, tween them, rotate them, scale them, animate them, collide them, paint them onto custom textures and so much more!</p>
										<p>Sprites also have full Input support: click them, touch them, drag them around, snap them - even pixel perfect click detection if needed.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Groups</a>
									<div class="popup">
										<h2>Groups</h2>
										<p>Group bundles of Sprites together for easy pooling and recycling, avoiding constant object creation. Groups can also be collided: for example a "Bullets" group checking for collision against the "Aliens" group, with a custom collision callback to handle the outcome.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Animation</a>
									<div class="popup">
										<h2>Animation</h2>
										<p>Phaser supports classic Sprite Sheets with a fixed frame size, Texture Packer and Flash CS6/CC JSON files (both Hash and Array formats) and Starling XML files. All of these can be used to easily create animation for Sprites.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Particles</a>
									<div class="popup">
										<h2>Particles</h2>
										<p>An Arcade Particle system is built-in, which allows you to create fun particle effects easily. Create explosions or constant streams for effects like rain or fire. Or attach the Emitter to a Sprite for a jet trail.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Camera</a>
									<div class="popup">
										<h2>Camera</h2>
										<p>Phaser has a built-in Game World. Objects can be placed anywhere within the world and you've got access to a powerful Camera to look into that world. Pan around and follow Sprites with ease.</p>
									</div>
								</div>
							</li>
						</ul>
						<div class="image-holder"><img src="images/img-02.png" width="488" height="275" alt="game screen shot"></div>
						<ul class="additional">
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Input</a>
									<div class="popup">
										<h2>Input</h2>
										<p>Talk to a Phaser.Pointer and it doesn't matter if the input came from a touch-screen or mouse, it can even change mid-game without dropping a beat. Multi-touch, Mouse, Keyboard and lots of useful functions allow you to code custom gesture recognition.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Sound</a>
									<div class="popup">
										<h2>Sound</h2>
										<p>Phaser supports both Web Audio and legacy HTML Audio. It automatically handles mobile device locking, easy Audio Sprite creation, looping, streaming and volume. We know how much of a pain dealing with audio on mobile is, so we did our best to resolve that!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Tilemaps</a>
									<div class="popup">
										<h2>Tilemaps</h2>
										<p>Phaser can load, render and collide with a tilemap with just a couple of lines of code. We support CSV and Tiled map data formats with multiple tile layers. There are lots of powerful tile manipulation functions: swap tiles, replace them, delete them, add them and update the map in realtime.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Device Scaling</a>
									<div class="popup">
										<h2>Device Scaling</h2>
										<p>Phaser has a built-in Scale Manager which allows you to scale your game to fit any size screen. Control aspect ratios, minimum and maximum scales and full-screen support.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Plugin system</a>
									<div class="popup">
										<h2>Plugin system</h2>
										<p>We are trying hard to keep the core of Phaser limited to only essential classes, so we built a smart Plugin system to handle everything else. Create your own plugins easily and share them with the community.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Mobile Browser</a>
									<div class="popup">
										<h2>Mobile Browser</h2>
										<p>Phaser was built specifically for Mobile web browsers. Of course it works blazingly fast on Desktop too, but unlike lots of frameworks mobile was our main focus. If it doesn't perform well on mobile then we don't add it into the Core.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Developer Support</a>
									<div class="popup">
										<h2>Developer Support</h2>
										<p>We use Phaser every day on our many client projects. As a result it's constantly evolving and improving and we jump on bugs and pull requests quickly. This is a living, breathing framework maintained by a commercial company with custom feature development and support packages available. We live and breathe HTML5 games.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="popup-holder">
									<a class="open" href="#">Battle Tested</a>
									<div class="popup">
										<h2>Battle Tested</h2>
										<p>Although Phaser 1.0 is a brand new release it is born from years of experience building some of the biggest HTML5 games out there. We're not saying it is 100% bug free, but we use it for our client work every day, so issues get resolved <em>fast</em> and we stay on-top of the changing browser landscape.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<section class="section add">
					<h1>Getting Started</h1>
					<div class="box-holder">
						<div class="box one">
							<h2><mark>1.</mark> Download</h2>
							<p>Download or create a fork of the Phaser github repository:</p>
							<a href="https://github.com/photonstorm/phaser" class="button item-01"><span>Download via Github</span></a>
						</div>
						<div class="box two">
							<h2><mark>2.</mark> Setup</h2>
							<p>Get started with these guides:</p>
							<div class="button-frame">
								<a href="#comingsoon" class="button item-03"><span>JavaScript Guide</span></a>
								<a href="#comingsoon" class="button item-02"><span>TypeScript Guide</span></a>
							</div>
						</div>
						<div class="box three">
							<h2><mark>3.</mark> Create!</h2>
							<p>Create your awesome game with Phaser then share it with everyone in the official forums!</p>
							<a href="http://www.html5gamedevs.com/forum/14-phaser/" class="button item-04"><span>Join the Forums</span></a>
						</div>
					</div>
				</section>
				<div class="gallery-holder">
					<h1>Phaser Made Games</h1>
					<div class="carousel">
						<div class="mask">
							<div class="slideset">
								<div class="slide">
									<figure>
										<a href="http://www.photonstorm.com/html5/clients/our-largest-html5-game-to-date-wolfblood-the-mystery-of-stoneybridge-for-cbbc"><img src="images/shot-wolfblood.jpg" width="310" height="200" alt="Wolfblood: The Mystery of Stoneybridge"></a>
										<figcaption><strong class="title"><a href="http://www.photonstorm.com/html5/clients/our-largest-html5-game-to-date-wolfblood-the-mystery-of-stoneybridge-for-cbbc">Wolfblood</a></strong>By Photon Storm. Client: BBC / CBBC</figcaption>
									</figure>
								</div>
								<div class="slide">
									<figure>
										<a href="http://www.html5gamedevs.com/topic/1223-connect-me-factory-my-phaser-game/"><img src="images/shot-connect-me.jpg" width="310" height="200" alt="Connect Me Factory"></a>
										<figcaption><strong class="title"><a href="http://www.html5gamedevs.com/topic/1223-connect-me-factory-my-phaser-game/">Connect Me Factory</a></strong>By Haden</figcaption>
									</figure>
								</div>
								<div class="slide">
									<figure>
										<a href="http://www.photonstorm.com/games/peter-rabbit-hide-and-seek"><img src="images/shot-peterrabbit.jpg" width="310" height="200" alt="Peter Rabbit: Hide and Seek"></a>
										<figcaption><strong class="title"><a href="http://www.photonstorm.com/games/peter-rabbit-hide-and-seek">Peter Rabbit: Hide and Seek</a></strong>By Photon Storm. Client: BBC / CBeebies</figcaption>
									</figure>
								</div>
								<div class="slide">
									<figure>
										<a href="http://www.photonstorm.com/games/sarah-and-duck-jigsaw"><img src="images/shot-sarahandduck.jpg" width="310" height="200" alt="Sarah and Duck: Jigsaw"></a>
										<figcaption><strong class="title"><a href="http://www.photonstorm.com/games/sarah-and-duck-jigsaw">Sarah and Duck: Jigsaw</a></strong>By Photon Storm. Client: BBC / CBeebies</figcaption>
									</figure>
								</div>
								<div class="slide">
									<figure>
										<a href="http://www.ludumdare.com/compo/ludum-dare-27/?action=preview&amp;uid=25563"><img src="images/shot-okai.jpg" width="310" height="200" alt="OKAI"></a>
										<figcaption><strong class="title"><a href="http://www.ludumdare.com/compo/ludum-dare-27/?action=preview&amp;uid=25563">OKAI</a></strong>By NoNameNoSocks</figcaption>
									</figure>
								</div>
								<div class="slide">
									<figure>
										<a href="http://www.gamepyong.com/til_death/"><img src="images/shot-tildeath.jpg" width="310" height="200" alt="Til Death"></a>
										<figcaption><strong class="title"><a href="http://www.gamepyong.com/til_death/">Til Death</a></strong>By GamePyong</figcaption>
									</figure>
								</div>
								<div class="slide">
									<figure>
										<a href="http://www.gamepyong.com/caveman_calamity/"><img src="images/shot-caveman.jpg" width="310" height="200" alt="Caveman Calamity"></a>
										<figcaption><strong class="title"><a href="http://www.gamepyong.com/caveman_calamity/">Caveman Calamity</a></strong>By GamePyong</figcaption>
									</figure>
								</div>
								<div class="slide">
									<figure>
										<a href="http://www.photonstorm.com/games/old-jacks-boat"><img src="images/shot-oldjacksboat.jpg" width="310" height="200" alt="Old Jack's Boat"></a>
										<figcaption><strong class="title"><a href="http://www.photonstorm.com/games/old-jacks-boat">Old Jack's Boat: Find the Fish</a></strong>By Photon Storm. Client: BBC / CBeebies</figcaption>
									</figure>
								</div>
								<div class="slide">
									<figure>
										<a href="http://www.html5gamedevs.com/topic/873-guidelines-for-posting-in-this-board/"><img src="images/shot-yourgame.jpg" width="310" height="200" alt="Your Game Here!"></a>
										<figcaption><strong class="title"><a href="http://www.html5gamedevs.com/topic/873-guidelines-for-posting-in-this-board/">Your Game Here!</a></strong>By the wonderful person reading this :)</figcaption>
									</figure>
								</div>
							</div>
						</div>
						<a class="btn-prev" href="#">Previous</a>
						<a class="btn-next" href="#">Next</a>
					</div>
				</div>
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