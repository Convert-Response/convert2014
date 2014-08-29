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
        enabled = false; }
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

jQuery(window).bind('scroll',function(e){
    parallaxScroll();
});

function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	$('#inner-content').css('top',(200+(scrolled*.75))+'px');
	$('.tagline').css('top',((scrolled*.75))+'px');	
	$('#case-study-top').css('background-position-y', ((scrolled*.75))+'px');	
}

// Fixed menu that shrinks

$(function(){
  $('#fixed-menu').data('size','big');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 300)
{
    if($('#fixed-menu').data('size') == 'big')
    {
        $('#fixed-menu').data('size','small');
/*         $('#fixed-menu ul#menu-main-menu-2').css('top','-27px'); */
		$('#fixed-menu ul#menu-main-menu-2').animate({top:-27}, 400, function() {
			if($('#menu-main-menu-2 .active').hasClass('has-dropdown')){
				$('#fixed-sub').fadeIn();
			}
		});   
		$('#logo').animate({height:60, marginTop:0}, 400, function() {});		
		$('#fixed-menu ul#menu-main-menu-2 .menu-item.active .dropdown').animate({top:87}, 400, function() {});		     
        $('#fixed-menu').stop().animate({
            height:'60px'
        },400);
    }
}
else
  {
    if($('#fixed-menu').data('size') == 'small')
      {
        $('#fixed-menu').data('size','big');
		$('#fixed-sub').fadeOut(10);        
		$('#fixed-menu ul#menu-main-menu-2').animate({top:0}, 400, function() {});  
		$('#logo').animate({height:86, marginTop:16}, 400, function() {});		 
		$('#fixed-menu ul#menu-main-menu-2 .menu-item.active .dropdown').animate({top:130}, 400, function() {});			   
        $('#fixed-menu').stop().animate({
            height:'120px'
        },400);
      }  
  }
});

// Waypoints
// Fade in the charts. Actually it's fading out an overlayed div.
jQuery('#stats-home').waypoint(function() {
	jQuery('.chart-cover').fadeOut( "slow");
	    jQuery('.chart').easyPieChart({
			animate: 1200,    
	    	size: 160,
	    	scaleColor: false,
	        lineWidth: 20,
	        lineCap: 'square',
	        barColor: '#000000'
	    });	
}, { offset: 700 });

jQuery('#services-offered').waypoint(function(down) {
	jQuery('.tagline').css( { marginLeft : "400px" } )
}, { offset: 0});

jQuery('#our-process').waypoint(function(up) {
	jQuery('.tagline').css( { marginLeft : "0px" } )
}, { offset: 0});

// Video background

if($("body").hasClass("page-template-home-php")){

	var BV = new $.BigVideo({useFlashForFirefox:true});
	BV.init();
// If in touch, show an image
	if (Modernizr.touch) {
	    BV.show('/wp-content/themes/Convert%21/library/images/bg-video.jpg');
	} else {
	    BV.show('/wp-content/themes/Convert%21/library/images/bg1.mp4',{ambient:true});
	}
// If using firefox, load youtube video
	if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
	    setTimeout(function() {
			jQuery('#big-video-wrap').fadeOut(800);
	  	}, 3000);
        jQuery('#big-video-wrap').tubular({
        	videoId: 'l3JVvp3txhM',
        	repeat: true,
        	start: 25000   
        }); // where idOfYourVideo is the YouTube ID.
	}
}

