<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<div id="contact-div" class="row show-for-medium-up">
	<?php slide_contact(); ?>
	<div id="close-contact"><i class="fi-x large"></i></div>
</div>			
<div id="top-home">
	<!-- <div class="color-overlay" style="background-color:<?php the_field('top_image_overlay_color'); ?>"></div> --> 
<!-- 	<div id="big-video-wrap"></div> -->
<!-- 	<div id="home-bg" style="background-image:url(<?php the_field('top_image'); ?>);"></div>	 -->

	<div id="inner-content" class="row clearfix show-for-medium-up">
	    <h1><?php the_field('top_heading'); ?></h1>
	    <h4><?php the_field('top_sub_heading'); ?></h4>
	    <a href="#contact" class="button" id="contact-trigger"><?php the_field('top_button_text'); ?></a>
		<div class="scroll-arrow"><span>&rsaquo;</span></div>	    
	</div> 
	<div id="inner-content-sm" class="row clearfix show-for-small-only">
	    <h2><?php the_field('top_heading'); ?></h1>
	    <h3><?php the_field('top_sub_heading'); ?></h4>
	    <a href="#contact" class="button sm-contact-trigger" id="contact-trigger"><?php the_field('top_button_text'); ?></a>   
	</div> 	
</div>
<div id="convert-is">
	<div class="row">
		<div class="large-12 columns about-home-text">
		    <?php while ( have_posts() ) : the_post(); ?>
		       <?php the_content(); ?>
		    <?php endwhile;wp_reset_query();?>
		</div>			
	</div>
	<header class="row show-for-large-up" id="icons">
			<div class="large-12 columns">
				<?php echo the_field('service_1_icon');?>	
				<hr>
				<?php echo the_field('service_2_icon');?>	
				<hr>
				<?php echo the_field('service_3_icon');?>
			</div>
		</header>	
	<div class="service-home row">
		<div class="large-4 columns"> 
			<span class="hide-for-large-up"><?php echo the_field('service_1_icon');?></span>			
			<h4><?php echo the_field('service_1_title');?></h4>
			<div><?php echo the_field('service_1_text');?></div>			
		</div>
		<div class="large-4 columns">	
			<span class="hide-for-large-up"><?php echo the_field('service_2_icon');?></span>
			<h4><?php echo the_field('service_2_title');?></h4>
			<div><?php echo the_field('service_2_text');?></div>			
		</div>
		<div class="large-4 columns">	
			<span class="hide-for-large-up"><?php echo the_field('service_3_icon');?></span>
			<h4><?php echo the_field('service_3_title');?></h4>
			<div><?php echo the_field('service_3_text');?></div>
		</div>		
	</div>
</div>
<div id="who-we-are">
	<div class="row">
		<div class="large-6 small-12 columns who-we-are-text">
			<h2><?php echo the_field('who_we_are_title');?></h2>
			<h2 class="subtitle"><?php echo the_field('who_we_are_subtitle');?></h2>			
			<?php echo the_field('who_we_are_text');?>
			<a href="/about#our-staff">Meet our awesome team <i class="fi-arrow-right medium"></i></a>
		</div>
		<div class="large-6 columns show-for-large-only"></div>
	</div>
</div>
<div id="case-home">
	<div id="case-home-content" class="row clearfix">
		<div class="large-12 columns">
			<h1 class="case-home-title">CASE STUDIES</h1>
		</div>
<?php


$args = array( 'post_type' => 'case-studies', 'posts_per_page' => 3, 'orderby' => 'rand' );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<div class="large-4 columns case-home-wrap">
			<div class="case-home-item" style="background-image:url(<?php echo the_field('client_image', $post);?>)"> 
				<a href="<?php the_permalink(); ?>">	
					<div class="client-info">
						<div class="">
							<h2 class="study-title tk-futura-pt"><?php the_title(); ?></h2>
							<div class="case-line"></div>
							<div class="case-services"><?php echo the_field('case_study_service', $post);?></div>
						</div>
					</div>
				</a>	
			</div>
		</div>			
		<?php endforeach; 
		wp_reset_postdata();?>				    				    
	</div> 
</div>
<!--
<div id="home-testimonials">
		<div class="row">
		<div class="large-12 columns">
			<h1 class="testimonial-title">TESTIMONIALS</h1>
		</div>		
			<ul data-orbit data-options="animation:fade;slide_number:false;bullets:false;timer:true;pause_on_hover:true;resume_on_mouseout:true;">
<?php 
$args = array( 'post_type' => 'testimonial', 'orderby' => 'rand' );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li class="testimonial-item large-12 columns">
						<h2 class="testimonial-text tk-futura-pt"><span style="font-family: serif;font-size:4rem;color:#ef8229;">&#8220;</span><?php echo the_field('testimonial_text', $post);?><span style="font-family: serif;font-size:4rem;color:#ef8229;">&#8221;</span></h2>
					<div class="testimonial-byline"><?php echo the_field('testimonial_from', $post);?></div>
					<div class="testimonial-site"><?php echo the_field('testimonial_site', $post);?></div>
				</li>			
		<?php endforeach; 
		wp_reset_postdata();?>	
			</ul>	
		</div>			
</div>
-->
<div id="home-contact" class="">
	<div class="logo-contact show-for-medium-up">Contact Us</div>
	<div class="show-for-small-only">
		<?php slide_contact(); ?>
	</div>
</div>
<div id="lightbox-home"></div>				
<?php// footer_contact(); ?>	
<?php get_footer(); ?>