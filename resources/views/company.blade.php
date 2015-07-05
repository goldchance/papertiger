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
						   <!--<li class="socmed"> <a href="http://instagram.com/papertigeragency" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a> </li>-->
					   </ul> <!-- .top-nav -->
					   
					   <a href="#" class="menu-trigger visible-xs unajax"> 
					     <span class="wrapper"><img src="{{ asset('/images/site/mobile-menu-black.png') }}" alt="Menu" title="Menu" /></span>
					   </a>
				   </div> 
			    </div>
		    </div> 
	    </header> <!-- #header -->
	    
	    <section id="about">
	        <section class="about-hero" data-stellar-background-ratio="0.5">
	            
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
					        <h1>We are a digital design agency.<br/>We get excited about unique ideas and the passionate people behind them. </h1>
					        <div class="container">
						        <div class="row">
							        <div class="col-md-5 col-sm-6">
								        <p>Greetings from sunny New Jersey! We are artists, musicians, and online veterans who are compelled to solve problems through design. The world is fraught with brands that struggle to connect with their customers. We take an objective look at our clients' businesses and question assumptions. Through intentionality, design, and collaboration with our clients, we sculpt the most solid form of online brand expression that allows the customer to interact and learn. </p>
							        </div>
							        <div class="col-md-5 col-sm-6">
								        <p>Think of us as sherpas. We know this mountain and it is a thrill to climb. Solving creative problems through design is our love. We have worked for a decade in online media design to create focused brand experiences and guiding clients into flexible and easy interfaces. We ask the questions and design the solutions that help carve a road to the summit. </p>
							        </div>
						        </div>
					        </div>
				        </div>
			        </div>
		        
			        <a href="#our-clients" class="explore-link">learn more</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .about-hero -->
		    
		    <section id="our-clients">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-4 col-sm-12">
					    	<h1>Our Clients</h1>
						    <p class="top-line">We're lucky to have worked with some of the most amazing individuals, small businesses, and corporations in the world. Here are a few to provide some context.</p>
					    </div>
						
					    <div class="col-md-3 col-md-offset-1 col-sm-4">
						    <ul>
						    
							    <li><a href="the-new-york-times">The New York Times</a></li>
							
							    <li>Google</li>
							
							    <li><a href="north-carolina-museum-of-art">North Carolina Museum of Art</a></li>
							
							    <li><a href="obsessive-compulsive-cosmetics">Obsessive Compulsive Cosmetics</a></li>
							
							    <li><a href="alternative-press">Alternative Press</a></li>
							
							    <li>Sony</li>
							
							    <li><a href="world-wide-hearing">World Wide Hearing</a></li>
							
							    <li>Giovanni Rana</li>
							
							    <li>Howcast</li>
							
							    <li>Warner Brothers Records</li>
							
							    <li>ULTA Beauty</li>
							
							    <li>Impactree</li>
							
							    <li>Mike Perry Studio</li>
							
							    <li><a href="yoga-today">Yoga Today</a></li>
							
							    <li>Peppercomm</li>
							
							    <li><a href="animal">Animal</a></li>
							
							    <li>Creativity Post</li>
							
							    <li>Relativity Sports</li>
							
						    </ul>
					    </div>
					    <div class="col-md-3 col-sm-4">
						    <ul>
						    
							    <li>MIT Media Lab</li>
							
							    <li>Broadcast Music International (BMI)</li>
							
							    <li>Frederator Network</li>
							
							    <li>Shore Fire Media</li>
							
							    <li><a href="blood-brother-movie">Blood Brother</a> (2013 Sundance Winner)</li>
							
							    <li><a href="traveling-picture-show">Traveling Picture Show</a></li>
							
							    <li><a href="harvard-school-of-public-health">Harvard School of Public Health</a></li>
							
							    <li>SelectNY</li>
							
							    <li>Savored</li>
							
							    <li>Tyco Fire & Safety</li>
							
							    <li><a href="digitalundivided">digitalundivided</a></li>
							
							    <li>BBMG</li>
							
							    <li>Watermark</li>
							
							    <li>Jetpack Digital</li>
							
							    <li>Domino Records</li>
							
							    <li>Rallyverse</li>
							
							    <li>Self-Titled Magazine</li>
							
							    <li>The Crash Reel (HBO Documentary)</li>
							
						    </ul>
					    </div>
				    </div>
		        
			        <a href="#explore-section" class="explore-link on-left">explore</a>
			    </div>
		    </section> <!-- #our-clients -->
		    
		    <section id="explore-section">
		    
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12"> <h1>Explore</h1> </div>
				    </div>
				    <div class="row">
					    <div class="col-md-4">
						    <p class="top-line">Questionable people, unquestionable results. Learn more about the company leadership, services, and culture (or lack thereof).</p>
					    </div> <!-- .col-md-4 -->
					    <div class="col-md-8 align-right filter-wrapper hidden-xs">
						    <ul class="filter">
							    <li> <a href="#" class="active" data-filter="*">All</a> </li>
							    <li> <a href="#" data-filter=".services">Services</a> </li>
							    <li> <a href="#" data-filter=".leadership">Leadership</a> </li>
							    <li> <a href="#" data-filter=".culture">Culture</a> </li>
						    </ul>
					    </div> <!-- .col-md-8 -->
				    </div>
			    </div> <!-- .container -->
			    
			    <div id="explore-item" class="hidden-xs">
				    <ul>
					    
					    <li class="culture">
						    <a href="https://goo.gl/maps/XVEdz" target="_blank"><div class="wrapper">
						        <span class="image" style="background-image:url({{ asset('/images/site/RidgewoodDowntown.jpg') }})"></span>
						        <span class="title">Ridgewood, NJ</span>
						    </div></a> <!-- .wrapper -->
					    </li>
					    <li class="culture">
					    	<a href="http://open.spotify.com/user/marcdebiak2/playlist/7xNdCDGj6i5aPeiDH7ZmRd" target="_blank"><div class="wrapper">
						        <span class="image" style="background-image:url({{ asset('/images/site/about-grid-spotify.jpg') }})"></span>
						        <span class="title">Spotify Playlist</span>
							</div></a> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
						    <div class="wrapper">
						        <span class="image" style="background-image:url({{ asset('/images/site/marc-debiak.jpg') }})"></span>
						        <div class="title">
						          Marc Debiak
						          <em>Partner, President</em>
						          <span class="socmed">
						            <a href="http://www.twitter.com/marcdebiak" target="_blank"> <img src="{{ asset('/images/site/icon-grid-twitter.png') }}" title="Marc Debiak on Twitter" alt="Marc Debiak on Twitter" /> </a>
						            <a href="http://open.spotify.com/user/marcdebiak2" target="_blank"> <img src="{{ asset('/images/site/icon-grid-spotify.png') }}" title="Marc Debiak on Spotify" alt="Marc Debiak on Spotify" /> </a>
						            <a href="http://www.linkedin.com/in/marcdebiak/" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" title="Marc Debiak on LinkedIn" alt="Marc Debiak on LinkedIn" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="culture">
						    <a href="http://www.beermenus.com/places/923-the-shepherd-the-knucklehead-pub" target="_blank">
						    <div class="wrapper">
						        <span class="image" style="background-image:url({{ asset('/images/site/about-item5.jpg') }})"></span>
						        <span class="title">Latest Drinks</span>
						    </div></a> <!-- .wrapper -->
					    </li>
					    <li class="services">
						    <div class="wrapper service responsive-design">
						        <span class="title">
						          Design
						          <a href="design" data-loader-position="shift-left">view more</a>
						        </span>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
						    <div class="wrapper">
						        <span class="image" style="background-image:url({{ asset('/images/site/jeff.jpg') }})"></span>
						        <div class="title">
						        Jeff Novotny
						          <em>Senior Project Manager</em>
						          <span class="socmed">
						            <a href="http://open.spotify.com/user/1221236157" target="_blank"> <img src="{{ asset('/images/site/icon-grid-spotify.png') }}" title="Jeff Novotny on Spotify" alt="Jeff Novotny on Spotify" /> </a>
						            <a href="https://www.linkedin.com/profile/view?id=16571565" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" title="Jeff Novotny on LinkedIn" alt="Jeff Novotny on LinkedIn" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
						    <div class="wrapper">
						        <span class="image" style="background-image:url({{ asset('/images/site/michelle-perez.jpg') }})"></span>
						        <div class="title">
						          Michelle Perez
						          <em>Lead Designer</em>
						          <span class="socmed">
						            <a href="http://www.linkedin.com/in/heyitsmichelle/en" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" title="Michelle Perez on LinkedIn" alt="Michelle Perez on LinkedIn" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="services">
						    <div class="wrapper service interface-design">
						        <span class="title">
						          Development
						          <a href="development" data-loader-position="shift-left">view more</a>
						        </span>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
					    	<div class="wrapper">
								<span class="image" style="background-image:url({{ asset('/images/site/hidayat.jpg') }})"></span>
						        <div class="title">
						          Hidayat Sagita
						          <em>Lead Developer</em>
						          <span class="socmed">
						            <a href="https://twitter.com/hdytsgt" target="_blank"> <img src="{{ asset('/images/site/icon-grid-twitter.png') }}" /> </a>
						            <a href="http://www.linkedin.com/in/hdytsgt" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
					    <div class="wrapper">
						        <span class="image" style="background-image:url({{ asset('/images/site/jason.jpg') }})"></span>
						        <div class="title">
						          Jason Debiak
						          <em>Partner, Creative Director</em>
						          <span class="socmed">
						            <a href="http://www.twitter.com/jasondebiak" target="_blank"> <img src="{{ asset('/images/site/icon-grid-twitter.png') }}" title="Jason Debiak on Twitter" alt="Jason Debiak on Twitter" /> </a>
						            <a href="http://open.spotify.com/user/jasondebiak" target="_blank"> <img src="{{ asset('/images/site/icon-grid-spotify.png') }}" title="Jason Debiak on Spotify" alt="Jason Debiak on Spotify" /> </a>
						            <a href="http://www.linkedin.com/in/jasondebiak/" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" title="Jason Debiak on LinkedIn" alt="Jason Debiak on LinkedIn" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
						    <div class="wrapper">
						        <span class="image" style="background-image:url({{ asset('/images/site/jack2.jpg') }})"></span>
						        <div class="title">
						          Jack Doud
						          <em>Partner, UX Director</em>
						          <span class="socmed">
						            <a href="https://twitter.com/CarJackD" target="_blank"> <img src="{{ asset('/images/site/icon-grid-twitter.png') }}" title="Jack Doud on Twitter" alt="Jack Doud on Twitter" /> </a>
						            <a href="http://www.linkedin.com/in/jackdoud" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" title="Jack Doud on LinkedIn" alt="Jack Doud on LinkedIn" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="services">
						    <div class="wrapper service ia">
						        <span class="title">
						          Branding
						          <a href="branding" data-loader-position="shift-left">view more</a>
						        </span>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="services">
						    <div class="wrapper service branding">
						        <span class="title">
						          Consulting
						          <a href="consulting" data-loader-position="shift-left">view more</a>
						        </span>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
					    	<div class="wrapper">
								<span class="image" style="background-image:url({{ asset('/images/site/saad.jpg') }})"></span>
						        <div class="title">
						          Saad Irfan
						          <em>Senior Developer</em>
						          <span class="socmed">
						            <a href="https://twitter.com/saad_irfan" target="_blank"> <img src="{{ asset('/images/site/icon-grid-twitter.png') }}" /> </a>
						            <a href="http://www.linkedin.com/in/saadirfan" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
					    	<div class="wrapper">
								<span class="image" style="background-image:url({{ asset('/images/site/mirko-santengelo.jpg') }})"></span>
						        <div class="title">
						          Mirko Santangelo
						          <em>Designer</em>
						          <span class="socmed">
						            <a href="https://twitter.com/mirkosantangelo" target="_blank"> <img src="{{ asset('/images/site/icon-grid-twitter.png') }}" /> </a>
						            <a href="https://www.linkedin.com/in/mirkosantangelo/en" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
					    	<div class="wrapper">
								<span class="image" style="background-image:url({{ asset('/images/site/firman.jpg') }})"></span>
						        <div class="title">
						          Firman Ananda
						          <em>Designer</em>
						          <span class="socmed">
						            <a href="https://twitter.com/fiandotindie" target="_blank"> <img src="{{ asset('/images/site/icon-grid-twitter.png') }}" /> </a>
						            <a href="https://www.linkedin.com/pub/firman-ananda/45/451/979" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="leadership">
					    	<div class="wrapper">
								<span class="image" style="background-image:url({{ asset('/images/site/lisa.jpg') }})"></span>
						        <div class="title">
						          Lisa Gibbons
						          <em>Office Manager</em>
						          <span class="socmed">
						            <a href="https://www.linkedin.com/pub/lisa-erwood/8/3b9/8b9" target="_blank"> <img src="{{ asset('/images/site/icon-grid-linkedin.png') }}" /> </a>
						          </span>
						        </div>
						    </div> <!-- .wrapper -->
					    </li>
					    <li class="culture">
						    <a href="contact"><div class="wrapper">
						        <span class="image" style="background-image:url({{ asset('/images/site/about-item9.jpg') }})"></span>
						        <span class="title">Contact Us</span>
						    </div> </a><!-- .wrapper -->
					    </li>
				    </ul>
			    </div> <!-- #work-full -->
			    
			    <div id="explore-mobile" class="visible-xs">
				    
				    <ul class="services">
					    <li class="responsive-design"> 
						    <h5>Design</h5>
						    <a href="design">view more</a>
					    </li>
					    <li class="interface-design"> 
						    <h5>Usability</h5>
						    <a href="design8455">view more</a>
					    </li>
					    <li class="ia"> 
						    <h5>Branding</h5>
						    <a href="branding">view more</a>
					    </li>
					    <li class="branding"> 
						    <h5>Consulting</h5>
						    <a href="consulting">view more</a>
					    </li>
					    <li class="development"> 
						    <h5>Development</h5>
						    <a href="development">view more</a>
					    </li>
				    </ul> <!-- .services -->
				    
				    <div class="container">
					    <div class="row">
						    <div class="col-xs-12"> <h3>Our Leadership</h3> </div>
					    </div>
				    </div>
				    
				    <ul class="leadership">
					    <li style="background-image:url({{ asset('/images/site/marc-debiak.jpg') }})"> </li>
					    <li style="background-image:url({{ asset('/images/site/jason.jpg') }})"> </li>
					    <li style="background-image:url({{ asset('/images/site/jack2.jpg') }})"> </li>
				    </ul> <!-- .leadership -->
				    
				    <ul class="leadership-people">
					    <li>Marc Debiak <small>President</small></li>
					    <li>Jason Debiak <small>Creative Director</small></li>
					    <li>Jack Doud <small>UX Director</small></li>
				    </ul> <!-- .leadership-people -->
				    
				    <ul class="leadership">
					    <li style="background-image:url({{ asset('/images/site/jeff.jpg') }})"> </li>
					    <li style="background-image:url({{ asset('/images/site/hidayat.jpg') }})"> </li>
					    <li style="background-image:url({{ asset('/images/site/michelle-perez.jpg') }})"> </li>
				    </ul> <!-- .leadership -->
				    
				    <ul class="leadership-people">
					    <li>Jeff Novotny <small>Lead Project Manager</small></li>
					    <li>Hidayat Sagita <small>Lead Developer</small></li>
					    <li>Michelle Perez <small>Lead Designer</small></li>
				    </ul> <!-- .leadership-people -->
				    
				    <ul class="leadership">
					    <li style="background-image:url({{ asset('/images/site/saad.jpg') }})"> </li>
					    <li style="background-image:url({{ asset('/images/site/mirko-santengelo.jpg') }})"> </li>
					    <li style="background-image:url({{ asset('/images/site/firman.jpg') }})"> </li>
				    </ul> <!-- .leadership -->
				    
				    <ul class="leadership-people">
					    <li>Saad Irfan <small>Senior Developer</small></li>
					    <li>Mirko Santangelo <small>Designer</small></li>
					    <li>Firman Ananda <small>Designer</small></li>
				    </ul> <!-- .leadership-people -->
				    
				    <ul class="leadership">
					    <li style="background-image:url({{ asset('/images/site/lisa.jpg') }})"> </li>
				    </ul> <!-- .leadership -->
				    
				    <ul class="leadership-people">
					    <li>Lisa Gibbons <small>Office Manager</small></li>
				    </ul> <!-- .leadership-people -->
				    
			    </div> <!-- #explore-mobile -->
			    
		    </section> <!-- #explore-section -->
		    
		    <section id="our-process">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-4 col-sm-12">
					    	<h1>Our Process</h1>
					    </div>
				    </div>
				    <div class="row process align-center">
				    	<div class="col-md-3 col-sm-6">
				    		<img src="{{ asset('/images/site/process-1.png') }}" alt="Step 1" title="Process Step 1" />
				    		<h3 class="understanding">Understanding</h3>
				    		<p>How can we help you? What does your company do and where do they want to go? What do you value and what sort of relationship do you want to have with your customer base? Do you want the site to be responsive? We talk about the basics, agree on a platform for growth, and then establish goals for the program.</p>
				    	</div>
				    	<div class="col-md-3 col-sm-6">
				    		<img src="{{ asset('/images/site/process-2.png') }}" alt="Step 2" title="Process Step 2" />
				    		<h3 class="design">Disruption</h3>
				    		<p>You don't want the same old dusty product everyone else has. How can limits be pushed? What needs to be done to make you stand out from the rest of your competition? As a team we brainstorm, whiteboard, and debate until we have an idea and design for your product that will get you noticed. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				    	</div>
				    	<div class="col-md-3 col-sm-6">
				    		<img src="{{ asset('/images/site/process-3.png') }}" alt="Step 3" title="Process Step 3" />
				    		<h3 class="development">Collaboration</h3>
				    		<p>We're a tight-knit group of family and friends. Deep understanding of one another brought us together and it's spawned a close collaborative process built on respect and a mutual love for what we do. We work with our clients just as closely so their passion is infused in the final product and every step of the process is taken together.</p>
				    	</div>
				    	<div class="col-md-3 col-sm-6">
				    		<img src="{{ asset('/images/site/process-4.png') }}" alt="Step 4" title="Process Step 4" />
				    		<h3 class="growth">Growth</h3>
				    		<p>Once the project is launched, we watch how the world receives it. We help plan and execute the response and changes based on the reaction we get. Every project can be fine tuned once we learn more about the audience's dynamics.</p>
				    	</div>
				    </div>
			    </div>
		    </section>
@endsection