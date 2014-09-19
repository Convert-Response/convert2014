<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div id="about" class="section show-for-large-up">
	<div class="row">
		<div class="large-12">
			<div class="tagline tk-futura-pt">Online marketing is more than just our profession. <b>It’s our calling.</b></div>
		</div>
	</div>		
</div>				
<div id="our-staff" name="our-staff">
	<div class="row">
			<h3 class="large-12 large-offset-0 small-10 small-offset-1 columns tk-futura-pt">WONDERING WHO'S BEHIND THE MAGIC?</h3>	
			<h1 class="large-12 columns tk-futura-pt">MEET THE FACES OF CONVERT</h1>		
			<?php 
			 
			$posts = get_field('staff_order');
			
			 
			if( $posts ): ?>
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			<div class="large-3 medium-4 small-12 columns left staff-container">
					<div class="staff-wrap" style="background-image:url(<?php if ( has_post_thumbnail() ) { echo wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail')); } ?>);">
					<a href="<?php the_permalink(); ?>" class="profile-link"></a>
						<div class="staff-fill"></div>
						<div class="staff-member">
							<div class="social-links">
							<?php 
								
							$facebook = get_field('facebook', $post->ID);
							$twitter = get_field('twitter', $post->ID);
							$instagram =  get_field('instagram', $post->ID);
							$linkedin = get_field('linkedin', $post->ID);
							$github = get_field('github', $post->ID);
							$dribble = get_field('dribble', $post->ID);									
							$flickr = get_field('flickr', $post->ID);	
							$behance = get_field('behance', $post->ID);
							
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
									<?php if( $github ):?>	
										<div class="github social"><a href="<?php the_field('github', $post->ID);?>" target="_blank" title="Github"><i class="fi-social-github large"></i></a></div>
									<?php endif; ?>	
									<?php if( $dribble ):?>	
										<div class="dribble social"><a href="<?php the_field('dribble', $post->ID);?>" target="_blank" title="Dribble"><i class="fi-social-dribbble large"></i></a></div>
									<?php endif; ?>	
									<?php if( $flickr ):?>	
										<div class="flickr social"><a href="<?php the_field('flickr', $post->ID);?>" target="_blank" title="Flickr"><i class="fi-social-flickr large"></i></a></div>
									<?php endif; ?>	
									<?php if( $behance ):?>	
										<div class="behance social"><a href="<?php the_field('behance', $post->ID);?>" target="_blank" title="Behance"><i class="fi-social-behance large"></i></a></div>
									<?php endif; ?>																			
							</div>
						</div>	
					</div>
					<a href="<?php the_permalink(); ?>" class="profile-link"><h5><div class="staff-member-name tkff-dagny-web-pro"><?php the_title(); ?></div></h5></a>
					<div class="staff-roll"><?php the_field('staff_job_title', $post->ID);?></div>
				</div> 
			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>	
	</div>			
</div> <!-- end #top-services -->	
<div id="careers" name="careers">
	<div class="row">
	<h3 class="large-12 large-offset-0 small-10 small-offset-1 columns tk-futura-pt">LOOKING FOR A CAREER IN MARKETING?</h3>	
	<h1 class="large-12 columns tk-futura-pt">YOU'RE IN LUCK. WE'RE HIRING!</h1>
	<?php if( have_rows('career_post') ): ?>
		
			<?php while( have_rows('career_post') ): the_row(); 
		
				// vars
				$content = get_sub_field('career_text');
				$title = get_sub_field('career_title');
		
				?>
		
				<div class="large-12 columns career-post">
		
					<?php if( $title ): ?>
						<h2><?php echo $title; ?></h2>
					<?php endif; 
						
					$stringURL = str_replace(' ', '-', $title); // Converts spaces to dashes
					$stringURL = urlencode($title);
					
					$stringText = str_replace(' ', '-', $content); // Converts spaces to dashes
					$stringText = urlencode($content);
						
					?>
		
				    <div class="career-text"><?php echo $content; ?></div>
					<a class="career-arrow" href="/job-application?job=<?php echo $stringURL; ?>&description=<?php echo $stringText; ?>">Apply for this job <i class="fi-arrow-right medium"></i></a>
				</div>
		
			<?php endwhile; ?>
		
		<?php else: ?>	
				<div class="large-12 columns">
		
						<h2>There are currently no job postings. Please check back soon!</h2>
				</div>			
		<?php endif; ?>
	</div>
</div> <!-- end #our-process -->						
<?php get_footer(); ?>