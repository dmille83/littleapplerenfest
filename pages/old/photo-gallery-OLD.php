<!--
HOMEBREW GALLERY
-->

<h3>Little Apple Renaissance Festival</h3>
<div class="photo-container">
	
	<img title="welcome to the community fair" data-src="./photos/2019_Gloves.jpg">
	<img title="photos from prior years" data-src="./photos/2019_Collage1.jpg">
	<img title="photos from prior years" data-src="./photos/2019_Collage2.jpg">
	
	<img title="a bridge somewhere" data-src="./photos/1.jpg">
	<img title="a ceiling somewhere" data-src="./photos/2.jpg">
	<img title="a murder of crows... I mean a plague of doctors... plague doctors" data-src="./photos/3.jpg">
	<img title="a painting" data-src="./photos/4.jpg">
	
</div>


<!--
FACEBOOK POST
PROS: easy
CONS: width must be set as a fixed value in pixels, no gallery view, can't view photos directly must first open Facebook post in new tab
-->

<div style="text-align: center">
	<iframe class="photo-container" style="width:560px; height:725px;" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLittleAppleRenFest%2Fposts%2F2367088100192876&width=560" allowTransparency="true" allow="encrypted-media"></iframe>
</div>

<!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-post" data-href="https://www.facebook.com/LittleAppleRenFest/posts/2367088100192876" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/LittleAppleRenFest/posts/2367088100192876" class="fb-xfbml-parse-ignore"><p>Come join us at the Community Fair today at Manhattan Town Center from 10am to 3pm today!</p>Posted by <a href="https://www.facebook.com/LittleAppleRenFest/">Little Apple Renaissance Festival</a> on&nbsp;<a href="https://www.facebook.com/LittleAppleRenFest/posts/2367088100192876">Saturday, February 2, 2019</a></blockquote></div>
-->

<!--
GOOGLE ALBUM
SCRIPT SOURCE: https://www.publicalbum.org/blog/embedding-google-photos-albums
PROS: looks great, malleable css
CONS: the embed tool generates a static photo selection and reference urls meaning it doesn't dynamically update alongside the album, you have to rebuild and redeploy this section of the page whenever someone adds or removes photos from the album
-->

<script src="https://cdn.jsdelivr.net/npm/publicalbum@latest/dist/pa-embed-player.min.js" async></script>
<div class="pa-embed-player" style="width:100%; height:480px; display:none;"
  data-link="https://photos.app.goo.gl/f786q7dW1BdrsjxXA"
  data-title="Little Apple Ren Fest"
  data-description="3 new photos · Album by Little Apple Ren Fest">
  <img data-src="https://lh3.googleusercontent.com/ZXMVlDyoEOhsJvkkrRGc9lqxl23df0W4OcBNLbl7wA-Ck_L5UWJG4yFty4Po7wvlcs-xMUU_B4KOJZ13mh669-MZDt_99iI0IApq0N7g7B6yae3j2V5XdWw2bDatHjjIEph-TRcS=w1920-h1080" src="" alt="" />
  <img data-src="https://lh3.googleusercontent.com/EmJi0Dk8P7o1ZgUNvc_g5DGNaYtL8L2II0jAxxtnKat-5fihrR5Kl250DUhnWu2i0LDq2XUpqqMLm73QCAD-329nT4ROAwlFWLseETUC3VY3-RReGv4yJvSg9qw_xwws49-JQiQs=w1920-h1080" src="" alt="" />
  <img data-src="https://lh3.googleusercontent.com/i1J_i_88cfXjihQEkUWObiiDxOh7PYxvHVt5PNaccK2GLRNiCKzuwUNXBPjQm7lcZBmQLjWIRb-F5JQDXittTeFUifWN_hnY2I9PWgzMFN51zyi7wY7Fmx9gd6MPto8hVCOz3mkC=w1920-h1080" src="" alt="" />
</div>
<p>
	<a href="https://photos.app.goo.gl/f786q7dW1BdrsjxXA" target=_blank>Google Photo Album</a>
	&nbsp;&nbsp;
	<a href="https://www.publicalbum.org/blog/embedding-google-photos-albums" target=_blank>Embedding Google Photo Albums</a>
</p>



<!--
GOOGLE DRIVE
SOURCE: https://www.youtube.com/watch?v=MAPIlu3qOGw
PROS: easy to build, dynamically updates with the folder
CONS: limited choices for display, alphabetical with no custom sorting, opens photos in new tab when clicked
-->

<iframe class="photo-container" src="https://drive.google.com/embeddedfolderview?id=17n-iswLPlotLuCsP2t70a7KDK2Indi2m#grid" allowTransparency="true" allow="encrypted-media"></iframe>
<p>
	<a href="https://drive.google.com/open?id=17n-iswLPlotLuCsP2t70a7KDK2Indi2m" target=_blank>Google Drive Folder</a>
	&nbsp;&nbsp;
	<a href="https://www.youtube.com/watch?v=MAPIlu3qOGw" target=_blank>Embedding a Google Drive Folder</a>
</p>


<!--
GOOGLE DRIVE + PHP
SOURCE: http://htmlparsing.com/php.html
SOURCE: https://stackoverflow.com/questions/20681974/how-to-embed-a-google-drive-folder-in-a-website
SOURCE: https://www.publicalbum.org/blog/embedding-google-photos-albums
PROS: easy to build, dynamically updates with the folder
CONS: alphabetical with no custom sorting (yet)
-->

<!--
<script src="https://cdn.jsdelivr.net/npm/publicalbum@latest/dist/pa-embed-player.min.js" async></script>
<div class="pa-embed-player" style="width:100%; max-width:800px; height:480px; display:none;"
	data-link=""
	data-title="Little Apple Ren Fest"
	data-description="Album by Little Apple Ren Fest">
-->

<h3>Little Apple Renaissance Festival</h3>
<div class="photo-container">
	<?php
	// FIND THE IMAGE URLS
	$url = 'https://drive.google.com/embeddedfolderview?id=17n-iswLPlotLuCsP2t70a7KDK2Indi2m#grid';
	$page = file_get_contents($url);
	$dom = new DOMDocument;
	libxml_use_internal_errors(true);
	$dom->loadHTML($page);
	foreach($dom->getElementsByTagName('img') as $link) {
		$img_src = $link->getAttribute('src');
		$img_title = $link->getAttribute('title');
		if (strpos($img_src, 'type/image/jpeg') == false) {
			echo '<img data-src="' . str_replace('=s190', '=s1080', $img_src) . '" title="' . $img_title . '" src="" alt="">';
		}
	}
	?>
</div>
<p><a href="<?php echo $url; ?>" target=_blank>Google Drive Folder</a></p>