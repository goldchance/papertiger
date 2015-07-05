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
	    		
	        <section class="client-hero" data-stellar-background-ratio="0.5" style="background: url({{ asset('/images/uploads/CPR/CPR-banner.jpg') }})" > 
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
			        <img src="{{ asset('/images/uploads/CPR/CPR-logo-2.png') }}" class="client-logo" alt="Cold Pressed Raw" title="Cold Pressed Raw"/>
			        <a href="#client-content" class="explore-link">explore</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .about-hero -->
		    
		    <section id="client-content" class="no-title">
			    <div class="container">
				    <div class="row visible-xs">
					    <div class="col-md-12"> <h1>Cold Pressed Raw</h1> </div>
				    </div>
				    <div class="row">
						<div class="col-md-4 col-sm-4">
  							<p class="top-line">We are big fans of fruits and vegetables. We are also big fans of drinking. Science has combined the two into a new technology that actually <i>improves</i> your health. CPR is a Miami based haute juice company that allows customers to order from a selection of pre-designed cleanses or individual juices &#224; la carte and will deliver them fresh to anyone in the Miami area. At least until they expand to other locales. </p>
					    </div>
					    <div class="col-md-4 col-sm-4">
                          <p>The site's branding, UX, and design was created from scratch and built it into a custom e-commerce store. Most notably, we are proud of the clean and refreshing design. A logo to remind you that you are buying medicine from nature's pharmacy and a view of the nutrient rich and delicious juices. The fonts and navigation create a sense of space and growth. Minimalism at its finest. </p>
					    </div>
					    <div class="col-md-4 col-sm-4 service-rendered-wrap">
					        <h3>Cold Pressed Raw</h3>
					        <p><strong>Services Rendered:</strong></p>
						    <div class="container">
						    	<div class="row the-list">
						    		<div class="col-md-6">
						    			<ul class="list">
									     
									     	<li> + <a style="color:#60a500;" href="branding" data-loader-position="right">Branding Services</a> </li>
									     											   
										 
									     	<li> + <a style="color:#60a500;" href="consulting" data-loader-position="right">Consulting</a> </li>
									     											   
										 
									     	<li> + <a style="color:#60a500;" href="design" data-loader-position="right">Design</a> </li>

									    </ul>
						    		</div>
						    		<div class="col-md-6">
						    			<ul class="list">

									     	<li> + <a style="color:#60a500;" href="development" data-loader-position="right">Development</a> </li>
										   									     
									    </ul>
						    		</div>
						    	</div>	
						    </div>

						    <a href="http://coldpressedraw.com/" class="link-button no-arrow dark sans" target="_blank"> Launch Project </a>					    </div>
				    </div>
			    </div>
		    </section> <!-- #client-content -->

		    <section class="client-content pull-up">
			    <div class="container">		    
				
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/CPR/CPR-index.jpg') }}" alt="Cold Pressed Raw homepage design" title="Cold Pressed Raw homepage design" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>Fresh fruits and vegetables have an innate ability to sell themselves. We put them to work. </p>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/CPR/CPR-order.jpg') }}" alt="Clean designed ordering page for CPR" title="Clean designed ordering page for CPR" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>We've reduced the sales funnel to only a few clicks. You get a feel for exactly what you're getting and a clear picture of what to be excited for. </p>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/CPR/CPR-responsive.jpg') }}" alt="Responsive preview of Cold Pressed Raw homepage" title="Responsive preview of Cold Pressed Raw homepage" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>No surprise here, this site is responsive. Everyone uses mobile devices and we like our sites to be used by everyone.</p>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-12">
					        <div class="item-shots pull-up" style=" ">
							    <img src="{{ asset('/images/uploads/CPR/CPR-branding.jpg') }}" alt="Branding, logo and bottle designs for CPR" title="Branding, logo and bottle designs for CPR" />
						    </div>
					    </div>
				    </div>   
					<div class="row">
					    <div class="col-md-8 col-md-offset-2">
					        <p>We did it all from scratch. Name conceptualization, branding, bottle design, print collateral design, you name it. We think it came out sharp.</p>
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
				    
					    <a href="phenomenon" class="col-md-6 col-sm-6 col-xs-6 previous"> <span class="arrow"><small>Previous</small> <span>Phenomenon</span></span> </a>	
					 
					 
					    <a href="future-hosting" class="col-md-6 col-sm-6 col-xs-6 align-right next pull-right"> <span class="arrow"><small>Next</small> <span>Future Hosting</span></span> </a>	
				    </div>
			    </div>
		    </section> <!-- .client-nav -->
@endsection