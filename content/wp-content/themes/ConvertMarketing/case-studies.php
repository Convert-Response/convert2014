<?php
/*
Template Name: Case Studies
*/
?>

<?php get_header(); ?>

<?php 			 
	$posts = get_field('featured_case_study');
	 
if( $posts ): ?>
	    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post);?>
	        <div id="case-study-top" class="section" style="background-image:url(<?php echo the_field('large_top_image', $post); ?>)">
	        	<div class="row">
	        		<div class="client-info large-12 columns"><h2>Featured Case Study</h2></div>
					<div class="client-info large-12 columns">
						<a href="<?php the_permalink(); ?>"><h2 class="study-title tk-futura-pt"><?php the_title(); ?></h2></a>
					</div>	
	        	</div>	
			</div>		
	<?php endforeach; ?>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>	

<!--
<div id="case-study-showcase" class="">
<?php 			 
				$posts = get_field('case_studies_order');
				 
			if( $posts ): ?>
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post);?>
			<div class="left showcase-item" style="background-image:url(<?php echo the_field('client_image', $post);?>)"> 
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
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>	
</div>	
-->

<div id="case-study-showcase" class="row">
	<div class="large-12 columns">
		<h1 class="case-home-title">CASE STUDIES</h1>
	</div>
<?php 			 
				$posts = get_field('case_studies_order');
				 
			if( $posts ): ?>
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post);?>
		<div class="large-6 columns">
			<div class="showcase-item" style="background-image:url(<?php echo the_field('client_image', $post);?>)"> 
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
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>	
</div>	

<?php footer_contact(); ?>			

<?php get_footer(); ?>