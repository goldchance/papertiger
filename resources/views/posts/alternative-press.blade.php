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
	    		
	        <section class="client-hero" data-stellar-background-ratio="0.5" style="background: url({{ asset('/images/uploads/header-client-ap.jpg') }});" > 
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
			        <img src="{{ asset('/images/uploads/client-logo-ap.png') }}" class="client-logo" alt="Alternative Press" title="Alternative Press"/>
			        <a href="#client-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .about-hero -->
		    
		    <section id="client-content" class="no-title">
			    <div class="container">
				    <div class="row visible-xs">
					    <div class="col-md-12"> <h1>Alternative Press Magazine</h1> </div>
				    </div>
				    <div class="row">
						<div class="col-md-4 col-sm-4">
                          <p class="top-line">Alternative Press needed a new site that pushed beyond what their competition was doing. When you're in the fast paced world of news and media, even a site that's 3 years old is ready to kick the bucket. Paper Tiger worked with AP on the last redesign back in 2009 and the site was great by most standards, but everyone knew the time was coming to create the next great thing for Alternative Press users - a fresh content-sensitive design that was fast and worked on all of the devices that we have at our disposal.</p>
					    </div>
					    <div class="col-md-4 col-sm-4">
                          <p>Paper Tiger delivered a fully responsive site with all the bells and whistles (and drums and vocals). From the grid based listings to the custom galleries and full-screen viewer, we worked together to not only re-imagine how altpress.com should look, but also how it should be built from the ground up. Our Expression Engine experts combed through every inch of the site, refining rough edges and rebuilding where necessary. The new site is like a well tuned guitar... in perfect harmony with its user.</p>
					    </div>
					    <div class="col-md-4 col-sm-4 service-rendered-wrap">
					        <h3>Alternative Press Magazine</h3>
					        <p><strong>Services Rendered:</strong></p>
						    <div class="container">
						    	<div class="row the-list">
						    		<div class="col-md-6">
						    			<ul class="list">
									     
									     	<li> + <a style="color:#;" href="consulting" data-loader-position="right">Consulting</a> </li>
									     											   
										 
									     	<li> + <a style="color:#;" href="design" data-loader-position="right">Design</a> </li>
									     											   
										 
									     	<li> + <a style="color:#;" href="development" data-loader-position="right">Development</a> </li>
									     											   
										 
									    </ul>
						    		</div>
						    		<div class="col-md-6">
						    			<ul class="list">

									    </ul>
						    		</div>
						    	</div>	
						    </div>
    
						    <a href="http://www.altpress.com/" class="link-button no-arrow dark sans" target="_blank"> Launch Project </a>					    </div>
				    </div>
			    </div>
		    </section> <!-- #client-content -->

		    <section class="client-content pull-up">
			    <div class="container">		    
				
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/altpress-home.jpg') }}" alt="Homepage design" title="Homepage design" />
						    </div>
					    </div>
				    </div>   
						 
									
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/Alt_Press/ap-responsive.jpg') }}" alt="Responsive preview" title="Responsive preview" />
						    </div>
					    </div>
				    </div>   
						 
									
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/altpress-gallery.jpg') }}" alt="Sub page design" title="Sub page design" />
						    </div>
					    </div>
				    </div>   
						 
									  
			    </div>  
		    </section> <!-- #client-content -->
		    
			<section class="testimonials">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12">
					        <h1>&ldquo;They thoroughly understand current industry trends and youth culture and will quickly steer you away from making huge, financial blunders that could get you fired from your job six months down the line. Thank you, Paper Tiger!&rdquo;</h1>
					        <div class="people">
					            <img src="{{ asset('/images/uploads/Testimonials/alt-press-quote.gif') }}" alt="Mike Shea, AP" class="img-circle" />
							    <span>Mike Shea <small>Alternative Press</small></span>
							</div>
					    </div>
				    </div>
				</div>
		    </section> <!-- .testimonials -->
		    
		    <section class="client-content pull-up">
			    <div class="container">
			      
			    </div>  
		    </section> <!-- #client-content -->
		    
		    <section class="client-nav">
			    <div class="container">
				    <div class="row">
				    
					    <a href="future-hosting" class="col-md-6 col-sm-6 col-xs-6 previous"> <span class="arrow"><small>Previous</small> <span>Future Hosting</span></span> </a>	
					 
					 
					    <a href="blood-brother-movie" class="col-md-6 col-sm-6 col-xs-6 align-right next pull-right"> <span class="arrow"><small>Next</small> <span>Blood Brother</span></span> </a>	
				    </div>
			    </div>
		    </section> <!-- .client-nav -->
@endsection