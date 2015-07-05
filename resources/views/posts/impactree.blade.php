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
	    		
	        <section class="client-hero" data-stellar-background-ratio="0.5" style="background: url({{ asset('/images/uploads/imp-top_banner-2.jpg') }})" > 
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
			        <img src="{{ asset('/images/uploads/imp-logo.png') }}" class="client-logo" alt="Impactree" title="Impactree"/>
			        <a href="#client-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .about-hero -->
		    
		    <section id="client-content" class="no-title">
			    <div class="container">
				    <div class="row visible-xs">
					    <div class="col-md-12"> <h1>Impactree</h1> </div>
				    </div>
				    <div class="row">
						<div class="col-md-4 col-sm-4">
                          <p class="top-line">A group of entrepreneurs from Harvard and MIT Media Lab came to Paper Tiger (flattering, right?) with an incredibly ambitious idea. They had created a unique technology for measuring personal impact in the world of social organization and charity. Now they just needed a brand and a site design. Impactree.org includes full user profiles, notifications and a messaging platform for sharing and receiving donations from members and brands. The goal is for users to easily engage other users in the support of charitable causes, so seamless UI was a necessity.</p>
					    </div>
					    <div class="col-md-4 col-sm-4">
                          <p>We delivered a final brand and site design full of illustration, color and energy. We worked closely with the conceptual team at Impactree to create a site that allows users to interact, share and create in a way that has never been done before. Paper Tiger handled all of the information architecture, user experience design, branding, and user interface design. We handed off dozens of PSDs full of site designs and illustrations and the Impactree coding team worked their magic. Prior to launch, we have been actively involved in the design QA and are looking forward to launching a site unlike anything we've ever seen before.</p>
					    </div>
					    <div class="col-md-4 col-sm-4 service-rendered-wrap">
					        <h3>Impactree</h3>
					        <p><strong>Services Rendered:</strong></p>
						    <div class="container">
						    	<div class="row the-list">
						    		<div class="col-md-6">
						    			<ul class="list">
									     
									     	<li> + <a style="color:#;" href="branding" data-loader-position="right">Branding Services</a> </li>
									     											   
										 
									     	<li> + <a style="color:#;" href="consulting" data-loader-position="right">Consulting</a> </li>
									     											   
										 
									     	<li> + <a style="color:#;" href="design" data-loader-position="right">Design</a> </li>

									    </ul>
						    		</div>
						    		<div class="col-md-6">
						    			<ul class="list">
 									     
									    </ul>
						    		</div>
						    	</div>	
						    </div>

						    <a href="https://impactree.org/" class="link-button no-arrow dark sans" target="_blank"> Launch Project </a>					    </div>
				    </div>
			    </div>
		    </section> <!-- #client-content -->

		    <section class="client-content pull-up">
			    <div class="container">		    
				
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/imp-home.jpg') }}" alt="Design and illustration for Impactree's homepage" title="Design and illustration for Impactree's homepage" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/impactree/impactree.jpg') }}" alt="Branding and illustration work for Impactree" title="Branding and illustration work for Impactree" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/imp-profiles.jpg') }}" alt="Infographics and page designs" title="Infographics and page designs" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/imp-illus.jpg') }}" alt="Icon designs" title="Icon designs" />
						    </div>
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
				    
					    <a href="get-right-music" class="col-md-6 col-sm-6 col-xs-6 previous"> <span class="arrow"><small>Previous</small> <span>Get Right Music</span></span> </a>	
					 
					 
					    <a href="world-wide-hearing" class="col-md-6 col-sm-6 col-xs-6 align-right next pull-right"> <span class="arrow"><small>Next</small> <span>World Wide Hearing</span></span> </a>	
				    </div>
			    </div>
		    </section> <!-- .client-nav -->
@endsection