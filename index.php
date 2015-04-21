<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>HomePage</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<link href="style.css" title="style" rel="stylesheet" type="text/css" />
<link id="clink" href="css/style-blue.css" title="style" rel="stylesheet" type="text/css" media="screen"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<script src="scripts/jquery.masonry.min.js" type="text/javascript"></script>
<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="scripts/MetroJs.lt.js" type="text/javascript"></script>
<script src="scripts/jquery.fancybox-1.3.4.js" type="text/javascript" charset="utf-8"></script>
<script src="scripts/jquery.flexslider-min.js" type="text/javascript" charset="utf-8"></script>
<script src="scripts/hoverintent.js" type="text/javascript" charset="utf-8"></script>
<script src="scripts/jquery.jplayer.min.js" type="text/javascript" charset="utf-8"></script>
<script src="scripts/organictabs.jquery.js" type="text/javascript" charset="utf-8"></script>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
  <style type="text/css">
  @import url("style-ie8.css");
  </style>
  <script src="scripts/css3-mediaqueries.js" type="text/javascript" charset="utf-8"></script>
  <script>
    document.createElement('header');
    document.createElement('nav');
    document.createElement('section');
    document.createElement('article');
    document.createElement('aside');
    document.createElement('footer');
    document.createElement('hgroup');
    </script>
<![endif]-->
<script src="scripts/javascript.js" type="text/javascript"></script>
<script src="scripts/mediaplayer.js" type="text/javascript"></script>

<script  type="text/javascript"> 
  var geocoder;
 
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 
//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    codeLatLng(lat, lng)
}
 
function errorFunction(){
    alert("Geocoder failed");
}
 
  function initialize() {
    geocoder = new google.maps.Geocoder();
 
 
 
  }
 
  function codeLatLng(lat, lng) {
 
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
      console.log(results)
        if (results[1]) {
         //formatted address
         var displayLoc = (results[2].formatted_address);
         var userLocation = document.createTextNode(displayLoc);
         d = document.getElementById("d");
         d.appendChild(userLocation);
        // alert(displayLoc);
        //find country name
             for (var i=0; i<results[0].address_components.length; i++) {
            for (var b=0;b<results[0].address_components[i].types.length;b++) {
 
            //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                if (results[0].address_components[i].types[b] == "administrative_area_level_3") {
                    //this is the object you are looking for
                    city= results[1].address_components[i];
                    break;
                }
            }
        }
        
        document.createTextNode(displayLoc);


        //city data
        //alert(city.short_name + " " + city.long_name)

 
        } else {
          document.write("No results found");
        }
      } else {
        alert("Geocoder failed due to: " + status);
      }
    });
  }
</script> 

<style>

body {
    background:#f8f8f8;
}

#search {

}

#search input[type="text"] {
    margin-top: 1%;
    text-align: center;
    background: no-repeat 10px 6px #fcfcfc;
    border: 1px solid #d1d1d1;
    font: 24px Arial,Helvetica,Sans-serif;
    color: #bebebe;
    width: 90%;
    padding: 6px 15px 6px 35px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
    }

#search input[type="text"]:focus {
    width: 90%;
    }

#bodypat {
  /*background: url(<?php echo $bing; ?>);*/
  background: -webkit-linear-gradient(90deg, #ddd6f3 10%, #faaca8 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #ddd6f3 10%, #faaca8 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #ddd6f3 10%, #faaca8 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #ddd6f3 10%, #faaca8 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #ddd6f3 10%, #faaca8 90%); /* W3C */
  width: 100%;
  height: 100%;
}
</style>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 


</head>

<body onload="initialize()">
<div id="bodypat">
<section id="container">
<!-- BEGIN HEADER -->

<form action="" class="form-login"  method="post" /> 
<input name="email" type="email" id="email" required="" placeholder="Name" />
<input name="password" type="password" id="password" required="" placeholder="Password" />
<button onclick="store()" type="button">Sign In</button>
</form>



<header class="clearfix">
<!-- BEGIN LOGO -->



