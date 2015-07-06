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
	    		
	        <section class="client-hero" data-stellar-background-ratio="0.5" style="background: url({{ asset('/images/uploads/wwh-top-bg.jpg') }})" > 
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
			        <img src="{{ asset('/images/uploads/wwh_logo.png') }}" class="client-logo" alt="World Wide Hearing" title="World Wide Hearing"/>
			        <a href="#client-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .about-hero -->
		    
		    <section id="client-content" class="no-title">
			    <div class="container">
				    <div class="row visible-xs">
					    <div class="col-md-12"> <h1>World Wide Hearing</h1> </div>
				    </div>
				    <div class="row">
						<div class="col-md-4 col-sm-4">
                          <p class="top-line">It's a shame that hearing aids are unaffordable for most people in the developing world. Thankfully World Wide Hearing exists to try and get hearing aids to children in need at a fraction of the cost. They came to us looking for a full re-brand as well as a mobile friendly site that can be accessed in multiple languages.</p>
					    </div>
					    <div class="col-md-4 col-sm-4">
                          <p>We built a fully responsive, retina-ready site that is powered by a mighty CMS. We designed a logo business cards and brochures. We made sure the site has multi-language support. We hope we did this incredible organization justice. Please visit World Wide Hearing to learn more about their mission and its importance in the developing world.</p>
					    </div>
					    <div class="col-md-4 col-sm-4 service-rendered-wrap">
					        <h3>World Wide Hearing</h3>
					        <p><strong>Services Rendered:</strong></p>
						    <div class="container">
						    	<div class="row the-list">
						    		<div class="col-md-6">
						    			<ul class="list">
									     
									     	<li> + <a style="color:#0077c0;" href="branding" data-loader-position="right">Branding Services</a> </li>
									     											   
										 
									     	<li> + <a style="color:#0077c0;" href="design" data-loader-position="right">Design</a> </li>
									     											   
										 
									     	<li> + <a style="color:#0077c0;" href="development" data-loader-position="right">Development</a> </li>

									    </ul>
						    		</div>
						    		<div class="col-md-6">
						    			<ul class="list">
  									     
									    </ul>
						    		</div>
						    	</div>	
						    </div>

						    <a href="http://wwhearing.org/" class="link-button no-arrow dark sans" target="_blank"> Launch Project </a>					    </div>
				    </div>
			    </div>
		    </section> <!-- #client-content -->

		    <section class="client-content pull-up">
			    <div class="container">		    
				
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/World_Wide_Hearing/WWH_responsive.jpg') }}" alt="Responsive design preview" title="Responsive design preview" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>Future-proofing this site was important, so a responsive site that scales down to any browser size was a must. Many third world countries who don't have access to desktop computers and heavily rely on getting the internet on their smart phones was a major consideration for making this site flexible across all platforms.</p>
					    </div>
				    </div>   
				    <div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/World_Wide_Hearing/wwh-logo.jpg') }}" alt="Logo and branding work for WWH done by Paper Tiger" title="Logo and branding work for WWH done by Paper Tiger" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>We created a simple, unique mark for WWH along with all of the initial print collateral needed to run their business effectively.</p>
					    </div>
				    </div>   
				    <div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/World_Wide_Hearing/wwh-illustrations.jpg') }}" alt="Illustrations for World Wide Hearing" title="Illustrations for World Wide Hearing" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>Light, airy & self-explanatory. We jumped at the opportunity to create illustrations for World Wide Hearing that were able to translate across all languages.</p>
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
				    
					    <a href="impactree" class="col-md-6 col-sm-6 col-xs-6 previous"> <span class="arrow"><small>Previous</small> <span>Impactree</span></span> </a>	
					 
					 
					    <a href="giovanni-rana-restaurant" class="col-md-6 col-sm-6 col-xs-6 align-right next pull-right"> <span class="arrow"><small>Next</small> <span>Giovanni Rana Restaurant</span></span> </a>	
				    </div>
			    </div>
		    </section> <!-- .client-nav -->
@endsection