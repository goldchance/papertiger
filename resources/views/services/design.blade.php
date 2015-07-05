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
	        <section class="service-hero interface" data-stellar-background-ratio="0.5">

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
					        <h1>Design</h1>
					        <p>It is in every part of our process. Designing for purpose directs our user experience, technological, and creative solutions. But, our creative design goal for every project is to make the work relatable to the audience. It addresses a tone that is aligned with your objectives and is welcomed by the user. </p>
				        </div>
			        </div>

			        <a href="#service-content" class="explore-link">explore</a>
		        </div> <!-- .container -->

		    </section> <!-- .service-hero -->

		    <section class="service-logos logos-design">
		        <div class="container">
			        <div class="row">
				        <div class="col-md-12">
		      	        	        <img src="{{ asset('/images/site/design-logo.jpg') }}" class="img-responsive"  />
				        </div>
			        </div>
		        </div> <!-- .container -->
		    </section> <!-- .service-logos -->

			 <section id="service-content" class="design">
			    <div class="container">
				    <div class="row">
                      <div class="col-md-12"> <h1 class="pull-up">Create something useful.<br/>Create something beautiful.</h1> </div>
				    </div>
				    <div class="row">
                      <div class="col-md-12"> <hr class="red-line"/> </div>
				    </div>
				    <div class="row col-new-service">
					    <div class="col-md-6">
						    <p class="top-line">We started this company because we’re visual people… we were the ones doodling during lectures and the ones who took art classes for more than a simple credit. We try our damnedest day by day to make the world a prettier place through design, but there’s more to it than just making a website that’s easy on the eyes. </p>
					    </div>
					    <div class="col-md-6">

                        <div id="wufoo-z9a3c110io94uj">
							Fill out my <a href="https://papertiger.wufoo.com/forms/z9a3c110io94uj">online form</a>.
						</div>

					    </div>
				    </div>

			    </div>
		    </section> <!-- #service-content -->

		    <section id="service-more" class="design">
		        <div class="branding-background"></div>
				<div class="container">
			    </div>
			</section>

		    <section class="service-hero iaux">

		        <div class="hero container">
			        <div class="row">
				        <div class="col-md-12">
					        <h1>Information Architecture & User Experience Design</h1>
					        <p>IA &amp; UX design at Paper Tiger is all about the big picture. Every project that comes in our door starts with a thorough IA &amp; UX process that, in some cases, takes longer than any other phase of the project. It allows for quick changes to content and high-level conversations about what your new site has to do to be successful.</p>
				        </div>
			        </div>

			        <span class="explore-link-wrap"><a href="#service-content-child" class="explore-link">explore</a></span>
		        </div> <!-- .container -->

		    </section>

			 <section id="service-content-child">
			    <div class="container new-iaux">
				    <div class="row">
					    <div class="col-md-12"> <h1 class="pull-up">Plan, plan &amp; plan some more... <br>we’re good at it.</h1> </div>
				    </div>
				    <div class="row">
                      			<div class="col-md-12"> <hr class="red-line"> </div>
				    </div>
				    <div class="row">
					    <div class="col-md-4 col-sm-6">
						    <p class="top-line">It starts with a conversation between our team and yours. We define your top conversion points, user funnels &amp; ultimate goals. In the olden days, there were wireframes that would form the skeleton of the site. These days we create a working prototype of the site that allows you to click through to the different sections and get an early feel for the UX (user experience). We can analyze how the site will move with a tangible example, built on your vision and our expertise. With mobile browsing making up 15% (last we checked) of internet traffic, we take care to ensure that this large and growing audience segment is taken care of. Responsive and adaptive design and development is about as common to us as it is for the desktop.  </p>
					    </div>
					    <div class="col-md-4 col-md-offset-1 col-sm-6">
						    <p>Overall, our goal here is to create the foundation and frame for the site - to make sure it will let users easily understand what they are seeing and get to where you want them to be.</p>
						    <ul class="list">
							    <li class="title">Paper Tiger Usability Tools</li>
                                <li>Rapid Prototyping</li>
							    <li>Analytics</li>
							    <li>Usability Studies</li>
							    <li>A/B Testing</li>
							    <li>Conversion Optimization</li>
							    <li>Content Generation</li>
							    <li>Site "Blueprint"</li>
						    </ul>
					    </div>
				    </div>
			    </div>
		    </section>
		    <section id="service-more" class="iaux">
		        <div class="blueprint"></div>
			    <div class="container">
			    </div>
		    </section>


		    <section class="service-nav">
			    <div class="container">
				    <div class="row">
					    <a href="consulting" class="col-md-6 col-sm-6 consulting previous"> <span>Consulting</span> </a>
					    <a href="development" class="col-md-6 col-sm-6 align-right usability next"> <span>Development</span> </a>
				    </div>
			    </div>
		    </section> <!-- .service-nav -->
		    <section id="work-content">

			    <div class="container">
				    <div class="row">
					    <div class="col-md-12"> <h1>Selected Design Work</h1> </div>
				    </div>
				    <div class="row">
					    <div class="col-md-4">
						    <p class="top-line">Here are a few examples of projects where design played a major role in the outcome.</p>
					    </div>
				    </div>
			    </div> <!-- .container -->

			    <div id="work-full">
				    <ul>
					  	<li>
					  		<a href="the-new-york-times" style="background-image:url({{ asset('/images/uploads/nyt-thumb.jpg') }})"> 
					  			<span></span>
					  			<img src="{{ asset('/images/uploads/nyt-logo.png') }}" alt="The New York Times" /> 
					  		</a> 
					  	</li>
					  	<li>
					  		<a href="harvard-school-of-public-health" style="background-image:url({{ asset('/images/uploads/hsph-thumb.jpg') }})"> 
					  			<span></span>
					  			<img src="{{ asset('/images/uploads/HSPH-logo.png') }}" alt="Harvard School of Public Health" /> 
					  		</a> 
					  	</li>
					  	<li>
					  		<a href="north-carolina-museum-of-art" style="background-image:url({{ asset('/images/uploads/NCMA/ncma_thumb.jpg') }})"> 
					  			<span></span>
					  			<img src="{{ asset('/images/uploads/NCMA/ncma-logo.png') }}" alt="North Carolina Museum of Art" /> 
					  		</a> 
					  	</li>
					  	<li>
					  		<a href="future-hosting" style="background-image:url({{ asset('/images/uploads/futurehosting-thmb-bg.jpg') }})"> 
					  			<span></span>
					  			<img src="{{ asset('/images/uploads/fh-logo.png') }}" alt="Future Hosting" /> 
					  		</a> 
					  	</li>
					  	<li>
					  		<a href="yoga-today" style="background-image:url({{ asset('/images/uploads/yogo-thumb.jpg') }})"> 
					  			<span></span>
					  			<img src="{{ asset('/images/uploads/yt-logo.png') }}" alt="Yoga Today" /> 
					  		</a> 
					  	</li>
					  	<li>
					  		<a href="digitalundivided" style="background-image:url({{ asset('/images/uploads/did-thumb.jpg') }})"> 
					  			<span></span>
					  			<img src="{{ asset('/images/uploads/did-logo.png') }}" alt="digitalundivided" /> 
					  		</a> 
					  	</li>
					  	<li>
					  		<a href="blood-brother-movie" style="background-image:url({{ asset('/images/uploads/blood-brother_thumb.jpg') }})"> 
					  			<span></span>
					  			<img src="{{ asset('/images/uploads/blood-brother_logo.png') }}" alt="Blood Brother" /> 
					  		</a> 
					  	</li>
					  	<li>
					  		<a href="impactree" style="background-image:url({{ asset('/images/uploads/imp-thumb-2.jpg') }})"> 
					  			<span></span>
					  			<img src="{{ asset('/images/uploads/imp-logo.png') }}" alt="Impactree" /> 
					  		</a> 
					  	</li>
					  	<li>
					  		<a href="alternative-press" style="background-image:url({{ asset('/images/uploads/work1.png') }})"> 
					  			<span></span>
					  			<img src="{{ asset('/images/uploads/client-logo-ap.png') }}" alt="Alternative Press Magazine" /> 
					  		</a> 
					  	</li>
				    </ul>
			    </div> <!-- #work-full -->

		    <section id="start-new-project">
			    <h1>Let's start a new project together!</h1>
			    <a href="contact" class="link-button no-arrow sans"> Get In Touch »</a>
		    </section>
					    <footer id="global-footer" class="no-margin">
		    <div class="container">

			    <div class="row">
				    <div class="col-md-7">

					    <ul class="footer-nav">
						    <li> <a href="index"> <img src="{{ asset('/images/site/logo-footer.png') }}" title="Paper Tiger" alt="Paper Tiger Logo" /> </a> </li>
						    <li> <a href="work">Work</a> </li>
						    <li> <a href="company">Company</a> </li>
						    <li> <a href="contact">Contact</a> </li>
						    <li class="last-text"> <a href="http://papertiger.workable.com/" target="_blank">Careers</a> </li>
						    <li class="socmed hidden-small"> <a href="https://twitter.com/papertigerftw" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a> </li>
					    </ul>

					    <ul class="footer-nav visible-xs no-padding">
						    <li class="socmed"> <a href="https://twitter.com/papertigerftw" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a> </li>
					    </ul>

				    </div> <!-- .col-md-7 -->
				    <div class="col-md-5 align-right">
					    <div class="copyright"><span>&copy; 2015 Paper Tiger. Made in New Jersey.</span></div>
				    </div> <!-- .col-md-5 -->
			    </div> <!-- .row -->

		    </div>
		</footer> <!-- #global-footer -->

		    </section> <!-- #work-content -->
	    </section> <!-- #service -->

    </div>
@endsection