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
					   <a href="index.html" class="hidden-xs" id="fixed-logo-link"><img src="{{ asset('/images/site/logo.png') }}" alt="Paper Tiger Logo" title="Paper Tiger" /></a>
				   </div> <!-- .logo-wrapper -->
				   <div class="col-md-6 col-sm-8 col-xs-6 align-right">
					   <ul class="top-nav  hidden-xs">
						   	<li> <a href="work.html">Work</a> </li>
						   	<li class="hassubmenu"> 
							    <a href="#">Services</a> <span class="arrow"></span> 
							    <ul class="submenu">
							       <li> <a href="design.html" data-loader-position="right">Design</a> </li>
							       <li> <a href="branding.html" data-loader-position="right">Branding</a> </li>
							       <li> <a href="development.html" data-loader-position="right">Development</a> </li>
							       <li> <a href="consulting.html" data-loader-position="right">Consulting</a> </li>
							    </ul>
						   </li>
						   <li> <a href="company.html">Company</a> </li>
						   <li> <a href="contact.html">Contact</a> </li>
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
	    
	    <section id="work">
	        <section class="work-hero" data-stellar-background-ratio="0.5">
	            
	        	<header id="header">
				    <div class="container wider">
					    <div class="row">
						   <div class="col-md-6 col-sm-4 col-xs-6 logo-wrapper">
							   <a href="index.html"><img src="{{ asset('/images/site/logo.png') }}" width="98" height="98" title="Paper Tiger" alt="Paper Tiger Logo" /></a>
						   </div> <!-- .logo-wrapper -->
						   <div class="col-md-6 col-sm-8 col-xs-6 align-right">
							   <ul class="top-nav hidden-xs">
								   <li> <a href="work.html">Work</a> </li>
								   <li class="hassubmenu"> 
								     <a href="#">Services</a> <span class="arrow"></span> 
								     <ul class="submenu">
								       <li> <a href="design.html" data-loader-position="right">Design</a> </li>
								       <li> <a href="branding.html" data-loader-position="right">Branding</a> </li>
								       <li> <a href="development.html" data-loader-position="right">Development</a> </li>
								       <li> <a href="consulting.html" data-loader-position="right">Consulting</a> </li>
								     </ul>
								   </li>
								   <li> <a href="company.html">Company</a> </li>
								   <li> <a href="contact.html">Contact</a> </li>
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
					        <h1>Our Work</h1>
					        <p>Since 2008 we've designed and developed websites, mobile experiences and digital applications with our bare hands. Below are a handful of the latest examples that showcase the wide array of our work.</p>
				        </div>
			        </div>
		        
			        <a href="#work-full" class="explore-link">view work</a>
		        </div> <!-- .container -->
		        
		    </section> <!-- .work-hero -->
		    
		    <section id="work-full">
			    <ul>
			    	<li>
			    		<a href="vydia.html" style="background-image:url({{ asset('/images/uploads/vydia-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/vydia.png') }}" width="220" title="Vydia" alt="Vydia" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="the-new-york-times.html" style="background-image:url({{ asset('/images/uploads/nyt-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/nyt-logo.png') }}" width="220" title="The New York Times" alt="The New York Times" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="the-point-magazine.html" style="background-image:url({{ asset('/images/uploads/phenomenon/the-point-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/phenomenon/the-point.png') }}" width="220" title="The Point Magazine" alt="The Point Magazine" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="north-carolina-museum-of-art.html" style="background-image:url({{ asset('/images/uploads/NCMA/ncma_thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/NCMA/ncma-logo.png') }}" width="220" title="North Carolina Museum of Art" alt="North Carolina Museum of Art" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="jetpack.html" style="background-image:url({{ asset('/images/uploads/jetpack-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/jetpack.png') }}" width="220" title="Jetpack" alt="Jetpack" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="clinica-vida-bem-vinda.html" style="background-image:url({{ asset('/images/uploads/VBV-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/vbv.png') }}" width="220" title="Clínica VidaBemVinda" alt="Clínica VidaBemVinda" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="yoga-today.html" style="background-image:url({{ asset('/images/uploads/yogo-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/yt-logo.png') }}" width="220" title="Yoga Today" alt="Yoga Today" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="digitalundivided.html" style="background-image:url({{ asset('/images/uploads/did-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/did-logo.png') }}" width="220" title="digitalundivided" alt="digitalundivided" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="phenomenon.html" style="background-image:url({{ asset('/images/uploads/phenomenon/phen_thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/phenomenon/phen-logo-2.jpg') }}" width="220" title="Phenomenon" alt="Phenomenon" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="cold-pressed-raw.html" style="background-image:url({{ asset('/images/uploads/CPR/CPR-thumb.jpg') }}"> <span></span>
				    		<img src="{{ asset('/images/uploads/CPR/CPR-logo-2.png') }}" width="220" title="Cold Pressed Raw" alt="Cold Pressed Raw" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="future-hosting.html" style="background-image:url({{ asset('/images/uploads/futurehosting-thmb-bg.jpg') }}"> <span></span>
				    		<img src="{{ asset('/images/uploads/fh-logo.png') }}" width="220" title="Future Hosting" alt="Future Hosting" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="alternative-press.html" style="background-image:url({{ asset('/images/uploads/work1.png') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/client-logo-ap.png') }}" width="220" title="Alternative Press Magazine" alt="Alternative Press Magazine" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="blood-brother-movie.html" style="background-image:url({{ asset('/images/uploads/blood-brother_thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/blood-brother_logo.png') }}" width="220" title="Blood Brother" alt="Blood Brother" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="obsessive-compulsive-cosmetics.html" style="background-image:url({{ asset('/images/uploads/occ-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/OCC/OCC_logo.png') }}" width="220" title="Obsessive Compulsive Cosmetics" alt="Obsessive Compulsive Cosmetics" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="harvard-school-of-public-health.html" style="background-image:url({{ asset('/images/uploads/hsph-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/HSPH-logo.png') }}" width="220" title="Harvard School of Public Health" alt="Harvard School of Public Health" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="animal.html" style="background-image:url({{ asset('/images/uploads/animal-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/animal-logo.png') }}" width="220" title="Animal" alt="Animal" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="traveling-picture-show.html" style="background-image:url({{ asset('/images/uploads/tpsc.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/tpsc.png') }}" width="220" title="Traveling Picture Show" alt="Traveling Picture Show" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="get-right-music.html" style="background-image:url({{ asset('/images/uploads/grm-thumb-2.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/grm-logo-2.png') }}" width="220" title="Get Right Music" alt="Get Right Music" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="impactree.html" style="background-image:url({{ asset('/images/uploads/imp-thumb-2.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/imp-logo.png') }}" width="220" title="Impactree" alt="Impactree" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="world-wide-hearing.html" style="background-image:url({{ asset('/images/uploads/wwh_thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/wwh_logo.png') }}" width="220" title="World Wide Hearing" alt="World Wide Hearing" /> 
				    	</a> 
				    </li>
				    <li>
				    	<a href="giovanni-rana-restaurant.html" style="background-image:url({{ asset('/images/uploads/rana-thumb.jpg') }})"> <span></span>
				    		<img src="{{ asset('/images/uploads/rana-logo.png') }}" width="220" title="Giovanni Rana Restaurant" alt="Giovanni Rana Restaurant" /> 
				    	</a> 
				    </li>
			    </ul>
		    </section> <!-- #work-full -->
		    
		    <section id="past-projects">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-12">
						    
						    <h1>
						    	Past Projects <small>(we've been around for awhile)</small>
						    </h1>
						    
						    <div class="container">
							    <div class="row">
									<div class="col-md-3 col-sm-3 ">
									    <ul>
					                      
										    <li><a href="http://www.touchthewall.com/" target="_blank">Touch The Wall</a></li>
										    <li><a href="http://www.animalvfx.com/" target="_blank">Animal</a></li>
					                        <li>Spectre & Co.</li>
					                        <li><a href="http://www.happyfinish.com/usa" target="_blank">Happy Finish</a></li>
					                        <li><a href="http://thecrashreel.com/" target="_blank">The Crash Reel</a></li>
										    <li>Sarabeth's Restaurants</li>
					                        <li><a href="http://www.enodiacenter.com/" target="_blank">ENODIA Center for Balance</a></li>
					                        <li>Ralleyverse</li>
					                        <li><a href="http://self-titledmag.com/" target="_blank">Self-Titled Magazine</a></li>
										    <li>Domino Records</li>
										    <li><a href="http://www.parriswhittaker.com/" target="_blank">Parris Whittaker</a></li>
										    <li>SelectNY</li>
									    </ul>
								    </div> <!-- .col-md-3 -->
								    <div class="col-md-3 col-sm-3">
									    <ul>
					                        <li>Project Risk Analytics</li>
										    <li>Valet.com</li>
										    <li>Caliber Media Co.</li>
					                        <li><a href="http://animalmediagroup.com/" target="_blank">Animal Media Group</a></li>
										    <li>Lacrosse Playground</li>
					                  	    <li><a href="http://www.ctccreative.com/" target="_blank">C. Taylor Crothers</a></li>    
					                        <li><a href="http://www.customthreadsandsports.com/" target="_blank">Custom Threads & Sports</a></li>
					                        <li>Sony</li>
										    <li><a href="http://www.ferrarajerum.com/" target="_blank">Ferrara Jerum</a></li>
										    <li>Seaport Music Festival</li>
					                        <li>Mirror Mirror Makeup</li>
					                        <li><a href="http://www.eraluxe.com/" target="_blank">EraLuxe</a></li>
									    </ul>
								    </div> <!-- .col-md-3 -->
								    <div class="col-md-3 col-sm-3">
									    <ul>
					                        <li><a href="http://mikeperrystudio.com/" target="_blank">Mike Perry</a></li>
										    <li><a href="http://www.getrightmusic.com/" target="_blank">Get Right Music</a></li>
										    <li><a href="http://www.magicboxproductions.org/" target="_blank">Magic Box Productions</a></li>
										    <li>Cherokee Word for Water</li>
					                        <li><a href="http://gssolarinstallers.com/" target="_blank">G&S Solar Installers</a></li>
					                        <li><a href="http://www.cepterbiopartners.com/" target="_blank">Cepter Biopartners</a></li>
										    <li>ULTA Beauty</li>
					                        <li>Corner Table Restaurants</li>
					                        <li><a href="http://www.bobbybukamd.com/" target="_blank">Bobby Buka, MD</a></li>
										    <li>McLean MasterWorks</li>
					                        <li><a href="http://www.tauckfamilyfoundation.org/" target="_blank">Tauck Family Foundation</a></li>
										    <li>LMNOP</li>
									    </ul>
								    </div> <!-- .col-md-3 -->
								    <div class="col-md-3 col-sm-3">
									    <ul>
										    <li>Pabst Blue Ribbon</li>
										    <li><a href="http://www.archergray.com/" target="_blank">Archer Gray</li>
										    <li>S-Curve Records</li>
										    <li>The Budget Fashionista</li>
										    <li>Relativity Sports</li>
					                        <li><a href="http://creativitypost.com/" target="_blank">Creativity Post</a></li>
					                        <li><a href="http://www.brookhavenheart.com/" target="_blank">Brookhaven Heart</a></li>
										    <li>Anna Wolf</li>
										    <li>Arden Reed</li>
										    <li><a href="http://www.sarahpotempa.com/" target="_blank">Sarah Potempa</a></li>
										    <li>Zagara Wine Bar</li>
										    <li>Broadcast Music International (BMI)</li>
									    </ul>
								    </div> <!-- .col-md-3 -->
							    </div>
						    </div>
						    
					    </div>
				    </div>
			    </div>
    
			    <!-- Modal -->
				<div class="modal fade" id="past-project-modal">
					<div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-body"><div id="loader"></div><span></span></div>
					      <a href="#" class="close" data-dismiss="modal">Close</a>
					    </div> <!-- .modal-content -->
					</div><!-- .modal-dialog -->
				</div> <!-- .modal -->
			    <!-- Modal -->
			    
		    </section> <!-- #past-projects -->
		    
		    <section id="start-new-project">
			    <h1>Let's start a new project together!</h1>
			    <a href="contact.html" class="link-button no-arrow sans"> Get In Touch &raquo;</a>
		    </section> <!-- #start-new-project -->
		
		   	    <footer id="global-footer" class="no-margin">
		    <div class="container">
			    
			    <div class="row">
				    <div class="col-md-7">
					    
					    <ul class="footer-nav">
						    <li> <a href="index.html"> <img src="{{ asset('/images/site/logo-footer.png') }}" title="Paper Tiger" alt="Paper Tiger Logo" /> </a> </li>
						    <li> <a href="work.html">Work</a> </li>
						    <li> <a href="company.html">Company</a> </li>
						    <li> <a href="contact.html">Contact</a> </li>
						    <li class="last-text"> <a href="http://papertiger.workable.com/" target="_blank">Careers</a> </li>
						    <li class="socmed hidden-small"> <a href="https://twitter.com/papertigerftw" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a> </li>
						    <!--<li class="socmed hidden-small"> <a href="https://www.facebook.com/papertigeragency" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a> </li>
						    <li class="socmed hidden-small"> <a href="http://instagram.com/papertigerftw" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a> </li>
						    <li><div class="fb-like" data-href="http://facebook.com/papertigeragency" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" style="float: right; display:inline; padding: 8px 0 0 8px;"></div></li>-->
					    </ul>
					    
					    <ul class="footer-nav visible-xs no-padding">
						    <li class="socmed"> <a href="https://twitter.com/papertigerftw" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a> </li>
						    <!--<li class="socmed"> <a href="https://www.facebook.com/papertigeragency" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a> </li>
						    <li class="socmed"> <a href="http://instagram.com/papertigerftw" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a> </li>-->
					    </ul>
					    
				    </div> <!-- .col-md-7 -->
				    <div class="col-md-5 align-right">
					    <div class="copyright"><span>&copy; 2015 Paper Tiger. Made in New Jersey.</span></div>
				    </div> <!-- .col-md-5 -->
			    </div> <!-- .row -->
			    
		    </div>
		</footer> <!-- #global-footer -->
		    
	    </section> <!-- #work -->

    </div>
@endsection
