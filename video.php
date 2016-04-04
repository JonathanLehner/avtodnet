<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Avtod.NET | Video player</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<!-- JS ZA VIDEO -->
		<script type="text/javascript" src="assets/js/jwplayer.js"></script>

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			
			<?php
				include 'header.php'
				
			?>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Video Player</div>
					<div id="main" class="container_2">
						<div class="row 100%">
							<div class="8u 12u(mobile)">

								<!-- Content -->
									<div id="content">
											<header class="style1">
												<h2>Video</h2>
											</header>
											
											
											<form method='POST' enctype='multipart/form-data'>
												Name:<input type='text' name='vid_name'>
												<br>
												Video:<input type='file' name='video'>
												<br>
												<input type='submit'>
											</form>
											<hr>
											<h1>Video</h1>
											
											
											<script src="//content.jwplatform.com/players/mXZ90E4F-uiYEhOoF.js"></script>
											
											<div class="video">
												<video controls="controls" poster="https://gyazo.com/3f56c3c048a13660cbed54066e8154e9.jpg" width="480" height="360">
												<source src="https://i.gyazo.com/ad18c783c8c7a2c5c969767accdc39de.mp4" type="video/mp4" />
												<object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
													<param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
													<param name="allowFullScreen" value="true" />
													<param name="wmode" value="transparent" />
													<param name="flashVars" value="config={'playlist':['http%3A%2F%2Fsandbox.thewikies.com%2Fvfe-generator%2Fimages%2Fbig-buck-bunny_poster.jpg',{'url':'http%3A%2F%2Fclips.vorwaerts-gmbh.de%2Fbig_buck_bunny.mp4','autoPlay':false}]}" />
												<img alt="Shit" src="" width="640" height="360" title="eksde" />
												</object>
											</video>
											<p>
												<strong>View source:</strong> <a href="https://i.gyazo.com/ad18c783c8c7a2c5c969767accdc39de.mp4">MP4 format</a>
											</p>
											</div>
											
									</div>
								</div>
							</div>
						</div>
					</div>
		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="http://content.jwplatform.com/libraries/uiYEhOoF.js"></script>


	</body>
</html>