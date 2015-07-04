@extends('layout')

@section('content')
<body class="home">
	<div id="awwwards" class="right black">
		<a href="http://www.awwwards.com/" target="_blank">best websites of the world</a>
	</div>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1&appId=204747223042313";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->

	<div class="global-wrapper">
		<header id="header">
			<div class="container wider">
				<div class="row">
					<div class="col-md-6 col-sm-4 col-xs-6 logo-wrapper">
	   					<a href="company">
	   						<img src="{{ asset('/images/site/logo.png') }}" width="98" height="98" title="Paper Tiger" alt="Paper Tiger Logo" />
	   					</a>
					</div> <!-- .logo-wrapper -->
					<div class="col-md-6 col-sm-8 col-xs-6 align-right">
	   					<ul class="top-nav hidden-xs">
	   						<li> <a href="work">Work</a> </li>
							<li class="hassubmenu">
	     						<a href="#">Services</a> <span class="arrow"></span>
	     						<ul class="submenu">
									<li> <a href="design" data-loader-position="right">Design</a> </li>
									<li> <a href="branding" data-loader-position="right">Branding</a> </li>
									<li> <a href="development" data-loader-position="right">Development</a> </li>
									<li> <a href="consulting" data-loader-position="right">Consulting</a> </li>
								</ul>
	    					</li>
						    <li> <a href="company">Company</a> </li>
						    <li> <a href="contact">Contact</a> </li>
							<li class="socmed"> <a href="https://twitter.com/papertigerftw" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a> </li>
						   	<!--<li class="socmed"> <a href="http://instagram.com/papertigerftw" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a> </li>-->
						</ul> <!-- .top-nav -->

	   					<a href="#" class="menu-trigger visible-xs">
	   						<img src="{{ asset('/images/site/mobile-menu.png') }}" alt="Menu" alt="Menu" /> 
	   					</a>

					</div>
				</div>
			</div>
		</header> <!-- #header -->

		<div id="canvasloader-container"></div>

		<section id="home">
		<div class="container wider">
		<div class="row">
		    <div class="col-md-12">
		        <div class="tagline-wrapper">
		            <h1 class="tagline">
			            <span class="hoveritem">Paper Tiger</span>
			            <span class="field hoveraction">
			            	<a href="design" class="item show" data-hover="Designs" data-self="field-designs" data-target="field-designs">Designs</a>,
			            	<a href="development" class="item" data-hover="Develops" data-self="field-develops" data-target="field-develops">Develops</a>,
			            	<a href="branding" class="item" data-hover="Defines" data-self="field-defines" data-target="field-defines">Defines</a>,
			            	<a href="development" class="item" data-hover="Builds" data-self="field-builds" data-target="field-builds">Builds</a>,
			            	<a href="design" class="item" data-hover="Creates" data-self="field-creates" data-target="field-creates">Creates</a>
			            </span>
		            </h1>
		            <h1 class="tagline">
			            <span class="hoveritem">Amazing</span>
			            <span class="expertise hoveraction2">
			            	<a href="design" class="item show" data-hover="User Experiences" data-self="expertise-userexperience" data-target="expertise-userexperience">User Experiences</a>,
			            	<a href="branding" class="item" data-hover="Brand Messages" data-self="expertise-branding" data-target="expertise-branding">Brand Messages</a>,
			            	<a href="development" class="item" data-hover="Impossible Things" data-self="expertise-development" data-target="expertise-development">Products</a>,
			            	<a href="design" class="item" data-hover="Concepts" data-self="expertise-design" data-target="expertise-design">Concepts</a>,
			            	<a href="development" class="item" data-hover="Applications" data-self="expertise-development" data-target="expertise-development">Applications</a>
			            </span>
		            </h1>
		        </div> <!-- .tagline-wrapper -->
		        <div class="cleaner"></div>
		        <p class="small-tagline"> We are a <span>digital design agency.</span> We receive faxes from the future informing us about upcoming trends in design and technology. Let us share this information with you.</p>
		        <a href="work" data-loader-position="button-center" class="link-button">Explore Our Work</a><!-- &nbsp;&nbsp; <a href="/contact" data-loader-position="button-center" class="link-button">Start Your Project</a>-->

		    </div>
		</div>
		</div>
		</section> <!-- #home -->

		<footer id="footer-fixed">
		<div class="container wider">
		<div class="row">
		    <div class="col-md-12">
			    <span> &copy; 2015 Paper Tiger </span>
			    <span> 67 E Ridgewood Ave, Ridgewood, NJ </span>
			    <span> <a class="tel" href="callto:+2014652500">+1 (201) 465-2500</a> </span>
			    <span> <a href="contact" class="hello" data-loader-position="right">Say Hello</a> </span>

			    <!-- <div class="fb-like" data-href="http://facebook.com/papertigeragency" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" style="float: right; display:inline; margin-top: -4px;"></div> -->

		    </div>
		</div>
		</div>
		</footer> <!-- #footer-fixed -->
	</div>
@endsection
