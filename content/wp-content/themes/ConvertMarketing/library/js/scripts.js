/*
Joints Scripts File

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 481) {
    
    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
    } /* end larger than 481px */
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
    
        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });
        
    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }
    
	
	// add all your scripts here
	
 
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );

/*
 * Load up Foundation
 */
(function(jQuery) {
  jQuery(document).foundation();
})(jQuery);


$(function() {
	if($('body').hasClass('page-template-home-php')){
	
		$(function() {
		    var BV = new $.BigVideo();
		    BV.init();
		    BV.show('/wp-content/themes/ConvertMarketing/library/videos/convert.mp4',{ambient:true});
		});	
		
		$('<div id="logo-fade"></div>').prependTo('#big-video-vid');
		setTimeout(function() {
			$('#logo-fade').fadeOut(500);	
			}, 3500);
	}	
	
	if($('body').hasClass('page-template-about-php')){
	
		$(function() {
		    var BV = new $.BigVideo();
		    BV.init();
		    BV.show('/wp-content/themes/ConvertMarketing/library/videos/about-page.mp4',{ambient:true});
		});	
		
	}	
	
	$('.sm-contact-trigger').click(function() {
		$('html, body').animate({scrollTop:$('#home-contact').offset().top +100 }, 500);
	});

	$('.scroll-arrow').click(function() {
		$('html, body').animate({scrollTop:$('#convert-is').offset().top -100 }, 500);
	});

// Logo slide over

/*
	setTimeout(function() {
		$('.logo').addClass('animated bounceOutLeft');
	}, 2500);

	setTimeout(function() {
		$('.logo').removeClass('animated bounceOutLeft');
		$('.logo').addClass('smlogo animated bounceInLeft');
	}, 3000);
*/


// Slide down homepage contact	
	$('#contact-trigger').click(function() {
		$('#contact-div').addClass('animated bounceInDown');
		$('#contact-div').removeClass('bounceOutUp');					
		$('#lightbox-home').fadeIn(200);	
	});

	$('#home-contact .logo-contact').click(function() {
		$('#contact-div').addClass('animated bounceInDown');
		$('#contact-div').removeClass('bounceOutUp');					
		$('#lightbox-home').fadeIn(200);	
	});

	$('#close-contact, #lightbox-home').click(function() {
		$('#contact-div').removeClass('animated bounceInDown');				
		$('#contact-div').addClass('animated bounceOutUp',function(){
		});			
		$('#lightbox-home').fadeOut();	
	});		
	
	var formCheck = function(){
		if ($('form').hasClass('sent')) {
			$('#contact-div').removeClass('animated bounceInDown');				
			$('#contact-div').addClass('animated bounceOutUp',function(){});	
			$('#lightbox-home').fadeOut();						
		}
	}	
	setInterval(formCheck, 2500);	

// About page

	$('.staff-wrap').click(function(){
	     window.location=$(this).find("a.profile-link").attr("href");
	     return false;
	});
	
	$('.social').click(function(){
	     var url = $(this).children("a:first").attr("href");
	     window.open(url, '_blank')
	     return false;
	});

// Slideout case study arrows

	$('#case-study-top').find('a[rel=next]').mouseover(function() {
		 $(this).animate({ right: 0 }, 100);
	}).mouseout(function() {
		$(this).animate({ right: -132 }, 100);
	});	
	
	$('#case-study-top').find('a[rel=prev]').mouseover(function() {
		 $(this).animate({ left: 0 }, 100);
	}).mouseout(function() {
		$(this).animate({ left: -130 }, 100);
	});		
     
// Process wheel-o-rama

    $('#icon-1').fadeIn('slow');
    $('#process-1-text').fadeIn('slow');
    $('#process-1-body').show().addClass('animated fadeInRight');        
    $('#process-1').click(function () {
        $(this).addClass('active').siblings('.process-btn').removeClass('active');    
        $('#wheel').css({'-webkit-transform' : 'rotate(0deg)',
                 '-moz-transform' : 'rotate(0deg)',
                 '-ms-transform' : 'rotate(0deg)',
                 'transform' : 'rotate(0deg)'});        
        $('#icon-1').fadeIn('slow');
        $('#process-1-text').fadeIn('slow');  
        $('#process-1-body').show().removeClass('fadeOut').addClass('animated fadeInRight');               
        $('#icon-2').fadeOut('slow');
        $('#process-2-text').fadeOut('slow');  
        $('#process-2-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                 
        $('#icon-3').fadeOut('slow');
        $('#process-3-text').fadeOut('slow');
        $('#process-3-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                  
        $('#icon-4').fadeOut('slow');  
        $('#process-4-text').fadeOut('slow');    
        $('#process-4-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                                  
    });
    $('#process-2').click(function () {
        $(this).addClass('active').siblings('.process-btn').removeClass('active');        
        $('#wheel').css({'-webkit-transform' : 'rotate(90deg)',
                 '-moz-transform' : 'rotate(90deg)',
                 '-ms-transform' : 'rotate(90deg)',
                 'transform' : 'rotate(90deg)'});
        $('#icon-1').fadeOut('slow');
        $('#process-1-text').fadeOut('slow');
        $('#process-1-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                     
        $('#icon-2').fadeIn('slow');
        $('#process-2-text').fadeIn('slow'); 
        $('#process-2-body').show().removeClass('fadeOut').addClass('animated fadeInRight');                   
        $('#icon-3').fadeOut('slow');
        $('#process-3-text').fadeOut('slow');
        $('#process-3-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                    
        $('#icon-4').fadeOut('slow');     
        $('#process-4-text').fadeOut('slow'); 
        $('#process-4-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                                           
    }); 
    $('#process-3').click(function () {
        $(this).addClass('active').siblings('.process-btn').removeClass('active');      
        $('#wheel').css({'-webkit-transform' : 'rotate(180deg)',
                 '-moz-transform' : 'rotate(180deg)',
                 '-ms-transform' : 'rotate(180deg)',
                 'transform' : 'rotate(180deg)'});
        $('#icon-1').fadeOut('slow');
        $('#process-1-text').fadeOut('slow');
        $('#process-1-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                  
        $('#icon-2').fadeOut('slow');
        $('#process-2-text').fadeOut('slow'); 
        $('#process-2-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                  
        $('#icon-3').fadeIn('slow');
        $('#process-3-text').fadeIn('slow');
        $('#process-3-body').show().removeClass('fadeOut').addClass('animated fadeInRight');                   
        $('#icon-4').fadeOut('slow');     
        $('#process-4-text').fadeOut('slow');
        $('#process-4-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                                         
    }); 
    $('#process-4').click(function () {
		$(this).addClass('active').siblings('.process-btn').removeClass('active');      
        $('#wheel').css({'-webkit-transform' : 'rotate(270deg)',
                 '-moz-transform' : 'rotate(270deg)',
                 '-ms-transform' : 'rotate(270deg)',
                 'transform' : 'rotate(270deg)'});
        $('#icon-1').fadeOut('slow');
        $('#process-1-text').fadeOut(); 
        $('#process-1-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                  
        $('#icon-2').fadeOut();
        $('#process-2-text').fadeOut();  
        $('#process-2-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                 
        $('#icon-3').fadeOut();
        $('#process-3-text').fadeOut();
        $('#process-3-body').show().removeClass('fadeInRight').addClass('animated fadeOut');                  
        $('#icon-4').fadeIn();     
        $('#process-4-text').fadeIn();
        $('#process-4-body').show().removeClass('fadeOut').addClass('animated fadeInRight');                        
    });
	
	$('.button-wrap').click( function(){ 
        $('.button-wrap').removeClass('active');
        $(this).addClass('active');		
	});				

	jQuery(window).bind('scroll',function(e){
	    parallaxScroll();
	});
	
	function parallaxScroll(){
		var scrolled = $(window).scrollTop();
		$('#our-process h1').css('top',((scrolled*.20))+'px');	
	}
	
/*
	var $sidebar   = $(".off-canvas-list"), 
	    $window    = $(window),
	    offset     = $sidebar.offset(),
	    topPadding = 15;
	
	$window.scroll(function() {
	    if ($window.scrollTop() > offset.top) {
	        $sidebar.stop().animate({
	            marginTop: $window.scrollTop() - offset.top + topPadding
	        });
	    } else {
	        $sidebar.stop().animate({
	            marginTop: 0
	        });
	    }
	});
*/
	   // Hack to get off-canvas .menu-icon to fire on iOS
    $('.menu-icon').click(function(){ false });
	
});

jQuery(window).scroll(function() {
	if (jQuery(this).scrollTop() > 100) {
	    jQuery('.logo').stop().animate({ left: '-282px' });   
	} else {
	    jQuery('.logo').stop().animate({ left: '0px' });
	}
});

