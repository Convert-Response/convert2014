<?php
/*
Template Name: Process
*/
?>

<?php get_header(); ?>


<div id="top-process" class="section show-for-large-up">
	<div class="row">
		<div class="large-12">
			<div class="tagline tk-futura-pt"><h1>Our process</h1></div>
		</div>
	</div>		
</div>	
<!--		
<div id="about-text" name="about-us">
	<div class="row">
		<div class="large-12">
		<h1 class="tk-futura-pt">About Us</h1>
		<div class="content">
			<?php while (have_posts()) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		</div>		
	</div>		
</div>	
-->	
		
<?php our_process(); ?>					
<?php footer_contact(); ?>	
<?php get_footer(); ?>