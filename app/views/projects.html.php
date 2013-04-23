<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
	<meta name="description" content="<?php echo config('blog.description')?>" />

	<link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />

	<link href="<?php echo site_url() ?>assets/css/style_projects.css" rel="stylesheet" />
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
	<h4>Projects</h4>
	<hr>
	</div>
		<div class="projects">
		<p>Here you can find some things that I've worked on recently.</p>
		<ul>
<li>QTJambi is a no longer under active development implementation of QT in java, we have to use it at university so here are the last 2 things I made with it. The worst thing about QTJambi is you have to packet all the libraries with the jar and also it will only work on Windows.</li>
</ul>


<p><strong>Currency Converter</strong></p>

<p><img src="/images/projects/currencyconverter.png" alt="image" /></p>

<p><a href="http://dl.dropboxusercontent.com/u/17033926/partiallogic/CurrencyConverter.jar" target="_blank">CurrencyConverter.jar</a></p>

<p><a href="http://github.com/markholland/QTJambi-Currency-Converter" target="_blank">Currency Converter source code</a></p>
<hr>
<p><strong>Text Editor</strong></p>

<p><img src="/images/projects/texteditor.png" alt="image" /></p>

<p><a href="http://dl.dropboxusercontent.com/u/17033926/partiallogic/TextEditor.jar" target="_blank">TextEditor.jar</a></p>

<p><a href="http://github.com/markholland/QTJambi-Text-Editor" target="_blank">Text Editor source code</a></p>
<hr>
<p><strong>Android Port Scanner</strong></p>

<ul>
<li>Just a quick port of a cli java port scanner, has many bugs so don't bother telling me about them, was mainly just to give some dazzle to the class presentation.</li>
</ul>


<p><img src="/images/projects/portscanner.png" alt="image" /></p>

<p><a href="http://dl.dropboxusercontent.com/u/17033926/partiallogic/PortScannerAndroid-0.06.apk" target="_blank">PortScanner.apk</a></p>

<p><a href="http://github.com/markholland/PortScanner" target="_blank">Port Scanner source code</a></p>
</body>
</html>
	
	
	</section>

 

</body>

</html>
