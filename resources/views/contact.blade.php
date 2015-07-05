@extends('layout')

@section('content')
<body class="contact">

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
    
	    <section id="contact">
	        <section class="contact-hero gmaps" data-stellar-background-ratio="0.5" >
	            <div id="gmaps"></div>
	            <header id="header">
				    <div class="container wider">
					    <div class="row">
						   <div class="col-md-6 col-sm-4 col-xs-6 logo-wrapper">
							   <a href="index"><img src="{{ asset('/images/site/logo.png') }}" width="98" height="98" title="Paper Tiger" alt="Paper Tiger Logo" /></a>
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
							   
							   <a href="#" class="menu-trigger visible-xs"><img src="{{ asset('/images/site/mobile-menu.png') }}" alt="Menu" alt="Menu" /> </a>
							   
						   </div> 
					    </div>
				    </div> 
			    </header> <!-- #header -->
    			<div id="canvasloader-container"></div>
		        
		        <div class="hero container">
			        <div class="row">
				        <div class="col-md-12">
					        <h1>Say Hello!</h1>
				        </div>
			        </div>
		        </div> <!-- .container -->
		        
		    </section> <!-- .contact-hero -->
		    
		    <section class="contact-content">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-7">
						    <p>Paper Tiger is nestled in a lovely town in Northern <strong>New Jersey</strong>, just 30 minutes outside of <strong>New York City</strong>. We get the coziness of suburbia yet are just a train ride from complete concrete mayhem. We love it that way!</p>
						    
						    <div id="wufoo-z1l8cdg71a3tx25">
								Fill out my <a href="https://papertiger.wufoo.com/forms/z1l8cdg71a3tx25" target="_blank">online form</a>.
							</div>
					    </div> <!-- .col-md-7 -->
					    <div class="col-md-4 col-md-offset-1">
						    <ul id="contact-sidebar">
							    <li class="location">
								    67 E Ridgewood Ave, Ste D <br/>
								    Ridgewood, NJ 07450 <br/>
								    <a href="https://goo.gl/maps/CR1y8" target="_blank" class="map">map & directions</a>
							    </li>
							    <li class="phone"> +1 (201) 465-2500 </li>
							    <li class="mail lighter"> <a href="mailto:info@papertiger.com">info@papertiger.com</a> </li>
							    <li class="twitter lighter"> <a href="http://twitter.com/papertigerftw" target="_blank">@papertigerftw</a> </li>
						    </ul>
					    </div>
				    </div>
			    </div>
		    </section> <!-- .contact-content -->
		    
	    </section> <!-- #contact -->
		<!-- Google Code for Say Hello Conversion Page -->
		<span style="color:#f4f4f4;">
			<script type="text/javascript">
				/* <![CDATA[ */
				var google_conversion_id = 973869375;
				var google_conversion_language = "en";
				var google_conversion_format = "2";
				var google_conversion_color = "ffffff";
				var google_conversion_label = "o79KCKHP2wgQv6Kw0AM";
				var google_conversion_value = 3000;
				var google_remarketing_only = false;
				/* ]]> */
			</script>
			<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
			</script>
			<noscript>
				<div style="display:inline;">
					<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/973869375/?value=3000&amp;label=o79KCKHP2wgQv6Kw0AM&amp;guid=ON&amp;script=0"/>
				</div>
			</noscript>
		</span>

		<footer id="global-footer" class="no-margin">
		    <div class="container">
			    
			    <div class="row">
				    <div class="col-md-7">
					    
					    <ul class="footer-nav">
						    <li> <a href="index"> <img src="{{ asset('/images/site/logo-footer.png') }}" title="Paper Tiger" alt="Paper Tiger Logo" /> </a> </li>
						    <li> <a href="work">Work</a> </li>
						    <li> <a href="company">Company</a> </li>
						    <li> <a href="contact">Contact</a> </li>
						    <li class="last-text"> <a href="http://papertiger.workable.com/" target="_blank">Careers</a> </li>
						    <li class="socmed hidden-small"> <a href="https://twitter.com/papertigerftw" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a> </li>
						    <!--<li class="socmed hidden-small"> <a href="https://www.facebook.com/papertigeragency" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a> </li>
						    <li class="socmed hidden-small"> <a href="http://instagram.com/papertigerftw" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a> </li>
						    <li><div class="fb-like" data-href="http://facebook.com/papertigeragency" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" style="float: right; display:inline; padding: 8px 0 0 8px;"></div></li>-->
					    </ul>
					    
					    <ul class="footer-nav visible-xs no-padding">
						    <li class="socmed"> <a href="https://twitter.com/papertigerftw" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a> </li>
						    <!--<li class="socmed"> <a href="https://www.facebook.com/papertigeragency" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a> </li>
						    <li class="socmed"> <a href="http://instagram.com/papertigerftw" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a> </li>-->
					    </ul>
					    
				    </div> <!-- .col-md-7 -->
				    <div class="col-md-5 align-right">
					    <div class="copyright"><span>&copy; 2015 Paper Tiger. Made in New Jersey.</span></div>
				    </div> <!-- .col-md-5 -->
			    </div> <!-- .row -->
			    
		    </div>
		</footer> <!-- #global-footer -->
    
    </div>
@endsection