<a id="headerlink"  href="#" title="homepage"><img  id="logo" src="images/logo.png" alt="homepage"/><br>


<p><span id="results"></span></p>

<script  type="text/javascript">
  function store(){
     var inputEmail= document.getElementById("email");
     localStorage.setItem("email", inputEmail.value);
     document.getElementById('results').innerHTML = "Hello " + inputEmail.value+"!";

     
     var inputPassword= document.getElementById("password");
     localStorage.setItem("password", inputPasword.value);

     
    }
</script>

<!-- END LOGO -->
<form method="get" action="https://www.google.com/search" id="search">
<input name="q" type="text" size="40" placeholder="Google" />
</form>
<!-- BEGIN NAVIGATION -->

</header>
<!-- END HEADER -->

<!-- BEGIN MAIN PAGE CONTENT -->
<section class="mainpage">
	
    <!-- END TOGGLE CONTENT -->
</section><!-- end #mainpage -->

<div id="loader"></div><!-- loader image for AJAX -->

<section id="mainpage-mos">
<!-- BEGIN TILE CONTENT -->
<section id="content-mos" class="centered clearfix">

<!-- Tile 1 -->
    <div class="tile medium live" data-stops="0" data-speed="3000" data-delay="0" data-direction="horizontal" data-stack="true">
        <div class="live-back">
        	<a href="http://www.accuweather.com/en/us/new-york-ny/10007/weather-forecast/349727" class="aw-widget-legal">
            </a>
        <div id="awcc1428601662686" class="aw-widget-current"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awcc1428601662686"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
        </div>
        <span class="tile-cat blue">Weather</span>
    </div>

	<!-- Lightbox Article Preview -->
    <div class="tile-pre">
    <article id="article-1" class="lb-article" data-lbcolor="#e61400">
    <div class="article-img">
        <div class="flexslider postslide">
        <ul class="slides">
    	<li>
        <img class="tile-pre-img" src="images/placeholder/blog_pre_blank.png" alt="Article 1" />
        </li>
        <li>
        <img class="tile-pre-img" src="images/placeholder/blog_pre_blank.png" alt="Article 1" />
        </li>
        </ul>
        </div>
    </div>
    <div class="article-date redtxt"><span class="date"></span><span class="month">Weather</span></div>
    <h1 class="lb-title"><a href="singleblogpost-1.html">This is the title of Article 1</a></h1>
    <span class="postcat redtxt">Weather</span>
    <div class="lb-excerpt">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis sollicitudin aliquet. Nullam ut sapien eros, aliquet gravida turpis. Cras nec risus magna. Morbi laoreet molestie odio sed ultrices. Maecenas eget elit orci. Etiam rhoncus urna vitae neque accumsan et vehicula dolor varius. Praesent tellus velit.</p>
        <p><a class="exp-button" href="singleblogpost-1.html">Read More &#8594;</a></p>
    </div>
    </article>
    </div>

    
<!-- Tile 2 NEWS by Sabrina-->
<a href="#article-2" class="lightbox" rel="section">
    <div class="tile large live" data-stops="0,100%" data-speed="750" data-delay="1500">
    	<div class="live-front">
        	<img class="live-img" src="images/news.png" alt="News" />
        </div>
        <div class="live-back">
        	<script type="text/javascript" src="http://output55.rssinclude.com/output?type=js&amp;id=983884&amp;hash=2e428d75683f7a0687df335a581bf105"></script>


        </div>
        <span class="tile-date limetxt"><span class="date"></span><span class="month"></span></span>
        <span class="tile-cat lime">NEWS</span>
    </div>
</a>
	<!-- Lightbox Article Preview -->
    <div class="tile-pre">
    <article id="article-2" class="lb-article" data-lbcolor="#8cbe29">

    <h1 class="lb-title"><a href="singleblogpost-1.html">TOP NEWS</a></h1>
    
   
      <script type="text/javascript" src="http://output98.rssinclude.com/output?type=js&amp;id=983909&amp;hash=a9df4b53948e12b499a5257a688d6749"></script>


    
    </article>
    </div>

