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
 <a href="http://twitter.com/_markholland" class="circle">
	<img height="64" width="64" src="http://partiallogic.com/images/avatar.png" alt="Mark Holland">
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
 <div class="center message">
 <h4>Projects</h4>
 <hr>
 </div>
 <div class="projects">
 <p>Here you can find some things that I've worked on recently.</p>
 <ul>
 <li><a href="https://play.google.com/store/apps/details?id=com.partiallogic.ocw_android_2014">OCW-Android-2014</a> is a complete rewrite from scratch of the Android App I worked on for Google Summer of Code 2013. the goal was to provide a stable base that follows the most recent Android guidelines in order to provide a project on which to build upon as requests come from the OpenConferenceWare community.
 </li>
 <p><img src="/images/projects/ocw-android-2014.png" alt="image" /></p>
 <center><a href="https://github.com/markholland/ocw-android-2014">OCW-Android-2014 source code on Github</a></center> </li>
 </ul>
 <ul>
 <li><a href="https://play.google.com/store/apps/details?id=com.fourmaw.wisemonkey.app&hl=en">Wise Monkey</a> is a fun Android app I worked on with a group of friends in order to gain experience in rapidly implementing an idea and publishing it.
 </li>
 <p><img src="/images/projects/wisemonkey.png" alt="image" /></p>
 </ul>
 <ul>
 <li>OCW-Android is an open source app to allow administrators of conferences to provide attendees with a way to view on their mobile devices the schedule, information on speakers and to also receive notifications of changes in location and times of talks. I worked on this is as part of <a href="http://www.google-melange.com/gsoc/homepage/google/gsoc2013">Google Summer of Code 2013</a> with the <a href="http://osuosl.org">Oregon State University Open Source Lab.</a></li>
 <p><img src="/images/projects/ocw-android.png" alt="image" /></p>
 <center><a href="https://github.com/markholland/ocw-android">OCW-Android source code on Github</a></center> </li>
 </ul>
 <hr>
 <br>
 <ul>
 <li>Pandroid is a Android agent for <a href="www.pandorafms.com">PandoraFMS</a> that allows monitoring many aspects of a Android device. I worked on it for <a href="http://www.google-melange.com/gsoc/homepage/google/gsoc2012">Google Summer of Code 2012</a> and can be found <a href="https://play.google.com/store/apps/details?id=pandroid.agent&hl=en">here</a> on the Play Store.<br>
 <p><img src="/images/projects/pandroid-icon.png" alt="image" /></p>
 <center><a href="https://sourceforge.net/p/pandora/code/8502/tree/trunk/pandora_agents/android/">Pandroid source code on Sourceforge</a></center> </li>
 </ul>		
 <hr>
 <br>		
 <ul>
 <li>QTJambi is a no longer under active development implementation of QT in java, we have to use it at university so here are the last 3 things I made with it. The worst thing about QTJambi is you have to packet all the libraries with the jar and also it will only work on Windows.</li>
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
 <p><strong>Game Optimiser</strong></p>
 <p><img src="/images/projects/gameoptimiser.png" alt="image" /></p>
 <p><a href="https://dl.dropboxusercontent.com/u/17033926/partiallogic/GameOptimiser.jar" target="_blank">GameOptimiser.jar</a></p>
 <p><a href="https://github.com/markholland/QTJambi-Game-Optimizer" target="_blank">Game Optimiser source code</a></p>
 <hr>
 <p><strong>Android Port Scanner</strong></p>
 <ul>
 <li>Just a quick port of a cli java port scanner, has many bugs so don't bother telling me about them, was mainly just to give some dazzle to the class presentation.</li>
 </ul>
 <p><img src="/images/projects/portscanner.png" alt="image" /></p>
 <p><a href="http://dl.dropboxusercontent.com/u/17033926/partiallogic/PortScannerAndroid-0.06.apk" target="_blank">PortScanner.apk</a></p>
 <p><a href="http://github.com/markholland/PortScanner" target="_blank">Port Scanner source code</a></p>
 </section>
</body>
</html>