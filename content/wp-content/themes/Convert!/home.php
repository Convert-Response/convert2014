<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
<div id="top-home">
	<!-- <div class="color-overlay" style="background-color:<?php the_field('top_image_overlay_color'); ?>"></div> --> 
<!-- 	<div id="big-video-wrap"></div> -->
<!-- 	<div id="home-bg" style="background-image:url(<?php the_field('top_image'); ?>);"></div>	 -->
<!--
	<div id="inner-content" class="row clearfix">
	    <h1><?php the_field('top_heading'); ?></h1>
	    <h4><?php the_field('top_sub_heading'); ?></h4>
	    <a href="<?php the_field('top_heading_button'); ?>" class="button right"><?php the_field('top_heading_button_text'); ?></a>
	</div> 
-->
</div>
<!-- end #content
<!--
<div id="home-top">
	<div id="top-wrapper" class="show-for-large-up">
		<div id="top-left" class="box-wrap">
			<div id="boxtl" class="box1">
				<h1>POSITION</h2>
				<div id="boxtlclose" class="close">Close</div>				
			</div>
		</div>
		<div id="top-right" class="box-wrap">
			<div id="boxtr" class="box2">		
				<h1>UNIQUNESS</h2>
				<div id="boxtrclose" class="close">Close</div>
			</div>
		</div>
		<div id="bottom-left" class="box-wrap">
			<div id="boxbl" class="box2">
				<h1>DIFFERENT</h2>
				<div id="boxblclose" class="close">Close</div>				
			</div>
		</div>
		<div id="bottom-right" class="box-wrap">
			<div id="boxbr" class="box1">
				<h1>BRANDING</h2>
				<div id="boxbrclose" class="close">Close</div>				
			</div>
		</div>
	</div>
</div>
-->
<!--
<div id="stats-home">
	<div id="stats-content" class="row clearfix">
	    <h2>Stats</h2>
	    <div class="large-4 columns text-center chart-wrap">
	    	<div class="chart-cover"></div>
	    	<div class="chart-per"><?php the_field('stat1'); ?>%</div>
	    	<div class="chart" data-percent="<?php the_field('stat1'); ?>"></div>
	    </div>	
	    <div class="large-4 columns text-center chart-wrap">
	    	<div class="chart-cover"></div>	
	    	<div class="chart-per"><?php the_field('stat2'); ?>%</div>	    				    
	    	<div class="chart" data-percent="<?php the_field('stat2'); ?>"></div>
	    </div>	
	    <div class="large-4 columns text-center chart-wrap">
			<div class="chart-cover"></div>	   
	    	<div class="chart-per"><?php the_field('stat3'); ?>%</div>	    			 
	    	<div class="chart" data-percent="<?php the_field('stat3'); ?>"></div>
	    </div>					    				    
	</div> 
</div>
--> <!-- end #content -->
<?php our_process(); ?>						
<?php footer_contact(); ?>	
<?php get_footer(); ?>