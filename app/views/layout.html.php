<!DOCTYPE html>
<html>
<head>
 <title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
 <meta name="description" content="<?php echo config('blog.description')?>" />
 <link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />
 <link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" />
 <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>
<body>
 <aside>
 <h1><a href="<?php echo site_url() ?>"><?php echo config('blog.title') ?></a></h1>
 <a href="http://twitter.com/_markholland" class="circle">
	<img height="64" width="64" src="http://twitter.com/api/users/profile_image?screen_name=_markholland" alt="Mark Holland">
</a>
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
 <?php echo content()?>
 </section>
</body>
</html>