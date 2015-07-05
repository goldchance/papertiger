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
	    		
	        <section class="client-hero" data-stellar-background-ratio="0.5" style="background: url({{ asset('/images/uploads/futurehosting-top-bg-2.jpg') }})" > 
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
			        <img src="{{ asset('/images/uploads/fh-logo.png') }}" class="client-logo" alt="Future Hosting" title="Future Hosting"/>
			        <a href="#client-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .about-hero -->
		    
		    <section id="client-content" class="no-title">
			    <div class="container">
				    <div class="row visible-xs">
					    <div class="col-md-12"> <h1>Future Hosting</h1> </div>
				    </div>
				    <div class="row">
						<div class="col-md-4 col-sm-4">
                          <p class="top-line">Future Hosting came to Paper Tiger in need of a redesign of their site. ​With the hosting market growing increasingly competitive, they were in need of an upgrade that would rightfully position them alongside the best in the industry. They also required the site be responsive, since so many of their developer and IT customers work with multiple devices throughout the day.</p>
					    </div>
					    <div class="col-md-4 col-sm-4">
                          <p>Paper Tiger delivered a brand package that's so futuristic, it's historic. We worked closely with the team at Future Hosting to ensure the new site and branding exceeded their expectations. In the end, the site has a few sweet responsive touches and the brand literally looks like it could be traveling into the future... how's that for forward thinking?</p>
					    </div>
					    <div class="col-md-4 col-sm-4 service-rendered-wrap">
					        <h3>Future Hosting</h3>
					        <p><strong>Services Rendered:</strong></p>
						    <div class="container">
						    	<div class="row the-list">
						    		<div class="col-md-6">
						    			<ul class="list">
									     
									     	<li> + <a style="color:#ee2140;" href="branding" data-loader-position="right">Branding Services</a> </li>
									     											   
										 
									     	<li> + <a style="color:#ee2140;" href="consulting" data-loader-position="right">Consulting</a> </li>
									     											   
										 
									     	<li> + <a style="color:#ee2140;" href="design" data-loader-position="right">Design</a> </li>

									    </ul>
						    		</div>
						    		<div class="col-md-6">
						    			<ul class="list">
									     
									     	<li> + <a style="color:#ee2140;" href="development" data-loader-position="right">Development</a> </li>
										   									     
									    </ul>
						    		</div>
						    	</div>	
						    </div>
 
						    <a href="http://futurehosting.com/" class="link-button no-arrow dark sans" target="_blank"> Launch Project </a>					    </div>
				    </div>
			    </div>
		    </section> <!-- #client-content -->

		    <section class="client-content pull-up">
			    <div class="container">		    
				
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/futurehosting-home.jpg') }}" alt="Homepage design" title="Homepage design" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>Server and hosting imagery can grow outdated very quickly. So instead of stock photos we did hand drawn illustrations to represent different equipment and services. This helps future-proof the site as server styles change over the next few years.</p>
					    </div>
				    </div>   
				    <div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/fh-mobile.jpg') }}" alt="Responsive preview" title="Responsive preview" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>The responsive site resizes for most popular viewports. This site looks as good on an Android smartphone as it does on an iPad tablet.</p>
					    </div>
				    </div>   
				    <div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/portfolio-detail.jpg') }}" alt="Sub page design" title="Sub page design" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>Future Hosting had an existing ordering system that needed to be updated to match the new styles. Paper Tiger was able to work around their infrastructure to roll out the redesign without disrupting business.</p>
					    </div>
				    </div>   
				  
			    </div>  
		    </section> <!-- #client-content -->

		    <section class="client-content pull-up">
			    <div class="container">
			    
				    <div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/futurehosting-branding.jpg') }}" alt="Logo and branding work" title="Logo and branding work" />
						    </div>
					    </div>
				    </div>   
						  
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/futurehosting-illustration.jpg') }}" alt="Illustrations by Paper Tiger" title="Illustrations by Paper Tiger" />
						    </div>
					    </div>
				    </div>   
			  
			    </div>  
		    </section> <!-- #client-content -->
		    
		    <section class="client-nav">
			    <div class="container">
				    <div class="row">
				    
					    <a href="cold-pressed-raw" class="col-md-6 col-sm-6 col-xs-6 previous"> <span class="arrow"><small>Previous</small> <span>Cold Pressed Raw</span></span> </a>	
					 
					 
					    <a href="alternative-press" class="col-md-6 col-sm-6 col-xs-6 align-right next pull-right"> <span class="arrow"><small>Next</small> <span>Alternative Press Magazine</span></span> </a>	
				    </div>
			    </div>
		    </section> <!-- .client-nav -->
@endsection