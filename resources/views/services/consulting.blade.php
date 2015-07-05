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
	    
	    <section id="service">
	        <section class="service-hero frontend" data-stellar-background-ratio="0.5">
	            
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
					        <h1>Consulting</h1>
					        <p>Our consultation services provide you with decades of experience as entrepreneurs, IT professionals, artists, project managers and digital marketers. We can connect you to the knowledge, solutions and people you need to accomplish your business objectives. We work with businesses at their inception or during periods of transition to implement new technology, cut costs, and get organized.</p>
				        </div>
			        </div>
		        
			        <a href="#service-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .service-hero -->

		    <section class="service-logos">
		        <div class="container">
			        <div class="row">
				        <div class="col-md-12">
		      	        	        <img src="{{ asset('/images/site/consulting-logo.jpg') }}" class="img-responsive" />
				        </div>
			        </div>
		        </div> <!-- .container -->
		    </section> <!-- .service-logos -->

			<section id="service-content" class="consulting">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12"> <h1 class="pull-up">If you're not sure where to start, <br/>it's probably here.</h1> </div>
				    </div>
				    <div class="row">
                      <div class="col-md-12"> <hr class="red-line"/> </div>
				    </div>
				    <div class="row col-new-service">
					    <div class="col-md-6">
                          <p class="top-line">You want to focus on what you love doing. Starting a new project or implementing solutions to operational challenges can be a time consuming distraction. For many of our clients, we consult on technology logistics, multi-message testing, inventory management, member management, e-mail messaging, and the list goes on. From the first time a customer gets to the page, to their retention once they are regular subscribers, we help design the systems to make growth easy. </p>
                          <p>A great business can practically run itself, but you need the right people to frame out the process.</p>
					    </div>
					    <div class="col-md-6">
                         
	                        <div id="wufoo-z9a3c110io94uj">
								Fill out my <a href="https://papertiger.wufoo.com/forms/z9a3c110io94uj">online form</a>.
							</div>
                          
					    </div>
				    </div>
		        
			        <a href="#work-content" class="explore-link">work</a>
			    </div>
		    </section> <!-- #service-content -->
		    
		    <section class="service-nav">
			    <div class="container">
				    <div class="row">
					    <a href="branding" class="col-md-6 col-sm-6 branding previous"> <span>Branding</span> </a>
					    <a href="design" class="col-md-6 col-sm-6 align-right interface-design next"> <span>Design</span> </a>
				    </div>
			    </div>
		    </section> <!-- .service-nav -->
		    
		    <section id="work-content">
		    
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12"> <h1>Selected Consulting Work</h1> </div>
				    </div>
				    <div class="row">
					    <div class="col-md-4">
						    <p class="top-line">Check out some of the projects we worked with as consultants.</p>
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
							<a href="harvard-school-of-public-health" style="background-image:url({{ asset('/images/uploads/hsph-thumb.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/HSPH-logo.png') }}" alt="Harvard School of Public Health" /> 
							</a> 
						</li>
						<li>
							<a href="the-new-york-times" style="background-image:url({{ asset('/images/uploads/nyt-thumb.jpg') }})"> 
								<span></span>
								<img src="{{ asset('/images/uploads/nyt-logo.png') }}" alt="The New York Times" /> 
							</a> 
						</li>
				    </ul>
			    </div> <!-- #work-full -->
@endsection