<!-- Tile 4 - ->
<a href="#portfolio-2" class="lightbox" rel="section">
    <div class="tile small">
    <img class="live-img" src="images/placeholder/small_blank.png" alt="Project Two"/>
    </div>
</a>
    <!-- Lightbox Article Preview - ->
    <div class="tile-pre">
    <article id="portfolio-2" class="lb-portfolio" data-lbcolor="#00aaad">
    <div class="portfolio-img">
    <img class="tile-pre-img" src="images/placeholder/portfolio_pre_blank.png" alt="Project Two" />
    </div>
    <div class="lb-port-cont">
        <h1 class="lb-project"><a href="singleportfolio.html">Project Two</a></h1>
        <span class="projectcat tealtxt">Graphic Design</span>
        <div class="lb-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis sollicitudin aliquet. Nullam ut sapien eros, aliquet gravida turpis. Cras nec risus magna. Morbi laoreet molestie odio sed ultrices. Maecenas eget elit orci. Etiam rhoncus urna vitae neque accumsan et vehicula dolor varius. Praesent tellus velit.</p>
            <p><a class="exp-button" href="singleportfolio.html">View More &#8594;</a></p>
        </div>
    </div>
    </article>
    </div>
-->

<!-- Tile 6 - ->
<a href="#quotation-1" class="lightbox" rel="section">
    <div class="tile small live" data-mode="flip" data-stops="100%" data-speed="750" data-delay="4000">
    	<div class="live-front">
        	<img class="live-img" src="images/articles/quotation_1.png" alt="Quotation" />
        </div>
        <div class="live-back">
        	<img class="live-img" src="images/articles/quotation_2.png" alt="Quotation" />
        </div>
    </div>
</a>
    <!-- Lightbox Article Preview - ->
    <div class="tile-pre">
    <article id="quotation-1" class="lb-article">
    <div class="lb-quote">
    The person who reads too much and uses his brain too little will fall into lazy habits of thinking.
    <div class="quote-author">&mdash; Albert Einstein</div>
    </div>
    </article>
    </div>
-->


<!-- Tile 9 - ->
    <div class="tile small live exclude" data-stops="0,100%" data-speed="1000" data-delay="1500">
    	<div class="live-front red">
           
       <center> <span class="tile-text"><div id="footer-social">
<!--<a href="#"><span class="behance-mini"></span></a>- ->
 <h6>QUICK LINKS</h6>
<a href="http://twitter.com"><span class="twitter-mini"></span></a>
<a href="http://facebook.com"><span class="facebook-mini"></span></a>
<!--<a href="#"><span class="linkedin-mini"></span></a>-v->
<a href="http://pinterest.com"><span class="pinterest-mini"></span></a>
<!--<a href="#"><span class="dribbble-mini"></span></a>- ->
</div><!-- end #footer-social - ->
</span></center>
        </div>
        <div class="live-back green">
           
       <cemter> <span class="tile-text"><div id="footer-social">
<!--<a href="#"><span class="behance-mini"></span></a>- ->
  <h6>SOCIAL MEDIA</h6>
<a href="http://twitter.com"><span class="twitter-mini"></span></a>
<a href="http://facebook.com"><span class="facebook-mini"></span></a>
<!--<a href="#"><span class="linkedin-mini"></span></a>- ->
<a href="http://pinterest.com"><span class="pinterest-mini"></span></a>

<!--<a href="#"><span class="dribbble-mini"></span></a>- ->
</div><!-- end #footer-social - ->
</span></center>
        </div>
    </div>
-->

<!-- Tile 10 - ->
<a href="#video-1" class="lightbox" rel="section">
    <div class="tile small live" data-mode="flip" data-stops="100%" data-speed="750" data-delay="3000">
    	<div class="live-front">
        	<img class="live-img" src="images/articles/video1.jpg" alt="Video 1" />
        </div>
        <div class="live-back blue">
        	<img class="live-img" src="images/video.png" alt="Video Icon" />
        </div>
    </div>
