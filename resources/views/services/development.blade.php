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
	        <section class="service-hero cms" data-stellar-background-ratio="0.5">
	            
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
					        <h1>Development</h1>
					        <p>As time does with most things, it has also matured the tech world. It really isn't all that hard to develop a beautiful product anymore. The days of starting from scratch and working through endless browser testing and architecting are over. We love using open source plugins and stable, dependable CMS platforms and frameworks. We use what already works and build the good stuff on top of it.</p>
				        </div>
			        </div>
		        
			        <a href="#service-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .service-hero -->

		    <section class="service-logos logos-design">
		        <div class="container">
			        <div class="row">
				        <div class="col-md-12">
		      	        	<img src="{{ asset('/images/site/development-logo.jpg') }}" class="img-responsive" />
				        </div>
			        </div>
		        </div> <!-- .container -->
		    </section> <!-- .service-logos -->
		    
			<section id="service-content">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12"> <h1 class="pull-up">A ninja free environment.</h1> </div>
				    </div>
				    <div class="row">
                      <div class="col-md-12"> <hr class="red-line"/> </div>
				    </div>
				    <div class="row col-new-service">
					    <div class="col-md-6 col-sm-6">
						    <p class="top-line">You’ve got a job to do. You own a business or your boss has you leading a new project. “Get me code ninjas” they say. “Get some hackers in here” they say. You just lower your sunglasses and say “It’s handled” and email Paper Tiger. After you find a new job you contact us again. You have big documents full of functionality. You have lots of stakeholders and a big fat RFP for us. We’re ready, just send it over and it’s all taken care of. This is the future, right? Who is this? Who’s reading this? What year is it? 2009? Let’s HTML.</p>
					    
                          <p>We work as an agile and waterfall hybrid team. We start development up front as a functional prototype and add designs on top of the structure and established site flow. This means that our clients know very clearly how their site works before it is final because they've actually used it. The basic prototype code is then evolved into a final site when the design is tied in. Platforms and frameworks are decided as needed.</p>
                          
                      <ul class="list" style="margin-top: 25px;">
                            <li class="title" style="color:black;"><strong>Areas of Expertise:</strong></li>
                              <li>ExpressionEngine</li>
                              <li>Wordpress</li>
                              <li>Shopify</li>
                              <li>Squarespace</li>
                              <li>E-Commerce</li>
                              <li>PHP, HTML, CSS</li>
                              <li>Javascript</li>
                          <li><a href="contact">Many Others</a></li>
                            </ul>
                      </div>
					    <div class="col-md-6">
                         
                        <div id="wufoo-z9a3c110io94uj">
							Fill out my <a href="https://papertiger.wufoo.com/forms/z9a3c110io94uj">online form</a>.
						</div>

                          
					    </div>
				    </div>
		        
			    </div>
		    </section> <!-- #service-content -->
		    <section id="service-more" class="interface">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12">
						    <p class="align-center">An important part of our day is making sure your site is "future proof". With mobile usage rapidly rising, your site needs to look good on ALL devices, not just one large one sitting on top of a desk. Resize our site for an example of how your site can be responsive down to mobile devices.</p>
					    </div>
				    </div>
		        
			    </div>
			    <div class="responsive-text">
				    <div class="container">
					    <div class="row">
						    <div class="col-md-12" id="browser-width-text">
								Your browser is <span id="browser-width">1600</span>px wide. 
							</div>
				        </div>
				    </div>
			    </div>
		    </section> <!-- #service-more -->

		    <section class="client-content pull-up">
			    <div class="container">	
					 
				    <div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up">
							    <img src="{{ asset('/images/uploads/Alt_Press/ap-responsive.jpg') }}" alt="Responsive preview" title="Responsive preview" class="img-responsive" /><br/>
						    </div>
					    </div>
				    </div>   
					 
			    </div>  
		    </section>
		    
		    <section class="service-nav">
			    <div class="container">
				    <div class="row">
					    <a href="consulting" class="col-md-6 col-sm-6 interface-design previous"> <span>Design</span> </a>
					    <a href="branding" class="col-md-6 col-sm-6 align-right branding next"> <span>Branding</span> </a>
				    </div>
			    </div>
		    </section> <!-- .service-nav -->
		    <section id="work-content">
		    
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12"> <h1>Selected Development Work</h1> </div>
				    </div>
				    <div class="row">
					    <div class="col-md-4">
						    <p class="top-line">Here are a few of our past projects where development and programming played a significant role.</p>
					    </div>
				    </div>
			    </div> <!-- .container -->
			    
			    <div id="work-full">
				    <ul>
						<li>
							<a href="alternative-press" style="background-image:url({{ asset('/images/uploads/work1.png') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/client-logo-ap.png') }}" alt="Alternative Press Magazine" /> 
							</a> 
						</li>
						<li>
							<a href="digitalundivided" style="background-image:url({{ asset('/images/uploads/did-thumb.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/did-logo.png') }}" alt="digitalundivided" /> 
							</a> 
						</li>
						<li>
							<a href="yoga-today" style="background-image:url({{ asset('/images/uploads/yogo-thumb.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/yt-logo.png') }}" alt="Yoga Today" /> 
							</a> 
						</li>
						<li>
							<a href="future-hosting" style="background-image:url({{ asset('/images/uploads/futurehosting-thmb-bg.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/fh-logo.png') }}" alt="Future Hosting" /> 
							</a> 
						</li>
						<li>
							<a href="the-new-york-times" style="background-image:url({{ asset('/images/uploads/nyt-thumb.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/nyt-logo.png') }}" alt="The New York Times" /> 
							</a> 
						</li>
						<li>
							<a href="traveling-picture-show" style="background-image:url({{ asset('/images/uploads/tpsc.jpg') }}"> 
								<span></span>
								<img src="{{ asset('/images/uploads/tpsc.png') }}" alt="Traveling Picture Show" /> 
							</a> 
						</li>
				    </ul>
			    </div> <!-- #work-full -->
@endsection