$(document).ready(function () {

	$('<div id="logo-fade"></div>').insertBefore('#big-video-vid');
    setTimeout(function() {
		$('#logo-fade').fadeOut(500);	
  	}, 1500);	

//Top left
    $('#boxtl').on('click', function(event){
        $(this).addClass('active');
    	event.stopPropagation(); event.preventDefault();
        $(this).animate({width:"180%", left:"0%", bottom:"-80%", height:"180%"});
        $(this).find('.close').fadeIn();
        $(this).css( "zIndex", 9 );
        $('#boxbl').css( "zIndex", 1 ); 
        $('#boxtr').css( "zIndex", 1 );         
    });

    $('#boxtlclose').on('click', function(event){
    	event.stopPropagation(); event.preventDefault();
        $('#boxtl').animate({width:"100%", right:"0%", top:"0%", height:"100%"});
        $(this).fadeOut();
        $('#boxtl').removeClass('active');  
        $('#boxtl').css( "zIndex", 2 ); 
        $('#boxbl').css( "zIndex", 1 ); 
        $('#boxtr').css( "zIndex", 1 );    
        $('#boxbr').css( "zIndex", 1 );                            
    });
// Bottom Right
    $('#boxbr').on('click', function(event){
        $(this).addClass('active');
    	event.stopPropagation(); event.preventDefault();
        $(this).animate({width:"180%", left:"-80%", top:"-80%", height:"180%"});
        $(this).find('.close').fadeIn();
        $(this).css( "zIndex", 9 );        
        $('#boxbl').css( "zIndex", 1 ); 
        $('#boxtr').css( "zIndex", 1 );        
    });

    $('#boxbrclose').on('click', function(event){
    	event.stopPropagation(); event.preventDefault();
        $('#boxbr').animate({width:"100%", left:"0%", top:"0%", height:"100%"});
        $(this).fadeOut();
        $('#boxbr').removeClass('active'); 
        $('#boxbr').css( "zIndex", 2 ); 
        $('#boxbl').css( "zIndex", 1 ); 
        $('#boxtr').css( "zIndex", 1 );    
        $('#boxtl').css( "zIndex", 1 );                     
    });
// Bottom Left
    $('#boxbl').on('click', function(event){
        $(this).addClass('active');
    	event.stopPropagation(); event.preventDefault();
        $(this).animate({width:"140%", left:"0%", bottom:"80%", height:"180%"});
        $(this).find('.close').fadeIn();
        $(this).css( "zIndex", 9 );        
        $('#boxbr').css( "zIndex", 1 ); 
        $('#boxtr').css( "zIndex", 1 );    
        $('#boxbr').css( "zIndex", 1 ); 
    });

    $('#boxblclose').on('click', function(event){
    	event.stopPropagation(); event.preventDefault();
        $('#boxbl').animate({width:"100%", left:"0%", bottom:"0%", height:"100%"});
        $(this).fadeOut();
        $('#boxbl').removeClass('active');     
        $('#boxbl').css( "zIndex", 2 ); 
        $('#boxtl').css( "zIndex", 1 ); 
        $('#boxtr').css( "zIndex", 1 );              
    });
// Top Right
    $('#boxtr').on('click', function(event){
        $(this).addClass('active');
    	event.stopPropagation(); event.preventDefault();
        $(this).animate({width:"140%", right:"40%", bottom:"80%", height:"180%"});
        $(this).find('.close').fadeIn();
        $(this).css( "zIndex", 9 );        
        $('#boxtl').css( "zIndex", -1 ); 
        $('#boxbr').css( "zIndex", -1 ); 
        $('#boxbl').css( "zIndex", -1 );                 
    });

    $('#boxtrclose').on('click', function(event){
    	event.stopPropagation(); event.preventDefault();
        $('#boxtr').animate({width:"100%", right:"0%", bottom:"0%", height:"100%"}, function(){
	        $('#boxtr').removeClass('active');     
	        $('#boxtr').delay(900).css( "zIndex", 0 ); 
	        $('#boxtl').css( "zIndex", 1 ); 
	        $('#boxbr').css( "zIndex", 1 ); 
	        $('#boxbl').css( "zIndex", 1 );  	        
        });
        $(this).fadeOut();                     
    });

	$('#mask').delay(500).fadeIn('slow');

// Scroll to the sub section

	$('.dropdown a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $(this).attr('href') ).offset().top -103
	    }, 500);
	    return false;
	});

	$('.staff-wrap').hover(function () {
		$(this).find('.staff-fill').addClass("reduce");
	}, function () {
		$(this).find('.staff-fill').removeClass("reduce");
	});

