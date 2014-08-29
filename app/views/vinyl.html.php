<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Vinyl | <?php echo config('blog.title') ?></title>
 <style type="text/css">
	
	.gallerycontainer{
	position: relative;
	/*Add a height attribute and set to largest image's height to prevent overlaying*/
	}

	.thumbnail img{
	border: 1px solid white;
	margin: 0 5px 5px 0;
	}

	.thumbnail:hover{
	background-color: transparent;
	}

	.thumbnail:hover img{
	//border: 1px solid black;
	}

	/*
	.thumbnail span{ /*CSS for enlarged image*/
	position: absolute;
	left: -1000px;
	visibility: hidden;
	color: black;
	text-decoration: none;
	}

	.thumbnail span img{ /*CSS for enlarged image*/
	border-width: 0;
	padding: 2px;
	}

	.thumbnail:hover span{ /*CSS for enlarged image*/
	visibility: visible;
	top: 0;
	left: 120px; /*position where enlarged image should offset horizontally */
	z-index: 50;
	*/
</style>

 <!-- Include the Open Sans font -->
 <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />
</head>
<body>
 
  
 <div class="gallerycontainer">
 	<a class="thumbnail" href="/images/gallery/TBS-Where-large.png"><img src="/images/gallery/TBS-Where-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/Butch-Walker-spade-large.png"><img src="/images/gallery/Butch-Walker-spade-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/Pink-Floyd-Relics-large.png"><img src="/images/gallery/Pink-Floyd-Relics-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/Pink-Floyd-Lapse-large.png"><img src="/images/gallery/Pink-Floyd-Lapse-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/DP-Japan-large.png"><img src="/images/gallery/DP-Japan-small.png" border="0" />
 	<a class="thumbnail" href="/images/gallery/Huey-POL-large.png"><img src="/images/gallery/Huey-POL-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/ELO-Greatest-large.png"><img src="/images/gallery/ELO-Greatest-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/ELO-Discovery-large.png"><img src="/images/gallery/ELO-Discovery-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/Bolan-Boogie-large.png"><img src="/images/gallery/Bolan-Boogie-small.png" border="0" />
 	<a class="thumbnail" href="/images/gallery/Coldplay-Parachutes-large.png"><img src="/images/gallery/Coldplay-Parachutes-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/Pink-Floyd-Moon-large.png"><img src="/images/gallery/Pink-Floyd-Moon-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/FOB-OCK-large.png"><img src="/images/gallery/FOB-OCK-small.png" border="0" />
	<a class="thumbnail" href="/images/gallery/FOB-MMRS-large.png"><img src="/images/gallery/FOB-MMRS-small.png" border="0" />
 	<a class="thumbnail" href="/images/gallery/Muse-uprising-large.png"><img src="/images/gallery/Muse-uprising-small.png" border="0" />
 </div> 

</body>
</html>


