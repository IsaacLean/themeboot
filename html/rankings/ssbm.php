<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Super Smash Bros. Melee Rankings | Santa Cruz Fighting Game Community</title>
	<link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/style.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body>
	<div class="navbar-wrapper">
		<div class="container">
			<div class="navbar navbar-inverse navbar-static-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">Santa Cruz FGC</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/faq">FAQ</a></li>
							<li><a href="/schedule">Events & Schedule</a></li>
							<li><a href="/location">Location</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/blog">Blog</a></li>
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Rankings <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="/rankings/pm.php">Project M</a></li>
									<li><a href="#"><s>Super Smash Bros. for Wii U</s></a>
									<li class="active"><a href="/rankings/ssbm.php">Super Smash Bros. Melee</a></li>
									<li><a href="/rankings/usf4.php">Ultra Street Fighter IV</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="banner">
		<div class="item banner-ssbm-rank">
			<div class="container">
				<h1 class="page-title">Super Smash Bros. Melee Rankings</h1>
			</div>
		</div>
	</div>
	<div class="container content blog">
		<h1>Season 1</h1>
		<p class="text-center">
			Find out more information on <a href="/blog/fight-night-ranked-edition-season-1.html">Fight Night: Ranked Edition</a>.</p>
		</p>
		<p class="text-center">
			View brackets: <a href="http://scfgc.challonge.com/ssbm_ranked_night_1" target="_blank">#1</a>, <a href="http://scfgc.challonge.com/ssbm_ranked_night_3" target="_blank">#3</a>, <a href="http://scfgc.challonge.com/ssbm_ranked_night_6" target="_blank">#6</a>, <a href="http://scfgc.challonge.com/ssbm_ranked_night_9" target="_blank">#9</a>
		</p>
		<?php include("rs_display/rs_display_script.php") ?>
		<?php
		display_season_results(1);
		?>
		<hr class="featurette-divider">
		<footer>
			<p class="pull-right"><a href="https://facebook.com/groups/santacruzfgc"><img src="/img/fb.png" alt="Santa Cruz FGC Facebook Group"></a></p>
			<p>&copy; 2014 Santa Cruz Fighting Game Community &middot; <a href="/under-construction.html">Constitution</a> &middot; <a href="/under-construction.html">Sponsors</a></p>
		</footer>
	</div>
	<script src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-56225107-1', 'auto');
	ga('send', 'pageview');
	</script>
</body>
</html>