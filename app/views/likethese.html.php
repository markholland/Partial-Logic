<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
	<meta name="description" content="<?php echo config('blog.description')?>" />

	<link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />

	<link href="<?php echo site_url() ?>assets/css/style_likethese.css" rel="stylesheet" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
<body>

	<aside>

		<h1><a href="<?php echo site_url() ?>"><?php echo config('blog.title') ?></a></h1>

		<p class="description"><?php echo config('blog.description')?></p>

		<ul>
			<li><a href="<?php echo site_url() ?>">Home</a></li>
			<li><a href="http://twitter.com/_markholland/" target="_blank">Twitter</a></li>
			<li><a href="/projects">Projects</a></li>
			<li><a href="/likethese">Like These</a></li>
			<li><a href="/about">About Me</a></li>
			
		</ul>

		<p class="author"><?php echo config('blog.authorbio') ?></p>

	</aside>

	<section id="content">


	<div class="center message">
	<h4>Like these</h4>
	
		<div class="likethese">
			<hr>
			<a href="http://www.bandness.com/"><img src="/images/icons/bandness.jpg"></a>
			<p><a href="http://www.bandness.com/" target="_blank">Discover</a> music that matches your tastes.</p>
			<hr>
			<a href="http://www.linernotekids.com/"><img src="/images/icons/lnk.png"></a>
			<p><a href="http://www.linernotekids.com/" target="_blank">Apparel</a> inspired by Music.</p>
			<hr>
			<a href="http://www.front.me/"><img src="/images/icons/frontme.png"></a>
			<p><a href="http://www.front.me/" target="_blank">Front.me</a> is an innovative new way to consume information, version 2.0 launching soon.</p>
			<hr>
			<a href="http://www.theskyfall.com/"><img src="/images/icons/skyfall.png"></a>
			<p><a href="http://www.theskyfall.com/" target="_blank">The Skyfall</a> is your online source for videogame related news.</p>
			<hr>
			<a href="http://www.pandorafms.com/"><img src="/images/icons/pandora.png"></a>
			<p><a href="http://www.pandorafms.com/" target="_blank">Pandora FMS®</a> is a software-monitoring tool specially designed for large environments.</p>
			<hr>
		</div>
	</div>
		
	
	
	
</section>

 

</body>

</html>
