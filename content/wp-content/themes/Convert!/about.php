<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div id="about" class="section show-for-large-up">
	<div class="row">
		<div class="large-12">
			<div class="tagline tk-futura-pt">We are a creative integrated marketing firm blah blah blah.</div>
		</div>
	</div>		
</div>			
<div id="about-text" name="about-us">
	<div class="row">
		<div class="large-12">
		<h1 class="tk-futura-pt">About Us</h1>
		<div class="content">
			<?php while (have_posts()) : the_post();/* Start loop */ ?>
				<?php the_content(); ?>
			<?php endwhile; /* End loop */ ?>
		</div>
		</div>		
	</div>		
</div>		
		
<div id="our-staff" name="our-staff">
	<div class="row">
		<div class="large-12">
		<h1 class="tk-futura-pt">Our Staff</h1>		
				<?php 
				 
				$posts = get_field('staff_order');
				
				 
				if( $posts ): ?>
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				<div class="large-3 medium-4 small-12 columns left staff-container">
					<div class="round staff-wrap" style="background-image:url(<?php if ( has_post_thumbnail() ) { echo wp_get_attachment_url( get_post_thumbnail_id() ); } ?>);">
						<div class="staff-fill"></div>
						<div class="staff-member">
							<div class="social-links">
							<?php 
								
							$facebook = get_field('facebook', $post->ID);
							$twitter = get_field('twitter', $post->ID);
							$instagram =  get_field('instagram', $post->ID);
							$linkedin = get_field('linkedin', $post->ID);
							
							if( $facebook ):?>
								<div class="facebook social"><a href="<?php the_field('facebook', $post->ID);?>" target="_blank" title="Facebook"><i class="fi-social-facebook large"></i></a></div>
							<?php endif; ?>	
							<?php if( $twitter ):?>	
								<div class="twitter social"><a href="<?php the_field('twitter', $post->ID);?>" target="_blank" title="Twitter"><i class="fi-social-twitter large"></i></a></div>
							<?php endif; ?>		
							<?php if( $instagram ):?>	
								<div class="instagram social"><a href="<?php the_field('instagram', $post->ID);?>" target="_blank" title="Instagram"><i class="fi-social-instagram large"></i></a></div>
							<?php endif; ?>	
							<?php if( $linkedin ):?>	
								<div class="linkedin social"><a href="<?php the_field('linkedin', $post->ID);?>" target="_blank" title="LinkedIn"><i class="fi-social-linkedin large"></i></a></div>
							<?php endif; ?>																		
							</div>
						</div>	
					</div>
					<a href="<?php the_permalink(); ?>"><h5><div class="staff-member-name tkff-dagny-web-pro"><?php the_title(); ?></div></h5></a>
					<div class="staff-roll"><?php the_field('staff_job_title', $post->ID);?></div>
				</div> 
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>	
		</div>
	</div>			
</div> <!-- end #top-services -->	
<div id="careers" name="careers">
	<div class="row">
		<div class="large-12">
		<h1 class="tk-futura-pt">Careers</h1>
			<?php 
				$args = array( 'post_type' => 'career' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="career-teaser">
						<div class="large-12 career-title tkff-dagny-web-pro"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
						<div class="large-12 career-body"><?php echo get_the_excerpt('Read More'); ?></div>
					</div><br>
				<?php
				endwhile;
			
			?>
		</div>
	</div>
</div> <!-- end #our-process -->					
<?php footer_contact(); ?>	
<?php get_footer(); ?>