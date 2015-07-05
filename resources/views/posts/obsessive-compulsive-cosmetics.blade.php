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
	    		
	        <section class="client-hero" data-stellar-background-ratio="0.5" style="background: url({{ asset('/images/uploads/OCC/OCC_top_banner.jpg') }})" > 
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
			        <img src="{{ asset('/images/uploads/OCC/OCC_logo.png') }}" class="client-logo" alt="Obsessive Compulsive Cosmetics" title="Obsessive Compulsive Cosmetics"/>
			        <a href="#client-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .about-hero -->
		    
		    <section id="client-content" class="no-title">
			    <div class="container">
				    <div class="row visible-xs">
					    <div class="col-md-12"> <h1>Obsessive Compulsive Cosmetics</h1> </div>
				    </div>
				    <div class="row">
						<div class="col-md-4 col-sm-4">
                          <p class="top-line">​Obsessive Compuslive Cosmetics (OCC) is one of the fastest growing cosmetics lines in the country. The company is quickly exploding out of their Lower East Side Manhattan location, with their inventive Lip Tar products (any many others) now available in most Sephora stores.</p>
					    </div>
					    <div class="col-md-4 col-sm-4">
                          <p>Perhaps the most endearing thing about OCC is that the entire line is 100% vegan and cruelty free. That means you can use their amazing products guilt-free because there's nobody "back at the lab" sticking lipsticks into a monkey's eye.</p>
					    </div>
					    <div class="col-md-4 col-sm-4 service-rendered-wrap">
					        <h3>Obsessive Compulsive Cosmetics</h3>
					        <p><strong>Services Rendered:</strong></p>
						    <div class="container">
						    	<div class="row the-list">
						    		<div class="col-md-6">
						    			<ul class="list">
									     
									     	<li> + <a style="color:#4abb8a;" href="consulting" data-loader-position="right">Consulting</a> </li>
									     											   
										 
									     	<li> + <a style="color:#4abb8a;" href="design" data-loader-position="right">Design</a> </li>
									     											   
										 
									     	<li> + <a style="color:#4abb8a;" href="development" data-loader-position="right">Development</a> </li>

									    </ul>
						    		</div>
						    		<div class="col-md-6">
						    			<ul class="list">
	  									     
									    </ul>
						    		</div>
						    	</div>	
						    </div>
						    
						    <a href="http://occmakeup.com/" class="link-button no-arrow dark sans" target="_blank"> Launch Project </a>					    </div>
				    </div>
			    </div>
		    </section> <!-- #client-content -->

		    <section class="client-content pull-up">
			    <div class="container">		    
				
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/OCC/OCC-responsive.jpg') }}" alt="Responsive design preview for Obsessive Compulsive's new wbesite" title="Responsive design preview for Obsessive Compulsive's new wbesite" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>Built off of the robust Shopify e-commerce platform, this responsive, mobile-friendly site makes buying cosmetics on-the-go dead simple. Conversion & customer satisfaction are now way higher and OCC has a site that can grow rapidly with them.</p>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/OCC/OCC-desktop.jpg') }}" alt="Home page preview for OCCMakeup.com" title="Home page preview for OCCMakeup.com" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>Clean, simple and to the point while letting their content do the talking.</p>
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
				    
					    <a href="blood-brother-movie" class="col-md-6 col-sm-6 col-xs-6 previous"> <span class="arrow"><small>Previous</small> <span>Blood Brother</span></span> </a>	
					 
					 
					    <a href="harvard-school-of-public-health" class="col-md-6 col-sm-6 col-xs-6 align-right next pull-right"> <span class="arrow"><small>Next</small> <span>Harvard School of Public Health</span></span> </a>	
				    </div>
			    </div>
		    </section> <!-- .client-nav -->
@endsection