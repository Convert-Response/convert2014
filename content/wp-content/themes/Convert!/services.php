<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
<div id="services-top" class="show-for-large-up">
	<div class="row">
		<div class="large-12 tagline" id="tagline">
		This is a test of the top services area. Anything can go here.
		</div>
	</div>	
</div>
<!--
<div id="our-process" class="show-for-large-up" name="our-process">
	<div class="row">
		<div id="process-wheel-wrap" class="large-6 columns show-for-large-up">
			<div id="icon"></div>
			<div id="pointer"></div>	
			<div id="icons">
				<div class="row">		
					<div class="large-4 columns first">1</div>					
					<div class="large-4 columns">
						<div class="row">			
							<div id="icon-1" class="large-12 columns icon">1</div>
							<div id="icon-2" class="large-12 columns icon">2</div>		
							<div id="icon-3" class="large-12 columns icon">3</div>
							<div id="icon-4" class="large-12 columns icon">4</div>	
						</div>							
					</div>
					<div class="large-4 columns last">1</div>							
				</div>													
			</div>					
			<div id="wheel">				
			</div>
		</div>
		<div id="process-text" class="large-6 columns show-for-large-up">
			<br><br><br><br><h1>Our Process</h1>
			<div class="row">
				<div class="large-3 columns"><a id="process-1">Strategy</a></div>
				<div class="large-3 columns"><a id="process-2">Live Testing</a></div>
				<div class="large-3 columns"><a id="process-3">Marketing</a></div>
				<div class="large-3 columns"><a id="process-4">Integration</a></div>			
			</div>
			<div class="row">
				<div id="process-1-text" class="large-12 columns process-text"><h3><br>Strategy</h3></div>
				<div id="process-2-text" class="large-12 columns process-text"><h3><br>Live Testing</h3></div>
				<div id="process-3-text" class="large-12 columns process-text"><h3><br>Marketing</h3></div>
				<div id="process-4-text" class="large-12 columns process-text"><h3><br>Integration</h3></div>			
			</div>		
			<div class="row">
				<div id="process-1-body" class="large-12 columns process-body"><br><?php echo the_field('strategy_text');?></div>
				<div id="process-2-body" class="large-12 columns process-body"><br><?php echo the_field('live_testing_text');?></div>
				<div id="process-3-body" class="large-12 columns process-body"><br><?php echo the_field('marketing_text');?></div>
				<div id="process-4-body" class="large-12 columns process-body"><br><?php echo the_field('integration_text');?></div>			
			</div>					
		</div>	
	</div>
</div>
--> <!-- end #our-process -->	
<div id="process-mobile" class="hide-for-large-up">
	<div class="row">
		<div class="small-12 columns">
			<div class="row">
				<div class="small-3 columns">									
					<div id="icon-1" class="icon">1</div>
				</div>
				<div class="small-9 columns">	
					<h1>Strategy</h1>	
					<?php echo the_field('strategy_text');?>					
				</div>						
			</div>		
		</div>
		<div class="small-12 columns">
			<div class="row">
				<div class="small-3 columns">									
					<div id="icon-2" class="icon">1</div>
				</div>
				<div class="small-9 columns">	
					<h1>Live Testing</h1>
					<?php echo the_field('live_testing_text');?>						
				</div>						
			</div>		
		</div>
		<div class="small-12 columns">
			<div class="row">
				<div class="small-3 columns">									
					<div id="icon-3" class="icon">1</div>
				</div>
				<div class="small-9 columns">	
					<h1>Marketing</h1>
					<?php echo the_field('marketing_text');?>						
				</div>						
			</div>		
		</div>
		<div class="small-12 columns">
			<div class="row">
				<div class="small-3 columns">									
					<div id="icon-4" class="icon">1</div>
				</div>
				<div class="small-9 columns">	
					<h1>Integration</h1>
					<?php echo the_field('integration_text');?>						
				</div>						
			</div>		
		</div>														
	</div>
</div>	
			
<div id="services-offered" name="services-offered">
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<div class="process-icon large-4 columns top-icon mask">
			</div>
				<div id="mask-white" class="mask"></div>						
				<div class="large-8 columns services-title">
				<h1>Services Offered</h1>
			</div>
			</div>	
			<div class="row filler-line-row">				
				<div class="process-icon large-4 columns filler-line mask">

			</div>			
				<div class="large-8 columns services-title">
				<h1></h1>
			</div>	
			</div>
			<div class="row">				
				<div class="process-icon large-4 columns mask-mail mask left">
			</div>			
				<div class="large-8 columns services-title right">
					<h3>Email Marketing</h3>
			</div>					
		</div>	
			<div class="row filler-line-row">				
				<div class="process-icon large-4 columns filler-line mask">

			</div>			
				<div class="large-8 columns services-title">
				<h1></h1>
			</div>	
			</div>			
			<div class="row">				
				<div class="process-icon large-4 columns mask-mail mask left">
			</div>			
				<div class="large-8 columns services-title right">
					<h3>Web Development</h3>
			</div>					
		</div>
			<div class="row filler-line-row">				
				<div class="process-icon large-4 columns filler-line mask">

			</div>			
				<div class="large-8 columns services-title">
				<h1></h1>
			</div>	
			</div>			
			<div class="row">				
				<div class="process-icon large-4 columns mask-mail mask left">
			</div>			
				<div class="large-8 columns services-title right">
					<h3>Web Design</h3>
			</div>					
		</div>	
			<div class="row filler-line-row">				
				<div class="process-icon large-4 columns filler-line mask">

			</div>			
				<div class="large-8 columns services-title">
				<h1></h1>
			</div>	
			</div>			
			<div class="row">				
				<div class="process-icon large-4 columns mask-mail mask left">
			</div>			
				<div class="large-8 columns services-title right">
					<h3>Online Advertising</h3>
			</div>					
		</div>	
			<div class="row filler-line-row">				
				<div class="process-icon large-4 columns filler-line mask">

			</div>			
				<div class="large-8 columns services-title">
				<h1></h1>
			</div>	
			</div>			
			<div class="row">				
				<div class="process-icon large-4 columns mask-mail mask left">
			</div>			
				<div class="large-8 columns services-title right">
					<h3>Social Media</h3>
			</div>					
		</div>
			<div id="bottom-white-mask"></div>														
		</div>
	</div>	
</div> <!-- end #top-services -->				
<div id="mask" class="show-for-large-up"></div>
<?php footer_contact(); ?>	
<?php get_footer(); ?>