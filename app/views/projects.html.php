<!DOCTYPE html>
<html>
<head>
<title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
 <meta name="description" content="<?php echo config('blog.description')?>" />
 <link rel="alternate" type=" qapplication/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />
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
 <li><a href="https://itunes.apple.com/us/app/sub-count/id977966794">sub count</a> is an <b>iOS</b> app for viewing your <b>YouTube</b> subscriber count. You can view the count in the app, with the optional widget in Notification Center or even on your wrist with the Watch app. Read more about my first <b>iOS</b> publishing experience <a href="http://www.partiallogic.com/2015/04/sub-count">here</a>.
 </li>
 <center><a href="https://itunes.apple.com/us/app/sub-count/id977966794?mt=8&uo=6&at=&ct=" target="itunes_store" style="display:inline-block;overflow:hidden;background:url(../images/badge_appstore-lrg.png) no-repeat;width:165px;height:40px;@media only screen{background-image:url(../images/badge_appstore-lrg.svg);}" alt="Download on the Apple App Store"r></a><p><img src="/images/projects/subcount.png" alt="image" /></p></center>
 <li><a href="https://play.google.com/store/apps/details?id=com.partiallogic.ocw_android_2014">OCW-Android-2014</a> is a complete rewrite from scratch of the <b>Android</b> App I worked on for <b>Google Summer of Code 2013</b>. the goal was to provide a stable base that follows the most recent <b>Android guidelines</b> in order to provide a project on which to build upon as requests come from the <b>OpenConferenceWare<b/> community.
 </li>
 <center>
 <a href="https://play.google.com/store/apps/details?id=com.partiallogic.ocw_android_2014">
  <img alt="Get it on Google Play"
       src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" />
</a>
<p><img src="/images/projects/ocw-android-2014.png" alt="image" /></p>
 <a href="https://github.com/markholland/ocw-android-2014">
  <img alt="View on Github"
       src="http://www.partiallogic.com/images/GitHub_Logo.png" />
 </a>
 </center>
 </ul>
 <ul>
 <li><a href="https://play.google.com/store/apps/details?id=com.fourmaw.wisemonkey.app&hl=en">Wise Monkey</a> is a fun <b>Android</b> app I worked on with a group of friends in order to gain experience in rapidly implementing an idea and publishing it.
 </li>
 <a href="https://play.google.com/store/apps/details?id=com.fourmaw.wisemonkey.app">
  <img alt="Get it on Google Play"
       src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" />
 </a>
 <p><img src="/images/projects/wisemonkey.png" alt="image" /></p>
 </ul>
 <ul>
 <li><b>OCW-Android</b> is an open source app to allow administrators of conferences to provide attendees with a way to view on their mobile devices the schedule, information on speakers and to also receive notifications of changes in location and times of talks. I worked on this is as part of <a href="http://www.google-melange.com/gsoc/homepage/google/gsoc2013">Google Summer of Code 2013</a> with the <a href="http://osuosl.org">Oregon State University Open Source Lab.</a></li>
 <p><img src="/images/projects/ocw-android.png" alt="image" /></p>
 <center>
 <a href="https://github.com/markholland/ocw-android">
  <img alt="View on Github"
       src="http://www.partiallogic.com/images/GitHub_Logo.png" />
</a>
 </center> 
 </li>
 </ul>
 <hr>
 <br>
 <ul>
 <li>Pandroid is a <b>Android</b> agent for <a href="www.pandorafms.com">PandoraFMS</a> that allows monitoring many aspects of a <b>Android</b> device. I worked on it for <a href="http://www.google-melange.com/gsoc/homepage/google/gsoc2012">Google Summer of Code 2012</a>.
 <a href="https://play.google.com/store/apps/details?id=pandroid.agent">
  <img alt="Get it on Google Play"
       src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" />
 </a>
 <p><img src="/images/projects/pandroid-icon.png" alt="image" /></p>
 <center>
 <a href="https://github.com/pandorafms/pandorafms/tree/develop/pandora_agents/android/mobile">
  <img alt="View on Github"
       src="http://www.partiallogic.com/images/GitHub_Logo.png" />
</a>
 </center> 
 </ul>		
 </section>
</body>
</html>
