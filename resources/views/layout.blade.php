<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from papertiger.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2015 19:27:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Paper Tiger | Mobile and Web Design Agency</title>
	<meta name="keywords" content="Web and Mobile Design Agency, Responsive Design, NYC Design Agency, NJ Design Agency, Shopify Developer, Shopify Designer, SquareSpace Expert, ExpressionEngine Developer, Wordpress Developer, Branding Agency" />
	<meta name="description" content="NYC Metro Area mobile and web design agency. We specialize in responsive design, branding, usability and complex CMS application development. Including custom work in SquareSpace, WordPress, ExpressionEngine and Shopify." />
	<meta name="viewport" content="width=device-width">

	<link rel='canonical' href="index.html" />

	<meta property="og:title" content="Paper Tiger"/>
	<meta property="og:site_name" content="Paper Tiger"/>
	<meta property="og:description" content="NYC Metro Area mobile and web design agency. We specialize in responsive design, branding, usability and complex CMS application development. Including custom work in SquareSpace, WordPress, ExpressionEngine and Shopify."/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="index.html" />
    <meta property="og:image" content="{{ asset('/images/site/fb-share-image.jpg') }}" />

    <link href="{{ asset('/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor/bootstrap-glyphicons.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor/bigvideo.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor/icheck.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,700,400italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
    <link type="text/css" media="screen" href="{{ asset('/css/awwwards.css') }}" rel="stylesheet">
    
    <link rel="shortcut icon" href="{{ asset('/images/site/favicon.ico') }}" type="image/x-icon" />

    <script src="{{ asset('/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>    <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.js"></script>
    <![endif]-->

    <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-46001906-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<script>
	    (function(f,b){
	        var c;
	        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
	        f._hjSettings={hjid:15891, hjsv:3};
	        c=b.createElement("script");c.async=1;
	        c.src="http://static.hotjar.com/c/hotjar-15891.js?sv=3";
	        b.getElementsByTagName("head")[0].appendChild(c);
	    })(window,document);
	</script>

  </head>

    @yield('content')

    <section id="mobile-popup-menu" class="visible-xs">
		<div class="container wider">
			<div class="row">
				<div class="col-xs-6 logo-wrapper">
				   <a href="index" class="popup-nav"><img src="{{ asset('/images/site/mobile-logo.png') }}" alt="Paper Tiger Logo" /></a>
				</div> <!-- .logo-wrapper -->
				<div class="col-xs-6 align-right">
				   <a href="#" class="close-trigger visible-xs unajax"> <img src="{{ asset('/images/site/mobile-close.png') }}" width="24" height="25" title="Menu" alt="Menu" /> </a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
				    <ul class="top-nav">
						<li> <a class="popup-nav" href="work">Work</a> </li>
						<li> <a class="popup-nav hassubmenu" href="#">Services</a>
							<ul class="submenu">
								<li> <a class="popup-nav" href="design">Design</a> </li>
								<li> <a class="popup-nav" href="branding">Branding</a> </li>
								<li> <a class="popup-nav" href="development">Development</a> </li>
								<li> <a class="popup-nav" href="consulting">Consulting</a> </li>
							</ul>
						</li>
						<li> <a class="popup-nav" href="company">Company</a> </li>
						<li> <a class="popup-nav" href="http://papertiger.workable.com/" target="_blank">Careers</a> </li>
						<li> <a class="popup-nav" href="contact">Contact</a> </li>
				   	</ul> <!-- .top-nav -->
				</div>
			</div>
		</div>


		<footer class="footer-fixed">
			<div class="container wider">
				<div class="row">
				    <div class="cold-md-12">
					    <span> &copy; 2015 Paper Tiger </span>
					    <span> 67 E Ridgewood Ave, Ridgewood, NJ </span>
					    <span> <a class="tel" href="tel:+1-201-465-2500">+1-201-465-2500</a> </span>
					    <span> <a href="contact" data-loader-position="right" class="hello popup-nav">Say Hello</a> </span>
				    </div>
				</div>
			</div>
		</footer> <!-- #footer-fixed -->
	</section> <!-- #mobile-popup-menu -->

    <script> var polyfilter_scriptpath = '{{ asset("/js/vendor/filters-polify/index.html") }}';</script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset("/js/vendor/jquery-1.10.1.min.js") }}"><\/script>')</script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="{{ asset('/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('/js/vendor/video.js') }}"></script>
    <script src="{{ asset('/js/vendor/bigvideo.js') }}"></script>
    <script src="{{ asset('/js/vendor/retina.js') }}"></script>
    <script src="{{ asset('/js/vendor/filters-polify/cssParser.js') }}"></script>
    <script src="{{ asset('/js/vendor/filters-polify/css-filters-polyfill.js') }}"></script>
    <script src="{{ asset('/js/vendor/plugin.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <!-- Start of Async HubSpot Analytics Code -->
	  <script type="text/javascript">
	    (function(d,s,i,r) {
	      if (d.getElementById(i)){return;}
	      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
	      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/397240.js';
	      e.parentNode.insertBefore(n, e);
	    })(document,"script","hs-analytics",300000);
	  </script>
	<!-- End of Async HubSpot Analytics Code -->

	<script type='text/javascript'>
	<!-- LUCKY ORANGE CODE -->
		window.__wtw_lucky_site_id = 29877;

		(function() {
			var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
			wa.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://cdn') + '.luckyorange.com/w.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
		  })();
	</script>
  </body>

<!-- Mirrored from papertiger.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jul 2015 19:28:00 GMT -->
</html>
