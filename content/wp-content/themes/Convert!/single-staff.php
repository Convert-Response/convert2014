<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-12 medium-12 columns first clearfix" role="main">
	
						<div class="row">
						
							<div id="avatar" class="large-5 columns">							
								<?php 
								
									$image = get_field('animated_gif');
									
									if( !empty($image) ): ?>
								    <div class="round static" style="background-image:url(<?php if ( has_post_thumbnail() ) { echo wp_get_attachment_url( get_post_thumbnail_id() ); } ?>);"></div>									
									<div class="round animated" style="background-image:url(<?php echo $image['url']; ?>);"></div>
								<?php else: ?>
								    <div class="round" style="background-image:url(<?php if ( has_post_thumbnail() ) { echo wp_get_attachment_url( get_post_thumbnail_id() ); } ?>);"></div>									
								<?php endif; ?>
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
							<div id="bio-text" class="large-7 columns">
								<h1><?php the_title(); ?></h1>
								<div class="staff-roll"><?php the_field('staff_job_title', $post->ID);?></div>
								<div class="staff-text">
									<?php while (have_posts()) : the_post();
										the_content();
									endwhile;?>						
								</div>															
							</div>	
													
						</div>
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
			<div id="staff-questions">
				<div class="row">
					<div class="large-12 medium-12 columns first clearfix">
						<?php if( have_rows('staff_questions') ): ?>
						 
							<ul class="row">
						 
							<?php while( have_rows('staff_questions') ): the_row(); 
						 
								// vars
								$questions = get_sub_field('question');
								$answers = get_sub_field('answer');
						 
								?>
						 
								<li class="slide large-3 columns">

								    <div class="question"><?php echo $questions; ?></div>						 
								    <div class="answer"><?php echo $answers; ?></div>
						 
								</li>
						 
							<?php endwhile; ?>
						 
							</ul>
						 
						<?php endif; ?>
					</div>
				</div>	
			</div>
<?php get_footer(); ?>