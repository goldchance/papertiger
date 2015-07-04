;(function( $ ) {
	
	var pageRender = {
		
		regenerateDOM : function(data) {
			return String(data).replace(/<\!DOCTYPE[^>]*>/i, '')
					.replace(/<(html|head|title|meta|body|script)([\s\>])/gi,'<span data-class="span-$1"$2')
					.replace(/<\/(html|head|title|meta|body|script)\>/gi,'</span>');
		}, 
		
		render : function(data, page) {
		
			var bodyContent = pageRender.regenerateDOM(data);
			
			$('.global-wrapper').empty()
				.hide()
				.html( $(bodyContent)
					.find('.global-wrapper')
					.html())
				.fadeIn(700, function() {
					pageRender.reCall();
				});
			
			$('body').attr('class', '').attr('class', $(bodyContent).find('span[data-class="span-body"]').attr('class'));

			//pageRender.init();
			$(window).trigger('load');
			
			if($(window).scrollTop() >= 100) {
				 $('html, body').stop(true,true).animate({ scrollTop : 0 }, 800);
			}
		},
		
		fetchTitle : function(data) {
		
			var bodyContent = pageRender.regenerateDOM(data);
			
			return $(bodyContent).find('span[data-class="span-title"]').html();
		},
		
		renderMap : function() {
			var styles = [{"featureType":"landscape.man_made","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","stylers":[{"visibility":"off"}]},{"featureType":"poi.attraction","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"saturation":-100},{"lightness":-100},{"gamma":9.99},{"color":"#000000"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"color":"#262626"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#2f2d2c"}]},{"featureType":"administrative","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#262626"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{},{"featureType":"administrative.province","elementType":"geometry","stylers":[{"color":"#000000"},{"visibility":"off"}]},{"featureType":"road","elementType":"labels.text","stylers":[{"visibility":"on"},{"color":"#000000"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#262626"}]} ,
			{
			    featureType: "poi.business",
			    elementType: "labels",
			    stylers: [{ visibility: "off" }]
			}];   
			
			if($('#gmaps').size() > 0) {
			
				var ptLat = 40.71435,
					ptLon = -74.00597,
					options = {
						scrollwheel: false,  
						mapTypeControlOptions: { mapTypeIds: ['Styled'] },  
						center: new google.maps.LatLng(ptLat, ptLon),  
						zoom: 9,  
						disableDefaultUI: true,   
						mapTypeId: 'Styled'  
					};  
				
				var div = document.getElementById('gmaps');  
				var map = new google.maps.Map(div, options);  
				var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });  
				map.mapTypes.set('Styled', styledMapType);  
			
			
				google.maps.event.addDomListener(window, 'resize', function() {
				    map.setCenter(new google.maps.LatLng(ptLat, ptLon));
				});
			}
		},

		reCall : function() {
			
			$('.global-wrapper').waitForImages(function() {
				/* Adjust Position Work Grid */
				$('#work-full ul li a img').each(function() {

					$(this).css({
						'margin-top': -($(this).outerHeight()/2) + 'px',
						'margin-left': -($(this).outerWidth()/2) + 'px'
					});
				});
			});
				
			/* About Grid */
			var exploreGrid   = $('#explore-item ul');
			var exploreFilter = $('#about #explore-section > .container ul.filter a');
			
			$('#explore-item .wrapper:not(.service)').each(function() {
				
				$(this).find('.title').css({
					'margin-top': -( $(this).find('.title').outerHeight() / 2 ) + 'px'
				});
			});
			
			exploreGrid.isotope({ layoutMode : 'fitRows' });
			exploreFilter.click(function(){
				
				exploreFilter.removeClass('active');
				$(this).addClass('active');
				exploreGrid.isotope({ 
					filter: $(this).attr('data-filter')
				});
				
				return false;
			});

			/* LocalScroll Hack */
			$.localScroll.defaults.offset = -104;
			$('.explore-link').on('click', function(e){
				$.localScroll.scroll( e, this, $.localScroll.defaults );
			});

			/* Render Facebook button */
			if(typeof FB !== 'undefined') {
				FB.XFBML.parse();
			}

			/* Render Wufoo Form */
			var z1l8cdg71a3tx25;
			(function(d, t) {
				var s = d.createElement(t), 
				    options = {
					'userName':'papertiger', 
					'formHash':'z1l8cdg71a3tx25', 
					'autoResize':true,
					'height':'880',
					'async':true,
					'host':'wufoo.com',
					'header':'show', 
					'ssl':false
				};
				s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
				s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
				try { z1l8cdg71a3tx25 = new WufooForm();z1l8cdg71a3tx25.initialize(options);z1l8cdg71a3tx25.display(); } catch (e) {}};
				var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
			})(document, 'script');

			var z9a3c110io94uj;
			(function(d, t) {
				var s = d.createElement(t), options = {
					'userName':'papertiger', 
					'formHash':'z9a3c110io94uj', 
					'autoResize':true,
					'height':'437',
					'async':true,
					'host':'wufoo.com',
					'header':'show', 
					'defaultValues': 'field4='+document.URL,
					'ssl':false};
				s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
				s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
				try { z9a3c110io94uj = new WufooForm();z9a3c110io94uj.initialize(options);z9a3c110io94uj.display(); } catch (e) {}};
				var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
			})(document, 'script');
		},
		
		showLoader : function(owner) {
		
			// Set loading animation position
			var canvas     = $('#canvasloader-container');
			    pos        = owner.data('loader-position');
				posCenter  = owner.offset().left + (owner.outerWidth() / 2) - 8,
			    posTop     = (owner.find('img').size()) ? 
			    				(owner.find('img').offset().top + owner.find('img').outerHeight()) : 
			    				owner.offset().top;
			    posRight   = owner.offset().left + owner.outerWidth();
			    posLeft    = owner.offset().left;
			
			canvas.css({
				'top': posTop + 'px',
				'opacity': 0
			});
			
			if(pos) {
				
				if(pos == 'top') {
					
					canvas
						.css({ 'left': posCenter + 'px' })
						.stop(true,true)
						.animate({ 'top': '-=20px', 'opacity': 1 }, 200);
						
				} else if(pos == 'right') {
					
					canvas
						.css({ 'left': posRight + 'px' })
						.stop(true,true)
						.animate({ 'left': '+=20px', 'opacity': 1 }, 200);
				
				} else if(pos == 'left') {
					
					canvas
						.css({ 'left': posLeft + 'px' })
						.stop(true,true)
						.animate({ 'left': '-=20px', 'opacity': 1 }, 200);
				
				} else if(pos == 'shift-left') {
					
					canvas
						.css({ 'left': posLeft + 'px' })
						.stop(true,true)
						.animate({ 'left': '-=14px', 'top': '+=3px', 'opacity': 1 }, 200);
				
				} else if(pos == 'none') {
					
					canvas.css('opacity', 0);
				
				} else if(pos == 'button-center') {
					
					canvas
						.css({ 'left': posCenter + 'px' })
						.stop(true,true)
						.animate({ 'top': '+=15px', 'opacity': 1 }, 200);
				
				} else {
					canvas
						.css({ 'left': posCenter + 'px' })
						.stop(true,true)
						.animate({ 'top': '+=20px', 'opacity': 1 }, 200);
				}
				
			} else {
				canvas
					.css({ 'left': posCenter + 'px' })
					.stop(true,true)
					.animate({ 'top': '+=20px', 'opacity': 1 }, 200);
			}
		},
		
		init : function() {
			
			/* Canvas Loader */
			var canvasDiameter = (window.devicePixelRatio > 1) ? 34 : 17,
				canvasLoader = new CanvasLoader('canvasloader-container');
				canvasLoader.setColor('#cc3131'); 
				canvasLoader.setDiameter(canvasDiameter); 
				canvasLoader.setDensity(44); 
				canvasLoader.setRange(1.2);
				canvasLoader.setFPS(38); 
				canvasLoader.show(); 

			/* Fixed Navigation */
			$(window).on('scroll', function() {
				if($(window).scrollTop() >= 416) {  //575
					$('#subheader.header-fixed').fadeIn();
				} else {
					$('#subheader.header-fixed').fadeOut();
				}

				/* Fixed Contact Sidebar */
				if($(window).outerWidth() > 991 && $(window).scrollTop() > 443 && $('#contact-sidebar').size() > 0) {
					$('#contact-sidebar').css({'position':'fixed', 'top':'0'});
				} else {
					$('#contact-sidebar').css('position', 'relative');
				}

				// Retina.js hack
				if(window.devicePixelRatio > 1) {
					$('#fixed-logo-link img').css({'width':'98px', 'height':'98px'});
				}
			});
			
			/* Browser width checker */
			var browserWidth     = $('#browser-width'),
			    browserWidthText = $('#browser-width-text'),
			    responsiveText   = $('.responsive-text');
			
			browserWidth.text($(window).outerWidth());
			responsiveText.css('font-size', (browserWidthText.outerWidth() / (78/3)) + 'px');
			
			$(window).on('resize', function() {
				browserWidth.text($(window).outerWidth());
				responsiveText.css('font-size', (responsiveText.outerWidth() / (78/3)) + 'px');
			});
			
			/* Checkbox */
			$('input[type=checkbox]').iCheck({
				checkboxClass: 'icheckbox_minimal',
				radioClass: 'iradio_minimal'
			});
			
			/* Mobile Navigation */ 
			$('body').on('click', '.menu-trigger', function() {
				
				$('.global-wrapper, #big-video-wrap').addClass('animated zoom-out');
				$('#mobile-popup-menu').addClass('zoom-in');
				
			}).on('click', '.close-trigger', function() {
				
				$('.global-wrapper, #big-video-wrap').removeClass('zoom-out');
				$('#mobile-popup-menu').removeClass('zoom-in');
				
				$('.global-wrapper, #big-video-wrap').on('webkitTransitionEnd transitionEnd', function(){
					$('.global-wrapper, #big-video-wrap').removeClass('animated');
				});
			
			});
			
			/* Testimonials Slideshow */
			var testimonialNav  = $('#about #testimonial-section .testimonial-nav li a');
			var testimonialItem = $('#about #testimonial-section .testimonial-item li');
			
			$('body').on('click', '#about #testimonial-section .testimonial-nav li a', function(e) {
				
				e.preventDefault();
				
				testimonialNav.removeClass('active');
				$(this).addClass('active');
				
				testimonialItem.hide();
				testimonialItem.filter('[data-id="'+ $(this).attr('data-id') +'"]').fadeIn(2000);
				
				return false;
			});
			
			
			window.clearInterval(testimonialSlideshow);
			
			if(testimonialNav.size() > 0) {
				
				var testimonialSlideshow = window.setInterval(function() {
					
					var currentShow = testimonialNav.filter('.active')
					
					if(currentShow.parent().next().size() > 0) {
						currentShow.parent().next().find('a')[0].click();
					} else {
						testimonialNav.parent().filter(':first-child').find('a')[0].click();
					}
					
				}, 6000);
			}
			
			
			$.stellar({ responsive: true });
			
			if($('section#home').size() > 0 && $(window).outerWidth() > 768) {
				if($('#big-video-wrap').size() < 1 ) {
					var BV        = new $.BigVideo(),
					    videoFile = 'http://papertiger.com/record.m4v'; 
					BV.init();
					BV.show([videoFile],{ambient:true});
				} else {
					$('#big-video-wrap').show();
				}
			} else {
				$('#big-video-wrap').hide();
			}
		
			/* Homepage Letter */
			var flipAnimation = ($(window).outerWidth() > 568) ? ((Modernizr.csstransforms3d && Modernizr.csstransformspreserve3d) ? 'flipUp' : 'dissolve') : 'dissolve';
			
			$('.hoveraction').css('display','block').textrotator({
				animation: flipAnimation, 
				separator: ',', 
				speed: 2530
			});
			$('.hoveraction2').css('display','block').textrotator({
				animation: flipAnimation, 
				separator: ',',
				speed: 4470
			});

			// Past Project Modal
			$('#past-projects a').off('click.localScroll');
			
			$('#past-projects a[data-toggle="modal"]').on('click', function() {
				$('#loader').empty();
				
				var canvasDiameter = (window.devicePixelRatio > 1) ? 74 : 37,
					canvasLoader = new CanvasLoader('loader');
					canvasLoader.setColor('#cc3131'); 
					canvasLoader.setDiameter(37); 
					canvasLoader.setDensity(44); 
					canvasLoader.setRange(1.2);
					canvasLoader.setFPS(38); 
					canvasLoader.show(); 
				
				if(window.devicePixelRatio > 1) {
					$('#loader #canvasLoader canvas').css({'width':'37px', 'height':'37px'})
				}
				$('#past-project-modal .modal-body span').html('<img src="'+ $(this).data('image') +'" />')
			});
			
			/* Contact Form Validation */
			jQuery.validator.messages.required = "";
			
			if($('#contact-form').size() > 0) {
				$('#contact-form').validate({
					invalidHandler: function(e, validator) {
						var errors = validator.numberOfInvalids();
						if (errors) {
							var message = errors == 1
								? 'You missed 1 field. It has been highlighted above'
								: 'You missed ' + errors + ' fields.  They have been highlighted above';
							$('div.alert').html(message);
							$('div.alert').show();
						} else {
							$('div.alert').hide();
						}
					},
					onkeyup: false,
					submitHandler: function(form) {
						if ($(form).valid()) {
							$('div.alert').hide();
							form.submit();
						}
					},
					messages: {
					},
					debug:true
				});
			}

			/* Service List on Mobile */ 
			if($(window).outerWidth() <= 767) {
				$('#about #explore-mobile ul.services li h5').each(function() {
					$(this).css({'top': '50%', 'margin-top': -($(this).outerHeight() / 2) + 'px' });
				})
			}

			/* Services Block */
			$('#explore-item .services').on('click', function() {
				$(this).find('a')[0].click();
			});

			/* Submenu */
			$('.hassubmenu').hover(function() {
				$(this).find('.submenu').fadeIn();
				$(this).find('.arrow').fadeIn();
				$('.hassubmenu > a').addClass('active');
			}, function() {

				var me = $(this);

				window.setTimeout(function() {
					if(!me.find('.submenu:hover').length) {
						me.find('.submenu').fadeOut();
						me.find('.arrow').fadeOut();
						$('.hassubmenu > a').removeClass('active');
					}
				}, 300);
			});

			/* Submenu Popup */
			$('.popup-nav.hassubmenu').off('click');
			$('.popup-nav.hassubmenu').on('click', function() {

				var me = $(this);

				if(me.hasClass('active')) {
					me.next('.submenu').slideUp();
					me.removeClass('active');
				} else {
					me.next('.submenu').slideDown();
					me.addClass('active');
				}
			});

			pageRender.reCall();

		}
	}
	
	
	/* Support Browser's back and forward button & first page load */
	$(window).on('popstate', function(event) {

	    var state = event.originalEvent.state;
	    
	    if(state) {
			$.ajax({
				url: state.path,
				dataType: 'html',
				success: function(data) {
					pageRender.render(data, state.path);
					pageRender.renderMap();
					document.title = pageRender.fetchTitle(data);
					pageRender.reCall();

					/* GA */
					_gaq.push(['_trackPageview', state.path]);
				}
			});
	    }
	});
	
	if(history.replaceState) {
		history.replaceState({ path: window.location.href }, window.document.title);
	}
	
	/* Ajax */
	$('body').on('click.me', 'a:not(.unajax):not([target="_blank"]):not(.explore-link):not([href^="mailto:"])', function(e) {
		
		e.preventDefault();

		// Get and show page
		var me   = $(this),
			page = me.attr('href');
		
		$('#canvasloader-container').css('top', 0);

		if(window.devicePixelRatio > 1) {
			$('#canvasloader-container #canvasLoader canvas').css({'width':'17px', 'height':'17px'})
		}

		if(page && page != '#' && page.substr(0,1) != '#') {
		
			owner = $(this);
			    
			// Load page
			$.ajax({
				url: page,
				dataType: 'html',
				beforeSend: function() {
					pageRender.showLoader(owner);
				},
				success: function(data) {
					
					// Render page
					pageRender.render(data, page);
					pageRender.renderMap();
					
					if(history.pushState) {
						window.history.pushState(
							{ 
								path: page,
								timestamp: (new Date().getTime()) 
							},
							pageRender.fetchTitle(data),
							page
						);
					}

					document.title = pageRender.fetchTitle(data);
					

					if(me.hasClass('popup-nav')) {
						$('.close-trigger.visible-xs')[0].click();
					}
					

					$('.explore-link').wrap('<span class="explore-link-wrap"></span>');
					pageRender.reCall();

					/* GA */
					_gaq.push(['_trackPageview', page]);
				}
			});
		}
		
	});
	
	/* Smooth Scroll  */
	$('.explore-link').wrap('<span class="explore-link-wrap"></span>');
	$('.explore-link-wrap').localScroll({ 
		offset: -104
	});

	/* Init Page */
	pageRender.init();
	pageRender.renderMap();
	
	$(document).ajaxStop(function() {
		pageRender.init();
	});
	
})( jQuery );