@extends('layout')

@section('content')
<body>

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
	    <header id="subheader" class="header-fixed">
		    <div class="container wider">
			    <div class="row">
				   <div class="col-md-6 col-sm-4 col-xs-6 ogo-wrapper">
					   <a href="index" class="hidden-xs" id="fixed-logo-link"><img src="{{ asset('/images/site/logo.png') }}" alt="Paper Tiger Logo" title="Paper Tiger" /></a>
				   </div> <!-- .logo-wrapper -->
				   <div class="col-md-6 col-sm-8 col-xs-6 align-right">
					   <ul class="top-nav  hidden-xs">
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
					   </ul> <!-- .top-nav -->
					   
					   <a href="#" class="menu-trigger visible-xs unajax"> 
					     <span class="wrapper"><img src="{{ asset('/images/site/mobile-menu-black.png') }}" alt="Menu" title="Menu" /></span>
					   </a>
				   </div> 
			    </div>
		    </div> 
	    </header> <!-- #header -->
	    
	    <section id="service">
	        <section class="service-hero branding" data-stellar-background-ratio="0.5">
	            
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
					        <h1>Branding Services</h1>
					        <p>Paper Tiger’s designers know branding. Since we started the company in 2008, our team has helped clients from all over the world create memorable, long-lasting brands that match their personality and their mission. We know that when creating your brand, nobody knows it better than you. That’s why we work hand-in-hand with you to fully flesh out your messaging and then create a branding package that will make you stand out. </p>
				        </div>
			        </div>
		        
			        <a href="#service-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .service-hero -->

		    <section class="service-logos logos-branding">
		        <div class="container">
			        <div class="row">
				        <div class="col-md-12">
		      	        	<img class="img-responsive" src="{{ asset('/images/site/brands.png') }}" class="brands" alt="Brands we've designed" title="Brands we've designed" />
				        </div>
			        </div>
		        </div> <!-- .container -->
		    </section> <!-- .service-logos -->
		    
		    <section id="service-content" class="branding">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12"> <h1 class="pull-up">It’s not just about your logo, <br/>it’s about your mission.</h1> </div>
				    </div>
				    <div class="row">
                      <div class="col-md-12"> <hr class="red-line"/> </div>
				    </div>
				    <div class="row col-new-service">
					    <div class="col-md-6">
						    <p class="top-line">We start with your mission statement - it’s the essence of your business and without it, your branding will be meaningless. From there, we begin working on your logo: creating, reviewing, debating internally and finally presenting you with the options that work best not only visually, but work best to shine the brightest light on your mission, your personality and your clientele.</p>
					    </div>
					    <div class="col-md-6">
                         
                        <div id="wufoo-z9a3c110io94uj">
							Fill out my <a href="https://papertiger.wufoo.com/forms/z9a3c110io94uj">online form</a>.
						</div>
                          
					    </div>
				    </div>
			    </div>
		    </section> <!-- #service-content -->
		    
		    <section id="service-more" class="branding">
		        <div class="branding-background"></div>
			    <div class="container">
			    </div>
		    </section> <!-- #service-more -->
		    
		    <section class="service-nav">
			    <div class="container">
				    <div class="row">
					    <a href="development" class="col-md-6 col-sm-6 usability previous"> <span>Development</span> </a>
					    <a href="consulting" class="col-md-6 col-sm-6 align-right consulting next"> <span>Consulting</span> </a>
				    </div>
			    </div>
		    </section> <!-- .service-nav -->
		    
		    <section id="work-content">
		    
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12"> <h1>Selected Branding Services Work</h1> </div>
				    </div>
				    <div class="row">
					    <div class="col-md-4">
						    <p class="top-line">Check out a few of our case studies to see the results of our branding and corporate identity process. </p>
					    </div>
				    </div>
			    </div> <!-- .container -->
			    
			    <div id="work-full">
				    <ul>
						<li>
							<a href="animal" style="background-image:url({{ asset('/images/uploads/animal-thumb.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/animal-logo.png') }}" alt="Animal" /> 
							</a> 
						</li>
						<li>
							<a href="digitalundivided" style="background-image:url({{ asset('/images/uploads/did-thumb.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/did-logo.png') }}" alt="digitalundivided" /> 
							</a> 
						</li>
						<li>
							<a href="cold-pressed-raw" style="background-image:url({{ asset('/images/uploads/CPR/CPR-thumb.jpg') }}"> 
								<span></span>
								<img src="{{ asset('/images/uploads/CPR/CPR-logo-2.png') }}" alt="Cold Pressed Raw" /> 
							</a> 
						</li>
						<li>
							<a href="impactree" style="background-image:url({{ asset('/images/uploads/imp-thumb-2.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/imp-logo.png') }}" alt="Impactree" /> 
							</a> 
						</li>
						<li>
							<a href="world-wide-hearing" style="background-image:url({{ asset('/images/uploads/wwh_thumb.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/wwh_logo.png') }}" alt="World Wide Hearing" /> 
							</a> 
						</li>
						<li>
							<a href="future-hosting" style="background-image:url({{ asset('/images/uploads/futurehosting-thmb-bg.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/fh-logo.png') }}" alt="Future Hosting" /> 
							</a> 
						</li>
				    </ul>
			    </div> <!-- #work-full -->
@endsection