// Process wheel-o-rama

    $('#icon-1').fadeIn('slow');
    $('#process-1-text').fadeIn('slow');
    $('#process-1-body').fadeIn('slow');         
    $('#process-1').click(function () {
        $('#wheel').css({'-webkit-transform' : 'rotate(0deg)',
                 '-moz-transform' : 'rotate(0deg)',
                 '-ms-transform' : 'rotate(0deg)',
                 'transform' : 'rotate(0deg)'});
        $('#icon-1').fadeIn('slow');
        $('#process-1-text').fadeIn('slow');  
        $('#process-1-body').fadeIn('slow');               
        $('#icon-2').fadeOut('slow');
        $('#process-2-text').fadeOut('slow');  
        $('#process-2-body').fadeOut('slow');                
        $('#icon-3').fadeOut('slow');
        $('#process-3-text').fadeOut('slow');
        $('#process-3-body').fadeOut('slow');                  
        $('#icon-4').fadeOut('slow');  
        $('#process-4-text').fadeOut('slow');    
        $('#process-4-body').fadeOut('slow');                                    
    });
    $('#process-2').click(function () {
        $('#wheel').css({'-webkit-transform' : 'rotate(90deg)',
                 '-moz-transform' : 'rotate(90deg)',
                 '-ms-transform' : 'rotate(90deg)',
                 'transform' : 'rotate(90deg)'});
        $('#icon-1').fadeOut('slow');
        $('#process-1-text').fadeOut('slow');
        $('#process-1-body').fadeOut('slow');                    
        $('#icon-2').fadeIn('slow');
        $('#process-2-text').fadeIn('slow'); 
        $('#process-2-body').fadeIn('slow');                 
        $('#icon-3').fadeOut('slow');
        $('#process-3-text').fadeOut('slow');
        $('#process-3-body').fadeOut('slow');                   
        $('#icon-4').fadeOut('slow');     
        $('#process-4-text').fadeOut('slow'); 
        $('#process-4-body').fadeOut('slow');                               
    }); 
    $('#process-3').click(function () {
        $('#wheel').css({'-webkit-transform' : 'rotate(180deg)',
                 '-moz-transform' : 'rotate(180deg)',
                 '-ms-transform' : 'rotate(180deg)',
                 'transform' : 'rotate(180deg)'});
        $('#icon-1').fadeOut('slow');
        $('#process-1-text').fadeOut('slow');
        $('#process-1-body').fadeOut('slow');                 
        $('#icon-2').fadeOut('slow');
        $('#process-2-text').fadeOut('slow'); 
        $('#process-2-body').fadeOut('slow');                 
        $('#icon-3').fadeIn('slow');
        $('#process-3-text').fadeIn('slow');
        $('#process-3-body').fadeIn('slow');                  
        $('#icon-4').fadeOut('slow');     
        $('#process-4-text').fadeOut('slow');
        $('#process-4-body').fadeOut('slow');                              
    }); 
    $('#process-4').click(function () {
        $('#wheel').css({'-webkit-transform' : 'rotate(270deg)',
                 '-moz-transform' : 'rotate(270deg)',
                 '-ms-transform' : 'rotate(270deg)',
                 'transform' : 'rotate(270deg)'});
        $('#icon-1').fadeOut('slow');
        $('#process-1-text').fadeOut('slow'); 
        $('#process-1-body').fadeOut('slow');                 
        $('#icon-2').fadeOut('slow');
        $('#process-2-text').fadeOut('slow');  
        $('#process-2-body').fadeOut('slow');                 
        $('#icon-3').fadeOut('slow');
        $('#process-3-text').fadeOut('slow');
        $('#process-3-body').fadeOut('slow');                  
        $('#icon-4').fadeIn('slow');     
        $('#process-4-text').fadeIn('slow');
        $('#process-4-body').fadeIn('slow');              
    }); 

// Back to top button

	$('#back-to-top').click(function(){
		 $("html, body").animate({ scrollTop: 0 }, "slow");
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
     
     
// Contact page Contact Form Classes 

	$('.page-template-contact-php form div').removeClass('large-6');     
 	$('.page-template-contact-php form div').addClass('large-12');     
                 
});

// Show back to top button when you get to the bottom of the page. 

$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 600) {
       $('#back-to-top').fadeIn("slow");
   } else { 
       $('#back-to-top').fadeOut("slow");	   
   }
});    