</a>
    <!-- Lightbox Article Preview - ->
    <div class="tile-pre"> 
    <article id="video-1" class="lb-article" data-lbcolor="#19a2de">  
    <div class="lb-video"> 
<iframe src="http://player.vimeo.com/video/3114617?loop=1" width="640" height="272"></iframe> <p><a href="http://vimeo.com/3114617">SCINTILLATION</a> from <a href="http://vimeo.com/chassaingxavier">Xavier Chassaing</a> on <a href="http://vimeo.com">Vimeo</a>.</p> <p>This is an experimental film made up of over 35,000 photographs. It combines an innovative mix of stop motion and live projection mapping techniques. <br /> <br /> Directed by<br /> chassaing.xavier@gmail.com<br /> <br /> Music by <br /> http://www.myspace.com/fedaden</p>
    </div>
    </article>
    </div>
-->    

    
<!-- Tile 12 -->
    <div class="tile large live exclude" data-stack="true" data-stops="0,18%" data-speed="1000" data-delay="3000">
    	<div class="live-front themecolor">
			  <a class="twitter-timeline" height="310" href="https://twitter.com/hashtag/orlando" data-widget-id="583978540246441984">#orlando Tweets</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
        </div>
        <div class="live-back themecolor">
        	<span class="tile-text tweeter">Twitter</span>
        </div>
    </div>
    
<!-- Tile 13 -->
<a href="#article-3" class="lightbox" rel="section">
    <div class="tile medium">
<iframe frameborder="0" border="0" width="310" height="300" src="http://www.beatthetraffic.com/widgets/traveltimes.aspx?regionid=27&customerid=3637&partner=steel&items=1&ts=6&rc=true&div=false&link=www.beatthetraffic.com/Daytona-Beach-Traffic&code=1"></iframe>
        <span class="tile-date tealtxt"><span class="date"></span><span class="month"></span></span>
        <span class="tile-cat teal">Traffic</span>
    </div>
</a>
	<!-- Lightbox Article Preview -->
    <div class="tile-pre">
    <article id="article-3" class="lb-article" data-lbcolor="#00aaad">
    <div class="article-img">
    	<img class="tile-pre-img" src="images/placeholder/blog_pre_blank.png" alt="Article Three" />
    </div>
    <div class="article-date tealtxt"><span class="date">01</span><span class="month">July</span></div>
    <h1 class="lb-title"><a href="singleblogpost-1.html">This is the title of Article Three</a></h1>
    <span class="postcat tealtxt">Maps</span>
    <div class="lb-excerpt">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis sollicitudin aliquet. Nullam ut sapien eros, aliquet gravida turpis. Cras nec risus magna. Morbi laoreet molestie odio sed ultrices. Maecenas eget elit orci. Etiam rhoncus urna vitae neque accumsan et vehicula dolor varius. Praesent tellus velit.</p>
        <p><a class="exp-button" href="singleblogpost-1.html">Read More &#8594;</a></p>
    </div>
    </article>
    </div>
    

     
<!-- Tile 15 - ->
<a href="http://validator.w3.org/check?uri=referer">
    <div class="tile small live" data-stack="true" data-stops="0,100%" data-speed="750" data-delay="2500">
    	<div class="live-front mango">
        	<img class="live-img" src="images/articles/html5.png" alt="HTML5 Icon" />
        </div>
        <div class="live-back lime">
        	<img class="live-img" src="images/hyperlink.png" alt="Hyperlink Icon" />
        </div>
    </div>
</a>
-->

<!-- Tile 16 - ->
<a href="#portfolio-8" class="lightbox" rel="section">
    <div class="tile small">
    <img class="live-img" src="images/placeholder/small_blank.png" alt="Project Seven"/>
    </div>
