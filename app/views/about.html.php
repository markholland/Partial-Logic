<!DOCTYPE html>
<html>
<head>
 <title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
 <meta name="description" content="<?php echo config('blog.description')?>" />
 <link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />
 <link href="<?php echo site_url() ?>assets/css/style_about.css" rel="stylesheet" />
 <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />
 <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>
<body>
 <aside>
  <h1><a href="<?php echo site_url() ?>"><?php echo config('blog.title') ?></a></h1>
 <a href="http://twitter.com/partialmark" class="circle">
	<img height="64" width="64" src="http://partiallogic.com/images/avatar.png" alt="Mark Holland">
</a>
  <p class="description"><?php echo config('blog.description')?></p>
  <ul>
  <li><a href="<?php echo site_url() ?>">Home</a></li>
  <li><a href="http://twitter.com/partialmark/" target="_blank">Twitter</a></li>
  <li><a href="/projects">Projects</a></li>
  <li><a href="/likethese">Like These</a></li>
  <li><a href="/about">About Me</a></li>
  </ul>
  <p class="author"><?php echo config('blog.authorbio') ?></p>
  </aside>
 <section id="content">
 <div class="center message">
 <h4>About Mark</h4>
 <hr>
 </div>
  <div class="about">
  <p>This is where I pretend to be serious by applying knowledge
  from my years messing around with computers.</p>
  <p>I'm very pleased to have been a Google Summer of Code student way back in 2012 & 2013.</p>
  <p>Forever sat in front of a screen gives me the time to listen to 
  <a href="http://www.last.fm/user/mark29skate29" target="_blank">a lot of music</a>, I sometimes wish I could create
  my own but I lack that brand of creativity.</p>
  <p>If you want to contact me just drop a line at <a href="mailto:mark@partiallogic.com">mark@partiallogic.com</a></p>
  <p><a href="http://www.eff.org" target="_blank"><img style="border:0;" src="https://www.eff.org/sites/default/files/2014-members-circle.png" alt="EFF Members badge"></a></p>
  <hr>
  <p><strong>About Partial Logic</strong></p>
  <p>Partial Logic runs on PHP and CSS3, posts are written in markdown and there is no database, the entire site comes in at under 5MB. </p>
  <p>It also has an <a href="<?php echo site_url() ?>/rss">RSS feed</a> and a JSON read-only API. The design is fully responsive.</p>
  <p>It began from <a href="http://tutorialzine.com/2013/03/simple-php-blogging-system/" target="_blank">this</a> excellent tutorial but has been heavily adapted to my tastes.</p> 
  <p>It currently has a Google page speed score of 94/100.</p>
  </div>
 </section>
</body>
</html>