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
// Large Map	    
	    loc = new google.maps.LatLng(38.282059, -77.449741);
		pos = new google.maps.LatLng(38.276782, -77.415169);
// Medium Map
		pos2 = new google.maps.LatLng(38.286782, -77.435169);
// Small Map
		pos3 = new google.maps.LatLng(38.284782, -77.450169);
			
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
		
		var mapOptions2 = {
			zoom: 14,
			disableDefaultUI:true,    
			center: pos2,
			panControl:false,
			zoomControl:false,
			scrollwheel: false,
			disableDoubleClickZoom: true,								
			panControlOptions: {
			    position: google.maps.ControlPosition.TOP_RIGHT
			}	
		};
		
		var mapOptions3 = {
			zoom: 14,
			disableDefaultUI:true,    
			center: pos3,
			panControl:false,
			zoomControl:false,
			scrollwheel: false,
			draggable: false,
			disableDoubleClickZoom: true,								
			panControlOptions: {
			    position: google.maps.ControlPosition.TOP_RIGHT
			}	
		};		
	    
	    map = new google.maps.Map(document.getElementById('map-canvas-1'),
	    mapOptions);

	    map2 = new google.maps.Map(document.getElementById('map-canvas-2'),
	    mapOptions2);
	    
		map3 = new google.maps.Map(document.getElementById('map-canvas-3'),
	    mapOptions3);
	    	    
	    var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
	    
		var image = '/wp-content/themes/ConvertMarketing/library/images/marker.png';
			marker = new google.maps.Marker({
			position: loc,
			map: map,					
			icon: image,
		});

		var image2 = '/wp-content/themes/ConvertMarketing/library/images/marker.png';
			marker = new google.maps.Marker({
			position: loc,
			map: map2,					
			icon: image,
		});
		
		var image3 = '/wp-content/themes/ConvertMarketing/library/images/marker.png';
			marker = new google.maps.Marker({
			position: loc,
			map: map3,					
			icon: image,
		});		
	    
		//Associate the styled map with the MapTypeId and set it to display.
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style'); 
		
		map2.mapTypes.set('map_style', styledMap);
		map2.setMapTypeId('map_style');  	
	
		map3.mapTypes.set('map_style', styledMap);
		map3.setMapTypeId('map_style');  			   
	    
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>	
	<div id="map-canvas-1" class="show-for-large-up"></div>	
	<div id="map-canvas-2" class="show-for-medium-only"></div>		
	<div id="contact-form" class="show-for-medium-up">
		<h1>Contact Us</h1>
		<?php echo do_shortcode('[contact-form-7 id="117" title="Contact Form"]'); ?>
		<div class="address large-12 left columns"><h2>Or pop in to see us at: <br>1 Bowman Drive, Suite 175<br>Fredericksburg, VA 22408<br>540.368.1776</h2></div>
	</div>	
	<div class="row">
		<div id="map-canvas-3" class="show-for-small-only small-12 columns"></div>		
		<div id="contact-form-3" class="show-for-small-only small-12 columns">
			<h1>Contact Us</h1>
			<?php echo do_shortcode('[contact-form-7 id="117" title="Contact Form"]'); ?>
			<div class="address large-12 left columns"><h2>1 Bowman Drive, Suite 175<br>Fredericksburg, VA 22408<br>540.368.1776</h2></div>
		</div>		
	</div>	
</div>
<?php get_footer(); ?>