</a>
	<!-- Lightbox Article Preview - ->
    <div class="tile-pre">
    <article id="portfolio-8" class="lb-portfolio" data-lbcolor="#00aaad">
    <div class="portfolio-img">
    <img class="tile-pre-img" src="images/placeholder/portfolio_pre_blank.png" alt="Project Eight" />
    </div>
    <div class="lb-port-cont">
        <h1 class="lb-project"><a href="singleportfolio.html">Project Eight</a></h1>
        <span class="projectcat tealtxt">Graphic Design</span>
        <div class="lb-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis sollicitudin aliquet. Nullam ut sapien eros, aliquet gravida turpis. Cras nec risus magna. Morbi laoreet molestie odio sed ultrices. Maecenas eget elit orci. Etiam rhoncus urna vitae neque accumsan et vehicula dolor varius. Praesent tellus velit.</p>
            <p><a class="exp-button" href="singleportfolio.html">View More &#8594;</a></p>
        </div>
    </div>
    </article>
    </div>
-->
    
<!-- END TILE CONTENT -->
</section><!-- end #content-mos -->

<!-- BEGIN AJAX PAGINATION -->
<div class="clearfix ajax-pagination">
<a href="index2.html" class="next"></a>
</div>
<!-- END AJAX PAGINATION -->

</section><!-- end #mainpage-mos -->

<section class="mainpage">
<!-- BEGIN TOGGLE CONTENT 
<div class="toggle-button"><span class="toggle-indicator">+</span></div> 

<div class="toggle-content close clearfix"> -->
<!-- Item 1 
    <div class="fixed-medium">
        <div class="highlights">
        <img class="themecolor" src="images/responsive.png" alt="Responsive Design" />
        </div>
        <div class="highlights-txt">
        <h2>Responsive Design</h2>
        <p>The template will automatically resize to fit the browser according to its width. So, this template works not just on your desktop monitor, but your tablet or mobile phone as well!</p>
        </div>
    </div>
<!-- Item 2 
    <div class="fixed-medium">
        <div class="highlights">
        <img class="themecolor" src="images/livetiles.png" alt="Live Tiles" />
        </div>
        <div class="highlights-txt">
        <h2>Live Tiles</h2>
        <p>As inspired by Metro UI, these 'Live' tiles can display more information without utilizing more screen space. Hence, it is not just the perfect solution for small-screened mobile devices, but also attractive.</p>
        </div>
    </div>
<!-- Item 3
    <div class="fixed-medium last">
        <div class="highlights">
        <img class="themecolor" src="images/customizability.png" alt="Customizability" />
        </div>
        <div class="highlights-txt">
        <h2>Customizability</h2>
        <p>Comes pre-loaded with 10 colours and easy-to-use colour tags, as well as multiple-sized tiles which automatically arrange themselves to fit the screen, you can create any layout you can imagine.</p>
        </div>
    </div>
    
</div><!-- end .toggle-content -->
<!-- END TOGGLE CONTENT -->
<!-- BEGIN TOGGLE CONTENT -->
    <div class="toggle-button"><span class="toggle-
    indicator">About</span></div>
    <div class="toggle-content close">
      <!--\  <div class="flexslider mainslide">
        <ul class="slides"
            <li>
            <img src="images/slideimg1.png" alt="Responsive" />
            <p class="flex-title">Responsive</p>
            </li>
            <li>
            <img src="images/slideimg2.png" alt="Tile Design" />
            <p class="flex-title">Tile Design</p>
            </li>
            <li>
            <img src="images/slideimg3.png" alt="Customizability" />
            <p class="flex-title">Customizability</p>
            </li>
        </ul>
        </div> end .flexslider -->
    
    <div class="quote-bg1"><div class="quote-w">Hello and welcome to Homepage! Set this as your browser's homepage for instant information about your city! It's all in one place and has never been more convenient! To further improve it, feedbacks are greatly welcomed!</div></div>
    
    <!-- end .toggle-content -->

</section><!-- end .main-page -->
<!-- END MAIN PAGE CONTENT -->

<!-- BEGIN FOOTER -->
<footer class="clearfix">


<small>Copyright &#169; 2015 - Mild Commitment</small>
</footer>
<!-- END FOOTER -->

</section><!-- end #container -->
</div>
</body>
</html>
