@extends('layout')

@section('content')
<body class="">
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
	    
	    <section id="client">
	    		
	        <section class="client-hero" data-stellar-background-ratio="0.5" style="background: url({{ asset('/images/uploads/Animal/animal_top_banner.jpg') }})" > 
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
			        <img src="{{ asset('/images/uploads/animal-logo.png') }}" class="client-logo" alt="Animal" title="Animal"/>
			        <a href="#client-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .about-hero -->
		    
		    <section id="client-content" class="no-title">
			    <div class="container">
				    <div class="row visible-xs">
					    <div class="col-md-12"> <h1>Animal</h1> </div>
				    </div>
				    <div class="row">
						<div class="col-md-4 col-sm-4">
                          <p>Although you may not know it, you've probably already seen what Animal does. They are are one of the most innovative visual effects studios in the industry. They were also in need of a new brand and site design that matched the imagination and pristine quality of their work. As designers we don't get to work with a lot of video, so we were immediately in awe of them and were quite flattered when they chose us to redesign their brand and web presence.</p>
					    </div>
					    <div class="col-md-4 col-sm-4">
                          <p>We created a responsive website that supports video across all devices and a REALLY fancy new brand package (if we do say so ourselves). We wanted to make sure the new site was built looking towards the future. We took that edict a step further and made it futuristic in design and concept as well, while still making it simple to maintain. Animal will be unleashing new portfolio items soon and now have perfect platform for it.</p>
					    </div>
					    <div class="col-md-4 col-sm-4 service-rendered-wrap">
					        <h3>Animal</h3>
					        <p><strong>Services Rendered:</strong></p>
						    <div class="container">
						    	<div class="row the-list">
						    		<div class="col-md-6">
						    			<ul class="list">
									     
									     	<li> + <a style="color:#20c491;" href="branding" data-loader-position="right">Branding Services</a> </li>
									     											   
										 
									     	<li> + <a style="color:#20c491;" href="design" data-loader-position="right">Design</a> </li>
									     											   
										 
									     	<li> + <a style="color:#20c491;" href="development" data-loader-position="right">Development</a> </li>

									    </ul>
						    		</div>
						    		<div class="col-md-6">
						    			<ul class="list">
  									     
									    </ul>
						    		</div>
						    	</div>	
						    </div>

						    <a href="http://animalvfx.com/" class="link-button no-arrow dark sans" target="_blank"> Launch Project </a>					    </div>
				    </div>
			    </div>
		    </section> <!-- #client-content -->

		    <section class="client-content pull-up">
			    <div class="container">		    
				
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/Animal/animal-home.jpg') }}" alt="Full screen design of Animal's homepage" title="Full screen design of Animal's homepage" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>Working with a lot of rich imagery from the client is a designer's dream. Animal gave us stunning still video frames to use as full screen backdrops and inspiration throughout the site.</p>
					    </div>
				    </div>   
				    <div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/Animal/animal-branding.jpg') }}" alt="Logo & branding work for Animal" title="Logo & branding work for Animal" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>Funny story - they started out by doing a lot of vfx for talking animals. We think the new logo and brand pays credence to their beginnings, but adds an edge to show their evolution and trajectory.</p>
					    </div>
				    </div>   
				    <div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/Animal/anim-3.jpg') }}" alt="Portfolio entry page design" title="Portfolio entry page design" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>The best marketing the site does is showcase the video work loudly. It allows the work to speak for itself. </p>
					    </div>
				    </div>
									  
			    </div>  
		    </section> <!-- #client-content -->

		    <section class="client-content pull-up">
			    <div class="container">
			      
			    </div>  
		    </section> <!-- #client-content -->
		    
		    <section class="client-nav">
			    <div class="container">
				    <div class="row">
				    
					    <a href="harvard-school-of-public-health" class="col-md-6 col-sm-6 col-xs-6 previous"> <span class="arrow"><small>Previous</small> <span>Harvard School of Public Health</span></span> </a>	
					 
					 
					    <a href="traveling-picture-show" class="col-md-6 col-sm-6 col-xs-6 align-right next pull-right"> <span class="arrow"><small>Next</small> <span>Traveling Picture Show</span></span> </a>	
				    </div>
			    </div>
		    </section> <!-- .client-nav -->
@endsection