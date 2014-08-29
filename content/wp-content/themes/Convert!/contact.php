<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
			
			<div id="top-contact" class="show-for-large-up">
	
			</div> <!-- end #content -->
					
			<div id="stats-home">

			</div> <!-- end #content -->					

<div id="map" class="section">
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
	<script type="text/javascript">
	function initialize() {
	
	  // Create an array of styles.
	  var styles = [
	    {
	      stylers: [
	        { hue: "#4372AA" },
	        { saturation: 300 }
	      ]
	    },{
	      featureType: "road",
	      elementType: "geometry",
	      stylers: [
	        { lightness: 100 },
	        { visibility: "simplified" }
	      ]
	    },{
	      featureType: "road",
	      elementType: "labels",
	      stylers: [
	        { visibility: "off" }
	      ]
	    }
	  ];
	
	
	    var loc, map, marker;
	    
	    loc = new google.maps.LatLng(38.282052, -77.449737);
		pos = new google.maps.LatLng(38.284782, -77.426169);
	
		var mapOptions = {
			zoom: 14,
			disableDefaultUI:true,    
			center: pos,
			panControl:false,
			zoomControl:false,
			scrollwheel: false,
			disableDoubleClickZoom: true,								
			panControlOptions: {
			    position: google.maps.ControlPosition.TOP_RIGHT
			}	
		};
	    
	    map = new google.maps.Map(document.getElementById('map-canvas'),
	    mapOptions);
	    
	    var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
	    
		var image = '/wp-content/themes/Convert!/library/images/marker.png';
		marker = new google.maps.Marker({
			position: loc,
			map: map,
			icon: image,
		});
	    
		//Associate the styled map with the MapTypeId and set it to display.
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');    
	    
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<div id="map-canvas" class="shadow show-for-medium-up"></div>
	<div id="contact-form">
	<h1>Contact Us</h1>
		<?php echo do_shortcode('[contact-form-7 id="117" title="Contact Form"]'); ?>
	</div>	
</div>
<?php get_footer(); ?>